<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Alumi;
use App\Models\Berita;
use App\Models\Foto;
use App\Models\Prestasi;
use App\Models\Video;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $alumi = Alumi::count();

        $berita = Berita::count();
        $publish = Berita::where('status','publish')->count();
        $draft = Berita::where('status','draft')->count();

        $foto = Foto::count();
        $prestasi = Prestasi::count();
        $video = Video::count();
        return view('back.dashboard.index',compact('alumi','berita','foto','prestasi','video','publish','draft'));
    }
}
