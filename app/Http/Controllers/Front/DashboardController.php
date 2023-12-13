<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Berita;
use App\Models\Foto;
use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
    public function index()
    {
        $berita = Berita::where('status', 'Publish')->orderByDesc('id')->limit(4)->get();
        $foto = Foto::orderByDesc('id')->limit(4)->get();
        $video = Video::orderByDesc('id')->limit(4)->get();

        return view('front.beranda', compact('berita', 'foto', 'video'));
    }

    public function kontak()
    {
        return view('front.kontak');
    }

    public function sambutan()
    {
        return view('front.sambutan');
    }

    public function pencarian()
    {
        $kata = null;
        if (isset($_GET['kata'])) {
            $kata = ($_GET['kata']);
        }

        $data = DB::table('kategoris')
            ->join('beritas', 'kategoris.id', '=', 'beritas.id_kategori')
            ->where('beritas.status', 'Publish')
            ->where('beritas.judul', 'like', '%' . $kata . '%')
            ->Orwhere('kategoris.nama', 'like', '%' . $kata . '%')
            ->orderByDesc('kategoris.id')
            ->get();
        $count = count($data);
        $berita = Berita::inRandomOrder()->where('status', 'Publish')->orderByDesc('id')->limit(4)->get();
        return view('front.pencarian', compact('data', 'count', 'kata', 'berita'));
    }

    public function hasil_pencarian()
    {
    }
}
