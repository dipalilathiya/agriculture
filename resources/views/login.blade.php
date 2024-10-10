<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="img/logo.png" rel="icon">
  <title>Farmer Tool Admin</title>
  <link href="/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="/css/style.css" rel="stylesheet">
</head>
<body>
  <div class="container-scroller">
    <div class="container-fluid page-body-wrapper full-page-wrapper">
      <div class="content-wrapper d-flex align-items-center auth px-0">
        <div class="row w-100 mx-0">
          <div class="col-lg-4 mx-auto">
            <div class="alert d-flex flex-column alert-warning" role="alert">
              <h4 class="text-black text-center">For admin access</h4>
              <span class="text-black fw-bold mt-2">Id = admin@gmail.com</span>
              <span class="text-black fw-bold mt-2">Password = Admin@1212</span>
            </div>
            <div class="auth-form-light text-left py-5 px-4 px-sm-5">
              <div class="brand-logo">
                <img src="img/logo.png" alt="logo">
              </div>
              <h4>Welcome Back</h4>
              @if ($error != null)
              <div class="alert alert-danger" role="alert">
                {{$error}}
              </div>
              @endif
              
              <form class="pt-3" action="" method="POST">
                @csrf
                <div class="form-group">
                  <input type="email" class="form-control form-control-lg" id="exampleInputEmail1" name="email" placeholder="Email" value="{{old('email')}}">
                  <span class="text-danger fw-bold text-center">
                    @error('email')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="form-group">
                  <input type="password" class="form-control form-control-lg" id="exampleInputPassword1" name="password" placeholder="Password">
                  <span class="text-danger fw-bold text-center">
                    @error('password')
                        {{$message}}
                    @enderror
                  </span>
                </div>
                <div class="mt-3">
                  <input name="submit" type="submit"  class="btn btn-block bg-primary text-white btn-lg font-weight-medium auth-form-btn">
                </div>
                <div class="text-center mt-4 font-weight-light">
                   have No account? <a href="{{route('register')}}" class="text-primary">Register</a>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- content-wrapper ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
</body>

</html>
