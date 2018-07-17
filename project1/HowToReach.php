<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:600' rel='stylesheet' type='text/css'>
   <link rel="stylesheet" href="assets/assets_reach/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/assets_reach/css/style.css">
    <link rel="stylesheet" href="assets/assets_reach/css/headers/header1.css">
    <link rel="stylesheet" href="assets/assets_reach/plugins/bootstrap/css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="assets/assets_reach/css/style_responsive.css">
        
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="assets/assets_reach/plugins/font-awesome/css/font-awesome.css">
    
    <!-- CSS Theme -->    
    <link rel="stylesheet" href="assets/assets_reach/css/themes/default.css" id="style_color">
    <link rel="stylesheet" href="assets/assets_reach/css/themes/headers/default.css" id="style_color-header-1">
<title>HowToReach</title>
<script
src="http://maps.googleapis.com/maps/api/js">
</script>

<script>
var myCenter=new google.maps.LatLng(24.75772413,92.7923888);

function initialize()
{
var mapProp = {
  center:myCenter,
  zoom:15,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };

var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

var marker=new google.maps.Marker({
  position:myCenter,
  title: 'TnP Office NIT Silchar'
  });

marker.setMap(map);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>

<body style="">
<?php include 'header.php';?>
<div class="row-fluid breadcrumbs margin-bottom-40">
  <div class="container">
        <h1 class="pull-left">Reaching NIT Silchar</h1>
        
  </div><!--/container-->
</div><!--/breadcrumbs-->
<div class="container">
<div class="row-fluid">     
  <div class="span9">
<div class="row-fluid">
    <div class="headline"><h3>By Air</h3></div>
    
  <p>
      There are daily direct flights to Silchar from cities like Kolkata, Guwahati and Imphal. Air India and Jet
Airways operate flights from Kolkata to Silchar/Guwahati. From airport, the Institute campus is
approximately 35 Kms. Hired private taxi service is available from the airport. Full taxi hire charge is
approximately Rs. 650.00 to Rs. 700.00
<br/>
  </p>
</div>

<div class="row-fluid">
  <div class="headline"><h3>By Rail</h3></div>
    
  <p>Silchar has a direct rail link with Lumding/Guwahati. Daily train services run between Silchar and  Lumding. The campus is around 10 KMs from the railway station. Preferred mode of transportation is  auto-rickshaw (fare approx. Rs. 200.00). </p>

  </div>

<div class="row-fluid">
  <div class="headline"><h3>By Road</h3></div>
    
  <p>Silchar is well connected with various cities through road. A 340 km long National Highway directly  connects Silchar with Guwahati. From Guwahati railway station, head towards ISBT through Paltan  Bazar side exit of the railway station. A large number of day/night buses ply between Guwahati and  Silchar in the morning and evening everyday. Bus will drop the passengers at ISBT, Silchar. Please pick  up an auto-rickshaw for NIT Campus (Rs. 200.00-250.00).</p>
  </div>

<div class="row-fluid margin-bottom-30">
        <div class="span3">
          <div class="row-fluid">
            <div class="headline"><h3>Office Address</h3></div>
            <div class="row-fluid">
            <address>
              Training and Placement Office<br />  
              NIT Silchar, Cachar-788010<br /> 
              Assam, India.<br /> 
              Phone: <br /> 
              Fax: <br /> 
              Email: <a href="mailto:"></a><br />
            </address>
            </div>
          </div>
        </div>
        <div class="span9">
            <div class="headline"><h3>Office Location</h3></div>
            <div id="googleMap" style="width:650px;height:300px;"></div>
        

    </div>
    </div>
    </div>
    </div>
    </div>
    
    <?php include 'footer.php';?>
    
</body>
</html>
