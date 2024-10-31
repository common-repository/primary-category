<?php

// Exit if accessed directly
if ( ! defined( 'ABSPATH' ) ) exit;

class Pri_Cat_Shortcode {
    
    public function __construct() {
        
        add_shortcode( 'primary-category', array( $this, 'pc_display' ) );
        
    }
    
    public function pc_display( $atts ) {
        
        // Set valid shortcode attributes
    	$a = shortcode_atts( array(
    		'name' => 'uncategorized',
            'post_type' => 'post'
    	), $atts );

        $name=sanitize_text_field($a['name']);
        $postype=sanitize_text_field($a['post_type']);
    
        // Retrieve the Category ID
        if ("post" == $postype) {
            // This could be avoided but for best performance...
            $catid = get_cat_ID($name);
        } else {
            $taxonomy_array = get_object_taxonomies( $postype );
            $catid = get_term_by( 'name',$name, $taxonomy_array[0] );
            $catid = $catid->term_id;
        }

        if (is_null($catid)) $catid=0;

    	// Set query args to display any post type with a primary category set to name attribute from shortcode
    	$pc_query_args = array( 
    		'post_type'     => $postype, 
    		'meta_key'      => 'primary_category', 
    		'meta_value'    => $catid
    	);

        $ret = '';
    
    	// Create custom query
    	$pc_query = new WP_Query( $pc_query_args );
    
    	// Loop through posts returned by query
    	if( $pc_query->have_posts() ) {
    		$ret .= '<ul>';
    		while ( $pc_query->have_posts() ) {
    
    			$pc_query->the_post();
    			$ret .= '<li><a href="' . get_permalink() . '">' . get_the_title() . '</a></li>';
    
    		}
    
    		$ret .= '</ul>';
    
    	} else {
    	    
    	    $ret .= __("Sorry, there are no posts or custom posts with that primary category.",'primary-category');
    	    
    	}
    
        return $ret;

    	// reset postdata
    	wp_reset_postdata();
        
    }
    
    
    
}