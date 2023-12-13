<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;

class BeritaController extends Controller
{
    public function index()
    {
        $data = Berita::where('status', 'Publish')->orderByDesc('id')->get();
        return view('front.berita', compact('data'));
    }

    public function show($slug)
    {
        $data = Berita::where('slug', $slug)->where('status', 'Publish')->first();
        return view('front.berita-detail', compact('data'));
    }
}
