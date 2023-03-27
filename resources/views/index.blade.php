<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Himpunan Mahasiswa Teknik Informatika</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- Favicons -->
    <link href="{{ asset('bootstrap/assets/img/favicon.png') }}" rel="icon">
    <link href="{{ asset('bootstrap/assets/img/apple-touch-icon.png') }}"
        rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="{{ asset('bootstrap/assets/vendor/animate.css/animate.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('bootstrap/assets/vendor/bootstrap/css/bootstrap.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('bootstrap/assets/vendor/bootstrap-icons/bootstrap-icons.css') }}"
        rel="stylesheet">
    <link href="{{ asset('bootstrap/assets/vendor/boxicons/css/boxicons.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('bootstrap/assets/vendor/glightbox/css/glightbox.min.css') }}"
        rel="stylesheet">
    <link href="{{ asset('bootstrap/assets/vendor/swiper/swiper-bundle.min.css') }}"
        rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="{{ asset('bootstrap/assets/css/style.css') }}" rel="stylesheet">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('slidecard/css/swiper-bundle.min.css') }}">

    <!-- CSS Card Slide -->
    <link rel="stylesheet" href="{{ asset('slidecard/css/style.css') }}">

    {{-- CSS Alumni Card --}}
    <link rel="stylesheet" href="{{ asset('alumnisect/css/style.css') }}">

    <!-- =======================================================
  * Template Name: Green - v4.9.1
  * Template URL: https://bootstrapmade.com/green-free-one-page-bootstrap-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">

            {{-- <h1 class="logo me-auto"><a href="index.html">Green</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="javascript:window.location.reload(true)" class="logo me-auto"><img
                    src="{{ asset('index/img/logo.png') }}" alt="" class="img-fluid">HIMATIF
                JGU</a>

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a class="nav-link scrollto {{ (request()->is('index')) ? 'active' : '' }}"
                            href="#hero">Beranda</a></li>
                    <li><a class="nav-link scrollto {{ (request()->is('#about')) ? 'active' : '' }}"
                            href="#about">Tentang Kami</a></li>
                    <li><a class="nav-link scrollto {{ (request()->is('#berita')) ? 'active' : '' }}"
                            href="#berita">Berita Acara</a></li>
                    <li><a class="nav-link scrollto {{ (request()->is('#alumni')) ? 'active' : '' }} "
                            href="#alumni">Alumni</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                @foreach($carousels as $key => $carousel)
                    <div class="carousel-item {{ $key == 0 ? 'active' : '' }}"
                        style="background-image: url('{{ Voyager::image($carousel->image) }}')">
                    </div>
                @endforeach


            </div>

            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>

            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>

        </div>
    </section><!-- End Hero -->

    <main id="main">

        <!-- ======= About Us Section ======= -->
        <section id="about" class="about">
            <div class="container">

                <div class="section-title">
                    <h2>Tentang Kami</h2>
                </div>

                <div class="row mb-4">
                    <div class="col-lg-12 pt-4 pt-lg-0 order-2 order-lg-1 content">
                        @forelse($sejarah as $item)
                            <h3> {{ $item->title }} </h3>
                            <p>
                                {!! $item->description !!}
                            </p>
                        @empty
                            <h3>Nothing</h3>
                            <p>Nothing.</p>
                        @endforelse

                        @forelse($visimisi as $item)
                            <h3>{{ $item->title }}</h3>
                            <p>
                                {!! $item->description !!}
                            </p>
                        @empty
                            <h3>Nothing</h3>
                            <p>Nothing.</p>
                        @endforelse

                    </div>
                </div>

                {{-- <div class="row mt-4">
                    <h3 class="fw-bold">Struktur Organisasi</h3>
                    @forelse($pembina1 as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse

                    @forelse($kajur as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse

                    @forelse($pembina2 as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>

                <div class="row">
                    @forelse($wakahim1 as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse

                    @forelse($kahim as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse

                    @forelse($wakahim2 as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>

                <div class="row">
                    @forelse($sekret1 as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse

                    @forelse($sekret2 as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse

                    @forelse($bendahara1 as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse

                    @forelse($bendahara2 as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>

                <div class="row">
                    @forelse($koorinfokom as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse

                    @forelse($koorpemtek as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse

                    @forelse($koorkastrat as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse

                    @forelse($koordanus as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse

                    @forelse($koorhumas as $item)
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ Voyager::image($item->image) }}" class="card-img-top imgprofile"
                                    alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $item->position }}</h5>
                                    <p class="card-text">{{ $item->name }}</p>
                                </div>
                            </div>
                        </div>
                    @empty
                        <div class="col text-center p-3 mx-auto">
                            <div class="card cardprofile" style="width: 10rem;">
                                <img src="{{ asset('index/img/profile.jpg') }}"
                                    class="card-img-top imgprofile" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">Card title</h5>
                                    <p class="card-text">Nama</p>
                                </div>
                            </div>
                        </div>
                    @endforelse
                </div>

                <div class="row">

                    <div class="col text-center p-3 mx-auto">
                        <div class="card cardprofile" style="width: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">Anggota Informasi & Komunikasi</h5>
                                @foreach($memberinfokom as $item)
                                    <ul>

                                        <li class="card-text">{{ $item->name }}</li>

                                    </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col text-center p-3 mx-auto">
                        <div class="card cardprofile" style="width: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">Anggota Pengembangan Teknologi</h5>
                                @foreach($memberpemtek as $item)
                                    <ul>

                                        <li class="card-text">{{ $item->name }}</li>

                                    </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col text-center p-3 mx-auto">
                        <div class="card cardprofile" style="width: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">Anggota Kajian & Riset Strategis</h5>
                                @foreach($memberkastrat as $item)
                                    <ul>

                                        <li class="card-text">{{ $item->name }}</li>

                                    </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col text-center p-3 mx-auto">
                        <div class="card cardprofile" style="width: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">Anggota Dana Usaha</h5>
                                @foreach($memberdanus as $item)
                                    <ul>

                                        <li class="card-text">{{ $item->name }}</li>

                                    </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>

                    <div class="col text-center p-3 mx-auto">
                        <div class="card cardprofile" style="width: 10rem;">
                            <div class="card-body">
                                <h5 class="card-title">Humas & Pengabdian Masyarakat</h5>
                                @foreach($memberhumas as $item)
                                    <ul>

                                        <li class="card-text">{{ $item->name }}</li>

                                    </ul>
                                @endforeach
                            </div>
                        </div>
                    </div>



                </div> --}}

            </div>
        </section><!-- End About Us Section -->

        <!-- ======= Berita Section ======= -->
        <section id="berita" class="team section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Berita Acara</h2>
                </div>

                <div class="slide-container swiper">
                    <div class="slide-content">
                        <div class="card-wrapper swiper-wrapper">
                            @foreach ($post as $item)
                                <div class="card swiper-slide">
                                    <div class="image-content">
                                        <span class="overlay"></span>

                                        <div class="card-image">
                                            <img src="{{Voyager::image($item->image)}}" alt=""
                                                class="card-img">
                                        </div>
                                    </div>

                                    <div class="card-content">
                                        <h2 class="name">{{$item->name}}</h2>
                                        <a href="{{ route('slug', $item->slug) }}" class="button">View More</a>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <div class="swiper-button-next swiper-navBtn"></div>
                    <div class="swiper-button-prev swiper-navBtn"></div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>

            </div>
        </section><!-- End Team Section -->

        <section class="section-bg" id="alumni">

            <div class="section-title">
                <h2>Alumni</h2>
            </div>
            
            <div class="content">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="text-center card-box">
                                <div class="member-card pt-2 pb-2">
                                    <div class="thumb-lg member-thumb mx-auto"><img
                                            src="https://bootdey.com/img/Content/avatar/avatar2.png"
                                            class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                    <div class="">
                                        <h4>Freddie J. Plourde</h4>
                                        <p class="text-muted">Angkatan 19<span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3">
                            <div class="text-center card-box">
                                <div class="member-card pt-2 pb-2">
                                    <div class="thumb-lg member-thumb mx-auto"><img
                                            src="https://bootdey.com/img/Content/avatar/avatar3.png"
                                            class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                    <div class="">
                                        <h4>Julie L. Arsenault</h4>
                                        <p class="text-muted">Angkatan 20<span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3">
                            <div class="text-center card-box">
                                <div class="member-card pt-2 pb-2">
                                    <div class="thumb-lg member-thumb mx-auto"><img
                                            src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                            class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                    <div class="">
                                        <h4>Christopher Gallardo</h4>
                                        <p class="text-muted">Angkatan 16<span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                        <div class="col-lg-3">
                            <div class="text-center card-box">
                                <div class="member-card pt-2 pb-2">
                                    <div class="thumb-lg member-thumb mx-auto"><img
                                            src="https://bootdey.com/img/Content/avatar/avatar4.png"
                                            class="rounded-circle img-thumbnail" alt="profile-image"></div>
                                    <div class="">
                                        <h4>Christopher Gallardo</h4>
                                        <p class="text-muted">Angkatan 15<span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end col -->
                    </div>
                </div>
                <!-- container -->
            </div>
        </section>

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>HIMATIF</h3>
            <P>Powered by IT Support Himpunan Mahasiswa Teknik Informatika</P>
            <div class="social-links">
                <a href="https://www.instagram.com/himatif.jgu/" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span> HIMATIF </span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script
        src="{{ asset('bootstrap/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}">
    </script>
    <script src="{{ asset('bootstrap/assets/vendor/glightbox/js/glightbox.min.js') }}">
    </script>
    <script src="{{ asset('bootstrap/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}">
    </script>
    <script src="{{ asset('bootstrap/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('bootstrap/assets/vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('bootstrap/assets/js/main.js') }}"></script>

    <!-- Swiper JS -->
    <!--Uncomment this line-->
    <script src="{{ asset('slidecard/js/swiper-bundle.min.js') }}"></script>

    <!-- JavaScript -->
    <!--Uncomment this line-->
    <script src="{{ asset('slidecard/js/script.js') }}"></script>

</body>

</html>
