@extends('layouts.app')

@section('title', 'DATA PENDUDUK')

@push('style')
    <!-- CSS Libraries -->
    {{-- <link rel="stylesheet" href="{{ asset('library/prismjs/themes/prism.min.css') }}"> --}}
@endpush
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>DATA PENDUDUK</h1>
                <div class="section-header-breadcrumb">

                    <div class="breadcrumb-item">DATA PENDUDUK</div>
                </div>
            </div>

            <div class="section-body">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="buttons">
                            <a href="#" class="btn btn-icon icon-left btn-info" data-toggle="modal"
                                data-target="#exampleModal"><i class="fas fa-plus-circle"></i>
                                Tambah Data
                            </a>
                        </div>
                        <hr class="featurette-divider">
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">

                            <table class="table-bordered table-md table">
                                <tr>
                                    <th>#</th>
                                    <th>Nama Dusun</th>
                                    <th>Laki-Laki</th>
                                    <th>Perempuan</th>
                                    <th>Jumlah KK</th>
                                    <th>Created At</th>
                                    <th>Aksi</th>
                                </tr>
                                @foreach ($datas as $data)
                                    <tr>

                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $data->nama_dusun }}</td>
                                        <td>{{ $data->laki_laki }}</td>
                                        <td>{{ $data->perempuan }}</td>
                                        <td>{{ $data->jumlah_kk }}</td>
                                        <td>{{ $data->created_at }}</td>
                                        <td><a href="#" class="btn btn-warning"> <i class="fas fa-pen"></i></a>
                                            <a href="#" class="btn btn-danger"> <i class="fas fa-trash"></i> </a>
                                        </td>


                                    </tr>
                                @endforeach

                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data Penduduk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">

                        <form action="">
                            <div class="form-group ">
                                <label for="inputDusun">Nama Dusun</label>
                                <input type="text" class="form-control" id="inputDusun"name="inputDusun"
                                    placeholder="Nama Dusun">
                            </div>


                            <div class="form-group">
                                <label for="inputLaki">Laki Laki</label>
                                <input type="number" class="form-control" id="inputLaki" name="inputLaki"
                                    placeholder="Jumlah Laki laki">
                            </div>
                            <div class="form-group">
                                <label for="inputPerempuan">Perempuan</label>
                                <input type="number" class="form-control" id="inputPerempuan"
                                    name="inputPerempuan"placeholder="Jumlah Perempuan">
                            </div>
                            <div class="form-group">
                                <label for="inputKK">KK</label>
                                <input type="number" class="form-control" id="inputKK"name="inputKK"
                                    placeholder="Jumlah KK">
                            </div>

                            <div class="modal-footer bg-whitesmoke br">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')
    <!-- JS Libraies -->
    {{-- <script src="{{ asset('library/prismjs/prism.js') }}"></script>

            <!-- Page Specific JS File -->
            <script src="{{ asset('js/page/bootstrap-modal.js') }}"></script> --}}
    <!-- Page Specific JS File -->
@endpush
