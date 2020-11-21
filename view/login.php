   
     <?php require_once('./frames/header.php');?>


<body id="login">

    <div id="contenedorLogin">

                
    <div class="container  
        " style="margin-bottom: 38px;margin-top: 38px;"
    >

                    <div class="row justify-content-center ">
                    <div class="col-xl-5 col-lg-5 col-md-5 ">

                        <div class="card o-hidden border-0 shadow-lg my-5 formlogin"><!-- controla la posicion superior -->
                        <div class="card-body p-6 ">
                            <!-- Nested Row within Card Body -->
                            <div class="row ">
                            


                            <div class="col-lg-12">

                                <div class="p-6">
                                <div class="text-center">
                                    
                                <img src="../assets/img/logo.svg" alt="logo.svg">

                                </div>
                                <br>
                                <form class="user">
                                    
                                    
                                    <div class="form-group">
                                    <select class="form-control " >
                                    <option selected>Seleccione El Rol</option>
                                    <option>Instructor</option>
                                    <option>Aprendiz</option>
                                    <option>Administrador</option>
                                    </select>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                    <input type="email" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Usuario">
                                    </div>
                                    <div class="form-group">
                                    <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Contraseña">
                                    </div>
                                    
                                    <a href="index.html" class="btn  btn-user btn-block boton-login">
                                    Iniciar Sesion
                                    </a>
                                    <hr>
                                    
                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="forgot-password.html"> Necesitas ayuda?</a>
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
    
    <?php require_once('./frames/footer.php');?>
