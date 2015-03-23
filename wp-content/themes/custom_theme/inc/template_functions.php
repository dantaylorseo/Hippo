<?php

	function new_excerpt_more($more) {
	   global $post;
	   return ' <a class="moretag" href="'. get_permalink($post->ID) . '">Read more...</a>';
	}
	add_filter('excerpt_more', 'new_excerpt_more');
	
	function custom_excerpt_length( $length ) {
		return 15;
	}
	add_filter( 'excerpt_length', 'custom_excerpt_length', 999 );
	

	add_filter( 'wp_pagenavi', 'ik_pagination', 10, 2 );
	function ik_pagination($html) {
		$out = '';
	  
		//wrap a's and span's in li's
		$out = str_replace("<div","",$html);
		$out = str_replace("class='wp-pagenavi'>","",$out);
		$out = str_replace("<a","<li><a",$out);
		$out = str_replace("</a>","</a></li>",$out);
		$out = str_replace("<span","<li><span",$out);  
		$out = str_replace("</span>","</span></li>",$out);
		$out = str_replace("</div>","",$out);
	  
		return '<ul class="pagination pagination-centered">'.$out.'</ul>';
	}

    function archive_title() {
        global $post;
        $title = get_the_title($post->ID);
        echo substr($title, 0, 30).'...';
    }
	
	function tailored_post_meta() {
        if( $category = get_the_category() ) {
            echo '<div class="post_meta">';
            if($category[0]){
                echo '<a href="'.get_category_link($category[0]->term_id ).'">'.$category[0]->cat_name.'</a> | ';
            }
            the_time( get_option( 'date_format' ) );
            echo '</div>';
        }
    }