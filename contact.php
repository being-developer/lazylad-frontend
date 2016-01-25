
<?php

  session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Get your daily required items like groceries, stationary and many more delivered at your doorsteps ordering from our mobile app LazyLad">
    <meta name="author" content="aman kaushal, subash kumar">

    <title>Contact Us</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/lazylad.min.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">
    <!-- Custom Fonts -->
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <script src="js/jquery.min.js"></script>

    <script>
        $(function(){
            $("#navigation").load("navigation.html");
            $("#footer").load("footer-contact.html");
        });
    </script>
    <script src="https://maps.googleapis.com/maps/api/js"></script>
    <script>
      function initialize() {
        var mapCanvas = document.getElementById('map');
        var mapOptions = {
          center: new google.maps.LatLng(44.5403, -78.5463),
          zoom: 8,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }
        var map = new google.maps.Map(mapCanvas, mapOptions)
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>


    <!-- Custom Fonts -->
    
     
    

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body style="font-family: 'Roboto', sans-serif;">

    <!-- Navigation -->
    <div id="navigation">

    </div>


    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <!--<header class="intro-header" style="background:#fff">
        
    </header>-->
    <center>
    <div style="font-size:36px;margin-top: 126.2px;">
    Contact us
    </div>
    </center>

    <!-- Main Content -->
    <div class="container-fluid" style="margin-top:88px;margin-left:142px;">
        <div class="row">
            <div class="col-md-5 col-md-offset-0">
                <?php


                 $msg=isset($_SESSION['msg'])?$_SESSION['msg']:null;
                 $status=isset($_SESSION['status'])?$_SESSION['status']:null;
                if($msg && $status=='true')
                {
                echo "saaf";
                echo '<div class="alert alert-success">
                <strong>Success!</strong> '.$_SESSION['msg'].'</div>';
                unset($_SESSION['msg']);
                unset($_SESSION['status']);
                }
                else if ($msg && $status=='false')
                {
                echo '<div class="alert alert-warning">
                <strong>Error</strong>  '.$_SESSION['msg'].'</div>';
                unset($_SESSION['msg']);
                unset($_SESSION['status']);
                }



                ?>
            <form id="contact-form" method="post" action="email.php">
            <div><input type="text" placeholder="First Name" name="cfname" class="contact" style="width:456px;height:60px;"></div>
            <div style="margin-top:38px;"><input type="email" placeholder="Email" name="cfemail" class="contact " style="width:456px;height:60px;"></div>
            <div style="margin-top:38px;"><textarea class="contact" id="cfmessage" name="cfmessage" placeholder="Text your message here" style="width:456px;height:237px;padding-left:20px;" ></textarea></div>
            
            <div class="container">
            <div class="row">
            <!--<div class="col-md-2" style="margin-top:32px;"><label name="document" style="color:#B0B0B0;font-size:14px; ">Attach Documents</label></div>  -->
            <div class="col-md-3" style="margin-top:22px;"><button type="submit" style="background:#FF0066;border:none; border-radius: 12px;width:143px;height:36px;color:white;margin-left:105px;">Send</button></div>
            </div>
            </div>
            </form>
            </div>

            <div class="col-md-7" style="padding-left: 120px;">
                <span style="color:black;font-size:18px;">Where to find us</span><br><br>
                <div><script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:263px;width:415px;"><div id="gmap_canvas" style="height:263px;width:415px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.themecircle.net" id="get-map-data">Lazylad on map</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:14,center:new google.maps.LatLng(28.4594965,77.02663830000006),mapTypeId: google.maps.MapTypeId.TERRAIN};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(28.4594965, 77.02663830000006)});infowindow = new google.maps.InfoWindow({content:"<b>449</b><br/>Spaze city opposite mk hotel <br/> Gurgaon" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script></div>
                <div style="margin-top:36px;" > <span style="font-size:18px;color:gray;">Contact us</span>
                   <table style="width:350px;height:140px;margin-left:1px;margin-top:36px;margin-bottom:68px;">
                            <tr >
                                <td width="60px" height="60px;"><img src="img/home/contact us icons-02.png" width="15px" height="22px" /></td>
                                <td style="font-size:16px;color:#b3b3b3">449, Spaze city opposite mk hotel, Gurgaon</td>
                            </tr>

                            <tr>
                                <td height="60px;"><img src="img/home/contact us icons-04.png" width="20px" height="13px"/></td>
                                <td style="font-size:16px;color:#b3b3b3">hello@lazylad.com</td>
                            </tr>

                            <tr>
                                <td height="60px;"><img src="img/home/contact us icons-05.png" width="18px" height="18px"/> </td>
                                <td style="font-size:16px;color:#b3b3b3;">+91 9876543210</td>
                            </tr>

                        </table>
                </div>

            </div>
                
        </div>
    </div>

    <hr>

    <!-- Footer -->
    <div id="footer">

    </div>

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="js/lazylad.js"></script>

</body>

</html>