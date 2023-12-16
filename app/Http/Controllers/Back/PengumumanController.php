<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Pengumuman;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use File;

class PengumumanController extends Controller
{
    public function index()
    {
        $datas = Pengumuman::orderByDesc('id')->get();
        return view('back.pengumuman.index', ["datas" => $datas]);
    }

    public function create()
    {
        return view('back.pengumuman.create');
    }

    public function storage(Request $request)
    {
        $validated = $request->validate([
            'judul_pengumuman' => 'required',
            'isi_pengumuman' => 'required',
            'cover_foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'judul_pengumuman.required'     => 'Judul pengumuman tidak boleh kosong',
            'isi_pengumuman.required'     => 'Isi pengumuman tidak boleh kosong',
            'cover_foto.mimes'  => 'Foto harus format jpeg,png,jpg',
            'cover_foto.max'  => 'Maximal ukuran foto 2048 Mb',
            'cover_foto.required'  => 'Gambar tidak boleh kosong',
        ]);


        $data = new Pengumuman;
        $data->judul_pengumuman = $request->judul_pengumuman;
        $data->isi_pengumuman = $request->isi_pengumuman;
        $data->slug = Str::slug($request->judul_pengumuman);

        if (!empty($request->cover_foto)) {
            $nama_cover_foto = 'pengumuman-' . Str::random(10) . '.' . $request->cover_foto->extension();
            $path = public_path('gambar/pengumuman');
            if (!empty($data->cover_foto) && file_exists($path . '/' . $data->cover_foto)) :
                unlink($path . '/' . $data->cover_foto);
            endif;
            $data->cover_foto = 'gambar/pengumuman/' . $nama_cover_foto;
            $request->cover_foto->move(public_path('gambar/pengumuman/'), $nama_cover_foto);
        }
        $data->save();
        Alert::success('Info', 'Tambah data pengumuman berhasil ');
        return redirect('/admin/pengumuman');
    }

    public function edit($id)
    {

        $data = Pengumuman::where('id', $id)->first();
        return view('back.pengumuman.edit', compact('data', 'id'));
    }

    public function update(Request $request, $id)
    {
        if ($id == null) {
            Alert::success('Error', 'Data tidak ditemukan !! ');
            return redirect('/admin/pengumuman');
        }

        $validated = $request->validate([
            'judul_pengumuman' => 'required',
            'isi_pengumuman' => 'required',
            'cover_foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ], [
            'judul_pengumuman.required'     => 'Judul pengumuman tidak boleh kosong',
            'isi_pengumuman.required'     => 'Isi pengumuman tidak boleh kosong',
            'cover_foto.mimes'  => 'Foto harus format jpeg,png,jpg',
            'cover_foto.max'  => 'Maximal ukuran foto 2048 Mb',
        ]);



        $data = Pengumuman::find($id);
        $data->judul_pengumuman = $request->judul_pengumuman;
        $data->isi_pengumuman = $request->isi_pengumuman;
        $data->slug = Str::slug($request->judul_pengumuman);

        if (!empty($request->cover_foto)) {
            File::delete($data->cover_foto);
            $nama_cover_foto = 'pengumuman-' . Str::random(10) . '.' . $request->cover_foto->extension();
            $path = public_path('gambar/pengumuman');
            if (!empty($data->cover_foto) && file_exists($path . '/' . $data->cover_foto)) :
                unlink($path . '/' . $data->cover_foto);
            endif;
            $data->cover_foto = 'gambar/pengumuman/' . $nama_cover_foto;
            $request->cover_foto->move(public_path('gambar/pengumuman/'), $nama_cover_foto);
        }
        $data->update();
        Alert::success('Info', 'Ubah data pengumuman berhasil ');
        return redirect('/admin/pengumuman');
    }

    public function destrory($id)
    {
        $data = Pengumuman::find($id);
        if ($data->cover_foto) {
            File::delete($data->cover_foto);
        }
        $data->delete();
        return redirect()->back();
    }
}
