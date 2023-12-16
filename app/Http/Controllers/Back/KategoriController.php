<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Kategori;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        $datas = Kategori::orderByDesc('id')->get();
        return view('back.kategori.index', ["datas" => $datas]);
    }

    public function show($id)
    {
    }

    public function create()
    {
        return view('back.kategori.create');
    }

    public function storage(Request $request)
    {
        $validates = $request->validate([
            "nama" => 'required'
        ], [
            "nama.required" => 'Nama kategori tidak boleh kosong'
        ]);

        $data = new Kategori;
        $data->nama = $request->nama;
        $data->slug = Str::slug($data->nama);
        $data->save();
        Alert::success('Info', 'Tambah data kategori berita berhasil ');
        return redirect('/admin/kategori');
    }

    public function edit($id)
    {
        $data = Kategori::where("id", $id)->first();
        return view('back.kategori.edit', ["id" => $id, "data" => $data]);
    }

    public function update(Request $request, $id)
    {
        $validates = $request->validate([
            "nama" => 'required'
        ], [
            "nama.required" => 'Nama kategori tidak boleh kosong'
        ]);

        $data = Kategori::find($id);
        $data->nama = $request->nama;
        $data->slug = Str::slug($data->nama);
        $data->update();
        Alert::success('Info', 'Data ketegori berita berhasil diubah');
        return redirect('/admin/kategori');
    }

    public function destrory($id)
    {
        $data = Kategori::find($id);
        $data->delete();
        return redirect()->back();
    }
}
