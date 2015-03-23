<?php 
require_once('inc/wp_bootstrap_navwalker.php');
require_once('inc/widgets.php');
require_once('inc/template_functions.php');
class tailored_theme_class {
    
    public function __construct() {
        add_action( 'wp_enqueue_scripts', array( $this, 'enqueue_scripts' ) );
        add_action( 'init', array( $this, 'register_image_sizes' ) );
        add_action( 'init', array( $this, 'register_sidebars' ) );
		add_action( 'init', array( $this, 'register_shortcodes' ) );
		add_action( 'init', array( $this, 'register_post_types' ) );
        add_action( 'init', array( $this, 'register_menus' ) );		
		if ( ! isset( $content_width ) ) $content_width = 1070;
        add_action( 'gform_after_submission', array( $this, 'attach_image_to_post' ) );
        add_action( 'widgets_init', array( $this, 'register_widgets' ) );
		add_action( 'add_meta_boxes_forms', array( $this, 'form_meta_box') );
		
		add_action( 'admin_post_nopriv_contact_form_submit', array( $this, 'form_submit' ) );
		add_action( 'admin_post_contact_form_submit', array( $this, 'form_submit' ) );
		
		add_filter('manage_forms_posts_columns', array( $this, 'forms_columns' ), 10 );
        add_action('manage_forms_posts_custom_column', array( $this,'forms_columns_content'), 10, 2 );
		
		add_filter( 'post_row_actions', array( $this, 'remove_row_actions' ), 10, 1 );
		add_filter( 'the_content', array( $this, 'about_us_filter' ) );
		
        add_theme_support( 'post-thumbnails' );
    }
    
    public function enqueue_scripts(){
		
		wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/css/bootstrap.min.css', '1.0');
		wp_enqueue_style( 'bootstrap_theme', get_stylesheet_directory_uri() . '/css/bootstrap-theme.min.css', '1.0');
		wp_enqueue_style( 'fontawesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css', '1.0');
		
		wp_enqueue_style( 'theme-style', get_stylesheet_uri(), array( 'bootstrap', 'bootstrap_theme', 'fontawesome' ) );
		
		wp_enqueue_script('jquery');
		wp_enqueue_script( 'bootstrap-js', get_stylesheet_directory_uri() . '/js/bootstrap.min.js', array( 'jquery'), '1.0', true );
	
		
	}
    
    public function register_image_sizes() {
        add_image_size( 'custom-large', 451, 347, true ); 
        add_image_size( 'custom-medium', 451, 347, true ); 
        add_image_size( 'custom-small', 65, 65, true ); 
        add_image_size( 'allotment-home', 300, 200, true ); 
    }
    
	public function register_shortcodes() {
		add_shortcode( 'quote', array( $this, 'quote_shortcode' ) );
	}
	
    public function register_menus() {
        register_nav_menus( array(
            'primary' => __( 'Primary Menu', 'sosen' ),
        ) );
		
		register_nav_menus( array(
            'home' => __( 'Home Menu', 'sosen' ),
        ) );
		
		register_nav_menus( array(
            'foot1' => __( 'Footer 1', 'sosen' ),
        ) );
		
		register_nav_menus( array(
            'foot2' => __( 'Footer 2', 'sosen' ),
        ) );
		
		register_nav_menus( array(
            'foot3' => __( 'Footer 3', 'sosen' ),
        ) );
		
		register_nav_menus( array(
            'foot4' => __( 'Footer 4', 'sosen' ),
        ) );
    }
    
    public function register_sidebars() {
		register_sidebar( array(
			'name' => __( 'Main Sidebar', 'seowned' ),
			'id' => 'main_sidebar',
			'before_widget' => '<div class="sidebox">',
			'after_widget' => "</div>",
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		) );
        
        register_sidebar( array(
			'name' => __( 'Twitter Area', 'seowned' ),
			'id' => 'twitter_sidebar',
			'before_widget' => '',
			'after_widget' => "",
			'before_title' => '<h2>',
			'after_title' => '</h2>',
		) );
        
        register_sidebar( array(
			'name' => __( 'Featured Allotments', 'seowned' ),
			'id' => 'featured_allotments',
			'before_widget' => '<div id="featured_allotments"><div class="row">',
			'after_widget' => "</div></div>",
			'before_title' => '<div class="col-md-24"><h2>',
			'after_title' => '</h2></div>',
		) );
	}
    
	public function quote_shortcode( $atts, $content = null ) {
		$output = '<div class="row blockquote">';
		$output .= '<div class="col-md-2 quote"><i class="fa fa-quote-left"></i></div>';
		$output .= '<div class="col-md-11">'.$content.'</div>';
		$output .= '<div class="col-md-2 quote quote-right"><i class="fa fa-quote-right"></i></div>';
		$output .= '</div>';
		return $output;
	}
    
	public function about_us_filter( $content = null ) {
		if( is_page( 'about/about-us/' ) ) {
			$show_after_p = 1;
			$contents = explode("</p>", $content);
			$p_count = 1;
			$output = '';
			foreach($contents as $content)
			{
				$output .= $content;
		
				if($p_count == $show_after_p)
				{
					// Add content here
					//$output .= '<div class="test"></div>';
				}
				$output .= "</p>";
				$p_count++;
			}
			return $output;
		} else {
			return $content;	
		}
	}
	
    public function register_widgets (){
		 register_widget( 'featured_allotments' );
	}
	
	public function form_submit() {
		if ( ! wp_verify_nonce( $_POST[ '_wpnonce' ], 'contact_form_submit' ) )
            die( 'Invalid nonce. ' . var_export( $_POST, true ) );
		
		$my_post = array(
		  'post_title'    => wp_strip_all_tags($_POST['name']).' : '.date('d/m/Y'),
		  'post_status'   => 'publish',
		  'post_type'	  => 'forms'
		);
		
		$post_id = wp_insert_post( $my_post );
		update_post_meta( $post_id, 'date', strtotime( date("Y-m-d H:i:s") ) );
		update_post_meta( $post_id, 'name', $_POST['name'] );
		update_post_meta( $post_id, 'company', $_POST['company'] );
		update_post_meta( $post_id, 'phone', $_POST['phone'] );
		update_post_meta( $post_id, 'email', $_POST['email'] );
		update_post_meta( $post_id, 'interest', $_POST['interest'] );
		update_post_meta( $post_id, 'message', $_POST['message'] );
		
		$to 		= get_option( 'admin_email' );
		$subject 	= 'New Contact Form Submission';
		$message    = "
Hi there,
A new message has arrived from your website. The details are as follows:
Name:  $_POST[name]
Company  $_POST[company]
Phone:  $_POST[phone]
Email:  $_POST[email]
Area of Interest: $_POST[interest]
Message
--------------------------------------------------
$_POST[message]
--------------------------------------------------
The message can also be viewed at ".get_option( 'siteurl' )."/wp-admin/post.php?post=$post_id&action=edit
Yours
Your friendly website robot.
";
		$headers = "From:noreply@hippowaste.co.uk";
				
		wp_mail( $to, $subject, $message, $headers );
		
		wp_safe_redirect( get_option( 'siteurl' ).'/success/' );
		
	}
	
	public function register_post_types() {
		$labels = array(
			'name'               => _x( 'Contact', 'post type general name', 'your-plugin-textdomain' ),
			'singular_name'      => _x( 'Contact', 'post type singular name', 'your-plugin-textdomain' ),
			'menu_name'          => _x( 'Contact', 'admin menu', 'your-plugin-textdomain' ),
			'name_admin_bar'     => _x( 'Contact', 'add new on admin bar', 'your-plugin-textdomain' ),
			'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
			'add_new_item'       => __( 'Add New Contact', 'your-plugin-textdomain' ),
			'new_item'           => __( 'New Contact', 'your-plugin-textdomain' ),
			'edit_item'          => __( 'Edit Contact', 'your-plugin-textdomain' ),
			'view_item'          => __( 'View Contact', 'your-plugin-textdomain' ),
			'all_items'          => __( 'All Contacts', 'your-plugin-textdomain' ),
			'search_items'       => __( 'Search Contacts', 'your-plugin-textdomain' ),
			'parent_item_colon'  => __( 'Parent Contacts:', 'your-plugin-textdomain' ),
			'not_found'          => __( 'No contacts found.', 'your-plugin-textdomain' ),
			'not_found_in_trash' => __( 'No contacts found in Trash.', 'your-plugin-textdomain' )
		);
	
		$args = array(
			'labels'             => $labels,
			'public'             => true,
			'publicly_queryable' => false,
			'show_ui'            => true,
			'show_in_menu'       => true,
			'query_var'          => false,
			'rewrite'            => false,
			'capability_type'    => 'post',
			'has_archive'        => false,
			'hierarchical'       => false,
			'exclude_from_search'=> true,
			'menu_position'      => 21,
			'menu_icon'			 => 'dashicons-email-alt',
			'supports'           => false
		);
	
		register_post_type( 'forms', $args );
	}
		
	public function remove_row_actions( $actions )
	{
		if( get_post_type() === 'forms' )
			unset( $actions['view'] );
		return $actions;
	}
	
	 public function form_meta_box() {
        add_meta_box( 'wp_comp_entry_raw', 'Form Details', array( $this, 'form_meta_content' ), 'forms', 'advanced' , 'core' ); 
    }
	
	public function form_meta_content( $post ) {
        $meta = get_post_meta($post->ID);
        //print_var($meta); ?>
        <table class="form-table">
        	<tr>
            	<th>Date Sent</th>
                <td><?php echo date( 'd/m/Y \a\t H:i:s', $meta['date'][0] ); ?></td>
            </tr>
            <tr>
            	<th>Name</th>
                <td><?php echo $meta['name'][0]; ?></td>
            </tr>
            <tr>
            	<th>Company</th>
                <td><?php echo $meta['company'][0]; ?></td>
            </tr>
            <tr>
            	<th>Phone</th>
                <td><?php echo $meta['phone'][0]; ?></td>
            </tr>
            <tr>
            	<th>Email</th>
                <td><a href="mailto:<?php echo $meta['email'][0]; ?>"><?php echo $meta['email'][0]; ?></a></td>
            </tr>
            <tr>
            	<th>Area of Interest</th>
                <td><?php echo $meta['interest'][0]; ?></td>
            </tr>
            <tr>
            	<th>Message</th>
                <td><?php echo nl2br( $meta['message'][0] ) ; ?></td>
            </tr>
        </table>
    <?php
    }
	
	public function forms_columns ($defaults) {
		unset( $defaults['date'] );
        $defaults['name'] = 'Name';
		$defaults['company'] = 'Company';
		$defaults['phone'] = 'Phone';
		$defaults['email'] = 'Email';
		$defaults['new_date'] = 'Date';
		return $defaults;
    }
	
    public function forms_columns_content ($column_name, $post_ID) {
        $meta = get_post_meta($post_ID);
        
		if ($column_name == 'name') {
            echo $meta['name'][0];
        }
		
		if ($column_name == 'phone') {
            echo $meta['phone'][0];
        }
		
		if ($column_name == 'email') {
            echo '<a href="mailto'.$meta['email'][0].'">'.$meta['email'][0].'</a>';
        }
		
		if ($column_name == 'company') {
            echo $meta['company'][0];
        }
		
		if ($column_name == 'new_date') {
            echo date( 'd/m/Y \a\t H:i:s', $meta['date'][0] );
        }
    }
	
}
$tailored_theme = new tailored_theme_class();