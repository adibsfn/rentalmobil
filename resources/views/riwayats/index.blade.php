@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Riwayat Rental</h4>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Plat Mobil</th>
                                    <th>Tanggal Rental</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Total Hari</th>
                                    <th>Total Harga</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($riwayats as $riwayat)    
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $riwayat->plat_mobil }}</td>
                                    <td>{{ $riwayat->tanggal_rental }}</td>
                                    <td>{{ $riwayat->tanggal_kembali }}</td>
                                    <td>{{ $riwayat->total_hari }}</td>
                                    <td>{{ $riwayat->total_harga }}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
