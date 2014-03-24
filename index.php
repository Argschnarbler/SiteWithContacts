<!doctype html>
<!-- File: index.php Author: Jacob Meikle Website: Assignment2 File Desc: This is the entire single page desktop site. --> 
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Jacob Meikle | Portfolio</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="js/jquery.js"></script>
    
    <!-- custom fonts -->
    <link href='http://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister' rel='stylesheet' type='text/css'>
      
    <!-- switch to mobile? -->
    <?php
	session_start();
	
	if(empty($_SESSION['visit'])){
		//output
		
		echo'
		    <script src="js/mobileDetector.js"></script>
		    <script>
		    if($.browser.mobile) {
		
		   		window.location = \'http://webdesign4.georgianc.on.ca/~200193940/assignment2/mobile/\'; 
		
			}	
		    </script>
		    ';
		
	}	
	
	$_SESSION['visit'] = "done";

	?>


    
  </head>
  <body>

  	
    <!-- Nav -->
    
    <nav  data-magellan-expedition="fixed">
    	 <dl class="sub-nav"> 
    	 	<dd data-magellan-arrival="about">
    	 		<a href="#about">About</a>
    	 	</dd> 
    	 	<dd data-magellan-arrival="projects">
    	 		<a href="#projects">Projects</a>
    	 	</dd> 
    	 	<dd data-magellan-arrival="services">
    	 		<a href="#services">Services</a>
    	 	</dd> 
    	 	<dd data-magellan-arrival="contact">
    	 		<a href="#contact">Contact</a>
    	 	</dd> 
    	 	<dd>
    	 		<a href="https://github.com/Argschnarbler">Git Hub</a>
    	 	</dd> 
    	 </dl> 
    </nav>
    

    <!-- Banner -->
  
    
    <div class="row">
    	<img id="bannerImg" src="img/logo.png"	alt="Jacob Meikle's logo"/> 
	    <div class="large-11 columns text-center" >
	    		<h1> Jacob Meikle's Portfolio</h1> 		
	    </div>
    </div>
    
    <!-- Welcome -->
    
    <div class="row" id="welcome">
	    <h3 class="large-12 columns text-center " > welcome to my digital abode</h3>
    </div>
    
    
     <!-- Personal Tag Line -->
    
    <div class="row" id="tag">
    	<div class="large-12 columns text-center" >
	    		<p>I Make cool stuff<br/> </p>
	    		<p> Why? <br/>
	    				It helps people<br/>
	    				It's fun<br/>
	    				It makes me rich
	    		</p>
	    		 	<a id="action" class="small button" href="#projects"> View my Work </a>
	    </div>
    </div>
    

    	
    <!-- Content -->
    <div class="row">
    	
	      	<!-- About Section -->
	      	<a id="about" class="navAnchor" data-magellan-destination="about"></a> 	
	      	
	      	<section class="large-12 columns">
				<h2 class="text-center">Bio</h2>
				
				<div class="row">
					<img class="large-3 medium-3 small-3 columns" id="bioImage" src="img/bioLarge.jpg" alt="A picture of Jacob Meikle walking down a boardwalk." />
								
					
					<article class="large-8 medium-8 small-8 small-offset-1 medium-offset-1 large-offset-1 columns">
						<p>
						 Jacob Meikle is a talented computer programmer, web developer and game designer from Barrie, Ontario.
						 He enjoys anything logical and scarcely gets excercise. He's much too busy coding, coding, and coding...
						 There's nothing he'd rather do than make cool digital stuff!	
						</p>

						 <a href="resume.html"> 
						 	<img class="hide-for-small-only" src="img/resume.jpg"	 id="resume" alt"A picture of lined paper with the word résumé on it."/> 
						 	<img class="show-for-small-only" src="img/resume.jpg"	 id="resume-small" alt"A picture of lined paper with the word résumé on it."/> 
						 </a>
					</article>				
		
				</div>			
				
	      	</section>

	</div>
	
	 <div class="row">
    	
	      	<!-- Projects Section -->	
	      	<a id="projects" class="navAnchor" data-magellan-destination="projects"></a> 		
	      	<section class="large-12 columns">
				<h2 class="text-center" data-magellan-destination="projects">Projects</h2>
				
				<div class="row" id="slider">
					<!-- slider -->
					<ul class="example-orbit large-12 columns" data-orbit >
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
      	
	</div>
	
	 <div class="row">
    		
	      	<!-- Services Section -->
	      	<a id="services" class="navAnchor" data-magellan-destination="services"></a> 		
	      	<section id="services" class="large-12 columns">
				<h2 class="text-center" data-magellan-destination="services">Services</h2>
				
				<div class="row text-center">			
					<p class=" large-3 medium-3 small-3 columns"> 1 Hour Consultaion </p> 	<p class=" large-6 medium-6 small-6 columns">...</p> 	<p class=" large-3 medium-3 small-3 columns">$0</p>
				</div>
					
				<div class="row text-center">
					<p class="large-12 medium-12 small-12"> You may inquire with me on the phone or on skype for an hour to discuss what you need for your website. </p>
				</div>
				
				<div class="row text-center">			
					<p class=" large-3 medium-3 small-3 columns"> Web Maintenance</p> 	<p class=" large-6 medium-6 small-6 columns">...</p> 	<p class=" large-3 medium-3 small-3 columns">$30 / Hour</p>
				</div>
					
				<div class="row text-center">
					<p class="large-12 medium-12 small-12"> If your site needs a little work or an update. </p>
				</div>
				
				<div class="row text-center">			
					<p class=" large-3 medium-3 small-3 columns"> Basic Site </p> 	<p class=" large-6 medium-6 small-6 columns">...</p> 	<p class=" large-3 medium-3 small-3 columns">$2500</p>
				</div>
					
				<div class="row text-center">
					<p class="large-12 medium-12 small-12"> A custom made informational site with a content management system. </p>
				</div>
				
				<div class="row text-center">			
					<p class=" large-3 medium-3 small-3 columns"> Advanced Site </p> 	<p class=" large-6 medium-6 small-6 columns">...</p> 	<p class=" large-3 medium-3 small-3 columns">$4500</p>
				</div>
					
				<div class="row text-center">
					<p class="large-12 medium-12 small-12"> A custom made ecommerce / data heavy site with a content management system. </p>
				</div>
				
	      	</section>
      	
	</div>
	
	 <div class="row">
    	
	      	<!-- Contact Section -->
	      	<a id="contact" class="navAnchor" data-magellan-destination="contact"></a> 	
	      	<section id="contact" class="large-12 columns">
				<h2 class="text-center" data-magellan-destination="contact">Contact Me</h2>
						
				<p> Name: Jacob Meikle </p>
				<p> Email: <a href="mailto:Jacob@thissite.com">Jacob@thissite.com</a> </p> 
				<p> Address: 123 Fake St. Toronto, Ontario </p> 
				<p>Phone: <a href="tel:1-705-331-5555">705-331-5555</a></p>
				
				<p> Keep Connected <br/>
					<a href="http://www.facebook.com" target="_blank"> <img class="icon" src="img/fb.png" alt="facebook link" />  </a>
					<a href="http://www.twitter.com"  target="_blank"> <img class="icon"  src="img/tw.png" alt="twitter link" />  </a>
					<a href="http://www.linkedin.com" target="_blank"> <img class="icon"  src="img/linkdin.png" alt="linkedin link" />  </a>
					<a href="http://www.youtube.com"  target="_blank"> <img class="icon"  src="img/youtube.png" alt="youtube link" />  </a>
				</p>
				
	      	</section>
	  	
	      	<div class="large-1 medium-1 small-1 columns"> </div>
      	
	</div>
	
  	<!-- footer -->
  	<div class="row">
	    	<div class="large-10 large-offset-1 medium-10 medium-offset-1 small-10 small-offset-1 columns" > 
	    	<footer class="text-center"> <a href="terms.html">Terms of Use</a> - <a href="privacy.html">Privacy Policy</a> <br/> <br/>  All Rights Reserved &copy; Jacob Meikle 2014 </footer>
	    	</div>
	    	<div class="large-1 medium-1 small-1 columns"> </div>
    </div>
	
	
	 <!-- Javascript Libraries -->
    
    <script src="js/foundation.min.js"></script>
    <script src="js/foundation/foundation.magellan.js"></script>
    <script src="js/linkScroller.js"></script>
    
     <!-- Javascript Custom -->
    <script>
		$(document).foundation();
    </script>
  </body>
</html>
