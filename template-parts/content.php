<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package life-notes
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <header class="entry-header">
        <?php
        if ('post' === get_post_type()) {
            if (is_single()) { ?>
                <div class="single-entry-meta">
                    <?php life_notes_index_posted_on(); ?>
                </div><!-- .entry-meta -->
                <?php
            }
        }

        if (is_single()) {
            the_title('<h1 class="entry-title">', '</h1>');

        } else {
            if (has_post_thumbnail()) { ?>
                <figure class="featured-image-index">
                    <a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
                        <?php the_post_thumbnail("index-thumb3"); ?>
                    </a>
                </figure>
            <?php }
            the_title('<h2 class="entry-title  index-excerpt"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
        }

        if (has_post_thumbnail() && is_single()) {
            echo '<div class="featured-image-single-post clear">';
            echo the_post_thumbnail('full');
            echo '</div>';
        }

        if ('post' === get_post_type()) {
            if (!is_single()) { ?>
                <div class="index-entry-meta">
                    <?php life_notes_index_posted_on(); ?>
                </div><!-- .entry-meta -->
                <?php
            }
        } ?>
    </header><!-- .entry-header -->

    <?php if (is_single()) { ?>
        <div class="entry-content">
            <?php
            the_content(sprintf(
            /* translators: %s: Name of current post. */
                wp_kses(__('Continue reading %s <span class="meta-nav">&rarr;</span>', 'life-notes'), array('span' => array('class' => array()))),
                the_title('<span class="screen-reader-text">"', '"</span>', false)
            ));

            wp_link_pages(array(
                'before' => '<div class="page-links">' . esc_html__('Pages:', 'life-notes'),
                'after' => '</div>',
            ));
            ?>
        </div><!-- .entry-content -->
    <?php } else { ?>
        <div class="entry-content index-excerpt">
            <?php
            the_excerpt();
            ?>
        </div><!-- .entry-content -->

        <div class="continue-reading">
            <a href="<?php echo esc_url(get_permalink()); ?>" rel="bookmark">
                <?php
                printf(
                    wp_kses(__('Continue reading %s', 'life-notes'), array('span' => array('class' => array()))),
                    the_title('<span class="screen-reader-text">"', '"</span>', false)
                );
                ?>
            </a>
        </div>
    <?php } ?>

    <footer class="entry-footer">
        <?php life_notes_entry_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-## -->
