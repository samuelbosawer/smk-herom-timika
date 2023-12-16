<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Jurusan;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;

class JurusanController extends Controller
{
    public function index()
    {
        $datas = Jurusan::orderByDesc('id')->get();
        return view('back.jurusan.index', ["datas" => $datas]);
    }

    public function show($id)
    {
        $data = Jurusan::where("id", $id)->first();
        return view('back.jurusan.show', compact('data', 'id'));
    }

    public function create()
    {
        return view('back.jurusan.create');
    }

    public function storage(Request $request)
    {
        $validates = $request->validate([
            "nama_jurusan" => 'required',
            "profil_jurusan" => 'required'
        ], [
            "nama_jurusan.required" => 'Nama jurusan tidak boleh kosong',
            "profil_jurusan.required" => 'Profil jurusan tidak boleh kosong',
        ]);

        $data = new Jurusan;
        $data->nama_jurusan = $request->nama_jurusan;
        $data->profil_jurusan = $request->profil_jurusan;
        $data->slug = Str::slug($data->nama_jurusan);
        $data->save();
        Alert::success('Info', 'Tambah data jurusan  berhasil ');
        return redirect('/admin/jurusan');
    }

    public function edit($id)
    {
        $data = Jurusan::where("id", $id)->first();
        return view('back.jurusan.edit', ["id" => $id, "data" => $data]);
    }

    public function update(Request $request, $id)
    {
        $validates = $request->validate([
            "nama_jurusan" => 'required',
            "profil_jurusan" => 'required'
        ], [
            "nama_jurusan.required" => 'Nama jurusan tidak boleh kosong',
            "profil_jurusan.required" => 'Profil jurusan tidak boleh kosong',
        ]);

        $data = Jurusan::find($id);
        $data->nama_jurusan = $request->nama_jurusan;
        $data->profil_jurusan = $request->profil_jurusan;
        $data->slug = Str::slug($data->nama_jurusan);
        $data->update();
        Alert::success('Info', 'Data jurusan berhasil diubah');
        return redirect('/admin/jurusan');
    }

    public function destrory($id)
    {
        $data = Jurusan::find($id);
        $data->delete();
        return redirect('/admin/jurusan');
    }
}
