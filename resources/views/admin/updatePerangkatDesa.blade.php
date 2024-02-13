@extends('layouts.app')

@section('title', 'Profile')


@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.css') }}">
@endpush


@section('main')
    <div class="main-content">
        <section class="section ">
            <div class="section-header shadow">

                <h1>Update Perangkat Desa</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/perangkat_desas">Perangkat Desa</a></div>
                    <div class="breadcrumb-item">Update Perangkat Desa</div>
                </div>
            </div>

            <div class="section-body shadow">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="/perangkat_desas/{{ $perangkatDesa->id }}" method="post"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                            Nama Perangkat Desa</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text" class="form-control @error('nama') is-invalid @enderror"
                                                id="nama" name="nama" autofocus
                                                value="{{ old('nama', $perangkatDesa->nama) }}">
                                            @error('nama')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Jabatan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <select class="form-control selectric " name="jabatan_id">
                                                <option>-- Pilih Jabatan --</option>
                                                @foreach ($jabatan as $j)
                                                    @if (old('jabatan_id', $perangkatDesa->jabatan_id) == $j->id)
                                                        <option value="{{ $j->id }}" selected>{{ $j->jabatan }}
                                                        </option>
                                                    @else
                                                        <option value="{{ $j->id }}">{{ $j->jabatan }}</option>
                                                    @endif
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Foto</label>
                                        <input type="hidden" name="oldImage" value="{{ $perangkatDesa->foto }}">
                                        <div class="col-sm-12 col-md-7">
                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label">Choose File</label>
                                                <input type="file" name="foto"
                                                    class="@error('foto') is-invalid @enderror" id="image-upload" />
                                                @error('foto')
                                                    <div class="invalid-feedback">
                                                        {{ $message }}
                                                    </div>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>


                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button type="submit" class="btn btn-primary">Update Perangkat Desa</button>
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
    {{-- membuat slug otomatis --}}

@endsection

@push('scripts')
    <!-- JS Libraies -->
    <script src="{{ asset('library/selectric/public/jquery.selectric.min.js') }}"></script>
    <script src="{{ asset('library/upload-preview/upload-preview.js') }}"></script>
    <script src="{{ asset('library/bootstrap-tagsinput/dist/bootstrap-tagsinput.min.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-post-create.js') }}"></script>
@endpush
