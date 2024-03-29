<?php 
    require_once 'transactions.php';
    require_once 'ErrorHandler.php'; 
    require_once 'views.php'; 
    use ErrorHandler\errors;
    use Business\Job_Manager;
    use views\viewsUser;
    $errorsPool = new errors();
    $JobManager = new Job_Manager();
    $views = new viewsUser(); 
    $JobManagerContainer = $JobManager->get_all();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
    <meta name="viewport">
    <meta author=""/>
	<meta description=""/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        nav  li 
		{
			text-transform: uppercase;
			font-family: 'mesmerize';
			font-size-adjust: 0.58;
			padding-left: 5px;
			padding-right: 5px;
		}
        .navbar
        {
            background-color: rgb(32, 32, 32);
            font-size: smaller; 
        }
        .navbar-brand a
        {   font-size: small;
            color: rgb(146, 146, 146);
            font-weight: 800;
            font-family: Tahoma;
            letter-spacing: 5px;
        }
        main 
        {
            background-color: rgb(236, 236, 236);
        }
        .job-wrapper 
        {
            padding-top: 10%;
            padding-bottom: 10%;
        }
        .no-post 
        {
            /* border: 2px solid yellow; */
            text-align: center;
            width: 100%;
        }
        .title ,.c-title
        {
            font-family: 'Georgia', 'Times New Roman', 'Times', 'serif';
            color: rgb(66, 66, 66);
            font-size: small;
            letter-spacing: 2px;
        }
        .content 
        {
            font-family: 'Georgia', 'Times New Roman', 'Times', 'serif';
            color: rgb(66, 66, 66);
            font-size: small;

        }
        .author 
        {
            font-family: 'Georgia', 'Times New Roman', 'Times', 'serif';
            color: rgb(66, 66, 66);
            font-size: smaller;
        }
        .date 
        {
            font-family: 'Georgia', 'Times New Roman', 'Times', 'serif';
            font-size:smaller;
            color: grey;
        }
        .img img
        {
            width: 100%;
            height: 300px;
            margin-bottom: 5%;
        }
    </style>
</head>
	<body>
		<main>
            <!-- nav-->
            <nav class="navbar navbar-expand-sm navbar-light">
                <div class="container">
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myTopResponsiveNav">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="navbar-brand" href="index.php">
                        <div class="top-nav-items">
							<div>
                                <a href="index.php" class="company" style="
                                        color:orange;
                                        display: flex;
                                        flex-direction: row nowrap;
                                        align-items: center;
                                "><i class="fas fa-bullseye fa-3x"></i>&nbsp <span>NOMDDRESS</span></a>
							</div>
						</div>
                    </div>
                    <div class="collapse navbar-collapse text-center" id="myTopResponsiveNav">
                        <!--ulis-->
                        <ul class="navbar-nav m-auto">
                            <li class="nav-item"><a href="index.php#servicesWrapper" class="nav-link" style="color:rgb(177, 175, 175);">  &nbsp Services &nbsp|</a></li>
                            <li class="nav-item"><a href="publications.php" class="nav-link" style="color:rgb(177, 175, 175);"> &nbsp Publications &nbsp|</a></li>
							<li class="nav-item"><a href="jobs.php" class="nav-link" style="color:rgb(177, 175, 175);"> </i> &nbsp Job Offers</a></li>
							<li class="nav-item"><a href="index.php#contactsWrapper" class="nav-link" style="color:rgb(177, 175, 175);"> </i> &nbsp| Contact Us</a></li>
                            <li class="nav-item"><a href="about_us.php" class="nav-link" style="color:rgb(177, 175, 175);"> </i> &nbsp| About Us</a></li>
                
                        </ul>
                        <form method="GET" action="mini_crawler.php" class="form-inline navbar-form navbar-left mx-6 my-lg-0" id="nav-form">
                                <div class="form-group">
                                    <input type="search" class="form-control" name="ref"placeholder="Song name..."  />
                                    <button class="btn btn-success">Search</button>
                                </div> 
                                </form>
                    </div>
                </div><!-- containerv closed -->
			</nav><!--Nav Closed-->
    <div style="text-decoration:none; overflow:hidden;max-width:100%;width:100%;height:1000px;">
        <div id="display-googlemap" style="height:100%; width:100%;max-width:100%;">
            <iframe style="height:100%;width:100%;border:0;" frameborder="0" 
                    src="https://www.google.com/maps/embed/v1/directions?origin=-15.416701142333942,+28.281448149838642&destination=-15.505126902064026,+28.34057534637496&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
            </iframe>
        </div>
        <a class="googlemap-code" rel="nofollow" href="https://www.embed-map.com" id="authmap-data">https://www.embed-map.com</a>
        <style>
            #display-googlemap img
            {
                max-width:none!important;
                background:none!important;
                font-size: inherit;
                font-weight:inherit;
            }
            </style>
    </div>
  <!-- footer-->
  <footer class="footer-wrapper">
				<div class="container">
					<div class="row m-auto">
						<!--Services Offered-->
						<div class="f col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<h4><b>Services</b></h4>
							<ul class="list-group list-group-flush">
								<li class="list-group-item"><a href="#services">Consultancy</a></li>
								<li class="list-group-item"><a href="#services">Advocacy</a></li>
								<li class="list-group-item"><a href="#services">Research</a></li>
							</ul>
						</div>
		
						<!--Contacts-->
						<div class=" f col-xs-4 col-sm-4 col-md-4 col-lg-4">
							<h4>Contacts</h4>
							<div class="footer-book">
								<ol class="list-group list-group-flush">
                                    <li class="list-group-item"><i class="fas fa-phone f-x2"></i> &nbsp ( +260 ) 978 383 471</li>
									<li class="list-group-item"><i class="fas fa-sms "></i> &nbsp kchimfwembe@yahoo.com</li>
								</ol>
							</div>
						</div>
						<!-- media-->
						<div class="f col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
							<div class="media-links">
								<a href=""><i class="fab fa-facebook-f"></i> &nbsp | &nbsp  </a>
								<a href=""><i class="fab fa-whatsapp" aria-hidden="true"></i></a>
							</div>
							<div style="padding-top:15%;font-size:smaller">
								<span><i class="fas fa-home fa-3x"></i> &nbsp <a href="index.php">Home</a></span>
							</div>
						  
						   
						</div>
					</div><!-- close footer row-->
				</div>
				<hr><br> 
				<h6>&copy 2020</h6>
			</footer>
        </main>
        <!--Bootstrap & Jquery CDN -->
        <script src="jquery.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
    </body>
</html>