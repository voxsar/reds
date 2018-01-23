<!DOCTYPE html>
<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--Import materialize.css-->
		<link href="css/materialize.min.css" media="screen,projection" rel="stylesheet" type="text/css"><!--Let browser know website is optimized for mobile-->
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>REDS - Real Epidemic Data Relay Service</title>
		<meta name="keywords" content=",relay,epidemic,data">
		<meta name="description" content="A simple subscription based, no download, non-smart phone, real time data relay service between local small to medium clinics and large scale medical organizations using very simple day to day technologies.">
	</head>
	<body>
		<nav class="light-red lighten-1" role="navigation">
			<div class="nav-wrapper container">
				<a class="brand-logo" href="#" id="logo-container">
					<img src="img/weblogo.png" class="responsive-img" />
				</a>
				<ul class="right hide-on-med-and-down">
					<li>
						<a href="#">About REDS</a>
					</li>
					<li>
						<a href="#">The Team</a>
					</li>
					<li>
						<a href="#">Open Statistics</a>
					</li>
				</ul>

				<ul class="side-nav" id="nav-mobile">
					<li>
						<a href="#">About REDS</a>
					</li>
				</ul>
				<a class="button-collapse" data-activates="nav-mobile" href="#"><i class="material-icons">menu</i></a>
			</div>
		</nav>
		
		<div class="section no-pad-bot" id="index-banner">
			<div class="container">
				<br>
				<br>

				<h1 class="header center red-text">
					REDS Service
				</h1>

				<div class="row center">
					<h5 class="header col s12 light">
						Real Time Epidemic Data-Relay Service - Administrative Access Control
					</h5>
					<p>
						A simple subscription based, no download, non-smart phone, real time data relay service between local small to medium clinics and large scale medical organizations using very simple day to day technologies. The system uses multi-channel communication methods to enable users to relay data about encounters of patients with symptoms that match patterns of epidemics or an imminent outbreak
					</p>
				</div>

				<div class="row center">
					<a class="btn-large waves-effect waves-light red" href="sendalert.php" id="download-button">Start Using the relay</a>
				</div>
				<br>
				<br>
			</div>
		</div>

		<div class="container">
			<div class="section">
				<!--   Icon Section   -->

				<div class="row">
					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center light-red-text">
								<i class="large material-icons">hearing</i>
							</h2>

							<h5 class="center">
								Alerts all doctors, clinics and health centers
							</h5>

							<p class="light">
								Allows to notify all personnel in an area in very effective and quick manner that keeps, doctors and personnel updated about the potential outbreaks and other infomation
							</p>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center light-red-text">
								<i class="large  material-icons">import_export</i>
							</h2>

							<h5 class="center">
								Relay data back about cases
							</h5>

							<p class="light">
								The process of reporting and coordination between clinics and large scale organization, Hospitals, Survey Units can be done by this application
							</p>
						</div>
					</div>

					<div class="col s12 m4">
						<div class="icon-block">
							<h2 class="center light-red-text">
								<i class=" large  material-icons">settings</i>
							</h2>

							<h5 class="center">
								Easy to work with
							</h5>

							<p class="light">
								A web application that can be implemented as desktop application, mobile application and also run on the web with thin client technologies
							</p>
						</div>
					</div>
				</div>
			</div>
			<br>
			<br>
		</div>

		<footer class="page-footer red">
			<div class="container">
				<div class="row">
					<div class="col l6 s12">
						<h5 class="white-text">
							About REDS
						</h5>

						<p class="grey-text text-lighten-4">
							A simple subscription based, no download, non-smart phone, real time data relay service between local small to medium clinics and large scale medical organizations
						</p>
					</div>					
				</div>
			</div>

			<div class="footer-copyright">
				<div class="container">
					Initiative by Rotaract ACBT, Developed By <a class="red-text text-lighten-3" href="http://www.rotaractcolombomidtown.org">Rotaract Mid Town</a>
				</div>
			</div>
		</footer>
		<!--  Scripts-->
		<script src="https://code.jquery.com/jquery-2.1.1.min.js"></script> 
		<script src="js/materialize.js"></script> 
		<script src="js/init.js"></script>
	</body>
</html>