<?php
/*
Template Name: Розташування
*/
?>
<?
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(50));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);
$links = str_replace('<pre>','', $links);
//изображение (одиночное)
$img = (get_the_post_thumbnail_url($post->ID, 'full'));
?>
<?php get_header(); ?>

    <div class="container location_block wow fadeIn">

        <!-- header -->
        <div class="header">
            <div class="main_name">
                <div class="line_grey">
                    <div class="line_fanny"></div>
                </div>
                <div class="name_box">
                    <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
                    <span><h1><?the_title();?></h1></span>
                    <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
                </div>
            </div>
        </div>
        <!-- end header -->

        <div class="wrapper">
            <div class="line_link">
                <a href="/" class="link_active"><?php _e('breadcr-1','happy-house');?></a>&#8195;|&#8195;<span class="link_no_active"><?the_title();?></span>
            </div>
        </div>

        <div class="wrapper flex">
            <div class="location_item location_item_1 scaleimage">
                <div class="location_box">
                    <div class="location_box_inner">
                        <p><?=$links[0]?></p>
                    </div>
                </div>
                <img class="metro_logo" src="<?php bloginfo('template_url'); ?>/assets/img/location/metro.png" alt="Metro">
            </div>

            <div class="location_item location_item_2 scaleimage">
                <div class="location_box">
                    <div class="location_box_inner">
                        <p><?=$links[1]?></p>
                    </div>
                </div>
            </div>
        </div>
        <div class="location_map">
            <div id="map" ></div>
            <div class="wrapper">

                <ul class="location_list">
                    <li class="wow fadeInUp">
                        <span class="red"><?=$links[2]?></span><?=$links[3]?>
                        <p><?=$links[4]?></p>
                    </li>
                    <li class="wow fadeInUp">
                        <span class="red"><?=$links[5]?></span><?=$links[6]?>
                        <p><?=$links[7]?></p>
                    </li>
                    <li class="wow fadeInUp">
                        <span class="red"><?=$links[8]?></span><?=$links[9]?>
                        <p><?=$links[10]?></p>
                    </li>
                    <li class="wow fadeInUp">
                        <span class="red"><?=$links[11]?></span><?=$links[12]?>
                        <p><?=$links[13]?></p>
                    </li>
                    <li class="wow fadeInUp">
                        <span class="red"><?=$links[14]?></span><?=$links[15]?>
                        <p><?=$links[16]?></p>
                    </li>
                </ul>
            </div>

        </div>

        <!-- end wrapper -->
    </div>
    <!-- end section contacts -->
<?php get_template_part('includes/section-contacts'); ?>
    <!-- end section contacts -->

<?php get_footer();?>