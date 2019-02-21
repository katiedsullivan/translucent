	</div><!-- container-fluid -->
	<footer class="site-footer">

		<div class="footer-menu">
		<?php wp_nav_menu( array(
						    'theme_location' => 'footer-menu'
						) ); ?>
		</div>

	<p><?php bloginfo('name'); ?> - &copy; <?php echo date('Y'); ?></p>

	</footer>

<?php wp_footer(); ?>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>