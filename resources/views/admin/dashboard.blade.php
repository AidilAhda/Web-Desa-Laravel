@extends('layouts.app')

@section('title', 'DASHBOARD')

@push('style')
    <!-- CSS Libraries -->
@endpush

@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Dashboard</h1>
                <div class="section-header-breadcrumb">

                    <div class="breadcrumb-item">Dashboard</div>
                </div>
            </div>

            <div class="section-body">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>DATA PENDUDUK</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1">
                                    <div class="card-icon bg-primary">
                                        <i class="fas fa-male"></i>
                                    </div>
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Laki-Laki</h4>
                                        </div>
                                        <div class="card-body">
                                            {{ $total_laki_laki }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1">
                                    <div class="card-icon bg-danger">
                                        <i class="fas fa-female"></i>
                                    </div>
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Perempuan</h4>
                                        </div>
                                        <div class="card-body">
                                            {{ $total_perempuan }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1">
                                    <div class="card-icon bg-warning">
                                        <i class="far fa-file"></i>
                                    </div>
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Jumlah Dusun</h4>
                                        </div>
                                        <div class="card-body">
                                            {{ $total_dusun }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-12">
                                <div class="card card-statistic-1">
                                    <div class="card-icon bg-success">
                                        <i class="fas fa-circle"></i>
                                    </div>
                                    <div class="card-wrap">
                                        <div class="card-header">
                                            <h4>Jumlah KK</h4>
                                        </div>
                                        <div class="card-body">
                                            {{ $total_kk }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        </div>
                        <div class="card-footer bg-whitesmoke">
                            This is card footer
                        </div>
                    </div>
                </div>
        </section>
    </div>
    <script>
        @if (session()->has('berhasil'))
            iziToast.success({
                title: 'SUCCESS',
                message: `{{ session('berhasil') }}`,
                position: 'topRight'
            });
        @endif
    </script>
@endsection

@push('scripts')
    <!-- JS Libraies -->

    <!-- Page Specific JS File -->
@endpush
