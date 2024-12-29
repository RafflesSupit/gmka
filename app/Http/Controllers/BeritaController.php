<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use Illuminate\Support\Facades\Auth;
use HTMLPurifier_Config;
use HTMLPurifier;

class BeritaController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        return view('berita.create',compact('user'));
    }
    public function view()
    {
        $user = Auth::user();
        $perPage = 8;
        $beritas = Berita::latest()->paginate($perPage);
        $latestNews = Berita::latest()->first();

        $beritaDitampilkanSebelumnya = ($beritas->currentPage() - 1) * $perPage;
        $belowNews = Berita::where('created_at', '<', $latestNews->created_at)
                        ->orderBy('created_at', 'desc')
                        ->skip($beritaDitampilkanSebelumnya + 0)
                        ->take(4)
                        ->get();

        $rightNews = Berita::where('created_at', '<', $latestNews->created_at)
                        ->orderBy('created_at', 'desc')
                        ->skip($beritaDitampilkanSebelumnya + 4)
                        ->take(3)
                        ->get();

        return view('berita.view', compact('beritas', 'user', 'latestNews', 'belowNews', 'rightNews'));
    }


    public function show($id)
    {
        $user = Auth::user();
        $berita = Berita::findOrFail($id);
        return view('berita.show',compact('berita','user'));
    }
    public function edit($id)
    {
        $berita = Berita::findOrFail($id);
        $editberita = Berita::findOrFail($id);
        return view('admin.berita.edit',compact('editberita','berita'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'kategori' => 'required|string|max:45',
            'gambar' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5068',
        ]);

        $berita = Berita::findOrFail($id);
        $data = $request->all();
    
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
    
            if ($berita->gambar && file_exists(public_path('storage/' . $berita->gambar))) {
                unlink(public_path('storage/' . $berita->gambar));
            }
        }
    
        $berita->update($data);
        return redirect()->route('admin.berita.edit', $berita->id)->with('success', 'Berita updated successfully');
    }

    public function delete($id)
    {
        $berita = Berita::findOrFail($id);
        $berita->delete();
        return redirect()->route('admin.adminberita')->with('success', 'Berita berhasil terhapus.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'kategori' => 'required|string|max:45',
            'gambar' => 'image|mimes:jpeg,png,jpg,gif,svg|max:5068',
        ]);

        $config = HTMLPurifier_Config::createDefault();
        $purifier = new HTMLPurifier($config);

        $clean_html = $purifier->purify($request->input('konten'));

        $data = $request->all();

        $data['konten'] = $clean_html;

        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
        }

        Berita::create($data);

        return redirect()->route('berita.create')->with('success', 'Berita berhasil diupload.');
    }

    
}
