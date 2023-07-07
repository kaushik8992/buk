<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array(  ) );
        wp_enqueue_style( 'owl-carousel-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css', array(  ) );
        wp_enqueue_style( 'owl-theme-default-min-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css', array(  ) );

    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

defined( 'CHLD_THM_CFG_IGNORE_PARENT' ) or define( 'CHLD_THM_CFG_IGNORE_PARENT', TRUE );

// END ENQUEUE PARENT ACTION



//enqueues our external font awesome stylesheet
add_action( 'wp_enqueue_scripts', 'wpflyers_enqueue_styles' );
function wpflyers_enqueue_styles() 
{
// wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );            
wp_enqueue_script( 'custom-jquery', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js', array('jquery'), '1.0.0', true );  
wp_enqueue_script( 'owl-carousel-min-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array(), '2.3.4', true ); 
wp_enqueue_script( 'child-custom-js', get_stylesheet_directory_uri()  . '/custom.js', array(), '1.0.0', true ); 
}

if ( ! function_exists( 'product_table' ) ) {

// Register Custom Taxonomy
function product_table() {

    $labels = array(
        'name'                       => _x( 'Tables', 'Taxonomy General Name', 'text_domain' ),
        'singular_name'              => _x( 'Table', 'Taxonomy Singular Name', 'text_domain' ),
        'menu_name'                  => __( 'Table', 'text_domain' ),
        'all_items'                  => __( 'All Tables', 'text_domain' ),
        'parent_item'                => __( 'Parent Table', 'text_domain' ),
        'parent_item_colon'          => __( 'Parent Table:', 'text_domain' ),
        'new_item_name'              => __( 'New Item Name', 'text_domain' ),
        'add_new_item'               => __( 'Add New Table', 'text_domain' ),
        'edit_item'                  => __( 'Edit Table', 'text_domain' ),
        'update_item'                => __( 'Update Table', 'text_domain' ),
        'view_item'                  => __( 'View Table', 'text_domain' ),
        'separate_items_with_commas' => __( 'Separate items with commas', 'text_domain' ),
        'add_or_remove_items'        => __( 'Add or remove Table', 'text_domain' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'text_domain' ),
        'popular_items'              => __( 'Popular Tables', 'text_domain' ),
        'search_items'               => __( 'Search Items', 'text_domain' ),
        'not_found'                  => __( 'Not Found', 'text_domain' ),
        'no_terms'                   => __( 'No items', 'text_domain' ),
        'items_list'                 => __( 'Items list', 'text_domain' ),
        'items_list_navigation'      => __( 'Items list navigation', 'text_domain' ),
    );
    $args = array(
        'labels'                     => $labels,
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
    );
    register_taxonomy( 'product_table', array( 'product' ), $args );

}
add_action( 'init', 'product_table', 0 );

}

function table_product_all(){
$terms = get_terms( array(
    'taxonomy'   => 'product_table',
    'hide_empty' => false,
) );
    $table_all .= '<h3 class="table_title">Tables, all the products</h3>';
    $table_all .= '<div class="row">';
    $table_all .= '<div class="table_all">';

    foreach($terms as $term){

        $table_all .= '<div class="table_count">';
        $table_all .= '<a href="'.home_url().'/product_table/'.$term->slug.'">';
        $table_all .= '<div class="table_image">';
        $table_all .= '<img src="'.get_field('image','term_'.$term->term_id).'" />';
        $table_all .= '</div>';
        $table_all .= '<div class="table_title">';
        $table_all .= '<h4>'.$term->name.'</h4>';
        $table_all .= '</div>';
        $table_all .= '</a>';
        $table_all .= '</div>';
    }
    $table_all .= '</div></div>';
    return $table_all;
}
add_shortcode('table_all', 'table_product_all');


function table_product_selected(){

    if ( is_tax( array('product_cat') ) ) {
        $terms_id = get_queried_object()->term_id;
        $relation = get_field('table_selection','term_'.$terms_id);
        $table_all .= '<h3 class="table_title">Tables, all the products</h3>';
        $table_all .= '<div class="row">';
        $table_all .= '<div class="table_all">';
        foreach($relation as $term){

            $table_all .= '<div class="table_count">';
            $table_all .= '<a href="'.home_url().'/product_table/'.get_term( $term )->slug.'">';
            $table_all .= '<div class="table_image">';
            $table_all .= '<img src="'.get_field('image','term_'.$term).'" />';
            $table_all .= '</div>';
            $table_all .= '<div class="table_title">';
            $table_all .= '<h4>'.get_term( $term )->name.'</h4>';
            $table_all .= '</div>';
            $table_all .= '</a>';
            $table_all .= '</div>';

        }
        $table_all .= '</div></div>';
    }else{
        $terms_id = get_queried_object()->term_id;
        $relation = get_terms( array(
            'taxonomy'   => 'product_table',
            'hide_empty' => false,
            'exclude'  => $terms_id,
        ) );
        $table_all .= '<h3 class="table_title">Tables, all the products</h3>';
        $table_all .= '<div class="row">';
        $table_all .= '<div class="table_all">';
        foreach($relation as $term){
            $table_all .= '<div class="table_count">';
            $table_all .= '<a href="'.home_url().'/product_table/'.$term->slug.'">';
            $table_all .= '<div class="table_image">';
            $table_all .= '<img src="'.get_field('image','term_'.$term->term_id).'" />';
            $table_all .= '</div>';
            $table_all .= '<div class="table_title">';
            $table_all .= '<h4>'.$term->name.'</h4>';
            $table_all .= '</div>';
            $table_all .= '</a>';
            $table_all .= '</div>';            
        }
        $table_all .= '</div></div>';
       

    }
    return $table_all;


}
add_shortcode('table_selected', 'table_product_selected');