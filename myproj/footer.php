<div class="container">
			<div class="container-inner">
								<div class="row-fluid">	
					<div class="span3"><div class="box pav-custom   social">
<div class="box-content"><h3>Follow us on</h3>

<ul>
	<li class="facebook"><span>icon</span><a href="http://www.facebook.com/pages/E-Revolving-indian-cuisine-restaurant-pvt-lyd/497187950349593">Find us on Facbook</a></li>
	<li class="twitter"><span>icon</span><a href="javascript:void(0)">Follow us on Twitter</a></li>
	<li class="vimeo"><span>icon</span><a href="javascript:void(0)">Subscribe our channel</a></li>
	<li class="rss"><span>icon</span><a href="javascript:void(0)">RSS Feed</a></li>
</ul>
</div>
</div></div>
						
									
					<div class="span2"><div class="box pav-custom  ">
<div class="box-content"><h3>Quick Links</h3>

<ul class="list">
	            <?php
														$getquickLinks=mysql_query("select * from quick_links order by id asc LIMIT 5");
														if (mysql_num_rows($getquickLinks)>0) {
															
															print "";

															$i=0;
															while ($eachquickLinks=mysql_fetch_array($getquickLinks)) {
																$quickLinksID=$eachquickLinks['id'];
																$quickLinksTitle=$eachquickLinks['title'];

																
																$i++;
																
																if ($i%2==0) {
																	$rowStyle="class=\"odd\"";
																} else {
																	$rowStyle="";
																}

																print "<li><a href=\"$common_path/content/quick_links/index.php?id=$quickLinksID\">$quickLinksTitle</a></li>";
															}

															print "";
														}
														?>
</ul>
</div>
</div></div>
						
									
					<div class="span2"><div class="box pav-custom  ">
<div class="box-content"><h3>Customer Service</h3>

<ul class="list">
	 <?php
														$getquickLinks=mysql_query("select * from customer_service order by id asc LIMIT 5");
														if (mysql_num_rows($getquickLinks)>0) {
															
															print "";

															$i=0;
															while ($eachquickLinks=mysql_fetch_array($getquickLinks)) {
																$quickLinksID=$eachquickLinks['id'];
																$quickLinksTitle=$eachquickLinks['title'];

																
																$i++;
																
																if ($i%2==0) {
																	$rowStyle="class=\"odd\"";
																} else {
																	$rowStyle="";
																}

																print "<li><a href=\"$common_path/content/customer_service/index.php?id=$quickLinksID\">$quickLinksTitle</a></li>";
															}

															print "";
														}
														?>
</ul>
</div>
</div></div>
						
									
					<div class="span2"><div class="box pav-custom  ">
<div class="box-content"><h3>Information</h3>

<ul class="list">
	 <?php
														$getquickLinks=mysql_query("select * from information order by id asc LIMIT 5");
														if (mysql_num_rows($getquickLinks)>0) {
															
															print "";

															$i=0;
															while ($eachquickLinks=mysql_fetch_array($getquickLinks)) {
																$quickLinksID=$eachquickLinks['id'];
																$quickLinksTitle=$eachquickLinks['title'];

																
																$i++;
																
																if ($i%2==0) {
																	$rowStyle="class=\"odd\"";
																} else {
																	$rowStyle="";
																}

																print "<li><a href=\"$common_path/content/information/index.php?id=$quickLinksID\">$quickLinksTitle</a></li>";
															}

															print "";
														}
														?>
</ul>
</div>
</div></div>
						
									
					<div class="span2"><div class="box pav-custom  ">
<div class="box-content"><h3>Facebook</h3>
<p><div class="widget box left facebook_module"><style type="text/css">
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
			</script></p>
</div>
</div></div>
					</div>	
				
			</div>
		</div>
</div>