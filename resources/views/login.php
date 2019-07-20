<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Remextiven</title>

        <!--CSS-->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/basicLR.css">

    <!----- GOOGLE FONTS ----->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900|Open+Sans&display=swap" rel="stylesheet"> 
</head>
<body>

    <div class="bodyPageManta">
        <a class="navbar-brand aLogo" href="#">
                <img src="img/logoRemextiven.png" alt="" class="logoSuperior">
        </a> 
        <div class="cajaFija">      
            <h2>Bienvenido, inicia sesión</h2>
            <p>¿Eres nuevo?  <a href="#">Regístrate</a></p>

            <div class="contenidoCajaFija">
                <form>
                    <div class="form-group">
                        <span class="iconoInterno" id="basic-addon1"><img src="img/icons/smallIcons/man-user.png" alt="@"/></span>
                        <input type="mail" id="txtMail" class="form-control inputIconoInterno" placeholder="Ingresa tu Usuario">
                        <div id="validationMail" class="error">
                            <img src="img/icons/exclamation.png" alt="¡Error! ">
                            <p id="pValidationMail"></p>
                        </div>
                    </div>
                    <div class="form-group">
                        <span class="iconoInterno" id="basic-addon1"><img src="img/icons/smallIcons/key.png" alt="@"/></span>
                        <input id="txtPass" type="password" class="form-control inputIconoInterno" placeholder="Ingresa tu Usuario">
                        <div id="validationPass" class="error">
                            <img src="img/icons/exclamation.png" alt="¡Error! ">
                            <p id="pValidationPass">Debe ingresar un mail valido</p>
                        </div>
                    </div>

                    <p id="error"></p>

                    <button class="btn btn-success btnCircle mt-4" type="submit">Iniciar Sesion</button>
                    <p><a href="#">Olvidé mi contraseña</a></p>
                </form>
            </div>

            <hr class="lineaCortante"/>
            <p id="pTerminos">Al continuar, estarás aceptando nuestros <a href="#">Términos y condiciones</a></p> 

        </div>
    </div>

    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script type="text/javascript" src="js/validaciones.js"></script>
</body>
</html>