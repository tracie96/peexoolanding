<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->
<head>

   <!--- basic page needs
   ================================================== -->
   <meta charset="utf-8">
	<title>Peexoo</title>

	<meta name="description" content="">  
	<meta name="author" content="">

   <!-- mobile specific metas
   ================================================== -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- CSS
   ================================================== -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="css/base.css"> 
 
   <link rel="stylesheet" href="css/main.css">
   <link rel="stylesheet" href="css/vendor.css">

   <!-- script
   ================================================== -->
	<script src="js/modernizr.js"></script>

   <!-- favicons
	================================================== -->
	<link rel="icon" type="image/png" href="favicon.png">

	<style>
		.tabControls .tabControl:first-child {
			background: #FFA500;
			color: #ffffff;
		}
		.tabControls .tabControl:first-child:hover {
			background: #ffffff;
		}
		.tabControls .tabControl:first-child:hover a {
			color: #000000;
		}
		.tabControl {
			border-radius: 5px;
		}
		.tabControl:hover {
			background: #FFA500;
		}
		.tabControl:hover a{
			color: #ffffff;
		}
		.tabControl a {
			color: #000000;
		}
		.tabControl a:hover, .tabControl a:active, .tabControl a:focus {
			text-decoration: none;
			background: none;
		}
		.parentToggleNav li{
			padding: 10px 40px;
			border: 1px solid #000000;
			border-radius: 5px;
		}
		.parentToggleNav li a:hover, .parentToggleNav li a:active, .parentToggleNav li a:focus{
			text-decoration: none;
			background: none;
		}
		.parentToggleNav li a{
			color: #000000;
		}
		.parentToggleNav li.active{
			background: #000000;
		}
		.parentToggleNav li.active a{
			color: #ffffff;
		}
		.parentToggleNav li:not(:last-child){
			margin-right: 10px;
		}
	</style>
	<script>
		const second = 1000,
				minute = second * 60,
				hour = minute * 60,
				day = hour * 24;

		let countDown = new Date('Aug 23, 2019 00:00:00').getTime(),
				x = setInterval(function() {

					let now = new Date().getTime(),
							distance = countDown - now;

					document.getElementById('days').innerText = Math.floor(distance / (day)),
							document.getElementById('hours').innerText = Math.floor((distance % (day)) / (hour)),
							document.getElementById('minutes').innerText = Math.floor((distance % (hour)) / (minute)),
							document.getElementById('seconds').innerText = Math.floor((distance % (minute)) / second);

					//do something later when date is reached
					//if (distance < 0) {
					//  clearInterval(x);
					//  'IT'S MY BIRTHDAY!;
					//}

				}, second);


	</script>

</head>

<body id="top">

	<!-- header 
   ================================================== -->
   <header>
   <?php if (isset($_GET["status"]) AND $_GET["status"]=="Subscribe") { ?>

   <div class="alert alert-warning alert-dismissible fade in">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <strong style="text-align:centre;">Subscription Confirmed</strong>.
  </div>
   <?php }?>
   <?php if (isset($_GET["contact"]) AND $_GET["contact"]=="Message") { ?>

<div class="alert alert-success alert-dismissible fade in">
 <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
 <strong style="text-align:centre;">Success !!! Thank you for Signing</strong>.
</div>
<?php }?>

   	<div class="row">
   		<div class="logo" >
	         <a href="index"></a>
	      </div> 

			<div class="social-links">
			   <ul>
					<li><a href="https://web.facebook.com/peexoo/"><i class="fa fa-facebook"></i></a></li>
					<li><a href="https://twitter.com/Peexoo_ai"><i class="fa fa-twitter"></i></a></li>
				   <li><a href="https://www.instagram.com/peexoo.ai/"><i class="fa fa-instagram"></i></a></li>
				</ul>
			</div>
   	</div> 

   </header> <!-- /header -->   

   <!-- home
   ================================================== -->
   <section id="home" class="home-slides">

   	<div class="shadow-overlay"></div>

   	<div class="content-wrap-table">		   

		   <div class="main-content-tablecell">

		   	<div class="row" style="">
		   		<div class="col-twelve" style="">

		   			<div id="counter">
							<div class="row">
									<ul>
									<div class="col-lg-3"><li class=""><span style="font-size: 200%;margin-top:10px;">Coming Soon</span></li>
									</div>
									<div class="col-lg-3"><li class=""><span id="days" style="font-size: 300%"></span><font color="#FFA500" style="font-size: 7px">DAYS</font> </li>
									</div>
									<div class="col-lg-3"><li class=""><span id="hours" style="font-size: 300%"></span><font color="#FFA500" style="font-size: 7px">HRS</font></li>
									</div>
									<div class="col-lg-3"><li class=""><span id="minutes" style="font-size: 300%"></span><font color="#FFA500" style="font-size: 7px">MINS</font></li>
									</div>
									<!-- <div class="col-lg-3"><li class=""><span id="seconds" style="font-size: 500%"></span><font color="#FFA500" style="font-size: 7px">SECS</font></li>
									</div> -->
								  </div>
								</ul>
						
		   			</div>

			  			<div class="bottom-text" style="margin-top: -60px">
			  				<h1>Photography platform powered by Artificial Intelligence</h1>
				  			<!--<p style="color:#FFA500">-->
								 <!--We handle the end to end process-->
								 <!--involved in photographers work and makes it easier for them to spend more time -->
								 <!--behind their lenses.-->
				  			<!--</p>			  				-->
			  			<!-- </div>			  						  			   	 <div class="modal-body" style="margin-left:-15px"> -->
					<!-- <button type="button" class="btn btn-secondary"style="background-color:#FFA500;" id="photographerTabControl">
						<a href="#photographer" style="color:#000" data-toggle="tab">I'm a Photographer</a>
					</button>
					<button type="button" class="btn btn-secondary" style="background-color:#fff;margin:5px 0 0 0;" id="subscriberTabControl">
						<a href="#subscriber" style="color:#000" data-toggle="tab">I'm a Subscriber</a>
					</button> -->
					<!-- <a href="#info">Info</a>
										 -->
					<div class="tabControls">
						<button id="photographerControl" class="tabControl"><a data-toggle="tab"  href="#photographer">I'm a Photographer</a></button>
						<button id="subscriberControl" class="tabControl"><a data-toggle="tab" href="#subscriber">I'm a Subscriber</a></button>
					</div>
                
                </div>		

			   	</div> <!-- /twelve --> 

			   	<div class="scroll-icon">

					   <!--<p class="scroll-text" style="margin-top:-70px">Scroll For More Info</p>-->
					   <a href="#info" class="smoothscroll" >
					   	<div class="mouse" style="margin-top:-100px"></div>
					   </a>
				   	<div class="end-top"></div>

				</div> <!-- /scroll-icon -->
		   	</div> <!-- /row -->  

		   </div> <!-- /main-content --> 
		   
		</div> <!-- /content-wrap -->
   
   </section> <!-- /home -->
 

   <!-- info
   ================================================== -->
   <section id="info">

   	<div class="info-overlay"></div>

   <!-- Tab test begins here -->
   <div class="row" id="registration">   		
   		<div class="col-twelve tabs-wrap">
		   <ul class="parentToggleNav" id="parentToggle">
				<li id="aboutTab" class="active"><a data-toggle="tab" href="#about" ><i class="fa fa-user"></i> About</a></li>
				<li id="photographerTab"><a data-toggle="tab" href="#photographer"><i class="fa fa-camera"></i> Photographer</a></li>
				<li id="subscriberTab"><a data-toggle="tab" href="#subscriber"><i class="fa fa-rss"></i> Subscribe</a></li>
			</ul>

			<div class="tab-content">
				<div id="about" class="tab-pane fade in active">
				<div class="tab-entry">
					<div class="row tab-entry-intro">
						<div class="col-twelve with-bottom-line">

							<h1>Peexoo</h1>

							<p class="lead" style="color:#000;">Peexoo is an Intelligent photography platform, 
								that helps photographers, find
							, retain and grow their photography business.
							</p>
						</div>   		
					</div> <!-- /tab-content-intro -->

					<div class="row about-content tab-entry-content"> 		
						<div class="about-list block-1-3 block-s-1-2 block-tab-full">
							<div class="bgrid item">	
								<span class="icon"><img src="images/a.png" alt=""></span>            

								<div class="item-content">	

										<h3 class="h05">Find My Face</h3>

									<p>	Find all pictures taken by photographers during any event you 
										attended by just taking a selfie of your face.
									</p>
									
								</div> 	         	 

								</div> <!-- /bgrid -->

								<div class="bgrid item">	

									<span class="icon"><img src="images/b.png" alt=""></span>

								<div class="item-content">	
									<h3 class="h05">FIND MY PHOTOGRAPHER</h3>

									<p>Never loose beautiful moments from events. Discover and book talented and professional photographers and videographers to cover all your photo and video shoots that need to be captured.</p>

									
								</div>	                          

								</div> <!-- /bgrid -->

								<div class="bgrid item">

								<span class="icon"><img src="images/c.png" alt=""></span>

								<div class="item-content">
									<h3 class="h05">PEEXOO MEMORIES</h3>

									<p>Pictures and videos sharing made easy. Now you won't lose the best time of your life captured on camera, get unlimited cloud gallery storage space for you to Upload, save and even share your best pictures all in one place.</p>

										
								</div> 	            	               

								</div> <!-- /bgrid -->

								<div class="bgrid item">

									<span class="icon"><img src="images/d.png" alt=""></span>

								<div class="item-content">
									<h3 class="h05">EXPLORE PHOTOS</h3>

									<p>Explore some of the creative works created by photographers coming out of Africa With explore photos you can get a view of trending pictures and videos shared by photographers and celebrants.
										.</p>

									
								</div>                

								</div> <!-- /bgrid -->

								<div class="bgrid item">

								<span class="icon"><img src="images/e.png" alt=""></span>

								<div class="item-content">	
									<h3 class="h05">PEEXOO TOUCH</h3>

									<p>Instant and powerful picture retouching using artificial intelligence. You don't need to worry  if your pictures would come out great or not because with Peexoo touch your pictures are automatically edited by a simple click of a button.</p>

										
								</div>	               

								</div> <!-- /bgrid -->

								<div class="bgrid item">

								<span class="icon"><img src="images/f.png" alt=""></span>

								<div class="item-content">
										<h3 class="h05">PEEXOO HUB</h3>

									<p>A strong network of creative photographers and videographers in Africa all in on place, in the form of a creative hub where photographers attend meetups, network, workshops, organise exhibitions and learn more about the community.
											</p>
										
								</div>	               

								</div> <!-- /bgrid -->

							</div> <!-- /about-list --> 

						</div> <!-- /row about-content -->
							
					</div>
				</div>
				<div id="photographer" class="tab-pane fade">
				<div class="tab-entry">
					<div class="row tab-entry-intro">
						<div class="col-twelve with-bottom-line">

							<h1>Sign up as a Photographer.</h1>

							<p class="lead"></p>

						</div>   		
					</div> <!-- /tab-content-intro -->

					<div class="row form-wrap tab-entry-content">
						<div class="col-twelve">

							<!-- form -->
							<form name="contactForm" method="post" action="contactsub.php">
								<fieldset>

									<div class="form-field">
											<input name="contactName" type="text" id="contactName" placeholder="Name" value="" minlength="2" required="">
									</div>
									<div class="form-field">
										<input name="contactEmail" type="email" id="contactEmail" placeholder="Email" value="" required="">
									</div>
									<div class="form-field">
											<input name="contactSubject" type="text" id="contactSubject" placeholder="Phone Number" value="">
											
									</div>                       
									<div class="form-field">
										<input name="contactMessage" type="text" id="contactSubject" placeholder="Business Name" value="">
										
										
									</div>                      
									<div class="form-field">
								<button name="sub" class="button button-primary large">Submit</button>

										<div id="submit-loader">
										<div class="text-loader">Sending...</div>                             
											<div class="s-loader">
													<div class="bounce1"></div>
													<div class="bounce2"></div>
													<div class="bounce3"></div>
												</div>
											</div><!-- submit-loader -->
									</div>

								</fieldset>
							</form> <!-- /form -->

							<!-- contact-warning -->
							<div id="message-warning">            	
							</div>            
							<!-- contact-success -->
							<!-- <div id="message-success">
								<i class="fa fa-check"></i>Your message was sent, thank you!<br>
							</div> -->

							</div> <!-- /col-twelve -->					   		
					</div> <!-- /row contact-form -->

				</div> <!-- /tab-entry --> 	
				</div>
				<div id="subscriber" class="tab-pane fade">
				<!-- <h3>Subscriber</h3>
				<p>Eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p> -->
				<div class="tab-entry">

							<div class="row tab-entry-intro">
					   		<div class="col-twelve with-bottom-line">

					   			<h1>Subcribe To Our Newsletter.</h1>

					   			<p class="lead">
						Subscribe to be the first one to know when we launch.</p>

					   		</div>   		
					   	</div> <!-- /tab-content-intro -->

					   	<div class="row form-wrap tab-entry-content">
					   		<div class="col-twelve">

					   			<form class="group" method="POST" action="subtb.php">

                                    <div class="form-field">					
                                    <input type="email" value="" name="contactEmail" class="email" placeholder="email address" required="">					   				
                                </div>

                                <div class="form-field" data-id="tab-contact" >	
                                    <button name="subs" class="button button-primary large">Submit</button>

                                </div>

                                <label for="mce-EMAIL" class="subscribe-message"></label>
                                
                                </form>

					   		</div> <!-- /twelve -->
					   	</div> <!-- subscribe-form -->

						</div> <!-- /tab-entry --> 	
				</div>
			</div>
   		</div>
   </div>
   <!-- Tab test ends here -->

   </section> <!-- /info -->


   <!-- CTA Section
   ================================================== -->
	<section id="cta">

   	<div class="row cta-wrap">

   		<div class="col-twelve cta-content">  

	     		<h2 class="h01"><a href="http://www.dreamhost.com/r.cgi?287326|STYLESHOUT">Peexoo</a></h2>

		      <p class="lead">
Let us begin the countdown as we bring AI and photography together				<!-- Simply type	the promocode in the box labeled “Promo Code” when placing your order. -->	
				</p>

				<div class="action">
			      <a class="button large" href="#info">Subscribe Now</a>
		      </div>		     	

   		</div>

   	</div> <!-- /cta-content -->

   </section> <!-- /cta --> 


   <!-- footer
   ================================================== -->
   <footer>

   	<div class="social-wrap">
   		<div class="row">
				
	         <ul class="footer-social-list">
	            <li><a href="#">
	             	<i class="fa fa-facebook"></i><span>Facebook</span>
	            </a></li>
	            <li><a href="#">
	              	<i class="fa fa-twitter"></i><span>Twitter</span>
	            </a></li>

	            <li><a href="#">
	              	<i class="fa fa-instagram"></i><span>Instagram</span>
	            </a></li>
	         </ul>
	         
			</div> <!-- /row -->
   	</div> <!-- /social-wrap -->

   	<div class="footer-bottom">





   	</div> <!-- /footer-bottom -->

   	<div class="back-to-top">
		 	<a href="#top" class="smoothscroll"><span>Back to Top</span></a>
		</div>

   </footer>

   <div id="preloader"> 
    	<div id="loader"></div>
   </div> 

   <!-- Java Script
   ================================================== --> 
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/main.js"></script>

</body>

<script>
    let parentToggle = $('#parentToggle');
    // console.log(parentToggle);

    $('#photographerControl, #subscriberControl').on('click', function() {
        // console.log('Menu2 control clicked!');
        // console.log($(this)[0].id);
        let colectedId = $(this)[0].id;
        // console.log(colectedId);
        setTab(colectedId);
    });

    function setTab (receivedId) {
        console.log(receivedId);
        parentToggle.children().removeClass('active');
        if (receivedId == 'photographerControl') {
            $('#photographerTab').addClass('active');
        } else if (receivedId == 'subscriberControl') {
            $('#subscriberTab').addClass('active');
        }
        // $('#'+receivedId).addClass('activeTab');
        // console.log($this);
	}

	$('.tabControl').click(function() {
	   window.location = "#info";
	   console.log('I\'ve been clicked');
	});
	
	
</script>
</html>