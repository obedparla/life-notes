<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package life-notes
 */

?>
            <?php if(!is_single()){?>
                </div><!-- #content-wrap -->
            <?php }?>
	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
            <?php get_sidebar( 'footer' ); ?>
		<div class="site-info">      
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'life-notes' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'life-notes' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'life-notes' ), 'Life Notes', '<a href="https://twitter.com/ObedParla" rel="designer">Obed M\' Parlapiano</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
