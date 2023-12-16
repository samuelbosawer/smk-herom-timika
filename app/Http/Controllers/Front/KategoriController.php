<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Berita;

class KategoriController extends Controller
{
    public function index($id = null)
    {
        $data = DB::table('kategoris')
            ->join('beritas', 'kategoris.id', '=', 'beritas.id_kategori')
            ->where('beritas.status', 'Publish')
            ->where('kategoris.slug', 'like', '%' . $id . '%')
            ->orderByDesc('kategoris.id')
            ->get();
        $berita = Berita::inRandomOrder()->where('status', 'Publish')->orderByDesc('id')->limit(4)->get();


        return view('front.kategori', compact('data', 'id', 'berita'));
    }
}
