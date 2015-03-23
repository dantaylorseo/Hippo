<?php get_header(); ?>
<div id="main" class="container-fluid">
    <div id="main_inner" class="container">
        <div class="row">
            <div id="content" class="col-md-24">
                <?php if( have_posts() ) { ?>
                <?php while( have_posts() ) { ?>
                <?php the_post(); ?>
                <h1><?php the_post_thumbnail( 'custom-small' ); ?> <?php the_title(); ?></h1>
                <?php the_content(); ?>
                <?php } ?>
                <?php } ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer() ;?>