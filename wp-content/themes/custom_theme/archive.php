<?php get_header(); ?>
<div id="main" class="container-fluid">
    <div id="main_inner" class="container">
        <div class="row">
            <div id="form" class="col-md-24">
            	<?php the_archive_title( '<h1 class="page-title">', '</h1>' ); ?>
                <?php if( have_posts() ) { ?>
                <?php while( have_posts() ) { ?>
				<?php the_post(); ?>
                <div class="archive">
                    <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                    <?php the_excerpt(); ?>
                </div>
                <?php } ?>
                <?php } ?>
            </div>
        </div>
        <div class="row">
            <div id="content" class="col-md-24">

            </div>
        </div>
    </div>
</div>
<?php get_footer() ;?>