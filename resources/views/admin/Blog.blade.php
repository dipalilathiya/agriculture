<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo/logo.png" rel="icon">
  <title>FarmerTool Admin</title>
 {{-- css links --}}
 <link rel="stylesheet" href="{{asset('/css/all.min.css')}}">
 <link rel="stylesheet" href="{{asset('/css/bootstrap.min.css')}}">
 <link rel="stylesheet" href="{{asset('/css/ruang-admin.min.css')}}">
{{-- css links --}}
</head>

<body id="page-top">
  <div id="wrapper">
     {{-- nav bar start --}}
     @include('admin/navbar')
     {{-- nav bar End --}}
        <!-- Container Fluid-->
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
        <!---Container Fluid-->
      </div>

    </div>
  </div>

  <!-- Scroll to top -->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>

  <script src="/js/ruang-admin.min.js"></script>
  <script src="vendor/chart.js/Chart.min.js"></script>
  <script src="js/demo/chart-area-demo.js"></script>

</body>

</html>