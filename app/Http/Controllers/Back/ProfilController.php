<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilController extends Controller
{
    Public function index($id = 1)
    {
        $data = Profil::where("id",$id)->first();
        return view('back.profil.index',["id" => $id, 'data' => $data]);
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'profil' => 'required',
        ],[
         'profil.required'     => 'Profil tidak boleh kosong',
     ]);
        $data = Profil::find($id);
        $data->profil = $request->profil;
        $data->update();
        Alert::success('Info', 'Ubah data profil berhasil ');
        return redirect('/admin/profil');
    }


}
