</div>
		<!-- /wrapper -->			


			<!-- footer -->
			<footer class="footer" role="contentinfo">
				
				<div class="nav-footer">
					<ul>
						<li><a href="#">home</a></li>
						<li><a href="http://localhost/PJNovosDialogosWp/novosdialogos/sobre/">sobre</a></li>
						<li><a href="http://localhost/PJNovosDialogosWp/novosdialogos/autores/">autores</a></li>
						<li><a href="http://localhost/PJNovosDialogosWp/novosdialogos/videos/">videos</a></li>
						<li><a href="#">podcast</a></li>
						<li><a href="#">lecionários</a></li>
					</ul>
				</div>

				<!-- copyright -->
				<p class="copyright">
					&copy; <?php echo date('Y'); ?> Copyright <?php bloginfo('name'); ?>. <?php _e('Powered by', 'html5blank'); ?>
					 <a href="http://oliverartelucas.com.br" title="oliverartelucas"> : oliverartelucas</a>.
				</p>
				<!-- /copyright -->

			</footer>
			<!-- /footer -->

		

		<?php wp_footer(); ?>






<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>

<script>
$('.carousel').carousel({
  interval: 90000000
})
</script>

<!-- SLIDER -->

<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/jquery.jcarousel.pack.js"></script>

<script type="text/javascript">

	$(document).ready(function () {
		
		//jCarousel Plugin
	    $('#carousel').jcarousel({
			vertical: true,
			scroll: 1,
			auto: 2,
			wrap: 'last',
			initCallback: mycarousel_initCallback
	   	});

	//Front page Carousel - Initial Setup
   	$('div#slideshow-carousel a img').css({'opacity': '0.5'});
   	$('div#slideshow-carousel a img:first').css({'opacity': '1.0'});
   	$('div#slideshow-carousel li a:first').append('<span class="arrow"></span>')

  
  	//Combine jCarousel with Image Display
    $('div#slideshow-carousel li a').hover(
       	function () {
        		
       		if (!$(this).has('span').length) {
        		$('div#slideshow-carousel li a img').stop(true, true).css({'opacity': '0.5'});
   	    		$(this).stop(true, true).children('img').css({'opacity': '1.0'});
       		}		
       	},
       	function () {
        		
       		$('div#slideshow-carousel li a img').stop(true, true).css({'opacity': '0.5'});
       		$('div#slideshow-carousel li a').each(function () {

       			if ($(this).has('span').length) $(this).children('img').css({'opacity': '1.0'});

       		});
        		
       	}
	).click(function () {

	      	$('span.arrow').remove();        
		$(this).append('<span class="arrow"></span>');
       	$('div#slideshow-main li').removeClass('active');        
       	$('div#slideshow-main li.' + $(this).attr('rel')).addClass('active');	
        	
       	return false;
	});


});


//Carousel Tweaking

function mycarousel_initCallback(carousel) {
	
	// Pause autoscrolling if the user moves with the cursor over the clip.
	carousel.clip.hover(function() {
		carousel.stopAuto();
	}, function() {
		carousel.startAuto();
	});
}
	
	</script>

<!-- //SLIDER -->

<!-- MODAL -->
<script>
$('#myModal').on('shown.bs.modal', function () {
  $('#myInput').focus()
})
</script>
<!-- //MODAL -->


<!--<script src="arnonate/jquery.js"></script>-->
<script src="arnonate/hideshare.min.js"></script>

<script>
$(document).ready(function() {
  $(".share").hideshare({
    link: "",           // Link to URL defaults to document.URL
    title: "",          // Title for social post defaults to document.title
    media: "",          // Link to image file defaults to null
    facebook: true,     // Turns on Facebook sharing
    twitter: true,      // Turns on Twitter sharing
    pinterest: true,    // Turns on Pinterest sharing
    googleplus: true,   // Turns on Google Plus sharing
    linkedin: true,     // Turns on LinkedIn sharing
    position: "bottom", // Options: Top, Bottom, Left, Right
    speed: 50           // Speed of transition
  });
});
</script>



<script src="<?php echo get_template_directory_uri(); ?>/js/masonry.pkgd.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.infinitescroll.min.js"></script>

<script type="text/javascript">
$(window).scroll(function()
{
    if($(window).scrollTop() == $(document).height() - $(window).height())
    {
        $('div#loadmoreajaxloader').show();
        $.ajax({
        url: "loadmore.php",
        success: function(html)
        {
            if(html)
            {
                $("#postswrapper").append(html);
                $('div#loadmoreajaxloader').hide();
            }else
            {
                $('div#loadmoreajaxloader').html('<center>No more posts to show.</center>');
            }
        }
        });
    }
});
</script>



		<!-- analytics -->
		<script>
		(function(f,i,r,e,s,h,l){i['GoogleAnalyticsObject']=s;f[s]=f[s]||function(){
		(f[s].q=f[s].q||[]).push(arguments)},f[s].l=1*new Date();h=i.createElement(r),
		l=i.getElementsByTagName(r)[0];h.async=1;h.src=e;l.parentNode.insertBefore(h,l)
		})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
		ga('create', 'UA-XXXXXXXX-XX', 'yourdomain.com');
		ga('send', 'pageview');
		</script>
		
		
		

	</body>
</html>