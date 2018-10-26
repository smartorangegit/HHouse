<?php
/*
Template Name: Вебкамера
*/
?>
<?
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(65));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);
$links = str_replace('<pre>','', $links);
//изображение (одиночное)
$img = (get_the_post_thumbnail_url($post->ID, 'full'));
?>
<?php get_header(); ?>

    <div class="container webcam_block wow fadeIn">

        <!-- header -->
        <div class="header">
            <div class="main_name">
                <div class="line_grey">
                    <div class="line_fanny"></div>
                </div>
                <div class="name_box">
                    <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
                    <span><h1>Вебкамера</h1></span>
                    <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
                </div>
            </div>
        </div>
        <!-- end header -->

        <div class="wrapper">
            <div class="line_link">
                <a href="/" class="link_active"><?php _e('breadcr-1','happy-house');?></a>&#8195;|&#8195;<span class="link_no_active">Вебкамера</span>
            </div>

            <div class="webcam_box">
                <div class="building_info">
                <?/* =$links[1] */?>
                </div>
<iframe  src="https://cam.kperevozov.com/fs.html" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
            </div>
            <div class="building_info">
                <?_e('fin-build','happy-house');?> <?_e('building-main','happy-house');?>

            </div>
            <a class="btn_red slidebottomleft" href="/building/">
                <?=$links[0]?>
            </a>



            <!-- end section contacts -->
<!--            --><?php //include_once 'includes/section-contacts.php';?>
            <!-- end section contacts -->





        </div>
        <!-- end wrapper -->
    </div>

<?php get_footer();?>