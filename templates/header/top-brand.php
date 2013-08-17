<?php 

if ( agnosia_evaluate('header_top_navbar_show_brand') 
	or ( agnosia_evaluate( 'content_hide_branding_not_frontpage' ) and !is_front_page() )
) : 

?>

	<div id="top-brand-container" class="<?php agnosia_top_brand_container_class(); ?>">

		<section class="brand">
			<h1><a href="<?php agnosia_home_url(); ?>/"><?php bloginfo('name'); ?></a></h1>
		</section>

	</div>

<?php endif; ?>