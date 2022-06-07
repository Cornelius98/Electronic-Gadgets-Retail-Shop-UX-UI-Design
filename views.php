<?php 
namespace views
{   require_once "vaccum.php";
    use validate\comments_n_story_validate;
    $comment_n_story = new comments_n_story_validate();
    class viewsUser
    {
        public function footer()
        {
            echo '<footer class="footer-wrapper">
            <div class="container">
                <div class="row m-auto">
                    <div class="f col-xs-4 col-sm-4 col-md-4 col-lg-4">
                        <h4><b>SPARES AVAILABLE</b></h4>
                        <div class="footer-book">
                            <ol class="list-group list-group-flush">
                                <li class="list-group-item">
                                    <a href="#quick-couplers">Air Quick Coupler</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#hydraulic-hoses">Hydraulic Hoses</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#gear-pumps">Gear Pumps</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#d-gear-pumps">Double Acting Gear Pumps</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#ferrules">Ferrules</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#adaptors">Adaptors</a>
                                </li>
                                <li class="list-group-item">
                                    <a href="#flanges">Flanges</a>
                                </li>
                            </ol>
                            
                        </div>
                    </div>
                    <div class="f col-xs-4 col-sm-4 col-md-4 col-lg-4 text-left">
                        <h4><b>CONTACTS</b></h4>
                        <ol class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fa fa-envelope"></i>&nbsp; <span> shopname@gmail.com </span></li>
                            <li class="list-group-item"><i class="fa fa-phone"></i> &nbsp; <span>+260 977 863 642</span></li>
                        </ol>
                    </div>
                    <div class="f col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
                        <div class="social-links">
                            
                            <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https://www.zedupcomingmusic.com">
                                <i class="fab fa-facebook fa-2x"  style="color:white;"></i>
                            </a>
                            <a target="_blank" class="twitter-share-button"
                                href="https://twitter.com/intent/tweet?text=Hello%20world"
                                data-size="large">
                                <i class="fab fa-twitter fa-2x" style="color:white;"></i>
                            </a>
                            <a href="whatsapp://send?text=GFG Example for whatsapp sharing https://zedupcomingmusic.com" 
                                                data-action="share/whatsapp/share" target="_blank">
                                                <i class="fab fa-whatsapp fa-2x" style="color:white;"></i>
                            </a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <hr><br>
            <h6>
                Developed By <span style="color:orange;"><strong>OMAE SOFTWARE</strong></span>
                <br>
                &copy 2022
            </h6>
            </footer>';
        }
        public function nav()
        {
            $page_url = 'https://'.$_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
            echo '<div class="sc">
                    <div class="container">
                        <div class="top-contact">
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 social-icons">
                                <a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u='.$page_url.'">
                                    <i class="fab fa-facebook"  style="color:white;"></i>
                                </a>
                                <a target="_blank" class="twitter-share-button"
                                    href="https://twitter.com/intent/tweet?text=Recent Most Recent of Given 
                                                            Lubinda\'s Publications on his blog on'.$page_url.'"
                                    data-size="large">
                                    <i class="fab fa-twitter" style="color:white;"></i>
                                </a>
                                <a href="whatsapp://send?text=GFG Example for whatsapp sharing '.$page_url.'" 
                                                    data-action="share/whatsapp/share" target="_blank">
                                                    <i class="fab fa-whatsapp" style="color:white;"></i>
                                </a>
                               
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 m-contacts">
                                <i class="fa fa-phone s-c"></i>  &nbsp; <span class="fg-num">+260 977 863 500</span>
                                <i class="fa fa-envelope s-c"></i> &nbsp; <span class="fg-email">shopname@gmail.com</span>
                                &nbsp;&nbsp;
                                <i  class="fa fa-search search-task-finder" id="search-task-finder"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mobile-nav">
                    <ul>
                        <li><a href="#quick-couplers">Air Quick Coupler</a></li>
                        <li><a href="#hydraulic-hoses">Hydraulic Hoses</a></li>
                        <li><a href="#gear-pumps">Gear Pumps</a></li>
                        <li><a href="#d-gear-pumps">Double Acting Gear Pump</a></li>
                        <li><a href="#hose-inserts">Horse Inserts</a></li>
                        <li><a href="#ferrules">Ferrule</a></li>
                        <li><a href="#adaptors">Adaptors</a></li>
                    </ul>
                </div>
                <div class="container-fluid">
                        <nav class="navbar navbar-expand-sm navbar-dark">
                            <div class="container">
                                <a class="navbar-brand" href="index">
                                    <span class="logo-first-word" id="logo-first-word">BEST</span><span class="logo-second-word" id="logo-second-word">AUTOSHOP</span>
                                </a>
                                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myTopResponsiveNav" style="color:black;;">
                                    <i class="fa fa-bars"></i>&nbsp;<span>Menu</span>
                                </button>
                                <div class="collapse navbar-collapse text-right" id="myTopResponsiveNav">
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item"><a href="index">HOME</a></li>
                                        <li class="nav-item"><a href="#spares">SPARES</a></li>
                                        <li class="nav-item"><a href="#spares">SERVICES</a></li>
                                        <li class="nav-item"><a href="#about-store" >ABOUT</a></li>
                                        <li class="nav-item"><a href="#message">CONTACT US</a></li>
                                        <li class="nav-item"><a href="#store-gallery">Gallery</a></li>
                                        <li class="nav-item"><a href="#gps">Location</a></li>
                                        <li class="nav-item">
                                    </ul>
                                </div>
                            </div>
                        </nav>
                </div>';
        }
    }
}
    
