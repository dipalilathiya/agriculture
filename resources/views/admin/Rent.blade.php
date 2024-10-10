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
        <div class="container-fluid" id="container-wrapper">
          <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Rent Tables</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Tables</li>
              <li class="breadcrumb-item active" aria-current="page">Rent Tables</li>
            </ol>
          </div>

          <div class="row">
          <div class="col-lg-12 mt-3">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Rent Tables</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Starting Date</th> 
                        <th>Ending Date</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Directions</th>
                        <th>Hire Type</th>
                        <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $value)                          
                      <tr>
                        <th>{{$value->id}}</th>
                        <th>{{$value->name}}</th>
                        <th>{{$value->Starting_Date}}</th>
                        <th>{{$value->Ending_Date}}</th>
                        <th><span>$</span>{{$value->Price}}</th>
                        <th>{{$value->Status}}</th>
                        <th>{{$value->Directions}}</th>
                        <th>{{$value->Hire_Type}}</th>
                        <th><a href="{{route('delete_rent',$value->id)}}" class="btn btn-danger">Delete</a></th>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
          </div>
          <!--Row-->

          <!-- Modal Logout -->
          <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                  <p>Are you sure you want to logout?</p>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                  <a href="login.html" class="btn btn-primary">Logout</a>
                </div>
              </div>
            </div>
          </div>

        </div>
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