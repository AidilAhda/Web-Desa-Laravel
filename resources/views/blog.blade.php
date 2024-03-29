{{-- @dd($perangkat_desa) --}}
<!doctype html>
<html lang="en">

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

    <script src="https://code.jquery.com/jquery-3.4.1.min.js"
        integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>

    <!-- AOS -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />


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

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link rel="stylesheet" href="css/blog.css">
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

    <main role="main">

        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active item1">
                    <img src="image/kantor-desa3.jpeg" class="bd-placeholder-img" width="100%"
                        height="100%"role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice"
                        focusable="false">

                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>KANTOR DESA.</h1>
                            <p>kantor desa batu langkah besar</p>

                        </div>
                    </div>
                </div>
                <div class="carousel-item item2">
                    <img src="image/kantor-desa1.jpeg" class="bd-placeholder-img" width="100%"
                        height="100%"role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice"
                        focusable="false">


                </div>
                <div class="carousel-item ">
                    <img src="image/kantor-desa2.jpeg" class="bd-placeholder-img" width="100%"
                        height="100%"role="img" aria-label=" :  " preserveAspectRatio="xMidYMid slice"
                        focusable="false">


                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-target="#myCarousel" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-target="#myCarousel" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
  ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">

            <!-- Three columns of text below the carousel -->
            <div class="row" data-aos="fade-up" data-aos-duration="2000">
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

            <!-- /.row -->


            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">
            <h1 class="text-center">Fasilitas Desa</h1>
            <div class="row featurette" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="800">
                <div class="col-md-7">
                    <h2 class="featurette-heading">HIDROPONIK DESA. <span class="text-muted">Temukan keajaiban di
                            setiap tanaman.</span></h2>
                    <p class="lead">Bayangkan keindahan prosa yang akan menggambarkan pesona yang tak terlupakan dari
                        hidroponik desa kami.</p>
                </div>
                <div class="col-md-5">
                    <img src="image/hidroponik.jpeg"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"width="500"
                        height="500" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false" alt="" srcset="">

                </div>
            </div>

            <hr class="featurette-divider">

            <div class="row featurette" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="800">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">FASILITAS PENDIDKAN.<span class="text-muted"> karena ini sangatlah
                            penting</span></h2>
                    <p class="lead">Kami sangat bersungguh-sungguh dalam bidang pendidikan ini. guna mencetak
                        generasi emas pada desa kami</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/mda1.jpeg"
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"width="500"
                                    height="500" role="img" aria-label="Placeholder: 500x500"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" alt=""
                                    srcset="" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="image/sd004.jpeg"
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"width="500"
                                    height="500" role="img" aria-label="Placeholder: 500x500"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" alt=""
                                    srcset="" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="image/smp005.jpeg"
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                    width="500" height="500" role="img" aria-label="Placeholder: 500x500"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" alt=""
                                    srcset="" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="image/tk1.jpeg"
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"width="500"
                                    height="500" role="img" aria-label="Placeholder: 500x500"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" alt=""
                                    srcset="" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                    {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg> --}}

                </div>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette" data-aos="fade-left" data-aos-easing="linear" data-aos-duration="800">
                <div class="col-md-7">
                    <h2 class="featurette-heading">FASILITAS KESEHATAN. <span class="text-muted">Pentingnya Kesehatan
                            bagi warga desa</span>
                    </h2>
                    <p class="lead">Kami juga sangat memperhatikan kesehatan bagi warga desa kami,khususnya
                        anak-anak. Dengan mengadakan program imunisasi gratis bagi warga kami</p>
                </div>
                <div class="col-md-5">
                    <img src="image/posyandu.jpeg"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"width="500"
                        height="600" role="img" aria-label="Placeholder: 500x500"
                        preserveAspectRatio="xMidYMid slice" focusable="false" alt="" srcset="">

                </div>
            </div>
            <hr class="featurette-divider">
            <div class="row featurette" data-aos="fade-right" data-aos-easing="linear" data-aos-duration="800">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">FASILITAS OLAHRAGA.<span class="text-muted"> dengan berolahraga
                            badan menjadi lebih sehat</span></h2>
                    <p class="lead">Kami juga menyediakan beberapa Fasilitas olahraga untuk warga yang hobby
                        berolahraga</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="image/badminton.jpeg"
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"width="500"
                                    height="500" role="img" aria-label="Placeholder: 500x500"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" alt=""
                                    srcset="" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="image/takraw.jpeg"
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"width="500"
                                    height="500" role="img" aria-label="Placeholder: 500x500"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" alt=""
                                    srcset="" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="image/volly.jpeg"
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                                    width="500" height="500" role="img" aria-label="Placeholder: 500x500"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" alt=""
                                    srcset="" alt="...">
                            </div>
                            <div class="carousel-item">
                                <img src="image/bolakaki.jpeg"
                                    class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"width="500"
                                    height="500" role="img" aria-label="Placeholder: 500x500"
                                    preserveAspectRatio="xMidYMid slice" focusable="false" alt=""
                                    srcset="" alt="...">
                            </div>
                        </div>
                        <button class="carousel-control-prev" type="button" data-target="#carouselExampleControls"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-target="#carouselExampleControls"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </button>
                    </div>
                    {{-- <svg class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid mx-auto"
                        width="500" height="500" xmlns="http://www.w3.org/2000/svg" role="img"
                        aria-label="Placeholder: 500x500" preserveAspectRatio="xMidYMid slice" focusable="false">
                        <title>Placeholder</title>
                        <rect width="100%" height="100%" fill="#eee" /><text x="50%" y="50%" fill="#aaa"
                            dy=".3em">500x500</text>
                    </svg> --}}

                </div>
            </div>


            <hr class="featurette-divider">
            <h1 class="text-center">Berita</h1>
            <div class="row justify-content-center">
                <div class="col-md-4">
                    <div class="form-group">

                        <div class="input-group mb-3 shadow">
                            <input type="text" class="form-control" placeholder="Cari Berita" id="search"
                                value="{{ request('search') }}">
                        </div>
                    </div>
                </div>
            </div>

            <div id="cards-container">
                <div class="row ">
                    @foreach ($berita as $b)
                        {{-- @dd($b->gambar) --}}
                        <div class="col-md-4 ">
                            <div class="card card-primary shadow" style="width: 18rem;">
                                <img class="card-img-top" src="{{ url('storage/' . $b->gambar) }}"
                                    alt="gambar tidak ada">
                                <div class="card-body">
                                    <small>Diposting {{ $b->created_at->diffForHumans() }}</small>
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
            <div id="pagination" class="d-flex justify-content-center">
                {{-- {{ $berita->links() }} --}}
            </div>
            {{-- PERANGKAT DESA --}}
            <hr class="featurette-divider">
            <h1 class="text-center">Perangkat Desa</h1>
            <div class="row justify-content-center">
                @foreach ($perangkat_desa as $pd)
                    <div class="col-lg-3">
                        <img src="{{ asset('storage/' . $pd->foto) }}" width="140" height="140"
                            style="border-radius:50%" srcset="">
                        <h2>{{ $pd->jabatan->jabatan }}</h2>
                        <p>{{ $pd->nama }}</p>

                    </div><!-- /.col-lg-4 -->
                @endforeach
            </div>
        </div><!-- /.container -->


        <!-- FOOTER -->
    </main>
    <footer class="text-muted">
        <div class="container">
            <p class="float-right">
                <a href="#">Back to top</a>
            </p>

        </div>
    </footer>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script>
        // Variable to store the current page
        var currentPage = 1;

        // Fungsi untuk melakukan search AJAX
        function searchCards(page = 1) {
            // Ambil nilai pencarian
            var query = $('#search').val();

            // Buat AJAX request ke server
            $.ajax({
                url: '/search',
                data: {
                    query: query,
                    page: page // Send the page parameter to the server
                },
                beforeSend: function() {
                    // Tampilkan loading saat sedang mengambil data
                },
                success: function(res) {
                    let data = res.data;

                    // console.log(res);
                    $('#cards-container').empty();

                    // Buat div flex wrapper
                    var cardsWrapper = `<div class="d-flex flex-wrap"></div>`;
                    // Tambahkan wrapper
                    $('#cards-container').append(cardsWrapper);

                    if (data.length > 0) {
                        $.each(data, function(index, card) {
                            // Generate HTML card
                            var cardHTML = `
                            <div class="row">
                                <div class="col-md-4 mr-5">
                                    <div class="card card-primary shadow" style="width: 18rem;">
                                        <img class="card-img-top" src="storage/${card.gambar}" alt="gambar tidak ada">
                                        <div class="card-body">
                                            <h5 class="card-title">${card.judul}</h5>
                                            <p class="card-text">${card.excerpt}</p>
                                            <a href="/detailBerita/${card.slug}" class="btn btn-primary">Lihat Selengkapnya</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        `;

                            // Tambahkan card ke kontainer
                            $('.d-flex').append(cardHTML);
                        });
                    } else {
                        // Jika data tidak ditemukan
                        var noResultHTML = `<p>No results found.</p>`;
                        $('#cards-container').append(noResultHTML);
                    }

                    // Update pagination
                    $('#pagination').html(generatePagination(res));
                },
                complete: function() {
                    // Hide loading
                }
            });
        }

        function generatePagination(data) {
            var pagination = `<ul class="pagination">`;

            // Add "Prev" button
            if (data.prev_page_url) {
                pagination +=
                    `<li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="loadPage(${data.current_page - 1})">Prev</a></li>`;
            }

            // Add numbered page buttons
            for (var i = 1; i <= data.last_page; i++) {
                pagination +=
                    `<li class="page-item ${i === data.current_page ? 'active' : ''}"><a class="page-link" href="javascript:void(0);" onclick="loadPage(${i})">${i}</a></li>`;
            }

            // Add "Next" button
            if (data.next_page_url) {
                pagination +=
                    `<li class="page-item"><a class="page-link" href="javascript:void(0);" onclick="loadPage(${data.current_page + 1})">Next</a></li>`;
            }

            pagination += `</ul>`;
            return pagination;
        }

        // Function to load a specific page
        function loadPage(page) {
            currentPage = page;
            searchCards(page);
        }

        // Event listener ketika input search diketik
        $('#search').on('keyup', function() {
            currentPage = 1; // Reset current page when a new search is performed
            searchCards();
        });

        // Panggil fungsi search saat halaman dimuat
        $(document).ready(function() {
            searchCards();
        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>


</body>

</html>
