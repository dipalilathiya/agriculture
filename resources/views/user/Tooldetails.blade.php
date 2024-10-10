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
        <h1 class="bolder text-primary"
            style="position: absolute; top: 40%; left: 30%; color: var(--primary) !important; font-size: 100px;">Tools
            Details</h1>
    </div>
    <!-- Search End -->
    <!-- Header End -->

    <!-- Tools start -->

    <div class="container mt-5">
        @foreach ($data as $value)
        <div class="card border-0 mb-3">
            <div class="row g-0">
                <div class="col-md-7">
                    <img src="{{asset('img/'.$value->img)}}" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-5">
                    <div class="card-body">
                        <h5 class="card-title fw-bold fs-2">{{$value->name}}</h5>
                        <div class="d-flex justify-content-between mt-3">
                            <div class="">
                                <p class="card-text fw-bold">Hire</p>
                                <p class="text-primary fw-bold fs-5 m-0"><span>$</span>{{$value->Rate_Per_Day}}<span
                                        class="text-dark fs-6"> / Day</span></p>
                                <p class="text-primary fw-bold fs-5 m-0"><span>$</span>{{$value->Rate_Per_Month}}<span
                                        class="text-dark fs-6"> / Week</span></p>
                                <p class="text-primary fw-bold fs-5"><span>$</span>{{$value->Rate_Per_Year}}<span
                                        class="text-dark fs-6"> / Month</span></p>
                            </div>
                            <div class="">
                                <p class="card-text fw-bold">Hire With Operator</p>
                                <p class="text-primary m-0 fw-bold fs-5"><span>$</span>{{$value->Rate_Per_Hour_With_Operator}}<span
                                        class="text-dark fs-6"> / Hour</span></p>
                            </div>
                            <div class="">
                                <p class="card-text fw-bold">Location</p>
                                <span><i class="fa-solid fa-location-dot text-primary me-2"></i>{{$value->Location}}</span>
                            </div>
                        </div>
                        <p>{{$value->Description}}</p>
                        <form action="{{route("Chakoute")}}" method="POST">
                            @csrf
                          <input type="text" hidden value="{{$value->id}}" name="id">
                            <div class="row mt-4 align-items-center">
                                <span class="text-black fw-bold col-6">PAYEMENT FREQUENCY</span>
                                <select name="PAYEMENT" class="col-6 rounded p-2" style="border: 2px solid var(--primary);">
                                    <option value="" >Choose an option</option>
                                    <option value="Daily">Daily</option>
                                    <option value="monthly">monthly</option>
                                    <option value="yearly">yearly</option>
                                    <option value="Hour">Hour(With Operator)</option>
                                </select>
                            </div>
                            <div class="d-flex flex-column align-items-end">
                                <div class="mt-5 d-flex w-100 justify-content-between align-items-center">
                                    <input type="date" name="str_date" class="p-3" style="border: 1px solid var(--primary);"
                                    placeholder="1">
                                    <span>To</span>
                                    <input type="date" name="end_date" class="p-3" style="border: 1px solid var(--primary);"
                                    placeholder="1">
                                </div>
                                <input class="btn mt-3 bg-primary text-white p-3 ms-5 w-25" type="submit" name="submit" value="Rent Now">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    <div class="container mt-5">
        <div class="d-flex flex-column">
            <div class="d-flex fw-bold fs-5 border-bottom">
                <span class="m-3 ms-0 text-hover border-b" id="disp">Description</span>
                <div class="border mt-3 mb-3"></div>
                <span class="m-3 text-hover" id="revi">Reviews(<span>0</span>)</span>
            </div>
            <div class="disp mt-3">
                <span>{{$value->Description}}
                </span>
            </div>
            <div class="Review  mt-3" style="display: none;">
                <span class="text-black fw-bold">
                    Reviews
                </span>
                <p class="mt-3">There are no reviews yet.</p>
            </div>
        </div>
    </div>

    <!-- Tools End -->

    <div style="height: 100px;"></div>

    {{-- footer start --}}
    @include('user/footer')
    {{-- footer end --}}

    <!-- End of .container -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="/js/app.js"></script>
</body>

</html>