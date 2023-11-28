<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Foto;
use Illuminate\Http\Request;

class FotoController extends Controller
{
    public function index()
    {

        $data = Foto::orderByDesc('id')->get();
        return view('front.foto',compact('data'));

    }


}
