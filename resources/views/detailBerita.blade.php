{{-- @dd($kategori) --}}

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

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* @media (max-width: 768px) {
            img {
                width: 350px;
                height: 200px;
            }
        }

        @media (min-width: 992px) {
            img {
                width: 700px;
                height: 400px;
            }
        } */
    </style>


    <!-- Custom styles for this template -->
    {{-- <link rel="stylesheet" href="css/blog.css"> --}}
</head>

<body>


    <main role="main">
        <header>
            <nav class="navbar navbar-expand-lg navbar-dark   bg-dark">
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
            <div class="row justify-content-center">

                <div class="col-md-8">
                    <h1>{{ $data->judul }}</h1>
                    <small>diposting {{ $data->created_at->diffForHumans() }}</small>
                    <p>Tag : <a href="/kategori/{{ $data->category->nama }}">{{ $data->category->nama }}</a></p>
                    <img src="{{ $data->gambar }}" alt="" srcset="" class="pb-2 img-fluid">
                    <p>{!! $data->isi !!}</p>

                </div>


            </div>
        </div>

    </main>
    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>

        </div>
    </footer>




</body>

</html>
