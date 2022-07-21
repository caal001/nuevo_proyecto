<?php

class news_post_type {

    public function __construct() {

		add_action('init', [$this, 'set_news_post']);
        add_action( 'add_meta_boxes', [$this, 'create_meta_box']); 
        add_action( 'save_post', [$this, 'save_editor']); 
                 
    }

    public function set_news_post() {

        $labels = array(
            'name' => _x('News Spotlight', 'Post Type General Name', ' news-theme'),
			'singular_name' => _x('news', 'Post Type Singular Name', ' news-theme'),
			'menu_name' => __('News', ' new-theme'),
			'name_admin_bar' => __('news', ' new-theme'),
			'archives' => __('News', ' new-theme'),
			'attributes' => __('new Attributes', ' new-theme'),
			'all_items' => __('All News', ' new-theme'),
			'add_new_item' => __('Add new new', ' new-theme'),
			'add_new' => __('Add new', ' new-theme'),
			'new_item' => __('new new', ' new-theme'),
			'edit_item' => __('Edit new', ' new-theme'),
			'update_item' => __('Update new', ' new-theme'),
			'view_item' => __('View new', ' new-theme'),
			'view_items' => __('View news', ' new-theme'),
			'featured_image' => __('Featured Image', ' new-theme'),
			'set_featured_image' => __('Set Featured image', ' new-theme'),
			'remove_featured_image' => __('Remove featured image', ' new-theme'),
			'use_featured_image' => __('Use as featured image', ' new-theme'),
			'uploaded_to_this_item' => __('Uploaded to this new', ' new-theme'),
			'items_list' => __('news list', ' new-theme'),
			'items_list_navigation' => __('news list navigation', ' new-theme'),
			'filter_items_list' => __('Filter news list', ' new-theme'),
        );
        $args = [
            'label' => __( 'New', 'news-theme' ),
            'description' => __( 'news', 'news-theme' ),
            'labels' => $labels,
            'supports' => ['title', 'thumbnail','editor'],
            'taxonomies' => array( 'new' ),
            'hierarchical' => true,
            'public' => true,
            'show_ui' => true,
            'show_in_menu' => true,
            'menu_position' => 7,
            'show_in_admin_bar' => true,
            'show_in_nav_menus' => true,
            'can_export' => true,
            'has_archive' => true,
            'exclude_from_search' => false,
            'rewrite' => ['slug' => 'news', 'with_front' => false],
            'publicly_queryable' => true,
            'capability_type' => 'page',
            'taxonomies' => []
        ];

        register_post_type( 'new', $args );

    }

    public function save_editor( $post_id ) {

        if(isset($_POST['rolled_size']) ) {       
            
            update_post_meta($post_id, 'rolled_size' , $_POST['rolled_size'] );             
        }  

        if(isset($_POST['doors']) ) {          
            
            update_post_meta($post_id, 'doors' , $_POST['doors']);             
        }  
        
        if(isset($_POST['horsepower'])) {
            
            update_post_meta($post_id, 'horsepower' , $_POST['horsepower']);             
        }

        if(isset($_POST['transmission'])) {
            
            update_post_meta($post_id, 'transmission' , $_POST['transmission']);             
        }

        if( isset( $_POST[ 'checkbox_check' ] ) ) {
            update_post_meta( $post_id, 'checkbox_check', 'yes');
        }
        else {
            update_post_meta( $post_id, 'checkbox_check', '' );
        }
      

    }

    public function create_meta_box() {
        add_meta_box( 'new_editor', 'SPECS', [$this, 'meta_box'], ['new'] );
    }

    public function meta_box( $post ) {
        
        ?> 
        <label for="rolled_size">rolled size:</label>
        <input type="text" id="rolled_size" name="rolled_size" value="<?php echo (get_post_meta($post->ID, "rolled_size", true))? get_post_meta($post->ID, "rolled_size", true) : ""; ?>"><br><br>


        <label for="doors">doors:</label>
        <input type="text" id="doors" name="doors" value="<?php echo (get_post_meta($post->ID, "doors", true))? get_post_meta($post->ID, "doors", true) : ""; ?>"><br><br>

        <label for="horsepower">horsepower:</label>
        <input type="text" id="horsepower" name="horsepower" value="<?php echo (get_post_meta($post->ID, "horsepower", true))? get_post_meta($post->ID, "horsepower", true) : ""; ?>"><br><br>

        <label for="transmission">transmission:</label>
        <input type="text" id="transmission" name="transmission"value="<?php echo (get_post_meta($post->ID, "transmission", true))? get_post_meta($post->ID, "transmission", true) : ""; ?>"><br><br>        
           

        
        <label for="_checkbox_check">
        <input type="checkbox" name="checkbox_check" id="checkbox_check" value="yes" <?php if ( get_post_meta($post->ID, "checkbox_check" ) ) checked(  get_post_meta($post->ID, "checkbox_check" )[0], 'yes' ); ?> />
        <?php _e( 'supercar', 'checkbox-meta' )?>
        </label>

        <?php
         
    }

    
}
new news_post_type();



