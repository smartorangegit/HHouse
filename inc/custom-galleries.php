<?php
function add_logo() { global $post;
		
	function Logo($LANG)
	{ 
		global $post;	
		echo '<div class="translate_img'.$LANG.'">';
		$image_id = get_post_meta($post->ID, '_logo'.$LANG, true);
		if( $image_id > 0 ){
			$thumbnail = wp_get_attachment_image( $image_id, 'medium' );
			echo '<div class="image_thumb">'.$thumbnail.'</div>';	
		} else {
			echo '<div class="image_thumb"></div>';	
		}
		echo '<input type="hidden" name="_logo'.$LANG.'" value="'.$image_id.'" class="widefat2">';
		echo '<div class="gallery-line" style="text-align:center;">
				<p class="gallery-line" style="text-align:center;">Если Вы добавили не четное число объектов, один из них будет продублирован!</p>
				<button type="button" title="Добавить логотип для проекта" class="set_image button button-primary button-large">Логотип проекта</button>';
		if( $image_id > 0 )	{				
			echo ' <button type="button" class="del_image button button-default button-large">X</button>';
		}
			echo '</div>';	
				
		echo '</div>';
	}
	
	Logo('ua');
}

/**
 *  @brief Додавання додаткового поля з фото
 */
function metabox_gallery() {
	
  //  add_meta_box( 'add_logo', 'Логотип', 'add_logo', array('news'), 'side', 'low' );
    add_meta_box( 'gallery_block3', __( 'Слайдер объекта', 'perfect' ), 'gallery_block3', array('news'), 'normal', 'high' );

}


function gallery_block3(){
    global $post;
    $gallery_block = get_post_meta( $post->ID,'gallery_block3',true );
    echo '<input type="hidden" name="gallery_block3" value="'.$gallery_block.'">';
    echo '<ul class="gallery-line gallery-sortable">'.show_thumb_gallery($gallery_block).'</ul>';
    echo '<div class="gallery-line"><button type="button" id="set_gallery_images3" class="set_gallery_images button button-primary button-large">'.__('Add images','perfect').' для десктопа  </button></div>';

    return true;
}


function show_thumb_gallery($ids = array()){
    if( isset($_POST['ids']) ){
        $ids = $_POST['ids'];
    }
    $images = '';
    $ids_array = explode(',', $ids);
    foreach( $ids_array as $id ){
        if( $id != '' ){
            $images .= '<li data-id="'.$id.'">'.wp_get_attachment_image( $id, array(100,100), true).'<a href="'.$id.'" class="del">×</a></li>';
        }
    }
    if( isset($_POST['ids']) ){
        echo $images;
        die();

    } else {
        return $images;
    }
}

add_action( 'add_meta_boxes', 'metabox_gallery' );



function gallery_styles_scripts_admin() {
	wp_localize_script( 'jquery', 'var_media_win', array(
		'title'  => 'Добавить изображения в галерею',
		'button' => 'Добавить изображения'	
	));
	//wp_enqueue_style( 'main', get_stylesheet_directory_uri() . 'styles/css/style.css', array('reset'), null, 'all' );
}
add_action( 'admin_enqueue_scripts', 'gallery_styles_scripts_admin' );

/**
 *  @brief Збереження галерей
 */
function metabox_gallery_update( $post_id ) { 
	if ( defined('DOING_AUTOSAVE') && DOING_AUTOSAVE  ) return false;
	if ( !current_user_can('edit_post', $post_id) ) return false;

    if( isset( $_POST['gallery_block3'] ) ){
        if( $_POST['gallery_block3'][0] == ',' ){
            $_POST['gallery_block3'] = substr($_POST['gallery_block3'], 1);
        }
        update_post_meta( $post_id, 'gallery_block3', $_POST['gallery_block3'] );
    } else {
        delete_post_meta( $post_id, 'gallery_block3');
    }
	
	$n='ua';
		
	if( isset( $_POST['_logoua'] ) ){

		if( $_POST['_logo'.$n][0] == ',' ){
			$_POST['_logo'.$n] = substr($_POST['_logo'.$n], 1);
		}
		update_post_meta( $post_id, '_logo'.$n, $_POST['_logo'.$n] );
	} else {
		delete_post_meta( $post_id, '_logo'.$n);
	}

	return $post_id;
}



add_action('save_post', 'metabox_gallery_update', 0);
