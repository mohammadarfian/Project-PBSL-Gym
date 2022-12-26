<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\Paket;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class PaketController extends Controller
{
    //
    public function PaketView(Request $request)
    {
        $Paket = Paket::all();
        return response()->json($Paket, 200);
    }

    public function PaketAdd(Request $request)
    {
        $validateData = $request->validate([
            'id_member'         => 'required',
            'id_coach'          => 'required',
            'nama'              => 'required',
            'jenis'             => 'required',
        ]);

        $Paket = new Paket([
            'id_member'         => $request->id_member,
            'id_coach'          => $request->id_coach,
            'nama'              => $request->nama,
            'jenis'             => $request->jenis,
        ]);

        $Paket->save();

        return response()->json($Paket, 201);
    }
    public function PaketUpdate(Request $request, $id)
    {
        $Paket = Paket::find($id);
        $Paket->nama        = $request->input('nama');
        $Paket->jenis       = $request->input('jenis');

        $Paket->save();

        return response()->json($Paket, 201);
    }
    public function PaketDelete(Request $request, $id)
    {
        $Paket = Paket::find($id);
        $Paket->delete();

        return response()->json($Paket, 201);
    }

}