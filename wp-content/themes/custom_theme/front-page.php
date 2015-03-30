<?php get_header(); ?>
<div id="main" class="container-fluid">
    <div id="main_inner" class="container">
        <div class="row">
            <div id="form" class="col-md-24">
                <?php if( have_posts() ) { ?>
					<?php while( have_posts() ) { ?>
						<?php the_post(); ?>
                        <?php the_content(); ?>
                    <?php } ?>
                <?php } ?>
                <div class="row">
                	<div class="col-md-16">
                    	<img src="<?php  echo esc_url( get_stylesheet_directory_uri() ) ; ?>/img/home.jpg" class="img-responsive" width="800" height="340">
                    </div>
                    <div class="col-md-8">
                    	<?php if ( function_exists('wp_nav_menu') ) { wp_nav_menu( array(
								'menu'              => 'home',
								'theme_location'    => 'home',
								'container'         => 'div',
								'container_id'      => 'home-nav',
								)
							); } 
						?>
                    </div>
                </div>
                <div class="row">
                	<div class="col-md-8 homebox">
                    	<div>
                        	<h2>HIPPOWASTE Services</h2>
                        	<p><a href="/services/">Read More &raquo;</a></p>
                        </div>
                        <img src="<?php  echo esc_url( get_stylesheet_directory_uri() ) ; ?>/img/home-services.png" class="img-responsive" width="400" height="255">
                    </div>
                    <div class="col-md-8 homebox">
                    	<div>
                        	<h2>Companies We Work With</h2>
                        	<p><a href="/case-studies/companies-we-work-with/">Read More &raquo;</a></p>
                        </div>
                        <img src="<?php  echo esc_url( get_stylesheet_directory_uri() ) ; ?>/img/home-1.png" class="img-responsive" width="400" height="255">
                    </div>
                    <div class="col-md-8 homebox">
                    	<div>
                        	<h2>HIPPO</h2>
                        	<p><a href="/about/">Waste Management Services &raquo;</a></p>
                        </div>
                        <img src="<?php  echo esc_url( get_stylesheet_directory_uri() ) ; ?>/img/home-hippo.png" class="img-responsive" width="400" height="255">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ;?>