@extends('_layouts.app')

@section('content')
<section class="py-5">
    <style>
        body{background-color: rgb(38, 36, 31);}
    </style>
    <div class="container">
        <div class="row my-5">
            <div class="col-md-6 d-flex align-items-center">
                <div>
                    <h2 class="text-white">Selamat Datang di <br><b>Arista Gym</b></h2>
                    <p class="text-white">Tempat ngegym paling nyaman di Rogojampi, <br>Daftar segera untuk jadi membership!</p>

                    <a href="{{ url('user/register') }}" class="btn btn-warning"><b>Daftar Sekarang!</b></a>
                </div>
            </div>
            <div class="col-md-6">
                <img src="{{ asset('assets/images/gym3.jpg') }}" class="d-block w-100">
            </div>
        </div>
    </div>
</section>
@endsection