<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Dashboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function DashboardView()
    {
        $users = DB::table("users")->get();

        return view("member.viewmember", [
            'users' => $users
        ]);
        // $data['allDataDashboard']=Dashboard::all();
        // return view('member.viewmember', $data);
    }

    public function DashboardAdd()
    {
        return view('member.addmember');
    }

    public function DashboardStore(Request $request)
    {   
        $validatedData=$request->validate([
            'nama' =>'required',
        ]);
        //dd($request);
        $data=new Dashboard();
        $data->nama=$request->nama;
        $data->alamat=$request->alamat;
        $data->no_telp=$request->no_telp;
        $data->tanggal=$request->tanggal;
        $data->save();

        return redirect()->route('dashboard.view');
    }

    public function DashboardEdit($id)
    {
        $editData= Dashboard::find($id);
        return view('member.editmember', compact('editData'));
    }

    public function DashboardUpdate(Request $request, $id)
    {   
        $validatedData=$request->validate([
            'alamat' =>'required',
        ]);
        //dd($request);
        $data=Dashboard::find($id);
        $data->alamat=$request->alamat;
        $data->no_telp=$request->no_telp;
        $data->tanggal=$request->tanggal;
        $data->save();

        return redirect()->route('dashboard.view');
    }

    public function DashboardDelete($id)
    {
        $deleteData= User::find($id);
        $deleteData->delete();

        return redirect()->route('user.view');
    }
}
