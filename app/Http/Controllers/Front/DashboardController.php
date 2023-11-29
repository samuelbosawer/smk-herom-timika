<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Foto;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $berita = Berita::where('status','Publish')->orderByDesc('id')->limit(4)->get();
        $foto = Foto::orderByDesc('id')->limit(4)->get();
        $video = Video::orderByDesc('id')->limit(4)->get();

        return view('front.beranda',compact('berita','foto','video'));
    }

    public function kontak()
    {
        return view('front.kontak');
    }


}
