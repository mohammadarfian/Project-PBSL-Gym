<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Paket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MemberController extends Controller
{
    //
    public function card()
    {
        $user = Auth::user();
        
        return view("member/card", [
            'user' => $user
        ]);
    }

    public function dashboard()
    {
        // $users = User::all();
        $users = DB::table("users")->get();

        return view("dashboard/view", [
            'users' => $users
        ]);
    }

    public function Detail()
    {
        $data['allDataJadwal']=Jadwal::all();
        return view('member.detail.lihat', $data);
    }

    public function Transaksi()
    {
        $data['allDataPaket']=Paket::all();
        return view('member.detail.transaksi', $data);
    }
}
