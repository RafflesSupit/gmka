<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Acara;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller {
    public function dashboard() {
        $user = Auth::user();
        $beritas = Berita::latest()->take(5)->get();
        $acaras = Acara::latest()->take(5)->get();
        return view('dashboard', compact('user','beritas','acaras'));
    }

}
