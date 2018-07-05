<?php 

add_theme_support('post-thumbnails');
add_theme_support( 'customize-selective-refresh-widgets' );


/* Meu Logotipo Admin */

//custom admin login logo
function custom_login_logo() {
          echo '<style type="text/css">
            h1 a { background-image: url(' .get_bloginfo('template_directory').'/imagens/logo-cont-wp.png) !important;}
          </style>';
}
add_action('login_head', 'custom_login_logo');

add_filter( 'login_headerurl', 'bloglite_login_logo_link' );
function bloglite_login_logo_link() {
return home_url();
}

/* Fim Logotipo Admin */

/* widgets */
function contmatic_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Sidebar', 'contmatic' ),
		'id'            => 'sidebar-1',
		'description'   => __( 'Add widgets here to appear in your sidebar.', 'contmatic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 1', 'contmatic' ),
		'id'            => 'sidebar-2',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'contmatic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

	register_sidebar( array(
		'name'          => __( 'Content Bottom 2', 'contmatic' ),
		'id'            => 'sidebar-3',
		'description'   => __( 'Appears at the bottom of the content on posts and pages.', 'contmatic' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'contmatic_widgets_init' );
/* end widgets */



/* menu */
function registrar_menu_navegacao () {
register_nav_menu('header-menu', 'main-menu');
}
add_action('init', 'registrar_menu_navegacao');

require_once('wp_bootstrap_navwalker.php');
register_nav_menus( array(
    'primary' => __( 'Primary Menu', 'rafacastros' ),
) );
/* end menu */


/* title */
function contmatic_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() ) {
		return $title;
	}

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) ) {
		$title = "$title $sep $site_description";
	}

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
		$title = "$title $sep " . sprintf( __( 'Page %s', 'contmatic' ), max( $paged, $page ) );
	}

	return $title;
}
add_filter( 'wp_title', 'contmatic_wp_title', 10, 2 );
/*end title */



/* search */

//add_filter('wp_nav_menu','add_search_box', 10, 2);
//function add_search_box($items, $args) {
// 
//        ob_start();
//        get_search_form();
//        $searchform = ob_get_contents();
//        ob_end_clean();
// 
//        $items .= '<div class="menu-search">' . $searchform . '</div>';
// 
//    return $items;
//}

/* end search */

/*EXIBINDO O CAMPO ID DOS POSTs*/
function postsColumnsHeader($columns) {
    $columns['postID'] = __('ID');
    return $columns;
}
add_filter( 'manage_posts_columns', 'postsColumnsHeader' );
 
function postsColumnsRow($columnTitle, $postID){
    if($columnTitle == 'postID'){
        echo $postID;
    }
}
add_filter( 'manage_posts_custom_column', 'postsColumnsRow', 10, 2 );


/* Adiciona a "action" */
add_action( 'pre_get_posts', 'searchById' );

/**
 * Adiciona filtro através do ID
 *
 * @param WP_Query $query
 */
function searchById($query) {

    /* Captura o valor do parâmetro "S" da URL */
    $id = filter_input(INPUT_GET, 's');

    /**
     * Verifica se o usuário está "fora" do painel de admin
     * Verifica se é uma busca
     * Verifica se o valor informado é um valor numérico
     */
    if (!is_admin() && $query->is_search && is_numeric($id)) {

        /* Remove o parâmetro de busca da URL */
        $query->set('s', '');

        /* Filtra apenas as postagens com o ID passado */
        $query->set('post__in', [ (int)$id ]);
    }

}




