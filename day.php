<?php
/*
Template Name: День в
*/
?>
<?
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(23));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);
$links = str_replace('<pre>','', $links);
//изображение (одиночное)
$img = (get_the_post_thumbnail_url($post->ID, 'full'));
?>
<?php get_header(); ?>

    <div class="container">
        <div class="day_block wow fadeIn">
            <div class="wrapper">
                <div class="line_link">
                    <a href="/" class="link_active"><?php _e('breadcr-1','happy-house');?></a>&#8195;|&#8195;
                    <span class="link_no_active">День у Happy House</span>
                </div>
                <div class="day_controls">
                    <div class="day_round">
                        <div class="icon_line_box">
                            <svg class="icon_line line_active"><use xlink:href="#line"></use></svg>
                        </div>
                        <span><?=$links[1]?></span>
                        <div class="day_looktime"><?=$links[0]?></div>
                    </div>
                    <div class="day_line">
                        <ul>
                            <li class="day_time day_time_active" data-time="<?=$links[0]?>" data-image="img1" data-info="<?=$links[1]?>"></li>
                            <li class="day_time" data-time="<?=$links[2]?>" data-image="img2" data-info="<?=$links[3]?>"></li>
                            <li class="day_time" data-time="<?=$links[4]?>" data-image="img3" data-info="<?=$links[5]?>"></li>
                            <li class="day_time" data-time="<?=$links[6]?>" data-image="img4" data-info="<?=$links[7]?>"></li>
                            <li class="day_time" data-time="<?=$links[8]?>" data-image="img5" data-info="<?=$links[9]?>"></li>
                            <li class="day_time" data-time="<?=$links[10]?>" data-image="img6" data-info="<?=$links[11]?>"></li>
                            <li class="day_time" data-time="<?=$links[12]?>" data-image="img7" data-info="<?=$links[13]?>"></li>
                            <li class="day_time" data-time="<?=$links[14]?>" data-image="img8" data-info="<?=$links[15]?>"></li>
                            <li class="day_time" data-time="<?=$links[16]?>" data-image="img9" data-info="<?=$links[17]?>"></li>
                        </ul>
                    </div>
                    <!-- end day_line -->
                </div>
            </div>
        </div>
        <!-- end wrapper -->
    </div>

<?php get_footer();?>