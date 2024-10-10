<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap link start-->
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <!-- bootstrap link End-->
    <!-- css link start -->
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/all.min.css">
    <!-- css link End -->
</head>

<body>
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Header start -->
        <div class="bg-2 w-100 img-fluid position-relative">
               <!-- navbar start -->
       @include('user/navbar')
       <!-- navbar End -->
        <!-- Search start -->
    </div>
    <!-- Search End -->
    <!-- Header End -->
    <!-- Contact Us start -->

    <!-- Search Start -->

    <!-- Search End -->


    <!-- Contact Start -->
    @foreach ($data as $value)
        <section class="p-4 p-md-5 text-center text-lg-start shadow-1-strong rounded">
          <div class="row d-flex justify-content-center">
            <div class="col-md-10">
              <div class="card">
                <div class="card-body m-3">
                  <div class="row">
                    <div class="col-lg-4 d-flex justify-content-center align-items-center mb-4 mb-lg-0">
                      <img src="/img/phone-book.png"
                      class="rounded-circle img-fluid shadow-1" alt="woman avatar" width="200" height="200" />
                    </div>
                    <div class="col-lg-8">
                      <p class="text-muted fw-light mb-4">
                       {{$value->disp}}
                      </p>
                      <p class="fw-bold lead mb-2"><strong>{{$value->name}}</strong></p>
                      <p class="fw-bold text-muted mb-0">{{$value->roll}}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        @endforeach
    <!-- Contact End -->

    <!-- Contact Us End -->

<div style="height: 100px;"></div>

{{-- footer start --}}
@include('user/footer')
{{-- footer end --}}
  
  <!-- End of .container -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>