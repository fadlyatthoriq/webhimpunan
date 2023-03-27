<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    @foreach ($show as $item)
        <title>{{$item->title}}</title>
    @endforeach
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href={{asset('showslug/style.css')}}>
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
                <div class="project-info-box mt-0 mb-0">
                    <p class="mb-0">
                        <span class="fw-bold mr-10 va-middle hide-mobile">Share:</span>
                        <a href="https://www.instagram.com/himatif.jgu/" target="__blank" class="btn btn-xs btn-facebook btn-facebook-link btn-outline-facebook btn-circle btn-icon mr-5 mb-0">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </p>
                </div>
            </div>
            <div class="col-md-7">
                @foreach ($show as $item)
                    <img src={{Voyager::image($item->image)}} alt="project-image" class="rounded">
                @endforeach
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>
