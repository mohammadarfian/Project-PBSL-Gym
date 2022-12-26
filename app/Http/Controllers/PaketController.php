<?php

namespace App\Http\Controllers;

use App\Models\Paket;
use Illuminate\Http\Request;

class PaketController extends Controller
{
    //
    public function PaketView()
    {
        $data['allDataPaket']=Paket::all();
        return view('paket.view_paket', $data);
    }

    public function PaketAdd()
    {
        return view('paket.add_paket');
    }

    public function PaketStore(Request $request)
    {   
        $validatedData=$request->validate([
            'nama' =>'required',
        ]);
        //dd($request);
        $data=new Paket();
        $data->id_member=$request->id_member;
        $data->id_coach=$request->id_coach;
        $data->nama=$request->nama;
        $data->jenis=$request->jenis;
        $data->save();

        return redirect()->route('paket.view');
    }

    public function PaketEdit($id)
    {
        $editData= Paket::find($id);
        return view('paket.edit_paket', compact('editData'));
    }

    public function PaketUpdate(Request $request, $id)
    {   
        $validatedData=$request->validate([
            'nama' =>'required',
        ]);
        //dd($request);
        $data=Paket::find($id);
        $data->nama=$request->nama;
        $data->jenis=$request->jenis;
        $data->save();

        return redirect()->route('paket.view');
    }

    public function PaketDelete($id)
    {
        $deleteData= Paket::find($id);
        $deleteData->delete();

        return redirect()->route('paket.view');
    }
}
