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
                <?php the_post(); ?>
                <?php the_content(); ?>
                <?php } ?>
                <?php } ?>
                
                <div class="row">
                	<div class="col-md-18">
                    	<form>
                        	<div class="input-group">
                              <span class="input-group-addon" id="sizing-addon1">@</span>
                              <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon1">@</span>
                              <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon1">@</span>
                              <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon1">@</span>
                              <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon1">@</span>
                              <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                            </div>
                            <div class="input-group">
                              <span class="input-group-addon" id="sizing-addon1">@</span>
                              <input type="text" class="form-control" placeholder="Username" aria-describedby="sizing-addon1">
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6"></div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<?php get_footer() ;?>