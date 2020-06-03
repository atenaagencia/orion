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
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu&family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="{{asset('css/sb-admin-2.css')}}" rel="stylesheet">
   <link href="{{asset('css/login.css')}}" rel="stylesheet">

</head>

<style>
  .roboto-font{
    font-family: 'Roboto', sans-serif;
    font-weight: 900;
  }
  h1, h2, h3, h4{
    font-family: 'Ubuntu', 'sans-serif';
    font-weight: 900;
  }
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

        <div class="card o-hidden border-0 shadow-lg my-5 rounded-0">
          <div class="card-body rounded-0 p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none bg-light d-lg-block" style="padding-top: 10em;"><!--bg-login-image-->
                <h1 class="display-4 roboto-font text-purple text-center mx-auto">Orion <span class="fa fa-align-left text-secondary"></span></h1>
              </div>
              <div class="col-lg-6">
                <div class="p-5" id="teste">
                  <h1 class="d-none d-sm-block d-md-none display-4 roboto-font text-purple text-left">Orion</h1>
                  <h2 class="text-gray-900">Bem-vindo, cavaleiro!</h2><br><br>
                  <form class="user" method="post" action="/login">
                      @csrf
                      <div class="form-group">
                        <input type="text"  name="cpf" class="form-control form-control-user p-4" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Usuário" value="{{old('cpf')}}" required>
                      </div>
                      <div class="form-group">
                        <input type="password" name="password" class="form-control form-control-user p-4" id="exampleInputPassword" placeholder="Senha" required>
                      </div>
                      <button class="btn btn-login-purple btn-user btn-block p-3 mt-5">
                        <span class="h5 py-auto mx-auto my-auto font-weight-bold">Login</span>
                      </button>
                    </form>
                    
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    <div class="text-center">
      <span class="">Um produto de</span> <a class="small font-weight-bold text-light" href="http://www.atenaagencia.com" target="/blank">Atena Agencia</a>.
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
    