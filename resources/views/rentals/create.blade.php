@extends('layouts.main')

@section('content')

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="/rentals" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <label>Pilih Mobil </label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select class="custom-select" id="id_mobil" name="id_mobil">
                                                        <option value="">--pilih--</option>
                                                        @foreach($mobils as $mobil)
                                                            <option value="{{ $mobil->id }}">
                                                                {{ $mobil->model }} | {{ $mobil->plat_no }} | {{ 'Rp ' . number_format($mobil->tarif, 0, ',', '.') }}/day
                                                            </option>                                                       
                                                        @endforeach
                                                    </select>
                                                    @error('id_mobil')
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
                                                    <input type="date" class="form-control @error('tanggal_rental') is-invalid @enderror" value="{{ old('tanggal_rental') }}" id="tanggal_rental" name="tanggal_rental" required autofocus>
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
                                                    <input type="date" class="form-control @error('tanggal_kembali') is-invalid @enderror" value="{{ old('tanggal_kembali') }}" id="tanggal_kembali" name="tanggal_kembali" required autofocus>
                                                    @error('tanggal_kembali')
                                                        <div class="invalid-feedback">
                                                            {{ $message }}
                                                        </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                
                                    <div class="form-actions">
                                        <div class="text-right">
                                            <button type="submit" class="btn btn-info">Sewa</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <script>
                    document.addEventListener("DOMContentLoaded", function () {
                        function hitungTotalHari() {
                            var dateMulai = new Date(document.getElementById('date_mulai').value);
                            var dateKembali = new Date(document.getElementById('date_kembali').value);
                
                            // selisih hari
                            var selisihHari = Math.ceil((dateKembali - dateMulai) / (1000 * 60 * 60 * 24));
                            document.getElementById('total_hari').value = selisihHari;
                
                            // Ambil tarif dari select
                            var selectedMobilId = document.getElementById('idMobil').value;
                            var tarifPerHari = parseFloat(document.querySelector(`#idMobil option[value="${selectedMobilId}"]`).innerText.split('|')[2].trim().replace('Rp ', '').replace('.', '').replace(',', ''));
                
                            // Hitung total harga berdasarkan tarif per hari
                            var totalHarga = tarifPerHari * selisihHari;
                
                            document.getElementById('tarif').value = tarifPerHari;
                            document.getElementById('totalharga').value = new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR' }).format(totalHarga);
                        }
                
                        document.getElementById('date_mulai').addEventListener('change', hitungTotalHari);
                        document.getElementById('date_kembali').addEventListener('change', hitungTotalHari);
                        document.getElementById('idMobil').addEventListener('change', hitungTotalHari);
                
                    });
                </script> --}}
                
                
                
                

@endsection    

        