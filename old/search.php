<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pagess by default.
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
      <div class="left"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/inner-designimg.jpg" width="157" height="132" alt="Hippowaste]" /></div>
      <div class="right">
        <h3>You are here: <a href="index.php">Home &gt;</a> <strong>Search</strong>
		
		</h3>

        <div class="clr"></div>
         						<h1 id="banner">Search Results</h1>
										
        <div class="getquuote"><a href="#"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/getaquote.png" width="181" height="41" alt="Get a quote today" /></a></div>
      </div>
    </div>
    <div class="content">
      <div class="left">
                <?php get_sidebar(); ?>
       
	   
	   
	    <div class="inner-right">
     <?php
$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
$s = get_query_var('s');
query_posts("s=$s&cat=-3,-4,-5,7,-1&paged=$page");
?>

<?php if ( have_posts() ) : ?>
				<h1 style=" font-size:18px;"><?php printf( __( 'Search Results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
				
					<h2 class="entry-title"><?php _e( 'Nothing Found', 'twentyten' ); ?></h2>
					
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
						<?php get_search_form(); ?>
					
<?php endif; ?>
			

</div>
		




<?php get_footer(); ?>
