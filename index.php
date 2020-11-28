<?php
$servername = "localhost";
$username = "root";
$password = "developer";
$dbname = "Sql1469347_1";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $stmt = $conn->prepare("SELECT * FROM materie ORDER BY ID");
  $stmt->execute();

  // set the resulting array to associative
  /*$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
  foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) {
    echo $v;
  }*/
} catch(PDOException $e) {
  echo "Error: " . $e->getMessage();
}

$conn = null;

?> 

<!DOCTYPE html>
<!--[if IE 9]>
<html class="ie ie9" lang="en-US">
<![endif]-->
<html lang="it-IT">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <title>Developer Prima Edizione - FormaMenti Lab</title>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,500,700' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="assets/css/bootstrap.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.css">
    <link rel="stylesheet" href="assets/css/simple-line-icons.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/icon-font.css">
    <link rel="stylesheet" href="assets/css/educa.css">
    <link rel="stylesheet" href="assets/rs-plugin/css/settings.css">
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
	<div class="sidebar-menu-container" id="sidebar-menu-container">
		<div class="sidebar-menu-push">
			<div class="sidebar-menu-overlay"></div>
			<div class="sidebar-menu-inner">
				<header class="site-header">
					<div id="main-header" class="main-header header-sticky">
						<div class="inner-header container clearfix">
							<div class="logo">
								<a href="#">FormaMenti LAB</a>
                …learn a trade and store it
							</div>
							
							<div class="header-info hidden-sm hidden-xs">
								<ul>
									<li>
                    <a href="#"><i class="fa fa-phone"></i>+39 347 1234961</a>
                  </li>
									<li translate="no">
                    <a href="#"><i class="fa fa-envelope-o"></i>info@papalia.it</a>
                  </li>
									<li class="language">
                    <a href="#" id="example-show" class="showLink" onclick="showHide('example');return false;">
                     <i class="fa fa-globe"></i>Italiano
                     <i class="fa fa-angle-down"></i>
                    </a>
                      
                    <div id="example" class="more">
                      <a href="#" id="example-hide" class="hideLink" onclick="showHide('example');return false;">
                        <i class="fa fa-globe"></i>Italiano
                        <i class="fa fa-angle-up"></i>
                      </a>
                      <ul>
                        <li><a href="#">English</a></li>
                        <li><a href="#">French</a></li>
                        <li><a href="#">German</a></li>
                        <li><a href="#">Italiano</a></li>
                      </ul>
                    </div>
                    
									</li>
									<li>
                    <a href="#">Mobile App</a>
                  </li>
								</ul>
							</div>
							<nav class="main-navigation text-left hidden-xs hidden-sm">
								<ul>
									<li><a href="#">Home</a></li>
									<li><a href="materie-grid.html">Unità Didattiche</a></li>
									<li><a href="#">Events</a></li>
									<li><a href="contact.html">Contact</a></li>
                  <li></li>
								</ul>
							</nav>
						</div>
					</div>
				</header>
	
				<div class="slider-2">
					<div class="fullwidthbanner-container">
						<div class="fullwidthbanner">
							<ul>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="http://placehold.it/1170x580" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="left" data-hoffset="0" data-y="190" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><div class="slide-caption">
										<a href="#"><i class="fa fa-play-circle"></i></a>
										<a href="#"><span>Fresh Courses</span></a>
										<h2>Are you ready for study in your life ?</h2>
										<p>Mixtape tofu quinoa, meggings Intelligentsia heirloom sustainable whatever before <br>sold out migas flexitarian fixie pork belly.</p>
										</div>
									</div>
								</li>
								<li class="first-slide" data-transition="fade" data-slotamount="10" data-masterspeed="300">
									<img src="http://placehold.it/1170x580" data-fullwidthcentering="on" alt="slide">
									<div class="tp-caption first-line lft tp-resizeme start" data-x="left" data-hoffset="0" data-y="190" data-speed="1000" data-start="200" data-easing="Power4.easeOut" data-splitin="none" data-splitout="none" data-elementdelay="0" data-endelementdelay="0"><div class="slide-caption">
										<a href="#"><i class="fa fa-play-circle"></i></a>
										<a href="#"><span>Fresh Courses</span></a>
										<h2>Some life hack to make life easier!</h2>
										<p>Mixtape tofu quinoa, meggings Intelligentsia heirloom sustainable whatever before <br>sold out migas flexitarian fixie pork belly.</p>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<section class="popular-courses">
					<div class="container-fluid">
						<div class="row">
							<div class="section-heading text-center">
								<h1>Unità didattiche</h1>
								<img src="assets/images/line-dec.png" alt="">
								<p>Twee Vice synth stumptown distillery aesthetic slow carb</p>
							</div>
						</div>
						<div class="row">
              
							<div id="owl-courses-second">
                             <?php   
                                $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
                                foreach(new RecursiveArrayIterator($stmt->fetchAll()) as $row) {
                                ?>
								<div class="item course-item">
									<a href="single-course.html"><img src="http://placehold.it/345x235" alt=""></a>
									<div class="down-content">
										<img src="http://placehold.it/44x44" alt="">
										<h6><?php echo $row['DOCENTE'];?></h6>
										<div class="price-red">
											<span><?php echo $row['ORE'];?></span>
											<div class="base"></div>
										</div>
										<a href="single-course.html"><?php echo $row['MATERIA'];?></a>
										<p><?php echo $row['DESCRIZIONE'];?></p>
										<div class="text-button">
											<a href="single-course.html">view more<i class="fa fa-arrow-right"></i></a>
										</div>
									</div>
								</div>
                                
                                <?php
                                }
                                ?>
                            </div>
              
						</div>
					</div>
				</section>
        
				<section class="read-books books-read">
					<div class="container">
						<div class="row">
							<div class="col-md-12">
								<div class="section-heading text-center">
									<h1>Le nostre applicazioni</h1>
									<img src="assets/images/line-dec.png" alt="">
									<p>Plaid you probably haven't heard of them fashion axe meditation</p>
								</div>
							</div>
						</div>
						<div class="row">
							<div class="col-md-6">
								<div class="books-item">
									<i class="fa fa-area-chart"></i>
									<h4>Remote Desktop</h4>
                  <h5>Entra nel nostro Laboratorio da qualsiasi luogo. Grazie ad HTML5, per accedere ai nostri desktop serve solo un browser web.</h5>
								</div>
							</div>
							<div class="col-md-6">
								<div class="books-item">
									<i class="fa fa-briefcase"></i>
									<h4>Streaming live</h4>
                   <h5>Oltre ai video on-demand, anche servizi di streaming in tempo reale che comprendono una vasta gamma di argomenti didattici.</h5>
								</div>
							</div>
							
						</div>
						<div class="row">
							<div class="col-md-12">
								<div class="border-button">
									<a href="http://x2z2mmmz4ndj0ufe.myfritz.net:8080/guacamole/#/" target="_blank">Accedi</a>
								</div>
							</div>
						</div>
					</div>
				</section>

				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

			</div>

		</div>

</div>

	<script type="text/javascript" src="assets/js/jquery-1.11.1.min.js"></script>
	<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
	<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script src="assets/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<script type="text/javascript" src="assets/js/plugins.js"></script>
	<script type="text/javascript" src="assets/js/custom.js"></script>

</body>
</html>