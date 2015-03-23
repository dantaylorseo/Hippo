<?php
/*
Template Name: Contact Template
*/
?>
<?php get_header(); ?>
<div id="main" class="container-fluid">
    <div id="main_inner" class="container">
        <div class="row">
            <div id="content" class="col-md-24">
                <?php if( have_posts() ) { ?>
                <?php while( have_posts() ) { ?>
                <h1><?php the_post_thumbnail( 'custom-small' ); ?> <?php the_title(); ?></h1>
                <?php the_post(); ?>
                <?php the_content(); ?>
                <?php } ?>
                <?php } ?>
                
                <div class="row">
                	<div class="col-md-16">
                    	<form class="contact_form" action="<?php echo admin_url('admin-post.php'); ?>" method="post">
                        	<h3>Get in Touch</h3>
                        	<div class="input-group">
                              <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-user fa-lg"></i></span>
                              <input type="text" class="form-control" name="name" placeholder="Name" aria-describedby="sizing-addon1">
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-building fa-lg"></i></span>
                              <input type="text" class="form-control" name="company" placeholder="Company" aria-describedby="sizing-addon1">
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-phone-square fa-lg"></i></span>
                              <input type="tel" class="form-control" name="phone" placeholder="Phone" aria-describedby="sizing-addon1">
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-envelope-o fa-lg"></i></span>
                              <input type="email" class="form-control" name="email" placeholder="Email" aria-describedby="sizing-addon1">
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-sitemap fa-lg"></i></span>
                              <input type="text" class="form-control" name="interest" placeholder="Area of Interest" aria-describedby="sizing-addon1">
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon1"><i class="fa fa-comment fa-lg"></i></span>
                              <textarea rows="3" class="form-control" name="message" placeholder="Message"></textarea>
                            </div>
                            <button class="btn btn-primary pull-right" type="submit">Submit</button>
                            <div class="row"></div>
                            <input type="hidden" name="action"  value="contact_form_submit">
	  						<?php wp_nonce_field( 'contact_form_submit', '_wpnonce', true ); ?>
                        </form>
                    </div>
                    <div class="col-md-7 col-md-offset-1 contact_right">
                    
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php get_footer() ;?>