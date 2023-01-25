<?php
/**
 * mountine-paradise functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package mountine-paradise
 */
if ( ! function_exists( 'mountine_paradise_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function mountine_paradise_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on mountine-paradise, use a find and replace
		 * to change 'mountine-paradise' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'mountine-paradise', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);
		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus( array(
			'menu-1' => esc_html__( 'Primary', 'mountine-paradise' ),
		) );

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support( 'html5', array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
		) );

		// Set up the WordPress core custom background feature.
		add_theme_support( 'custom-background', apply_filters( 'mountine_paradise_custom_background_args', array(
			'default-color' => 'ffffff',
			'default-image' => '',
		) ) );

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/**
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support( 'custom-logo', array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		) );
	}
endif;
add_action( 'after_setup_theme', 'mountine_paradise_setup' );




add_filter( 'upload_mimes', 'svg_upload_allow' );

# Добавляет SVG в список разрешенных для загрузки файлов.
function svg_upload_allow( $mimes ) {
	$mimes['svg']  = 'image/svg+xml';

	return $mimes;
}
# Исправление MIME типа для SVG файлов.
function fix_svg_mime_type( $data, $file, $filename, $mimes, $real_mime = '' ){

	// WP 5.1 +
	if( version_compare( $GLOBALS['wp_version'], '5.1.0', '>=' ) )
		$dosvg = in_array( $real_mime, [ 'image/svg', 'image/svg+xml' ] );
	else
		$dosvg = ( '.svg' === strtolower( substr($filename, -4) ) );

	// mime тип был обнулен, поправим его
	// а также проверим право пользователя
	if( $dosvg ){

		// разрешим
		if( current_user_can('manage_options') ){

			$data['ext']  = 'svg';
			$data['type'] = 'image/svg+xml';
		}
		// запретим
		else {
			$data['ext'] = $type_and_ext['type'] = false;
		}

	}

	return $data;
}
/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function mountine_paradise_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'mountine_paradise_content_width', 640 );
}
add_action( 'after_setup_theme', 'mountine_paradise_content_width', 0 );

register_nav_menu('footer1', 'Footer 1 Menu'); 
register_nav_menu('footer2', 'Footer 2 Menu'); 
register_nav_menu('footer3', 'Footer 3 Menu'); 
register_nav_menu('home', 'Home Menu'); 

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function mountine_paradise_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Sidebar', 'mountine-paradise' ),
		'id'            => 'sidebar-1',
		'description'   => esc_html__( 'Add widgets here.', 'mountine-paradise' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'mountine_paradise_widgets_init' );

add_action( 'init', 'create_review_taxonomies', 0 );
function create_review_taxonomies(){
	$labels = 
	register_taxonomy('review_cat', array('review'), array(
		'hierarchical' => true,
		'labels' => array(
				'name' => _x( 'Категории Статьей', 'taxonomy general name' ),
				'singular_name' => _x( 'Категория Статьей', 'taxonomy singular name' ),
				'search_items' =>  __( 'Search Категории Статьей' ),
				'all_items' => __( 'All Категории Статьей' ),
				'parent_item' => __( 'Родительская категория' ),
				'parent_item_colon' => __( 'Parent Genre:' ),
				'edit_item' => __( 'Редактировать категорию' ),
				'update_item' => __( 'Обновить категорию' ),
				'add_new_item' => __( 'Добавить категорию' ),
				'new_item_name' => __( 'Новая категория' ),
				'menu_name' => __( 'Категории Статьей' ),
			),
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => true,
	));
}

add_action('init', 'my_review_init');
function my_review_init(){
	register_post_type('review', array(
		'labels'             => array(
			'name'               => 'Статьи', // Основное название типа записи
			'singular_name'      => 'Статьи', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новую Статью',
			'edit_item'          => 'Редактировать Статьи',
			'new_item'           => 'Новая Статья',
			'view_item'          => 'Посмотреть Статьи',
			'search_items'       => 'Найти Статьи',
			'not_found'          =>  'Статьи не найдено',
			'not_found_in_trash' => 'В корзине Статьей не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Статьи'

		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => "путеводитель" ),
		'capability_type'    => 'page',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail' )
	) );
}

add_action( 'init', 'create_service_type', 0 );
function create_service_type(){
	$labels = 
	register_taxonomy('service_type', array('service'), array(
		'hierarchical' => true,
		'labels' => array(
				'name' => _x( 'Регионы Маршрутов', 'taxonomy general name' ),
				'singular_name' => _x( 'Регионы Маршрутов', 'taxonomy singular name' ),
				'search_items' =>  __( 'Искать Регионы Маршрутов' ),
				'all_items' => __( 'Все Регионы Маршрутов' ),
				'parent_item' => __( 'Родительский Регион' ),
				'parent_item_colon' => __( 'Parent Genre:' ),
				'edit_item' => __( 'Редактировать Регион' ),
				'update_item' => __( 'Обновить Регион' ),
				'add_new_item' => __( 'Добавить Регион' ),
				'new_item_name' => __( 'Ноый Регион' ),
				'menu_name' => __( 'Регионы Маршрутов' ),
			),
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => "регионы-маршрутов" ),
	));
}

add_action( 'init', 'create_service_taxonomies', 0 );

function create_service_taxonomies(){
	$labels = 
	register_taxonomy('service_cat', array('service'), array(
		'hierarchical' => true,
		'labels' => array(
				'name' => _x( 'Типы Маршрутов', 'taxonomy general name' ),
				'singular_name' => _x( 'Типы Маршрутов', 'taxonomy singular name' ),
				'search_items' =>  __( 'Search Типы Маршрутов' ),
				'all_items' => __( 'All Типы Маршрутов' ),
				'parent_item' => __( 'Родительский тип' ),
				'parent_item_colon' => __( 'Parent Genre:' ),
				'edit_item' => __( 'Редактировать тип' ),
				'update_item' => __( 'Обновить тип' ),
				'add_new_item' => __( 'Добавить тип' ),
				'new_item_name' => __( 'Новый тип' ),
				'menu_name' => __( 'Типы Маршрутов' ),
			),
		'show_ui' => true,
		'query_var' => true,
		'rewrite' => array( 'slug' => "типы-маршрутов" ),
	));
}

add_action('init', 'my_custom_init');
function my_custom_init(){
	register_post_type('service', array(
		'labels'             => array(
			'name'               => 'Маршруты', // Основное название типа записи
			'singular_name'      => 'Маршруты', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новый Маршрут',
			'edit_item'          => 'Редактировать Маршрут',
			'new_item'           => 'Новая услуга',
			'view_item'          => 'Посмотреть Маршрут',
			'search_items'       => 'Найти Маршруты',
			'not_found'          =>  'Маршрутов не найдено',
			'not_found_in_trash' => 'В корзине Маршрутов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Маршруты'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array( 'slug' => "маршруты" ),
		'capability_type'    => 'page',
		'has_archive'        => true,
		'hierarchical'       => true,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail','comments', 'page-attributes')
	) );
}

add_action('init', 'my_mt_instructions_init');
function my_mt_instructions_init(){
	register_post_type('instruction', array(
		'labels'             => array(
			'name'               => 'Инструкции', // Основное название типа записи
			'singular_name'      => 'Инструкция', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новый Инструкцию',
			'edit_item'          => 'Редактировать Инструкцию',
			'new_item'           => 'Новая Инструкция',
			'view_item'          => 'Посмотреть Инструкцию',
			'search_items'       => 'Найти Инструкции',
			'not_found'          =>  'Инструкций не найдено',
			'not_found_in_trash' => 'В корзине Инструкций не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Инструкции'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'page',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor','thumbnail')
	) );
}
add_action('init', 'my_mt_questions_init');
function my_mt_questions_init(){
	register_post_type('questions', array(
		'labels'             => array(
			'name'               => 'Ответы', // Основное название типа записи
			'singular_name'      => 'Ответ', // отдельное название записи типа Book
			'add_new'            => 'Добавить новую',
			'add_new_item'       => 'Добавить новый Ответ',
			'edit_item'          => 'Редактировать Ответ',
			'new_item'           => 'Новый Ответ',
			'view_item'          => 'Посмотреть Ответы',
			'search_items'       => 'Найти Ответы',
			'not_found'          =>  'Ответов не найдено',
			'not_found_in_trash' => 'В корзине Ответов не найдено',
			'parent_item_colon'  => '',
			'menu_name'          => 'Ответы'
		  ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => true,
		'capability_type'    => 'page',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array('title','editor')
	) );
}
/**
 * Enqueue scripts and styles.
 */

add_action( 'wp_enqueue_scripts', 'mountine_paradise_styles' );
function mountine_paradise_styles(){
	wp_enqueue_style( 'mountine-paradise-style', get_template_directory_uri() . '/main-style.css' );
	wp_enqueue_style( 'sl-theme', get_template_directory_uri() . '/css/slick-theme.css' );
	wp_enqueue_style( 'mountine-paradise-libsmin', get_template_directory_uri() . '/css/libs.min.css' ); 
	wp_enqueue_style( 'mountine-paradise-font-awesome', get_template_directory_uri() . '/css/font-awesome.min.css' );
	wp_enqueue_style( 'mountine-paradise-cmb-min', get_template_directory_uri() . '/Custom-Meta-Boxes/css/dist/cmb.min.css' );
	wp_enqueue_style( 'mountine-paradise-jquery-ui-min', get_template_directory_uri() . '/css/jquery-ui.min.css' );
}

add_action( 'wp_footer', 'my_scripts_method' );

function my_scripts_method() {
	// отменяем зарегистрированный jQuery
	if (!is_admin()) {
		wp_deregister_script('jquery-core');
		wp_deregister_script('jquery');

		// регистрируем
		wp_register_script( 'jquery-core', 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js', false, null, true );
		wp_register_script( 'jquery', false, array('jquery-core'), null, true );

		// подключаем
		wp_enqueue_script( 'jquery' );
	}
}

add_action( 'wp_footer', 'mountine_paradise_scripts' );
function mountine_paradise_scripts() {
	wp_enqueue_script('mountine-paradise-libsmin', get_template_directory_uri() . '/js/libs.min.js' );
	wp_enqueue_script('mountine-paradise-nice-select', get_template_directory_uri() . '/js/jquery.nice-select.min.js');
	wp_enqueue_script('masked-input', get_template_directory_uri().'/js/jquery.maskedinput.min.js', array('jquery'));
	wp_enqueue_script('mountine-paradise-common', get_template_directory_uri() . '/js/common.js');
	wp_enqueue_script('sticky', get_template_directory_uri() . '/js/sticky.js');
	wp_enqueue_script('genre-ajax-js', get_template_directory_uri() . '/js/filter.js' );
	wp_enqueue_script('slick-js', "//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js");
}

if(!is_admin()){
  add_filter('the_content', 'do_shortcode', 11);
}

require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
/* Fire our meta box setup function on the post editor screen. */
add_action( 'load-post.php', 'all_post_meta_boxes_setup' );
add_action( 'load-post-new.php', 'all_post_meta_boxes_setup' );
/* Create one or more meta boxes to be displayed on the post editor screen. */
function all_add_post_meta_boxes() {
  add_meta_box(
    'price-meta',      // Unique ID
    'Старая Цена',    // Title
    'price_meta_box',   // Callback function
    'service',         // Admin page (or post type)
    'side',         // Context
    'default'         // Priority
  );
  /////////////////////////////////////////////////////////////////////////
  add_meta_box(
    'sale-meta',      // Unique ID
    'Цена Распродажи',    // Title
    'sale_meta_box',   // Callback function
    'service',         // Admin page (or post type)
    'side',         // Context
    'default'         // Priority
  );
  /////////////////////////////////////////////////////////////////////////
  add_meta_box(
    'days-meta',      // Unique ID
    'Дней в походе',    // Title
    'days_meta_box',   // Callback function
    'service',         // Admin page (or post type)
    'side',         // Context
    'default'         // Priority
  );
  /////////////////////////////////////////////////////////////////////////
  add_meta_box(
    'diff-meta',      // Unique ID
    'Сложность',    // Title
    'diff_meta_box',   // Callback function
    'service',         // Admin page (or post type)
    'side',         // Context
    'default'         // Priority
  );
};



function price_meta_box( $post ) { ?>
<?php wp_nonce_field( basename( __FILE__ ), 'price_nonce' ); ?>
  <p>
    <label for="price-meta"><?php _e( "", 'example' ); ?></label>
    <br />
    <input class="widefat" type="text" name="price-meta" id="price-meta" value="<?php echo esc_attr( get_post_meta( $post->ID, 'price_meta', true ) ); ?>" size="30" />
  </p>
<?php }
/////////////////////////////////////////////////////////////////////////
function sale_meta_box( $post ) { ?>
<?php wp_nonce_field( basename( __FILE__ ), 'sale_nonce' ); ?>
  <p>
    <label for="sale-meta"><?php _e( "", 'example' ); ?></label>
    <br />
    <input class="widefat" type="text" name="sale-meta" id="sale-meta" value="<?php echo esc_attr( get_post_meta( $post->ID, 'sale_meta', true ) ); ?>" size="30" />
  </p>
<?php }
/////////////////////////////////////////////////////////////////////////
function days_meta_box( $post ) { ?>
<?php wp_nonce_field( basename( __FILE__ ), 'days_nonce' ); ?>
  <p>
    <label for="days-meta"><?php _e( "", 'example' ); ?></label>
    <br />
    <input class="widefat" type="text" name="days-meta" id="days-meta" value="<?php echo esc_attr( get_post_meta( $post->ID, 'days_meta', true ) ); ?>" size="30" />
  </p>
<?php }
/////////////////////////////////////////////////////////////////////////
function diff_meta_box( $post ) { ?>
<?php wp_nonce_field( basename( __FILE__ ), 'diff_nonce' ); ?>
  <p>
    <label for="diff-meta"><?php _e( "", 'example' ); ?></label>
    <br />
    <input class="widefat" type="text" name="diff-meta" id="diff-meta" value="<?php echo esc_attr( get_post_meta( $post->ID, 'diff_meta', true ) ); ?>" size="30" />
  </p>
<?php }



/* Save post meta on the 'save_post' hook. */
add_action( 'save_post', 'all_save_meta', 10, 5 );
/* Meta box setup function. */
function all_post_meta_boxes_setup() {

  /* Add meta boxes on the 'add_meta_boxes' hook. */
  add_action( 'add_meta_boxes', 'all_add_post_meta_boxes' );

  /* Save post meta on the 'save_post' hook. */
  add_action( 'save_post', 'all_save_meta', 10, 5 );
}

/* Save the meta box's post metadata. */
function all_save_meta( $post_id, $post ) {

  /* Verify the nonce before proceeding. */
  if ( !isset( $_POST['price_nonce'] ) || !wp_verify_nonce( $_POST['price_nonce'], basename( __FILE__ ) ) )
    return $post_id;

  /* Get the post type object. */
  $post_type = get_post_type_object( $post->post_type );

  /* Check if the current user has permission to edit the post. */
  if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
    return $post_id;

  /* Get the posted data and sanitize it for use as an HTML class. */
  $new_meta_value = ( isset( $_POST['price-meta'] ) ? sanitize_html_class( $_POST['price-meta'] ) : '' );

  /* Get the meta key. */
  $meta_key = 'price_meta';

  /* Get the meta value of the custom field key. */
  $meta_value = get_post_meta( $post_id, $meta_key, true );

  /* If a new meta value was added and there was no previous value, add it. */
  if ( $new_meta_value && '' == $meta_value )
    add_post_meta( $post_id, $meta_key, $new_meta_value, true );

  /* If the new meta value does not match the old value, update it. */
  elseif ( $new_meta_value && $new_meta_value != $meta_value )
    update_post_meta( $post_id, $meta_key, $new_meta_value );

  /* If there is no new meta value but an old value exists, delete it. */
  elseif ( '' == $new_meta_value && $meta_value )
    delete_post_meta( $post_id, $meta_key, $meta_value );

  /////////////////////////////////////////////////////////////////////////

  /* Verify the nonce before proceeding. */
  if ( !isset( $_POST['sale_nonce'] ) || !wp_verify_nonce( $_POST['sale_nonce'], basename( __FILE__ ) ) )
    return $post_id;

  /* Get the post type object. */
  $post_type = get_post_type_object( $post->post_type );

  /* Check if the current user has permission to edit the post. */
  if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
    return $post_id;

  /* Get the posted data and sanitize it for use as an HTML class. */
  $new_meta_value = ( isset( $_POST['sale-meta'] ) ? sanitize_html_class( $_POST['sale-meta'] ) : '' );

  /* Get the meta key. */
  $sale_key = 'sale_meta';

  /* Get the meta value of the custom field key. */
  $meta_value = get_post_meta( $post_id, $sale_key, true );

  /* If a new meta value was added and there was no previous value, add it. */
  if ( $new_meta_value && '' == $meta_value )
    add_post_meta( $post_id, $sale_key, $new_meta_value, true );

  /* If the new meta value does not match the old value, update it. */
  elseif ( $new_meta_value && $new_meta_value != $meta_value )
    update_post_meta( $post_id, $sale_key, $new_meta_value );

  /* If there is no new meta value but an old value exists, delete it. */
  elseif ( '' == $new_meta_value && $meta_value )
    delete_post_meta( $post_id, $sale_key, $meta_value );

  /////////////////////////////////////////////////////////////////////////

  /* Verify the nonce before proceeding. */
  if ( !isset( $_POST['days_nonce'] ) || !wp_verify_nonce( $_POST['days_nonce'], basename( __FILE__ ) ) )
    return $post_id;

  /* Get the post type object. */
  $post_type = get_post_type_object( $post->post_type );

  /* Check if the current user has permission to edit the post. */
  if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
    return $post_id;

  /* Get the posted data and sanitize it for use as an HTML class. */
  $new_meta_value = ( isset( $_POST['days-meta'] ) ? $_POST['days-meta'] : '' );

  /* Get the meta key. */
  $days_key = 'days_meta';

  /* Get the meta value of the custom field key. */
  $meta_value = get_post_meta( $post_id, $days_key, true );

  /* If a new meta value was added and there was no previous value, add it. */
  if ( $new_meta_value && '' == $meta_value )
    add_post_meta( $post_id, $days_key, $new_meta_value, true );

  /* If the new meta value does not match the old value, update it. */
  elseif ( $new_meta_value && $new_meta_value != $meta_value )
    update_post_meta( $post_id, $days_key, $new_meta_value );

  /* If there is no new meta value but an old value exists, delete it. */
  elseif ( '' == $new_meta_value && $meta_value )
    delete_post_meta( $post_id, $days_key, $meta_value );

  /////////////////////////////////////////////////////////////////////////

  /* Verify the nonce before proceeding. */
  if ( !isset( $_POST['diff_nonce'] ) || !wp_verify_nonce( $_POST['diff_nonce'], basename( __FILE__ ) ) )
    return $post_id;

  /* Get the post type object. */
  $post_type = get_post_type_object( $post->post_type );

  /* Check if the current user has permission to edit the post. */
  if ( !current_user_can( $post_type->cap->edit_post, $post_id ) )
    return $post_id;

  /* Get the posted data and sanitize it for use as an HTML class. */
  $new_meta_value = ( isset( $_POST['diff-meta'] ) ? $_POST['diff-meta'] : '' );

  /* Get the meta key. */
  $diff_key = 'diff_meta';

  /* Get the meta value of the custom field key. */
  $meta_value = get_post_meta( $post_id, $diff_key, true );

  /* If a new meta value was added and there was no previous value, add it. */
  if ( $new_meta_value && '' == $meta_value )
    add_post_meta( $post_id, $diff_key, $new_meta_value, true );

  /* If the new meta value does not match the old value, update it. */
  elseif ( $new_meta_value && $new_meta_value != $meta_value )
    update_post_meta( $post_id, $diff_key, $new_meta_value );

  /* If there is no new meta value but an old value exists, delete it. */
  elseif ( '' == $new_meta_value && $meta_value )
    delete_post_meta( $post_id, $diff_key, $meta_value );

}

//Get Genre Filters

function get_price_filters()
{

	$serv_args = array(
		'post_type' => 'service',
		'posts_per_page' => -1
	);
	$serv_loop = new WP_Query($serv_args);?>
	<?php
	$serv_post_id = array();
	if( $serv_loop->have_posts() ):
		while( $serv_loop->have_posts() ): $serv_loop->the_post(); 
			$srv_post_id = get_the_id();
			$srv_post_id1 = strval($srv_post_id);
			array_push($serv_post_id, $srv_post_id1);

 	endwhile;
	else:
		get_template_part('content-none');
	endif;
	wp_reset_postdata();

	$filters_html = false;

	if( $serv_post_id  ):
		$filters_pre_html = array();
		foreach( $serv_post_id  as &$value )
		{
			$serv_sale_value = get_post_meta( $value, 'sale_meta', TRUE );
			array_push($filters_pre_html, $serv_sale_value);
		}

		$filters_html = array_unique($filters_pre_html);

		$maximum = max($filters_html);
		echo "<div class='max' style='display: none;' data-max='" . $maximum . "'></div>" ;
		$minimum = min($filters_html);
		if($minimum == 0):
			$minimum = '1000';
		endif;
		echo "<div class='min' style='display: none;' data-min='" . $minimum . "'></div>" ;

	endif;
}


function get_days_filters()
{

	$serv_args = array(
		'post_type' => 'service',
		'posts_per_page' => -1,
	);
	$serv_loop = new WP_Query($serv_args);?>
	<?php
	$serv_post_id = array();
	if( $serv_loop->have_posts() ):
		while( $serv_loop->have_posts() ): $serv_loop->the_post(); 
			$srv_post_id = get_the_id();
			$srv_post_id1 = strval($srv_post_id);
			array_push($serv_post_id, $srv_post_id1);

 	endwhile;
	else:
		get_template_part('content-none');
	endif;
	wp_reset_postdata();

	$filters_html = false;

	if( $serv_post_id  ):
		$filters_pre_html = array();
		foreach( $serv_post_id  as &$value )
		{
			$serv_sale_value = get_post_meta( $value, 'days_meta', TRUE );
			array_push($filters_pre_html, $serv_sale_value);
		}

		function cmps($a, $b)
		{
		    if ($a == $b) {
		        return 0;
		    }
		    return ($a < $b) ? -1 : 1;
		}

	
		$filters_html = array_unique($filters_pre_html);
		usort($filters_html, "cmps");

		foreach( $filters_html  as $key => $value )
		{
			$serv_value = $value;
			$filters.= '<div id="days" class="filter">'.$serv_value.'<input type="checkbox" class="value" name="filter_service[]" value="'.$serv_value.'"><i class="fa fa-times" aria-hidden="true"></i></div>';
		}
		return $filters;
	endif;
}
function get_diff_filters()
{

	$serv_args = array(
		'post_type' => 'service',
		'posts_per_page' => -1
	);
	$serv_loop = new WP_Query($serv_args);?>
	<?php
	$serv_post_id = array();
	if( $serv_loop->have_posts() ):
		while( $serv_loop->have_posts() ): $serv_loop->the_post(); 
			$srv_post_id = get_the_id();
			$srv_post_id1 = strval($srv_post_id);
			array_push($serv_post_id, $srv_post_id1);

 	endwhile;
	else:
		get_template_part('content-none');
	endif;
	wp_reset_postdata();

	$filters_html = false;

	if( $serv_post_id  ):
		$filters_pre_html = array();
		foreach( $serv_post_id  as &$value )
		{
			$serv_sale_value = get_post_meta( $value, 'diff_meta', TRUE );
			array_push($filters_pre_html, $serv_sale_value);
		}

		function cmp($a, $b)
		{
		    if ($a == $b) {
		        return 0;
		    }
		    return ($a < $b) ? -1 : 1;
		}

		$filters_html = array_unique($filters_pre_html);
		usort($filters_html, "cmp");

		foreach( $filters_html  as $key => $value )
		{
			$serv_value = $value;
			$filters.= '<div id="diff" class="filter">'.$serv_value.'<input type="checkbox" class="value" name="filter_service[]" value="'.$serv_value.'"></div>';
		}
		return $filters;
	endif;

}

function get_month_filters()
{

	$serv_args = array(
		'post_type' => 'service',
		'posts_per_page' => -1
	);
	$serv_loop = new WP_Query($serv_args);?>
	<?php
	$serv_post_id = array();
	if( $serv_loop->have_posts() ):
		while( $serv_loop->have_posts() ): $serv_loop->the_post(); 
			$srv_post_id = get_the_id();
			$srv_post_id1 = strval($srv_post_id);
			array_push($serv_post_id, $srv_post_id1);

 	endwhile;
	else:
		get_template_part('content-none');
	endif;
	wp_reset_postdata();

	$filters_html = false;

	if( $serv_post_id  ):
		$filters_pre_html = array();
		foreach( $serv_post_id  as &$value )
		{
			$monthm_value = get_post_meta( $value, 'months', false );
			array_push($filters_pre_html, $monthm_value);

		}

		$filters_pre_a = array();
			foreach($filters_pre_html as $subArr){
			  $filters_pre_a = array_merge($filters_pre_a,$subArr);
			}
		
		function cmpm($a, $b)
		{
		    if ($a == $b) {
		        return 0;
		    }
		    return ($a < $b) ? -1 : 1;
		}

		$filters_html = array_unique($filters_pre_a);
		usort($filters_html, "cmpm");

		foreach( $filters_html  as $key => $value )
		{
			$serv_value = $value;

			if ($serv_value == "01") {
				   $serv_name = "Январь";
				} elseif ($serv_value == "02") {
				    $serv_name = "Февраль";
				} elseif ($serv_value == "03") {
				    $serv_name = "Март";
				} elseif ($serv_value == "04") {
				    $serv_name = "Апрель";
				} elseif ($serv_value == "05") {
				    $serv_name = "Май";
				} elseif ($serv_value == "06") {
				    $serv_name = "Июнь";
				} elseif ($serv_value == "07") {
				    $serv_name = "Июль";
				} elseif ($serv_value == "08") {
				    $serv_name = "Август";
				} elseif ($serv_value == "09") {
				    $serv_name = "Сентябрь";
				} elseif ($serv_value == "10") {
				    $serv_name = "Октябрь";
				} elseif ($serv_value == "11") {
				    $serv_name = "Ноябрь";
				} else {
				    $serv_name = "Декабрь";
				}

			$filters.= '<div id="month" class="filter filter-month">' . $serv_name . '<input type="checkbox" class="value" name="filter_service[]" value="'.$serv_value.'"><i class="fa fa-times" aria-hidden="true"></i></div>';
		}
		return $filters;
	endif;

}



//Enqueue Ajax Scripts
function enqueue_genre_ajax_scripts() {
    wp_localize_script( 'genre-ajax-js', 'ajax_genre_params', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) );
		wp_enqueue_script( 'genre-ajax-js' );
}
add_action('wp_footer', 'enqueue_genre_ajax_scripts');

//Add Ajax Actions
add_action('wp_ajax_genre_filter', 'ajax_genre_filter');
add_action('wp_ajax_nopriv_genre_filter', 'ajax_genre_filter');


//Construct Loop & Results
function ajax_genre_filter()
{
	$query_data = $_GET;

	$genre_terms = ($query_data['genre']) ? explode(',',$query_data['genre']) : false;
	$price_terms1 = $genre_terms[0];
	$price_terms2 = $genre_terms[1];
	$meta_query = ($genre_terms) ? array( array(
		'meta_query' => array(
			'relation' => 'AND',
			array(
					'key' => 'sale_meta',
					'value' => array( $price_terms1, $price_terms2 ),
					'type'    => 'numeric',
					'compare' => 'BETWEEN'
				),
			array(
					'key' => 'days_meta',
					'value' => $genre_terms 
				),
			array(
					'key' => 'diff_meta',
					'value' => $genre_terms
				),
			array(
					'key' => 'months',
					'value' => $genre_terms
				),
		)
	) ) : false;
	
	
	$paged = (isset($query_data['paged']) ) ? intval($query_data['paged']) : 1;

	$catmd = $_GET['cat'];
	$typemd = $_GET['type'];
	
	echo "<div id='paged'>" . $paged . "</div>";

	$book_args = array(
		'post_type' => 'service',
		'service_cat' => $catmd,
		'service_type' => $typemd,
		'posts_per_page' => 8,
		'meta_query' => $meta_query,
		'orderby'			=> 'meta_value_num',
		'meta_key'			=> 'number',
		'order'				=> 'ASC',
		'paged' => $paged
	);
	$book_loop = new WP_Query($book_args);?>
	<?php
	$c = 0;
	if( $book_loop->have_posts() ):
		while( $book_loop->have_posts() ): $book_loop->the_post(); ?>
		 		<div class="grid-item col-sm-6 col-md-3">
		 				<div class="track-wrap block">
							<div class="track-item">
								<a href="<?php echo get_permalink(); ?>">
									<?php the_post_thumbnail( array(257, 225) ); ?>
								</a>
							</div>
							<div class="track-description">
								<?php $post_cot_id = get_the_ID(); ?>

								<div class="track-cat-wrap">
									<p><?php echo get_field( 'area' ); ?></p>

		 							<a href="<?php echo get_permalink(); ?>">
										<h2><?php echo the_title(); ?></h2>
		 							</a>
		 							
								</div>

		 							<div class="hr2"></div>

									<div class="row">

										<div class="col-xs-5 col-md-6">
											
											<p>Длительность:</p>

										</div>

										<div class="col-xs-7 col-md-6">
											<div class="track-days"><?php echo get_post_meta( $post_cot_id, 'days_meta', true ); ?></div>
										</div>

									</div>

									<div class="row">
										
										<div class="col-xs-7 col-md-6 diff-h">
											
											<p class="diff-heading">
											Сложность: 
											<div class="diff-wrap">
												<div class="diff">
				                <?php 
					                $diff1 = fw_get_db_settings_option('diff_text_1');
					                $diff2 = fw_get_db_settings_option('diff_text_2');
					                $diff3 = fw_get_db_settings_option('diff_text_3');
												
													$diff = get_post_meta( $post_cot_id, 'diff_meta', true );
													echo '?';
												?>
												<div class="diff-descr">
													<?php
														if ($diff == 1) {
															echo $diff1;
														}
														elseif ($diff == 2) {
															echo $diff2;
														}
														elseif ($diff == 3) {
															echo $diff3;
														}
													?>
												</div>
												</div>
											</div>
										</p>

										</div>

										<div class="col-xs-5 col-md-6">
											
											<?php
												if ($diff == 1) {
													echo "<img class='diff-img' src='https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2019/03/d1.svg' alt=''>";
												}
												elseif ($diff == 2) {
													echo "<img class='diff-img' src='https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2019/03/d2.svg' alt=''>";
												}
												elseif ($diff == 3) {
													echo "<img class='diff-img' src='https://xn----8sbhycugqd1i.xn--p1ai/wp-content/uploads/2019/03/d3.svg' alt=''>";
												}
											?>

										</div>

									</div>
									<?php
										$service = get_field( 'serice' );
										if( $service ) :
											$i = -1;
											foreach( $service as $adv ) {
												$i++;
											}
											else :
										endif ;

									if($i == 0) :?>
										<div class="track-data-wrap"><p>Ближайшая дата:</p>
										<?php $service = get_field( 'serice' );?>
												<p class='track-data''>
										 <?php	foreach( $service as $adv ) {
														echo $adv['serice_data'];
											} ?>
												</p>
										</div>
								<?php	else : ?>
									<div class="track-data-wrap">
										<p>Ближайшая дата:</p>
										<?php	$service = get_field( 'serice' ); ?>
											<div class="service-n-select">
												<select class="service-nice-<?php echo $paged; ?>" data-priceid="<?php echo $post_cot_id; ?>">
										
													<?php	foreach( $service as $adv ) {
																			echo "<option value='" . $adv['serice_price'] . "'>" . $adv['serice_data'] ."</option>";
																}  ?>
												</select>
												<div class="pricef"></div>
											</div>

										<p class="track-data-count">Еще<span>
											<?php 
												if ($i == 1) :
                                                echo $i . '</span>дата</p>';
                                            elseif ($i == 5) :
                                                echo $i . '</span>дат</p>';
                                            elseif ($i == 6) :
                                                echo $i . '</span>дат</p>';
											elseif ($i == 7) :
                                                echo $i . '</span>дат</p>';
											elseif ($i == 8) :
                                                echo $i . '</span>дат</p>';
											elseif ($i == 9) :
                                                echo $i . '</span>дат</p>';
											elseif ($i == 10) :
                                                echo $i . '</span>дат</p>';
											elseif ($i == 11) :
                                                echo $i . '</span>дат</p>';
											elseif ($i == 12) :
                                                echo $i . '</span>дат</p>';
											elseif ($i == 13) :
                                                echo $i . '</span>дат</p>';
											elseif ($i == 14) :
                                                echo $i . '</span>дат</p>';
											elseif ($i == 15) :
                                                echo $i . '</span>дат</p>';
                                            else :
                                                echo $i . '</span>даты</p>';
                                            endif;
											?>
									</div>
								<?php	endif ;
								?>

								

								<div class="row price-wrap">
									
									<div class="col-xs-6 col-md-6">
										<div class="price"> 
											<?php $total_price = get_post_meta( $post_cot_id, 'sale_meta', true );
											$prst = get_field( 'prist', $post_cot_id ); 
											echo "<span>" . $prst . "</span>";
											if ($total_price  ) { ?>
												<div class="price-id price-id-<?php echo $post_cot_id; ?>"><?php echo $total_price ?> </div>
												<i class="fa fa-rub" aria-hidden="true"></i>
											<?php } else ?>
										</div>
									</div>
									<div class="sec-prc pull-right">
											<?php $pegular_price = get_post_meta( $post_cot_id, 'price_meta', true ); ?>
											<?php 
											if ($pegular_price ) {
												echo $pegular_price 
												?><i class="fa fa-rub" aria-hidden="true"></i>
											<?php } else ?>
										</div>
									<div class="col-xs-6 col-md-6">
										<div class="btn-wrap">
											<a href="<?php echo get_permalink(); ?>" class="btn btn-default">Подробнее</a>
										</div>
									</div>

								</div>
							</div>
										
							</div>
						</div>
		 		</div>
		<?php
		$c++;
		endwhile;

		if (  $book_loop->max_num_pages > 1 ) : 

				 echo "<div id='maxpages' data-maxpag=" . $book_loop->max_num_pages . ">" . $book_loop->max_num_pages . "</div>";

			?>
      
    <?php endif; 


	else:
		get_template_part('content-none');
	endif;
	wp_reset_postdata();
	
	die();
}
		add_theme_support(
			'post-formats',
			array(
				'link',
				'aside',
				'gallery',
				'image',
				'quote',
				'status',
				'video',
				'audio',
				'chat',
			)
		);
function disqus_embed($disqus_shortname) {
    global $post;
    wp_enqueue_script('disqus_embed', 'http://'.$disqus_shortname.'.disqus.com/embed.js');
    echo '<div id="disqus_thread"></div>
    <script type="text/javascript">
        var disqus_shortname = "'.$disqus_shortname.'";
        var disqus_title = "'.$post->post_title.'";
        var disqus_url = "'.get_permalink($post->ID).'";
        var disqus_identifier = "'.$disqus_shortname.'-'.$post->ID.'";
    </script>';
}

/*** Ajax подгрузка дат в форму */


function my_action_formajax() {
	$formid = $_POST['formid'];

			$service = get_field( 'serice', $formid );
			if( $service ) :
				echo "<p>Выберите дату:</p><select name='Дата'>";
				foreach( $service as $adv ) {
					echo "<option>". $adv['serice_data'] . "</option>";
				}
				echo "</select>";
			else :
			endif ;

	// выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
	wp_die();
}

add_action('wp_ajax_formajax', 'my_action_formajax');
add_action('wp_ajax_nopriv_formajax', 'my_action_formajax');


/**
 * Хлебные крошки для WordPress (breadcrumbs)
 *
 * @param  string [$sep  = '']      Разделитель. По умолчанию ' » '
 * @param  array  [$l10n = array()] Для локализации. См. переменную $default_l10n.
 * @param  array  [$args = array()] Опции. См. переменную $def_args
 * @return string Выводит на экран HTML код
 *
 * version 3.3.1
 */
function kama_breadcrumbs( $sep = ' / ', $l10n = array(), $args = array() ){
	$kb = new Kama_Breadcrumbs;
	echo $kb->get_crumbs( $sep, $l10n, $args );
}

class Kama_Breadcrumbs {

	public $arg;

	// Локализация
	static $l10n = array(
		'home'       => 'Главная',
		'paged'      => 'Страница %d',
		'_404'       => 'Ошибка 404',
		'search'     => 'Результаты поиска по запросу - <b>%s</b>',
		'author'     => 'Архив автора: <b>%s</b>',
		'year'       => 'Архив за <b>%d</b> год',
		'month'      => 'Архив за: <b>%s</b>',
		'day'        => '',
		'attachment' => 'Медиа: %s',
		'tag'        => 'Записи по метке: <b>%s</b>',
		'tax_tag'    => '%1$s из "%2$s" по тегу: <b>%3$s</b>',
		// tax_tag выведет: 'тип_записи из "название_таксы" по тегу: имя_термина'.
		// Если нужны отдельные холдеры, например только имя термина, пишем так: 'записи по тегу: %3$s'
	);

	// Параметры по умолчанию
	static $args = array(
		'on_front_page'   => true,  // выводить крошки на главной странице
		'show_post_title' => true,  // показывать ли название записи в конце (последний элемент). Для записей, страниц, вложений
		'show_term_title' => true,  // показывать ли название элемента таксономии в конце (последний элемент). Для меток, рубрик и других такс
		'title_patt'      => '<span class="kb_title">%s</span>', // шаблон для последнего заголовка. Если включено: show_post_title или show_term_title
		'last_sep'        => true,  // показывать последний разделитель, когда заголовок в конце не отображается
		'markup'          => 'schema.org', // 'markup' - микроразметка. Может быть: 'rdf.data-vocabulary.org', 'schema.org', '' - без микроразметки
										   // или можно указать свой массив разметки:
										   // array( 'wrappatt'=>'<div class="kama_breadcrumbs">%s</div>', 'linkpatt'=>'<a href="%s">%s</a>', 'sep_after'=>'', )
		'priority_tax'    => array('category'), // приоритетные таксономии, нужно когда запись в нескольких таксах
		'priority_terms'  => array(), // 'priority_terms' - приоритетные элементы таксономий, когда запись находится в нескольких элементах одной таксы одновременно.
									  // Например: array( 'category'=>array(45,'term_name'), 'tax_name'=>array(1,2,'name') )
									  // 'category' - такса для которой указываются приор. элементы: 45 - ID термина и 'term_name' - ярлык.
									  // порядок 45 и 'term_name' имеет значение: чем раньше тем важнее. Все указанные термины важнее неуказанных...
		'nofollow' => false, // добавлять rel=nofollow к ссылкам?

		// служебные
		'sep'             => '',
		'linkpatt'        => '',
		'pg_end'          => '',
	);

	function get_crumbs( $sep, $l10n, $args ){
		global $post, $wp_query, $wp_post_types;

		self::$args['sep'] = $sep;

		// Фильтрует дефолты и сливает
		$loc = (object) array_merge( apply_filters('kama_breadcrumbs_default_loc', self::$l10n ), $l10n );
		$arg = (object) array_merge( apply_filters('kama_breadcrumbs_default_args', self::$args ), $args );

		$arg->sep = '<span class="kb_sep">'. $arg->sep .'</span>'; // дополним

		// упростим
		$sep = & $arg->sep;
		$this->arg = & $arg;

		// микроразметка ---
		if(1){
			$mark = & $arg->markup;

			// Разметка по умолчанию
			if( ! $mark ) $mark = array(
				'wrappatt'  => '<div class="kama_breadcrumbs">%s</div>',
				'linkpatt'  => '<a href="%s">%s</a>',
				'sep_after' => '',
			);
			// rdf
			elseif( $mark === 'rdf.data-vocabulary.org' ) $mark = array(
				'wrappatt'   => '<div class="kama_breadcrumbs" prefix="v: http://rdf.data-vocabulary.org/#">%s</div>',
				'linkpatt'   => '<span typeof="v:Breadcrumb"><a href="%s" rel="v:url" property="v:title">%s</a>',
				'sep_after'  => '</span>', // закрываем span после разделителя!
			);
			// schema.org
			elseif( $mark === 'schema.org' ) $mark = array(
				'wrappatt'   => '<div class="kama_breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">%s</div>',
				'linkpatt'   => '<span itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem"><a href="%s" itemprop="item"><span itemprop="name">%s</span></a></span>',
				'sep_after'  => '',
			);

			elseif( ! is_array($mark) )
				die( __CLASS__ .': "markup" parameter must be array...');

			$wrappatt  = $mark['wrappatt'];
			$arg->linkpatt  = $arg->nofollow ? str_replace('<a ','<a rel="nofollow"', $mark['linkpatt']) : $mark['linkpatt'];
			$arg->sep      .= $mark['sep_after']."\n";
		}

		$linkpatt = $arg->linkpatt; // упростим

		$q_obj = get_queried_object();

		// может это архив пустой таксы?
		$ptype = null;
		if( empty($post) ){
			if( isset($q_obj->taxonomy) )
				$ptype = & $wp_post_types[ get_taxonomy($q_obj->taxonomy)->object_type[0] ];
		}
		else $ptype = & $wp_post_types[ $post->post_type ];

		// paged
		$arg->pg_end = '';
		if( ($paged_num = get_query_var('paged')) || ($paged_num = get_query_var('page')) )
			$arg->pg_end = $sep . sprintf( $loc->paged, (int) $paged_num );

		$pg_end = $arg->pg_end; // упростим

		// ну, с богом...
		$out = '';

		if( is_front_page() ){
			return $arg->on_front_page ? sprintf( $wrappatt, ( $paged_num ? sprintf($linkpatt, get_home_url(), $loc->home) . $pg_end : $loc->home ) ) : '';
		}
		// страница записей, когда для главной установлена отдельная страница.
		elseif( is_home() ) {
			$out = $paged_num ? ( sprintf( $linkpatt, get_permalink($q_obj), esc_html($q_obj->post_title) ) . $pg_end ) : esc_html($q_obj->post_title);
		}
		elseif( is_404() ){
			$out = $loc->_404;
		}
		elseif( is_search() ){
			$out = sprintf( $loc->search, esc_html( $GLOBALS['s'] ) );
		}
		elseif( is_author() ){
			$tit = sprintf( $loc->author, esc_html($q_obj->display_name) );
			$out = ( $paged_num ? sprintf( $linkpatt, get_author_posts_url( $q_obj->ID, $q_obj->user_nicename ) . $pg_end, $tit ) : $tit );
		}
		elseif( is_year() || is_month() || is_day() ){
			$y_url  = get_year_link( $year = get_the_time('Y') );

			if( is_year() ){
				$tit = sprintf( $loc->year, $year );
				$out = ( $paged_num ? sprintf($linkpatt, $y_url, $tit) . $pg_end : $tit );
			}
			// month day
			else {
				$y_link = sprintf( $linkpatt, $y_url, $year);
				$m_url  = get_month_link( $year, get_the_time('m') );

				if( is_month() ){
					$tit = sprintf( $loc->month, get_the_time('F') );
					$out = $y_link . $sep . ( $paged_num ? sprintf( $linkpatt, $m_url, $tit ) . $pg_end : $tit );
				}
				elseif( is_day() ){
					$m_link = sprintf( $linkpatt, $m_url, get_the_time('F'));
					$out = $y_link . $sep . $m_link . $sep . get_the_time('l');
				}
			}
		}
		// Древовидные записи
		elseif( is_singular() && $ptype->hierarchical ){
			$out = $this->_add_title( $this->_page_crumbs($post), $post );
		}
		// Таксы, плоские записи и вложения
		else {
			$term = $q_obj; // таксономии

			// определяем термин для записей (включая вложения attachments)
			if( is_singular() ){
				// изменим $post, чтобы определить термин родителя вложения
				if( is_attachment() && $post->post_parent ){
					$save_post = $post; // сохраним
					$post = get_post($post->post_parent);
				}

				// учитывает если вложения прикрепляются к таксам древовидным - все бывает :)
				$taxonomies = get_object_taxonomies( $post->post_type );
				// оставим только древовидные и публичные, мало ли...
				$taxonomies = array_intersect( $taxonomies, get_taxonomies( array('hierarchical' => true, 'public' => true) ) );

				if( $taxonomies ){
					// сортируем по приоритету
					if( ! empty($arg->priority_tax) ){
						usort( $taxonomies, function($a,$b)use($arg){
							$a_index = array_search($a, $arg->priority_tax);
							if( $a_index === false ) $a_index = 9999999;

							$b_index = array_search($b, $arg->priority_tax);
							if( $b_index === false ) $b_index = 9999999;

							return ( $b_index === $a_index ) ? 0 : ( $b_index < $a_index ? 1 : -1 ); // меньше индекс - выше
						} );
					}

					// пробуем получить термины, в порядке приоритета такс
					foreach( $taxonomies as $taxname ){
						if( $terms = get_the_terms( $post->ID, $taxname ) ){
							// проверим приоритетные термины для таксы
							$prior_terms = & $arg->priority_terms[ $taxname ];
							if( $prior_terms && count($terms) > 2 ){
								foreach( (array) $prior_terms as $term_id ){
									$filter_field = is_numeric($term_id) ? 'term_id' : 'slug';
									$_terms = wp_list_filter( $terms, array($filter_field=>$term_id) );

									if( $_terms ){
										$term = array_shift( $_terms );
										break;
									}
								}
							}
							else
								$term = array_shift( $terms );

							break;
						}
					}
				}

				if( isset($save_post) ) $post = $save_post; // вернем обратно (для вложений)
			}

			// вывод

			// все виды записей с терминами или термины
			if( $term && isset($term->term_id) ){
				$term = apply_filters('kama_breadcrumbs_term', $term );

				// attachment
				if( is_attachment() ){
					if( ! $post->post_parent )
						$out = sprintf( $loc->attachment, esc_html($post->post_title) );
					else {
						if( ! $out = apply_filters('attachment_tax_crumbs', '', $term, $this ) ){
							$_crumbs    = $this->_tax_crumbs( $term, 'self' );
							$parent_tit = sprintf( $linkpatt, get_permalink($post->post_parent), get_the_title($post->post_parent) );
							$_out = implode( $sep, array($_crumbs, $parent_tit) );
							$out = $this->_add_title( $_out, $post );
						}
					}
				}
				// single
				elseif( is_single() ){
					if( ! $out = apply_filters('post_tax_crumbs', '', $term, $this ) ){
						$out = $this->_add_title( $_crumbs, $post );
					}
				}
				// не древовидная такса (метки)
				elseif( ! is_taxonomy_hierarchical($term->taxonomy) ){
					// метка
					if( is_tag() )
						$out = $this->_add_title('', $term, sprintf( $loc->tag, esc_html($term->name) ) );
					// такса
					elseif( is_tax() ){
						$post_label = $ptype->labels->name;
						$tax_label = $GLOBALS['wp_taxonomies'][ $term->taxonomy ]->labels->name;
						$out = $this->_add_title('', $term, sprintf( $loc->tax_tag, $post_label, $tax_label, esc_html($term->name) ) );
					}
				}
				// древовидная такса (рибрики)
				else {
					if( ! $out = apply_filters('term_tax_crumbs', '', $term, $this ) ){
						$_crumbs = $this->_tax_crumbs( $term, 'parent' );
						$out = $this->_add_title( $_crumbs, $term, esc_html($term->name) );                     
					}
				}
			}
			// влоежния от записи без терминов
			elseif( is_attachment() ){
				$parent = get_post($post->post_parent);
				$parent_link = sprintf( $linkpatt, get_permalink($parent), esc_html($parent->post_title) );
				$_out = $parent_link;

				// вложение от записи древовидного типа записи
				if( is_post_type_hierarchical($parent->post_type) ){
					$parent_crumbs = $this->_page_crumbs($parent);
					$_out = implode( $sep, array( $parent_crumbs, $parent_link ) );
				}

				$out = $this->_add_title( $_out, $post );
			}
			// записи без терминов
			elseif( is_singular() ){
				$out = $this->_add_title( '', $post );
			}
		}

		// замена ссылки на архивную страницу для типа записи
		$home_after = apply_filters('kama_breadcrumbs_home_after', '', $linkpatt, $sep, $ptype );

		if( '' === $home_after ){
			// Ссылка на архивную страницу типа записи для: отдельных страниц этого типа; архивов этого типа; таксономий связанных с этим типом.
			if( $ptype && $ptype->has_archive && ! in_array( $ptype->name, array('post','page','attachment') )
				&& ( is_post_type_archive() || is_singular() || (is_tax() && in_array($term->taxonomy, $ptype->taxonomies)) )
			){
				$pt_title = $ptype->labels->name;

				// первая страница архива типа записи
				if( is_post_type_archive() && ! $paged_num )
					$home_after = $pt_title;
				// singular, paged post_type_archive, tax
				else{
					$home_after = sprintf( $linkpatt, get_post_type_archive_link($ptype->name), $pt_title );

					$home_after .= ( ($paged_num && ! is_tax()) ? $pg_end : $sep ); // пагинация
				}
			}
		}

		$before_out = sprintf( $linkpatt, home_url(), $loc->home ) . ( $home_after ? $sep.$home_after : ($out ? $sep : '') );

		$out = apply_filters('kama_breadcrumbs_pre_out', $out, $sep, $loc, $arg );

		$out = sprintf( $wrappatt, $before_out . $out );

		return apply_filters('kama_breadcrumbs', $out, $sep, $loc, $arg );
	}

	function _page_crumbs( $post ){
		$parent = $post->post_parent;

		$crumbs = array();
		while( $parent ){
			$page = get_post( $parent );
			$crumbs[] = sprintf( $this->arg->linkpatt, get_permalink($page), esc_html($page->post_title) );
			$parent = $page->post_parent;
		}

		return implode( $this->arg->sep, array_reverse($crumbs) );
	}

	function _tax_crumbs( $term, $start_from = 'self' ){
		$termlinks = array();
		$term_id = ($start_from === 'parent') ? $term->parent : $term->term_id;
		while( $term_id ){
			$term       = get_term( $term_id, $term->taxonomy );
			$termlinks[] = sprintf( $this->arg->linkpatt, get_term_link($term), esc_html($term->name) );
			$term_id    = $term->parent;
		}

		if( $termlinks )
			return implode( $this->arg->sep, array_reverse($termlinks) ) /*. $this->arg->sep*/;
		return '';
	}

	// добалвяет заголовок к переданному тексту, с учетом всех опций. Добавляет разделитель в начало, если надо.
	function _add_title( $add_to, $obj, $term_title = '' ){
		$arg = & $this->arg; // упростим...
		$title = $term_title ? $term_title : esc_html($obj->post_title); // $term_title чиститься отдельно, теги моугт быть...
		$show_title = $term_title ? $arg->show_term_title : $arg->show_post_title;

		// пагинация
		if( $arg->pg_end ){
			$link = $term_title ? get_term_link($obj) : get_permalink($obj);
			$add_to .= ($add_to ? $arg->sep : '') . sprintf( $arg->linkpatt, $link, $title ) . $arg->pg_end;
		}
		// дополняем - ставим sep
		elseif( $add_to ){
			if( $show_title )
				$add_to .= $arg->sep . sprintf( $arg->title_patt, $title );
			elseif( $arg->last_sep )
				$add_to .= $arg->sep;
		}
		// sep будет потом...
		elseif( $show_title )
			$add_to = sprintf( $arg->title_patt, $title );

		return $add_to;
	}

}

add_filter( 'the_seo_framework_pro_add_title', 'my_service_title', 10, 3 );
/**
 * Alters the title on special conditions.
 *
 * @param string $title The current title.
 * @param array $args The title generation arguments.
 * @param bool $escape Whether the title is being escaped.
 * @return string Title. Does not need to be escaped.
 */
function my_service_title( $title= '', $args = array(), $escape = true ) {

    /** 
     * @link https://developer.wordpress.org/reference/functions/is_post_type_archive/
     */
    if ( is_post_type_archive( 'service' ) ) {
        $title = post_type_archive_title( '', false );
    }

    return $title;
}

add_filter( 'the_seo_framework_pro_add_title', 'my_review_title', 10, 3 );
/**
 * Alters the title on special conditions.
 *
 * @param string $title The current title.
 * @param array $args The title generation arguments.
 * @param bool $escape Whether the title is being escaped.
 * @return string Title. Does not need to be escaped.
 */
function my_review_title( $title= '', $args = array(), $escape = true ) {

    /** 
     * @link https://developer.wordpress.org/reference/functions/is_post_type_archive/
     */
    if ( is_post_type_archive( 'review' ) ) {
        $title = post_type_archive_title( '', false );
    }

    return $title;
}

add_filter( 'the_content', 'wpautop');


add_filter( 'cmb_meta_boxes', 'cmb_sample_metaboxes' );

function cmb_sample_metaboxes( array $meta_boxes ) {
	
	$meta_boxes[] = array(
		'title'    => 'Месяц похода',
		'pages'    => 'service',
		'id'                  => 'months',
		'name'                => 'Введите месяц',
		'type'                => 'text',
		'repeatable'          => true
	);

	return $meta_boxes; 

}


/**
 * Обрезка текста (excerpt). Шоткоды вырезаются. Минимальное значение maxchar может быть 22.
 *
 * @param string/array $args Параметры.
 *
 * @return string HTML
 *
 * @ver 2.6.4
 */
function kama_excerpt( $args = '' ){
	global $post;

	if( is_string($args) )
		parse_str( $args, $args );

	$rg = (object) array_merge( array(
		'maxchar'   => 350,   // Макс. количество символов.
		'text'      => '',    // Какой текст обрезать (по умолчанию post_excerpt, если нет post_content.
							  // Если в тексте есть `<!--more-->`, то `maxchar` игнорируется и берется все до <!--more--> вместе с HTML.
		'autop'     => true,  // Заменить переносы строк на <p> и <br> или нет?
		'save_tags' => '',    // Теги, которые нужно оставить в тексте, например '<strong><b><a>'.
		'more_text' => 'Читать дальше...', // Текст ссылки `Читать дальше`.
	), $args );

	$rg = apply_filters( 'kama_excerpt_args', $rg );

	if( ! $rg->text )
		$rg->text = $post->post_excerpt ?: $post->post_content;

	$text = $rg->text;
	$text = preg_replace( '~\[([a-z0-9_-]+)[^\]]*\](?!\().*?\[/\1\]~is', '', $text ); // убираем блочные шорткоды: [foo]some data[/foo]. Учитывает markdown
	$text = preg_replace( '~\[/?[^\]]*\](?!\()~', '', $text ); // убираем шоткоды: [singlepic id=3]. Учитывает markdown
	$text = trim( $text );

	// <!--more-->
	if( strpos( $text, '<!--more-->') ){
		preg_match('/(.*)<!--more-->/s', $text, $mm );

		$text = trim( $mm[1] );

		$text_append = ' <a href="'. get_permalink( $post ) .'#more-'. $post->ID .'">'. $rg->more_text .'</a>';
	}
	// text, excerpt, content
	else {
		$text = trim( strip_tags($text, $rg->save_tags) );

		// Обрезаем
		if( mb_strlen($text) > $rg->maxchar ){
			$text = mb_substr( $text, 0, $rg->maxchar );
			$text = preg_replace( '~(.*)\s[^\s]*$~s', '\\1...', $text ); // убираем последнее слово, оно 99% неполное
		}
	}

	// Сохраняем переносы строк. Упрощенный аналог wpautop()
	if( $rg->autop ){
		$text = preg_replace(
			array("/\r/", "/\n{2,}/", "/\n/",   '~</p><br ?/?>~'),
			array('',     '</p><p>',  '<br />', '</p>'),
			$text
		);
	}

	$text = apply_filters( 'kama_excerpt', $text, $rg );

	if( isset($text_append) )
		$text .= $text_append;

	return ( $rg->autop && $text ) ? "<p>$text</p>" : $text;
}
function comment_support_for_my_custom_post_type() {
     add_post_type_support( 'my_post_type', 'comments' );
}
add_action( 'init', 'comment_support_for_my_custom_post_type' );
//Маска для формы

add_filter( 'the_content', 'do_blocks', 9 );
add_filter( 'the_content', 'wptexturize' );
add_filter( 'the_content', 'wpautop' );

add_filter( 'the_content', 'do_shortcode', 10 );

?>