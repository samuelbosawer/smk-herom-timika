<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use App\Models\Guru;
use File;

class GuruController extends Controller
{
    public function index()
    {
        $datas = Guru::orderByDesc('id')->get();
        return view('back.guru.index', ["datas" => $datas]);
    }

    public function create()
    {
        return view('back.guru.create');
    }

    public function storage(Request $request)
    {
        $validated = $request->validate([
            'nama_guru' => 'required',
            'jabatan_guru' => 'required',
            'foto_guru' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'nama_guru.required'     => 'Nama tidak boleh kosong',
            'jabatan_guru.required'  => 'Jabatan tidak boleh kosong',
            'jurusan.required'  => 'Jurusan tidak boleh kosong',
            'foto_guru.mimes'  => 'Foto harus format jpeg,png,jpg',
            'foto_guru.max'  => 'Maximal ukuran foto 2048 Mb',
        ]);


        $data = new Guru;
        $data->nama_guru = $request->nama_guru;
        $data->jabatan_guru = $request->jabatan_guru;
        $data->foto_guru = $request->foto_guru;

        if (!empty($request->foto_guru)) {
            $nama_foto_guru = 'guru-' . Str::random(10) . '.' . $request->foto_guru->extension();
            $path = public_path('gambar/guru');
            if (!empty($data->foto_guru) && file_exists($path . '/' . $data->foto_guru)) :
                unlink($path . '/' . $data->foto_guru);
            endif;
            $data->foto_guru = 'gambar/guru/' . $nama_foto_guru;
            $request->foto_guru->move(public_path('gambar/guru/'), $nama_foto_guru);
        }
        $data->save();
        Alert::success('Info', 'Tambah data guru berhasil ');
        return redirect('/admin/guru');
    }

    public function edit($id)
    {

        $data = guru::where('id', $id)->first();
        return view('back.guru.edit', compact('data', 'id'));
    }

    public function update(Request $request, $id)
    {
        if ($id == null) {
            Alert::success('Error', 'Data tidak ditemukan !! ');
            return redirect('/admin/guru');
        }

        $validated = $request->validate([
            'nama_guru' => 'required',
            'jabatan_guru' => 'required',
            'foto_guru' => 'image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'nama_guru.required'     => 'Nama guru tidak boleh kosong',
            'jabatan_guru.required'  => 'Jabatan tidak boleh kosong',
            'jurusan.required'  => 'Jurusan tidak boleh kosong',
            'foto_guru.mimes'  => 'Foto harus format jpeg,png,jpg',
            'foto_guru.max'  => 'Maximal ukuran foto 2048 Mb',
        ]);

        $data = Guru::find($id);
        $data->nama_guru = $request->nama_guru;
        $data->jabatan_guru = $request->jabatan_guru;

        if (!empty($request->foto_guru)) {
            File::delete($data->foto_guru);
            $nama_foto_guru = 'guru-' . Str::random(10) . '.' . $request->foto_guru->extension();
            $path = public_path('gambar/guru');
            if (!empty($data->foto_guru) && file_exists($path . '/' . $data->foto_guru)) :
                unlink($path . '/' . $data->foto_guru);
            endif;
            $data->foto_guru = 'gambar/guru/' . $nama_foto_guru;
            $request->foto_guru->move(public_path('gambar/guru/'), $nama_foto_guru);
        }
        $data->update();
        Alert::success('Info', 'Ubah data guru berhasil ');
        return redirect('/admin/guru');
    }

    public function destrory($id)
    {
        $data = Guru::find($id);
        if ($data->foto_guru) {
            File::delete($data->foto_guru);
        }
        $data->delete();
        return redirect()->back();
    }
}
