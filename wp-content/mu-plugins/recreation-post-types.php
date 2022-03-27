<?php 
function recreation_post_types(){
        register_post_type('facility',array(
            'supports' => array('title', 'editor','excerpt','thumbnail','custom-fields'),
            'rewrite'=> array('slug' => 'facilities' ),
            'has_archive' => true,
            'public' => true,
            'description' => 'Holds facility info!',  
            'labels' => array(
                'name' => "Facilities",
                'add_new_item' => 'Add New Facility',
                'edit_item' => 'Edit Facility',
                'all_items' => 'All Facilities',
                'singular_name' => "Facility"
            ),
            'menu_icon' => 'dashicons-building'
        ));
        register_post_type('event',array(
            'supports' => array('title', 'editor','excerpt','thumbnail','custom-fields'),
            'rewrite'=> array('slug' => 'events' ),
            'has_archive' => true,
            'public' => true,
            'description' => 'Holds event info', 
            'labels' => array(
                'name' => "Events",
                'add_new_item' => 'Add New Event',
                'edit_item' => 'Edit Event',
                'all_items' => 'All Events',
                'singular_name' => "Event"
            ),
            'menu_icon' => 'dashicons-calendar'
        ));
        register_post_type('routine',array(
            'supports' => array('title', 'editor','excerpt','thumbnail','custom-fields'),
            'rewrite'=> array('slug' => 'routines' ),
            'has_archive' => true,
            'public' => true,
            'description' => 'Holds individual routine info', 
            'labels' => array(
                'name' => "Routines",
                'add_new_item' => 'Add New Routine',
                'edit_item' => 'Edit Routine',
                'all_items' => 'All Routines',
                'singular_name' => "Routine"
            ),
            'menu_icon' => 'dashicons-universal-access'
        ));
}
 add_action('init', 'recreation_post_types');
?>