<?php
/* Add bootstrap support to the Wordpress theme and load style.css*/ 
function theme_add_bootstrap() {
	wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() . '/css/bootstrap.min.css' );
	wp_enqueue_style( 'style-css', get_template_directory_uri() . '/style.css' );
	wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() . '/js/bootstrap.min.js', array(), '3.0.0', true );
	//wp_enqueue_script('jquery');
	wp_enqueue_script( 'custom-js', get_template_directory_uri() . '/js/custom.js', array(), '1.0.0', true );
}

// add ie conditional html5 shim to header
function add_ie_html5_shim () {
    echo '<!--[if lt IE 9]>';
    echo '<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>';
    echo '<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>';
    echo '<![endif]-->';
}

add_action('wp_head', 'add_ie_html5_shim'); 

add_action( 'wp_enqueue_scripts', 'theme_add_bootstrap' );

// Register Custom Navigation Walker
require_once('wp_bootstrap_navwalker.php');

register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'ReVenge' ),
) );

function wpb_widgets_init() {

    register_sidebar( array(

    	'name'          => __( 'Home Left', 'theme_text_domain' ),
		'id'            => 'unique-sidebar-1',
		'description'   => 'Home page Left',
		'class'         => '',
		'before_widget' => '<div class="well cmn-t-scale">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="open-sans-bld">',
		'after_title'   => '</h3>'
	) );

    register_sidebar( array(

       	'name'          => __( 'Home Box 1', 'theme_text_domain' ),
		'id'            => 'unique-sidebar-2',
		'description'   => 'Home page center Box 1',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="open-sans-bld text-center">',
		'after_title'   => '</h3>'
    ) );

        register_sidebar( array(

       	'name'          => __( 'Home Box 2', 'theme_text_domain' ),
		'id'            => 'unique-sidebar-3',
		'description'   => 'Home page center Box 2',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="open-sans-bld text-center">',
		'after_title'   => '</h3>'
    ) );

        register_sidebar( array(

       	'name'          => __( 'Home Box 3', 'theme_text_domain' ),
		'id'            => 'unique-sidebar-4',
		'description'   => 'Home page center Box 3',
		'class'         => '',
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '<h3 class="open-sans-bld text-center">',
		'after_title'   => '</h3>'
    ) );

    register_sidebar( array(

       	'name'          => __( 'Single Post', 'theme_text_domain' ),
		'id'            => 'unique-sidebar-5',
		'description'   => 'Single Post Sidebar',
		'class'         => '',
		'before_widget' => '<div class="well cmn-t-scale">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="open-sans-bld">',
		'after_title'   => '</h3>'
    ) );

       register_sidebar( array(

       	'name'          => __( 'Footer 1', 'theme_text_domain' ),
		'id'            => 'unique-sidebar-6',
		'description'   => 'Footer 1',
		'class'         => '',
		'before_widget' => '<div class="marg-top-20">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="open-sans-bld">',
		'after_title'   => '</h3>'
    ) );
       register_sidebar( array(

       	'name'          => __( 'Footer 2', 'theme_text_domain' ),
		'id'            => 'unique-sidebar-7',
		'description'   => 'Footer 2',
		'class'         => '',
		'before_widget' => '<div class="marg-top-20">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="open-sans-bld">',
		'after_title'   => '</h3>'
    ) );
              register_sidebar( array(

       	'name'          => __( 'Footer 3', 'theme_text_domain' ),
		'id'            => 'unique-sidebar-8',
		'description'   => 'Footer 3',
		'class'         => '',
		'before_widget' => '<div class="marg-top-20">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="open-sans-bld">',
		'after_title'   => '</h3>'
    ) );
                     register_sidebar( array(

       	'name'          => __( 'Footer 4', 'theme_text_domain' ),
		'id'            => 'unique-sidebar-9',
		'description'   => 'Footer 4',
		'class'         => '',
		'before_widget' => '<div class="marg-top-20">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="open-sans-bld">',
		'after_title'   => '</h3>'
    ) );
}

add_action( 'widgets_init', 'wpb_widgets_init' );


add_theme_support( 'post-thumbnails' );

add_filter('widget_text', 'do_shortcode');

function revenge_insert_category() {
  wp_insert_term(
    'Featured Home Top',
    'category',
    array(
      'description' => 'A category for featuring post in Jumbotron.',
      'slug'    => 'home-jumbotron'
    )
  );
}

add_action( 'after_setup_theme', 'revenge_insert_category' );

function revenge_customizer_register($wp_customize)
{
$logo = get_template_directory_uri();

$wp_customize->add_section('revenge_colors', array(
	'title' =>__('Colors', 'ReVenge'),
	'description' =>'Modify the theme colors', 'ReVenge'
	));
$wp_customize->add_setting('background_color', array(
	'default' => '#333',
	'sanitize_callback' => 'background_color',	
	));
$wp_customize->add_control( new WP_Customize_Color_Control($wp_customize, 'background_color', array(
	'label' =>__('Background Gradient', 'ReVenge'),
	'section' => 'revenge_colors',	
	'setting' => 'background_color'
	) ));
// Start logo settings
$wp_customize->add_section('revenge_images', array(
	'title' =>__('Images', 'ReVenge'),
	'description' =>'Modify the theme logo', 'ReVenge'
	));
$wp_customize->add_setting('logo_image', array(
	'default' => $logo.'/images/logo2.png',	
	'sanitize_callback' => 'logo_image',	
	));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'logo_image', array(
	'label' =>__('Edit theme logo (214 x 44)', 'ReVenge'),
	'section' => 'revenge_images',	
	'setting' => 'logo_image'
	) ));
// Start Jumbotron Backround settings
$wp_customize->add_setting('jumbo_image', array(
	'default' => $logo.'/images/banner.png',
	'sanitize_callback' => 'jumbo_image',	
	));
$wp_customize->add_control( new WP_Customize_Image_Control($wp_customize, 'jumbo_image', array(
	'label' =>__('Edit Jumbo Background (1024 x 407)', 'ReVenge'),
	'section' => 'revenge_images',	
	'setting' => 'jumbo_image'
	) ));

// Start footer settings
$wp_customize->add_section('revenge_footer', array(
	'title' =>__('Copyright', 'ReVenge'),
	'description' =>'Change copyright', 'ReVenge'
	));
// footer copyright
$wp_customize->add_setting('footer_copyright', array(
	'default' => '2015 ReVenge',	
	'sanitize_callback' => 'footer_copyright',
	));
$wp_customize->add_control('footer_copyright', array(
	'label' =>__('Add Copyright', 'ReVenge'),
	'section' => 'revenge_footer',	
	'setting' => 'footer_copyright'
	));
// Start social links
$wp_customize->add_section('revenge_social', array(
	'title' =>__('Social links', 'ReVenge'),
	'description' =>'Edit social links', 'ReVenge'
	));
// footer copyright
$wp_customize->add_setting('revenge_fb', array(
	'default' => '#',
	'sanitize_callback' => 'revenge_fb',	
	));
$wp_customize->add_control('revenge_fb', array(
	'label' =>__('Add Facebook link', 'ReVenge'),
	'section' => 'revenge_social',	
	'setting' => 'revenge_fb'
	));
$wp_customize->add_setting('revenge_youtube', array(
	'default' => '#',
	'sanitize_callback' => 'revenge_youtube',		
	));
$wp_customize->add_control('revenge_youtube', array(
	'label' =>__('Add Youtube link', 'ReVenge'),
	'section' => 'revenge_social',	
	'setting' => 'revenge_youtube'
	));
$wp_customize->add_setting('revenge_twitter', array(
	'default' => '#',	
	'sanitize_callback' => 'revenge_twitter',	
	));
$wp_customize->add_control('revenge_twitter', array(
	'label' =>__('Add Twitter link', 'ReVenge'),
	'section' => 'revenge_social',	
	'setting' => 'revenge_twitter'
	));
}

function revenge_css_customizer()
{
?>
<style type="text/css">
body { 
	background: -webkit-linear-gradient(#<?php echo get_theme_mod('background_color'); ?>, #000); /* For Safari 5.1 to 6.0 */
    background: -o-linear-gradient(#<?php echo get_theme_mod('background_color'); ?>, #000); /* For Firefox 3.6 to 15 */
    background: linear-gradient(#<?php echo get_theme_mod('background_color'); ?>, #000); /* Standard syntax */;    
}
.jumbotron{
background-image: url('<?php echo get_theme_mod('jumbo_image'); ?>') !important;
}
</style>
<?php
}
add_action( 'wp_head', 'revenge_css_customizer');
add_action( 'customize_register', 'revenge_customizer_register');
function rev_add_jquery_on_commentables() {
	wp_enqueue_script('jquery');
}

/**
 * This JavaScript relies on the jQuery library, and the comment form having
 * an id attribute with the value 'commentform'. This is used in the default
 * theme and thus should be fairly standard across WordPress themes. Change the
 * value of the $text variable to amend the text of the toggle.
 */
function rev_toggle_form_js() {
	$text = __('Comment on this post &raquo;', 'hidden_comment_form');
 	print <<<TOGGLE_FORM_JS
	<script type="text/javascript">
		(function() {
		  var $ = jQuery, form = $('#commentform').hide(), hidden = true;
		  form.after('<div id="cf_toggle">${text}</div>');
		  $('#cf_toggle').click(function() {
		    if (!hidden) return;
		    form.show();
		    $(this).hide();
		    hidden = false;
		  });
		})();
	</script>
TOGGLE_FORM_JS;
}

add_action('init', 'rev_add_jquery_on_commentables');

//add_action('comment_form', 'rev_toggle_form_js');

add_filter( 'comment_form_default_fields', 'bootstrap3_comment_form_fields' );

function bootstrap3_comment_form_fields( $fields ) {
    $commenter = wp_get_current_commenter();
    
    $req      = get_option( 'require_name_email' );
    $aria_req = ( $req ? " aria-required='true'" : '' );
    $html5    = current_theme_supports( 'html5', 'comment-form' ) ? 1 : 0;
    
    $fields   =  array(
        'author' => '<div class="form-group comment-form-author">' . '<label for="author">' . __( 'Name', 'ReVenge' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" size="30"' . $aria_req . ' /></div>',
        'email'  => '<div class="form-group comment-form-email"><label for="email">' . __( 'Email', 'ReVenge' ) . ( $req ? ' <span class="required">*</span>' : '' ) . '</label> ' .
                    '<input class="form-control" id="email" name="email" ' . ( $html5 ? 'type="email"' : 'type="text"' ) . ' value="' . esc_attr(  $commenter['comment_author_email'] ) . '" size="30"' . $aria_req . ' /></div>',
        'url'    => '<div class="form-group comment-form-url"><label for="url">' . __( 'Website', 'ReVenge' ) . '</label> ' .
                    '<input class="form-control" id="url" name="url" ' . ( $html5 ? 'type="url"' : 'type="text"' ) . ' value="' . esc_attr( $commenter['comment_author_url'] ) . '" size="30" /></div>'        
    );

	add_filter( 'comment_form_defaults', 'bootstrap3_comment_form' );

	function bootstrap3_comment_form( $args ) {
	    $args['comment_field'] = '<div class="form-group comment-form-comment">
	            <label for="comment">' . __( 'Comment', 'ReVenge' ) . '</label> 
	            <textarea class="form-control" id="comment" name="comment" cols="45" rows="8" aria-required="true"></textarea>
	        </div>';
	    $args['class_submit'] = 'btn btn-default'; // since WP 4.1
	    
	    return $args;
	}    
    return $fields;
}

add_action('comment_form', 'bootstrap3_comment_button' );

function bootstrap3_comment_button() {
    echo '<button class="btn btn-default" type="submit">' . __( 'Submit' , 'ReVenge') . '</button>';
}

//added upon WP demand.
if ( ! isset( $content_width ) ) $content_width = 600;

add_theme_support( 'html5', array( 'comment-list', 'search-form', 'caption' ) );

function rev_embed_html( $html ) {
    return '<div class="video-container">' . $html . '</div>';
}
function rev_setup(){
	load_theme_textdomain( 'ReVenge', get_template_directory() . '/languages' );
	add_filter( 'embed_oembed_html', 'rev_embed_html', 10, 3 );
	add_filter( 'video_embed_html', 'rev_embed_html' ); // Jetpack
	if ( is_singular() ) wp_enqueue_script( "comment-reply" );
}
add_action( 'after_setup_theme', 'rev_setup' );
add_theme_support( 'title-tag' );
add_theme_support( 'automatic-feed-links' );
add_theme_support( 'post-thumbnails' );
?>