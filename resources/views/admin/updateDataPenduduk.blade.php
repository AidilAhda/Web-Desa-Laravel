@extends('layouts.app')

@section('title', 'Profile')


@push('style')
    <!-- CSS Libraries -->
@endpush


@section('main')
    <div class="main-content">
        <section class="section ">
            <div class="section-header shadow">
                <h1>Update Data Penduduk</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/data_penduduks">Data Penduduk</a></div>
                    <div class="breadcrumb-item">Update Data Penduduk</div>
                </div>
            </div>

            <div class="section-body shadow">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="/data_penduduks/{{ $data_penduduk->dp_id }}" method="post">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Nama
                                            Dusun</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text"
                                                class="form-control @error('nama_dusun') is-invalid @enderror"
                                                id="nama_dusun" name="nama_dusun" autofocus
                                                value="{{ old('nama_dusun', $data_penduduk->nama_dusun) }}">
                                            @error('nama_dusun')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">laki
                                            Laki</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number"
                                                class="form-control @error('laki_laki') is-invalid @enderror" id="laki_laki"
                                                name="laki_laki" autofocus
                                                value="{{ old('laki_laki', $data_penduduk->laki_laki) }}">
                                            @error('laki_laki')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label
                                            class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Perempuan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number"
                                                class="form-control @error('perempuan') is-invalid @enderror" id="perempuan"
                                                name="perempuan" autofocus
                                                value="{{ old('perempuan', $data_penduduk->perempuan) }}">
                                            @error('perempuan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jumlah
                                            KK</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="number"
                                                class="form-control @error('jumlah_kk') is-invalid @enderror" id="jumlah_kk"
                                                name="jumlah_kk" autofocus
                                                value="{{ old('jumlah_kk', $data_penduduk->jumlah_kk) }}">
                                            @error('jumlah_kk')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button type="submit" class="btn btn-primary">Update Data Penduduk</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

@endsection

@push('scripts')
    <!-- Page Specific JS File -->
@endpush
