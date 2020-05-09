<!DOCTYPE html>
<?php

		if($_GET["durum"]=="girildi"){
			echo " <h1>HOŞ GELDİN Fatmanur</h1>";
		}
		elseif($_GET["durum"]=="hatali"){
			echo " <h1>HATALI GİRİŞ</h1>";
		}
		

		?>


<html lang="en">
     <head>
     <title>Kullanıcı Girişi - karasu.com</title>
     <meta charset="utf-8">
     <link rel="icon" href="images/favicon.ico">
     <link rel="shortcut icon" href="images/favicon.ico" />
     <link rel="stylesheet" href="css/style.css">
     <link rel="stylesheet" href="css/form.css">
     <script src="js/jquery.js"></script>
     <script src="js/forms.js"></script>
     <script src="js/jquery-migrate-1.1.1.js"></script>
     <script src="js/superfish.js"></script>
     <script src="js/jquery.equalheights.js"></script>
     <script src="js/jquery.easing.1.3.js"></script>
     <script src="js/jquery.ui.totop.js"></script>
     <script>
     
     $(window).load(function(){
       $().UItoTop({ easingType: 'easeOutQuart' });
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
      <script src="js/html5shiv.js"></script>
      <link rel="stylesheet" media="screen" href="css/ie.css">

    <![endif]-->
     </head>
     <body  class="">
<!--==============================header=================================-->
 <header> 
  <div class="container_12">
		<div class="grid_12"> 
		<h1><a href="index.php"><img src="images/logo.png" alt="Gerald Harris attorney at law"></a> </h1>
					
				 
					 <div class="clear"></div>
			</div>
					<div class="menu_block">
					 <nav	class="" >
						<ul class="sf-menu">
									 <li><a href="index.php">ÖZGEÇMİŞ</a></li>
									 <li><a href="hakkimizda.html">HAKIMDA</a></li>
									 <li><a href="sehrim.html">SEHRİM</a></li>
									 <li><a href="mirasimiz.html">MİRASIMIZ</a></li>
									 <li  class="current"><a href="giris.php">Kullanıcı Girisi</a></li>
									 <li><a href="iletisim.html">ıletisim</a></li>
								 </ul>
							</nav>
					 <div class="clear"></div>
					 </div>
					 <div class="clear"></div>
	</div>
</header>

<div class="main">
<!--=======content================================-->

  <div class="container_12">
    <div style="color:white" class="grid_4"> deneme
	</div>
	<div class="grid_4">
      <h3>Kullanıcı Girişi</h3>

					<form action="sorgu.php" method="POST" class="login-container">
						<p><input type="email" placeholder="Email" name="mail" autofocus required="required"></p>
						<p><input type="password" placeholder="Password" name="sifre" required="required"></p>
						<p><input type="submit" value="Log in" name="giris"></p>
					</form>
				</div>
    
    <div class="clear"></div>
  </div>
  <h3><hr></h3>
</div>

<!--=======bottom================================-->
<div class="bottom_block">
		<div class="container_12">
			<div class="grid_2 prefix_2">
				<ul>
					<li><a href="index.php">ÖZGEÇMİŞ</a></li>
					<li><a href="hakkimizda.html">HAKKIMDA</a></li>
				</ul>
			</div>
			<div class="grid_2">
				<ul>
					<li><a href="sehrim.html">SEHRİM</a></li>
					<li><a href="mirasimiz.html">MİRASİMİZ</a></li>
				</ul>
			</div>
			<div class="grid_2">
				<ul>
					<li><a href="giris.php">Kullanıcı Girişi</a></li>
					<li><a href="iletisim.html">İletişim</a></li>
				</ul>
			</div>
			<div class="grid_2">
				<h4>Bize Ulaşın</h4>
				TEL: 000-000-00-00<br><a href="#">info@karasu.com</a>
			 
			</div>
		<div class="clear"></div>
		</div>
	</div>
<!--==============================footer=================================-->

</div>
<footer>		
	<div class="container_12">
	<div class="grid_12">
		<div class="socials">
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
			<a href="#"></a>
		</div>
			<div class="copy">
		 Mayıs &copy; 2020 | Tüm Hakları Saklıdır | Website designed by Fatmanur Demir
		 </div></div>
		 <div class="clear"></div>
	</div>

</footer>

</body>
</html>