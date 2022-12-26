@extends('_layouts.detail')

@section('content')
    <section>
        <div class="container my-5">
            <div class="row">
                <div class="col-md-12">
                    <a href="/member" class="btn btn-outline-secondary mb-4">Kembali ke halaman sebelumnya</a>
                    <div class="card">
                        <div class="card-body">
                            <h3 class="mb-4">Jadwal Member</h3>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Tanggal Mulai</th>
                                        <th scope="col">Tanggal Selesai</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($allDataJadwal as $key => $jadwal)
                                    <tr>
		                                <td>{{$jadwal->tanggal_mulai}}</td>
                                        <td>{{$jadwal->tanggal_selesai}}</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                                <a href="/member/detail/transaksi" class="btn btn-primary mb-4">Lihat Detail Transaksi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection