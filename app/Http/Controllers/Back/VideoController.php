<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Video;
use File;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Str;

class VideoController extends Controller
{
    Public function index()
    {
        $datas = Video::orderByDesc('id')->get();
        return view('back.video.index',["datas" => $datas]);

    }

    Public function show($id)
    {
    }

    Public function create()
    {
        return view('back.video.create');
    }

    public function storage(Request $request)
    {
        $validated = $request->validate([
            'judul_video' => 'required',
            'link_video' => 'required',
        ],[
         'judul_video.required'     => 'Judul video tidak boleh kosong',
         'link_video.required'  => 'Link video tidak boleh kosong',
     ]);

        $data = new Video;
        $data->judul_video = $request->judul_video;
        $data->link_video = $request->link_video;
        $data->save();
        Alert::success('Info', 'Tambah data video berhasil ');
        return redirect('/admin/video');

    }

    Public function edit($id)
    {
        $data = Video::where('id',$id)->first();
        return view('back.video.edit',["id" => $id, "data" => $data]);
    }

    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'judul_video' => 'required',
            'link_video' => 'required',
        ],[
         'judul_video.required'     => 'Judul video tidak boleh kosong',
         'link_video.required'  => 'Link video tidak boleh kosong',
     ]);

        $data = Video::find($id);
        $data->judul_video = $request->judul_video;
        $data->link_video = $request->link_video;
        $data->update();
        Alert::success('Info', 'Ubah data video berhasil ');
        return redirect('/admin/video');
    }

    public function destrory($id)
    {
       $data = Video::find($id);
       $data->delete();
       return redirect()->back();
    }
}
