<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;

class JurusanController extends Controller
{
    public function index($slug)
    {
        $data = Jurusan::where('slug', $slug)->first();
        return view('front.jurusan', compact('data'));
    }
}
