<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Prestasi;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class PrestasiController extends Controller
{
   Public function index()
   {
        $datas = Prestasi::orderByDesc('id')->get();
        return view('back.prestasi.index',["datas" => $datas]);
   }

   Public function create()
   {
      return view('back.prestasi.create');
   }

   public function storage(Request $request)
   {
      $validated = $request->validate([
         'nama_prestasi' => 'required',
         'tanggal_prestasi' => 'required',
     ],[
      'nama_prestasi.required'     => 'Nama prestasi tidak boleh kosong',
      'tanggal_prestasi.required'  => 'Tanggal prestasi tidak boleh kosong',
  ]);

     Prestasi::create([
         'nama_prestasi' => $request->nama_prestasi,
         'tanggal_prestasi' => $request->tanggal_prestasi,
         'keterangan' =>  $request->keterangan,
         'slug_prestasi'     => Str::slug($request->nama_prestasi)
     ]);

     Alert::success('Info', 'Tambah data prestasi berhasil ');
     return redirect('/admin/prestasi');


   }

   Public function edit($id)
   {

      $data = Prestasi::where('id',$id)->first();
      return view('back.prestasi.edit',compact('data','id'));
   }

   public function update(Request $request, $id)
   {
    if($id == null)
    {
        Alert::success('Error', 'Data tidak ditemukan !! ');
        return redirect('/admin/prestasi');
    }
        $validated = $request->validate([
            'nama_prestasi' => 'required',
            'tanggal_prestasi' => 'required',
        ],[
        'nama_prestasi.required'     => 'Nama prestasi tidak boleh kosong',
        'tanggal_prestasi.required'  => 'Tanggal prestasi tidak boleh kosong',
    ]);
        $prestasi = Prestasi::find($id);
        $prestasi->nama_prestasi = $request->nama_prestasi;
        $prestasi->tanggal_prestasi = $request->tanggal_prestasi;
        $prestasi->keterangan = $request->keterangan;
        $prestasi->slug_prestasi = Str::slug($prestasi->nama_prestasi);
        $prestasi->update();

        Alert::success('Info', 'Ubah data prestasi berhasil ');
        return redirect('/admin/prestasi');
   }

   public function destrory($id)
   {
        $data = Prestasi::find($id);
        $data->delete();
        return redirect()->back();
   }
}
