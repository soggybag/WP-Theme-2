<?php
	// Set the maximum width of the images in the content area. I think...
	if ( ! isset( $content_width ) ) $content_width = 520;
	
	// feed link support
	add_theme_support( 'automatic-feed-links' );
	
	// Add custom background functionality
	add_custom_background();
	
	$args = array(
		'default-color' => '000000'
	);
	
	add_theme_support( 'custom-background', $args );
	add_theme_support( 'post-thumbnails' );
	
    
    add_action( 'widgets_init', 'theme_slug_widgets_init' );
    function theme_slug_widgets_init() {
        // Register a dynamic sidebar named Main Sidebar
        register_sidebar( array( 'id' => 'main-sidebar', 
                'name' => 'Main Sidebar', 
                'description' => 'Sidebar located in the right column', 
                'before_title'=> '<h3>',
                'after_title' => '</h3>' ) 
        );
    }

    function title_filter( $title, $sep ) {
        global $paged, $page;

        if ( is_feed() ) {
            return $title;
        }

        // Add the site name.
        $title .= get_bloginfo( 'name' );

        // Add the site description for the home/front page.
        $site_description = get_bloginfo( 'description', 'display' );
        if ( $site_description && ( is_home() || is_front_page() ) ) {
            $title = "$title $sep $site_description";
        }

        // Add a page number if necessary.
        if ( $paged >= 2 || $page >= 2 ) {
            $title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );
        }

        return $title;
    }
    add_filter( 'wp_title', 'title_filter', 10, 2 );




	
	// Nav Menu
	if ( function_exists( 'register_nav_menu' ) ) {
		register_nav_menu( 'primary', 'Primary Menu' );
	}
	
	
	
	//this function will be called in the next section
	function advanced_comment($comment, $args, $depth) {
		$GLOBALS['comment'] = $comment; ?>
		
		<li <?php comment_class(); ?> id="li-comment-<?php comment_ID() ?>">
			<div class="comment-author vcard grid-25">
				<?php echo get_avatar($comment,$size='64',$default='<path_to_url>' ); ?>
					<div class="comment-date">
						<?php comment_date('M d y'); ?>
					</div>
					<div class="comment-meta">
						<a href="<?php the_author_meta( 'user_url'); ?>">
							<?php printf( '%s', get_comment_author_link() ); ?>
						</a>
					</div>
					<div>
						<?php edit_comment_link( 'Edit','  ',''); ?>
					</div>
				</div>
		
			<?php if ($comment->comment_approved == '0') : ?>
				<em>Your comment is awaiting moderation.</em>
				<br />
			<?php endif; ?>
		
			<div class="comment-text grid-75">	
				<?php comment_text() ?>
				<?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
			</div>
		<div class="clear"></div>
	<?php }
	