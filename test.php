<?php
    $result="";
    if(isset($_POST['submit'])){
        require 'phpmailer/PHPMailerAutoload.php';
        $mail = new PHPMailer;
        $mail->isSMTP();
        $mail->Host='smtp.gmail.com';
        $mail->Port=587;
        $mail->SMTPAuth=true;
        $mail->SMTPSecure='tls';
        $mail->Username='dowinnersmail@gmail.com';
        $mail->Password='Trabajo2021';

        $mail->setFrom($_POST['correo']);
        $mail->addAddress('rebecavparedes@gmail.com');
        $mail->addReplyTo($_POST['correo']);

        $mail->isHTML(true);
        $mail->Subject='Enviado por '.$_POST['correo'];
        $mail->Body='<h1 align=center>Correo: '.$_POST['correo'].'</h1>';
        
        if(!$mail->send()){
            $result="Algo esta mal, inténtelo de nuevo por favor.";
        }
        else {
            $result="Gracias por contactarnos, te responderemos lo más pronto posible.";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="keywords" content="">
    <meta name="viewport" content="">
    <meta name="author" content="Dowinners">
    <link rel="icon" href="img/logo-copa.png">
    <title>Dowinners - Betatesters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/line-icons.css">
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="css/owl.theme.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/nivo-lightbox.css">
    <link rel="stylesheet" href="css/main.css">    
    <link rel="stylesheet" href="css/responsive.css">

  </head>
  
  <body>

    <header class="main-header" id="header-wrapper">
      <div class="container">
    
        <div class="f-l">
          <a href="index.html">
            <img class="copa f-l" src="img/logo-copa.png">
            <img class="copa f-l" src="img/logo.png">
          </a>
        </div>
    
        <a class="menu-toggle" id="menu-toggle">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>
    
        <nav id="main-menu" class="main-menu" aria-expanded="false">
          <ul class="nav__menu">
            <li><a href="somos.html">¿Qué es dowinners?</a></li>
            <li><a href="idea.html">¿Cómo surgió la idea?</a></li>
            <li><a href="test.html">Equipo de Betatesters</a></li>
            
            <li class="social">
                <input type="checkbox" id="btn-mas">
                
                <div class="btn-mas">
                    <label for="btn-mas" class="icon-mas2">
                    <b>+</b></label>
                </div>
                <div class="redes">
                    <a href="#" class="fab fa-facebook-f"></a>
                    <a href="#" class="fab fa-instagram"></a>
                    <a href="#" class="fab fa-twitter"></a>
                    <a href="#" class="fab fa-youtube"></a>
                </div>
            </li>
            
          </ul>
        </nav>
      </div>
    </header>

    <div id="subscribe" class="section m80" style="padding: 50px 0 30px;">
        <div >
          <div class="row justify-content-center">
            <div class="col-lg-7 col-md-12 col-xs-12">
              <div class="subscribe-form">
                <div class="form-wrapper">
                  <div class="sub-title text-center" >
                    <h3 class="wow fadeInUp" data-wow-delay="0.1s">¿Quieres pertenecer al equipo de Betatesters?</h3>
                    <p class="pb2 wow fadeInUp" data-wow-delay="0.5s">Este equipo seran los primeros en probar la aplicación y enviar sugerencias de forma privada, gracias a su compromiso con el deporte.</p>
                    <h5 class="wow fadeInUp" data-wow-delay="0.8s">Escribe tu correo y sera enviado el archivo</h5>
                    <h5 class="wow fadeInUp" data-wow-delay="0.8s">para que instales la App Dowinners en tu móvil Android</h5>

                  </div>
                  <form>
                    <div class="row centro wow fadeInRight" data-wow-delay="1s">
                      <div class="col-9 form-line" >
                        <div class="form-group form-search">
                          <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo Gmail">
                          <button type="submit" class="btn btn-common btn-search" value="prueba" onClick="pruebaemail(correo.value);">Enviar</button>
                        </div> 
                        <h5 class="correcto"><?= $result; ?></h5>
                      </div>
                    </div>
                  </form>
                  <div class="sub-title text-center ">
                  <h5 class="mt3 wow fadeInUp" data-wow-delay="1.5s">Además Unete a nuestro grupo privado de Facebook</h5>
                  <a href="#" class="btn btn-border wow fadeInUp" data-wow-delay="1.8s"> Unete a Facebook</a>

                  <h5 class="mt3 wow fadeInUp" data-wow-delay="2s">Además Unete a nuestro grupo privado de Telegram</h5>
                  <a href="#" class="btn btn-border wow fadeInUp" data-wow-delay="2.1s">Unete a Telegram</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      
    <footer class="footer">
      <div id="copy-rights" class="col s12">
    
        <div class="container">
    
            <!-- Your Copy Right -->
            <p>Copyright © 2019 <a href="https://dowinners.com/">Dowinners</a></p>
    
            <!-- Your Social Network Links-->
            <div class="social-icons">
    
                <!-- Facebook -->
                <a href="https://www.facebook.com/Dowinners-510758356021806/">
                    <i class="fab fa-facebook-f shadow-button waves-effect waves-light waves-circle blue"></i>
                </a>
    
                <!-- Twitter -->
                <a href="https://twitter.com/Dowinners">
                    <i class="fab fa-twitter shadow-button waves-effect waves-light waves-circle light-blue lighten-2"></i>
                </a>
    
                <!-- Instagram -->
                <a href="https://www.instagram.com/dowinners/">
                    <i class="fab fa-instagram shadow-button waves-effect waves-light waves-circle amber darken-3"></i>
                </a>
    
                <!-- Youtube -->
                <a href="#">
                    <i class="fab fa-youtube shadow-button waves-effect waves-light waves-circle red"></i>
                </a>
    
            </div>
    
            <a style="color: white;cursor: pointer" href="politica.html">Políticas y términos</a>
    
        </div>
    
    </div>
    </footer>
    <!-- Footer Section End --> 

    <!-- Go To Top Link -->
    <a href="#" class="back-to-top" style="display: inline;">
      <i class="lni-chevron-up"></i>
    </a>

    <!-- Preloader -->
    <div id="preloader">
      <div class="loader" id="loader-1"></div>
    </div>
    <!-- End Preloader -->

    <!-- jQuery first, then Tether, then Bootstrap JS. -->
    <script src="js/jquery-min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/owl.carousel.js"></script> 
    <script src="js/jquery.mixitup.js"></script>       
    <script src="js/jquery.nav.js"></script>    
    <script src="js/scrolling-nav.js"></script>    
    <script src="js/jquery.easing.min.js"></script>     
    <script src="js/wow.js"></script>   
    <script src="js/jquery.counterup.min.js"></script>     
    <script src="js/nivo-lightbox.js"></script>     
    <script src="js/jquery.magnific-popup.min.js"></script>     
    <script src="js/waypoints.min.js"></script>     
    <script src="js/main.js"></script>


    <script src="js/simplyCountdown.min.js"></script>
    <script src="js/countdown.js"></script>
    
  </body>
</html>