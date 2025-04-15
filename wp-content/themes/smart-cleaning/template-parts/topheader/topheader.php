<?php
/**
 * Displays top header
 *
 * @package Smart Cleaning
 */
?>

<?php if(get_theme_mod('smart_cleaning_blog_topbar_setting') != ''){ ?>
<div class="top-info py-3">
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-4 align-self-center">
		        <?php $smart_cleaning_blog_info = get_bloginfo( 'name' ); ?>
	                <?php
	                    $smart_cleaning_description = get_bloginfo( 'description', 'display' );
	                    if ( $smart_cleaning_description || is_customize_preview() ) :
	                ?>
	                <?php if( get_theme_mod('smart_cleaning_theme_description',false) != ''){ ?>
	                   <p class="site-description mb-0 text-center text-md-start"><?php echo esc_html($smart_cleaning_description); ?></p>
	            	<?php }?>
	            <?php endif; ?>
			</div>
			<div class="col-lg-4 col-md-4 align-self-center">
				<div class="text-center">
					<?php if(get_theme_mod('smart_cleaning_topbar_email') != ''){ ?>
		            	<p class="mb-0"><i class="<?php echo esc_html( get_theme_mod('smart_cleaning_topbar_email_icon') ); ?>"></i> <span><?php esc_html_e('Email','smart-cleaning');?></span> : <a href="mailto:<?php echo esc_html(get_theme_mod('smart_cleaning_topbar_email','')); ?>"><?php echo esc_html(get_theme_mod('smart_cleaning_topbar_email','')); ?></a></p>
			        <?php }?>
			    </div>
			</div>
			<div class="col-lg-4 col-md-4 align-self-center">
				<div class="text-center text-md-end">
					<?php if(get_theme_mod('smart_cleaning_topbar_link1') != '' || get_theme_mod('smart_cleaning_topbar_text1') != ''){ ?>
			            <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_topbar_link1','')); ?>"><?php echo esc_html(get_theme_mod('smart_cleaning_topbar_text1','')); ?></a><span> / </span>
			        <?php }?>
			        <?php if(get_theme_mod('smart_cleaning_topbar_link2') != '' || get_theme_mod('smart_cleaning_topbar_text2') != ''){ ?>
			            <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_topbar_link2','')); ?>"><?php echo esc_html(get_theme_mod('smart_cleaning_topbar_text2','')); ?></a><span> / </span>
			        <?php }?>
			        <?php if(get_theme_mod('smart_cleaning_topbar_link3') != '' || get_theme_mod('smart_cleaning_topbar_text3') != ''){ ?>
			            <a href="<?php echo esc_url(get_theme_mod('smart_cleaning_topbar_link3','')); ?>"><?php echo esc_html(get_theme_mod('smart_cleaning_topbar_text3','')); ?></a>
			        <?php }?>
			    </div>
			</div>
		</div>
	</div>
</div>
<?php }?>
