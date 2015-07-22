<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

<div class="inner-content">
    <div class="banner">
      <div class="left"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/inner-designimg.jpg" width="157" height="132" alt="Hippowaste" /></div>
      <div class="right">
        <h3>You are here: <a href="index.php">Home </a>&gt; Sorry, the page is gone.</h3>
        <div class="clr"></div>
       <h1 id="banner">Sorry.</h1>
	<div class="getquuote"><a href="contact-us"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/getaquote.png" width="181" height="41" alt="Get a quote today" /></a></div>
      </div>
    </div>
    <div class="content">
      <div class="left">
             <?php get_sidebar(); ?>
       <div class="inner-right">
				<h1 class="entry-title"><?php _e( 'Page Missing', 'twentyten' ); ?></h1>
				
					<p><?php _e( 'Apologies, but the page you requested could not be found, This might be due to the recent site redesign.<br/><br/>', 'twentyten' ); ?></p>
					<?php get_search_form(); ?>
<br/><p>Or please return to our <a href="/">homepage.</a></p>
			
	<script type="text/javascript">
		// focus on search field after it has loaded
		document.getElementById('s') && document.getElementById('s').focus();
	</script>

</div>


<?php get_footer(); ?>
