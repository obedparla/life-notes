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
			Theme: <a href="https://github.com/obedparla/life-notes" rel="theme">Life Notes</a> by
			<a href="https://twitter.com/ObedParla" rel="designer">Obed Marquez Parlapiano</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>



</body>
</html>
