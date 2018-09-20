<?php
/*
Template Name: Планування квартири
*/
?>
<?php get_header(); ?>
<?
 $type_ap = $_GET['id'];
 $img = str_replace('/','-',$type_ap);
 $TYPE = explode('/',$type_ap);
 $tpF = substr($TYPE[2],0,2);


function app(){
    $app[3] = get_field('apartment', 336);
    $app[4] = get_field('apartment', 436);
    $app[5] =  get_field('apartment', 445);
    $app[6] =  get_field('apartment', 448);
    $app[7] =  get_field('apartment', 451);
    $app[8] =  get_field('apartment', 454);
    $app[9] =  get_field('apartment', 457);
    $app[10] =  get_field('apartment', 461);
    $app[11] =  get_field('apartment', 464);
    $app[12] =  get_field('apartment', 467);
    $app[13] =  get_field('apartment', 470);
    $app[14] =  get_field('apartment', 473);
    $app[15] =  get_field('apartment', 476);
    $app[16] =  get_field('apartment', 479);
    $app[17] =  get_field('apartment', 482);
    $app[18] =  get_field('apartment', 485);
    $app[19] =  get_field('apartment', 488);
    $app[20] =  get_field('apartment', 491);
    $app[21] =  get_field('apartment', 494);
    $app[22] =  get_field('apartment', 497);
    $app[23] =  get_field('apartment', 500);
    $app[24] =  get_field('apartment', 503);
    $app[25] =  get_field('apartment', 506);

    $result = array_merge($app[3],$app[4],$app[5],$app[6],$app[7],$app[8],$app[9],$app[10]
        ,$app[11],$app[12],$app[13],$app[14],$app[15],$app[16],$app[17],$app[18],$app[19]
        ,$app[20],$app[21],$app[22],$app[23],$app[24],$app[25]);
    return $result;
}
$apartments = app();
foreach ($apartments as $apartment){
    if($apartment['ap_id']==$type_ap){
        //echo 'Success';
        //print_r($apartment);
        $plan_flat_img = wp_get_attachment_image_src( $apartment['img'] , 'full' );
        $ap_info = $apartment;
        $rooms = $apartment['room'];
        break;
    }
}
function getApartInfo($apartments ,$id){
    foreach ($apartments as $apartment){

        $parametr = explode('/',$id);
        $prm = explode('_',$parametr[2]);
        if(stristr($apartment['ap_id'], $prm[0]) === FALSE) {
           // echo $prm[0].'- не найдена в строке -'.$apartment['ap_id'];

        }
        else{
            //echo 'success';
            $rooms = $apartment['room'];
            return $rooms;
        }

    }
}
//print_r(getApartInfo($apartments,$type_ap));
$roomsById = getApartInfo($apartments,$type_ap);
$plans_array = get_field('floor', 290);

//print_r($plans_array);

foreach ($plans_array as $item){
    if($item['num']==$apartment['apart_floor']){
        //echo 'Yspeh';
        $plan = $item['num'];
        $plan_floor_img = wp_get_attachment_image_src( $item['img'] , 'full' );
        $svg_param = $item['svg_param'];
        $img_param = $item['img_param'];
        break;
    }
}
function sq($rooms){
    foreach ($rooms as $room){
        $sqr = $sqr+$room['area'];
    }
    return $sqr;
}

function livSq($rooms,$array_living){
    foreach ($rooms as $room){
        if(in_array($room['id'],$array_living)) {
            $sqr = $sqr + $room['area'];
        }
    }
    return $sqr;
}
$array_living = array('004','005','006','007','008','027','035','036','042','043','044');

//print_r($rooms);
//print_r($roomsById);

//print_r($svg_param);
//print_r($img_param);
// конец обработки квартир на этаже
?>
    <div class="container flatplan_block wow fadeIn">

        <!-- header -->
        <div class="header">
            <div class="main_name">
                <div class="line_grey">
                    <div class="line_fanny"></div>
                </div>
                <div class="name_box">
                    <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
                    <span>Квартира <span id="NumberOfFlat"><?=$tpF?>-<?=$TYPE[1]?></span></span>
                    <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
                </div>
            </div>
        </div>
        <!-- end header -->

        <div class="wrapper">
            <div class="line_link">
                <a href="/" class="link_active"><?php _e('breadcr-1','happy-house');?></a>&#8195;|&#8195;
                <a href="/level-floor/" class="link_active"><?php _e('Choose a floor','happy-house');?></a>&#8195;|&#8195;
                <a href="/floor-plan/<?=$apartment['apart_floor']?>/" class="link_active"><?php _e('Choose a flat','happy-house');?></a>&#8195;|&#8195;
                <span class="link_no_active">Квартира <span id="NumberOfFlat"><?=$tpF?>-<?=$TYPE[1]?></span></span>
            </div>


            <div class="flatplan__info flex">

                <div class="flatplan__info__item flatplan__info__item__1 flex">
                    <div class="flatplan_btn">
                        <a href="/filter/" class="flex btn_transparent btn-11" style="display:flex;">
                            <svg height="10" viewBox="0 0 661.621 363.89101" width="36" xmlns="http://www.w3.org/2000/svg" fill="#ed1c24"><path d="m90.973 168.449v-168.449h-33.081v168.449c-19.22 6.831-33.081 25.009-33.081 46.578s13.861 39.747 33.081 46.578v400.016h33.081v-400.016c19.237-6.832 33.081-25.009 33.081-46.578s-13.845-39.747-33.081-46.578zm264.648 281.189v-449.638h-33.081v449.638c-19.236 6.831-33.081 25.01-33.081 46.578 0 21.569 13.861 39.747 33.081 46.578v118.827h33.081v-118.827c19.237-6.831 33.081-25.009 33.081-46.578s-13.844-39.747-33.081-46.578z" transform="matrix(0 1 -1 0 659.479832 -24.811)"/></svg>
                            <span><?php _e('Filter','happy-house');?></span>
                        </a>
                        <a href="/wp-content/themes/happy-house/assets/flats/<?=$ap_info['apart_floor']?>/<?=$img?>.png" class="flex btn_transparent btn-11" download style="display:flex; padding: 12.5px 0;">
                            <svg enable-background="new 0 0 459 459" height="24" viewBox="0 0 459 459" width="40" xmlns="http://www.w3.org/2000/svg" fill="#ed1c24"><path d="m211.65 142.8c2.55 0 2.55 0 0 0 2.55-10.2 5.1-15.3 5.1-22.95v-5.1c2.55-12.75 2.55-22.95 0-25.5 0 0 0 0 0-2.55l-2.55-2.55s0 2.55-2.55 2.55c-5.1 15.3-5.1 33.15 0 56.1zm-76.5 175.95c-5.1 2.55-10.2 5.1-12.75 7.65-17.85 15.3-30.6 33.149-33.15 40.8 15.3-2.55 30.6-17.85 45.9-48.45 2.55 0 2.55 0 0 0zm234.6-38.25c-2.55-2.55-12.75-10.2-48.45-10.2-2.55 0-2.55 0-5.1 0v2.55c17.85 7.65 35.7 12.75 48.45 12.75h5.1 2.55s0 0 0-2.55-2.55 0-2.55-2.55zm38.25-280.5h-357c-28.05 0-51 22.95-51 51v357c0 28.05 22.95 51 51 51h357c28.05 0 51-22.95 51-51v-357c0-28.05-22.95-51-51-51zm-28.05 300.9c-5.101 2.55-12.75 5.1-22.95 5.1-20.4 0-51-5.1-76.5-17.85-43.35 5.1-76.5 10.199-102 20.399-2.55 0-2.55 0-5.1 2.55-30.6 53.551-56.1 79.051-76.5 79.051-5.1 0-7.65 0-10.2-2.551l-12.75-7.649v-2.55c-2.55-5.101-2.55-7.65-2.55-12.75 2.55-12.75 17.85-35.7 48.45-53.551 5.1-2.55 12.75-7.649 22.95-12.75 7.65-12.75 15.3-28.05 25.5-45.899 12.75-25.5 20.4-51 28.05-73.95-10.2-30.6-15.3-48.45-5.1-84.15 2.55-10.2 10.2-20.4 20.4-20.4h5.1c5.1 0 10.2 2.55 15.3 5.1 17.851 17.85 10.2 58.65 0 91.8v2.55c10.2 28.05 25.5 51 40.8 66.3 7.65 5.1 12.75 10.2 22.95 15.3 12.75 0 22.95-2.55 33.15-2.55 30.6 0 51 5.1 58.649 17.85 2.551 5.101 2.551 10.2 2.551 15.3-2.55 2.55-5.1 10.2-10.2 15.3zm-165.75-99.45c-5.1 17.85-15.3 38.25-25.5 61.2-5.1 10.199-10.2 17.85-15.3 28.05h2.55 2.55c33.15-12.75 63.75-20.4 84.15-22.95-5.101-2.55-7.65-5.1-10.2-7.65-12.75-15.3-28.05-35.7-38.25-58.65z"/></svg>
                            <span><? _e('download pdf','happy-house');?></span>
                        </a>
                        <div class="btn_red slidebottomleft" id="get_price"><? _e('Find out the price', 'happy-house');?> </div>
                    </div>
                    <div class="flatplan_floor">
                        <p><?_e('floor plan','happy-house');?></p>

                            <svg class="plan_floor" <?=$svg_param;?> xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <image  <?=$img_param;?> xlink:href="<?=$plan_floor_img[0]?>"/><g fill="none">

                                        <path d="<?=$apartment['mouseover']?>"/>

                                </g>
                            </svg>

<!--                        <img class="plan_floor" src="--><?//=$plan_floor_img[0]?><!--" alt="">-->
<!--                        <img src="--><?php //bloginfo('template_url'); ?><!--/assets/img/floor-plan/plan1.png" alt="">-->
                    </div>
                </div>


                <div class="flatplan__info__item flatplan_center">
<!--                    <img class="plan_flat" src="--><?//=$plan_flat_img[0]?><!--" alt="План квартири Happy House">-->
                    <img class="plan_flat" src="/wp-content/themes/happy-house/assets/flats/<?=$ap_info['apart_floor']?>/<?=$img?>.png" alt="План квартири Happy House">
                </div>

                <div class="flatplan__info__item flatplan__info__item__2 flex">
                    <img class="compass" src="<?php bloginfo('template_url'); ?>/assets/img/compas.png" alt="compas">
                    <!-- <div class="flats_about_name"><?_e('flat parameters', 'happy-house');?></div> -->
                    <div class="flats_about__line">
                      <ul class="flats__slider__new">
                          <li>
                              <span class="flats_param_num"><?_e('area','happy-house');?>  м.кв </span>
                          </li>
                        <li>
                          <span class="flats_param_num"><?if($rooms){echo sq($rooms);}else{echo sq($roomsById);};?> м.кв </span> <?_e('total area','happy-house');?>
                        </li>
                        <li>
                          <span class="flats_param_num"><?print_r(livSq($roomsById,$array_living))?> м.кв </span> <?_e('living area','happy-house')?>
                        </li>
                        <?foreach ($roomsById as $room){
                          $rID = $room['id'];
                          echo '
                          <li>
                          <span class="flats_param_num">'.$room['area'].'м.кв </span> ';
                          _e("$rID","happy-house");
                          echo '</li>';
                        }?>
                      </ul>
                    </div>
                </div>

            </div>
        </div>
        <!-- <div class="flats_about flex">
            <div class="wrapper flex">

                <div class="flats_about_name"><?_e('flat parameters', 'happy-house');?></div>
                <div class="flats_about__line">
                    <ul class="flats__slider">
                        <li>
                            <span class="flats_param_num"><?if($rooms){echo sq($rooms);}else{echo sq($roomsById);};?> м.кв </span> <?_e('total area','happy-house');?>
                        </li>
                        <li>
                            <span class="flats_param_num"><?print_r(livSq($roomsById,$array_living))?> м.кв </span> <?_e('living area','happy-house')?>
                        </li>
                        <?foreach ($roomsById as $room){
                            $rID = $room['id'];
                            echo '
                            <li>
                                <span class="flats_param_num">'.$room['area'].'м.кв </span> ';
                            _e("$rID","happy-house");
                            echo '</li>';
                        }?>
                    </ul>
                </div>
            </div>
        </div> -->
        <?
//        print_r($ap_info);
        ?>


        <!-- end wrapper -->
    </div>

<?php get_footer();?>
<style>
    .flatplan_center img {
        max-width: 100%;
        display: block;
        max-height: 65vh;
        margin: 0 auto;
        width: auto;
    }
    .plan_floor{
        width:100%;
        height:auto;
    }
    .plan_floor path{
        fill: rgba(237,28,36,.8);
    }
</style>
<script type="text/javascript">

    var defaultConfiguration1 = {
        minSlides: 1,
        nextText: '<svg height="421.0636" viewBox="0 0 215.60001 421.0636" width="215.60001" xmlns="http://www.w3.org/2000/svg" ><path d="m0 416.08179c0 2 1.2 3.8 3.1 4.6s4 .3 5.4-1.1l205.6-205.6c1-1 1.5-2.3 1.5-3.5s-.5-2.6-1.5-3.5l-205.5-205.4999914c-1.3-1.4-3.5-1.9-5.5-1.1-1.9.8-3.1 2.6000001-3.1 4.6000002z"/></svg>',
        prevText: '<svg height="421.0636" viewBox="0 0 215.60001 421.0636" width="215.60001" xmlns="http://www.w3.org/2000/svg" ><path d="m215.6 416.08179c0 2-1.2 3.8-3.1 4.6s-4 .3-5.4-1.1l-205.6-205.6c-1-1-1.5-2.3-1.5-3.5s.5-2.6 1.5-3.5l205.5-205.4999914c1.3-1.4 3.5-1.9 5.5-1.1 1.9.8 3.1 2.6000001 3.1 4.6000002z"/></svg>',
        pager: false,
        maxSlides: 5,
        moveSlides: 1,
        easing: 'ease-in-out',
        slideMargin: 20,
        slideWidth: 155,
        onSliderResize: function() {
            var Configuration1 = getScreenSize2();
            bxSlider.reloadSlider(Configuration1)
        }
    };
    function getScreenSize2() {
        var width = window.innerWidth;
        if(width > 1024) {
            return defaultConfiguration1;
        } else if(width > 768 && width < 1024) {
            return Object.assign({}, defaultConfiguration1, {slideWidth: 165, maxSlides: 3 });
        } else if(width < 767) {
            return Object.assign({}, defaultConfiguration1, {slideWidth: 220, maxSlides: 1 });
        }
    }
    var Configuration1 = getScreenSize2();
    var bxSlider = $(".flats__slider").bxSlider(Configuration1);

</script>
