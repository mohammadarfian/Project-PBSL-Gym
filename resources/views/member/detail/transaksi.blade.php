@extends('_layouts.detail')

@section('content')
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <a href="/member/detail/lihat" class="btn btn-outline-secondary mb-4">Kembali ke halaman sebelumnya</a>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-4">Detail Transaksi</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Id_Member</th>
                                        <th scope="col">Id_Coach</th>
                                        <th scope="col">Nama</th>
                                        <th scope="col">Jenis</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allDataPaket as $key => $paket)
                                    <tr>
                                        <td>{{$paket->id_member}}</td>
                                        <td>{{$paket->id_coach}}</td>
                                        <td>{{$paket->nama}}</td>
                                        <td>{{$paket->jenis}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection