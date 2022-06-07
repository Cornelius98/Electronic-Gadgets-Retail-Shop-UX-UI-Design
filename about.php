<?php 
    require_once 'transactions.php';
    require_once 'ErrorHandler.php'; 
    require_once 'views.php'; 
    use ErrorHandler\errors;
    use Business\PostManager;
	use Business\QuoteManager;
    use views\viewsUser;
    $errorsPool = new errors();
    $PublicationManager = new PostManager();
	$QuoteManager = new QuoteManager();
    $views = new viewsUser(); 
	$qt = $QuoteManager->get_quote();
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
    <script src="jquery.js"></script>
    <script src="anime.js"></script>
    <style>
		.top-contact
		{
			padding:2%;
		}
		.top-contact 
		{
			display: flex;
			flex-direction: row nowrap;
		}
		.fg-num 
		{
			margin-right: 10%;
		}
		.social-icons i
		{
			padding-left: 1%;
			padding-right: 1%;
		}
		.m-contacts 
		{
			font-size: smaller;
			text-align: right;
		}
		.navbar,.container-fluid
		{
			background-color:white;
			color: black;
		}
		.nav-item a
		{
			color:black;
			font-size: small;
			font-family: 'Tahoma';
		}
		.sc 
		{
			background-color: black;
			color: white;
			font-weight: 700;
		}
        nav  li 
		{
			text-transform: uppercase;
			font-family: 'mesmerize';
			font-size-adjust: 0.58;
			padding-left: 5px;
			padding-right: 5px;
		}
		.header-wrapper-2
		{
			background-image: url('./assets/tamarcus-brown-29pFbI_D1Sc-unsplash.jpg');
			background-repeat: no-repeat;
			background-position: left;
			background-size: cover;
			height: 700px;
		} 
		.header-fader 
		{
			background-color:black;
			width: 100%;
			height: 100%;
			opacity: 0.6;
		}
		.header-fader a 
		{
			z-index: 200;
				}
		.progress-counter, .companik h5,.companik h6
		{
			color:orange;
		}
		.gl-taglines 
		{
			z-index: -100;
		}
		.gl-taglines 
		{
			padding: 15% 0% 15% 0%;
			z-index: 1000;
		}
		.gl-taglines h3 
		{
			font-family: Tahoma;
			color:green;
			font-weight: 1000;
			letter-spacing: 5px;
		}
		.gl-taglines p 
		{
			color: white;
			line-height: 0.2px;
			font-weight: 800;
		}
		#h-name 
		{
			font-size: smaller;
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
		.search-task 
		{	display:none;
			position: fixed;
			top: 0;
			width: 100%;
			background-color:rgb(214, 214, 214);;
			z-index: 200;
			color: black;
			height: auto;
			padding: 6%;
		}
		.search-task form 
		{
			display: flex;
			flex-direction: row nowrap;
			justify-content: center;
		}
		.about-title
		{
			margin-top: 10%;
			font-size:smaller;
		}
		.row h6
		{
			margin-top: 5%;
		}
		@media screen and (max-width: 900px)
		{
			.about-content 
			{
				font-size: smaller;
			}
			.about-title 
			{
				margin-top: 15%;
			}
			.form-inline 
			{
				display: flex;
				flex-flow: row nowrap;
				justify-content: center;
				margin-top: 10%;
				margin-bottom: 15%;
				width: 100%;
				
			}
			.fg-num , .fg-email
			{
				display:none;
			}
			.top-contact 
			{
				display: flex;
				flex-direction: row nowrap;
			}
			.navbar-toggler span
			{
				font-size: smaller;
			}
			.header-wrapper-2
			{
				background-image: url('assets/tamarcus-brown-29pFbI_D1Sc-unsplash.jpg');
				background-repeat: no-repeat;
				background-position: left;
				background-size: cover;
				height: 200px;
			} 
			#h-desk 
			{
				font-size: medium;
			}
			#hon-text
			{
				font-size: smaller;	
			}
			.about-us h3
			{
				font-size: medium
			}
			.about-us .post-intro
			{
				font-size: small;
			}
			.blogs .post 
			{
				margin-bottom: 3%;
			}
			.blogs .post h5 
			{
				padding-top: 0%;
				text-align: center;
			}
			.p-fader .response
			{
				font-size:medium;
				margin-bottom:30%;
			}
			.carol-text 
			{
				text-align: center;
				padding-bottom: 30%;
			}
			.carol-text h3 
			{
				font-size: medium;
			}
			.carol-text h5
			{
				font-size: smaller;
			}
			.carol-text p
			{
				font-size: smaller;
			}
			.subscribe h2 
			{
				font-size: medium;
			}
			.subscribe h5 
			{
				font-size: smaller;
			}
			.message h2
			{
				font-size: medium;
			}
			.message h5
			{
				font-size: smaller;
			}
			.p-fader h5 
			{
				font-size: medium;
			}
			.about-title h3 
			{
				font-size: medium;	
			}
			.about-title .post-intro 
			{
				font-size: smaller;	
			}
			.footer-book 
			{
				margin-bottom: 20%;
			}
			#hon-text ,.btn-explore
			{
				display: none;
			}
			@media screen and (max-width: 900px)
			{
				.omae-brand 
				{
					font-size: smaller;
				}
				.loader-notifier h6 ,
				.progress-counter,.notice
				{
					font-size: smaller;
					font-family: 'Calibri';
					color:grey;
				}
			}

		}
    </style>
</head>
	<body>
	<div class="loader-wrapper" id="loader-wrapper">
            <div class="loader-fader">
                <div class="loader-notifier">
                    <h6 class="w-name">
                        <img src="./assets/gl5.png" alt="MyDesk-Logo">
                    </h6>
                    <div class="progress-counter" id="progress-counter"></div>
                    <div class="progress-div text-center">
                        <div class="progress-bar" id="progress-bar"></div>
                    </div>
                    <h6 class="omae-brand">Developed By 
                                <span style="color:orange;">
                                    OMAE SOFTWARE</span>
                    </h6>
                </div>   
            </div>    
        </div> 
		<div class="search-task" id="search-task">
			<div class="container">
				<span class="x-search-task" id="x-search-task">X</span>
				<div class="row m-auto justify-content-center">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
						<form action="s_crawler.php" method="GET" 
									enctype="multipart/form-data" 
											class="form-inline" id="form-search" >

							<input type="text" class="form-control" 
										name="ref" placeholder="Search ..." />&nbsp;
							<button type="submit" 
									class="btn btn-success
											btn-sm form-control">
											<i class="fa fa-search"></i>
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
		<main class="aboutUS">
           <?php $views->nav(); ?>
		   <div class="header-wrapper-2">
				<div class="header-fader">
					<div class="container">
						<div class="col-xs-12 col-md-6 col-lg-6 gl-taglines">
							<p id="hon-intro">
								<h3 id="h-desk">
									<span style="color:rgb(132,0,27);">My</span><span style="color:grey;">Desk</span>
								</h3>
								<p id="h-name">
									GIVEN LUBINDA
								</p>
							</p>
							<h5 id="hon-text" style="color:white;">
								<?php 
									echo $qt['quote'];
								?> 
							</h5>
							<a href="#about-us" class="btn btn-sm btn-danger btn-block btn-explore">
								<b style="font-size: smaller;">CONTINUE TO EXPLORE >> </b>
							</a>
						</div>
					</div>
				</div>
			</div>
			<div class="about-us" id="about-us">
				<div class="container">
					<div class="row m-auto">
						<div class="about-title" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h6>1.0 BACKGROUND</h6>
						</div>
					</div>

					<div class="row about-content">
						<div class=" founder col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
						NOMDDRES is an acronym which stands for Nomdad Development Research. 
						It is a not for profit Non-Governmental Organization (NGO) 
						and is registered with the Ministry of Community Development.
						It started its operation in Zambia in the year 2016 and has created a unique model
						of working to help the rural and peri-urban poor, vulnerable and disadvantaged through engagement 
						with local communities (i.e. women, youths, children and men) in Science, Research and Technology in order
						to prepare them for economic development in Zambia and over. The key to NOMDDRES’s approach is partnership and
						creating solutions that are sustainable after NOMDDRES departs.

						<h6 style="padding-top: 5%;padding-bottom: 3px;">2.0 CAREER</h6>
						With the growing adverse  impact of climate change on rural livelihoods especially,
						the global concerns over food prices and the ever present human cost of HIV/AIDS,
						the work that NOMDDRES facilitates is growing in importance and thus of interest to donors.
						There is a current trend amongst donors in Zambia to not only support Zambian government agencies but
						to also build national civil society by channelling funds through independent NGOs like NOMDDRES. 
						This creates opportunities for NOMDDRES to attract increased donor funding for managing developmental 
						interventions in rural and peri - urban communities.  
						
						<h6 style="padding-top: 5%;padding-bottom: 3px;">2.0 CIVIC DUTIES</h6>
						NOMDDRES, under the leadership of the current Executive Director, was registered on the 13th of December 2018. 
						It was created for the sole purpose of enhancing the rights, talents and skills of women, youths and children in
						order that they are harnessed and natured to a point where they are developed for economic development for Zambia and over.
						It is envisaged that when these talents are put to good use then we shall have communities that are enlightened in developmental 
						work and also encouraging exchange visits to show case other work that has been done elsewhere to improve on quality and service delivery.   
						Under the direction of the local board with a chairperson, NOMDDRES started running the programmes. 
						The NOMDDRES Board comprises of three women and four men.  The “founding members” of the organization 
						are the current Executive Director. The administrative unit of the organisation has been set up to be
						flexible and respond to the needs of the organisation at any given time. This is observed through the
						fluctuation in number of staff, which commensurate with budget and programme size, at any given moment. 
						NOMDDRES always maintains a lean structure, especially at Country Office.  
						<br><br>
						The first two years of the organisation will be spent creating a solid base for expansion of programmes. 
						This includes setting up administrative and financial systems and structures to accommodate donor reporting 
						requirements and accountability to the communities. 
						From the onset, NOMDDRES made a deliberate policy of working in rural areas where poverty is very 
						high and very few NGOs are operating. Rural areas continue to receive limited access and options to service
						provision in the basic sectors compared to their urban counterparts.  The bulk of NOMDDRES’s experience will 
						be obtained from its traditional areas of work with rural communities where it has discovered the importance 
						of long term investment in community institutional structures 
						NOMDDRES’s focus will not only be on the rural communities, but it will also engage with the peri-urban 
						communities in order to cover a wider scope and bringing on board the women, youths and children so that
						various community achievements are observed for best practices. There is also a wealth of evidence generated 
						from rural work that can be used for national level advocacy, such as rights of children, youths and women.
						This skill base is cross cutting and also enriching to Zambia as a whole in order to bring lasting improvements
						that will also be sustainable to manage amongst the community members.   

						</div>
					
					</div>
					

				</div>
			</div>
		<?php  $views->footer(); ?>
        </main>
        <script src="jquery.js"></script>
        <script>
            $(function(){
				$('#search-task-finder').hover(function(){
					$('#search-task-finder').css({
						'color':'red'
					});
					$('#search-task').slideDown(2000);
				});
				$('#x-search-task').click(function(){
					$('#search-task').slideUp(2000);
				});
			});
		</script>
        <script src="bootstrap/js/bootstrap.js"></script>
    </body>
</html>
