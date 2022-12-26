<?php

namespace App\Http\Controllers;
use App\Models\Coach;
use Illuminate\Http\Request;

class CoachController extends Controller
{
    public function CoachView()
    {
        $data['allDataCoach']=Coach::all();
        return view('coach.view_coach', $data);
    }
    
    public function CoachAdd()
    {
        return view('coach.add_coach');
    }

    public function CoachStore(Request $request)
    {   
        $validatedData=$request->validate([
            'nama' =>'required',
        ]);
        //dd($request);
        $data=new Coach();
        $data->nama=$request->nama;
        $data->no_telp=$request->no_telp;
        $data->alamat=$request->alamat;
        $data->save();

        return redirect()->route('coach.view');
    }

    public function CoachEdit($id)
    {
        $editData= Coach::find($id);
        return view('coach.edit_coach', compact('editData'));
    }

    public function CoachUpdate(Request $request, $id)
    {   
        $validatedData=$request->validate([
            'alamat' =>'required',
        ]);
        //dd($request);
        $data=Coach::find($id);
        $data->no_telp=$request->no_telp;
        $data->alamat=$request->alamat;
        $data->save();

        return redirect()->route('coach.view');
    }

    public function CoachDelete($id)
    {
        $deleteData= Coach::find($id);
        $deleteData->delete();

        return redirect()->route('coach.view');
    }
}
