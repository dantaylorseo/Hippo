<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	
	
  <!--Slider end-->
  <!--main content start-->
  <div class="maincontent">
    <div class="left">
	
	 <?php
 global $cat;
 $recentPosts = new WP_Query();
 $recentPosts->query('showposts=2');
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
    <div class="welcome-box">
  <h1><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></h1>
 <p><?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?></p>
 
 
 </div>
<?php endwhile; ?>
	<?php
			/* Run the loop to output the posts.
			 * If you want to overload this in a child theme then include a file
			 * called loop-index.php and that will be used instead.
			 */
	//	get_template_part( 'loop', 'index' );
			?>
   <!-- <div class="welcome-box">
        <h1>Welcome to Hippo Waste</h1>
        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. <br />
          <br />
          Suspendisse urna nibh, viverra non, posuere a, pede. Donec felis facilisis... <a href="#">Read more</a>&nbsp;<img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /></p>
      </div>
      <div class="welcome-box">
        <h1>Nationwide waste management </h1>
        <p><img src="<?php bloginfo('stylesheet_directory'); ?>/images/chk-icon.png" width="14" height="13" alt="chk" class="chkimg" />Nationwide network</p>
        <p><img src="<?php bloginfo('stylesheet_directory'); ?>/images/chk-icon.png" width="14" height="13" alt="chk" class="chkimg" />Competitive pricing</p>
        <p><img src="<?php bloginfo('stylesheet_directory'); ?>/images/chk-icon.png" width="14" height="13" alt="chk" class="chkimg" />90% of waste recycled</p>
        <p><img src="<?php bloginfo('stylesheet_directory'); ?>/images/chk-icon.png" width="14" height="13" alt="chk" class="chkimg" />Save valuable time and space</p>
      </div>-->
      <div class="left-seprator"></div>
      <div class="welcome-box"> <h1>Testimonials</h1>
	  <?php sfstst_onerandom(); ?>
       
       
      </div>
      <div class="welcome-box">
        <h1>Regional services</h1>
        <p class="regional-services">Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis. <br />
          <br />
          For a full list of areas we cover please</p>
        <div class="map"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/map.jpg" width="103" height="164" alt="Map" /></div>
        <div class="clr"></div>
        <div class="video"><a href="#">Watch our video</a></div>
      </div>
    </div>
    <div class="right">
      <h1>Latest News</h1>
	  
	  <?php
 global $cat;
 $recentPosts = new WP_Query();
 $recentPosts->query('showposts=5&cat=3');
?>
<?php while ($recentPosts->have_posts()) : $recentPosts->the_post(); ?>
<div class="news"> <strong>
 <a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></strong> 
 <?php the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'twentyeleven' ) ); ?>
 
 
 </div>
<?php endwhile; ?>

     <!-- <div class="news"> <strong>4 days ago:</strong> Morbi in sem quis dui placerat ornare. Pellentesque odio nisi, euismod in, pharetra a, ultricies in, diam. Sed arcu. Cras consequat. <br />
        <a href="#">Read more</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /> </div>
      <div class="news"> <strong>13 days ago: </strong>Praesent dapibus, neque id cursus faucibus, tortor neque egestas augue, eu vulputate magna eros eu erat. Aliquam erat volutpat. Nam dui misss, tincidunt quis, accumsan porttitor, facilisis luctus, metus.<br />
        <a href="#">Read more</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /> </div>
      <div class="news"> <strong>15 days ago:</strong> Phasellus ultrices nulla quis nibh. Quisque a lectus. Donec consectetuer ligula vulputate sem tristique cursus. Nam nulla quam, gravida non, commodo a, sodales sit amet, nisi.<br />
        <a href="#">Read more</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /> </div>
      <div class="news" style="border:none;"> <strong>21 days ago:</strong> Pellentesque fermentum dolor. Aliquam quam lectus, facilisis auctor, ultrices ut, elementum vulputate, nunc.<br />
        <a href="#">Read more</a> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /> </div>-->
    </div>
    <div class="case-studies"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/commercial.jpg" width="177" height="170" alt="Commercial Waste" /> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/housing.jpg" width="177" height="170" alt="Commercial Waste" /> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/plasterboard.jpg" width="177" height="170" alt="Commercial Waste" /> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/new-building.jpg" width="177" height="170" alt="Commercial Waste" /> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/commercial.jpg" width="177" height="170" alt="Commercial Waste" /> </div>
  </div>
  <!--main content end-->
  <!--scrolling logo start-->
  <div class="logo-scrolling">
    <p><img src="<?php bloginfo('stylesheet_directory'); ?>/images/company-title.jpg" width="252" height="20" /></p>
    <div class="marquee" id="mycrawler2"> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mears.jpg" width="64" height="23" alt="Mears" /> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/enviroco.jpg" width="90" height="22" alt="Enviroco" /> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/wates.jpg" width="68" height="36" alt="Wates" /> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/enviroco.jpg" width="90" height="22" alt="Enviroco" /> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/wates.jpg" width="68" height="36" alt="Wates" /> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mears.jpg" width="64" height="23" alt="Mears" /> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/enviroco.jpg" width="90" height="22" alt="Enviroco" /> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/wates.jpg" width="68" height="36" alt="Wates" /> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/mears.jpg" width="64" height="23" alt="Mears" /> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/enviroco.jpg" width="90" height="22" alt="Enviroco" /> <img src="<?php bloginfo('stylesheet_directory'); ?>/images/wates.jpg" width="68" height="36" alt="Wates" /> </div>
  </div>
  <!--scrolling logo end-->
  
<?php //get_sidebar(); ?>
<?php get_footer(); ?>
