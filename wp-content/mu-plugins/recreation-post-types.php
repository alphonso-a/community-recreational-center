<?php 
function recreation_post_types(){
        register_post_type('facility',array(
            'supports' => array('title', 'editor','excerpt', 'comments', 'thumbnail','custom-fields'),
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
            //'capability_type' => 'event',
            //'map_meta_cap'=> true,
            'supports' => array('title', 'editor','excerpt', 'comments', 'thumbnail','custom-fields'),
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
            'supports' => array('title', 'editor','excerpt', 'comments', 'thumbnail','custom-fields'),
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
        register_post_type('game',array(
            'supports' => array('title', 'editor','excerpt', 'comments', 'thumbnail','custom-fields'),
            'rewrite'=> array('slug' => 'games' ),
            'has_archive' => true,
            'public' => true,
            'description' => 'Holds game info', 
            'labels' => array(
                'name' => "Games",
                'add_new_item' => 'Add New Game',
                'edit_item' => 'Edit Game',
                'all_items' => 'All Games',
                'singular_name' => "Game"
            ),
            'menu_icon' => 'dashicons-games'
        ));
}
 add_action('init', 'recreation_post_types');
?>