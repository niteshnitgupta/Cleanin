<!DOCTYPE html>
<html lang="en" class="no-js">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge"> 
		<meta name="viewport" content="width=device-width, initial-scale=1"> 
		<title>Finantics</title>
		<meta name="description" content="Perspective Page View Navigation: Transforms the page in 3D to reveal a menu" />
		<meta name="keywords" content="3d page, menu, navigation, mobile, perspective, css transform, web development, web design" />
		<meta name="author" content="Codrops" />
		<link rel="shortcut icon" href="../favicon.ico">
		<link rel="stylesheet" type="text/css" href="css/normalize.css" />
		<link rel="stylesheet" type="text/css" href="css/demo.css" />
		<link rel="stylesheet" type="text/css" href="css/component.css" />
		<!-- csstransforms3d-shiv-cssclasses-prefixed-teststyles-testprop-testallprops-prefixes-domprefixes-load --> 
		<script src="js/modernizr.custom.25376.js"></script>
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
    <script type="text/javascript">
    //<![CDATA[

    var customIcons = {
      restaurant: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png'
      },
      bar: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png'
      }
    };

    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(23, 82),
        zoom: 4,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name of your PHP file
	  /*
      downloadUrl("phpsqlajax_genxml.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("marker");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("name");
          var address = markers[i].getAttribute("address");
          var type = markers[i].getAttribute("type");
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("lat")),
              parseFloat(markers[i].getAttribute("lng")));
          var html = "<b>" + name + "</b> <br/>" + address;
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon: icon.icon
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
	  */
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET', url, true);
      request.send(null);
    }

    function doNothing() {}

    //]]>

  </script>
    
<style>
#dvLoading
{
   background: url(images/loading.gif) no-repeat center center;
   height: 45px;
   width: 45px;
   position: fixed;
   z-index: 3000;
   left: 50%;
   top: 50%;
   margin: -25px 0 0 -25px;
   background-size: 35px;
}

</style>

<style>
#lcontent
{
 margin-top:180px;
}
@media screen and (max-width: 46.0625em)
{
 #lcontent
 {
  margin-top:130px;
 }
}
.outer-nav
{
 margin-top:80px;
}
hr { border: 0; border-top: 1px solid #ece9d8;
    }
</style>
	</head>
	<body bgcolor="black">
	
	<!--
	<div style="position:fixed;width:100%;top:15px;left:0px;z-index:999;background-color:#fff;color:#fff;padding:10px;"><button style="margin:0px;float:right;" id="showMenu">| &nbsp; | &nbsp; |</button></div>
	-->
		<div id="perspective" class="perspective effect-rotateleft">
			<div class="container">
				<div class="wrapper"><!-- wrapper needed for scroll -->
				
				<!-- top -->
				
				
				<div id="sidsid2" style="width: 100%;background: #FFF; z-index:1999;">
					
				<span><font size="4"> &nbsp; &nbsp; <b> <div style="margin:10px;float:left;"> &nbsp; &nbsp; SWATCH BHARAT </div>  </b> </font></span>
				
				<!--
				<span><div style="margin:10px;float:right;margin-right:50px;"> <img src="images/refresh_icon.png" width="18" height="18" /> </div> </span>-->
				<span class="right"><span> <font color="white"> <button style="margin:10px;float:right;" id="showMenu">|||</button> </font> </span></span>
					
				</div>
				<!-- end of top -->	
								
								
										
					<div class="main clearfix"><br />
<hr />										
						<div class="column">
						
							<div id="sidsid" style="width: 100%;padding-top: 7px;padding-bottom: 7px;padding-left: 10px;float:left;"> 
								<div id="map" style="height: 100px; width: 100px;"></div>
							</div>

					<div id="dvLoading"></div>

					
							
<div id="lcontent">
</div>  <!-- end of column -->
						</div>
													
					
                       
					</div><!-- /main -->
				</div><!-- wrapper -->
			</div><!-- /container -->
			<nav class="outer-nav right vertical">
				<a href="index.php" class="icon-home">Send Image</a>
				<a href="index.php" class="icon-star">Browse India</a>
				<a href="quiz2.php" class="icon-star">I'm IN</a>
				<a href="about.php" class="icon-star">See Event</a>
			</nav>
		</div><!-- /perspective -->
		<script src="js/classie.js"></script>
		<script src="js/menu.js"></script>
		<script>
$(document).ready(function()
{
 var l = $('#sidsid').offset().left;
 $('#sidsid').css('position','fixed').css('top','45px').css('left','0px');
});
</script>

<script>
$(document).ready(function()
{
 var l = $('#sidsid22').offset().left;
 $('#sidsid22').css('position','fixed').css('bottom','0px').css('left','0px').css('background','#450402');
});
</script>

<script>
$(document).ready(function()
{
 var l = $('#sidsid2').offset().left;
 $('#sidsid2').css('position','fixed').css('top','0px').css('left','0px').css('background','#000');
});
</script>
	</body>
</html>