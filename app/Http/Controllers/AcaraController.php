<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Acara;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use HTMLPurifier_Config;
use HTMLPurifier;

class AcaraController extends Controller
{
    public function create()
    {
        $user = Auth::user();
        return view('acara.create',compact('user'));
    }
    public function view()
    {
        $user = Auth::user();
        $perPage = 8;
        $acaras = Acara::latest()->paginate($perPage);
        $latestAcara = Acara::latest()->first();

        $acaraDitampilkanSebelumnya = ($acaras->currentPage() - 1) * $perPage;
        $belowAcara = Acara::where('created_at', '<', $latestAcara->created_at)
                        ->orderBy('created_at', 'desc')
                        ->skip($acaraDitampilkanSebelumnya + 0)
                        ->take(4)
                        ->get();

        $rightAcara = Acara::where('created_at', '<', $latestAcara->created_at)
                        ->orderBy('created_at', 'desc')
                        ->skip($acaraDitampilkanSebelumnya + 4)
                        ->take(3)
                        ->get();

        return view('Acara.view', compact('acaras', 'user', 'latestAcara', 'belowAcara', 'rightAcara'));
    }

    public function show($id)
    {
        $user = Auth::user();
        $acara = Acara::findOrFail($id);
        return view('acara.show', compact('user','acara'));
    }

    public function edit($id)
    {
        $acara = Acara::findOrFail($id);
        $editacara = Acara::findOrFail($id);
        return view('admin.acara.edit',compact('editacara','acara'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'kategori' => 'required|string|max:50',
            'gambar' => 'sometimes|image|mimes:jpeg,png,jpg,gif,svg,webp|max:5068',
        ]);

        $acara = Acara::findOrFail($id);
        $data = $request->all();
    
        if ($request->hasFile('gambar')) {
            $data['gambar'] = $request->file('gambar')->store('gambar', 'public');
    
            if ($acara->gambar && file_exists(public_path('storage/' . $acara->gambar))) {
                unlink(public_path('storage/' . $acara->gambar));
            }
        }
    
        $acara->update($data);
        return redirect()->route('admin.acara.edit', $acara->id)->with('success', 'Acara updated successfully');
    }

    public function delete($id)
    {
        $acara = Acara::findOrFail($id);
        $acara->delete();
        return redirect()->route('admin.adminacara')->with('success', 'Acara berhasil terhapus.');
    }

    public function store(Request $request)
    {
        $request->validate([
            'judul' => 'required|string|max:255',
            'konten' => 'required|string',
            'kategori' => 'required|string|max:50',
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

        Acara::create($data);

        return redirect()->route('acara.create')->with('success', 'Acara berhasil diupload.');
    }

    
}
