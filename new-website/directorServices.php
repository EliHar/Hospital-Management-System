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
    <script src="script/helper.js" type="text/javascript"></script>
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
<header id="main-header" class="clearfix" >


    <div id="header-full">
        <div id="header" class="clearfix">
            <a href="#nav" class="open-menu">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a href="#" id="logo"><img src="images/logo.png" data-retina="images/logo-retina.png" ></a>
            <nav id="nav" class="clearfix">
                <a href="#" class="close-menu-big">Close</a>
                <div id="nav-container">
                    <a href="#" class="close-menu">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <ul id="nav-main">
                        <li class="current-menu-item"><a href="index.php">Home</a></li>
                        <li><a href="about.php">About Us</a></li>
                        <li><a href="services.php">Facilities</a></li>

                        <?php if (isset($_SESSION['user']))                                 echo '<li><a href="login.php">My Account</a></li>';                             else                                 echo '<li><a href="login.php">Login</a></li>';                             ?></li>
                        <?php if (isset($_SESSION['employee_id']))
                            echo '<li><a href="php/logout.php">Logout</a></li>';
                        else
                            echo '<li><a href="contact.php">Contact</a></li>';
                        ?>                        </ul>
                </div>
            </nav>
        </div>
    </div>

    <div id="header-full" style="height: 50px; width: 100%;">
        <div style="float: left; margin-top: 10px; margin-left: 40px; color:white;">
            <input onkeyup="searchPeople()" class="inputField" style="float: left;width: 140px; font-size: small;" type="text" id="searchBox" placeholder="     Search for " name="patient_search">

            <label style=" float: left; margin-left: 10px; margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()" type="radio" name="person_type"  value="patient">&nbsp;Patient</label>

            <label style="float: left; margin-right: 5px;margin-left: 20px;margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()" type="radio" name="person_type" value="doctor">&nbsp;Doctor</label>

            <label style="float: left; margin-right: 5px;margin-left: 20px;margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()" type="radio" name="person_type"  value="technician">&nbsp;Technician</label>

            <label style="float: left; margin-right: 5px;margin-left: 20px;margin-top: 15px;" for="patient_search">
                <input style=" float: left;" onclick="searchPeople()" type="radio" name="person_type"  value="nurse">&nbsp;Nurse</label>

        </div>

        <div id="result" style="color: #333333; text-align: left; float: left; width: 20%; margin-top: 45px;margin-left: 41px;top:0px; position: absolute; z-index: 10;">
        </div>
        <div id="header" class="clearfix" >
            <nav id="nav" class="clearfix" style="margin-top: 5px; margin-left: 0px; text-align: left;">
                <div id="nav-container" >
                    <ul id="nav-main" >
                        <li><a href="director.php">Personal Info</a></li>
                        <li><a style="font-weight: bold; color: #494949;">Services</a>
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
                                <li><a href="directorRecords.php?surg=1">Surgeries</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</header>


    <!-- ######################################### Main Image ##############################################-->
    <div id="content" class="clearfix">
        <header id="title-content" class="clearfix" style="background:url(images/img-34.jpg) no-repeat 50% 0 fixed">
            <h1><span><?php echo $_SESSION['employee_name'];?></span></h1>
        </header>

    <!-- ######################################### PHP ##############################################-->
    <?php
        require 'database.php';

        if (isset($_GET['del'])) {
            global $con;
            $id = $_GET['del'];
            $query = "DELETE FROM facility_services WHERE service_id=$id";
            $result = mysqli_query($con, $query) or die('Unable to delete from DB <br/>'.$query);
        }

        $facility = $_GET['fac'];

        if ($facility == 'palliative') {
            $facility_id = 1;
        } else if ($facility == 'childrens_unit') {
            $facility_id = 2;
        } else if ($facility == 'surgical_unit') {
            $facility_id = 3;
        }

        if (isset($_POST['submit'])) {
            global $con;
            $name = $_POST['name'];
            $complexity = $_POST['complexity'];
            $cost = $_POST['cost'];

            $query = "INSERT INTO services (service_name, service_complexity, service_cost, time) VALUES('".$name."', '".$complexity."', '".$cost."', 1)";
            $result = mysqli_query($con, $query);

            $query = "SELECT service_id FROM services WHERE service_name='$name'";
            $result = mysqli_query($con, $query)
                        or die("Unable to retrieve service id<br>mysqli_error($con)<br>$query");
            $arr = mysqli_fetch_assoc($result);

            $query = "INSERT INTO facility_services VALUES($facility_id, ".$arr['service_id'].")";
            $result = mysqli_query($con, $query) or die("Unable to insert into facility supplies<br>$query");
        }

        $query = "SELECT service_id, service_name, service_complexity, service_cost
                  FROM services NATURAL JOIN facility_services WHERE facility_id=$facility_id";
        $attributes = array('service_id', 'service_name', 'service_complexity', 'service_cost');
        $table = get_table_w_del($query, $attributes, $facility);

        mysqli_close($con);
    ?>


    <div>
        <!-- ######################################### Style ##############################################-->
        <style scoped>
            a { float: left; color: white; margin: 5px; font-size: 20pt; text-decoration: none; }
            h3 { font-weight: bold; font-size: 16pt; }
            h4 { font-weight: bold }
            label { float: left; }
            .nav { margin: 0 auto; padding: 40px; margin-bottom: 35px; width: 139px; height: 40px; background-color: #5B94AB; color:white; }
            .form { background-color: #5B94AB; color: white; text-shadow: 1px 1px 1px black; margin-top: 30px; padding: 50px; border: 4px double white; width: 1070px; clear: both; }
            .row { display: flex; }
            .col { flex: 1; width: 300px; min-height: 250px; }
            .col.left { padding-right: 30px; border-right: 1px solid white; }
            .col.right { padding-left: 30px; }
            input[type=text] { width: 300px; }
            .output { color: black; text-shadow: 1px 1px 1px white; border: 1px solid black; padding: 5px }
            .output.h { background-color: lightblue; border: 1px solid black; }
            .del { font-size: 12pt; color: black;  }
            .del:visited { color: black; }
            .del:hover { color: #5B94AB }
        </style>

         <!-- ######################################### Form ##############################################-->
        <form class="form" method="POST" action="<?php $_SERVER['PHP_SELF'] ?>" style="margin-top: 50px">
            <h3 style="text-align: center">Services</h3>

            <hr/><br/>
            
            <div class="row">
                <div class="col left">
                    <h4>Current Services</h4><br/>
                    <?php 
                        echo $table;
                    ?>
                </div>

                <div class="col right">
                    <h4>Add Service</h4><br/><br/>
                    <label for="name">Name: </label>
                    <input type="text" name="name" id="name"/><br/><br/>

                    <label for="complexity">Complexity: </label>
                    <select name="complexity" id="complexity">
                        <option value="basic">Basic</option>
                        <option value="specialized">Specialized</option>
                        <option value="surgery">Surgery</option>
                    </select><br/><br/>

                    <label for="cost">Cost: </label>
                    <input type="text" name="cost" id="cost"/><br/><br/><br/>
                    <input type="submit" name="submit" value="Add Service"/><br/><br/>
                </div>
            </div>
        </form><br/><br/>
    </div>
</body>
</html>
