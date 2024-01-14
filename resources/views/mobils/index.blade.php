@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Daftar Data Mobil</h4>
                    @if(session()->has('success'))
                    <div class="alert alert-success alert-dismissible bg-success text-white border-0 fade show"
                        role="alert">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <strong>Success - </strong> {{ session('success') }}
                    </div>
                    @endif
                    <a class="btn btn-rounded btn-outline-success" href="/mobils/create"><i data-feather="plus" class="feather-icon"></i></a>
                    <div class="table-responsive">
                        <table id="zero_config" class="table table-striped table-bordered no-wrap">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Merk</th>
                                    <th>Model</th>
                                    <th>Plat</th>
                                    <th>Tarif</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($mobils as $mobil)    
                                <tr>
                                    <th scope="row">{{ $loop->iteration }}</th>
                                    {{-- <td>{{ $mobil['id'] }}</td> --}}
                                    <td>{{ $mobil['merk'] }}</td>
                                    <td>{{ $mobil['model'] }}</td>
                                    <td>{{ $mobil['plat_no'] }}</td>
                                    <td>{{ $mobil['tarif'] }}</td>
                                    <td>{{ $mobil['status'] }}</td>
                                    <td>
                                        <a class="badge btn-info" href="/mobils/{{ $mobil->id }}/edit">edit  </a>
                                        <form action="/mobils/{{ $mobil->id }}" method="POST" class="d-inline">
                                        {{-- <form action="{{ route('kriteria.destroy', $mobil->id) }}" method="POST" class="d-inline"> --}}
                                            @method('delete')
                                            @csrf
                                            <button class="badge btn-danger border-0" type="submit" onclick="return confirm('Apakah Kamu yakin untuk menghapus mobil?')">del</button>
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

        