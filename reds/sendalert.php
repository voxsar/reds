<!DOCTYPE html>
<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--Import materialize.css-->
		<link href="css/materialize.min.css" media="screen,projection" rel="stylesheet" type="text/css"><!--Let browser know website is optimized for mobile-->
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>Enter Message to Send</title>
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
				<a href="#" data-activates="slide-out" class="right show-on-large button-collapse"><i class="material-icons">menu</i></a>

				<ul class="side-nav" id="nav-mobile">
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
			</div>
		</nav>
		<ul id="slide-out" class="side-nav">
			<li>
				<div class="user-view">
					<div class="background">
						<img src="img/office.jpg">
					</div>
					<a href="#!user"><img class="circle" src="img/yuna.jpg"></a>
					<a href="#!name"><span class="white-text name">Doctor Doe</span></a>
					<a href="#!email"><span class="white-text email">doctor@gmail.com</span></a>
				</div>
			</li>
			<li><a class="subheader">Sent Messages</a></li>
			<li><a class="waves-effect" href="#!"><i class="material-icons">send</i>Send Message</a></li>
			<li><a class="waves-effect" href="#!"><i class="material-icons">send</i>Quick Alert</a></li>
			<li><a class="waves-effect" href="#!"><i class="material-icons">inbox</i>Previous Messages</a></li>
			<li><div class="divider"></div></li>
			<li><a class="subheader">Recieved Messages</a></li>
			<li><a class="waves-effect" href="#!"><i class="material-icons">assignment</i>Priority Inbox</a></li>
			<li><a class="waves-effect" href="#!"><i class="material-icons">assignment</i>Inbox</a></li>
		</ul>
  
		<div class="section no-pad-bot" id="index-banner">
			<div class="container">
				<br>
				<br>

				<h1 class="header center red-text">
					Send an Alert Message
				</h1>

				<div class="row center">
					<h5 class="header col s12 light">
						Select a District or Send Nation Wide Alert
					</h5>
				</div>

				<br>
				<br>
			</div>
		</div>

		<div class="container">
			<div class="section">
				<!--   Icon Section   -->

				<div class="row">
					<form class="col s12">
						<div class="row">
							<div class="input-field col s6">
								<input class="validate" id="first_name" placeholder="Topic of Alert" type="text"> <label for="first_name">Topic</label>
							</div>

							<div class="input-field col s6">
								<select>
							      <option value=""  selected>Type of Alert</option>
							      <option value="1">Doomsday Alert</option>
							      <option value="2">Post Apocolyptic Alert</option>
							      <option value="3">Danger Alert</option>
							      <option value="3">Potential Outbreak</option>
							      <option value="4">Warning</option>
							    </select>
							    <label>Type of Alert</label>
							</div>
						</div>

						<div class="row">
							<div class="input-field col s12">
								<textarea id="textarea1" class="materialize-textarea"></textarea>
								<label for="textarea1">Send Alert Message (120 Character Limit)</label>
							</div>
						</div>


						<div class="row">
							<div class="col s12">
								<a class="waves-effect waves-light btn"><i class="material-icons right">send</i>Send Alert</a>
							</div>
						</div>
					</form>
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
		<script type="text/javascript">
			$(document).ready(function() {
    $('select').material_select();
  });
		</script>
	</body>
</html>