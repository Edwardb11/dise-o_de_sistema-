<?php
include_once('../php/conexionDB.php');
include_once('../php/consultas.php');


if (isset($_SESSION['id_doctor'])) {
	$vUsuario = $_SESSION['id_doctor'];
	$row = consultarDoctor($link, $vUsuario);
} else {
	$_SESSION['MensajeTexto'] = "Error acceso al sistema  no registrado.";
	$_SESSION['MensajeTipo'] = "p-3 mb-2 bg-danger text-white";
	header("Location: ./index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="../src/css/lib/bootstrap/css/bootstrap.min.css">

	<!-- Style -->
	<link rel="stylesheet" href="../src/css/admin.css">

	<!-- Font Awesome -->
	<link rel="stylesheet" href="../src/css/lib/fontawesome/css/all.css">

	<!-- jQuery UI -->
	<link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

	<link href="vendors/fullcalendar/fullcalendar.css" rel="stylesheet" media="screen">
	<link href='../src/js/lib/fullcalendar/main.css' rel='stylesheet' />
	<script src='../src/js/lib/fullcalendar/main.js'></script>

	<title>Perfect Teeth </title>
</head>

<body>



	<aside class="sidebar">
		<div class="toggle">
			<a href="#" class="burger js-menu-toggle" data-toggle="collapse" data-target="#main-navbar">
				<span></span>
			</a>
		</div>
		<div class="side-inner">
			<div class="profile">
				<img src="../src/img/admin_user.png" alt="Image" class="img-fluid">
				<h3 class="name"><?php echo utf8_decode($row['nombre'] . ' ' . $row['apellido']); ?></h3>
				<span class="country">Perfect Teeth </span>
			</div>
			<div class="nav-menu">
				<ul>
					<li class="accordion">

					<li><a href="inicioAdmin.php"><span class="icon-location-arrow mr-3"></span> <i class="far fa-calendar-check"></i>
							Citas
							pendientes
						</a></li>
					<li><a href="doctores.php"><span class="icon-location-arrow mr-3"></span><i class="fas fa-user-md"></i>
							Dentistas</a></li>
					<li><a href="calendar.php"><span class="icon-pie-chart mr-3"></span> <i class="far fa-calendar-alt"></i>
							Calendario</a>
					</li>
					<li><a href="../php/cerrar.php"><span class="icon-sign-out mr-3"></span><i class="fas fa-sign-out-alt"></i> Cerrar
							sesión </a>
					</li>
				</ul>
			</div>
		</div>

	</aside>


	<main class="bg bg-white">
		<div class="site-section ">
			<div class="container">
				<div class="row justify-content-center">
					<div class="col-md-12">
						<div class="content-box-large">
							<div>
								<ol class=" breadcrumb bg-white">
									<li class="breadcrumb-item">
										<a href="index.html">Inicio</a>
									</li>
									<li class="breadcrumb-item active">
										Calendario
									</li>
								</ol>

							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-12 text-info">
										<div class="p-3 mb-2 bg-info text-white text-center"> Calendario de Citas
										</div>
										<div id='calendar'></div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>


	<script src="../src/js/jquery.js"></script>

	<!-- <script src="../src/css/lib/bootstrap/js/bootstrap.min.js"></script> -->
	<script src="../src/js/admin.js"></script>
	<!-- jQuery UI -->
	<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
	<!-- Include all compiled plugins (below), or include individual files as needed -->
	<script src="../src/css/lib/bootstrap/js/bootstrap.min.js"></script>

	<script src="../src/js/calendar.js"></script>
</body>

</html>