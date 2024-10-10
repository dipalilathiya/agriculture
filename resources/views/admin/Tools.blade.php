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
            <h1 class="h3 mb-0 text-gray-800">Tools Details</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">Tools Details</li>
            </ol>
          </div>

          <div class="row justify-content-center">
            <div class="col-6">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tools Upload</h6>
                </div>
                <div class="card-body">
                  <form method="post" enctype="multipart/form-data" action="{{route('Tools')}}">
                    @csrf
                    @isset($id)
                    <input type="text" value="{{$id}}" name="id">
                    @endisset
                    <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1"
                        aria-describedby="emailHelp" placeholder="Enter Name">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Rate Per Day</label>
                      <input type="text" name="r_p_d" class="form-control" id="exampleInputPassword1"
                        placeholder="Rate">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Rate Per Month</label>
                      <input type="text" name="r_p_m" class="form-control" id="exampleInputPassword1"
                        placeholder="Rate">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Rate Per Year</label>
                      <input type="text" name="r_p_y" class="form-control" id="exampleInputPassword1"
                        placeholder="Rate">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Rate Per Hour With Operator</label>
                      <input type="text" name="r_p_h_w_o" class="form-control" id="exampleInputPassword1"
                        placeholder="Rate">
                    </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Location</label>
                      <input type="text" name="Location" class="form-control" id="exampleInputPassword1"
                        placeholder="Rate">
                    </div>
                      <select name="cat_id" id="" class="form-control mt-2">
                        <option value="" selected>Select category</option>
                        <option value="1">Scissor Lift</option>
                        <option value="2">Rough Terrain Scissor Lift</option>
                        <option value="3">Manlift</option>
                        <option value="4"> Forklift </option>
                        <option value="5"> Excavator </option>
                        <option value="6"> Earthmoving Equipment </option>
                        <option value="7">  Compaction Equipment </option>
                        <option value="8">  Boom Lift  </option>
                      </select>
                    <div class="form-floating mt-2">
                      <textarea class="form-control" placeholder="Leave a Description here" name="Description" id="floatingTextarea"></textarea>
                      <label for="floatingTextarea">Description</label>
                    </div>

                    <div class="input-group mb-3 mt-3">
                      <input type="file" name="img" class="form-control" id="inputGroupFile02">
                      <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-lg-12 mt-3">
              <!-- Simple Tables -->
              <div class="card">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Tools Tables</h6>
                </div>
                <div class="table-responsive">
                  <table class="table align-items-center table-flush">
                    <thead class="thead-light">
                      <tr>
                        <th>Id</th>
                        <th>Name</th>
                        <th>Rate Per Day</th>
                        <th>Rate Per Month</th>
                        <th>Rate Per Year</th>
                        <th>Rate Per Hour With Operator</th>
                        <th>Location</th>
                        <th>Image</th>
                        <th>Update</th>
                        <th>delete</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach ($data as $value)
                      <tr>
                        <th>{{$value->id}}</th>
                        <th>{{$value->name}}</th>
                        <th><span>$</span>{{$value->Rate_Per_Day}}</th>
                        <th><span>$</span>{{$value->Rate_Per_Month}}</th>
                        <th><span>$</span>{{$value->Rate_Per_Year}}</th>
                        <th><span>$</span>{{$value->Rate_Per_Hour_With_Operator}}</th>
                        <th>{{$value->Location}}</th>
                        <th><img src="{{asset('img/'.$value->img)}}" class="img-fluid" alt=""></th>
                        <th><a href="{{route('update_tools',$value->id)}}" class="btn btn-warning">Update</a></th>
                        <th><a href="{{route('delete_tools',$value->id)}}" class="btn btn-danger">Delete</a></th>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
                <div class="card-footer"></div>
              </div>
            </div>
            <!--Row-->
            <!-- Modal Logout -->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog"
              aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
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