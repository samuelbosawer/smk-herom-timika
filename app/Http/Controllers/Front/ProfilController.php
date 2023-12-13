<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;
use App\Models\Berita;

class ProfilController extends Controller
{
    public function index()
    {

        $data = Profil::where('id', 1)->first();
        return view('front.profil', compact('data'));
    }

    public function visi_misi()
    {
        $data = Profil::where('id', 1)->first();
        return view('front.visi', compact('data'));
    }
    public function struktur()
    {
        $data = Profil::where('id', 1)->first();
        return view('front.struktur', compact('data'));
    }
}
