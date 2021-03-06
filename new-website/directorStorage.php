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
            <input onkeyup="searchPeople()" class="inputField" style="float: left;width: 170px; font-size: small;" type="text" id="searchBox" placeholder="     Search for " name="patient_search">

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
                        <li><a href="#">Services</a>
                            <ul>
                                <li><a href="directorServices.php?fac=palliative">Palliative</a></li>
                                <li><a href="directorServices.php?fac=childrens_unit">Childrens Unit</a></li>
                                <li><a href="directorServices.php?fac=surgical_unit">Surgical Unit</a></li>
                            </ul>
                        </li>
                        <li><a style="font-weight: bold; color: #494949;">Supplies</a>
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

        $facility = $_GET['fac'];

        if ($facility == 'palliative') {
            $facility_id = 1;
        } else if ($facility == 'childrens_unit') {
            $facility_id = 2;
        } else if ($facility == 'surgical_unit') {
            $facility_id = 3;
        }

        if (isset($_POST['buy'])) {

            $order_id = 0;
            $supply_id = $_POST['buy'];
            $quantity = $_POST[$supply_id];

            $query = "SELECT supply_cost FROM supplies WHERE supply_id=$supply_id";
            $result = mysqli_query($con, $query);
            $arr = mysqli_fetch_assoc($result);
            $cost = $quantity*$arr['supply_cost'];

            // orders(order_id, date, facility_id, supply_id, quantity)
            // facility_supplies(facility_id, supplies_id, quantity)

            // insert into orders
            $query = "INSERT INTO orders
                      VALUES($order_id, now(), $facility_id, 'facility', $supply_id, $quantity, $cost)";
            $result = mysqli_query($con, $query) or die("Unable to process order ".mysqli_error($con). "<br>$query");

            // check if facility_supplies already contains purchased product
            $query = "SELECT * FROM facility_supplies WHERE facility_id=$facility_id AND supplies_id=$supply_id";
            $result = mysqli_query($con, $query) or die("Unable to query facility supplies");

            // if facility_supplies has product, update quantity
            if (mysqli_num_rows($result) > 0) {
                $query = "UPDATE facility_supplies
                          SET quantity=quantity+$quantity
                          WHERE facility_id=$facility_id
                          AND supplies_id=$supply_id";
                $result = mysqli_query($con, $query) or die("Unable to update facility supplies");
            }
            else { // if facility_supplies does not have product, insert purchase
                $query = "INSERT INTO facility_supplies VALUES($facility_id, $supply_id, $quantity)";
                $result = mysqli_query($con, $query) or die("Unable to insert new purchase");
            }
        }

        $query = "SELECT supplies_id, supply_name, quantity
                  FROM facility_supplies, supplies
                  WHERE supplies_id=supply_id
                  AND facility_id=$facility_id";
        $attributes = array('supplies_id', 'supply_name', 'quantity');
        $storage = get_table($query, $attributes);

        $query = "SELECT supply_id, supply_name, supply_cost, vendor_name
                  FROM supplies, vendors
                  WHERE vendors_vendor_id = vendor_id
                  AND vendor_name NOT LIKE '%Food%'";
        $attributes = array('supply_id', 'supply_name', 'supply_cost', 'vendor_name');
        $vendor = get_table_w_purchase($query, $attributes, $facility);

        mysqli_close($con);
    ?>


    <div style="text-align:center">

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
        <form class="form" method="POST" action="<?php $_SERVER['PHP_SELF'] . "?fac=$facility" ?>">
            <h3>Storage Unit</h3><br/>

            <hr/>

            <div class="row">
                <div class="col left">
                    <h4>Current Storage</h4><br/>
                    <?php
                        echo $storage;
                    ?>
                </div>

                <div class="col right">
                    <h4>Add to Storage Unit</h4><br/>
                    <?php
                        echo $vendor;
                    ?>
                </div><br/>
            </div>
        </form>
    </div>
</body>
</html>
