<?php
	class featured_allotments extends WP_Widget {

		public function __construct() {
			parent::__construct(
				'tim_featured_allotments', // Base ID
				__('Featured Allotments', 'text_domain'), // Name
				array( 'description' => __( 'Shows the Featured Allotments Section', 'text_domain' ), ) // Args
			);
		}
	
		public function widget( $args, $instance ) { ?>
			<?php echo $args['before_widget']; ?>
            <?php echo $args['before_title']; ?><?php echo $instance['title']; ?><?php echo $args['after_title']; ?>
            <?php
                $options = array(
                    'posts_per_page'   => 3,
                    'orderby'          => 'post_date',
                    'order'            => 'DESC',
                    'post_type'        => 'entries',
                    'post_status'      => 'publish',
                );
                $posts = get_posts( $options );
                foreach($posts AS $post) {
                    setup_postdata($post);
                ?>
<script>
window.twttr=(function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],t=window.twttr||{};if(d.getElementById(id))return;js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);t._e=[];t.ready=function(f){t._e.push(f);};return t;}(document,"script","twitter-wjs"));
</script>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&appId=1496513220610034&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<script type="text/javascript" async defer src="//assets.pinterest.com/js/pinit.js"></script>
                    <div class="col-md-8 featured_allotment">
                        <div>
                            <div class="featured-title"><?php echo get_the_title($post->ID); ?></div>
                            <div class="featured-image"><?php echo get_the_post_thumbnail( $post->ID, 'allotment-home', array( 'class' => 'img-responsive' ) ); ?> </div>
                            <div class="featured-detail">
                                <a class="twitter-share-button"
                                  href="https://twitter.com/share"
                                  data-url="<?php echo get_permalink($post->ID); ?>"
                                  data-count="none"
                                  data-via="HIPPOBAG">
                                Tweet
                                </a>
                                <div class="fb-share-button" data-href="<?php echo get_permalink($post->ID); ?>" data-layout="button"></div>
                                <span class="pinterest-share-button"><a  href="//gb.pinterest.com/pin/create/button/?url=<?php echo get_permalink($post->ID); ?>&media=http%3A%2F%2Ffarm8.staticflickr.com%2F7027%2F6851755809_df5b2051c9_z.jpg&description=Next%20stop%3A%20Pinterest" data-pin-do="buttonPin" data-pin-config="none" data-pin-color="red"><img src="//assets.pinterest.com/images/pidgets/pinit_fg_en_rect_red_20.png" /></a></span>
                            </div>
                        </div>
                    </div>
                <?php
                }
                wp_reset_postdata();
            ?>
            <?php echo $args['after_widget']; ?>
        <?php
		}
	
		public function form( $instance ) {
			$instance = wp_parse_args( (array) $instance, array( 'title' => 'Today\s Featured Allotments' ) );
            $title = $instance['title'];
?>
            <p><label for="<?php echo $this->get_field_id('title'); ?>">Title: <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo esc_attr($title); ?>" /></label></p>
        <?php
		}
	
		public function update( $new_instance, $old_instance ) {
			$instance = $old_instance;
            $instance['title'] = $new_instance['title'];
            return $instance;
		}
	}

    