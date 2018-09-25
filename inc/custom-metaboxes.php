<?php
add_action( 'add_meta_boxes', 'add_layouts_metaboxes' );
function add_layouts_metaboxes() { global $post,$gParseOpen;
	add_meta_box('wpt_playout_options', 'Цена', 'wpt_playout_options', array('project'), 'side', 'low');	
}

function wpt_playout_options(){ GLOBAL $post;
		$price = get_post_meta( $post->ID, 'price', true );
		echo '<input type="text"  title="Цена квартир" name="price" value="'.$price.'" class="widefat2" placeholder="Від 17000 грн м2" />';
}

function wpt_save_layouts_meta($post_id, $post) {
	if ( !current_user_can( 'edit_post', $post->ID )) return $post->ID;
	
	$layouts_meta['price'] = $_POST['price'];
	
	foreach ($layouts_meta as $key => $value) {
		update_post_meta($post->ID, $key, $value);
	}
}

add_action('save_post', 'wpt_save_layouts_meta', 1, 2);