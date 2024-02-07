{{-- @dd($category->berita); --}}


<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.101.0">
    <title>DESA BATU LANGKAH BESAR</title>





    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{ asset('library/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css"
        integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('css/style2.css') }}">

    <link rel="stylesheet" href="{{ asset('css/components.css') }}">



    <!-- Custom styles for this template -->

</head>

<body>


    <header>
        <nav class="navbar navbar-expand-lg navbar-dark fixed-top  bg-dark">
            <a class="navbar-brand" href="/">DESA BATU LANGKAH BESAR</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item">
                        <a class="nav-link" href="/"><i class="fas fa-home"></i> Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/login"><i class="fas fa-sign-in-alt"></i> Login</a>
                    </li>

                </ul>
            </div>
        </nav>
    </header>
    <div class="container mt-4">
        <h2 class="text-center"> Tag Kategori : {{ $category->nama }}</h2>
        <div class="row justify-content-center">

            @foreach ($category->Berita as $b)
                <div class="col-md-4">
                    <div class="card card-primary" style="width: 18rem;">
                        <img class="card-img-top" src="{{ asset('storage/' . $b->gambar) }}" alt="gambar tidak ada">
                        <div class="card-body">
                            <h5 class="card-title">{{ $b->judul }}</h5>
                            <p class="card-text">{{ $b->excerpt }}</p>
                            <a href="/detailBerita/{{ $b->slug }}" class="btn btn-primary">Lihat
                                Selengkapnya</a>
                        </div>
                    </div>
                </div>
            @endforeach


        </div>
    </div>

    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>

        </div>
    </footer>

    @push('scripts')
        <!-- JS Libraies -->

        <script src="{{ asset('library/jquery-ui-dist/jquery-ui.min.css') }}"></script>

        <!-- Page Specific JS File -->
    @endpush

    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>


</body>

</html>
