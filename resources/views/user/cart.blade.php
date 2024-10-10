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
        <h1 class="bolder text-primary" style="position: absolute; top: 40%; left: 40%; color: var(--primary) !important; font-size: 100px;">Tools</h1>
    </div>
    <!-- Search End -->
    <!-- Header End -->
    <!-- Tools start -->
    <div class="container">
      <div class="row mt-5">
        <div class="alert bg-white border-success text-success" role="alert">
          <i class="fa-solid fa-circle-check me-3"></i>
             Your order has been successful pleased 
        </div>
        <div class="col-lg-3 col-md-0 d-md-none d-lg-block">
          <form action="" method="POST">
            @csrf
          <div class="form-control p-0 d-flex flex-row-reverse align-items-center">
              <input type="text" name="sea" class="border-0 form-control" placeholder="Search">
              <i class="fa-solid fa-magnifying-glass text-primary me-2 ms-2"></i>
            </div>
          </form>
            <div class="mt-5">
              <h3 style="border-bottom: 2px solid var(--primary); border-bottom-right-radius: 50px;" class="p-3">Product Categories</h3>
              <div class="p-2">
                <ul>
                  <li class=""><a href="{{route("Category_prodect",1)}}" class="text-black" style="font-weight: 600;">Scissor Lift</a></li>
                  <li class=""><a href="{{route("Category_prodect",2)}}" class="text-black" style="font-weight: 600;"> Rough Terrain Scissor Lift </a></li>
                  <li class=""><a href="{{route("Category_prodect",3)}}" class="text-black" style="font-weight: 600;"> Manlift </a></li>
                  <li class=""><a href="{{route("Category_prodect",4)}}" class="text-black" style="font-weight: 600;"> Forklift </a></li>
                  <li class=""><a href="{{route("Category_prodect",5)}}" class="text-black" style="font-weight: 600;"> Excavator </a></li>
                  <li class=""><a href="{{route("Category_prodect",6)}}" class="text-black" style="font-weight: 600;">  Earthmoving Equipment  </a></li>
                  <li class=""><a href="{{route("Category_prodect",7)}}" class="text-black" style="font-weight: 600;">  Compaction Equipment  </a></li>
                  <li class=""><a href="{{route("Category_prodect",8)}}" class="text-black" style="font-weight: 600;">   Boom Lift  </a></li>
                </ul>
              </div>
            </div>
        </div>
        <div class="col-lg-9 col-md-12 p-5">
            @foreach ($data as $value)
           <div class="card hovee mb-3">
            <div class="row g-0">
              <div class="col-md-5">
                <img src="{{asset('img/'.$value->img)}}" class="img-fluid rounded-start" alt="...">
              </div>
              <div class="col-md-7">
                <div class="card-body">
                  <h5 class="card-title fs-4 fw-bold">
                    {{$value->name}}</h5>
                  <p class="card-text fw-bold pt-1 pb-1 ps-4 pe-4 mt-3 
                  border-bottom rounded" style="background-color: #00000008;">{{$value->Hire_Type}}</p>
                  <div class="d-flex mt-2 justify-content-between">
                    <p class="fw-bold"><span>{{$value->Starting_Date}}</span> TO <span>{{$value->Ending_Date}}</span></p>
                  </div>
                  <div class="d-flex mt-1 justify-content-between">
                    <p class="fw-bold">$</span><span> {{$value->Price}}</span></p>
                  </div>
                  <div class="d-flex mt-1 justify-content-between">
                    <p class="fw-bold">Status <span class="fw-normel"> {{$value->Status}}</span></p>
                  </div>
                  <div class="d-flex mt-1 justify-content-between">
                    <p class="fw-bold">Directions <span class="fw-normel"> {{$value->Directions}}</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          @if ($error!=null)
        <h1>{{$error}}</h1>
    @endif
        </div>
      </div>
    </div>
    
    <!-- Tools End -->

<div style="height: 100px;"></div>
   <!-- Remove the container if you want to extend the Footer to full width. -->
   {{-- footer start --}}
   @include('user/footer')
   {{-- footer end --}}
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>