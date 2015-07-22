<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<title>

<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?>
</title>
<?php if ( is_date()) {?>
<META NAME="robots" CONTENT="noindex, follow"> 
<?php }?>

<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<link href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src=" <?php bloginfo('stylesheet_directory'); ?>/js/cufon-yui.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/Arial_400.font.js" ></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/frontend.js"></script>
<script type="text/javascript" src="<?php bloginfo('stylesheet_directory'); ?>/js/jquery_004.js"></script>
<script>
	Cufon.replace('.text-content h3, #banner, .banner h3', { fontFamily: 'Arial' });
</script>
<script src="<?php bloginfo ('template_url');?>/js/jquery-1.4.4.min.js"></script>
<script src="<?php bloginfo ('template_url');?>/js/slides.min.jquery.js"></script>
<script>
		$(function(){			
			var startSlide = 1;			
			if (window.location.hash) {
				startSlide = window.location.hash.replace('#','');
			}			
			$('#slides').slides({
				preload: true,
				preloadImage: '<?php bloginfo ('template_url');?>/img/loading.gif',
				generatePagination: true,
				play: 5000,
				pause: 5000,
				hoverPause: true,				
				start: startSlide,
				animationComplete: function(current){				
					window.location.hash = '#' + current;
				}
			});
		});
	</script>
<link href="<?php bloginfo ('template_url');?>/css/slide.css" rel="stylesheet" type="text/css" />
<meta name="google-site-verification" content="GQTA4LXuTWBDwz7_kmUP_ntBO21kHO5EflFpBFLH7_M" />
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-11299902-2']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>
<body >
<div class="wrapper">
<!--header start-->
<div class="header">
  <div class="logo"><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/logo.png" width="186" height="105" alt="Logo" /></a></div>
  <div class="header-right">
    <div class="top-section">
      <div class="search">
        <form role="search" method="get" id="searchform" action="<?php bloginfo('url'); ?>" >
          <p><input type="text" value="<?php echo get_search_query(); ?>" name="s" id="s" class="search-box" /></p>
           <div class="search-icon">
		   <input type="submit" id="searchsubmit" value="" onBlur="this.value='';" />
		   </div>
        </form>
        <div class="clr"></div>
      </div>
      <div class="search"><a href="https://secure.hippowaste.co.uk/collection/Login.aspx?ReturnURL=Index.aspx" target="_blank">Sign in </a>&nbsp;<img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" />&nbsp; <a href="https://secure.hippowaste.co.uk/collection/CreateUserAccount.aspx?new=Y&ReturnURL=Index.aspx" target="_blank">Create an account</a> &nbsp; <img src="<?php bloginfo('stylesheet_directory'); ?>/images/arrow.jpg" width="10" height="8" alt="arrow" /> </div>
      <div class="search"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/phone-no.jpg" width="192" height="23" alt="Phone no" /></div>
      <div class="clr"></div>
    </div>
    <div class="navigation">
      <ul>
        <li><a href="/"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/home-icon.jpg" width="23" height="20" alt="Home" /></a></li>
        <li><a href="<?php echo get_page_link('544'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/services.jpg" width="123" height="20" alt="Waste Services" /></a></li>
        <li><a href="<?php echo get_page_link('324'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/collection.jpg" width="144" height="20" alt="Book a Collection" /></a></li>
        <li><a href="<?php echo get_page_link('1075'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/case-studies.jpg" width="102" height="20" alt="Case studies" /></a></li>
        <li><a href="<?php echo get_page_link('543'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/aboutus.jpg" width="73" height="20" alt="About Us" /></a></li>
        <li style="border:none;"><a href="<?php echo get_page_link('49'); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/contactus.jpg" width="92" height="20" alt="contact us" /></a></li>
      </ul>
      <?php //wp_nav_menu( array('theme_location' => 'primary') ); ?>
    </div>
  </div>
</div>
<!--header end-->
<!--Slider start-->
<?php if(is_home()) {?>
<?php /*?><div class="slider">
    <div class="text-content">
				<?php 
				$args = array(
						'cat' => 3,
						'posts_per_page' => 5
					);
	   			  $query = new WP_Query( $args);
				  $queryObject = new WP_Query($query);
			?>
			<?php if ($queryObject->have_posts()){
					while ($queryObject->have_posts()) {
					$queryObject->the_post(); ?>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" ><?php the_title(); ?></a></h1>
					 <?php the_content(); 
					 $img_url = get_post_meta($post->ID, "slider_thumbnail", true); ?>
      <div class="cantrols"><img src="<?php bloginfo('stylesheet_directory'); ?>/images/cantrols.png" width="84" height="13" alt="cantrols" /></div>
    </div>
	<img src="<?php echo $img_url;?>" alt="custome image" title="Image_<?php echo $post->post_name;?>" width="522" height="350"/>

<?php }
	} ?>
	</div><?php */?>
	
<div id="outer_slide">
  <div id="slides">
    <div class="slides_container">
      <?php $args = array(
						'cat' => '3',
						'posts_per_page' =>'5'
					);
	   			  //$query = new WP_Query( $args);
				  $queryObject = new WP_Query($args);
			?>
      <?php if ($queryObject->have_posts()){
					while ($queryObject->have_posts()) {
					$queryObject->the_post();
			 ?>
      <div class="slide">
        <div class="text-content">
          <?php the_content(); ?>
        </div>
        <div class="right-image">
          <?php $img_url = get_post_meta($post->ID, "slider_thumbnail", true); ?>
          <img src="<?php echo $img_url;?>" alt="custome image" title="Image_<?php echo $post->post_name;?>" width="464" height="300"/> </div>
      </div>
      <?php }
		   } ?>
    </div>
  </div>
</div>
<?php } ?>