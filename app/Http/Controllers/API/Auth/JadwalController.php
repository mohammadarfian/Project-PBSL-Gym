<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\Jadwal;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class JadwalController extends Controller
{
    //
    public function JadwalView(Request $request)
    {
        $Jadwal = Jadwal::all();
        return response()->json($Jadwal, 200);
    }

    public function JadwalAdd(Request $request)
    {
        $validateData = $request->validate([
            'id_member'         => 'required',
            'tanggal_mulai'     => 'required',
            'tanggal_selesai'   => 'required',
        ]);

        $Jadwal = new Jadwal([
            'id_member'         => $request->id_member,
            'tanggal_mulai'     => $request->tanggal_mulai,
            'tanggal_selesai'   => $request->tanggal_selesai,
        ]);

        $Jadwal->save();

        return response()->json($Jadwal, 201);
    }
    public function JadwalUpdate(Request $request, $id)
    {
        $Jadwal = Jadwal::find($id);
        $Jadwal->tanggal_mulai    = $request->input('tanggal_mulai');
        $Jadwal->tanggal_selesai  = $request->input('tanggal_selesai');

        $Jadwal->save();

        return response()->json($Jadwal, 201);
    }
    public function JadwalDelete(Request $request, $id)
    {
        $Jadwal = Jadwal::find($id);
        $Jadwal->delete();

        return response()->json($Jadwal, 201);
    }

}