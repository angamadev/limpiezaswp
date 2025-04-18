<?php
/**
 * Template Name: Home Template
 */

get_header(); ?>

<?php
  $smart_cleaning_year  = get_the_time('Y');
  $smart_cleaning_month = get_the_time('m');
  $smart_cleaning_day   = get_the_time('d');
?>

<main id="skip-content">
  <section id="top-slider" slider-loop="<?php echo esc_html(get_theme_mod('smart_cleaning_slider_loop')); ?>">
   <?php if(get_theme_mod('smart_cleaning_blog_slider_setting') != ''){ ?>
    <?php $smart_cleaning_slide_pages = array();
      for ( $smart_cleaning_count = 1; $smart_cleaning_count <= 3; $smart_cleaning_count++ ) {
        $smart_cleaning_mod = intval( get_theme_mod( 'smart_cleaning_top_slider_page' . $smart_cleaning_count ));
        if ( 'page-none-selected' != $smart_cleaning_mod ) {
          $smart_cleaning_slide_pages[] = $smart_cleaning_mod;
        }
      }
      if( !empty($smart_cleaning_slide_pages) ) :
        $smart_cleaning_args = array(
          'post_type' => 'page',
          'post__in' => $smart_cleaning_slide_pages,
          'orderby' => 'post__in'
        );
        $smart_cleaning_query = new WP_Query( $smart_cleaning_args );
        if ( $smart_cleaning_query->have_posts() ) :
          $i = 1;
    ?>
    <div class="owl-carousel" role="listbox">
      <?php  while ( $smart_cleaning_query->have_posts() ) : $smart_cleaning_query->the_post(); ?>
        <div class="slider-box">
          <?php if(has_post_thumbnail()){
            the_post_thumbnail();
            } else{?>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/img/slider.png" alt="" />
          <?php } ?>
          <div class="slider-inner-box">
            <?php if(get_theme_mod('smart_cleaning_slider_title_setting',1) == 1){ ?>
              <h2><?php the_title(); ?></h2>
            <?php }?>
            <?php if(get_theme_mod('smart_cleaning_slider_content_setting',1) == 1){ ?>
              <p><?php $smart_cleaning_excerpt = get_the_excerpt(); echo esc_html( smart_cleaning_string_limit_words( $smart_cleaning_excerpt, esc_attr(get_theme_mod('smart_cleaning_slider_excerpt_length', 10)) )); ?></p>
            <?php }?>
            <?php if(get_theme_mod('smart_cleaning_slider_button_setting',1) == 1 && get_theme_mod('smart_cleaning_slider_button_text','Learn More') != ''){ ?>
              <div class="slide-btn my-4"><a href="<?php the_permalink(); ?>"><?php esc_html_e('Book Online','smart-cleaning'); ?></a></div>
            <?php }?>
            <?php if(get_theme_mod('smart_cleaning_slide_day') != '' || get_theme_mod('smart_cleaning_slide_time') != ''){ ?>
              <div class="timebox">
                <div class="row">
                  <div class="col-lg-2 col-md-2">
                    <i class="fas fa-history"></i>
                  </div>
                  <div class="col-lg-10 col-md-10">
                    <p class="mb-0"><?php echo esc_html(get_theme_mod('smart_cleaning_slide_day','')); ?></p>
                    <p class="mb-0"><?php echo esc_html(get_theme_mod('smart_cleaning_slide_time','')); ?></p>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
      <?php $i++; endwhile;
      wp_reset_postdata();?>
    </div>
    <?php else : ?>
      <div class="no-postfound"></div>
    <?php endif;
    endif;?>
  <?php }?>
 </section>

<?php if(get_theme_mod('smart_cleaning_blog_service_setting') != ''){ ?>
  <section id="featured-topic" class="py-5">
    <div class="container">
      <h3 class="mb-5 text-center "><?php echo esc_html(get_theme_mod('smart_cleaning_featured_category_title','')); ?></h3>
      <div class="row">
        <?php
          $smart_cleaning_featured_cat1 = get_theme_mod('smart_cleaning_featured_category_1','');
          if($smart_cleaning_featured_cat1){
            $smart_cleaning_page_query4 = new WP_Query(array( 'category_name' => esc_html($smart_cleaning_featured_cat1,'smart-cleaning')));
            while( $smart_cleaning_page_query4->have_posts() ) : $smart_cleaning_page_query4->the_post(); ?>
              <div class="col-lg-4 col-md-6">
                <div class="featured-imagebox text-center mb-5">
                  <?php the_post_thumbnail(); ?>
                  <h4 class="mt-2"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                  <p><?php $smart_cleaning_excerpt = get_the_excerpt(); echo esc_html( smart_cleaning_string_limit_words( $smart_cleaning_excerpt, 10 )); ?></p>
                  <div class="servbtn">
                    <a href="<?php the_permalink(); ?>"><?php esc_html_e('Read More','smart-cleaning'); ?></a>
                  </div>
                </div>
              </div>
            <?php endwhile;
          wp_reset_postdata();
        } ?>
      </div>
    </div>
  </section>
  <?php }?>

  <section id="content-section" class="container">
    <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();
          the_content();
        endwhile;
      endif;
    ?>
  </section>
</main>

<?php get_footer(); ?>
