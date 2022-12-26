<?php

namespace App\Http\Controllers\API\Auth;

use App\Models\Coach;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CoachController extends Controller
{
    //
    public function CoachView(Request $request)
    {
        $Coach = Coach::all();
        return response()->json($Coach, 200);
    }

    public function CoachAdd(Request $request)
    {
        $validateData = $request->validate([
            'nama'         => 'required',
            'no_telp'          => 'required',
            'alamat'              => 'required',
        ]);

        $Coach = new Coach([
            'nama'         => $request->nama,
            'no_telp'          => $request->no_telp,
            'alamat'              => $request->alamat,
        ]);

        $Coach->save();

        return response()->json($Coach, 201);
    }
    public function CoachUpdate(Request $request, $id)
    {
        $Coach = Coach::find($id);
        $Coach->no_telp        = $request->input('no_telp');
        $Coach->alamat       = $request->input('alamat');

        $Coach->save();

        return response()->json($Coach, 201);
    }
    public function CoachDelete(Request $request, $id)
    {
        $Coach = Coach::find($id);
        $Coach->delete();

        return response()->json($Coach, 201);
    }

}