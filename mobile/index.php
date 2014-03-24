<!-- File: index.php Author: Jacob Meikle Website: Assignment2 File Desc: This is the mobile web app -->
<?php

session_start();
$_SESSION['visit'] = "done";
?>
<!doctype html>
<html class="no-js" lang="en">
	
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jacob Meikle | Portfolio</title>


    <link rel="stylesheet" href="themes/jakey-theme.min.css" />
    <link href='css/foundation.css' rel='stylesheet'/>
     <link rel="stylesheet" href="css/custom.css" />
    
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.css" />
	<script src="http://code.jquery.com/jquery-1.10.0.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.4.1/jquery.mobile-1.4.1.min.js"></script>
    
    <!-- custom fonts -->
    <link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
    
  </head>
  
  <body>

	<!-- Home Page -->	
	<div data-role="page" id="home" class="page">
	  <div data-role="header" data-theme="b">
	  	<img id="bannerImg" src="img/logo.png"	alt="Jacob Meikle's logo"/> 
	    <h1>Portfolio</h1>
	  </div>
	  <div data-role="navbar">
	    <ul>
	      <li><a href="#home" class="ui-btn-active ui-state-persist" data-theme="c" data-icon="home">Home</a></li>
	      <li><a href="#aboutme"data-theme="c" data-icon="grid">About Me</a></li>
	      <li><a href="#contact"data-theme="c" data-icon="info">Contact</a></li>
	    </ul>
	  </div>
	  
	  <section role="main" class="ui-content">
	  	
	  	<div> 
	  		<a href="#projects"> <img src="img/project_button.png" /> </a>
	  		<a href="#services"> <img src="img/services_button.png" /> </a>

	  	</div>
	  	
	  	<div>
	  	
		  	<!-- slider -->
			<ul class="example-orbit" data-orbit >
				 <li> 
				 	<a href="http://www.portcarlingboats.com" target="_blank"> <img src="img/slider/project1.png" alt="slide 1" /> </a>
				 	<div class="orbit-caption"> Port Carling Boats </div> 
				 </li> 
				 <li> 
				 	<a href="http://www.ontariocottagerentals.com" target="_blank"> <img src="img/slider/project2.png" alt="slide 2" /> </a>
				 	<div class="orbit-caption"> Ontario Cottage Rentals </div> 
				 </li> 
				 <li> 
				 	<a href="http://www.realtysitesplus.com" target="_blank"> <img src="img/slider/project3.png" alt="slide 3" /> </a>
				 	<div class="orbit-caption"> Realty Sites Plus </div> 
				 </li> 
			</ul>
			
		</div>

		

	  </section>
	  
	  <div id="siteLink" data-theme="b">
	    <a href="http://webdesign4.georgianc.on.ca/~200193940/assignment2/" target="_parent" rel="alternate">Full Site</a>
	  </div>
	 
	   
	  <div data-role="footer" data-theme="b" data-position="fixed">
	  	<!-- Footer -->
	    <h4>Jacob Meikle 2014 &copy; </h4>
	  </div>
	  
	</div>
	
	
		<!--resume page -->
	<div data-role="page" id="res" class="page">
	  <div data-role="header"data-theme="b">
	  	<img id="bannerImg" src="img/logo.png"	alt="Jacob Meikle's logo"/> 
	    <h1>Resume</h1>
	  </div>
	  <div data-role="navbar">
	    <ul>
	      <li><a href="#" data-theme="c" data-icon="back" data-rel="back"> &nbsp; </a></li>
	      <li><a href="#home" data-theme="c" data-icon="home"data-transition="flip">Home</a></li>
	      <li><a href="#aboutme" data-theme="c" data-icon="grid">About Me</a></li>
	      <li><a href="#contact" class="ui-btn-active ui-state-persist" data-theme="c" data-icon="info">Contact</a></li>
	    </ul>
	  </div>
	  
	 <div data-role="content">
  			 
	    <h3 class="large-12 columns text-center " > Skills / Experience</h3>
    	
    	
		
		<p>Phone: <a href="tel:1-705-331-5555">705-331-5555</a></p>
		
		<p>Email: <a href="mailto:Jacob@thissite.com"> Jacob@thissite.com</a></p>

		<dt>Education</dt>
		
		<dd>
		
		<h2>Georgian College</h2>
		
		<p><strong>Program:</strong> Computer Programmer Analyst<br>
		
		
		</dd>
		
		
		<h2>Computer skills</h2>
		
		<ul>
		
		<li> Web {HTML 5, CSS 3, WordPress, Smarty}</li>
				
		<li> Adobe Creative Suite {Flash, Photoshop, Illustrator, InDesign, etc.} </li>
		
		<li> Javascript {Jquery, Ajax} </li>
		
		<li> Database {MySQL, DB2, CentOS}</li>
		
		<li> Mainframe {Z/OS}</li>
		
		<li> Languages {Java, JS, C#, Python, VB, HTML, XML, SQL} </li>
		
		</ul>
		
		<br/>
		
		
		<dl>
		
		<dt>Experience
		
		<dd>
		
		<h2>Geddasoft.
			<span> Programmer, 2012 – present</span>
		</h2>
		
		<ul>
		
		<li>Programmed and lead a team in the creation of a game using unity engine. <a href="http://www.defendearthgame.com/" target="_blank">www.defendearthgame.com</a>
		
		<li>Created backend functionality for <a href="http://www.realtysitesplus.com" target="_blank">www.realtysitesplus.com</a>
		
		</ul>
		
		<h2>SME Strategies Inc.
			<span>Web Developer,  2011 – 2012</span>
		</h2>
		
		<ul>
		
		<li> Created <a href="http:/www.portcarlingboats.com" target="_blank">www.portcarlingboats.com</a> using WordPress.
			
		<li> Created frontend functionality for <a href="http://www.ontariocottagerentals.com" target="_blank">www.ontariocottagerentals.com</a>.</li>
		
		</ul>

		
		</dd>
		
		</dl>
		
	  </div>
	  
	  <!-- Footer -->
	  <div data-role="footer"data-theme="b"data-position="fixed">
	    <h4>Jacob Meikle 2014 &copy; </h4>
	  </div>
	</div>
	
	
	<!-- About Me Page -->
	<div data-role="page" id="aboutme" class="page">
	  <div data-role="header"data-theme="b">
	  	<img id="bannerImg" src="img/logo.png"	alt="Jacob Meikle's logo"/> 
	    <h1>About Me</h1>
	  </div>
	  <div data-role="navbar">
	    <ul>
	      <li><a href="#" data-theme="c" data-icon="back" data-rel="back"> &nbsp; </a></li>
	      <li><a href="#home" data-theme="c" data-icon="home"data-transition="flip">Home</a></li>
	      <li><a href="#aboutme" class="ui-btn-active ui-state-persist" data-theme="c" data-icon="grid">About Me</a></li>
	      <li><a href="#contact"data-theme="c" data-icon="info">Contact</a></li>
	    </ul>
	  </div>
	  
	  <div data-role="content">
	  	
	  		<p>I Make cool stuff<br/> </p>
	  		
	    	<p> Why? <br/>
				It helps people<br/>
				It's fun<br/>
				It makes me rich
	    	</p>
	  	
	  		<img id="bioImage" src="img/bioSmall.jpg" alt"A picture of Jacob Meikle" />
	  	
	  		<p class="left">
			 Jacob Meikle is a talented computer programmer, web developer and game designer from Barrie, Ontario.
			 He enjoys anything logical and scarcely gets excercise. He's much too busy coding, coding, and coding...
			 There's nothing he'd rather do than make cool digital stuff!	
			</p>
			
			<a href="#res"> 
				<img id="resImage" src="img/resume.jpg" id="resume-small" alt"A picture of lined paper with the word résumé on it."/> 
			</a>

	  </div>

	  <!-- Footer -->
	  <div data-role="footer"data-theme="b"data-position="fixed">
	    <h4>Jacob Meikle 2014 &copy; </h4>
	  </div>
	</div>
	
	<!--Contact me page -->
	<div data-role="page" id="contact" class="page">
	  <div data-role="header"data-theme="b">
	  	<img id="bannerImg" src="img/logo.png"	alt="Jacob Meikle's logo"/> 
	    <h1>Contact Me</h1>
	  </div>
	  <div data-role="navbar">
	    <ul>
	      <li><a href="#" data-theme="c" data-icon="back" data-rel="back"> &nbsp; </a></li>
	      <li><a href="#home" data-theme="c" data-icon="home"data-transition="flip">Home</a></li>
	      <li><a href="#aboutme" data-theme="c" data-icon="grid">About Me</a></li>
	      <li><a href="#contact" class="ui-btn-active ui-state-persist" data-theme="c" data-icon="info">Contact</a></li>
	    </ul>
	  </div>
	  
	  <div data-role="content">
  		<p> Name: Jacob Meikle </p>
			<p> Email: <a href="mailto:Jacob@thissite.com">Jacob@thissite.com</a> </p> 
			<p> Address: 123 Fake St. Toronto, Ontario </p> 
			<p>Phone: <a href="tel:1-705-331-5555">705-331-5555</a></p>
			
			<p> Keep Connected <br/>
				<a href="http://www.facebook.com" target="_blank"> <img class="icon" src="img/fb.png" alt="facebook link" />  </a>
				<a href="http://www.twitter.com"  target="_blank"> <img class="icon"  src="img/tw.png" alt="twitter link" />  </a>
				<a href="http://www.linkedin.com" target="_blank"> <img class="icon"  src="img/lk.png" alt="linkedin link" />  </a>
				<a href="http://www.youtube.com"  target="_blank"> <img class="icon"  src="img/yt.png" alt="youtube link" />  </a>
			</p>	
	  </div>
	  
	  <!-- Footer -->
	  <div data-role="footer"data-theme="b"data-position="fixed">
	    <h4>Jacob Meikle 2014 &copy; </h4>
	  </div>
	</div>
	
	<!--Projects page -->
	<div data-role="page" id="projects" class="page">
	  <div data-role="header"data-theme="b">
	  	<img id="bannerImg" src="img/logo.png"	alt="Jacob Meikle's logo"/> 
	    <h1>Projects</h1>
	  </div>
	  <div data-role="navbar">
	    <ul>
	      <li><a href="#" data-theme="c" data-icon="back" data-rel="back"> &nbsp; </a></li>
	      <li><a href="#home" data-theme="c" data-icon="home"data-transition="flip">Home</a></li>
	      <li><a href="#aboutme" data-theme="c" data-icon="grid">About Me</a></li>
	      <li><a href="#contact" class="ui-btn-active ui-state-persist" data-theme="c" data-icon="info">Contact</a></li>
	    </ul>
	  </div>
	  
	  <div data-role="content">
	  	<p> Port Carling Boats</p>
  		<p> <a href="http://www.portcarlingboats.com"><img class="projPic" src="img/slider/project1.png" /> </a> </p>
  		<p> Ontario Cottage Rentals</p>
  		<p> <a href="http://www.ontariocottagerentals.com"><img class="projPic" src="img/slider/project2.png" /> </a> </p>
  		<p> Realty Sites Plus </p>
  		<p> <a href="http://www.realtysitesplus.com"><img class="projPic" src="img/slider/project3.png" /> </a> </p>
	  </div>
	  
	  <!-- Footer -->
	  <div data-role="footer"data-theme="b"data-position="fixed">
	    <h4>Jacob Meikle 2014 &copy; </h4>
	  </div>
	</div>
	
	
		<!--Services me page -->
	<div data-role="page" id="services" class="page">
	  <div data-role="header"data-theme="b">
	  	<img id="bannerImg" src="img/logo.png"	alt="Jacob Meikle's logo"/> 
	    <h1>Services</h1>
	  </div>
	  <div data-role="navbar">
	    <ul>
	      <li><a href="#" data-theme="c" data-icon="back" data-rel="back"> &nbsp; </a></li>
	      <li><a href="#home" data-theme="c" data-icon="home"data-transition="flip">Home</a></li>
	      <li><a href="#aboutme" data-theme="c" data-icon="grid">About Me</a></li>
	      <li><a href="#contact" class="ui-btn-active ui-state-persist" data-theme="c" data-icon="info">Contact</a></li>
	    </ul>
	  </div>
	  
	  <div data-role="content">
	  	<table>
	  		<thead> <th>Service</th> <th>Price</th>  <th> Description </th></thead>
	  		<tbody>
	  			<tr> <td>  1 Hour Consultaion </td> <td> $0 </td> <td> You may inquire with me on the phone or on skype for an hour to discuss what you need for your website. </td> </tr>
	  			<tr> <td>  Web Maintenance </td> <td> $30/hr </td> <td> If your site needs a little work or an update.</td></tr>
	  			<tr> <td>  Basic Site  </td> <td> $2500 </td> <td>A custom made informational site with a content management system. </td></tr>
	  			<tr> <td> Advanced Site  </td> <td> $4500 </td> <td> A custom made ecommerce / data heavy site with a content management system. </td> </tr>
	  		</tbody>
	  	</table>

	  <!-- Footer -->
	  <div data-role="footer"data-theme="b"data-position="fixed">
	    <h4>Jacob Meikle 2014 &copy; </h4>
	  </div>
	</div>
	
	<script src='js/foundation.min.js'></script>
	
	<script>
		$(document).foundation();
	</script>
	
	
	  
  </body>
</html>
