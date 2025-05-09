<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Smart Cleaning
 */

$smart_cleaning_post_page_title =  get_theme_mod( 'smart_cleaning_post_page_title', 1 );
$smart_cleaning_post_page_thumb =  get_theme_mod( 'smart_cleaning_post_page_thumb', 1 );
$smart_cleaning_post_page_cat =  get_theme_mod( 'smart_cleaning_post_page_cat', 1 );
$smart_cleaning_post_page_content =  get_theme_mod( 'smart_cleaning_post_page_content', 1 );
?>

<?php
  $content = apply_filters( 'the_content', get_the_content() );
  $video = false;

  // Only get video from the content if a playlist isn't present.
  if ( false === strpos( $content, 'wp-playlist-script' ) ) {
    $video = get_media_embedded_in_content( $content, array( 'video', 'object', 'embed', 'iframe' ) );
  }
?>
<div class="<?php if(get_theme_mod('smart_cleaning_blog_post_columns','Two') == 'Two'){?>col-lg-6 col-md-6<?php } elseif(get_theme_mod('smart_cleaning_blog_post_columns','Two') == 'Three'){?>col-lg-4 col-md-6<?php }?>">
  <article id="post-<?php the_ID(); ?>" <?php post_class('article-box'); ?>>
    <header class="entry-header">
      <?php if ($smart_cleaning_post_page_title == 1 ) {?>
        <?php the_title('<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>');?>
      <?php }?>
    </header>
    <?php
      if ( ! is_single() ) {
        // If not a single post, highlight the video file.
        if ( ! empty( $video ) ) {
          foreach ( $video as $video_html ) {
            echo '<div class="entry-video">';
              echo $video_html;
            echo '</div>';
          }
        };
      };
    ?> 
    <?php if ($smart_cleaning_post_page_content == 1 ) {?>
      <div class="entry-summary">
        <p><?php echo wp_trim_words( get_the_content(), esc_attr(get_theme_mod('smart_cleaning_post_page_excerpt_length', 30)) ); ?><?php echo esc_html(get_theme_mod('smart_cleaning_post_page_excerpt_suffix','[...]')); ?></p>
        <?php
          wp_link_pages(array(
            'before' => '<div class="page-links">' . esc_html__('Pages:', 'smart-cleaning'),
            'after' => '</div>',
          ));
        ?>
      </div>
    <?php }?>
    <?php if ($smart_cleaning_post_page_cat == 1 ) {?>
      <footer class="entry-footer">
        <?php smart_cleaning_entry_footer(); ?>
      </footer>
    <?php }?>
  </article>
</div>