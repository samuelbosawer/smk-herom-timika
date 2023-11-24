<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Foto;
use File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

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
        return view('back.foto.create');
    }

    public function storage(Request $request)
    {
        $validated = $request->validate([
            'judul_foto' => 'required',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
        ],[
         'judul_foto.required'     => 'Judul foto tidak boleh kosong',
         'foto.required'  => 'Foto tidak boleh kosong',
         'foto.mimes'  => 'Foto harus format jpeg,png,jpg',
         'foto.max'  => 'Maximal ukuran foto 2048 Mb',
     ]);



        $data = new Foto;
        $data->judul_foto = $request->judul_foto;
        $data->link_foto = $request->link_foto;
        $slug = Str::slug($request->judul_foto);

        if(!empty($request->foto)) {
          $nama_foto = $slug .'-'. Str::random(10) . '.' . $request->foto->extension();
          $path = public_path('foto');
          if (!empty($data->foto) && file_exists($path . '/' . $data->foto)) :
              unlink($path . '/' . $data->foto);
          endif;
          $data->foto = 'foto/' .$nama_foto;
          $request->foto->move(public_path('foto/'), $nama_foto);
      }
        $data->save();
        Alert::success('Info', 'Tambah data foto berhasil ');
        return redirect('/admin/foto');

    }

    Public function edit($id)
    {
        $data = Foto::where("id",$id)->first();
        return view('back.foto.edit',["id" => $id, 'data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul_foto' => 'required',
            'foto' => 'image|mimes:jpeg,png,jpg|max:2048',
        ],[
         'judul_foto.required'     => 'Judul foto tidak boleh kosong',
         'foto.mimes'  => 'Foto harus format jpeg,png,jpg',
         'foto.max'  => 'Maximal ukuran foto 2048 Mb',
     ]);

        $data = Foto::find($id);
        $data->judul_foto = $request->judul_foto;
        $data->link_foto = $request->link_foto;
        $slug = Str::slug($request->judul_foto);

        if(!empty($request->foto)) {
        File::delete($data->foto);
          $nama_foto = $slug .'-'. Str::random(10) . '.' . $request->foto->extension();
          $path = public_path('foto');
          if (!empty($data->foto) && file_exists($path . '/' . $data->foto)) :
              unlink($path . '/' . $data->foto);
          endif;
          $data->foto = 'foto/' .$nama_foto;
          $request->foto->move(public_path('foto/'), $nama_foto);
      }
        $data->update();
        Alert::success('Info', 'Ubah data foto berhasil ');
        return redirect('/admin/foto');

    }

    public function destrory($id)
    {
        $data = Foto::find($id);
        if($data->foto){
           File::delete($data->foto);
       }
       $data->delete();
       return redirect()->back();
    }
}
