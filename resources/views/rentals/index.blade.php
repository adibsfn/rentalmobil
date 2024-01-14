@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Rentalku</h4>
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                        role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Success - </strong> {{ session('success') }}
                    </div>
                    @endif
                    <a class="btn btn-rounded btn-outline-success" href="/rentals/create">Rental sekarang</a>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Merk</th>
                                    <th>Model</th>
                                    <th>Plat</th>
                                    <th>Tanggal Rental</th>
                                    <th>Tanggal Kembali</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($rentals as $rental)    
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    <td>{{ $rental->mobil->merk }}</td>
                                    <td>{{ $rental->mobil->model }}</td>
                                    <td>{{ $rental->mobil->plat_no }}</td>
                                    <td>{{ $rental->tanggal_rental }}</td>
                                    <td>{{ $rental->tanggal_kembali }}</td>
                                    <td>
                                        <a class="badge btn-info" href="/rentals/{{ $rental->id }}/edit">selesaikan sewa  </a>
                                        <form action="/rentals/{{ $rental->id }}" method="POST" class="d-inline">
                                            @method('delete')
                                            @csrf
                                        </form>
                                    </td>
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
