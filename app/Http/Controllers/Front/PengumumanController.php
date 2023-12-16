<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;

class PengumumanController extends Controller
{
    public function index($slug)
    {
        $data = Pengumuman::where('slug', $slug)->first();
        return view('front.pengumuman', compact('data'));
    }
}
