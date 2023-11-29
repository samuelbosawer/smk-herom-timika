<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;

class VideoController extends Controller
{
    public function index()
    {
        $data = Video::orderByDesc('id')->get();
        return view('front.video', compact('data'));
    }


}
