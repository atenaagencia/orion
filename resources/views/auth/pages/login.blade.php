<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Orion - Login</title>

   <!-- Custom fonts for this template-->
  <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
   <link href="{{asset('css/login.css')}}" rel="stylesheet">

</head>

<style>
  body{
    height: 100vh;
  }

  .full-height {
    height: 100vh;
  }

  .flex-center {
      align-items: center;
      display: flex;
      justify-content: center;
  }
</style>

<body class="bg-login-purple flex-center position-ref full-height">

  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block bg-login-image">
                <img src="/imagens/orion_logo_branca.png" alt="" class="" style="position:absolute; bottom:0px; width:40%;opacity:40%;">
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    
                    <h1 class="h4 text-gray-900 mb-4">Bem-vindo de volta cavaleiro!</h1>
          
                  </div>
                <form class="user" method="post" action="/login">
                    @csrf
                    <div class="form-group">
                    <input type="text"  name="cpf" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Informe login" value="{{old('cpf')}}" required>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Informe senha" required>
                    </div>
                    {{-- <div class="form-group">
                      <div class="custom-control custom-checkbox small">
                        <input type="checkbox" class="custom-control-input" id="customCheck">
                        <label class="custom-control-label" for="customCheck">Remember Me</label>
                      </div>
                    </div> --}}
                    <button class="btn btn-login-purple btn-user btn-block">
                      Login
                    </button>
                    <hr>
                    {{-- <a href="index.html" class="btn btn-google btn-user btn-block">
                      <i class="fab fa-google fa-fw"></i> Login with Google
                    </a>
                    <a href="index.html" class="btn btn-facebook btn-user btn-block">
                      <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                    </a> --}}
                  </form>
                  <hr>
                  <div class="text-center">
                    <a class="small" href="#">Esqueceu a senha?</a>
                  </div>
                  {{-- <div class="text-center">
                    <a class="small" href="register.html">Create an Account!</a>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>
  
  @if ($errors->any()) 

  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content bg-login-m">
        <div class="modal-header">
          <h5 class="modal-title text-white" id="exampleModalLabel">Algo deu errado!</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">  
          <ul> 
          @foreach ($errors->all() as $error)
          
              <li class="text-white">{{ $error }}</li>
            @endforeach
          </ul>
          </div>
        <div class="modal-footer">
          <button class="btn btn-login-m" type="button" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>

  @endif

  <script>
    $(document).ready(function () {
      $('#logoutModal').modal();
    })
  </script>

</body>

</html>
    