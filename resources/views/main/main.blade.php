<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
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

    {{-- Script Struktur Organisasi --}}
    <script src="{{asset('orgchart/OrgChart.js')}}"></script>
</head>

<body>

    <!-- ======= Header ======= -->
    <header id="header" class="d-flex align-items-center">
        <div class="container d-flex align-items-center">

            {{-- <h1 class="logo me-auto"><a href="index.html">Green</a></h1> --}}
            <!-- Uncomment below if you prefer to use an image logo -->
            <a href="{{route('index')}}" class="logo me-auto"><img
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

    @yield('hero')

    <main id="main">
        @yield('main')
    </main>

</main><!-- End #main -->

<!-- ======= Footer ======= -->
<footer id="footer">
    <div class="container">
        <h3>HIMATIF</h3>
        <P>Powered by Pengembangan Teknologi Himpunan Mahasiswa Teknik Informatika</P>
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

{{-- Script Struktur Organisasi --}}
 <script>

    var chart = new OrgChart(document.getElementById("tree"), {
    template: "ana",
    mode: 'dark',
    scaleInitial: 0.8,
    enableSearch: false,
    mouseScrool: OrgChart.action.none,
    layout: OrgChart.tree,
    editForm: {
        buttons: {
            edit: null,
            remove: null
        }
    },
    tags: {
        "assistant": {
            template: "ana"
        }
    },
    nodeBinding: {
        field_0: "name",
        field_1: "title",
        img_0: "img"
    },
    nodes: [
        { id: 1, name: "Mutiara Syafitri", title: "Ketua", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 2, pid : 1, name: "Harsya", title: "Wakil Ketua", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},

        { id: 3, pid: 2, tags: ["assistant"], name: "Amanda Amalia", title: "Bendahara 1", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 4, pid: 2, tags: ["assistant"], name: "Nabilah Rasyiqah", title: "Sekretaris 1", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 5, pid: 2, tags: ["assistant"], name: "M Rizqi Wafii Fahyari", title: "Bendahara 2", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 6, pid: 2, tags: ["assistant"], name: "Yoga Zahran M", title: "Sekretaris 2", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},

        { id: 7, pid: 2, name: "INTERNAL"},
        { id: 8, pid: 2, name: "EKSTERNAL"},

        { id: 9, pid: 7, name: "INFOKOM"},
        { id:10, pid: 9, name: "Intania Syahla Kirana", title: "Kepala Departemen", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 11, pid: 10, name: "Ocin Leonardo", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 12, pid: 10, name: "Febianna Zahirah", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 13, pid: 10, name: "M Fadli Taptajani", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 14, pid: 10, name: "Mahardika Bagas", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},

        { id: 15, pid: 7, name: "KASTRAT"},
        { id:16, pid: 15, name: "Syntia Tri Utami", title: "Kepala Departemen", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 17, pid: 16, name: "Meiji Bimantara", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 18, pid: 16, name: "Wisnu Mega Wardhana", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 19, pid: 16, name: "Agstrid Utami", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 20, pid: 16, name: "M Raihan Alfaiz", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 21, pid: 16, name: "Ahnaf Hilman", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},

        { id: 22, pid: 7, name: "PEMTEK"},
        { id:23, pid: 22, name: "Jordy Ismail Arianto", title: "Kepala Departemen", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 24, pid: 23, name: "Zamir Mustafidz", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 25, pid: 23, name: "Muhammad Hafidz", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 26, pid: 23, name: "Fadly Atthoriq", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 27, pid: 23, name: "Akbar Maulana F", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},

        { id: 28, pid: 8, name: "HUMAS & PENGMAS"},
        { id:29, pid: 28, name: "M Hasan Ismail", title: "Kepala Departemen", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 30, pid: 29, name: "Perdana Situmorang", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 31, pid: 29, name: "M Haikal Alfarizi", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 32, pid: 29, name: "Faisal Jatmiko S P", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 33, pid: 29, name: "Willy Restu", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},

        { id: 34, pid: 8, name: "DANA USAHA"},
        { id:35, pid: 34, name: "Nove Jira Angela P", title: "Kepala Departemen", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 36, pid: 35, name: "Siti Nurhaliza", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 37, pid: 35, name: "Diah Alfira D", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 38, pid: 35, name: "M Diaz Zalfa N", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},
        { id: 39, pid: 35, name: "Chrysoprase S", title: "Anggota", img: "https://cdn.balkan.app/shared/empty-img-white.svg"},

    ]
});
</script> 

</body>

</html>