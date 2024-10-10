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
            <h1 class="h3 mb-0 text-gray-800">category Details</h1>
            <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="./">Home</a></li>
              <li class="breadcrumb-item">Forms</li>
              <li class="breadcrumb-item active" aria-current="page">category Details</li>
            </ol>
          </div>

          <div class="row justify-content-center">
            <div class="col-9">
              <!-- Form Basic -->
              <div class="card mb-4">
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                  <h6 class="m-0 font-weight-bold text-primary">Upload category</h6>
                </div>
                <div class="card-body">
                  <form method="post" enctype="multipart/form-data" action="{{route('Category')}}">
                    @csrf
                    <div class="form-group">
                      <label for="exampleInputEmail1">category Name</label>
                      <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                        placeholder="Enter Name">
                    </div>
                    <div class="input-group mb-3 mt-3">
                      @isset($id)
                      <input type="text" name="id" value="{{$id}}">
                      @endisset
                      <input type="file" name="img" class="form-control" id="inputGroupFile02">
                      <label class="input-group-text" for="inputGroupFile02">Upload</label>
                    </div>
                    <button type="submit" name="submit" class="btn text-white bg-primary">Submit</button>
                  </form>
                </div>
              </div>
          <!--Row-->
          <table class="table border">
            <tr class="fw-bold">
              <td>id</td>
              <td>Name</td>
              <td>image</td>
              <td>Update</td>
              <td>Delete</td>
            </tr>
            @foreach ($data as $value)
            <tr>
              <td class="pt-4">{{$value->id}}</td>
              <td class="pt-4">{{$value->name}}</td>
              <td><img src="{{asset('img/'.$value->img)}}" class="img-fluid" alt=""></td>
              <td class="pt-4"><a href="{{route('update',$value->id)}}"class="btn btn-warning text-white">Update</a></td>
              <td class="pt-4"><a href="{{route('delete',$value->id)}}"class="btn btn-danger text-white">Delete</a></td>
            </tr>
            @endforeach
          </table>

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