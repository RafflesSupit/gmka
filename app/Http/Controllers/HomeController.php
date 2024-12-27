<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Acara;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


class HomeController extends Controller
{
    public function index()
    {
        if(auth()->check()){
            return redirect()->route('dashboard');
        }
        $beritas = Berita::latest()->take(6)->get();
        //$acaras = Acara::latest()->take(6)->get();
        return view('welcome', compact('beritas',));
    }
    
    public function adminpanel()
    {
        $user = Auth::user();
        return view('/admin/panel', compact('user'));
    }

    public function adminacara()
    {
        $user = Auth::user();
        $acaras = Acara::latest()->get();
        return view('/admin/adminacara', compact('acaras','user'));
    }

    public function adminberita()
    {
        $user = Auth::user();
        $beritas = Berita::latest()->get();
        return view('/admin/adminberita', compact('beritas','user'));
    }

    public function adminCount()
    {
        $beritaCount = Berita::count();
        $acaraCount = Acara::count();
        $penggunaCount = User::count();

        return view('admin.panel', compact('beritaCount','acaraCount','penggunaCount'));

    }
    public function faci()
    {
        $user = Auth::user();
        return view('fasilitas.fasilitas',compact('user'));
    }
    public function about()
    {
        $user = Auth::user();
        return view('about.about',compact('user'));
    }

    public function docs()
    {
        $user = Auth::user();
        return view('docs.documentation',compact('user'));
    }

    public function contact(){
        $user = Auth::user();
        return view('contact.contact',compact('user'));
    }


}


