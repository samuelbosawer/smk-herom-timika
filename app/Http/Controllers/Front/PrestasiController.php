<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Prestasi;
use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        $data = Prestasi::orderByDesc('id')->get();
        return view('front.prestasi',compact('data'));
    }


}
