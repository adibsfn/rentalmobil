@extends('layouts.main')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <form action="/rentals/{{ $rentals->id }}" method="POST">
                        @method('put')
                        @csrf
                        <div class="form-body">
                            <label>Nama Penyewa</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" name="mobil" value="{{ auth()->user()->name }}" type="text" readonly>
                                        @error('id_mobil')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        <input type="hidden" name="id_mobil" id="id_mobil" value="{{ $rentals->mobil->id }}">

                        <div class="form-body">
                            <label>Plat Mobil</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input class="form-control" name="plat_mobil" value="{{ $rentals->mobil->plat_no }}" type="text" readonly>
                                        @error('plat_mobil')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-body">
                            <label>Tanggal Rental</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="date" readonly class="form-control @error('tanggal_rental') is-invalid @enderror" value="{{ $rentals->tanggal_rental ?? old('tanggal_rental') }}" id="tanggal_rental" name="tanggal_rental" required autofocus>
                                        @error('tanggal_rental')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>
                    
                        <div class="form-body">
                            <label>Tanggal Kembali</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="date" readonly class="form-control @error('tanggal_kembali') is-invalid @enderror" value="{{ $rentals->tanggal_kembali ?? old('tanggal_kembali') }}" id="tanggal_kembali" name="tanggal_kembali" required autofocus>
                                        @error('tanggal_kembali')
                                            <div class="invalid-feedback">
                                                {{ $message }}
                                            </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                        </div>

                        @if(isset($rentals->tanggal_rental) && isset($rentals->tanggal_kembali))
                            @php
                                $totalHari = \Carbon\Carbon::parse($rentals->tanggal_kembali)->diffInDays(\Carbon\Carbon::parse($rentals->tanggal_rental));
                            @endphp
                            <div class="form-body">
                                <label>Total Hari</label>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input type="text" class="form-control" value="{{ $totalHari }}" id="total_hari" name="total_hari" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endif

                        @php
                            $totalharga = $rentals->mobil->tarif * $totalHari;   
                        @endphp
                        <div class="form-body">
                            <label>Total Harga</label>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" class="form-control" value="{{ "Rp " . number_format($totalharga, 0, ',', '.') }}
                                        " id="total_harga" name="total_harga" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-actions">
                            <div class="text-right">
                                <button type="submit" class="btn btn-info">Kembalikan</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
