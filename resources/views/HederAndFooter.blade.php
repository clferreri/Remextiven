<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Prueba</title>

    <!----- STYLE CSS ----->  
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css/estiloFooter.css">

    <!----- GOOGLE FONTS ----->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,900|Open+Sans&display=swap" rel="stylesheet"> 
</head>

<body>
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">
            <img src="img/logoRemextiven.png" width="160" height="90" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>          
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link text-center" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="#">Nosotros</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="#">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="#">¿Porque Remextiven?</a>
            </li>
          </ul>
          <div class="form-inline my-2 my-lg-0 justify-content-center">
            <button type="button" class="btn btnCircle btn-outline-primary" onclick="document.getElementById('modalLogin').style.display='block'" style="width:auto;">Iniciar Sesion</button>
            <button class="btn btnCircle btn-primary" type="button">Unete</button>
          </div>
        </div>
      </nav>
      <br/>
      <br/>
      <br/>
      sdfsd
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
      <br/>
        <!-- Login -->
        <div id="modalLogin" class="modal" >
        
            <form class="modal-content animate" action="/action_page.php">
                <!--Cabezal de login-->
                <div class="imgcontainer">
                    <span onclick="document.getElementById('modalLogin').style.display='none'" class="close" title="Close Modal">&times;</span>
                    <img src="img/logoRemextiven.png" alt="Remextiven" class="logoLogin">
                </div>
            
                <!--caja-->
                <div class="contenedor-cuerpo">
                    <label>Usuario</label>
                    <div class="form-group">
                        <span class="iconoInterno" id="basic-addon1"><img src="img/icons/smallIcons/man-user.png" alt="@"/></span>
                        <input type="mail" id="txtMail" class="form-control inputIconoInterno" placeholder="Ingresa tu Usuario" required=""/>
                        <div id="validationMail" class="error">
                            <img src="img/icons/exclamation.png" alt="¡Error! ">
                            <p id="pValidationMail"></p>
                        </div>
                    </div>

                    <label>Contraseña</label>
                    <div class="form-group">
                        <span class="iconoInterno" id="basic-addon1"><img src="img/icons/smallIcons/key.png" alt="@"/></span>
                        <input type="password" id="txtPass" class="form-control inputIconoInterno" placeholder="Ingresa tu contraseña" required=""/>
                        <div id="validationPass" class="error">
                            <img src="img/icons/exclamation.png" alt="¡Error! ">
                            <p id="pValidationPass">Debe ingresar un mail valido</p>
                        </div>
                    </div>
                    <br/>

                    <button class="btn btn-success btnCircle mt-4" type="submit">Iniciar Sesion</button>
                </div>
                
                <!--fondo-->
                <div class="container" style="background-color:#f1f1f1">
                    <span class="registerAcount"><p><a href="#">¿Perdiste tu contraseña?</a></p></span>
                    <span class="recoveryPassword"><a href="#">¿No tienes cuenta aun?</a></span>
                </div>
            </form>
        </div>
      
        
    
    <div class="container">
        @yield('contenido')
    </div>
  
    <br/>
    <br/>
    <br/>
    
    <br/>
    <br/>
    <br/>
    
    <br/>
    <br/>
    <br/>

    <!------- FOOTER PAGE ----->
    <footer>
        <div class="headerFooter">
            <ul>
                <li>
                    <a href="#">Sobre Nosotros</a>
                </li>
                <li>
                    <a href="#">Testimonios</a>
                </li>
                <li>
                    <a href="#">Preguntas Frecuentes</a>
                </li>
                <li>
                    <a href="#">Terminos y condiciones</a>
                </li>
                <li>
                    <a href="#">Contacto</a>
                </li>
            </ul>
        </div>
        <div class="bodyFooter">
            <section class="socialIcons">
                <a href="#"><img src="img/icons/socialIcons/sombreados/linkedin.png" alt="Nuestro Linkedin"/></a>
                <a href="#"><img src="img/icons/socialIcons/sombreados/youtube2.png" alt="Nuestro Canal de Youtube "/></a>
                <a href="#"><img src="img/icons/socialIcons/sombreados/facebook.png" alt="Nuestro Facebook"/></a>
                <a href="#"><img src="img/icons/socialIcons/sombreados/twitter.png" alt="Nuestro Twitter"/></a>
                <a href="#"><img src="img/icons/socialIcons/sombreados/instagram.png" alt="Nuestro Instagram"/></a>
            </section>
            <section class="sentenceRemextiven">
                <div>
                    <img src="img/logoRemextiven.png" style="width:20%;" alt="Remextiven"/>
                </div>
            </section>
            <section class="contactRemextiven">
                <ul>
                    <li><div class="lineWithIcon"><img src="img/icons/smallIcons/envelope.png" alt="Correo: "/><p>info@remextiven.com</p></div></li>
                    <li><div class="lineWithIcon"><img src="img/icons/smallIcons/phone-call.png" alt="Telefono: "/><p>(598) 093834456</p></div></li>
                    <li><div class="lineWithIcon"><img src="img/icons/smallIcons/placeholder.png" alt="Direccion: "/><p>Montevideo Uruguay</p></div></li>
                </ul>
            </section>
        </div>
        <div class="footerFooter">
            <div class="copyright">
                <p>Copyright </p>
                <img src="img/icons/smallIcons/simboloCopyrightPequeño.png" alt="Copyright "/>
                <p>2019 Remextiven. All Rights Reserved.</p>
            </div>
        </div>
    </footer>


    <!------ JS ----->
    
    <script type="text/javascript" src="js/jquery-3.4.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="js/validaciones.js"></script>

    <script>
        // Get the modal
        var modal = document.getElementById('modalLogin');
        
        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal) {
                modal.style.display = "none";
            }
        }
        </script>

</body>
</html>