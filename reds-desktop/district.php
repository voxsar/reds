<!DOCTYPE html>
<html>
	<head>
		<!--Import Google Icon Font-->
		<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"><!--Import materialize.css-->
		<link href="css/materialize.min.css" media="screen,projection" rel="stylesheet" type="text/css"><!--Let browser know website is optimized for mobile-->
		<meta content="width=device-width, initial-scale=1.0" name="viewport">
		<title>Send Alert to District</title>
		<meta name="keywords" content=",relay,epidemic,data">
		<meta name="description" content="A simple subscription based, no download, non-smart phone, real time data relay service between local small to medium clinics and large scale medical organizations using very simple day to day technologies.">
		<style>
			area {
			    display: block;
			    background-color: #f00;
			}
		</style>
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
						Sent to <span class="provice">a</span> District or Send Nation Wide Alert
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
							<img src="img/lanka.jpg" class="responsive-img map" usemap="#Map" />
							<map name="Map" id="Map">
							    <area onmouseover="provices(this)" alt="" title="Jaffna" href="#" shape="poly" coords="272,94,186,88,121,60,127,34,164,26,193,23,212,22" />
							    <area onmouseover="provices(this)" alt="" title="Kilinochi" href="#" shape="poly" coords="176,148,203,129,204,123,275,103,215,93,195,96,179,96,171,107,166,109,161,114" />
							    <area onmouseover="provices(this)" alt="" title="Mullathive" href="#" shape="poly" coords="193,194,238,164,299,198,332,180,302,128,284,109,267,107,224,119,201,127" />
							    <area onmouseover="provices(this)" alt="" title="Anuradhapura" href="#" shape="poly" coords="252,405,297,368,318,322,331,271,326,212,298,206,273,212,256,249,227,269,202,261,179,252,162,284,148,310,157,330,210,352,232,369" />
							    <area onmouseover="provices(this)" alt="" title="Trincomalee" href="#" shape="poly" coords="331,314,380,333,384,348,390,343,397,331,414,329,423,329,414,297,401,278,395,288,384,289,380,284,369,281,366,279,372,273,380,269,388,263,379,237,358,214,347,195,337,194,327,194,314,193,307,197,304,198,321,204,326,218,324,223,324,242,326,255,331,265,339,277,341,284,345,283,331,304" />
							    <area onmouseover="provices(this)" alt="" title="Vavuniya" href="#" shape="poly" coords="199,249,222,272,234,252,246,245,253,252,277,222,270,211,277,211,294,201,291,181,279,165,262,164,240,169,234,184,227,191,230,199,232,207,220,221,210,221,200,226,195,232,193,236" />
							    <area onmouseover="provices(this)" alt="" title="Mannar" href="#" shape="poly" coords="141,269,167,276,168,255,225,201,197,193,190,184,195,146,184,147,175,153,173,169,160,180,148,194,140,200,145,234,146,247" />
							    <area onmouseover="provices(this)" alt="" title="Puthalam" href="#" shape="poly" coords="145,514,140,467,147,434,158,411,180,395,186,373,180,349,175,337,162,334,150,328,152,313,160,289,162,277,142,272,128,316,124,324,120,333,123,351,120,359,125,368,122,387,120,397,115,384,103,370,106,354,112,325,111,319,105,318,101,344,100,357,99,374,104,387,111,420,115,434,117,449,116,468,119,480,123,503,126,507,126,519" />
							    <area onmouseover="provices(this)" alt="" title="Kurunegala" href="#" shape="poly" coords="148,515,159,509,178,506,189,516,215,510,225,494,238,503,252,491,260,476,245,405,237,378,227,365,196,350,180,347,183,367,185,385,164,404,152,419,152,434,146,446,146,451,144,467,144,485,144,496" />
							    <area onmouseover="provices(this)" alt="" title="Matale" href="#" shape="poly" coords="261,476,276,494,294,489,310,485,332,478,343,461,340,433,328,435,310,438,292,430,301,416,309,402,309,386,298,377,287,382,277,393,273,397,271,403,261,411,255,414,251,416,249,425" />
							    <area onmouseover="provices(this)" alt="" title="Polonaruwa" href="#" shape="poly" coords="311,436,385,446,390,416,396,383,397,335,384,344,372,327,344,319,331,312,320,317,314,326,306,328,301,338,296,362,301,372,301,376,306,383,312,383,308,405,304,411,295,427,308,437" />
							    <area onmouseover="provices(this)" alt="" title="Colombo" href="#" shape="poly" coords="135,617,146,610,172,607,174,610,181,606,193,602,189,594,195,583,196,576,189,576,170,580,165,586,153,583,140,577,122,578,129,611,134,616" />
    							<area onmouseover="provices(this)" alt="" title="Batticaloa" href="#" shape="poly" coords="390,425,430,449,430,466,435,471,440,473,449,474,466,477,470,493,481,486,495,475,492,462,486,449,481,434,477,427,470,419,458,413,452,403,445,393,442,381,434,372,428,360,424,346,423,336,416,330,406,330,402,330,397,332,402,337,401,346,400,352,401,362,402,365,404,372,408,384,405,391,400,392,395,392,393,392,389,393,388,399,387,410,388,412" />
    							<area onmouseover="provices(this)" alt="" title="Ampara" href="#" shape="poly" coords="457,647,477,664,496,624,498,610,500,603,502,594,504,585,505,573,509,562,506,549,506,541,506,528,506,512,506,504,502,485,496,474,489,475,480,481,474,484,468,490,465,489,465,479,460,474,443,469,431,464,427,459,425,450,418,442,406,437,398,432,394,427,386,431,386,437,384,443,381,443,371,437,365,434,358,434,351,433,345,435,338,449,346,460,352,470,359,466,368,463,374,457,378,457,382,461,382,478,382,487,383,501,387,506,390,514,393,519,399,513,403,507,413,490,417,486,423,482,427,482,433,486,433,494,433,495,434,501,438,507,440,517,444,525,439,539,439,541,442,546,445,549,452,555,460,581,462,589" />
    							<area onmouseover="provices(this)" alt="" title="Moneragale" href="#" shape="poly" coords="331,703,348,690,362,681,379,684,384,686,391,693,425,687,432,678,438,667,447,659,455,649,458,638,461,614,460,588,455,567,449,556,442,550,436,543,436,532,430,511,430,493,427,485,419,486,396,508,390,516,382,532,373,539,369,540,384,558,384,584,364,604,360,613,360,621,358,631,353,656,346,654,343,642,336,636,333,636,324,636,317,645,313,651,311,661,311,668,315,682,316,688" />
    							<area onmouseover="provices(this)" alt="" title="Hambanthota" href="#" shape="poly" coords="293,765,360,735,388,727,432,708,438,697,451,685,466,673,471,670,476,662,460,653,442,663,435,668,430,678,420,682,406,688,394,692,388,693,368,683,365,683,353,687,340,699,334,706,334,719,323,714,313,712,303,709,296,707,287,704,283,702,280,708,275,714,276,724,279,732,289,736,288,746,286,755,286,757" />
    							<area onmouseover="provices(this)" alt="" title="Kandy" href="#" shape="poly" coords="262,584,265,575,263,563,263,556,285,549,296,538,297,529,302,518,304,526,309,534,321,534,335,530,345,528,346,526,346,516,345,509,341,502,340,492,337,474,323,483,308,489,301,488,293,485,286,492,266,486,265,485,261,484,256,488,252,491,251,492,242,492,241,497,240,500,240,504,240,511,254,522,257,535,253,543,246,548,240,553,240,560" />
    							<area onmouseover="provices(this)" alt="" title="Badulla" href="#" shape="poly" coords="311,628,325,634,335,635,341,649,347,655,353,655,363,643,357,636,357,626,357,621,357,616,359,610,364,605,366,601,372,592,376,586,384,582,386,571,387,560,380,555,372,544,370,530,375,528,380,527,391,517,383,502,383,488,381,464,380,461,358,467,355,472,352,472,344,467,344,456,344,511,347,530,337,534,335,549,335,559,327,579,321,582,313,588,304,589,311,601,308,611,308,611,310,614,311,619" />
    							<area onmouseover="provices(this)" alt="" title="Matara" href="#" shape="poly" coords="245,766,264,777,273,775,289,767,289,753,289,741,281,734,275,715,285,699,276,693,272,692,272,688,253,687,245,699,246,701,246,704,239,704,238,706,239,712,235,723,232,730,233,740,235,750,232,758,228,765" />
    							<area onmouseover="provices(this)"  alt="" title="Galle" href="#" shape="poly" coords="226,765,232,756,233,736,233,722,238,717,235,706,231,699,238,698,244,701,244,701,245,694,239,687,230,685,225,679,210,687,210,698,201,694,183,692,170,685,162,681,153,679,162,704,168,719,173,734,184,748,195,753,203,758,215,765,231,767" />
    							<area onmouseover="provices(this)"  alt="" title="Rathnepura" href="#" shape="poly" coords="224,678,238,685,278,688,274,690,283,699,295,709,324,712,332,718,337,714,317,684,314,667,318,639,323,633,313,626,309,622,311,615,299,614,250,608,224,592,219,598,211,595,199,587,195,581,187,590,201,636,207,642,210,648,218,665" />
    							<area onmouseover="provices(this)"  alt="" title="Nuwara Eliya" href="#" shape="poly" coords="250,605,265,616,281,619,301,618,311,611,315,600,307,590,318,578,327,576,333,564,336,556,336,545,334,534,333,533,314,536,308,531,303,525,300,520,297,521,295,540,287,546,284,551,276,556,282,552,274,553,269,557,261,558,265,563,265,566,265,581,260,584,255,578,250,574,244,572,240,572,237,572,240,584,243,588,251,595,250,602" />
    							<area onmouseover="provices(this)"  alt="" title="Kegalle" href="#" shape="poly" coords="194,582,207,594,212,601,235,594,245,599,249,602,250,590,237,580,243,559,242,547,248,541,255,534,252,518,244,509,238,500,227,493,217,501,212,510,200,515,194,519,188,527,184,533,184,543,185,555,188,573,192,577" />
    							<area onmouseover="provices(this)"  alt="" title="Gampha" href="#" shape="poly" coords="124,575,156,580,172,588,181,574,193,527,190,514,179,509,151,512,136,515,131,518,128,535,128,546,124,533,123,532,127,552,129,560,127,573,132,573" />
    							<area onmouseover="provices(this)"  alt="" title="Kalutara" href="#" shape="poly" coords="153,677,170,684,202,693,209,696,209,685,218,683,220,681,222,665,215,658,214,653,210,644,208,641,202,636,197,631,194,625,193,618,192,607,187,599,171,603,155,615,140,616,140,616,138,618,131,619" />
							</map>
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
		<script src="js/jquery-3.2.1.min.js"></script> 
		<script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
		<script src="js/jquery.maphilight.min.js"></script> 
		<script src="js/materialize.js"></script> 
		<script src="js/init.js"></script>
		<script type="text/javascript">
			$(document).ready(function() {
				$('select').material_select();
			});

			function provices(tt){
				$('.provice').html(tt.title);
			}
			$.fn.maphilight.defaults = {
				fill: true,
				fillColor: '000000',
				fillOpacity: 0.2,
				stroke: true,
				strokeColor: 'ff0000',
				strokeOpacity: 1,
				strokeWidth: 1,
				fade: true,
				alwaysOn: false,
				neverOn: false,
				groupBy: false,
				wrapClass: true,
				shadow: false,
				shadowX: 0,
				shadowY: 0,
				shadowRadius: 6,
				shadowColor: '000000',
				shadowOpacity: 0.8,
				shadowPosition: 'outside',
				shadowFrom: false
			}
			$('.map').maphilight();
		</script>
	</body>
</html>