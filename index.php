<?php  
	 session_start();



    // Set session variables
    $_SESSION["visitor"] = $_SERVER['REMOTE_ADDR'];
        
	
	// include 'cookie/cookie.php';
?>
<!DOCTYPE html>
<html lang="id">
    <head>
	   <!-- atas -->
	  <title>Suralaga Post - social developing journalism</title>
	  <meta charset="" arset="utf-8"/> 
	  <meta name="description" content="Kabar terbaru, nasional, regional, sosial, opini dan ulasan dari suralaga post, media muda dan kreatif" />
	  <meta name="tag" content="media berita suralaga, kegiatan desa suralaga,pemuda desa" />
	  <meta name="theme-color" content="red" />
	  <link rel="shortcut icon" href="Gbr/favicon/android-icon-192x192.png"/>
	  <link rel="manifest" href="Gbr/favicon/manifest.json">
	  <!-- view point -->
	  <meta name="viewport" content="width=device-width, initial-scale=1.0"/> 
	  <link rel="stylesheet" media="screen and (max-width: 600px)"href="css/mobile.css">
	  <link rel="stylesheet" media="screen and (min-width: 768px)" href="css/tablet.css">
	  <link rel="stylesheet" media="screen and (min-width: 992px)" href="css/notebook.css">
	  <link rel=stylesheet href="res/navigasi/navigasi3/nav3.css">
	  <!-- <link rel=stylesheet href="res/navigasi/navigasi2/nav2.css"> -->
	  <!-- ============================================================ -->
	  <!--font-->
	  <?php include ("res/font/font.php");?>
	  <!--==============================  -->
	  <!--block for css host (a collection of needed css-->
	  <link rel="preload" href="/res/navigasi/navigasi1/mx.js" as="script">
	  <script type="text/javascript" src="/res/navigasi/navigasi1/mx.js">
		 
	  </script>
		  
	  <style type="text/css">  #contohkonten{width: 100%; height:
		  400px;background: gainsboro; position: relative; } 

        
	  </style> 
    </head>
    <!--tas-->  
    <body style="background: tomato;">
		  <div id="tray">
		    <div id="maaf"><p>terimakasih kami, mohon maaf
	               untuk saat ini kami hanya tersedia dalam versi mobile</p>
		    </div>
		   </div>
		    <div id="kontainerSatu">   <!--navigasi-->     
            <?php require('res/navigasi/navigasi3/nav3.php');?> 
            <!--pemisah-->
            <div class="pemisah" style="height:80px;"></div>
	   
	   <!-- =================================== -->
	   <?php include('res/time/time2.php');?>
	   <!-- =================================== -->
       <div id="kontainerTiga" class="kontainer-daftar" >   
        <div id="kon-in-daftar">
            <!-- <a href="login/">
                <h2 id="login-btn">login <span id="a-link">-></span></h2>
            </a> -->
        </div>
       </div>

		  
	   <!-- ############################################### -->
	   <div id="welkom">   
		<h2 id="tt">Terimakasih,mohon maaf situs  kami masih dalam pengembangan</h2>
	   </div>
       <div id="kontainerDua" style="background: tomato; padding: 10px;display: block;margin: 0 auto;">   
        <?php echo "<h3>hai...".$_SESSION["visitor"]."</h3>"; ?>
        
       </div>
	    <p><b>fakkkkk...............</b></p>

	    <!-- <script style="display:none;" type="text/javascript" src="https://free-hit-counters.net/count/ah5a"></script><br>
 <a href='https://www.versicherungen.at/'>www.versicherungen.at</a> <script type='text/javascript' src='https://whomania.com/ctr?id=7c0f5c5703683817532a820722ae8cacf35184b7'></script> -->
   
    </body>
    
</html>
 <!--bawah-->
<!-- di amana akaj -->