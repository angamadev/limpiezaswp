<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Smart Cleaning
 */
?>

<div class="<?php if(get_theme_mod('smart_cleaning_blog_post_columns','Two') == 'Two'){?>col-lg-6 col-md-6<?php } elseif(get_theme_mod('smart_cleaning_blog_post_columns','Two') == 'Three'){?>col-lg-4 col-md-6<?php }?>">
	<article id="post-<?php the_ID(); ?>" <?php post_class('article-box'); ?>>
		<header class="entry-header">
			<?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>
		</header>

		<?php smart_cleaning_post_thumbnail(); ?>

		<div class="entry-summary">
			<p><?php echo wp_trim_words( get_the_content(), esc_attr(get_theme_mod('smart_cleaning_post_page_excerpt_length', 30)) ); ?><?php echo esc_html(get_theme_mod('smart_cleaning_post_page_excerpt_suffix','[...]')); ?></p>
		</div>
		<footer class="entry-footer">
			<?php smart_cleaning_entry_footer(); ?>
		</footer>
	</article>
</div>