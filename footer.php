<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Materialized
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'materialized' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'materialized' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( __( 'Theme: %1$s by %2$s.', 'materialized' ), 'Materialized', '<a href="https://github.com/victorperin/Materialized" rel="designer">Victor Perin</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/jquery/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/materialize/js/materialize.min.js"></script>
</body>
</html>
