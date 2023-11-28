<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Berita;
use App\Models\Kategori;
use Illuminate\Support\Facades\Storage;
use File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;


class BeritaController extends Controller
{
    Public function index()
    {
        $datas = Berita::with('kategori')->orderByDesc('id')->get();
        return view('back.berita.index',["datas" => $datas]);
    }

    Public function show($id)
    {
        $data = Berita::where('id',$id)->first();
        $datas = Kategori::orderByDesc('id')->get();
        return view('back.berita.show',["data" => $data, 'datas' => $datas, 'id' => $id]);
    }

    Public function create()
    {
        $datas = Kategori::orderByDesc('id')->get();
        return view('back.berita.create',["datas" => $datas]);
    }

    public function storage(Request $request)
    {

        $validated = $request->validate([
            'judul' => 'required',
            // 'isi' => 'required',
            'status' => 'required',
            'id_kategori' => 'required',
            'cover' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ],[
         'judul.required'     => 'Judul tidak boleh kosong',
        //  'isi.required'  => 'Isi tidak boleh kosong',
         'status.required'  => 'Status tidak boleh kosong',
         'id_kategori.required'  => 'Kategori tidak boleh kosong',
         'cover.required'  => 'Gambar cover tidak boleh kosong',
         'cover.mimes'  => 'Gambar cover harus format jpeg,png,jpg',
         'cover.max'  => 'Maximal ukuran gambar cover 2048 Mb',
        ]);

        $data = new Berita();
        $data->judul = $request->judul;
        $data->isi = $request->isi;
        $data->id_kategori = $request->id_kategori;
        $data->status = $request->status;
        $data->slug = Str::slug($request->judul);

        if(!empty($request->cover)) {
          $nama_cover = 'berita-'. Str::random(10) . '.' . $request->cover->extension();
          $path = public_path('gambar/cover');
          if (!empty($data->cover) && file_exists($path . '/' . $data->cover)) :
              unlink($path . '/' . $data->cover);
          endif;
          $data->cover = 'gambar/cover/' .$nama_cover;
          $request->cover->move(public_path('gambar/cover/'), $nama_cover);
      }
        $data->save();
        Alert::success('Info', 'Tambah data berita berhasil ');
        return redirect('/admin/berita');
    }

    Public function edit($id)
    {
        $data = Berita::where('id',$id)->first();
        $datas = Kategori::orderByDesc('id')->get();
        return view('back.berita.edit',["data" => $data, 'datas' => $datas, 'id' => $id]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul' => 'required',
            // 'isi' => 'required',
            'status' => 'required',
            'id_kategori' => 'required',
            'cover' => 'image|mimes:jpeg,png,jpg|max:2048',
        ],[
         'judul.required'     => 'Judul tidak boleh kosong',
        //  'isi.required'  => 'Isi tidak boleh kosong',
         'status.required'  => 'Status tidak boleh kosong',
         'id_kategori.required'  => 'Kategori tidak boleh kosong',
         'cover.mimes'  => 'Gambar cover harus format jpeg,png,jpg',
         'cover.max'  => 'Maximal ukuran gambar cover 2048 Mb',
        ]);

      $data = Berita::find($id);
      $data->judul = $request->judul;
      $data->isi = $request->isi;
      $data->id_kategori = $request->id_kategori;
      $data->status = $request->status;
      $data->slug = Str::slug($request->judul);

      if(!empty($request->cover)) {
        File::delete($data->cover);
        $nama_cover = $data->slug_alumi .'-'. Str::random(10) . '.' . $request->cover->extension();
        $path = public_path('gambar/cover');
        if (!empty($data->cover) && file_exists($path . '/' . $data->cover)) :
            unlink($path . '/' . $data->cover);
        endif;
        $data->cover = 'gambar/cover/' .$nama_cover;
        $request->cover->move(public_path('gambar/cover/'), $nama_cover);
    }
      $data->update();
      Alert::success('Info', 'Ubah data berita berhasil ');
      return redirect('/admin/berita');
    }

    public function destrory($id)
    {
        $data = Berita::find($id);
        if($data->cover){
           File::delete($data->cover);
       }
       $data->delete();
       return redirect('/admin/berita');

    }
}
