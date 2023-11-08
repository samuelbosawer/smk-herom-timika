<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;
use App\Models\Alumi;

class AlumiController extends Controller
{
    Public function index()
    {
         $datas = Alumi::orderByDesc('id')->get();
         return view('back.alumi.index',["datas" => $datas]);
    }

    Public function create()
    {
       return view('back.alumi.create');
    }

    public function storage(Request $request)
    {
        dd($request->foto->extension);
       $validated = $request->validate([
          'nama_alumi' => 'required',
          'tahun_lulus' => 'required',
          'jurusan' => 'required',
          'foto' => 'mimes:jpeg,png,jpg|max:2048',

      ],[
       'nama_alumi.required'     => 'Nama alumi tidak boleh kosong',
       'tahun_lulus.required'  => 'Tahun lulus tidak boleh kosong',
       'jurusan.required'  => 'Jurusan tidak boleh kosong',
       'foto.mimes'  => 'Foto harus format jpeg,png,jpg',
       'foto.max'  => 'Maximal ukuran foto 2048 Mb',
   ]);



      $data = new Alumi;
      $data->nama_alumi = $request->nama_alumi;
      $data->tahun_lulus = $request->tahun_lulus;
      $data->jurusan = $request->jurusan;
      $data->slug_alumi = Str::slug($request->nama_alumi);

      if(!empty($request->foto)) {

        $nama_foto = Str::slug($request->foto) . '.' . $request->picture->extension();
        $path = public_path('gambar/alumi');
        if (!empty($data->foto) && file_exists($path . '/' . $data->foto)) :
            unlink($path . '/' . $data->foto);
        endif;
        $data->foto = $nama_foto;
        $request->picture->move(public_path('gambar/alumi'), $nama_foto);
    }
      $data->save();
      Alert::success('Info', 'Tambah data alumi berhasil ');
      return redirect('/admin/alumi');


    }

    Public function edit($id)
    {

       $data = Alumi::where('id',$id)->first();
       return view('back.Alumi.edit',compact('data','id'));
    }

    public function update(Request $request, $id)
    {
     if($id == null)
     {
         Alert::success('Error', 'Data tidak ditemukan !! ');
         return redirect('/admin/prestasi');
     }

    }

    public function destrory($id)
    {
         $data = Alumi::find($id);
         $data->delete();
         return redirect()->back();
    }
}
