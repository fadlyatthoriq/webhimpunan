@extends('main.main')

@section('title')
    Himpunan Mahasiswa Teknik Informatika
@endsection

@section('hero')
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
@endsection

@section('main')
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

            {{-- Struktur Organisasi --}}
            <div class="mt-4">
                <h3 class="fw-bold">Struktur Organisasi</h3>
                <a href="{{route('struktur')}}" class="btn btn-success">View Struktur</a>
            </div>

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
                        @foreach($post as $item)
                            <div class="card swiper-slide">
                                <div class="image-content">
                                    <span class="overlay"></span>

                                    <div class="card-image">
                                        <img src="{{ Voyager::image($item->image) }}" alt="" class="card-img">
                                    </div>
                                </div>

                                <div class="card-content">
                                    <h2 class="name">{{ $item->name }}</h2>
                                    <a href="{{ route('slug', $item->slug) }}"
                                        class="button">View More</a>
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
@endsection