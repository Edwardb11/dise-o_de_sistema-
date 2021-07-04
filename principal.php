<?php
include_once('./php/conexionDB.php');
include_once('./php/consultas.php');


if (isset($_SESSION['id_usuario'])) {
     $vUsuario = $_SESSION['id_usuario'];
     $row = consultarPaciente($link, $vUsuario);
} else {
     $_SESSION['MensajeTexto'] = "Error acceso al sistema  no registrado.";
     $_SESSION['MensajeTipo'] = "p-3 mb-2 bg-danger text-white";
     header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>

     <title>Perfect Teeth </title>
     <!-- ICONO -->
     <link rel="icon" href="./src/img/logo.png" type="image/png" />

     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="Tooplate">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="src/css/bootstrap.min.css">
     <link rel="stylesheet" href="src/css/font-awesome.min.css">
     <link rel="stylesheet" href="src/css/animate.css">
     <link rel="stylesheet" href="src/css/owl.carousel.css">
     <link rel="stylesheet" href="src/css/owl.theme.default.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="src/css/tooplate-style.css">

</head>

<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">

               <span class="spinner-rotate"></span>

          </div>
     </section>


     <!-- HEADER -->
     <header>
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-8">
                         <p>Bienvenido <?php echo utf8_decode($row['usuario']); ?> a una atención odontologica profesional</p>
                    </div>

                    <div class="col-md-8 col-sm-7 text-align-right">
                         <span class="phone-icon"><i class="fa fa-phone"></i> +1 (849) 856 4014</span>
                         <span class="date-icon"><i class="fa fa-calendar-plus-o"></i> 8:00 AM - 7:00 PM
                              (Lunes-Viernes)</span>
                         <span class="email-icon"><i class="fa fa-envelope-o"></i> <a href="#">perfect-teeth00@hotmail.com</a></span>
                         <a href="php/cerrar.php" class="badge"><i class="fas fa-sign-out-alt"></i> Cerrar Sesíon</a>

                    </div>

               </div>
          </div>
     </header>


     <!-- MENU -->
     <section class="navbar navbar-default navbar-static-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href=" principal.html" class="navbar-brand"><img src="src/img/logo.png" width="20px" height="20px" alt="Logo"></a>
                    <a href=" principal.html" class="navbar-brand">Perfect Teeth </a>

               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="#top" class="smoothScroll">Inicio</a></li>
                         <li><a href="#about" class="smoothScroll">Nosotros</a></li>
                         <li><a href="#team" class="smoothScroll">Dentistas</a></li>
                         <li><a href="#perfil" class="smoothScroll">Perfil</a></li>
                         <li><a href="#google-map" class="smoothScroll">Conctato</a></li>
                         <li class="appointment-btn"><a href="#appointment">Realizar una Cita</a></li>

                    </ul>
               </div>

          </div>
     </section>


     <!-- HOME -->
     <section id="home" class="slider" data-stellar-background-ratio="0.5">
          <div class="container">
               <div class="row">

                    <div class="owl-carousel owl-theme">
                         <div class="item item-first">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>Soy un dentista. Yo creo sonrisas. ¿Cuál es tu súper poder? </h3>
                                        <h1>Vida saludable</h1>
                                        <a href="#team" class="section-btn btn btn-default smoothScroll">Conoce a
                                             nuestros dentista</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-second">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>vamos a hacer tu vida más feliz</h3>
                                        <h1>Nuevo estilo de vida</h1>
                                        <a href="#about" class="section-btn btn btn-default btn-gray smoothScroll">Más
                                             Sobre nosotros</a>
                                   </div>
                              </div>
                         </div>

                         <div class="item item-third">
                              <div class="caption">
                                   <div class="col-md-offset-1 col-md-10">
                                        <h3>La odontología no es cara, lo que es caro es el descuido.</h3>
                                        <h1>Información personal</h1>
                                        <a href="#perfil" class="section-btn btn btn-default btn-blue smoothScroll">Perfil</a>
                                   </div>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- ABOUT -->
     <section id="about">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.6s">Bienvenido a Perfect Teeth </h2>
                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <p>En esta Clínica se ofrecen Servicios Odontológicos a niños y adultos en las
                                        diferentes ramas de la Odontología. Entre ellas podemos incluir: Diagnóstico,
                                        Emergencias, Radiología, Periodoncia, Operatoria Dental, Odontopediatría,
                                        Endodoncia, Prótesis (Fija, Parcial Removible y Total), Cirugía y Ortodoncia.
                                   </p>

                                   <h5>Visión</h5>
                                   <p>Ser la institución líder en servicios odontológicos a nivel nacional y América
                                        Latina; logrando la expansión de las coberturas, la mejora continúa de los
                                        procesos y garantizando calidad y profesionalidad.</p>
                                   <h5>Misión</h5>
                                   <p>Brindar un servicio de excelencia en el área de salud oral, basado en
                                        conocimientos, alta tecnología y calidez humana que cubran las necesidades y
                                        expectativas de nuestros pacientes e interesados.</p>
                              </div>
                              <figure class="profile wow fadeInUp" data-wow-delay="1s">
                                   <img src="src/img/author-image.jpg" class="img-responsive" alt="">
                                   <figcaption>
                                        <h3>Dr. Jiminian Cruz </h3>
                                        <p> Odontólogo general</p>
                                   </figcaption>
                              </figure>
                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- TEAM -->
     <section id="team" data-stellar-background-ratio="1">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <div class="about-info">
                              <h2 class="wow fadeInUp" data-wow-delay="0.1s">Nuestros dentistas</h2>
                         </div>
                    </div>

                    <div class="clearfix"></div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.2s">
                              <img src="src/img/team-image1.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Francisco Rosario </h3>
                                   <p>Odontopediatra</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i>+1 (829) 856 4014</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">francisco@hotmail.com</a></p>
                                   </div>
                              </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.4s">
                              <img src="src/img/team-image2.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Stewart Diaz</h3>
                                   <p>Ortodoncista/Endodoncista</p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> 010-070-0170</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">Stewart@company.com</a></p>
                                   </div>
                              </div>

                         </div>
                    </div>

                    <div class="col-md-4 col-sm-6">
                         <div class="team-thumb wow fadeInUp" data-wow-delay="0.6s">
                              <img src="src/img/team-image3.jpg" class="img-responsive" alt="">

                              <div class="team-info">
                                   <h3>Arlenis Hernández </h3>
                                   <p>Patólogo oral </p>
                                   <div class="team-contact-info">
                                        <p><i class="fa fa-phone"></i> +1 (829) 462-9992</p>
                                        <p><i class="fa fa-envelope-o"></i> <a href="#">arlenis@company.com</a></p>
                                   </div>

                              </div>

                         </div>
                    </div>

               </div>
          </div>
     </section>


     <!-- MAKE AN APPOINTMENT -->
     <section id="appointment" data-stellar-background-ratio="3">
          <div class="container">
               <div class="row">

                    <div class="col-md-6 col-sm-6">
                         <img src="src/img/appointment-image.jpg" class="img-responsive" alt="">
                    </div>

                    <div class="col-md-6 col-sm-6">
                         <!-- CONTACT FORM HERE -->
                         <form id="appointment-form" role="form" method="post" action="#" enctype="multipart/form-data">

                              <!-- SECTION TITLE -->
                              <div class="section-title wow fadeInUp" data-wow-delay="0.4s">
                                   <h2>Realizar una Cita</h2>
                              </div>

                              <div class="wow fadeInUp" data-wow-delay="0.8s">
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Nombre</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Nombre " required>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="name">Apellido</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Apellido" required>
                                   </div>


                                   <div class="col-md-6 col-sm-6">
                                        <label for="email">Correo Electrónico</label>
                                        <input type="email" class="form-control" id="email" name="email" placeholder="Correo Electrónico" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Fecha de nacimiento</label>
                                        <input type="date" name="time" value="" class="form-control" name="fecha_nacimiento" id="fecha_nacimiento" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Fecha de la cita</label>
                                        <input type="date" name="date" value="" class="form-control" name="fecha_cita" id="fecha_cita" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="date">Hora de la cita</label>
                                        <input type="time" name="date" value="" class="form-control" name="hora" id="hora" required>
                                   </div>

                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Consulta</label>
                                        <select class="form-control">
                                             <option>Revisión general</option>
                                             <option>Limpieza bucal</option>
                                             <option>Empastes</option>
                                             <option>Endodoncia</option>
                                             <option>Ortodoncia</option>
                                             <option>Prótesis</option>
                                             <option>Implantes</option>
                                             <option>Cirugías bucales</option>
                                             <option>Cosmética dental </option>
                                        </select>
                                   </div>
                                   <div class="col-md-6 col-sm-6">
                                        <label for="select">Dentista</label>
                                        <select class="form-control">
                                             <option> Francisco Rosario</option>
                                             <option> Arlenis Hernández</option>
                                             <option> Stewart Diaz</option>

                                        </select>
                                   </div>

                                   <div class="col-md-12 col-sm-12">
                                        <label for="telephone">Teléfono</label>
                                        <input type="tel" class="form-control" id="phone" name="phone" placeholder="Teléfono" required>

                                        <button type="submit" class="form-control" id="cf-submit" name="submit">Enviar</button>
                                   </div>
                              </div>
                         </form>
                    </div>

               </div>
          </div>
     </section>

     <!-- perfil -->
     <section id="perfil" style="margin-top: 10%;">
          <div class="container">
               <div class="main-body">
                    <div class="row gutters-sm">
                         <div class="col-md-4 mb-3">
                              <div class="card">
                                   <div class="card-body">
                                        <div class="d-flex flex-column align-items-center text-center">
                                             <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="Admin" class="rounded-circle" width="150">
                                             <div class="mt-3">
                                                  <h4>Nombre completo</h4>
                                                  <p class="text-secondary mb-1">Perfect Teeth</p>
                                                  <p class="text-muted font-size-sm">Correo electrónico</p>

                                             </div>
                                        </div>
                                   </div>
                              </div>
                         </div>

                         <div class="col-md-8">
                              <div class="card mb-3">
                                   <div class="card-body">
                                        <div class="row">
                                             <div class="col-sm-3">
                                                  <h5 class="mb-0"> Nombre </h5>
                                             </div>
                                             <div class="col-sm-9 text-secondary">
                                                  Texto aqui
                                             </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                             <div class="col-sm-3">
                                                  <h5 class="mb-0"> Apellido</h5>
                                             </div>
                                             <div class="col-sm-9 text-secondary">
                                                  Texto aqui
                                             </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                             <div class="col-sm-3">
                                                  <h5 class="mb-0">Correo electrónico</h5>
                                             </div>
                                             <div class="col-sm-9 text-secondary">
                                                  Texto aqui
                                             </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                             <div class="col-sm-3">
                                                  <h5 class="mb-0">Télefono</h5>
                                             </div>
                                             <div class="col-sm-9 text-secondary">
                                                  Texto aqui
                                             </div>
                                        </div>
                                        <hr>
                                        <div class="row">
                                             <div class="col-sm-3">
                                                  <h5 class="mb-0">Edad</h5>
                                             </div>
                                             <div class="col-sm-9 text-secondary">
                                                  19
                                             </div>
                                        </div>
                                        <hr>

                                        <hr>
                                        <div class="row">
                                             <div class="col-sm-12">
                                                  <a class="btn btn-info " target="__blank" href="#">Editar</a>
                                             </div>
                                        </div>
                                   </div>
                                   <br>
                              </div>
                              <br>

                              <div class="row">
                                   <div class="col-sm-6 mb-3">
                                        <div class="card h-100">
                                             <div class="card-body">
                                                  <h4 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Historial
                                                       </i>Medico
                                                  </h4>
                                                  <table class="table table-responsive table-striped">
                                                       <thead>
                                                            <tr>
                                                                 <th>Historial </th>
                                                                 <th>Fecha</th>
                                                                 <th>Hora</th>
                                                                 <th>Doctor</th>
                                                                 <th>Comentario </th>
                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            <tr>
                                                                 <td>Liempieza bocal</td>
                                                                 <td>11/09/2021</td>
                                                                 <td>10:00AM</td>
                                                                 <td>Francisco Rosario</td>
                                                                 <td>Listerin 3 veces al dia </td>

                                                            </tr>
                                                       </tbody>
                                                  </table>

                                             </div>
                                             <div class="card-body">
                                                  <h4 class="d-flex align-items-center mb-3"><i class="material-icons text-info mr-2">Citas
                                                       </i>Pedientes
                                                  </h4>
                                                  <table class="table table-responsive table-striped">
                                                       <thead>
                                                            <tr>
                                                                 <th>Citas pendientes </th>
                                                                 <th>Fecha</th>
                                                                 <th>Hora</th>
                                                                 <th>Doctor</th>
                                                                 <th>Comentario </th>
                                                            </tr>
                                                       </thead>
                                                       <tbody>
                                                            <tr>
                                                                 <td>Endodoncia</td>
                                                                 <td>11/09/2021</td>
                                                                 <td>10:00AM</td>
                                                                 <td>Francisco Rosario</td>

                                                            </tr>
                                                       </tbody>
                                                  </table>
                                             </div>
                                        </div>
                                   </div>
                              </div>

                         </div>
                    </div>
               </div>
          </div>
     </section>

     <!-- GOOGLE MAP -->
     <section id="google-map">
          <!-- How to change your own map point
            1. Go to Google Maps
            2. Click on your location point
            3. Click "Share" and choose "Embed map" tab
            4. Copy only URL and paste it within the src="" field below
	-->
          <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d9270.657135264788!2d-70.54564457023845!3d19.323332001004932!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m0!4m5!1s0x8eb1d392eccca541%3A0x18ab77759cfce696!2sSabana%20Larga%20O%20Villas%20Til%C3%ADn%2C%2041000!3m2!1d19.325698199999998!2d-70.5415113!5e0!3m2!1sen!2sdo!4v1623776594763!5m2!1sen!2sdo" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
     </section>


     <!-- FOOTER -->
     <footer data-stellar-background-ratio="5">
          <div class="container">
               <div class="row">

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s"> Datos de contacto</h4>
                              <p>Todos los derechos reservados 2021-2022</p>

                              <div class="contact-info">
                                   <p><i class="fa fa-phone"></i> +1 (849) 856 4014</p>
                                   <p><i class="fa fa-envelope-o"></i> <a href="#">perfect-teeth00@hotmail.com</a></p>
                              </div>
                         </div>
                    </div>

                    <div class="col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <h4 class="wow fadeInUp" data-wow-delay="0.4s">Últimas noticias</h4>
                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="https://www.odontologos.mx/odontologos/noticias/3508/manejo-del-blanqueamiento-dental-no-vital" target="_blank"><img src="src/img/blanqueamiento.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="https://www.odontologos.mx/odontologos/noticias/3508/manejo-del-blanqueamiento-dental-no-vital" target="_blank">
                                             <h5>Blanqueamiento dental no vital</h5>
                                        </a>
                                        <span>Mayo 24, 2021</span>
                                   </div>
                              </div>

                              <div class="latest-stories">
                                   <div class="stories-image">
                                        <a href="https://www.odontologos.mx/odontologos/noticias/3407/como-ha-evolucionado-la-odontologia-moderna" target="_blank"></a><img src="src/img/evolucion.jpg" class="img-responsive" alt=""></a>
                                   </div>
                                   <div class="stories-info">
                                        <a href="https://www.odontologos.mx/odontologos/noticias/3407/como-ha-evolucionado-la-odontologia-moderna" target="_blank">
                                             <h5> Evolución de la odontología moderna</h5>
                                        </a>
                                        <span>Diciembre 07, 2020</span>
                                   </div>
                              </div>
                         </div>
                    </div>

                    <div class=" col-md-4 col-sm-4">
                         <div class="footer-thumb">
                              <div class="opening-hours">
                                   <h4 class="wow fadeInUp" data-wow-delay="0.4s">Horario de
                                        apertura</h4>
                                   <p>Lunes - Viernes <span>08:00 AM - 7:00 PM</span></p>
                                   <p>Sábado <span>08:00 AM - 5:00 PM</span></p>
                                   <p>Domingo <span>Cerrado</span></p>
                              </div>

                              <ul class="social-icon">
                                   <li><a href="https://www.facebook.com/Perfect-Teeth-111123294536780" target=" _blank"" class=" fa fa-facebook-square" attr="facebook icon"></a>
                                   </li>

                              </ul>
                         </div>
                    </div>

                    <div class="col-md-12 col-sm-12 border-top">
                         <div class="col-md-4 col-sm-6">
                              <div class="copyright-text">
                                   <p>Copyright &copy; 2021 Perfect Teeth

                                        | Design: Edward</p>
                              </div>
                         </div>
                         <div class="col-md-6 col-sm-6">
                              <div class="footer-link">
                                   <a>Politica de privacidad </a>
                                   <a>Cookies</a>
                                   <a>Avisos legales </a>
                                   <a href="https://www.facebook.com/Perfect-Teeth-111123294536780" target="_blank">Facebook
                                   </a>
                              </div>
                         </div>
                         <div class="col-md-2 col-sm-2 text-align-center">
                              <div class="angle-up-btn">
                                   <a href="#top" class="smoothScroll wow fadeInUp" data-wow-delay="1.2s"><i class="fa fa-angle-up"></i></a>
                              </div>
                         </div>
                    </div>

               </div>
          </div>
     </footer>

     <!-- SCRIPTS -->
     <script src="src/js/jquery.js"></script>
     <script src="src/js/bootstrap.min.js"></script>
     <script src="src/js/jquery.sticky.js"></script>
     <script src="src/js/jquery.stellar.min.js"></script>
     <script src="src/js/wow.min.js"></script>
     <script src="src/js/smoothscroll.js"></script>
     <script src="src/js/owl.carousel.min.js"></script>
     <script src="src/js/custom.js"></script>

</body>

</html>