	<?php
		add_action( 'after_setup_theme', 'photonz_setup' );
		function _setup() {
			load_theme_textdomain( 'photonz', get_template_directory() . '/languages' );
		   
			add_theme_support( 'title-tag' );
			add_theme_support( 'automatic-feed-links' );
		   
			
		   
			
			global $content_width;
			
			if ( ! isset( $content_width ) ) $content_width = 640;
			
			
	}

//remove emoji
remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );

	 // This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );
	set_post_thumbnail_size( 300, 200, true );
	add_image_size( 'home-page-thumbs', 300, 200, true );
	add_image_size( 'related-thumb', 220, 174, true ); //(cropped)

	function register_my_menu() {
	  register_nav_menu('header-menu',__( 'Header Menu' ));
	}
	add_action( 'init', 'register_my_menu' );

	add_action( 'wp_enqueue_scripts', 'photonz_load_scripts' );

	function photonz_load_scripts() {
		wp_enqueue_script( 'jquery' );
	}

	add_action( 'comment_form_before', 'photonz_enqueue_comment_reply_script' );

	function photonz_enqueue_comment_reply_script() {
	if ( get_option( 'thread_comments' ) ) { wp_enqueue_script( 'comment-reply' ); }
	}
	add_filter( 'the_title', 'photonz_title' );
	function photonz_title( $title ) {
	if ( $title == '' ) {
	return '&rarr;';
	} else {
	return $title;
	}
	}
	add_filter( 'wp_title', 'photonz_filter_wp_title' );
	function photonz_filter_wp_title( $title )
	{
	return $title . esc_attr( get_bloginfo( 'name' ) );
	}
	add_action( 'widgets_init', 'photonz_widgets_init' );
	function photonz_widgets_init()
	{
	register_sidebar( array (
		'name' => __( 'bottom 1', 'photonz' ),
		'id' => 'bottom-1',
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
			) 
		);
		
		register_sidebar( array (
		'name' => __( 'bottom 2', 'photonz' ),
		'id' => 'bottom-2',
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
			) 
		);
		
		register_sidebar( array (
		'name' => __( 'bottom 3', 'photonz' ),
		'id' => 'bottom-3',
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
			) 
		);
		
		register_sidebar( array (
		'name' => __( 'bottom 4', 'photonz' ),
		'id' => 'bottom-4',
		'before_widget' => '<div id="%1$s" class="widget-container %2$s">',
		'after_widget' => "</div>",
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
			) 
		);
	}
	function photonz_custom_pings( $comment )
	{
	$GLOBALS['comment'] = $comment;
	?>
		<li <?php comment_class(); ?> id="li-comment-
			<?php comment_ID(); ?>">
				<?php echo comment_author_link(); ?>
		</li>
		<?php 
	}
	add_filter( 'get_comments_number', 'photonz_comments_number' );
	function photonz_comments_number( $count )
	{
	if ( !is_admin() ) {
	global $id;
	$comments_by_type = &separate_comments( get_comments( 'status=approve&post_id=' . $id ) );
	return count( $comments_by_type['comment'] );
	} else {
	return $count;
	}
	}
