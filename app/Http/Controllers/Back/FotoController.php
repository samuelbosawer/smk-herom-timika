<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Foto;

class FotoController extends Controller
{
    Public function index()
    {
         $datas = Foto::orderByDesc('id')->get();
         return view('back.foto.index',["datas" => $datas]);
    }

    Public function show($id)
    {
    }

    Public function create()
    {
    }

    public function storage(Request $request)
    {


    }

    Public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {

    }

    public function destrory($id)
    {

    }
}
