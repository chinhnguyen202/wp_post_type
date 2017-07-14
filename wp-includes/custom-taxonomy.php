<?php
/**
 * Created by PhpStorm.
 * User: dev05
 * Date: 7/13/17
 * Time: 5:04 PM
 */

	add_action('init','create_events_cat');
function create_events_cat() {
	register_taxonomy( 'events_category', 'event', array(
		'label' => 'Events Category',
		'labels' => array(
				'name' => __('Events Category'),
				'singular_name' => __('Event Category'),
				'add_new_item' => __('Add new Event Category'),
				'new_item' => __('New Event Category'),
				'add_new' => __('Add Event Category'),
				'edit_item' => __('Edit Event Category')
		),
		'public' => true,
		'hierarchical' => true
		)
	);
}

