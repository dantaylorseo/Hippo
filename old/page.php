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
        <h3>You are here: <a href="index.php">Home &gt;</a><?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				
					<?php if ( is_front_page() ) { ?>
						<?php the_title(); ?>
					<?php } else { ?>
						<?php the_title(); ?>
					<?php } ?>

					

<?php endwhile; // end of the loop. ?></h3>
        <div class="clr"></div>
       <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				
					<?php if ( is_front_page() ) { ?>
						<p id="banner"><?php the_title(); ?></p>
					<?php } else { ?>
						<h1 id="banner"><?php the_title(); ?></h1>
					<?php } ?>

					

<?php endwhile; // end of the loop. ?>
        <div class="getquuote"><a href="<?php echo get_page_link('49'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/getaquote.png" width="181" height="41" alt="Get a quote today" /></a></div>
      </div>
    </div>
    <div class="content">
    <div class="left">

 
<?php

$has_subpages = false;
// Check to see if the current page has any subpages
$children = wp_list_pages('&child_of='.$post->ID.'&echo=0');
if($children) {
    $has_subpages = true;
}
// Reseting $children
$children = "";

// Fetching the right thing depending on if we're on a subpage or on a parent page (that has subpages)
if(is_page() && $post->post_parent) {
    // This is a subpage
    // $children = wp_list_pages("title_li=&include=".$post->post_parent ."&echo=0");
    $children .= wp_list_pages("title_li=&child_of=".$post->post_parent ."&echo=0");
} else if($has_subpages) {
    // This is a parent page that have subpages
    // $children = wp_list_pages("title_li=&include=".$post->ID ."&echo=0"); 
  
    $children .= wp_list_pages("title_li=&child_of=".$post->ID."&echo=0&".$post->post_parent."=".$post->ID);
}

	if($has_subpages)
	{
?>
<h4 class="parent_title">
<?php

		if($post->post_parent) 
		{
			$parent_title = get_the_title($post->post_parent);
			echo trim($parent_title); 
		} 
		else 
		{
			wp_title('');
		}
	}
	else
	{
		//$parent_title="";
	}
?>
</h4>
<?php // Check to see if we have anything to output ?>
<?php if ($children) { ?><div class="links" style="border-bottom-color: #CED7DB; border-bottom-style: solid;border-bottom-width: 1px;">
<ul >
    <?php echo $children; ?>
</ul></div>
<?php } ?>

       
	  
     
        <?php get_sidebar(); ?>
       
     
       
 
 
			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
 
  



		




<?php get_footer(); ?>
