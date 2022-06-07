<?php 
	require_once 'ErrorHandler.php';
	require_once 'views.php';
	use views\viewsUser;
	$errorsPool = new error();
	$views = new viewsUser();
	$page_url = 'https://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
?>
<!DOCTYPE html>
<html>
<head>
	<title>Shopname - Zambia</title>
	<meta charset="utf-8">
	<link rel="icon" href="./assets/spares/couplers/coupler-1.jpg" type="image/x-icon">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta author="Omae-Software-Zambia | theecornelius@gmail.com | Call: +260967721900; WhatsApp: +260967721900"/>
    <meta keywords =" Air Quick Coupler | Hydraulic Hoses | Gear Pumps| Lubinda | Double Acting Gear Pumps
					| Ferrules | Adaptors | Flanges | Autospares | Auto | Spares | Autospares Zambia
					| Spares Zambia | Quality Spares | "/>
	<meta description="Best Autospares Zambia Official Website.Preview,Contact us
						to Make Orders at Your Convenience."/>
	<meta property="og:url"           content="'<?php echo $page_url; ?>'" />
	<meta property="og:type"          content="Official Website" />
	<meta property="og:title"         content="Best Auto Spares Zambia" />
	<meta property="og:description"   content="Best Auto Spares,Suppliers Of Quality Auto Spares In Zambia." />
	<meta property="og:image"         content="<?php echo 'http://'.$_SERVER["SERVER_NAME"].'/assets/gl5.png'; ?>" />
	<link rel="canonical" href="'<?php echo $page_url; ?>'">
	<link rel="me" href="https://twitter.com/twitterdev">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="fontawesome/css/all.css">
	<!-- <link rel="stylesheet" type="text/css" href="styles.css"> -->
	<script src="jquery.js"></script>
	<style>
.loader-wrapper 
{
    width: 100%;
    background-color:white;
    z-index:2000;
    height: 1000px;
    position: absolute;
    top: 50%;
    left: 50%;
    transform:translate(-50%,-50%);
}
.loader-fader 
{
    background-color:rgb(240, 240, 240);
    width: 100%;
    height: 100%;
    opacity: .945;
    background-repeat: no-repeat;
    background-position: center;
    background-size: contain;
}
.loader-wrapper .loader-notifier
{
    
    position: absolute;
    top: 50%;
    left: 50%;
    transform:translate(-50%,-50%);
	width: 80%;
    text-align: center;

}
.loader-notifier h6 ,
.progress-counter,.notice
{
    font-size: large;
    font-family: 'Calibri';
    color:grey;
}
.progress-counter 
{
    margin-top: 1%;
}
.i-cover 
{
    
    background-color:black;
    border-radius: 50px;
    padding: 3%;
}
.i-cover i 
{
    color: white;
}
.w-name 
{
    margin-top: 20px;
}
.w-name .brand 
{
    background-color: black;
    color:white;
    font-weight: 800;
    font-family: 'Comic Sans MS';
    padding:3px;
}
.w-name .b-jingle
{
    text-align:center;
}
.b-jingle span 
{
    font-weight:800;
}
.progress-div
{
    background-color:black;
    width: 100%;
    border-radius: 5px;
    padding: 1px;
}

.progress-bar 
{
    background-color:white;
    border-radius: 5px;
    height: 2px;
    width: 200px;  
}
.companik 
{
    display: flex;
    flex-direction: row;
    align-items: center;
    justify-content: center;
    font-weight: 600;
}
.h-error strong 
{
	text-align: center;
	font-size: smaller;
	color: red;
	padding: 1%;
	text-align: center;
	text-transform: uppercase;
	font-size: medium;
	border: 2px solid red;
	display: flex;
	flex-direction: row nowrap;
	justify-content: center;
}
.loader-wrapper-2
{
	display:none;
}
.loader 
{
	position: absolute;
	top: 0;
	background-color: black;
	height: 800px;
	z-index: 8000;
	opacity: .8876;
	width: 100%;
	display: flex;
	flex-direction: column;
	align-items: center;
	padding-top: 20%;
}
.notifier-text 
{
	color: white;
	font-weight: 500;
}
.loader-lds
{
	display: inline-block;
	width: 80px;
	height: 80px;
}
.loader-lds:after {
	content: " ";
	display: block;
	width: 64px;
	height: 64px;
	margin: 8px;
	border-radius: 50%;
	border: 6px solid #fff;
	border-color: #fff transparent #fff transparent;
	animation: loader-lds 1.2s linear infinite;
}
@keyframes loader-lds {
	0% {
		transform: rotate(0deg);
	}
	100% {
		transform: rotate(360deg);
	}
}
.logo-first-word ,
.logo-second-word 
{
	font-family: Tahoma;
	font-weight: 800;
	letter-spacing: 5px;
}
.logo-first-word 
{
	color:rgb(132,0,27);
}
.logo-second-word 
{
	color:grey;
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
	background-image: url('./assets/damian-zaleski-RYyr-k3Ysqg-unsplash.jpg');
	background-repeat: no-repeat;
	background-position: left;
	background-size: cover;
	height: 450px;
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
.navbar 
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
.about-us h3
{
	padding-top: 25%;
}
.subscribe 
{
	width: 100%;
	background-image:url('assets/jess-bailey-cU7wLFRyWWw-unsplash.jpg');
	background-repeat: no-repeat;
	background-size: cover;
	background-position: center;  
}
.sub-fader 
{
	background-color: black;
	opacity: .76767;
}
.sub-fader .title 
{
	padding: 15% 0% 2% 0%;
	color: white;
}
.sub-fader form 
{
	padding-bottom: 10%;
}
form input[type="text"]
{
	color:black;
}
.in-btn 
{
	display:flex;
	flex-direction: row nowrap;
	justify-content: center;
}
.message-contact 
{
	padding-top: 10%;
}
.message-contact i 
{
	font-size:medium;
	color: grey;
}
.message-contact span
{
	font-size: large;
	color: grey;
	margin-left: 4%;
	font-weight: 800;
	font-family: 'Comic Sans MS';
}
.social-links 
{
	display: flex;
	flex-direction: row nowrap;
	justify-content: center;
}	
.message ,.subscribe
{
	position: relative;
}
.note 
{
	color:white;
	position: absolute;
	top: 40%;
	left: 50%;
	transform: translate(-50%,-50%);
	background-color: black;
	width: 50%;
	text-align: center;
	font-family:'comic sans ms';
	border-radius: 30px;
	padding: 1%;
	opacity: .88767;
}
.note h3 
{
	font-size:medium;
}
.s-notice 
{	display: none;
	color: green;
	font-size: smaller;
	font-weight: 800;
	text-align: center;
	padding: 5px 0px 5px 0px;
}
.l-w 
{
	border:2px solid grey;
	padding: 12%;
	border-radius: 25px;
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
.contact-task 
{
	display: flex;
	flex-direction: row nowrap;
	justify-content: center;
}
.contact-task span
{
	margin-right: 2%;
	font-style:'Comic Sans MS';
}
.contact-task 
{	display:none;
	position: fixed;
	top: 0;
	width: 100%;
	background-color:rgb(214, 214, 214);;
	z-index: 200;
	color: rgb(106, 150, 106);
	height: auto;
	padding: 6%;
}
.mobile-nav ul:hover
{
	overflow-x: scroll;
}

.mobile-nav ul li
{
	display: inline-block;
	text-align: center;
}
.mobile-nav ul li a 
{
	color: grey;
	padding: 8px;
	border-radius: 125px;
	text-transform: uppercase;
	font-size: smaller;
}
.mobile-nav ul
{
	list-style-type: none;
	margin: 0;
	padding: 2%;
	overflow-x: hidden;
	overflow-y: hidden;
	white-space: nowrap;
	width: auto;
	text-align: center;
	font-family: Helvetica, Arial, sans-serif;
	text-align: center;
	width: 100%;
}
.mobile-nav ul:hover
{
	overflow-x: scroll;
}
.mobile-nav ul li
{
	display: inline-block;
	text-align: center;
}
.mobile-nav ul li a 
{
	color: grey;
	padding: 8px;
	border: 1px solid black;
	border-radius: 125px;
	text-transform: capitalize;
	font-size:small;
}
.trending-series 
{
	margin: 0% 3% 3% 3%; 
    border-bottom: 2px solid grey;
}
.trending-series > .series-row
{
   display: flex;
   flex-direction: row nowrap;
   justify-content: space-between;
}
.trending-series > .trending-header
{
    text-align: center;
	padding: 7% 0% 7% 0%;
}
.trending-series > .trending-header > h3
{
	font-weight: 800;
}
.trending-series > .trending-header > h5
{
    text-align: center;
	padding: 0% 10% 0% 10%;
	font-family:'Tahoma';
}
.trending-series > .series-row >
.recent > h1
{
    color: rgb(128, 106, 128);
    text-align: left;
    margin-top: 2%;
    font-family:'Cambria', 'Cochin', 'Georgia', 'Times', 'Times New Roman', serif
}
.trending-series > .series-row >
.recent > h1 > i
{
    padding-left: 20%;
}
.trending-series > .series-row >
.trending > h6
{
    text-align: right;
    margin-top: 35%;
    font-family: Arial, Helvetica, sans-serif;
    font-weight: bolder;

}
.trending-series > .series-row >
.recent > p
{ 
    line-height: 16px;
    font-style: oblique;
}
.trending-series >.row >.sub >.preveie
{
    width:100%;
}
.trending-series > .series-row >.recent
{
    width: 46%;
    padding: 1%;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie
{
    width: 100%;
    background-color: rgb(72, 71, 80);
    opacity: .77566;
}
.trending-series > .series-row >
.recent >.row >.sub
{
    border: 2px solid white;
}
.trending-series > .series-row >
.recent >.row >.sub >.preveie >.details
{
    z-index: 100;
}
.trending-series > .series-row >
.recent >.row >.sub >.preveie
{
    position: relative;
}
.trending-series > .series-row >
.recent >.row >.sub 
>.preveie>.details
{
    width: 100%;
    position: absolute;
    top: 70%;
    color: white;
    text-align: center;
	padding: 5% 0% 5% 0%;
}
.trending-series > .series-row >
.recent >.row >.sub >
.preveie >.details > h6
{
    width: 100%;
    text-align: center;
}
.trending-series > .series-row >
.recent >.row >.sub 
{
    padding: 0;
    margin: 0;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.coupler-img-1
{
    border: 2px solid white;
    background:url('./assets/spares/couplers/coupler-1.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.coupler-img-2
{
    border: 2px solid white;
    background:url('./assets/spares/couplers/coupler-2.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.coupler-img-3
{
    border: 2px solid white;
    background:url('./assets/spares/couplers/coupler-3.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.hydraulic-img-1
{
    border: 2px solid white;
    background:url('./assets/spares/hydraulic/hydraulic-1.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.hydraulic-img-2
{
    border: 2px solid white;
    background:url('./assets/spares/hydraulic/hydraulic-2.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.hydraulic-img-3
{
    border: 2px solid white;
    background:url('./assets/spares/hydraulic/hydraulic-3.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.gear-pump-img-1
{
    border: 2px solid white;
    background:url('./assets/spares/gear-pump/gear-pump-1.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.gear-pump-img-2
{
    border: 2px solid white;
    background:url('./assets/spares/gear-pump/gear-pump-2.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.gear-pump-img-3
{
    border: 2px solid white;
    background:url('./assets/spares/gear-pump/gear-pump-3.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.d-gear-img-1
{
    border: 2px solid white;
    background:url('./assets/spares/double-gear-pump/double-gear-pump-1.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.d-gear-img-2
{
    border: 2px solid white;
    background:url('./assets/spares/double-gear-pump/double-gear-pump-2.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.d-gear-img-3
{
    border: 2px solid white;
    background:url('./assets/spares/double-gear-pump/double-gear-pump-3.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.ferrules-img-1
{
    border: 2px solid white;
    background:url('./assets/spares/ferrules/ferrules-1.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
    width: 100%;
	height: 300px;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.ferrules-img-2
{
    border: 2px solid white;
    background:url('./assets/spares/ferrules/ferrules-2.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.ferrules-img-3
{
    border: 2px solid white;
    background:url('./assets/spares/ferrules/ferrules-3.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.adaptor-img-1
{
    border: 2px solid white;
    background:url('./assets/spares/adaptors/adaptors-1.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.adaptor-img-2
{
    border: 2px solid white;
    background:url('./assets/spares/adaptors/adaptors-2.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.adaptor-img-3
{
    border: 2px solid white;
    background:url('./assets/spares/adaptors/adaptors-3.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.flanges-img-1
{
    border: 2px solid white;
    background:url('./assets/spares/flanges/flanges-1.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.flanges-img-2
{
    border: 2px solid white;
    background:url('./assets/spares/flanges/flanges-2.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.flanges-img-3
{
    border: 2px solid white;
    background:url('./assets/spares/flanges/flanges-3.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.hose-inserts-img-1
{
    border: 2px solid white;
    background:url('./assets/spares/hose-inserts/hose-inserts-1.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.hose-inserts-img-2
{
    border: 2px solid white;
    background:url('./assets/spares/hose-inserts/hose-inserts-2.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.hose-inserts-img-3
{
    border: 2px solid white;
    background:url('./assets/spares/hose-inserts/hose-inserts-3.jpg');
    background-repeat: no-repeat;
    background-position: top left;
    background-size:contain;
}

.trending-series > .series-row >
.recent >.row >.sub > .preveie >.coupler-img-1,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.coupler-img-2,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.coupler-img-3
,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.hydraulic-img-1,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.hydraulic-img-2,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.hydraulic-img-3
,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.gear-pump-img-1,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.gear-pump-img-2,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.gear-pump-img-3
,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.d-gear-img-1,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.d-gear-img-2,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.d-gear-img-3,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.ferrules-img-1
,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.ferrules-img-2
,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.ferrules-img-3
,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.adaptor-img-1,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.adaptor-img-2,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.adaptor-img-3
,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.flanges-img-1,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.flanges-img-2,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.flanges-img-3
,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.hose-inserts-img-1,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.hose-inserts-img-2,
.trending-series > .series-row >
.recent >.row >.sub > .preveie >.hose-inserts-img-3
{
	border: 1px solid grey;
	width: 100%;
	height: 250px;
}
.recent .details
{
	line-height: 5px;
}
.recent .details h6,
.recent .details h4
{
	color: white;
	font-size: smaller;
}
.recent .details h4
{
	font-size: smaller;
}
.task-bar 
{
    position:fixed;
    bottom:0px;
    left:0px;
    z-index: 700;
    width: 100%;
    text-align:center;
}
.task-bar .row 
{
    display: flex;
    flex-flow: row nowrap;
    justify-content: center;
    background-color: #3d3d3d;
}
.task 
{
    margin: 2px;
    padding: 5px; 
}
.task p 
{
    font-weight: 200;
    font-size: smaller;
    font-family: 'Calibri';
    text-transform:capitalize;
    color: white;
}
.task a 
{
    color: aliceblue;
    font-weight: 800;
}
.task i 
{
    color: aliceblue;
}
.gallery 
{
	padding:5% 0% 10% 0%;
}

.work-title 
{
	text-align: center;
}
.work-mate
{
	margin: 2%;
	text-align: center;
}
.work-mate img
{
	width: 100px;
	height: 90px;
	border-radius: 125px;
}
.work-mate .detail 
{
	text-align: center;
}
.work-mate .detail  h6
{
	font-size: smaller;
	color: grey;
}
.gps-wrapper 
{
	height: 600px;
}
.footer-wrapper
{
	background-color: rgb(19, 18, 18);
	font-family: 'Arial';
	padding: 7% 0% 10% 0%;
}
.footer-wrapper .container 
{
	padding-bottom: 5%;
}
.footer-wrapper ol li
{
	background-color: rgb(19, 18, 18); 
}
.social-links a
{
	margin-right: 10px;
}
.footer-wrapper hr 
{
	background-color: grey;
}
.footer-wrapper h4
{
	font-size: medium;
	font-weight: 800;
}
.footer-wrapper ol li
{
	font-size: small;
	line-height: 2px;
}
.footer-wrapper h4,
.footer-wrapper h6,
.footer-wrapper ol, 
.footer-wrapper ol li a 
{
	font-family: 'Arial';
	color: grey;
	text-align: center;
}
.footer-wrapper ol,.social-links a
{
	line-height: 3px;
}
.footer-wrapper ol li,.f ol li
{
	line-height: 3px;
	font-family: 'Arial';
}
.footer-book li a,.f ol li span
{
	font-family: 'Arial';
	font-size: large;
}
@media screen and (max-width: 900px)
{
	.gps-wrapper 
	{
		height:200px;
	}
	.work-title h1
	{
		text-align: center;
		font-size: medium;
	}
	.work-mate .worker-detail h4
	{
		font-size: small;
		color: black;
	}
	.work-mate .worker-detail h6
	{
		font-size: x-small;
		color: grey;
	}
	.about-title h1
	{
		font-size: 24px;
	}
	.social-links 
	{
		margin-top: 15%;
	}
	.footer-wrapper h6
	{
		font-size: smaller;
	}
	.footer-wrapper 
	{
		padding-bottom: 30%;
	}
	.trending-series > .series-row >
	.recent >.row >.sub 
	>.preveie>.details
	{
		width: 100%;
		position: absolute;
		top: 70%;
		color: white;
		text-align: center;
		padding: 5% 0% 20% 0%;
	}
	.trending-series 
	{
		margin: 3% 5% 3% 5%; 
		border-bottom: 2px solid grey;
	}
	.trending-series > .series-row >.recent
	{
		padding: 1%;
	}
	.trending-series > .series-row >.recent > h3
	{
		font-size: medium;
	}
	.trending-series > .trending-header > h3
	{
		text-align: center;
		padding: 0% 0% 2% 0%;
		font-size: medium;
	}
	.trending-series > .trending-header > h5
	{
		text-align: center;
		padding: 0% 2% 0% 2%;
		font-size: smaller;
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
	.mobile-nav ul:hover
	{
		overflow-x: scroll;
	}
	.mobile-nav ul li a 
	{
		color: grey;
		padding: 3px;
		border-radius: 125px;
		text-transform: capitalize;
		font-size:x-small;
		font-weight: 500;
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
		font-style:'Comic Sans MS';
		font-weight: 600;	
	}
	.about-text
	{
		line-height: 5px;
	}
	.work-mate
	{
		border: 2pxm solid red;
	}
	.footer-book 
	{
		margin-bottom: 20%;
	}
	#fa-phone,#fa-envelope
	{
		display: none;
	}
	.x-contact-task .row 
	{
		display: flex;
		flex-direction: row nowrap;
	}
	#hon-text ,.btn-explore
	{
		display: none;
	}
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
</style>
	<script src="jquery.js"></script>
	<script src="anime.js" type="text/javascript"></script>
	<script>
		$(function(){
			$('.s-c').hover(function(){
				$('#contact-task').slideDown(2000);
			});
			$('#x-contact-task').click(function(){
				$('#contact-task').slideUp(2000);
			});


			$('#search-task-finder').hover(function(){
				$('#search-task-finder').css({
					'color':'red'
				});
				$('#search-task').slideDown(2000);
			});
			$('#x-search-task').click(function(){
				$('#search-task').slideUp(2000);
			});
		
			$('#search-icon').hover(function(){
				$('#nav-form').show();
				$(this).hide();
			});
			setInterval(() => {
				$('#hon-intor').show();
			}, 1000);
			setInterval(() => {
				$('#hon-intro').hide();
			}, 5000);

			setInterval(() => {
				$('#hon-text').slideUp();
			}, 6300);
			setInterval(() => {
				$('#hon-text').slideDown();
			}, 6300);
			
			var count = 0;
			var per = 0;
			var increase = setInterval(animate,50);
			function animate() {
				if(count >=100 && per >= 100)
				{
					clearInterval(increase);
					$('#notice').text("Complete");
					$('#loader-wrapper').slideUp(2000);
				}else{
					count = count + 2;
					per = per + 2;
					$('#progress-bar').width(`${per}%`);
					$('#progress-counter').text(`${count}%`);
				}
			} 
		});
	</script>
</head>
	<body>
	<div class="loader-wrapper-2">
		<div class="loader">
			<h6 class="loader-lds"></h6>
			<h6 class="notifier-text">Wait, Sending Your Message...</h6>
		</div>
	</div>
	<div class="task-bar">
		<div class="row">
			<div class="task task-1">
				<a href="index">
					<i class="fas fa-home f-x2"></i>
					<p>Home</p>
				</a>
			</div>
			<div class="task task-3">
				<a href="#spares">
					<i class="fas fa-tools"></i>
					<p>Spares</p>
				</a>
			</div>
			<div class="task task-2">
				<a href="#store-gallery">
					<i class="fa fa-users"></i>
					<p>Gallery</p>
				</a>
			</div>
			<div class="task task-3">
				<a href="#gps">
					<i class="fa fa-map" style="color:white;"></i>
					<p>Location</p>
				</a>
			</div>
			<div class="task task-3">
				<a href="#message">
					<i class="fa fa-phone" style="color:white;"></i>
					<p>Contact</p>
				</a>
			</div>
		</div>
	</div>
	<div id="fb-root"></div><div id="fb-root"></div>
	<script>(function(d, s, id) {
	var js, fjs = d.getElementsByTagName(s)[0];
	if (d.getElementById(id)) return;
	js = d.createElement(s); js.id = id;
	js.src = "https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.0";
	fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));</script>
		<div class="loader-wrapper" id="loader-wrapper">
            <div class="loader-fader">
                <div class="loader-notifier">
                    <h6 class="w-name">
						<i class="fas fa-tools fa-2x"></i>
						<br>
						<span class="logo-first-word" id="logo-first-word">BEST</span><span class="logo-second-word" id="logo-second-word">AUTOSHOP</span>
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
		<main>
		<div class="contact-task" id="contact-task">
			<div class="container">
				<span class="x-contact-task" id="x-contact-task">X</span>
				<div class="row m-auto justify-content-center text-center">
					<span>
						<i class="fa fa-phone" id="fa-phone"> &nbsp; +260 977 863 500</i><br>
						<a href="tel:+260977863244" class="btn btn-sm btn-outline-primary">Call Now</a>
					</span>
					<span>
						<i class="fa fa-envelope" id="fa-envelope"> &nbsp; shopname@gmail.com</i><br>
						<a href="mailto:shopname@gmail.com" class="btn btn-sm btn-outline-success">Email Now</a>
					</span>
				</div>
			</div>
		</div>
			<?php $views->nav(); ?>
			<div class="search-task" id="search-task">
				<div class="container">
					<span class="x-search-task" id="x-search-task">X</span>
					<div class="row m-auto justify-content-center">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
							<form action="s_crawler" method="GET" 
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
			<div class="header-wrapper-2">
				<div class="header-fader">
					<div class="container">
						<div class="row justify-content-end">
							<div class="col-xs-12 col-md-6 col-lg-6 mx-3 mx-*-0 gl-taglines">
								<p id="hon-intro">
									<h3 id="h-desk">
										<span style="color:rgb(132,0,27);">BEST</span><span style="color:grey;">AUTOSHOP.</span>
									</h3>
									<p id="h-name">
										Suppliers of Spare Parts in Lusaka.
									</p>
								</p>
								<h5 id="hon-text" style="color:white;">
									We provide original,brand new, high quality auto spares.
									Feel free to order in bulk as well as a number of the spares you need. 
									We guarantee quality and durable spares you can trust always.
								</h5>
								<a href="#about-store" class="btn btn-sm btn-danger btn-block btn-explore">
									<b style="font-size: smaller;">CONTINUE TO SPARES >> </b>
								</a>
							</div>
						</div>
					</div>
				</div>
			</div>
			<section class="trending-series">
				<div class="trending-header">
					<h3>SPARES AND PRODUCTS AVAILABLE.</h3>
					<h5>
						We provide original,brand new, high quality auto spares.Feel free to
						order in bulk as well as a number of the spares you need.
						We guarantee quality and durable spares you can trust always.

					</h5>
				</div>
				<div class="series-row" id="spares">
					<div class="recent">
						<h3 id="quick-couplers"> 
							<strong>Air Quick Couplers</strong>
							<hr>
						</h3>
						<div class="row justify-content-center">
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="coupler-img-1"></div>
									<div class="details">
										<h6>Air Quick Couplers</h6>
										<h4>K240</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="coupler-img-2"></div>
									<div class="details">
										<h6>Air Quick Couplers</h6>
										<h4>K240</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="coupler-img-3"></div>
									<div class="details">
										<h6>Air Quick Couplers</h6>
										<h4>K240</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="recent">
						<h3 id="hydraulic-hoses">
							<strong>Hydraulic Hoses</strong>
							<hr>
						</h3>
						<div class="row justify-content-center">
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="hydraulic-img-1"></div>
									<div class="details">
										<h6>Hydraulic Hose</h6>
										<h4>K200</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="hydraulic-img-2"></div>
									<div class="details">
										<h6>Hydraulic Hose</h6>
										<h4>K200</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="hydraulic-img-3"></div>
									<div class="details">
										<h6>Hydraulic Hose</h6>
										<h4>K200</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="series-row">
					<div class="recent">
						<h3 id="gear-pumps">
							<strong>Gear Pumps</strong>
							<hr>
						</h3>
						<div class="row justify-content-center">
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="gear-pump-img-1"></div>
									<div class="details">
										<h6>Gear Pump</h6>
										<h4>K200</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="gear-pump-img-2"></div>
									<div class="details">
										<h6>Gear Pump</h6>
										<h4>K200</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="gear-pump-img-3"></div>
									<div class="details">
										<h6>Gear Pump</h6>
										<h4>K260</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="recent">
						<h3 id="d-gear-pumps">
							<strong>Double Acting Gear Pumps</strong>
							<hr>
						</h3>
						<div class="row justify-content-center">
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="d-gear-img-1"></div>
									<div class="details">
										<h6>Double Acting Gear Pump</h6>
										<h4>K260</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="d-gear-img-2"></div>
									<div class="details">
										<h6>Double Acting Gear Pump</h6>
										<h4>K260</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="d-gear-img-3"></div>
									<div class="details">
										<h6>Double Acting Gear Pump</h6>
										<h4>K260</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="series-row">
					<div class="recent">
						<h3 id="ferrules">
							<strong>Ferrules</strong>
							<hr>
						</h3>
						<div class="row justify-content-center">
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="ferrules-img-1"></div>
									<div class="details">
										<h6>Ferrule</h6>
										<h4>K400</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="ferrules-img-2"></div>
									<div class="details">
										<h6>Ferrule</h6>
										<h4>K400</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="ferrules-img-3"></div>
									<div class="details">
										<h6>Ferrule</h6>
										<h4>K400</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="recent">
						<h3 id="adaptors">
							<strong>Adaptors</strong>
							<hr>
						</h3>
						<div class="row justify-content-center">
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="adaptor-img-1"></div>
									<div class="details">
										<h6>Adaptor</h6>
										<h4>K350</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="adaptor-img-2"></div>
									<div class="details">
										<h6>Adaptor</h6>
										<h4>K350</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="adaptor-img-3"></div>
									<div class="details">
										<h6>Adaptor</h6>
										<h4>K350</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="series-row">
					<div class="recent">
						<h3 id="flanges">
							<strong>Flanges</strong>
							<hr>
						</h3>
						<div class="row justify-content-center">
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="flanges-img-1"></div>
									<div class="details">
										<h6>Flange</h6>
										<h4>K650</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="flanges-img-2"></div>
									<div class="details">
										<h6>Flange</h6>
										<h4>K650</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="flanges-img-3"></div>
									<div class="details">
										<h6>Flange</h6>
										<h4>K650</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="recent">
						<h3 id="hose-inserts">
							<strong>Hose Inserts</strong>
							<hr>
						</h3>
						<div class="row justify-content-center">
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="hose-inserts-img-1"></div>
									<div class="details">
										<h6>Hose Insert</h6>
										<h4>K350</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="hose-inserts-img-2"></div>
									<div class="details">
										<h6>Hose Inserts</h6>
										<h4>K350</h4>
									</div>
								</div>
							</div>
							<div class="sub col-sm-12 col-md-4 col-lg-4 col-xl-4">
								<div class="preveie">
									<div class="hose-inserts-img-3"></div>
									<div class="details">
										<h6>Hose Insert</h6>
										<h4>K350</h4>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<div class="about-us" id="about-us">
				<div class="container">
					<div class="row m-auto">
							<div class="about-title" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h1 id="about-store">ABOUT OUR AUTOSPARE</h1>
								<hr>
							</div>
						</div>
						<div class="row m-auto">
							<div class="about-title" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
								<h6>1.0 BACKGROUND</h6>
							</div>
						</div>

						<div class="row about-content">
							<div class="founder col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
							<div class="about-text" style="line-height: 16px;">
							NOMDDRES is an acronym which stands for Nomdad Development Research. 
							It is a not for profit Non-Governmental Organization (NGO) 
							and is registered with the Ministry of Community Development.
							It started its operation in Zambia in the year 2016 and has created a unique model
							of working to help the rural and peri-urban poor, vulnerable and disadvantaged through engagement 
							with local communities (i.e. women, youths, children and men) in Science, Research and Technology in order
							to prepare them for economic development in Zambia and over. The key to NOMDDRES’s approach is partnership and
							creating solutions that are sustainable after NOMDDRES departs.
							</div>

							<h6 style="padding-top: 5%;padding-bottom: 3px;">2.0 CAREER</h6>
							<div class="about-text"  style="line-height: 16px;">
							With the growing adverse  impact of climate change on rural livelihoods especially,
							the global concerns over food prices and the ever present human cost of HIV/AIDS,
							the work that NOMDDRES facilitates is growing in importance and thus of interest to donors.
							There is a current trend amongst donors in Zambia to not only support Zambian government agencies but
							to also build national civil society by channelling funds through independent NGOs like NOMDDRES. 
							This creates opportunities for NOMDDRES to attract increased donor funding for managing developmental 
							interventions in rural and peri - urban communities.  
							</div>
							
							<h6 style="padding-top: 5%;padding-bottom: 3px;">2.0 CIVIC DUTIES</h6>
							<div  style="line-height: 16px;">
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
							</div>
							<br><br>
							<div class="about-text"  style="line-height: 16px;">
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
				<div class="container gallery" id="store-gallery">
					<div class="row justify-content-center">
						<div class="work-title" class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1>MEET OUR TEAM</h1>
							<div class="line-splitter"></div>
						</div>
					</div>
					<div class="row justify-content-center">
						<div class="work-mate">
							<img src="./assets/damian-zaleski-RYyr-k3Ysqg-unsplash.jpg" alt="">
							<div class="worker-detail">
								<h4>Mr Charles Kangwa</h4>
								<h6>Director</h6>
							</div>
						</div>
						<div class="work-mate">
							<img src="./assets/damian-zaleski-RYyr-k3Ysqg-unsplash.jpg" alt="">
							<div class="worker-detail">
								<h4>Mrs Thelma Here</h4>
								<h6>Manager</h6>
							</div>
						</div>
						<div class="work-mate">
							<img src="./assets/damian-zaleski-RYyr-k3Ysqg-unsplash.jpg" alt="">
							<div class="worker-detail">
								<h4>Miss Grace Lastname</h4>
								<h6>Sales Personnel</h6>
							</div>
						</div>
					</div>
				</div>
			<div class="subscribe" id="message">
				<div class="sub-fader">
					<div class="container">
							<div class="title text-center">
								<h2>Leave Us a Message Now!</h2>
								<h5>Feel Free to Talk To Us</h5>
							</div>
							<form method="POST" id="visitor-message" name="visitor-message" 
														enctype="multipart/form-data">
								<div class="e-notice" id="e-notice"></div>
								<div class="row">
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										<input type="text" name="f-name" 
													id="f-subject" placeholder="Subject" class="form-control my-2 my-0-*">
										<textarea name="" id="f-message" cols="60" rows="7" class="form-control" placeholder="Your Message .........."></textarea>
									</div>
									<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
										
										<input type="text" name="f-name" 
													id="f-name" placeholder="Fisrt Name" class="form-control my-2 my-0-*">
										<input type="text" name="s-name" 
												id="s-name" placeholder="Second Name" class="form-control my-2 my-0-*">
										<input type="text" name="e-mail" 
													id="e-mail" placeholder="Email" class="form-control my-2 my-0-*">
										<input type="text" name="f-mobile" 
												id="f-mobile" placeholder="Mobile Number" class="form-control my-2 my-0-*">
										
										<button type="button" id="v-message" class="btn btn-outline-secondary btn-block my-2 my-0-*">
											<strong>SEND MESSAGE..</strong>
										</button>
										
									</div>
								</div>
							</form>
					</div>
				</div>
			</div>
			<div class="gps" id='gps'>
						<div class="row m-auto justify-content-center">
							<div class="col-xs-2 col-sm-12 col-md-12 col-lg-12 text-center">
								<div class="gps-wrapper" style="text-decoration:none; overflow:hidden;max-width:100%;width:100%;">
									<div id="display-googlemap" style="height:100%;width:100%;max-width:100%;">
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
							</div>
					</div>
			</div>
			<?php $views->footer(); ?>
		</main>
	</body>
	<script>
		$(function(){
			$("#v-message").click(function(evt){
				evt.preventDefault();
				if($("#f-message").val()=='')
				{		
					$("#e-notice").text("Type Something ...");
					$("#e-notice").slideDown(1000);
					$("#e-notice").slideUp(3000);
				
				}else{
					let message = $("#f-message").val();
					let subject = $("#f-subject").val();
					let fname = $("#f-name").val();
					let sname = $("#s-name").val();
					let email = $("#e-mail").val();
					let fmobile = $("#f-mobile").val();
					let xhr = null;
					let fd = new FormData();
					fd.append('message',message);
					fd.append('subject',subject);
					fd.append('fname',fname);
					fd.append('sname',sname);
					fd.append('email',email);
					fd.append('fmobile',fmobile);
					$.ajax({
						type: 'POST',
						url: './Handlers/notifications/subscribe',
						data: fd,
						contentType: false,
						cache: false,
						processData:false,
						dataType:'json',
						beforeSend:function(){
							$(window).scrollTop(0);
							$(".loader-wrapper-2").slideDown(2000);
						},
						success:function(data,status,settings){
							if(data["sent"] >=1)
							{
								$(window).scrollTop(0);
								$(".notifier-text").text("Message Delivered,We Will Respond As Soon As Possible.");
								$("#loader-wrapper-2").slideDown(2000);
							}else{
								$(window).scrollTop(0);
								$(".notifier-text").text("Message Delivery Unsuccessful,Try Again");
								$("#loader-wrapper-2").slideDown(2000);
							}
						},
						complete:function(){
							$(window).scrollTop(0);
							$(".loader-wrapper-2").slideUp(2000);
						}
					});
				}
			});
		});
	</script>
	<script src="bootstrap/js/bootstrap.js"></script>
</html
