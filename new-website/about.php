<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>OAMC-about us</title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />  
	<meta name="description" content="Website Description" />
	<meta name="keywords" content="Website Keywords" />
	<link rel="stylesheet" type="text/css" media="all" href="style/style.css" />
	<link rel="stylesheet" type="text/css" media="all" href="style/prettyPhoto.css" />
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic' rel='stylesheet' type='text/css' />
    <link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css' />
	<link rel="stylesheet" type="text/css" media="all" href="style/stylemobile.css" />
	<!--<link rel="stylesheet" type="text/css" media="all" href="style/mobilenavigation.css" />-->

	<script src="script/modernizr.js" type="text/javascript"></script>
	<script src="script/jquery.js" type="text/javascript"></script>
    <script src="script/jquery-ui.js" type="text/javascript"></script>
    <script src="script/jquery.parallax-1.1.3.js" type="text/javascript"></script>
    <script src="script/jquery.localscroll-1.2.7-min.js" type="text/javascript"></script>
    <script src="script/jquery.scrollTo-1.4.2-min.js" type="text/javascript"></script>
	<script src="script/jquery.flexslider.js" type="text/javascript"></script>
	<script src="script/jquery.prettyPhoto.js" type="text/javascript"></script>
	<script src="script/jquery.retina.js" type="text/javascript"></script>
	<script type="text/javascript">
	$(document).ready(function (){
        $("a[data-rel^='prettyPhoto']").prettyPhoto({
			default_width: 600,
			default_height: 420,
			social_tools: false
		});
        $('#slideshow-tabs').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|OperaMini/i.test(navigator.userAgent) || ($(window).width() < 1024) ) {	
		} else {
            $('#slideshow-tabs .ui-tabs-panel').parallax("50%", 0.5);
            $('.content-home-1').parallax("0", 0.5);
            $('.content-home-2').parallax("100%", 0.5);
            $('.content-home-3').parallax("0", 0.5);
            $('#title-content').parallax("50%", 0.5);
            $("#content-side-title").show();
            setTimeout(function() { $("#content-side-title").animate({width: 'toggle'}); },100);
        }
        $('.side-title .flexslider').flexslider({
            animation: "slide",
            pauseOnAction: true,
        });
        $('.link-side-title').click(function() {
			$(this).next("#content-side-title").animate({width: 'toggle'});
		});
		$('a[data-rel]').each(function() {
			$(this).attr('rel', $(this).data('rel'));
		});
		$('img[data-retina]').retina({checkIfImageExists: true});
		$(".open-menu").click(function(){
		    $("body").addClass("no-move");
		});
		$(".close-menu, .close-menu-big").click(function(){
		    $("body").removeClass("no-move");
		});
	});
	</script>
</head>
<body>
	<header id="main-header" class="clearfix">
        <div id="header-full">
            <div id="header" class="clearfix">
                <a href="#nav" class="open-menu">
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				    <span class="icon-bar"></span>
				</a>
                <a href="#" id="logo"><img src="images/logo.png" data-retina="images/logo-retina.png" alt="Happy Health - All Your Health Need" /></a>
                <nav id="nav" class="clearfix">
                    <a href="#" class="close-menu-big">Close</a>
                    <div id="nav-container">
                        <a href="#" class="close-menu">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </a>
                        <ul id="nav-main">
                            <li><a href="index.php">Home</a></li>
                            <li class="current-menu-item"><a href="about.php">About Us</a></li>
                            
                            <li><a href="services.php">Facilities</a></li>

                            <?php if (isset($_SESSION['user']))                                 echo '<li><a href="login.php">My Account</a></li>';                             else                                 echo '<li><a href="login.php">Login</a></li>';                             ?></li>
                            <?php if (isset($_SESSION['user']))
                                echo '<li><a href="php/logout.php">Logout</a></li>';
                            else
                                echo '<li><a href="contact.php">Contact</a></li>';
                            ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>
    <div id="content" class="clearfix">
        <header id="title-content" class="clearfix" style="background:url(images/img-8.jpg) no-repeat 50% 0 fixed">
            <h1><span>About Open Access Medical Center</span></h1>
            <aside>
                <a href="#content-side-title" class="link-side-title"><span></span><span></span><span></span></a>
                <div id="content-side-title" class="title-gallery">
                    <div class="side-title">
                        <h3>Photo Gallery</h3>
                        <div class="flexslider">
                            <ul class="slides">
                                <li>
                                    <div class="slides-image"><img src="images/img-9.jpg" data-retina="images/img-9-retina.jpg" alt="" /></div>
                                </li>
                                <li>
                                    <div class="slides-image"><img src="images/img-9.jpg" data-retina="images/img-9-retina.jpg" alt="" /></div>
                                </li>
                                <li>
                                    <div class="slides-image"><img src="images/img-9.jpg" data-retina="images/img-9-retina.jpg" alt="" /></div>
                                </li>
                                <li>
                                    <div class="slides-image"><img src="images/img-9.jpg" data-retina="images/img-9-retina.jpg" alt="" /></div>
                                </li>
                                <li>
                                    <div class="slides-image"><img src="images/img-9.jpg" data-retina="images/img-9-retina.jpg" alt="" /></div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </aside>
        </header>
        <div id="main-content">
            <article class="static-page">
                <h3>SERVICES OFFERED AT OUR SPECIALTY HOSPITALS</h3>
                <p>We provide the highest quality of medical services to our patients. We enjoy practicing medicine. We love people and feel fortunate to be able to provide this service to our community. We recognize that patients do have a choice in choosing their medical providers and we hope to meet your expectations and beyond!
                We provide comprehensive and compassionate treatment to all patients suffering from reflux disease and heartburn. Reflux disease is a chronic and progressive condition with serious long-term consequences. We know that each patient is unique and one pill does not fit all.</p>
                <p>The hospital continues to expand its services in primary and secondary care, plus selective tertiary services, to include a range of specialist centers covering Total Joint Replacement, Neuroscience Center, Cancer Care Center, Orthopedics & Sports Medicine, Cochlear Implant, The Heart Center, Breast Care Clinic,Kidney Dialysis, Diabetes, and Sleep Lab. </p>
                <img src="images/img-13.jpg" alt="" class="alignleft" />
                <h1>Service of our Hospital</h1>
                <p>OAMC Hospital is a 27-bed, acute care facility, offering a variety of health care programs and services including: inpatient and same day surgery, outpatient pharmacy, radiology department, All Kids health care program, cardiology department, corporate health program, intensive care unit, telemetry unit, pediatrics unit, emergency department, physician specialty center, and a comprehensive array of women's health care with an incorporated midwife program.</p>
                <p>OAMC Hospital constantly monitors the health care needs of the community by participating in a variety of community events and partnering with community organizations. At these events, our medical staff engages the general public in conversation and is able to understand what their general needs and concerns are. In addition, our clinical staff constantly monitors health care trends and uses that information to develop new programs and services.Norwegian American Hospital is a premier health care provider where the patient comes first. It is a family- and community-centered hospital. Each of our employees strives to provide every patient with consistent high standards of affordable care.</p>
                <h2>Sponsor Hospital</h2>
                <P>When you sponsor our Hospitals, you invest in the future of high-quality health care for all, especially vulnerable populations. Your sponsorship supports our hospitals’ work to promote innovative programs, foster new ideas, and connect health care leaders for better patient care.our Hospital sponsors make a positive difference by supporting advocacy, education, and research to reduce health care disparities and improve care quality and access. Your support makes an important and valued contribution to those efforts and raises your profile as an organization dedicated to the best hospital care possible.</P>
                <p>Our hospitals welcomes media inquiries regarding the contributions of hospitals committed to high-quality care for all patients, including the most vulnerable. We can provide a national perspective on policy and other issues, including Medicaid and Medicare, the nation’s health care safety net, hospital quality improvement, research on care for the underserved, health care disparities, and health care reform.</p>
            </article>
        </div>
        
									<div id="gw_gallery-5-slide" class="flexslider">
										<ul class="slides">
											<li>
												<div class="slides-image">
													<a href="images/img-14-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5]"><img src="images/img-14.jpg" alt="Beauty in Green"  data-retina="images/img-14-retina.jpg" /></a>
												</div><h4><a href="images/img-14-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5-slide]">Beauty in Green blue red brown</a></h4>
											</li>
							         		<li>
												<div class="slides-image">
													<a href="images/img-14-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5]"><img src="images/img-14.jpg" alt="Eagle Nest"  data-retina="images/img-14-retina.jpg" /></a>
												</div><h4><a href="images/img-14-retina.jpg" data-rel="prettyPhoto[pp-gw_gallery-5-slide]">Eagle Nest</a></h4>
											</li>
							         	</ul>
							        </div>
							        <a href="http://cubicthemes.com/develop/workchaos/blog/" class="button-more">More Photo</a>
									</div>
                <div class="binder-left"></div><div class="binder-right"></div>
            </aside>
        </div>
    </div>
    
    <div id="three-footer" class="clearfix">
        <article class="clearfix">
            <em><img src="images/icon-footer-1.png" data-retina="images/icon-footer-1-retina.png" alt="" /></em>
            <strong>Call Us Now</strong>
            <span>+514-5164787</span>
        </article>
        <article class="clearfix">
            <a href="#"><em><img src="images/icon-footer-2.png" data-retina="images/icon-footer-2-retina.png" alt="" /></em>
            <strong>Live Chat</strong>
            <span>Chat with our Specialist</span>
            </a>
        </article>
        <article class="last clearfix">
            <a href="#"><em><img src="images/icon-footer-3.png" data-retina="images/icon-footer-3-retina.png" alt="" /></em>
            <strong>Schedule</strong>
            <span>Make Appointment &amp; Check our Schedule</span>
            </a>
        </article>
    </div>
    <footer id="main-footer">
        <nav>
            <ul id="nav-footer">
                <li><a href="#">Home</a></li>        
                <li><a href="#">About</a></li> 
                <li><a href="#">Doctor</a></li> 
                <li><a href="#">Services</a></li> 
                <li><a href="#">Blog</a></li> 
                <li><a href="#">Photo</a></li> 
                <li><a href="#">Article</a></li> 
                <li><a href="#">Contact</a></li>
            </ul>
        </nav>
    </footer>
</body>
</html>