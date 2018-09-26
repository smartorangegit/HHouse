<?php
/*
Template Name: Обрати квартиру
*/
?>
<?php get_header(); ?>
<?

    $cur_uri = $_SERVER['REQUEST_URI'];
    $pre_flor = explode('/floor-plan/',$cur_uri);
    $floor = str_replace('/','',$pre_flor[1]);

    if(empty($floor)){
        wp_safe_redirect('http://happy-wp.smarto.com.ua/ru/floor-plan/3/', 301 );
    }
    else{
//        echo 'tyt - '.$floor;
    }
    if($floor>18){
        wp_safe_redirect('http://happy-wp.smarto.com.ua/ru/floor-plan/3/', 301 );
    }

    $plans_array = get_field('floor', 290);
    foreach ($plans_array as $item){
        if($item['num']==$floor){
            //echo 'Yspeh';
            $plan = $item['num'];
            $svg_p= $item['svg_param'];
            $img_p = $item['img_param'];
//            print_r($plan);
            $img_full = wp_get_attachment_image_src( $item['img'] , 'full' );
            break;
        }
    }
 //переключатель этажей
$floorPrew = $floor-1;
if($floorPrew<3){
    $floorPrew = 18; //должно быть 25, сейчас нужно скрыть 19-25 этажи
}
$floorNext = $floor+1;
if($floorNext > 18 ){ //должно быть 25, сейчас нужно скрыть 19-25 этажи
    $floorNext = 3;
}
$prewClicer = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/floor-plan/'.$floorPrew.'/';
$nextClicer = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['HTTP_HOST'].'/floor-plan/'.$floorNext.'/';
// конец переключателя этажей

//обработка квартир на этаже

function apps(){
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
$apps = apps();
function getApartInfo($a ,$id){
    $i=0;
    //print_r(count($id));
    foreach ($a as $apartment){

        $prm = explode('_',$id[$i][2]);
        //echo $apartment['ap_id'].' - '.$id[2];

        if(stristr($apartment['ap_id'], $prm[0]) === FALSE) {
            // echo $prm[0].'- не найдена в строке -'.$apartment['ap_id'];
            $rooms[] = $apartment['room'];
            $ids[] = $apartment['ap_id'];
        }
        else{
            //echo 'success';
            $rooms[] = $apartment['room'];
            $ids[] = $id[$i][2];

        }
$i++;
        if($i==count($id)){
            break;
        }
    }

    $result = [
            'rooms' => $rooms,
            'id' => $ids
    ];
    return $result;
}


function app($floor){
    $apps[3] =  get_field('apartment', 336);
    $apps[4] =  get_field('apartment', 436);

    $apps[5] =  get_field('apartment', 445);
    $apps[6] =  get_field('apartment', 448);
    $apps[7] =  get_field('apartment', 451);
    $apps[8] =  get_field('apartment', 454);
    $apps[9] =  get_field('apartment', 457);
    $apps[10] =  get_field('apartment', 461);
    $apps[11] =  get_field('apartment', 464);
    $apps[12] =  get_field('apartment', 467);
    $apps[13] =  get_field('apartment', 470);
    $apps[14] =  get_field('apartment', 473);
    $apps[15] =  get_field('apartment', 476);
    $apps[16] =  get_field('apartment', 479);
    $apps[17] =  get_field('apartment', 482);
    $apps[18] =  get_field('apartment', 485);
    $apps[19] =  get_field('apartment', 488);
    $apps[20] =  get_field('apartment', 491);
    $apps[21] =  get_field('apartment', 494);
    $apps[22] =  get_field('apartment', 497);
    $apps[23] =  get_field('apartment', 500);
    $apps[24] =  get_field('apartment', 503);
    $apps[25] =  get_field('apartment', 506);

    $result = $apps[$floor];
    return $result;
}

 $apartments = app($floor);
function parceApp($apartments){
    foreach ($apartments as $room){
        $parametr = explode('/',$room['ap_id']);
    }
    return $parametr;

}function parceApp2($apartments){
    foreach ($apartments as $room){
        $parametr[] = explode('/',$room['ap_id']);
    }
    return $parametr;

}
function SquareAll($data){
    $a=0;
    foreach ($data as $app) {
            foreach ($app as $room) {
                $sumR[$a] = $sumR[$a] + $room['area'];
            }
        $a++;
    }
    return $sumR;
}
function livSq($data,$array_living){
    $a=0;
    foreach ($data as $app) {
        foreach ($app as $room) {
            if(in_array($room['id'],$array_living)) {
                $sumR[$a] = $sumR[$a] + $room['area'];
            }
        }
        $a++;
    }
    return $sumR;
}

// конец обработки квартир на этаже
$param = parceApp($apartments);
$param2 = parceApp2($apartments);

$data[] = getApartInfo($apps,$param2);



//print_r($apartments);
//print_r($apps);

//print_r($param2);

//print_r($data);




//print_r($apartments);
$cnt =  count($apps);
foreach ($apartments as $searchItem){
    $A = explode('/',$searchItem['ap_id']);
    $B = substr($A[2],0,4);

    for($Z = 0; $Z<=$cnt;$Z++) {
        if(stristr($apps[$Z]['ap_id'], $B) === FALSE) {
        }
        else{
          $arr[] =  $apps[$Z]['room'] ;
            break;

        }

    }

}
$array_living = array('004','005','006','007','008','027','035','036','042','043','044');
//print_r($arr);
$sqA = SquareAll($arr);
$sqL = livSq($arr,$array_living);
//print_r($sqA);
?>

    <div class="container floorplan_block wow fadeIn">

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
                <a href="/" class="link_active"><?php _e('breadcr-1','happy-house');?></a>&#8195;|&#8195;
                <a href="/level-floor/" class="link_active"><?php _e('Choose a floor', 'happy-house');?></a>&#8195;|&#8195;
                <span class="link_no_active"><?the_title();?></span>
            </div>


            <div class="floorplan__info flex">
                <div class="floorplan__info__item">
                    <a href="/filter/" class="flex btn_transparent btn-11">
                        <svg height="10" viewBox="0 0 661.621 363.89101" width="36" xmlns="http://www.w3.org/2000/svg" fill="#ed1c24"><path d="m90.973 168.449v-168.449h-33.081v168.449c-19.22 6.831-33.081 25.009-33.081 46.578s13.861 39.747 33.081 46.578v400.016h33.081v-400.016c19.237-6.832 33.081-25.009 33.081-46.578s-13.845-39.747-33.081-46.578zm264.648 281.189v-449.638h-33.081v449.638c-19.236 6.831-33.081 25.01-33.081 46.578 0 21.569 13.861 39.747 33.081 46.578v118.827h33.081v-118.827c19.237-6.831 33.081-25.009 33.081-46.578s-13.844-39.747-33.081-46.578z" transform="matrix(0 1 -1 0 659.479832 -24.811)"/></svg>
                        <span><?php _e('Filter','happy-house');?></span>
                    </a>

                </div>
                <div class="floorplan__info__item flex">
                    <a class="link_round" href="<?=$prewClicer?>" title="">
                        <svg class="icon_line" style="transform: scaleX(-1)"><use xlink:href="#arrow_circle"></use></svg>
                        <!-- <p>деталі</p> -->
                    </a>
                    <div class="floorplan_number">
                        <span><?=$floor?></span> <?php _e('floor','happy-house');?>
                    </div>
                    <a class="link_round" href="<?=$nextClicer?>" title="">
                        <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                        <!-- <p>деталі</p> -->
                    </a>
                </div>

                <div class="floorplan__info__item floorplan_compass">
                    <img  class="compass" src="<?php bloginfo('template_url'); ?>/assets//img/compas.png" alt="compas">
                </div>

            </div>
            <div class="floorplan__box">
                    <?
                    if($apartments) {
                        if ($plan == $floor) {
                            $i=0;
                            //echo '<img class="plan_floor" src="'.$img_full[0].'" alt="План поверху Happy House"/>';
                            echo '
                        <svg class="plan_floor" '.$svg_p.' xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <image '.$img_p.' xlink:href="' . $img_full[0] . '"/><g fill="none">';
                            foreach ($apartments as $apartment) {
                                $C = explode('_',$param2[$i][2]);
                                $roomsN = explode('S',$param2[$i][2]);
                                if($C[2]!=3 && $C[2]!=4){
                                echo '
            <a class="svg_links" xlink:href="/planuvannya-kvartiri/?id=' . $apartment['ap_id'] . '"
                data-number="' . $param2[$i][1] . '"
                data-square="' . $sqA[$i] . '"
                data-livSquare="' . $sqL[$i] . '"
                data-flats="' . intval($roomsN[0]) . '">
             <path d="' . $apartment['mouseover'] . '"/>
            </a>';
                            $i++;}}
                            echo '</g></svg>';
                        }
                    }
                    else{
                     echo ' <img class="plan_floor" src="'.$img_full[0].'" alt="План поверху Happy House">';
                    }
                    ?>


            </div>



            <!-- всплывайка с данными по квартире -->
            <div id="appInfo" class="infobox">
                <div class="infobox__logo">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/HH_logo.svg" alt="Happy House">
                </div>
                <ul class="infobox__params">
                  <li><?php _e('room number','happy-house');?>-<span id="floor">-</span></li>
                    <li><?php _e('Number of rooms','happy-house');?> - <span id="rooms">-</span></li>
                    <li><?php _e('total area','happy-house');?>, <span id="square">-</span> м.кв</li>
                    <li><?php _e('living area','happy-house');?>, <span id="livingSquare">-</span> м.кв</li>
                </ul>
            </div>
            <!-- конец всплывайки с данными по квартире -->
        </div>
        <!-- end wrapper -->
    </div>

<?php get_footer();?>
<style>
    .plan_floor {
        max-width: 100% !important;
        max-height: 65vh;
        height: auto;
        pointer-events: none;
    }
    .svg_links{
        pointer-events: all;
    }
    .svg_links path{
        fill: #ed1c24;
        opacity: 0;
        transition: 0.4s;
    }    .svg_links:hover path{
        opacity: 0.4;
    }
    @media only screen and (max-width: 768px) {
      .plan_floor{
        position: absolute;
        top: 50%;
        left: 50%;
        max-width: 800px!important;
        height: 100%;
        max-height: 300px;
        display: block;
        pointer-events: none;
        transform: translate(-50%,-50%) rotate(90deg);
        transform-origin: 50% 50%;
        -webkit-transform: translate(-50%,-50%) rotate(90deg);
        -webkit-transform-origin: 50% 50%;
        margin: 0 auto;
      }
      .compass{
       -moz-transform: rotate(135deg); /* Для Firefox */
       -ms-transform: rotate(135deg); /* Для IE */
       -webkit-transform: rotate(135deg); /* Для Safari, Chrome, iOS */
       -o-transform: rotate(135deg); /* Для Opera */
       transform: rotate(135deg);
   }


    }
</style>
