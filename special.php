<?php
/*
Template Name: Спеціальні умови
*/
?>
<?
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(59));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);
$links = str_replace('<pre>','', $links);
//изображение (одиночное)
$img = (get_the_post_thumbnail_url($post->ID, 'full'));
?>
<?php get_header(); ?>

    <div class="container special_block wow fadeIn">

        <!-- header -->
        <div class="header">
            <div class="main_name">
                <div class="line_grey">
                    <div class="line_fanny"></div>
                </div>
                <div class="name_box">
                    <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
                    <span><h1><?_e('special','happy-house');?></h1></span>
                    <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
                </div>
            </div>
        </div>
        <!-- end header -->

        <div class="wrapper">
            <div class="line_link">
                <a href="/" class="link_active"><?php _e('breadcr-1','happy-house');?></a>&#8195;|&#8195;<span class="link_no_active"><?_e('special','happy-house');?></span>
            </div>
        </div>
        <!-- <section class="special_block"> -->

        <div class="special_item special_item__1 scaleimage">
            <div class="wrapper flex">
                <div class="special_box wow fadeInLeft">
                    <div class="special_box_inner">
                        <h2><?=$links[0]?></h2>
                        <svg class="smile_line open" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"></path><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"></path><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"></path></g></g></svg>
                    </div>
                </div>
                <div class="special__number  wow fadeIn">1</div>
                <a class="btn_red wow fadeIn" href="#"><?=$links[1]?></a>
            </div>
        </div>

        <div class="special_item special_item__2 scaleimage">
            <div class="wrapper flex">
                <div class="special_box wow fadeInLeft">
                    <div class="special_box_inner">
                        <h2><?=$links[2]?></h2>
                        <svg class="smile_line open" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"></path><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"></path><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"></path></g></g></svg>
                    </div>
                </div>
                <div class="special__number wow fadeIn">2</div>
                <a class="btn_red wow fadeIn" href="#"><?=$links[3]?></a>
            </div>
        </div>

        <div class="special_item special_item__3">
            <div class="wrapper flex">
                <div class="special_box wow fadeInLeft">
                    <div class="special_box_inner">
                        <h2><?=$links[4]?></h2>
                        <svg class="smile_line open" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"></path><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"></path><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"></path></g></g></svg>
                    </div>
                </div>
                <div class="special__number wow fadeIn">3</div>
                <a class="btn_red wow fadeIn" href="#"><?=$links[5]?></a>
            </div>
        </div>

        <div class="special_item special_item__4">
            <div class="wrapper flex">
                <div class="special_box wow fadeInLeft">
                    <div class="special_box_inner">
                        <h2><?=$links[6]?></h2>
                        <svg class="smile_line open" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"></path><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"></path><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"></path></g></g></svg>
                    </div>
                </div>
                <div class="special__number wow fadeIn">4</div>
                <a class="btn_red wow fadeIn" href="#"><?=$links[7]?></a>
            </div>
        </div>




        <!-- </section> -->


        <!-- end wrapper -->
    </div>

<?php get_footer();?>