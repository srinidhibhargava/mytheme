	<footer class="site-footer">
		
		<!-- footer-widgets -->
		<div class="footer-widgets clearfix">
			
			<?php if (is_active_sidebar('footer1')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer1'); ?>
				</div>

			<?php endif; ?>
			
			<?php if (is_active_sidebar('footer2')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer2'); ?>
				</div>

			<?php endif; ?>
			
			<?php if (is_active_sidebar('footer3')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer3'); ?>
				</div>

			<?php endif; ?>
			
			<?php if (is_active_sidebar('footer4')) : ?>
				
				<div class="footer-widget-area">
					<?php dynamic_sidebar('footer4'); ?>
				</div>

			<?php endif; ?>
			
		</div><!-- /footer-widgets -->
		
		<nav class="site-nav">
			<?php
			
			$args = array(
				'theme_location' => 'footer'
			);
			
			?>
			
			<?php wp_nav_menu(  $args ); ?>
		</nav>
		
		<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y');?></p>
	
	</footer>

</div><!-- container -->

<?php wp_footer(); ?>
    <!-- jQuery -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/classie.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/cbpAnimatedHeader.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/js/jqBootstrapValidation.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/contact_me.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php bloginfo('template_url'); ?>/js/agency.js"></script>

</body>
</html>