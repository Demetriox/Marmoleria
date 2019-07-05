<?php
 $result='';
if(isset($_POST['submit'])){
  require 'phpmailer/PHPMailerAutoload.php';

  $mail = new PHPMailer;

  //$mail->SMTPDebug = 3;                               // Enable verbose debug output

  $mail->isSMTP();                                      // Set mailer to use SMTP
  $mail->Host = 'smtp.gmail.com';  // Specify main and backup SMTP servers
  $mail->SMTPAuth = true;                               // Enable SMTP authentication
  $mail->Username = 'marmolmensaje@gmail.com';                 // SMTP username
  $mail->Password = 'marmol123';                           // SMTP password
  $mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
  $mail->Port = 587;                                    // TCP port to connect to

  $mail->setFrom('marmolmensaje@gmail.com');
  $mail->addAddress('marmolespaloverde@gmail.com');     // Add a recipient              // Name is optional
  $mail->addReplyTo('marmolespaloverde@gmail.com', 'Information');

  $mail->isHTML(true);                                  // Set email format to HTML
  $mail->Subject = 'Cotizacion';
  $mail->Body    = '<h1 align=center> La persona : '.$_POST['name'].
  '</br> <h4> Numero : </h4>'.$_POST['tel'].
  '</br> <h4> Ciudad : </h4>'.$_POST['city'].
  '</br> <h4> Nombre Asunto : </h4>'.$_POST['nameC'].
  '</br> <h4> Nombre Asunto : </h4>'.$_POST['texto'];


  if(!$mail->send()) {
      $result= 'Message could not be sent.';
  } else {
      $result = 'Message has been sent';
  }
}

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Marmoleria Paloverde</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Marmoleria Hermosillo Sonora Trabajos  en Granito , Marmol y Mas. Lapidas Baños y Locetas">

    <link rel="shortcut icon" href="images/marmoleriaPaloverde/favicon-16x16.png" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="css/animate.css">
    
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">

    <link rel="stylesheet" href="css/aos.css">

    <link rel="stylesheet" href="css/ionicons.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="css/jquery.timepicker.css">

    
    <link rel="stylesheet" href="css/flaticon.css">
    <link rel="stylesheet" href="css/icomoon.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-success ftco_navbar bg-success ftco-navbar-light" id="ftco-navbar">
	    <div class="container">
	      <a class="navbar-brand" href="index.html"><img alt="marmoleriaPverde" src="./images/marmoleriaPaloverde/marmoleriaPaloverde.png" style="height:80px"></img> </a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menu
	      </button>
		  
	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="index.html" class="nav-link">Tel: 01 662 250 5540</a></li>
				<li class="nav-item "><a href="index.html" class="nav-link">Inicio</a></li>
				<li class="nav-item"><a href="residenciales.html" class="nav-link">Residenciales</a></li>
				<li class="nav-item"><a href="serviciospantheon.html" class="nav-link">Servicios Panteon</a></li>
				<li class="nav-item"><a href="ornamentos.html" class="nav-link">Ornamentos</a></li>
				<li class="nav-item"><a href="laminas.html" class="nav-link">Laminas</a></li>
				<li class="nav-item active"><a href="cotizar.html" class="nav-link">Cotizar</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url('images/granito/luna pearl.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Cotizar</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Cotizar <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
  
    <section class="ftco-section contact-section bg-light">
        <div class="container">
          <div class="row d-flex mb-5 contact-info">
            <div class="col-md-12 mb-4">
              <h2 class="h4">Informacion de Contacto</h2>
            </div>
            <div class="w-100"></div>
            <div class="col-md-3">
              <p><span>Direccion:</span> Ramon Ballesteros # 42 Esquina Jose Ma. Valencia
                Hermosillo, Sonora 83280, junto al panteon </p>
            </div>
            <div class="col-md-3">
              <p><span>Telefono:</span> <a href="tel://016622505540">01 662 250 5540</a></p>
            </div>
            <div class="col-md-3">
              <p><span>Email:</span> <a href="mailto:marmolespaloverde@gmail.com">marmolespaloverde@gmail.com</a></p>
            </div>
            <div class="col-md-3">
              <p><a href="https://www.facebook.com/marmoles.paloverde"><span class="icon-facebook">acebook</span></a></p>
            </div>
          </div>
        </div>
      </section>
      <section class="ftco-section ftco-no-pt ftco-no-pb contact-section">
        <div class="container-wrap">
          <div class="row d-flex align-items-stretch no-gutters">
            <div class="col-md-12 p-5 order-md-last">
                <h3>Pide tu Cotizacion</h3>
                <h1><?= $result; ?></h1>
              <form  method="POST">
                <div class="form-group">
                  <input type="text" name="name" class="form-control" placeholder="Nombre">
                </div>
                <div class="form-group">
                  <input type="number" name="tel" class="form-control" placeholder="Telefono">
                </div>
                <div class="form-group">
                      <input type="text" name="city" class="form-control" placeholder="Ciudad">
                </div>
                <div class="form-group">
                    <input type="text" name="dir" class="form-control" placeholder="Direccion">
                </div>
                <div class="form-group">
                  <input type="text" name="nameC" class="form-control" placeholder="Tipo Cotizacion">
                </div>
                <div class="form-group">
                  <input name="texto" cols="30" rows="7" maxlength="800" class="form-control" placeholder="Descripcion">
                </div>
                <div class="form-group">
                  <input type="submit" name="submit" value="Cotizar" class="btn btn-primary py-3 px-5">
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
              
             
    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container">
          <div class="row mb-5">
            <div class="col-md">
              <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Marmoleria Palo Verde</h2>
          <p>“NO QUEREMOS SER GRANDES QUEREMOS SER LOS MEJORES”</p>
          <p> Tel. 01 662 250 5540</p>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                  <li class="ftco-animate"><a href="https://www.facebook.com/marmolygranitompv/"><span class="icon-facebook"></span></a></li>
                </ul>
              </div>
            </div>
            <div class="col-md">
              <div class="ftco-footer-widget mb-4 ml-md-4">
                <h2 class="ftco-heading-2">Esta Pagina</h2>
                <ul class="list-unstyled">
                  <li><a href="index.html"><span class="icon-long-arrow-right mr-2"></span>Inicio</a></li>
                <li><a href="residenciales.html"><span class="icon-long-arrow-right mr-2"></span>Residenciales</a></li>
                <li><a href="serviciospantheon.html"><span class="icon-long-arrow-right mr-2"></span>Servicios de Panteón</a></li>
                <li><a href="ornamentos.html"><span class="icon-long-arrow-right mr-2"></span>Ornamentos</a></li>
                <li><a href="laminas.html"><span class="icon-long-arrow-right mr-2"></span>Laminas</a></li>
                <li><a href="cotizar.html"><span class="icon-long-arrow-right mr-2"></span>Cotizar</a></li>
                </ul>
              </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-4">
            <h2 class="ftco-heading-2">Ramon Ballesteros # 42 Esquina Jose Ma. Valencia
              Hermosillo, Sonora 83280, junto al panteon</h2>
          </div>
          </div>
            <div class="col-md">
               <div class="ftco-footer-widget mb-4">
                <h2 class="ftco-heading-2">Servicios</h2>
                <ul class="list-unstyled">
                  <li><a><span class="icon-long-arrow-right mr-2"></span>Remover Lapidas</a></li>
                  <li><a><span class="icon-long-arrow-right mr-2"></span>Lavabos</a></li>
                  <li><a><span class="icon-long-arrow-right mr-2"></span>Recubrimiento de Cocinas</a></li>
                  <li><a><span class="icon-long-arrow-right mr-2"></span>Recubrimiento de Baños</a></li>
                  <li><a><span class="icon-long-arrow-right mr-2"></span>Trabajos en Piedra Natural</a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 text-center">
  
              <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
    Copyright &copy; Hecha en <a href="http://helixcomputing.com/" target="_blank">Helix Computing </a> <i class="icon-heart" aria-hidden="true"></i> por <a href="http://helixcomputing.com/" target="_blank">Demetrio Contreras</a>
    <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>
          </div>
        </div>
      </footer>
      
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>

 
  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="js/main.js"></script>
    
  </body>
</html>