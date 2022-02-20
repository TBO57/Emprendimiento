<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" type="image/png" href="img/Logo_png.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap" />
    <link rel="stylesheet" href="css/styles.css">
    <title>Increasing</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>

<body>
    <!-- navbar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light shadow p-3 mb-5 bg-white rounded">
        <div class="container">

            <!-- logo -->
            <a class="navbar-brand" href="/index.html"><img src="img/Logo_F_blanco.svg"></a>

            <!-- boton desplegable -->
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <!-- contenido boton desplegable -->
            <div class="collapse navbar-collapse" id="navbarSupportedContent">

                <!-- barra de busqueda -->
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-primary" type="submit">Search</button>
                </form>

                <!-- Botones de sesion -->
                <div class = "ms-auto d-flex">
                    <button class="btn btn-light" data-bs-toggle="modal" data-bs-target="#inicio">Iniciar sesión</button>
                    <button class="btn btn-primary ms-3" data-bs-toggle="modal" data-bs-target="#registro">Registrarse</button>
                </div>
            </div>
        </div>
    </nav>

    <!-- Modal registro -->
    <div class="modal fade modal-signin py-5" tabindex="-1" role="dialog" id="registro">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-5 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <!-- <h5 class="modal-title">Modal title</h5> -->
                    <h2 class="fw-bold mb-0">Registrate gratis</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
    
                <div class="modal-body p-5 pt-0">
                    <form action = "add_usuario.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="name" class="form-control rounded-4" id="floatingInput" placeholder="Juan Andres" name="nom">
                            <label for="floatingInput">Nombres</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="name" class="form-control rounded-4" id="floatingInput" placeholder="Salgado Ruiz"  name="ape">
                            <label for="floatingInput">Apellidos</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" name="cor">
                            <label for="floatingInput">Correo electrónico</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="number" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" name="cc">
                            <label for="floatingInput">Cedula</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="cellphone" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" name="tel">
                            <label for="floatingInput">Teléfono</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control " id="floatingPassword" placeholder="Password" name="psw">
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control rounded-4" id="floatingPassword" placeholder="Password" name="psw2">
                            <label for="floatingPassword">Confirmar contraseña</label>
                        </div>
                        <!-- <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Crear cuenta</button> -->
                        <input type="submit" value="crear cuenta">
                        <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>



<!--                         <hr class="my-4">
                        <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                        <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">
                            <svg class="bi me-1" width="16" height="16">
                                <use xlink:href="#twitter" />
                            </svg>
                            Sign up with Twitter
                        </button>
                        <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4" type="submit">
                            <svg class="bi me-1" width="16" height="16">
                                <use xlink:href="#facebook" />
                            </svg>
                            Sign up with Facebook
                        </button>
                        <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-4" type="submit">
                            <svg class="bi me-1" width="16" height="16">
                                <use xlink:href="#github" />
                            </svg>
                            Sign up with GitHub
                        </button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal inicio -->
    <div class="modal fade modal-signin py-5" tabindex="-1" role="dialog" id="inicio">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content rounded-5 shadow">
                <div class="modal-header p-5 pb-4 border-bottom-0">
                    <!-- <h5 class="modal-title">Modal title</h5> -->
                    <h2 class="fw-bold mb-0">Iniciar Sesión</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
    
                <div class="modal-body p-5 pt-0">
                    <form action = "validar.php" method="POST">
                        <div class="form-floating mb-3">
                            <input type="email" class="form-control rounded-4" id="floatingInput" placeholder="name@example.com" name="cor">
                            <label for="floatingInput">Correo electrónico</label>
                        </div>
                        <div class="form-floating mb-3">
                            <input type="password" class="form-control " id="floatingPassword" placeholder="Password" name="psw">
                            <label for="floatingPassword">Contraseña</label>
                        </div>
                        <!-- <button class="w-100 mb-2 btn btn-lg rounded-4 btn-primary" type="submit">Crear cuenta</button> -->
                        <input type="submit" value="crear cuenta">
                        <small class="text-muted">By clicking Sign up, you agree to the terms of use.</small>
                        <!-- <hr class="my-4">
                        <h2 class="fs-5 fw-bold mb-3">Or use a third-party</h2>
                        <button class="w-100 py-2 mb-2 btn btn-outline-dark rounded-4" type="submit">
                            <svg class="bi me-1" width="16" height="16">
                                <use xlink:href="#twitter" />
                            </svg>
                            Sign up with Twitter
                        </button>
                        <button class="w-100 py-2 mb-2 btn btn-outline-primary rounded-4" type="submit">
                            <svg class="bi me-1" width="16" height="16">
                                <use xlink:href="#facebook" />
                            </svg>
                            Sign up with Facebook
                        </button>
                        <button class="w-100 py-2 mb-2 btn btn-outline-secondary rounded-4" type="submit">
                            <svg class="bi me-1" width="16" height="16">
                                <use xlink:href="#github" />
                            </svg>
                            Sign up with GitHub
                        </button> -->
                    </form>
                </div>
            </div>
        </div>
    </div>
<!--  -->


<div class="container" style= "margin-bottom: 100px">
    <div class= "row" style="display: flex; flex: row wrap; justify-content: center;">
        <div class="col-12 col-md-3 col-lg-4"  style="margin-top: 14px; width: 300px;">
            <div class="card">
                <h4 class="card-title" style="margin:5px auto; font-size:19px;">Increasing Pagina Web</h4>
                <h7 class="card-title" style="margin:0px auto 4px; font-size:13px;">Tecnología</h7>
                <img src="./img/Penelope.jpg" alt="Probando..." class="card-img-top"" >
                <div class="card-body" style="padding-top:9px; padding-bottom:1px;">
                    <!-- <h5 class="card-title"></h5>   -->
                    <p class="card-text" style="font-size: 13px;">Penelope sueña con montar su propia panaderia con pan casero, pero actualmente no cuenta con la maquinaria necesaria para hacer los panes, tortas o frituras.</p>
                
                    <p style="margin-top:15px; font-size: 13px;">Capital necesario: $17'000.000 COP <br/> Rentabilidad: 18% anual</p>

                    <!-- <p class="card-text" style="margin:2px auto;"><b> Dinero recaudado: </b><br/></p> -->

                    <div class="progress">
                        <div class="progress-bar" role="progressbar" style="width: 29%;" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100">29%</div>
                        <div class="progress-bar bg-success" role="progressbar" style="width: 71%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100">71%</div>
                    </div>
                    <div style="display:flex;">
                    <div style="margin:2px auto; font-size:13px; height: 20px;">
                        <p style="margin:0px;">Recaudado</p>
                        <p style="margin:0px;"><b>$4'930.000</b></p>
                    </div>

                    <div style="margin:0 30px;">
                        <p style="margin:0px;"><b>   -   </b></p>
                        <p style="margin:0px;"><b>  -   </b></p>
                    </div>

                    <div style="margin:2px auto; font-size:13px;">
                        <p style="margin:0px;">Por recaudar</p>
                        <p style="margin:0px;"><b>$12'070.000</b></p>
                    </div>
                    </div>
                    <!-- <p style="margin:2px auto; font-size:13px;"><b>Recaudado</b>&nbsp&nbsp&nbsp-&nbsp&nbsp&nbsp<b>Por recaudar</b> <br/>$4'930.000 COP&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp-&nbsp&nbsp&nbsp&nbsp$12'070.000 COP</p> -->
                    <!-- <div class="progress">
                        <div class="progress-bar progress-bar-striped" role="progressbar" style="width: 50%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
            <div class="col-12 col-md-3 col-lg-4"  style="margin-top: 14px; width: 300px; ">
                <div class="card">
                    <h4 class="card-title" style="margin:5px auto; font-size:19px;">Panadería La Fresca</h4>
                    <h7 class="card-title" style="margin:0px auto 4px; font-size:13px;">Alimentos</h7>
                    <img src="./img/hakimi.jpg" alt="Probando..." class="card-img-top"" >
                    <div class="card-body" style="padding-top:9px; padding-bottom:1px;">
                        <!-- <h5 class="card-title"></h5>   -->
                        <p class="card-text" style="font-size: 13px;">La Fresca se especializa en la producción de panes especiales, elaborados de manera artesanal, ademas tendrá panes más innovadores que buscan conseguir un aspecto diferenciador frente a otras panaderías.
                        </p>
                    
                        <p style="margin-top:15px; font-size: 13px;">Capital necesario: $7'000.000 COP <br/> Rentabilidad: 10% anual</p>

                        <!-- <p class="card-text" style="margin:2px auto;"><b> Dinero recaudado: </b><br/></p> -->

                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 15%;" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100">15%</div>
                            <div class="progress-bar bg-success" role="progressbar" style="width: 85%" aria-valuenow="29" aria-valuemin="0" aria-valuemax="100">85%</div>
                        </div>
                        <div style="display:flex;">
                        <div style="margin:2px auto; font-size:13px; height: 20px;">
                            <p style="margin:0px;">Recaudado</p>
                            <p style="margin:0px;"><b>$1'050.000</b></p>
                        </div>

                        <div style="margin:0 30px;">
                            <p style="margin:0px;"><b>   -   </b></p>
                            <p style="margin:0px;"><b>  -   </b></p>
                        </div>

                        <div style="margin:2px auto; font-size:13px;">
                            <p style="margin:0px;">Por recaudar</p>
                            <p style="margin:0px;"><b>$5'950.000</b></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-1"></div>
        <div class="col-12 col-md-3 col-lg-4"  style="margin-top: 14px; width: 300px; ">
            <div class="card">
             <h4 class="card-title" style="margin:5px auto; font-size:19px;">Relojes V5</h4>
             <h7 class="card-title" style="margin:0px auto 4px; font-size:13px;">Accesorios</h7>
             <img src="./img/lucia.jpg" alt="Probando..." class="card-img-top"" >
             <div class="card-body" style="padding-top:9px; padding-bottom:1px;">
                 <!-- <h5 class="card-title"></h5>   -->
                 <p class="card-text" style="font-size: 13px;">Relojes World es un emprendimiento dedicado a la comercialización al por menor de artículos de relojería, tanto de hombre como de mujer y para cualquier edad. Además, contamos con servicio de reparación de relojes.
                </p>
               
                 <p style="margin-top:15px; font-size: 13px;">Capital necesario: $3'000.000 COP <br/> Rentabilidad: 12.5% anual</p>

                 <div class="progress">
                    <div class="progress-bar" role="progressbar" style="width: 36%;" aria-valuenow="36" aria-valuemin="0" aria-valuemax="100">36%</div>
                    <div class="progress-bar bg-success" role="progressbar" style="width: 64%" aria-valuenow="64" aria-valuemin="0" aria-valuemax="100">64%</div>
                 </div>
                <div style="display:flex;">
                 <div style="margin:2px auto; font-size:13px; height: 20px;">
                    <p style="margin:0px;">Recaudado</p>
                    <p style="margin:0px;"><b>$1'080.000</b></p>
                </div>

                <div style="margin:0 30px;">
                    <p style="margin:0px;"><b>   -   </b></p>
                    <p style="margin:0px;"><b>  -   </b></p>
                </div>

                <div style="margin:2px auto; font-size:13px;">
                    <p style="margin:0px;">Por recaudar</p>
                    <p style="margin:0px;"><b>$1'920.000</b></p>
                </div>
                </div>
             </div>
            </div>
            
        </div>

    </div>
 </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"></script>

    <footer class="pie-pagina">

        <div class="grupo1">

            <div class="box" id="logo">
                <figure>
                    <a href="#">
                        <img src="img/Logo_F_negro.svg" alt="Logo">
                    </a>
                </figure>
            </div>

            <div class="box">
                <h5>Sobre Nosotros</h5>
                <p>Increasing posibilita que los emprendedores puedan recibir apoyo económico y asesorias para llevar a cabo sus ideas de negocio</p>
            </div>

            <div class="box">
                <h5>Siguenos en nuestras redes sociales:</h5>
                <div class="red-social">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-twitter"></a>
                    <a href="#" class="fa fa-youtube"></a>
                </div>
            </div>

            <div class="box">
                <h5>Soporte</h5>
                <p>increasin@gmail.com</p>
                <p>+57 315 256 9012</p>
            </div>
            
        </div>

        <div class="grupo2">
            <small>&copy; 2022 <b>Increasing</b> - Todos los Derechos Reservados.</small>
        </div>

    </footer>  

    <script src="https://kit.fontawesome.com/849c11d1ad.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <link href=" https://cdn.datatables.net/1.11.3/css/dataTables.bootstrap5.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/dataTables.bootstrap5.min.js"></script>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

</body>
</html>