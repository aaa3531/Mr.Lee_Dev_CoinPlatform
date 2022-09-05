<?php

get_header();

$is_page_builder_used = et_pb_is_pagebuilder_used( get_the_ID() );

?>

<div id="main-content" class="crypto">
    <div class="container">
	    <h1 class="entry-title main_title"><?php the_title(); ?></h1>
        <?php echo do_shortcode('[ccpw id="678"]');?>
	</div> <!-- .container -->


<?php if ( ! $is_page_builder_used ) : ?>

	<div class="container">
	    <h1 class="entry-title main_title"><?php the_title(); ?></h1>
        <?php echo do_shortcode('[ccpw id="678"]');?>
	</div> <!-- .container -->

<?php endif; ?>

</div> <!-- #main-content -->

<?php

get_footer();
