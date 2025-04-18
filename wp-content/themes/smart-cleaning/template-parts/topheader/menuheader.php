<?php
/**
 * Displays Menu header
 *
 * @package Smart Cleaning
 */

$smart_cleaning_sticky_header = get_theme_mod('smart_cleaning_sticky_header');
    $data_sticky = "false";
    if ($smart_cleaning_sticky_header) {
        $data_sticky = "true";
 }
?>

<div class="menu-header" data-sticky="<?php echo esc_attr($data_sticky); ?>">
	<div class="container">
        <div class="row">
        	<div class="col-lg-8 col-md-6 col-3 align-self-center">        		
            	<?php get_template_part('template-parts/navigation/navigation', 'top'); ?>
        	</div>        	
        	<div class="col-lg-4 col-md-6 col-9 align-self-center">
        		<div class="serach_inner my-2">
                    <?php get_search_form(); ?>
                </div>
        	</div>
        </div>            
	</div>
</div>