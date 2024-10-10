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
        <h1 class="bolder text-primary" style="position: absolute; top: 40%; left: 35%; color: var(--primary) !important; font-size: 100px;">About Us</h1>
    </div>
    <!-- Search End -->
    <!-- Header End -->

    <!-- About start -->
                
    <div class="container mt-5 p-5">
        <div class="row mt-4 p-3">
            <div class="col-lg-6 col-sm-12 d-flex flex-column justify-content-center p-5">
                <span class="text-primary fw-bold">SOME FEATURES AND</span>
                <h1 class="bolder fs-1">THE BENEFITS OF USING BACKHOE TODAY</h1>
                <span>We are committed to providing our customers with super exceptional service while offering our employees the best training and a working environment in which they can excel best of all place for more than a half century.</span><br>
                <span>This company focus has been in place for more than a half century. We are committed to providing our customers with exceptional service while offering our employees the best training best of all and a working environment.</span>
                <br><br>
                <span class="text-primary fw-bold">Building Companies</span>
                <span>Banks & Financial Institutions face a challenging & dynamic environment with…</span>
            </div>
            <div class="col-lg-6 col-sm-12 d-flex align-items-center justify-content-center">
                <img src="/img/about-image.jpg" class="h-75 img-border img-fluid" alt="">
            </div>
        </div>
    </div>
            
<!-- About End -->
<!-- FEATURES START -->
<div class="container">
    <h1 class="bolder">FEATURES</h1>
    <div class="cust-hr"></div>
    <div class="d-flex justify-content-around flex-wrap">
        <div class="box-f border w-25 p-3 mt-5">
                <img src="/img/precision-icon.svg" class="d-block" alt="">
                <span class=" text-primary fw-bold">Precison</span>
                <p>Accurately understand the needs of customers, provide efficient and cost-effective construction equipment for various customers in different operations.</p>
        </div>
        <div class="box-f border w-25 p-3 mt-5">
                <img src="/img/no-delay-icon.svg" class="d-block" alt="">
                <span class=" text-primary fw-bold">Precison</span>
                <p>Accurately understand the needs of customers, provide efficient and cost-effective construction equipment for various customers in different operations.</p>
        </div>
        <div class="box-f border w-25 p-3 mt-5">
                <img src="/img/study-icon.svg" class="d-block" alt="">
                <span class=" text-primary fw-bold">Precison</span>
                <p>Accurately understand the needs of customers, provide efficient and cost-effective construction equipment for various customers in different operations.</p>
        </div>
        <div class="box-f border w-25 p-3 mt-5">
                <img src="/img/precision-icon.svg" class="d-block" alt="">
                <span class=" text-primary fw-bold">Precison</span>
                <p>Accurately understand the needs of customers, provide efficient and cost-effective construction equipment for various customers in different operations.</p>
        </div>
        <div class="box-f border w-25 p-3 mt-5">
                <img src="/img/no-delay-icon.svg" class="d-block" alt="">
                <span class=" text-primary fw-bold">Precison</span>
                <p>Accurately understand the needs of customers, provide efficient and cost-effective construction equipment for various customers in different operations.</p>
        </div>
        <div class="box-f border w-25 p-3 mt-5">
                <img src="/img/study-icon.svg" class="d-block" alt="">
                <span class=" text-primary fw-bold">Precison</span>
                <p>Accurately understand the needs of customers, provide efficient and cost-effective construction equipment for various customers in different operations.</p>
        </div>
    </div>
</div>
<!-- FEATURES END -->

<div style="height: 100px;"></div>
    
    {{-- footer start --}}
    @include('user/footer')
    {{-- footer End --}}
  
  <!-- End of .container -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>
</body>
</html>