<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @foreach ($show as $item)
        <title>{{$item->title}}</title>
    @endforeach
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
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

        <link rel="stylesheet" href="{{asset('showslug/style.css')}}">

    <!-- Template Main CSS File -->
    <link href="{{ asset('bootstrap/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css"
        integrity="sha256-mmgLkCYLUQbXn0B1SRqzHar6dCnv9oZFPEC1g1cwlkk=" crossorigin="anonymous" />
    <div class="container">
        <div class="row">
            <div class="col-md-5">
                <div class="project-info-box mt-0">
                    @foreach($show as $item)
                        <h5>{{$item->title}}</h5>
                        {!! $item->body !!}
                    @endforeach
                </div>
                <div class="project-info-box">
                    @foreach ($show as $item)
                        <p><b>Date:</b> {{$item->created_at}}</p>
                        <p><b>Uploader :</b> Divisi Informasi dan Komunikasi</p>
                    @endforeach
                </div>
                <div class="project-info-box mt-0 ">
                    <p>
                        <span class="fw-bold mr-10 va-middle hide-mobile">Share:</span>
                        <a href="https://www.instagram.com/himatif.jgu/" target="__blank" class="btn btn-xs btn-instagram btn-facebook-link btn-outline-facebook btn-circle btn-icon mr-5 mb-0">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </p>
                    <a href="javascript:history.back()" class="btn btn-success"><i class="fas fa-backward"></i> Back to home</a>
                </div>
            </div>
            <div class="col-md-7 mb-4">
                @foreach ($show as $item)
                    <img src={{Voyager::image($item->image)}} alt="project-image" class="rounded">
                @endforeach
            </div>
        </div>
    </div>

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <h3>HIMATIF</h3>
            <p class="text-white">Powered by Pengembangan Teknologi Himpunan Mahasiswa Teknik Informatika</p>
            <div class="social-links">
                <a href="https://www.instagram.com/himatif.jgu/" class="instagram"><i class="bx bxl-instagram"></i></a>
            </div>
            <div class="copyright">
                &copy; Copyright <strong><span> HIMATIF </span></strong>. All Rights Reserved
            </div>
        </div>
    </footer><!-- End Footer -->

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

    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>
