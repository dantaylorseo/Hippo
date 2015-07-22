<?php
/**
 * The template for displaying Category Archive pages.
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
        <h3>You are here: <a href="index.php">Home </a>&gt; News Archive</h3>
        <div class="clr"></div>
        <h1 id="banner">News Archive</h1>
	<div class="getquuote"><a href="/test/contact-us"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/getaquote.png" width="181" height="41" alt="Get a quote today" /></a></div>
      </div>
    </div>
    <div class="content">
      <div class="left">
         <div class="content">
      <div class="left">
      <div class="latest-news">

        <h1>Recent Posts</h1>
<ul class="recent" style="margin-top:10px"><?php $recentPosts = new WP_Query();  $recentPosts->query('showposts=5&cat=6'); ?> 
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>  
<li class="recent"><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></li> 
<?php endwhile; ?> 
</ul> 
<br/>
<br/>
<h4>Archives</h4>
<ul class="recent">
<?php wp_get_archives('type=monthly&cat=6'); ?>
</ul>	
<br/>	
</div>
</div>       
	   
	   
	    <div class="inner-right">
       
				<?php
					$category_description = category_description();
					/*if ( ! empty( $category_description ) )
						echo '<div class="archive-meta">' . $category_description . '</div>';*/

				/* Run the loop for the category page to output the posts.
				 * If you want to overload this in a child theme then include a file
				 * called loop-category.php and that will be used instead.
				 */
				get_template_part( 'loop', 'category' );
				?>
</div>
<?php get_footer(); ?>
