<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title(); ?></title>
    <?php wp_head(); ?>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <meta name="google-site-verification" content="GQTA4LXuTWBDwz7_kmUP_ntBO21kHO5EflFpBFLH7_M" />


</head>

<body <?php body_class(); ?>>
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
    <div id="header" class="container-fluid">
        <div id="header_inner" class="container">
            <div class="row">
            	<div class="col-md-6">
                	<a href="/"><img src="<?php  echo esc_url( get_stylesheet_directory_uri() ); ?>/img/logo.png"></a>
                </div>
                <div class="col-md-13 pull-right">
                	<div class="row">
                    	<div class="col-md-12 tel">
                			<i class="fa fa-phone"></i> 0345 850 0850
						</div>
						<div class="col-md-12">
							<?php get_search_form( ); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="navbar" class="container-fluid navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <?php if ( function_exists('wp_nav_menu') ) { wp_nav_menu( array(
                'menu'              => 'primary',
                'theme_location'    => 'primary',
                'container'         => 'div',
                'container_class'   => 'collapse navbar-collapse main-nav',
        		'container_id'      => 'main-nav',
                'menu_class'        => 'nav navbar-nav',
                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
                'walker'            => new wp_bootstrap_navwalker()
				)
            ); } ?>
            <!--<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="#">Home</a></li>
                    <li><a href="/about/">About</a></li>
                    <li><a href="/how-to-enter/">How to Enter</a></li>
                    <li><a href="/judges/">Judges</a></li>
                </ul>-->
            </div>
        </div>
    </div>