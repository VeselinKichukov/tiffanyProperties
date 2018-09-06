<!DOCTYPE html>
<html lang="en">
<head>
    <title>Appartments</title>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" media="screen" href="css/reset.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/grid_12.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/slider-2.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/jqtransform.css">
    <script src="js/jquery-1.7.min.js"></script>
    <script src="js/jquery.easing.1.3.js"></script>
    <script src="js/cufon-yui.js"></script>
    <script src="js/vegur_400.font.js"></script>
    <script src="js/Vegur_bold_700.font.js"></script>
    <script src="js/cufon-replace.js"></script>
    <script src="js/tms-0.4.x.js"></script>
    <script src="js/jquery.jqtransform.js"></script>
    <script src="js/FF-cash.js"></script>
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
        <h1><a href="index.html"><img src="assest/images/logo.jpg" alt=""></a></h1>
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
                <li class="current"><a href="appartments.html">Apartments</a></li>
                <!-- <li><a href="renting.html">Renting</a></li> -->
                <li><a href="checkin.html">Checkin Procedure</a></li>
                <li><a href="contacts.html">Contacts</a></li>
            </ul>
        </nav>
    </div>
</header>   
<!--==============================content================================-->
<section id="content">
    <div class="container_12">	
      <div class="grid_8">
        <h2 class="top-1 p3">Home value estimator</h2>
        <div class="wrap">
        	<img src="images/page3-img1.jpg" alt="" class="img-border img-indent">
            <div class="extra-wrap">
            	<p class="color-1 p6">Aenean quis metus lacus, a commodo libero nam lacinia blandit dui vitae malesuada donec </p>
           		<p>Pellentesque scelerisque orci, ac tempor purus vulputate lobortis. Vestibulum porttitor sem mattis eros posuere vitae tristique justo congue curabitur consectetur.</p>
            </div>
        </div>
        <p class="p5">Venenatis aliquam sit amet arcu justo in commodo consectetur lacus ac ultrices cras porta dignissim turpis fermentum porttitor aenean scelerisque nunc vel turpis faucibus vestibulum aenean volutpat iaculis nunc, sed accumsan lacus imperdiet eu.</p>
        <a href="#" class="button">Read more</a>
        <h2 class="top-2 p3">Mortgage center</h2>
        <p class="color-1 p2">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua at vero eos et accusam.</p>
        <div class="wrap">
        	<img src="images/page3-img2.jpg" alt="" class="img-border img-indent">
            <div class="extra-wrap">
            	<p>Et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam.</p>
            </div>
        </div>
        <p>At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod.</p>
      </div>
      <div class="grid_4">
        <div class="left-1">
            <h2 class="top-1 p3">Find your home</h2>
            <form id="form-1" class="form-1 bot-2">
                <div class="select-1">
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
                <div class="clear"></div>
            </form>
            <h2 class="p3">Find sales</h2>
            <p class="color-1 p6"><strong>Nullam a velit felis, eget luctus elitnlla augue lorem</strong></p>
            <p class="p2">Sodales et pharetra et, porttitor vel leo. Phasellus at mi nec sem sodales egestas suscipit rhoncus, lacus ligula tristique risus eros habitasse platea enim.</p>
            <p>Vitae suscipit quam leo non leo. Donec in metus libero, quis faucibus purus. Duis sit amet risus eros. In hac habitasse platea dictums donec tellus.</p>
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
<script>
	Cufon.now();
</script>
</body>
</html>