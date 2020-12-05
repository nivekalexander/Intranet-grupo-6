




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    
    <link  rel="icon"   href="./assets/img/favicon.png" type="image/png" />
    <title>Intranet - MaxLearning</title>
  
    <link href="./assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="./assets/fonts/font.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    
    <!-- Custom styles for this template-->
    <link href="./assets/css/sb-admin-2.min.css" rel="stylesheet">
    <link href="./assets/css/Style.css" rel="stylesheet">
    <link href="./assets/css/jquery-confirm.css" rel="stylesheet">
    <link href="./assets/datatables/datatables.min.css" rel="stylesheet" type="text/css">

  <link rel="icon" href="img/logo/icon.jpg">
  
</head>

    <body id="login">

        <div id="contenedorLogin">

                    
        <div class="container "  style="margin-bottom: 38px;margin-top: 38px;">

                        <div class="row justify-content-center ">
                        <div class="col-xl-5 col-lg-5 col-md-5 ">

                            <div class="card o-hidden border-0 shadow-lg my-5 formlogin"><!-- controla la posicion superior -->
                            <div class="card-body p-6 ">
                                <!-- Nested Row within Card Body -->
                                <div class="row ">
                                


                                <div class="col-lg-12">

                                    <div class="p-6 center-login">
                                        <div class="text-center">
                                        
                                            <img src="./assets/img/logo.svg" alt="logo.svg">

                                        </div>
                                    <br><br>

                                    <form action="./controllers/main.validar.php" method="POST" class="user">

                                       
                                
                                        <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="usur" name="usur" aria-describedby="emailHelp" placeholder="Usuario" required>
                                        </div><br>
                                        <div class="form-group">
                                        <input type="password" class="form-control form-control-user" id="pass" name="pass" placeholder="Contraseña" required>
                                        </div>

                                        <div class="form-group">
                                           <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Recuérdame</label>
                                           </div>
                                        </div>
                                        
                                        
                                        <button class="btn  btn-user btn-block boton-login" type="submit" >
                                        Iniciar Sesion
                                        </button>
                                        <hr>
                                        
                                    </form>

                                    <hr>
                                        <div class="text-center">
                                    </div>
                                    
                                    </div>
                                </div>


                                </div>
                            </div>
                            </div>

                            </div>
                        </div>
                    </div>
                

        </div>
  
    <!-- Bootstrap core JavaScript-->
    <script src="./assets/vendor/jquery/jquery.min.js"></script>
    <script src="./assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="./assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    
    <script src="./assets/js/scripts-sidebarToggle.js"></script>
    <script src="./assets/js/scripts-global.js"></script>
    <script src="./assets/js/jquery-confirm.js"></script>

    <!-- Validacion datos errados -->
    <?php if(isset($_REQUEST['d'])){if($_REQUEST['d']==0){echo "<script>$.alert('Usuario y/o Contraseñas incorrectos');</script>"; }} ?>

    <!-- Page level plugins -->
    <script src="./assets/vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="./assets/js/demo/chart-area-demo.js"></script>
    <script src="./assets/js/demo/chart-pie-demo.js"></script>
    

    <!--Bootstrap-->

	  <script src="./assets/bootstrap/js/bootstrap.min.js"></script>

    <!--DataTable-->
    <script type="text/javascript" src="./assets/datatables/datatables.min.js"></script>

  </body>

</html>






