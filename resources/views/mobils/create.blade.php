@extends('layouts.main')

@section('content')

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="/mobils" method="POST">
                                    @csrf
                                    <div class="form-body">
                                        <label>Merk Mobil</label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control @error('merk') is-invalid @enderror" value="{{ old('merk') }}" id="merk" name="merk" required autofocus>
                                                    @error('merk')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-body">
                                        <label>Model Mobil</label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control @error('model') is-invalid @enderror" value="{{ old('model') }}" id="model" name="model" required autofocus>
                                                    @error('model')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-body">
                                        <label>Plat Nomor</label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control @error('plat_no') is-invalid @enderror" value="{{ old('plat_no') }}" id="plat_no" name="plat_no" required autofocus>
                                                    @error('plat_no')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-body">
                                        <label>Tarif /hari</label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="number" class="form-control @error('tarif') is-invalid @enderror" value="{{ old('tarif') }}" id="tarif" name="tarif" required autofocus>
                                                    @error('tarif')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-body">
                                        <label>Status</label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select class="custom-select" id="status" name="status">
                                                        <option value="tersedia">tersedia</option>
                                                        <option value="tidak tersedia">tidak tersedia</option>
                                                    </select>

                                                    {{-- <input type="text" class="form-control @error('status') is-invalid @enderror" value="{{ old('status') }}" id="status" name="status" required autofocus> --}}
                                                    @error('status')
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
                                            <button type="submit" class="btn btn-info">Create</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

@endsection    

        