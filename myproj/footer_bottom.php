<div class="container-inner">
										<div class="row-fluid">	
											
						<div class="span3"><div class="box pav-custom  ">
<div class="box-content"><h3>Testimonials</h3>
<?php
							$randomTestimonials=mysql_query("select * from testimonials ORDER BY MD5(RAND()) LIMIT 1");
							if (mysql_num_rows($randomTestimonials)==1) {
								$testimonialsRows=mysql_fetch_array($randomTestimonials);
								$testimonials_txt=stripslashes($testimonialsRows['testimonials_txt']);
								$shortDetails=substr($testimonials_txt, 0, 170);
								$testimonials_name=stripslashes($testimonialsRows['name']);
								print "<p>$shortDetails..<a href=\"$common_path/content/testimonials/\">Read More >> </a>
								<div style=\"margin-top: 1px; text-align: right; font-weight: bold;\">$testimonials_name</div></p>";
							}
							?>
</div>
</div></div>
							
											
						<div class="span3"><div class="box pav-custom  ">
<div class="box-content">
<h3>Facebook</h3>
<div class="widget box left facebook_module"><style type="text/css">
			 .facebookOuter {
				background-color:#483b2b; 
				width:175px; 
				padding:5px 5px 5px 5px;				
			  }
			 .facebookInner {
			  }
			</style>
			<div class="facebookOuter">
			 <div class="facebookInner">
			  <div class="fb-like-box" colorscheme="dark" data-width="175" data-height="115" data-href="https://www.facebook.com/pages/E-Revolving-indian-cuisine-restaurant-pvt-lyd/497187950349593" data-border-color="#fff" data-show-faces="false" data-stream="false" data-header="false">
			  </div>          
			 </div>
			</div>
					   
			<div id="fb-root"></div>
			<script>(function(d, s, id) {
			  var js, fjs = d.getElementsByTagName(s)[0];
			  if (d.getElementById(id)) return;
			  js = d.createElement(s); js.id = id;
			  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
			  fjs.parentNode.insertBefore(js, fjs);
			}(document, 'script', 'facebook-jssdk'));
			</script>
</div>
</div>
</div></div>

<div class="span3"><div class="box pav-custom  ">
<div class="box-content"><h3>Newsletter</h3>

<p>Sign Up for Our Newsletter:</p>


<?php
													if ($_POST['cmd']=="submitContact") {
														$usrSubject="NewsLetter Subscription E-Mail from $licensedDomain";												
														$email=$_POST['email'];	
														if ( $email=="") {
															$formDisplay=1;
															print "<p class=\"error-msg\">All Fields are Required</p>";
														} else if (!eregi("^[a-z0-9]+([_\.-][a-z0-9]+)*@([a-z0-9]+([.-][a-z0-9]+)*)+(\.[a-z]{2,})$",$email)) {
															$formDisplay=1;
															print "<p class=\"error-msg\">E-Mail Missing or Invalid E-Mail Address.</p>";
														} else {
															$mailheaders="From: <$email>\n";
															$mailheaders.="Reply-To: $email\n";
															$contactEmail="deepakgyawali@gmail.com";
															$finalSubject=$usrSubject." : ".strtoupper($licensedDomain);
															$finalMessage="E-Mail: $email";
															$success=mail($contactEmail,$finalSubject,$finalMessage,$mailheaders);
															if (($success==true)) {
																$formDisplay=1;
																print "<p class=\"success-msg\">Your Email Address is successfully subscribed.<p>";
																$email="";																
																} else {
																$formDisplay=1;
																print "<p class=\"error-msg\">Error during subscription.<br>Try again.</p>";
															}
														}

													} else {
														$formDisplay=1;
													}
													
													if ($formDisplay==1) {
													?>                   
                    <!-- Newsletter End -->		
                    <div class="clear"></div>
						<form name="contact" method="post" action="">
                         <input type="hidden" name="cmd" value="submitContact">
                            <div id="newsletter_mess"></div>
								       <div class="newsletter-submit"><input alt="username" class="inputbox" name="email" size="31" type="text" value="Type your email" /><input class="button" name="Submit" type="submit" value="Sign up" /></div></form><?php
													}
													?>






</div>
</div></div>
							
											
						<div class="span3"><div class="box pav-custom  ">
<div class="box-content"><h3>Contact Us</h3>
<?php
						$getMsg=mysql_fetch_array(mysql_query("select * from extra_pages where pagename='contact_us'"));													$pageDetails=stripslashes($getMsg['details']);														print "$pageDetails";													
													?>
</div>
</div></div>
							
											
						
						</div>	
					
			</div>