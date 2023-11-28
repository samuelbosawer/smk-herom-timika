<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Models\Pengaturan;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use RealRashid\SweetAlert\Facades\Alert;
Use File;

class PengaturanController extends Controller
{
    Public function index($id = 1)
    {
        $data = Pengaturan::where("id",$id)->first();
        return view('back.pengaturan.index',["id" => $id, 'data' => $data]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'nama_web' => 'required',
            'logo' => 'image|mimes:jpeg,png,jpg|max:2048',
            'nav' => 'image|mimes:jpeg,png,jpg|max:2048',
        ],[
         'nama_web.required'     => 'Nama Website tidak boleh kosong',
         'logo.mimes'  => 'Logo harus format jpeg,png,jpg',
         'logo.max'  => 'Maximal ukuran logo 2048 Mb',
         'nav.mimes' => 'Nav harus format jpeg,png,jpg',
         'nav.max' => 'Maximal ukuran nav 2048 Mb',
        ]);

        $data = Pengaturan::find($id);
        $data->nama_web = $request->nama_web;
        $data->desk_web = $request->desk_web;
        $data->no_hp = $request->no_hp;
        $data->ig = $request->ig;
        $data->facebook = $request->facebook;
        $data->youtube = $request->youtube;
        $data->tiktok = $request->tiktok;
        $data->email = $request->email;
        $data->alamat = $request->alamat;
        $data->alamat_web = $request->alamat_web;

        if(!empty($request->logo)) {
            File::delete($data->logo);
            $nama_logo = 'logo-'. Str::random(10) . '.' . $request->logo->extension();
            $path = public_path('gambar/logo');
            if (!empty($data->logo) && file_exists($path . '/' . $data->logo)) :
                unlink($path . '/' . $data->logo);
            endif;
            $data->logo = 'gambar/logo/' .$nama_logo;
            $request->logo->move(public_path('gambar/logo/'), $nama_logo);
        }
        if(!empty($request->nav)) {
            File::delete($data->nav);
            $nama_nav = 'nav-'. Str::random(10) . '.' . $request->nav->extension();
            $path = public_path('gambar/nav');
            if (!empty($data->nav) && file_exists($path . '/' . $data->nav)) :
                unlink($path . '/' . $data->nav);
            endif;
            $data->nav = 'gambar/nav/' .$nama_nav;
            $request->nav->move(public_path('gambar/nav/'), $nama_nav);
        }
        $data->update();
        Alert::success('Info', 'Data pengaturan berhasil diubah ');
        return redirect('/admin/pengaturan');

    }


}
