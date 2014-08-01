<?php
	/**
	 * Starkers functions and definitions
	 *
	 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
	 *
 	 * @package 	WordPress
 	 * @subpackage 	Starkers
 	 * @since 		Starkers 4.0
	 */

	/*
	Required external files
	======================================================================================================================== */

	require_once( 'external/starkers-utilities.php' );
	//require_once( 'custom-post-type.php' );



	/*
	Theme specific settings
	======================================================================================================================== */

	/* Images */
	add_theme_support('post-thumbnails');
	add_image_size( 'atmosferiq', 300, 300, true ); //(cropped)
	

	/* Menus */
	register_nav_menus(array('primary' => 'Primary Navigation'));
	register_nav_menus(array('footer' => 'Footer Navigation'));
	register_nav_menus(array('archetype' => 'Archetype'));

		function atm_widgets_init() {
		    register_sidebar( array(
		        'name' => __( 'Business Owner Testimonial', 'atm' ),
		        'id' => 'business-owner',
				'description' => __( 'Business owner testimonial', 'atm' ),
				'before_widget' => '<aside class="widget %2$s">',
				'after_widget' => "</aside>",
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
		    ) );
		    register_sidebar( array(
		        'name' => __( 'Marketing Manager Testimonial', 'atm' ),
		        'id' => 'marketing-manager',
				'description' => __( 'Marketing manager testimonial', 'atm' ),
				'before_widget' => '<aside class="widget %2$s">',
				'after_widget' => "</aside>",
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
		    ) );
		    register_sidebar( array(
		        'name' => __( 'Media Planner Testimonial', 'atm' ),
		        'id' => 'media-planner',
				'description' => __( 'Media planner testimonial', 'atm' ),
				'before_widget' => '<aside class="widget %2$s">',
				'after_widget' => "</aside>",
				'before_title' => '<h3 class="widget-title">',
				'after_title' => '</h3>',
		    ) );
		    register_sidebar( array(
		        'name' => __( 'About Atmosferiq', 'atm' ),
		        'id' => 'footer-1',
				'description' => __( 'Atmosferiq about', 'atm' ),
				'before_widget' => '<aside class="col-sm-4 widget %2$s">',
				'after_widget' => "</aside>",
				'before_title' => '<h2 class="widget-title">',
				'after_title' => '</h2>',
		    ) );
		    register_sidebar( array(
		        'name' => __( 'Twitter Feed', 'atm' ),
		        'id' => 'footer-2',
				'description' => __( 'Twitter feed', 'atm' ),
				'before_widget' => '<aside class="col-sm-4 widget %2$s">',
				'after_widget' => "</aside>",
				'before_title' => '<h2 class="widget-title">',
				'after_title' => '</h2>',
		    ) );
		}

		add_action( 'widgets_init', 'atm_widgets_init' );

	/* Load Bootstrap into Admin */
	function ttv_load_custom_admin() {
	        wp_register_style( 'custom_wp_admin_css', get_template_directory_uri() . '/admin/admin.min.css', false, '1.0.0' );
	        wp_enqueue_style( 'custom_wp_admin_css' );

			wp_register_script( 'admin_bootstrap', get_template_directory_uri().'/admin/bootstrap.min.js', array( 'jquery' ), false, true );
			wp_enqueue_script( 'admin_bootstrap' );

			wp_register_script( 'admin_script', get_template_directory_uri().'/admin/admin.min.js', array( 'jquery' ), false, true );
			wp_enqueue_script( 'admin_script' );

	}
	add_action( 'admin_enqueue_scripts', 'ttv_load_custom_admin' );


	function atm_login_logo() { ?>
	    <style type="text/css">
	        body.login div#login{
	        	padding: 40px 0 0;
	        }
	        body.login div#login h1 a {
	            background-image: url(<?php echo get_stylesheet_directory_uri();?>/images/login_logo.png);
				background-size: 300px 85px;
				padding-bottom: 10px;
				width: auto;
	        }
	    </style>
	<?php }

	add_action( 'login_enqueue_scripts', 'atm_login_logo' );

	function atm_login_logo_url() {
		    return get_bloginfo( 'url' );
		}
	add_filter( 'login_headerurl', 'atm_login_logo_url' );


	/*
	Actions and Filters
	======================================================================================================================== */


	add_action( 'wp_enqueue_scripts', 'starkers_script_enqueuer' );
	add_filter( 'body_class', array( 'Starkers_Utilities', 'add_slug_to_body_class' ) );



	/*
	Scripts
	======================================================================================================================== */

	function starkers_script_enqueuer() {
		wp_register_script( 'site', get_template_directory_uri().'/site.min.js', array( 'jquery' ), false, true );
		wp_enqueue_script( 'site' );

        wp_register_style( 'screen', get_stylesheet_directory_uri().'/style.min.css', '', '', 'screen' );
        wp_enqueue_style( 'screen' );
	}


	/* Google Fonts */
	function google_fonts() {
            wp_register_style('googleFonts', 'http://fonts.googleapis.com/css?family=Open+Sans:400italic,700italic,400,700');
            wp_enqueue_style( 'googleFonts');
        }
    add_action('wp_print_styles', 'google_fonts');
	
	/* Google Fonts */
    function fontAwesome() {
            wp_register_style('fontAwesome', '//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.min.css');
            wp_enqueue_style( 'fontAwesome');
        }
    add_action('wp_print_styles', 'fontAwesome');

	/* Gravity Forms JS */
	function gf_deregister() {
		wp_deregister_script( 'gform_gravityforms' );
		wp_deregister_script( 'gform_json' );
		wp_deregister_script( 'gform_placeholder' );
	}
	add_action('wp_print_styles', 'gf_deregister');


	/*
	Comments
	======================================================================================================================== */

	/**
	 * Custom callback for outputting comments 
	 *
	 * @return void
	 * @author Keir Whitaker
	 */
	function starkers_comment( $comment, $args, $depth ) {
		$GLOBALS['comment'] = $comment; 
		?>
		<?php if ( $comment->comment_approved == '1' ): ?>	
		<li>
			<article id="comment-<?php comment_ID() ?>">
				<?php echo get_avatar( $comment ); ?>
				<h4><?php comment_author_link() ?></h4>
				<time><a href="#comment-<?php comment_ID() ?>" pubdate><?php comment_date() ?> at <?php comment_time() ?></a></time>
				<?php comment_text() ?>
			</article>
		<?php endif;
	}

	add_filter("gform_init_scripts_footer", "init_scripts");
	function init_scripts() {
		return true;
	}

	/* 
	Keep Users Logged In For One Year
	======================================================================================================================== */
	add_filter( 'auth_cookie_expiration', 'keep_me_logged_in_for_1_year' );
		function keep_me_logged_in_for_1_year( $expirein ) {
	    return 31556926; // 1 year in seconds
	}

	/* Pagination Test
	======================================================================================================================== */

	function if_pagination() {
		global $wp_query;
		return ( $wp_query->max_num_pages > 1 );
	}