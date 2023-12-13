<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Profil;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class ProfilController extends Controller
{
    public function index($id = 1)
    {
        $data = Profil::where("id", $id)->first();
        return view('back.profil.index', ["id" => $id, 'data' => $data]);
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'profil' => 'required',
        ], [
            'profil.required'     => 'Profil tidak boleh kosong',
        ]);
        $data = Profil::find($id);
        $data->profil = $request->profil;
        $data->update();
        Alert::success('Info', 'Ubah data profil berhasil ');
        return redirect('/admin/profil');
    }

    public function visi_misi($id = 1)
    {
        $data = Profil::where("id", $id)->first();
        return view('back.profil.visi_misi', ["id" => $id, 'data' => $data]);
    }

    public function visi_misi_update(Request $request, $id)
    {
        $validated = $request->validate([
            'visi' => 'required',
            'misi' => 'required',
        ], [
            'visi.required'     => 'Visi tidak boleh kosong',
            'misi.required'     => 'Misi tidak boleh kosong',
        ]);
        $data = Profil::find($id);
        $data->visi = $request->visi;
        $data->misi = $request->misi;
        $data->update();
        Alert::success('Info', 'Ubah data visi & misi berhasil ');
        return redirect('/admin/visi-misi');
    }

    public function struktur($id = 1)
    {
        $data = Profil::where("id", $id)->first();
        return view('back.profil.struktur', ["id" => $id, 'data' => $data]);
    }

    public function struktur_update(Request $request, $id)
    {
        $validated = $request->validate([
            'struktur' => 'required',
        ], [
            'struktur.required'     => 'struktur tidak boleh kosong',
        ]);
        $data = Profil::find($id);
        $data->struktur = $request->struktur;
        $data->update();
        Alert::success('Info', 'Ubah data struktur berhasil ');
        return redirect('/admin/struktur-organisasi');
    }
}
