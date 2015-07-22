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
      <div class="left"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/inner-designimg.jpg" width="157" height="132" alt="Hippowaste]" /></div>
      <div class="right">
        <h3>You are here: <a href="index.php">Home &gt;</a><?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				
					<?php if ( is_front_page() ) { ?>
						<?php the_title(); ?>
					<?php } else { ?>
						<?php the_title(); ?>
					<?php } ?>

					

<?php endwhile; // end of the loop. ?></h3>
        <div class="clr"></div>
	<h1 id="banner">Recent News</h1>
					       
        <div class="getquuote"><a href="contact-us"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/getaquote.png" width="181" height="41" alt="Get a quote today" /></a></div>
      </div>
    </div>
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
     
       <?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

				
				
					<h1><?php the_title(); ?></h1>

					
						<?php //twentyten_posted_on(); ?>
					

					
						<p><?php the_content(); ?></p>
						<?php //wp_link_pages( array( 'before' => '<div class="page-link">' . __( 'Pages:', 'twentyten' ), 'after' => '</div>' ) ); ?>
					

<?php if ( get_the_author_meta( 'description' ) ) : // If a user has filled out their description, show a bio on their entries  ?>
					
							<?php echo get_avatar( get_the_author_meta( 'user_email' ), apply_filters( 'twentyten_author_bio_avatar_size', 60 ) ); ?>
						
						
							<h2><?php printf( esc_attr__( 'About %s', 'twentyten' ), get_the_author() ); ?></h2>
							<?php the_author_meta( 'description' ); ?>
							
								<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>" rel="author">
									<?php printf( __( 'View all posts by %s <span class="meta-nav">&rarr;</span>', 'twentyten' ), get_the_author() ); ?>
								</a>
							
<?php endif; ?>

					
						<?php //twentyten_posted_in(); ?>
						<?php //edit_post_link( __( 'Edit', 'twentyten' ), '<span class="edit-link">', '</span>' ); ?>
					
				

				<?php //comments_template( '', true ); ?>

<?php endwhile; // end of the loop. ?>
 
 
			<?php
			/* Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			//get_template_part( 'loop', 'page' );
			?>
 
  


</div>