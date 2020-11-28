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
        
				
					
				

				<a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>

			</div>

		</div>


                </header>   
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