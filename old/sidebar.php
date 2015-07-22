<?php
/**
 * The Sidebar containing the primary and secondary widget areas.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<?php if(is_home())
{?>
<div class="right">
      <h3>Latest News</h3>
	  
	  <?php
 global $cat;
 $recentPosts = new WP_Query();
 $recentPosts->query('showposts=4&cat=6');
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
<div class="news"> <strong>
 <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></strong> <br/>
 <?php echo excerpt(40); ?>
 
 
 </div>
<?php endwhile; ?>

     
    </div>
	<?php } else { ?>
	<div class="latest-news">
          <h3>Latest News</h3>
		   <?php
 global $cat;
 $recentPosts = new WP_Query();
 $recentPosts->query('showposts=3&cat=6');
 

while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>

          <p><strong>
 <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></strong> <br/>
 <?php //the_content(  ); ?><?php echo excerpt(40); ?></p><?php endwhile; ?>
        </div>
	<div class="inneradd"></div>
      </div>
		<?php }?>