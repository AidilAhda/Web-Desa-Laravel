{{-- @dd($kategory) --}}
@extends('layouts.app')

@section('title', 'KATEGORI')

{{-- @dd($data) --}}
@section('main')
    <div class="main-content">
        <section class="section">
            <div class="section-header shadow">
                <h1>Kategori</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item">Kategori</div>
                </div>
            </div>

            <div class="section-body">
                <div class="card shadow">
                    <div class="card-header">
                        <div class="buttons">
                            <a href="categories/create" class="btn btn-icon icon-left btn-info"><i
                                    class="fas fa-plus-circle"></i> Tambah Kategori</a>
                        </div>
                    </div>
                    <hr class="featurette-divider">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table-bordered table-md table">
                                <tr>
                                    <th>#</th>
                                    <th>Nama</th>
                                </tr>
                                @foreach ($category as $c)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $c->nama }}</td>
                                        <td>
                                            <a href="categories/{{ $c->id }}/edit" class="btn btn-warning"> <i
                                                    class="fas fa-pen"></i></a>
                                            <form action="/categories/{{ $c->id }}" method="post" class="d-inline">
                                                @method('delete')
                                                @csrf
                                                <button class="btn btn-danger delete-btn" data-id="{{ $c->id }}">
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
                    // console.log(id);

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
                                    `form[action="/categories/${id}"]`);
                                deleteForm.submit();
                            } else {
                                swal('Your data is safe!');
                            }
                        });
                });
            });
        </script>
    </div>
@endsection

@push('scripts')
    <!-- JS Libraries -->
    <script src="{{ asset('library/sweetalert/dist/sweetalert.min.js') }}"></script>
@endpush
