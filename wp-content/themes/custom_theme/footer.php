<div id="footer" class="container-fluid">
        <div id="footer_inner" class="container">
        	<div class="row">
            	<div class="col-md-6">
                <h2>Services</h2>
                	<?php if ( function_exists('wp_nav_menu') ) { wp_nav_menu( array(
							'menu'              => 'foot1',
							'theme_location'    => 'foot1',
							'container'         => 'div',
							'container_class'   => 'foot-nav',
							)
						); } 
					?>
                </div>
                <div class="col-md-6">
                	<h2>Case Studies</h2>
                	<?php if ( function_exists('wp_nav_menu') ) { wp_nav_menu( array(
							'menu'              => 'foot2',
							'theme_location'    => 'foot2',
							'container'         => 'div',
							'container_class'   => 'foot-nav',
							)
						); } 
					?>
                </div>
                <div class="col-md-6">
                	<h2>About</h2>
                	<?php if ( function_exists('wp_nav_menu') ) { wp_nav_menu( array(
							'menu'              => 'foot3',
							'theme_location'    => 'foot3',
							'container'         => 'div',
							'container_class'   => 'foot-nav',
							)
						); } 
					?>
                </div>
                <div class="col-md-6">
                	<h2>Contact</h2>
                	<?php if ( function_exists('wp_nav_menu') ) { wp_nav_menu( array(
							'menu'              => 'foot4',
							'theme_location'    => 'foot4',
							'container'         => 'div',
							'container_class'   => 'foot-nav',
							)
						); } 
					?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <p>&copy; 2015 HIPPOWASTE. Call us today on 0345 850 0850</p>
                </div>
                <div class="col-md-12 pull-right">
                    <a href="/terms-conditions/">Terms &amp; Conditions</a> <a href="/privacy-policy/">Privacy Policy</a> <a href="/contact-us/">Contact Us</a>
                </div>
            </div>
            <hr>
            <p><img src="<?php  echo esc_url( get_stylesheet_directory_uri() ) ; ?>/img/logo-sm.png"></p>
            <p>Registered address: Templars House, Lulworth Close, Chandlers Ford, Hampshire, SO53 3TL Contact address: 1000 Lakeside, North Harbour, Portsmouth, Hampshire PO6 3EN. HIPPO, HIPPOBAG and HIPPOWASTE are registered Trademarks of Waste Management Systems Ltd. Registered in England under N4418836.</p>
        </div>
    </div>
<?php wp_footer(); ?>
</body>
</html>