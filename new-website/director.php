<?php
// Start the session
session_start();
if(!isset($_SESSION['employee_id']))
    header("location: ../login.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title>Happyhealth - Stay Healthy</title>
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
    <script src="script/matt.js" type="text/javascript"></script>
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
        $('#tabs-service').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
        $('#tabs-doctor').tabs({ show: { effect: "fade", duration: 200 }, hide: { effect: "fade", duration: 300 } });
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


    <!-- ######################################### Nav Bar ##############################################-->
    <header id="main-header" class="clearfix">
        <div id="header-full">
            <div id="header" class="clearfix">
                <img src="images/logo.png" data-retina="images/logo-retina.png" >
                <nav id="nav" class="clearfix">
                    <div id="nav-container">
                        <ul id="nav-main">
                            <li><a href="director.php">Personal Info</a></li>
                            <li><a href="#">Services</a>
                                <ul>
                                    <li><a href="directorServices.php?fac=palliative">Palliative</a></li>
                                    <li><a href="directorServices.php?fac=childrens_unit">Childrens Unit</a></li>
                                    <li><a href="directorServices.php?fac=surgical_unit">Surgical Unit</a></li>
                                </ul>
                            </li>
                            <li><a href="#">Supplies</a>
                                <ul>
                                    <li><a href="#">Storage Units</a>
                                        <ul>
                                            <li><a href="directorStorage.php?fac=palliative">Palliative</a></li>
                                            <li><a href="directorStorage.php?fac=childrens_unit">Childrens Unit</a></li>
                                            <li><a href="directorStorage.php?fac=surgical_unit">Surgical Unit</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Supply Rooms</a>
                                        <ul>
                                            <li><a href="directorSupplies.php?fac=palliative&floor=first">Palliative First Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=palliative&floor=second">Palliative Second Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=palliative&floor=third">Palliative Third Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=childrens_unit&floor=first">Childrens Unit First Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=childrens_unit&floor=second">Childrens Unit Second Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=childrens_unit&floor=third">Childrens Unit Third Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=surgical_unit&floor=first">Surgical Unit Third Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=surgical_unit&floor=second">Surgical Unit Third Floor</a></li>
                                            <li><a href="directorSupplies.php?fac=surgical_unit&floor=third">Surgical Unit Third Floor</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Kitchens</a>
                                        <ul>
                                            <li><a href="directorKitchen.php?fac=palliative">Palliative</a></li>
                                            <li><a href="directorKitchen.php?fac=childrens_unit">Childrens Unit</a></li>
                                            <li><a href="directorKitchen.php?fac=surgical_unit">Surgical Unit</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li><a href="directorSurgeries.php">Surgeries</a></li>
                            <li><a href="#">Records</a>
                                <ul>
                                    <li><a href="directorRecords.php?fac=1">Palliative</a></li>
                                    <li><a href="directorRecords.php?fac=2">Childrens Unit</a></li>
                                    <li><a href="directorRecords.php?fac=3">Surgical Unit</a></li>
                                </ul>
                            </li>
                            <?php if (isset($_SESSION['user']))
                                echo '<li><a href="php/logout.php">Logout</a></li>';
                            else
                                echo '<li><a href="contact.php">Contact</a></li>';
                            ?>                        </ul>
                    </div>
                </nav>
            </div>
        </div>
    </header>

    <!-- ######################################### Main Image ##############################################-->
    <div id="content" class="clearfix">
        <header id="title-content" class="clearfix" style="background:url(images/img-34.jpg) no-repeat 50% 0 fixed">
            <h1><span style="color:white; font-weight: bold"><?php echo $_SESSION['employee_name'];?></span></h1>
        </header>

        <div class="box user_info">
            <h2>Facility Name: <span style="color: #d7fca8; font-family: Georgia;"> <?php
                    if ($_SESSION['searched'] && $_SESSION['user']!== 'doctor')
                        echo $_SESSION['searched']['facility_name'];
                    elseif ($_SESSION['employee_id'])
                        echo $_SESSION['facility_name']?></span></h2></br>

            <h2>Maximum Weekly Hours: <span style="color: #d7fca8; font-family: Georgia;"> <?php
                    if ($_SESSION['searched'] && $_SESSION['user']!== 'doctor')
                        echo $_SESSION['searched']['maximum_hours'];
                    elseif ($_SESSION['employee_id'])
                        echo $_SESSION['maximum_hours']?></span></h2></br>

            <h2>Pay Frequency: <span style="color: #d7fca8; font-family: Georgia;"> <?php
                    if ($_SESSION['searched'] && $_SESSION['user']!== 'doctor')
                        echo $_SESSION['searched']['pay_frequency'];
                    elseif ($_SESSION['employee_id'])
                        echo $_SESSION['pay_frequency']?></span></h2></br>

            <h2>Salary over selected Period: <span id="doctorSalary" style="color: #d7fca8; font-family: Georgia;"></span></h2></br>
            </h2>
            </br>
            <label style="float: left; margin-left: 20px;">Start:&nbsp;&nbsp; <input class="inputField" type="text" id="datepicker1"></label>
            <label style="float: left; margin-left: 20px;">End: &nbsp;&nbsp;<input class="inputField" type="text" id="datepicker2"></label>
            <button style="margin-left: 20px;" class="submitButton" onclick="getDoctorSalary()">Apply</button>


            </br></br></br>
        </div>


        <div class="box user_info" id="dashboard">
            <div style="float: left;">
                <label style="float: left; margin-right: 5px;" for="patient_search">Search for people&nbsp;&nbsp;
                    <input onkeyup="searchPeople()" class="inputField" style="float: right;" type="text" id="searchBox" placeholder="  eg. Jon Doe" name="patient_search"> </label>

                <label style=" float: left; margin-left: 10px;" for="patient_search">Patient
                    <input onclick="searchPeople()" type="radio" name="person_type"  value="patient"> </label>

                <label style="float: left; margin-right: 5px;margin-left: 20px;" for="patient_search">Junior Doctor
                    <input onclick="searchPeople()"  type="radio" name="person_type" value="junior_doctor"> </label>

                <label style="float: left; margin-right: 5px;margin-left: 20px;" for="patient_search">Nurse
                    <input onclick="searchPeople()"  type="radio" name="person_type"  value="nurse"> </label>

                <input style="float: right; margin-left: 20px;" type="submit" class="submitButton" onclick="searchPeople()" value="Search">
            </div>

            <div id="result" style="color: #333333; text-align: left; float: left; width: 40%; margin-left: 130px;top:0px;">

            </div>
        </div>

    <!-- ######################################### PHP ##############################################-->
    <?php
        require 'database.php';

        //$query = '';
        //$attributes = array();
        //$table = get_table($query, $attributes);

        if (isset($_POST['submit'])) {
            // insert(array(), table)
        }

        mysqli_close($con);
    ?>



    </div>
    <footer id="main-footer">
        <aside>
            <h5 id="text-footer">P Sherman, 42 Wallaby Way, Sydney, Australia | Phone: +62834856, Fax: +62849684 | Email: hello@cubicthemes.com</h5>
            <div id="footer-copyright" class="clearfix">
                <p>Copyright &copy; 2013 Cubicthemes.com, All Rights Reserved</p>
                <a href="#" id="logo-footer"><img src="images/logo-footer.png" data-retina="images/logo-footer-retina.png" alt="Happy Health" /></a>
            </div>
        </aside>
        </footer>
</body>
</html>
