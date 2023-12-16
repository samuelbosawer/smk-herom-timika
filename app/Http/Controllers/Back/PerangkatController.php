<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Perangkat;
use RealRashid\SweetAlert\Facades\Alert;

class PerangkatController extends Controller
{
    public function index($id = 1)
    {
        $data = Perangkat::where("id", $id)->first();
        return view('back.perangkat.index', ["id" => $id, 'data' => $data]);
    }


    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'perangkat' => 'required',
        ], [
            'perangkat.required'     => 'perangkat mengajar tidak boleh kosong',
        ]);
        $data = Perangkat::find($id);
        $data->perangkat = $request->perangkat;
        $data->update();
        Alert::success('Info', 'Ubah data perangkat mengajar berhasil ');
        return redirect('/admin/perangkat');
    }
}
