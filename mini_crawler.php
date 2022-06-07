<?php 
    require_once 'transactions.php';
    require_once 'ErrorHandler.php'; 
    require_once 'views.php'; 
    require_once 'vaccum.php'; 
    use ErrorHandler\errors;
    use views\viewsUser;
    use spider\mini_crawlers AS Fetch;
    $errorsPool = new errors();
    $views = new viewsUser();
    $crawlManager = new Fetch();
    $publicationsContainer = null;
    $jobContainer = null;
    if(isset($_GET['ref']))
    {   $request = $_GET['ref'];
        if(!empty($request))
        {
            $user_request = validate\char_handler($request);
            $publications = $crawlManager->craw_publications($user_request); 
            $publicationsContainer = $publications;
            $jobs = $crawlManager->craw_job_offers($user_request);
            $jobContainer = $jobs;

        }
        else 
            header('Location: index.php?emptycrawl');
    }else 
        header('Location: index.php?emptycrawl');
?>

<!DOCTYPE html>
<html>
<head>
    <title>MyDesk - Given Lubinda</title>
	<meta charset="utf-8">
    <link rel="icon" href="./assets/gl4.png" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta author="Omae-Software-Zambia | theecornelius@gmail.com | +260967721900 ;+260977742472"/>
	<meta keywords ="Zambian Given Lubinda | Given Lubinda | Lubinda Given | Given| Lubinda | PF - Vice President 
					| Former - Minister Of Justice | Kabwata Member Of Parliament | Given Lubinda Zambia 
					| Zambian Given Lubinda | PF - Given Lubinda  "/>
	<meta description="MyDesk.com is Given Lubinda's Personnal Blog.
						Given Lubinda's Official Publications May Be Found on This Blog."/>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
    <link rel="stylesheet" type="text/css" href="styles.css">
    <style>
        .navbar
        {
            background-color: rgb(32, 32, 32);
            font-size: smaller; 
        }
        h3  
        {
            font-size: large;
            color: rgb(146, 146, 146);
            padding-top: 5%;
            padding-bottom: 3%;
            font-variant: small-caps;
            color: grey;
            font-weight: 600;
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
            width: 100%;
            text-align: left;
            color: grey;
          
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
        .footer-wrapper
        {

            background-color: rgb(19, 18, 18);
            font-style: 'Cambria';
        }
        .footer-book li a, .f li , .f li blockquote
        {
            font-style: 'Georgia';
            font-size: large;
        }
        .social-links a
        {
            margin-right: 10px;
        }
    </style>
</head>
	<body>
		<main>
         
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
                </div>
			</nav>
            <div class="container">
                <div class="job-wrapper">
                    <div class="row m-auto">
                        <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                            <div class="cover">
                                <h3><i class="fas fa-clock"></i>&nbsp PUBLICATIONS FOUND</h3>
                                <?php $views->pFirst($publicationsContainer)?>
                            </div>
                            <div class="cover">
                                <h3><i class="fas fa-truck "></i>&nbsp JOBS FOUND</h3>
                                <?php $views-> jFirst($jobContainer)?>
                            </div>
                        </div> 
                    </div>
                </div>
            </div>
             <?php $views->footer(); ?>
        </main>
      
        <script src="jquery.js"></script>
        <script src="bootstrap/js/bootstrap.js"></script>
    </body>
    <?php 
         $errorsPool = null;
         $views = null;
         $crawlManager = null;
         $publicationsContainer = null;
         $jobContainer = null;
    ?>
</html>
