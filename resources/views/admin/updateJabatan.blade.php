@extends('layouts.app')

@section('title', 'Profile')


@push('style')
    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('library/selectric/public/selectric.css') }}">
@endpush


@section('main')
    <div class="main-content">
        <section class="section ">
            <div class="section-header shadow">

                <h1>Update Jabatan</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="/jabatans">Jabatan</a></div>
                    <div class="breadcrumb-item">Update Jabatan</div>
                </div>
            </div>

            <div class="section-body shadow">

                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-body">
                                <form action="/jabatans/{{ $jabatan->id }}" method="post" enctype="multipart/form-data">
                                    @csrf
                                    @method('put')
                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">
                                            Nama Jabatan</label>
                                        <div class="col-sm-12 col-md-7">
                                            <input type="text"
                                                class="form-control @error('jabatan') is-invalid @enderror" id="jabatan"
                                                name="jabatan" autofocus value="{{ old('jabatan', $jabatan->jabatan) }}">
                                            @error('jabatan')
                                                <div class="invalid-feedback">
                                                    {{ $message }}
                                                </div>
                                            @enderror
                                        </div>
                                    </div>


                                    <div class="form-group row mb-4">
                                        <label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
                                        <div class="col-sm-12 col-md-7">
                                            <button type="submit" class="btn btn-primary">Update Kategori</button>
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


    <!-- Page Specific JS File -->
    <script src="{{ asset('js/page/features-post-create.js') }}"></script>
@endpush
