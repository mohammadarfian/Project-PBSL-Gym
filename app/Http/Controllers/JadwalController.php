<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    public function JadwalView()
    {
        $data['allDataJadwal']=Jadwal::all();
        return view('jadwal.view_jadwal', $data);
    }

    public function JadwalAdd()
    {
        return view('jadwal.add_jadwal');
    }

    public function JadwalStore(Request $request)
    {   
        $validatedData=$request->validate([
            'tanggal_mulai' =>'required',
        ]);
        //dd($request);
        $data=new Jadwal();
        $data->id_member=$request->id_member;
        $data->tanggal_mulai=$request->tanggal_mulai;
        $data->tanggal_selesai=$request->tanggal_selesai;
        $data->save();

        return redirect()->route('jadwal.view');
    }

    public function JadwalEdit($id)
    {
        $editData= Jadwal::find($id);
        return view('jadwal.edit_jadwal', compact('editData'));
    }

    public function JadwalUpdate(Request $request, $id)
    {   
        $validatedData=$request->validate([
            'tanggal_mulai' =>'required',
        ]);
        //dd($request);
        $data=Jadwal::find($id);
        $data->tanggal_mulai=$request->tanggal_mulai;
        $data->tanggal_selesai=$request->tanggal_selesai;
        $data->save();

        return redirect()->route('jadwal.view');
    }

    public function JadwalDelete($id)
    {
        $deleteData= Jadwal::find($id);
        $deleteData->delete();

        return redirect()->route('jadwal.view');
    }
}
