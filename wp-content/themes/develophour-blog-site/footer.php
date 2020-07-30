<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DevelopHour_Blog_Site
 */

?>
	<footer class="footer footer-default">
		<div class="container">
			<div class="copyright text-center" id="copyright">
				&copy;
				<script>
				document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
				</script>, Developed by
				<a href="https://develophour.com/" target="_blank">DevelopHour</a>
			</div>
		</div>
	</footer>
</div><!-- #page -->

<?php wp_footer(); ?>
<!--   Core JS Files   -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/core/jquery.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/core/popper.min.js" type="text/javascript"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/core/bootstrap.min.js" type="text/javascript"></script>
<!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/bootstrap-switch.js"></script>
<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
<!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Control Center for Now Ui Kit: parallax effects, scripts for the example pages etc -->
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/now-ui-kit.js?v=1.3.0" type="text/javascript"></script>

<?php if(is_front_page() || is_home()): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.4.2/gsap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/main.js"></script>
<?php elseif(is_single()): ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/single.js"></script>
<?php endif; ?>
<script></script>

</body>
</html>
