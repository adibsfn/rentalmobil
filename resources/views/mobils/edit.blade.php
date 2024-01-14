@extends('layouts.main')

@section('content')

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="/mobils/{{ $mobil->id }}" method="POST">
                                    @method('put')
                                    @csrf
                                    <div class="form-body">
                                        <label>Merk Mobil</label>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control @error('merk') is-invalid @enderror" value="{{ $mobil->merk, old('merk')}}" id="merk" name="merk" required autofocus>
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
                                                    <input type="text" class="form-control @error('model') is-invalid @enderror" value="{{ $mobil->model, old('model')}}" id="model" name="model" required autofocus>
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
                                                    <input type="text" class="form-control @error('plat_no') is-invalid @enderror" value="{{ $mobil->plat_no, old('plat_no')}}" id="plat_no" name="plat_no" required autofocus readonly>
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
                                                    <input type="number" class="form-control @error('tarif') is-invalid @enderror" value="{{ $mobil->tarif, old('tarif')}}" id="tarif" name="tarif" required autofocus>
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
                                                    <select class="custom-select @error('status') is-invalid @enderror" id="status" name="status" required autofocus>
                                                        <option value="tersedia" {{ ($mobil->status == 'tersedia' || old('status') == 'tersedia') ? 'selected' : '' }}>Tersedia</option>
                                                        <option value="tidak tersedia" {{ ($mobil->status == 'tidak tersedia' || old('status') == 'tidak tersedia') ? 'selected' : '' }}>Tidak Tersedia</option>
                                                    </select>
                                    
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
                                            <button type="submit" class="btn btn-info">Update</button>
                                        </div>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>
                </div>

@endsection    

        