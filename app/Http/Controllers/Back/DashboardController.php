<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Alumi;
use App\Models\Berita;
use App\Models\Foto;
use App\Models\Prestasi;
use App\Models\Video;
use App\Models\Pengaturan;
use App\Models\Guru;
use App\Models\Jurusan;
use App\Models\Pengumuman;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $alumi = Alumi::count();

        $berita = Berita::count();
        $guru = Guru::count();
        $jurusan = Jurusan::count();
        $pengumuman = Pengumuman::count();
        $publish = Berita::where('status', 'publish')->count();
        $draft = Berita::where('status', 'draft')->count();

        $foto = Foto::count();
        $prestasi = Prestasi::count();
        $video = Video::count();

        // Visitor
        $bulanIni = Carbon::now()->format('m');
        $tahunIni = Carbon::now()->format('Y');
        $today = Carbon::today()->toDateString();

        $total = DB::table('laravisits')->count();
        $hari = DB::table('laravisits')->whereDate('created_at', $today)->count();
        $bulan = DB::table('laravisits')
            ->whereMonth('created_at', $bulanIni)
            ->whereYear('created_at', $tahunIni)
            ->count();
        $tahun = DB::table('laravisits')
            ->whereYear('created_at', $tahunIni)
            ->count();


        return view('back.dashboard.index', compact('alumi', 'berita', 'foto', 'prestasi', 'video', 'publish', 'draft', 'total', 'hari', 'bulan', 'tahun', 'pengumuman', 'guru', 'jurusan'));
    }
}
