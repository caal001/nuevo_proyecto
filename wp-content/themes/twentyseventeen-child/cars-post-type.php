<?php

class cars_post_type {

    public function __construct() {
		add_action('init', [$this, 'set_cars_post']);
        add_action( 'init', [$this, 'create_taxonomy'], 0 );
        add_action( 'add_meta_boxes', [$this, 'create_meta_box']); 
        add_action( 'save_post', [$this, 'save_editor']);        
       
    }

    public function set_cars_post() {

        $labels = array(
            'name' => _x('Cars Spotlight', 'Post Type General Name', ' car-theme'),
			'singular_name' => _x('car', 'Post Type Singular Name', ' car-theme'),
			'menu_name' => __('Cars', ' car-theme'),
			'name_admin_bar' => __('Cars', ' car-theme'),
			'archives' => __('Cars', ' car-theme'),
			'attributes' => __('car Attributes', ' car-theme'),
			'all_items' => __('All Cars', ' car-theme'),
			'add_car_item' => __('Add car car', ' car-theme'),
			'add_car' => __('Add car', ' car-theme'),
			'car_item' => __('car car', ' car-theme'),
			'edit_item' => __('Edit car', ' car-theme'),
			'update_item' => __('Update car', ' car-theme'),
			'view_item' => __('View car', ' car-theme'),
			'view_items' => __('View Cars', ' car-theme'),
			'featured_image' => __('Featured Image', ' car-theme'),
			'set_featured_image' => __('Set Featured image', ' car-theme'),
			'remove_featured_image' => __('Remove featured image', ' car-theme'),
			'use_featured_image' => __('Use as featured image', ' car-theme'),
			'uploaded_to_this_item' => __('Uploaded to this car', ' car-theme'),
			'items_list' => __('Cars list', ' car-theme'),
			'items_list_navigation' => __('Cars list navigation', ' car-theme'),
			'filter_items_list' => __('Filter Cars list', ' car-theme'),
        );
        $args = [
            'label' => __( 'Car', 'cars-theme' ),
            'description' => __( 'Cars', 'cars-theme' ),
            'labels' => $labels,
            'supports' => ['title', 'thumbnail','editor'],
            'taxonomies' => array( 'car' ),
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 6,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'rewrite' => ['slug' => 'cars', 'with_front' => false],
            'publicly_queryable' => true,
            'capability_type' => 'page',
            'taxonomies' => []
        ];

        register_post_type( 'car', $args );
    }

    public function create_taxonomy() {
    
        $labels = array(
            'name' => __( 'Mark' ),
            'singular_name' => __( 'Mark' ),
            'search_items' =>  __( 'search mark' ),
            'all_items' => __( 'all brands' ),
            'parent_item' => __( 'parent brand' ),
            'parent_item_colon' => __( 'parent brand:' ),
            'edit_item' => __( 'edit mark' ), 
            'update_item' => __( 'update mark' ),
            'add_new_item' => __( 'add new' ),
            'menu_name' => __( 'Marks' ),
        ); 	
    
    
        // Función WordPress para registrar la taxonomía
        register_taxonomy(
            'mark',
            array('car'), // Tipos de Post a los que asociaremos la taxonomía
            array(
                'hierarchical' => true, // True para taxonomías del tipo "Categoría" y false para el tipo "Etiquetas"
                'labels' => $labels, // La variable con las traducciones de las etiquetas
                'show_ui' => true,
                'show_admin_column' => true,
                'query_var' => true,
                'rewrite' => array( 'slug' => 'genero' ),
                'show_in_menu' => true,
                'show_admin_column' => true,
            )
        );
    
    }

    public function save_editor( $post_id ) {

        if(isset($_POST['car_post_editor']) && is_numeric($_POST['car_post_editor'])) {
            
            $editor_id = sanitize_text_field($_POST['car_post_editor']);

            update_post_meta($post_id, 'car_post_editor' , $editor_id);          
            
        }       

    
    }

    public function create_meta_box() {
        add_meta_box( 'car_editor', 'Post editor', [$this, 'meta_box'], ['car'] );
    }

    public function meta_box( $post ) {

        $user_query = new WP_User_Query([
            'role' => 'editor',
            'number' => '-1',
            'fields' => [
                'display_name' ,
                'ID',
            ],
        ]);
        
        $editors = $user_query->get_results();

        if( ! empty( $editors ) ) {
        ?> 

        <label for="post_editor">Editor:</label>
        <select name="car_post_editor" id="post_editor">
            <option> - Select one - </option>

            <?php
                foreach ($editors as $editor) {
                    echo '<option value="' .$editor->ID.'" '.selected(get_post_meta(get_the_ID(), "car_post_editor", true), $editor->ID, false).'>'.$editor->display_name.'</option>';
                }
            ?>

        </select>            
        <?php
    
        } else {
            echo '<p>No editor found</p>';
        }

        wp_reset_postdata();
    }
}

new cars_post_type();





