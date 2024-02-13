@extends('layouts.app')

@section('title', 'DATA PENDUDUK')

@push('style')
    <!-- CSS Libraries -->
    {{-- <link rel="stylesheet" href="{{ asset('library/prismjs/themes/prism.min.css') }}"> --}}
@endpush
{{-- @dd($datas) --}}
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
                            <a href="data_penduduks/create" class="btn btn-icon icon-left btn-info"><i
                                    class="fas fa-plus-circle"></i>
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
                                        <td><a href="/data_penduduks/{{ $data->dp_id }}/edit" class="btn btn-warning"> <i
                                                    class="fas fa-pen"></i></a>
                                            <form action="/data_penduduks/{{ $data->dp_id }}" method="post"
                                                class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger delete-btn" data-id="{{ $data->dp_id }}">
                                                    <i class="fas fa-trash"></i></button>
                                            </form>
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
    <script>
        @if (session()->has('gagal'))
            iziToast.error({
                title: 'GAGAL',
                message: `{{ session('gagal') }}`,
                position: 'topRight'
            });
        @endif
        @if (session()->has('berhasil'))
            iziToast.success({
                title: 'SUKSES',
                message: `{{ session('berhasil') }}`,
                position: 'topRight'
            });
        @endif

        const deleteButtons = document.querySelectorAll('.delete-btn');

        deleteButtons.forEach(btn => {
            btn.addEventListener('click', (event) => {
                event.preventDefault();
                const id = btn.dataset.id;
                console.log(id);

                swal({
                        title: 'Are you sure?',
                        text: 'Once deleted, you will not be able to recover this data!',
                        icon: 'warning',
                        buttons: true,
                        dangerMode: true,
                    })
                    .then((willDelete) => {
                        if (willDelete) {
                            // Proceed with the delete action
                            const deleteForm = document.querySelector(
                                `form[action="/data_penduduks/${id}"]`);
                            deleteForm.submit();
                        } else {
                            swal('Your data is safe!');
                        }
                    });
            });
        });
    </script>

@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>
@endpush
