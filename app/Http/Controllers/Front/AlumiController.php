<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Alumi;
use Illuminate\Http\Request;

class AlumiController extends Controller
{
    public function index()
    {
        $data = Alumi::orderByDesc('id')->get();
        return view('front.alumi', compact('data'));
    }

    public function show($slug)
    {
    }
}
