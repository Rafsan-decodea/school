	
	
	<button onclick="topFunction()" id="myBtn" title="Go to top"><i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
</button> 
			 
			 <script>
// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
    if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
        document.getElementById("myBtn").style.display = "block";
    } else {
        document.getElementById("myBtn").style.display = "none";
    }
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}
</script>				
					
					
	<section class="section_2">
		<div class="container">
			<div class="root">
				<div class="row ">	
					<div class="col-lg-4 col-md-4 col-sm-4 root_01">
						© All rights reserved © 2018 Educational					</div>
					<div class="col-lg-4 col-md-4 col-sm-4 social-link">
						<ul>
							<li><a href="#" target="_blank"> <i class="fa fa-facebook" target="_blank"></i></a></li>
							<li><a href="#" target="_blank"> <i class="fa fa-twitter""></i></a></li>
							<li><a href="#" target="_blank"> <i class="fa fa-google-plus""></i></a></li>
							<li><a href="#" target="_blank"> <i class="fa fa-youtube""></i></a></li>
							<li><a href="#"><i class="fa fa-rss" target="_blank"></i></a></li>
						</ul>
					</div>

					<div class="col-lg-4 col-md-4 col-sm-4 root_02">
						Design & Developed BY <a href='http://www.themesbazar.com/' target='_blank' title='Mobile : 01732-667364'>ThemesBazar.Com</a>					</div>
				</div>	
			</div>
		</div>	
	</section>
				
				<script type='text/javascript' src='<?php echo "/school/wp-includes/js/wp-embed.min7bcd.js" ;?>'></script>



</html>