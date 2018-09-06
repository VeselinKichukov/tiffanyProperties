@include('alert::bootstrap')

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contacts</title>
    <meta charset="utf-8">

  <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/slider-2.css">
  <link rel="stylesheet" type="text/css" media="screen" href="css/jqtransform.css">
  <!-- <script src="js/jquery-1.7.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/cufon-yui.js"></script>
  <script src="js/vegur_400.font.js"></script>
  <script src="js/Vegur_bold_700.font.js"></script>
  <script src="js/cufon-replace.js"></script>
  <script src="js/tms-0.4.x.js"></script>
  <script src="js/jquery.jqtransform.js"></script>
  <script src="js/FF-cash.js"></script> -->

<?php
  {{ URL::asset( 'js/jquery-1.7.min.js'); }}
  {{ URL::asset( 'js/jquery.easing.1.3.js'); }}
  {{ URL::asset( 'js/cufon-yui.js'); }}
      {{ URL::asset( 'js/vegur_400.font.js'); }}
          {{ URL::asset( 'js/Vegur_bold_700.font.js'); }}
              {{ URL::asset( 'js/cufon-replace.js'); }}
                  {{ URL::asset( 'js/tms-0.4.x.js'); }}
                      {{ URL::asset( 'js/jquery.jqtransform.js'); }}
                          {{ URL::asset( '"js/FF-cash.js'); }}
?>



    <script>
		$(document).ready(function(){
			$('.form-1').jqTransform();
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:1000,
				preset:'fade',
				pagination:true,
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:false,
				waitBannerAnimation:false,
				progressBar:false
			})
		});
	</script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
           <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type="text/javascript" src="js/html5.js"></script>
    	<link rel="stylesheet" type="text/css" media="screen" href="css/ie.css">
	<![endif]-->
</head>
<body>
<div class="main">
<!--==============================header=================================-->
<header>
    <div>
        <h1><a href="home"><img src="{{ URL::asset(images/logo.jpg)" alt=""></a></h1>
        <div class="social-icons">
            <span>Follow Us:</span>

            <a href="index_bg.html" class="language"></a>

            <a href="#" class="icon-3"></a>
            <a href="#" class="icon-2"></a>
            <a href="#" class="icon-1"></a>
        </div>
        <div id="slide">
            <div class="slider">
                <ul class="items">
                    <li><img src="images/slider_sinemorec_1.jpg" alt="" /></li>
                    <li><img src="images/slider_sinemorec_2.jpg" alt="" /></li>
                    <li><img src="images/slider_sinemorec_3.jpg" alt="" /></li>
                </ul>
            </div>
            <a href="#" class="prev"></a><a href="#" class="next"></a>
        </div>
        <nav>
            <ul class="menu">
                <li><a href="index.html">Home</a></li>
                <!-- <li><a href="buying.html">Buying</a></li> -->
                <li><a href="appartments.html">Apartments</a></li>
                <!-- <li><a href="renting.html">Renting</a></li> -->
                <li><a href="checkin.html">Checkin Procedure</a></li>
                <li class="current"><a href="contacts.html">Contacts</a></li>
            </ul>
        </nav>
    </div>
</header>
<!--==============================content================================-->
<section id="content">
    <div class="container_12">
      <div class="grid_8">
        <h2 class="top-1 p3">Contact form</h2>
        <form id="form" method="post" action='/contacts'>
          <fieldset>
            <label><strong>Your Name:</strong>
              <input type="text" id='name' name='name' placeholder="Your names here..." required>
            </label>
            <label><strong>Your E-mail:</strong>
              <input type="text" id='email' name='email' placeholder="john.doe@example.com" required>
            </label>
            <label><strong>Your Message:</strong>
              <textarea id='message' name='message' placeholder="Your message here." required></textarea>
            </label>
            <div class="btns"><a href="#" class="button">Clear</a><input type="submit" class="btn btn-primary" value="Send" /></div>
          </fieldset>
        </form>
      </div>
      <div class="grid_4">
        <div class="left-1">
            <h2 class="top-1 p3">Find your home</h2>
            <form id="form-1" class="form-1 bot-2">
              <iframe src="https://www.google.com/maps/d/embed?mid=1oJ17SU74HU56Dh-d3cjfNHnIYN7UVQ7k&hl=en" width="310px" height="240px"></iframe>
                <!-- <div class="select-1">
                    <label>Home type</label>
                    <select name="select" >
                        <option>Homes for sale</option>
                    </select>
                </div>
                <div>
                    <label>Location</label>
                    <input type="text" value="Address, City, Zip" onBlur="if(this.value=='') this.value='Address, City, Zip'" onFocus="if(this.value =='Address, City, Zip' ) this.value=''"  />
                </div>
                <div class="select-2">
                    <label>Beds</label>
                    <select name="select" >
                        <option>&nbsp;</option>
                    </select>
                </div>
                <div class="select-2 last">
                    <label>Baths</label>
                    <select name="select" >
                        <option>&nbsp;</option>
                    </select>
                </div>
                <a onClick="document.getElementById('form-1').submit()" class="button">Search</a>
                <div class="clear"></div> -->
            </form>
            <h2 class="p3">Our contacts</h2>
            <dl>
                <dt class="color-1 p2"><strong>8901 Marmora Road,<br>Glasgow, D04 89GR.</strong></dt>
                <dd><span>Freephone:</span>+1 800 559 6580</dd>
                <dd><span>Telephone:</span>+1 959 603 6035</dd>
                <dd><span>E-mail:</span><a href="#" class="link">mail@demolink.org</a></dd>
            </dl>
        </div>
      </div>
      <div class="clear"></div>
    </div>
</section>
</div>
<!--==============================footer=================================-->
    <footer>
        <p>© 2012 Real Estate</p>
        <p>Website Template by <a href="http://www.templatemonster.com/" target="_blank" rel="nofollow">www.templatemonster</a></p>
    </footer>
<!-- <script>
	Cufon.now();
</script> -->
</body>
</html>
