<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Profil;

class ProfilController extends Controller
{
    public function index()
    {

        $data = Profil::where('id',1)->first();
        return view('front.profil',compact('data'));
    }


}
