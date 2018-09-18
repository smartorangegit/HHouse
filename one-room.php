<?php
/*
Template Name: Однокомнатные
*/
?>
<?php get_header(); ?>
<?
//$apartments = get_field('apartment', 336);
//$apartments = get_field('apartment', 436);
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


function SquareAll($data){
    $cnt =  count($data);
    $a=0;
    foreach ($data as $app) {
        $A = explode('/',$app['ap_id']);
        $B = substr($A[2],0,4);
        for($Z = 0; $Z<=$cnt;$Z++) {
            if(stristr($app['ap_id'], $B) === FALSE) {

            }
            else{
                foreach ($app['room'] as $room) {
                    $sumR[$a] = $sumR[$a] + $room['area'];
                }
                if(!empty($sumR[$a])) {
                    $arr[] = ['Square' => $sumR[$a],
                        'ID' => $app['ap_id'],
                        'Floor' => $app['apart_floor']/*,
                        'Room' => $app['room']*/];
                }
                break;
            }

        }
        $a++;
    }
    return $arr;
}
$arraySquare =SquareAll($apartments);

function reBuildSquares($data){
    foreach ($data as $row){
        //print_r($row);
        $A = explode('/',$row['ID']);
        $B = substr($A[2],0,4);
        if(stristr($row['ID'], $B) === FALSE) {

        }
        else{
            $ids[$B] = ['square'=>$row['Square'],
                'floor'=>$row['Floor']];
        }
    }
    return $ids;
}

$allSquareFinArray = reBuildSquares($arraySquare);
function SquareL($data){
    $array_living = array('004','005','006','007','008','027','035','036','042','043','044');
    $cnt =  count($data);
    $a=0;
    foreach ($data as $app) {
        $A = explode('/',$app['ap_id']);
        $B = substr($A[2],0,4);
        //print_r($app);
        for($Z = 0; $Z<=$cnt;$Z++) {
            if(stristr($app['ap_id'], $B) === FALSE) {
//            echo '+';
            }
            else{
                foreach ($app['room'] as $room) {
                    if(in_array($room['id'],$array_living)) {
                        $sumR[$a] = $sumR[$a] + $room['area'];
                    }
                }
                if(!empty($sumR[$a])) {
                    $arr[] = ['Square' => $sumR[$a],
                        'ID' => $app['ap_id'],
                        'Floor' => $app['apart_floor']/*,
                        'Room' => $app['room']*/];
                }
                break;
            }

        }
        $a++;
    }
    return $arr;
    //return $sumR;
}
$arraySquareL =SquareL($apartments);
$LSquareFinArray = reBuildSquares($arraySquareL);

?>

<div class="container filter_block wow fadeIn">

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
        <!-- <section class="advantages_block"> -->

        <section class="filter">


            <div class="wrapper">
                <div class="filter__info">
                    <div class="filter__info__quant">
                        <?_e('Apartments found','happy-house');?>: <span class="count_filter"></span>
                    </div>
                    <ul class="filter_info__list">
                        <li><a class="kim_link" href="/odnokimnatni/">1-<?_e('Rooms','happy-house');?></a></li>
                        <li><a class="kim_link" href="/dvokimnatni/">2-<?_e('Rooms','happy-house');?></a></li>
                        <li><a class="kim_link" href="/trikimnatni/">3-<?_e('Rooms','happy-house');?></a></li>
                        <li><a class="kim_link" href="/chotirikimnatni/">4-<?_e('Rooms','happy-house');?></a></li>
                    </ul>
                </div>

                <ul class="result__list with-empty-cells">
                    <?$cou=0; foreach ($apartments as $apartment) {
                        $plan_flat_img = wp_get_attachment_image_src($apartment['img'], 'full');
                        $type_ap = $apartment['ap_id'];
                        $img = str_replace('/','-',$type_ap);
                        $a =  explode('-',$img);
                        $b = substr($a[2],0,1);

                        $A = explode('/',$apartment['ap_id']);
                        $B = substr($A[2],0,4);
                        $C = explode('_',$A[2]);
                        $D = substr($A[2],0,1);
                        if(stristr($apartment['ap_id'], $B) === FALSE) {

                        }
                        else{
                            $sqluareAll = $allSquareFinArray[$B]['square'];
                            $sqluareL= $LSquareFinArray[$B]['square'];
                        }
                    if($C[2]!=3 && $C[2]!=4){ //скрываем 3,4 секции
                        if(intval($b)==1){
                        ?>
                            <li class="sort result__item cell" style=''
                                data-floor='<?=$apartment['apart_floor']?>'
                                data-area='<?=$sqluareAll?>'
                                data-larea='<?=$sqluareL?>'
                                data-rooms='<?=$D?>'
                                data-sec='<?=$C[1]?>'
                                data-build='<?=$C[2]?>'>
                                <div class="result__item__inner">
                                    <div class="result__img">
                                        <!--                                    <img src="--><?//=$plan_flat_img[0]?><!--" alt="">-->
                                        <img src="/wp-content/themes/happy-house/assets/flats/<?=$apartment['apart_floor']?>/<?=$img?>.png" alt="">
                                    </div>
                                    <table style="width:100%; line-height:1.5;">
                                        <tr><td><?_e('Section','happy-house');?></td><td><?=$C[2]?></td></tr>
                                        <tr><td><?_e('n of rooms','happy-house');?></td><td><?=$D?></td></tr>
                                        <tr><td><?_e('total area','happy-house');?></td><td><?=$sqluareAll?></td></tr>
                                        <tr><td><?_e('living area','happy-house')?></td><td><?=$sqluareL?></td></tr>
                                    </table>
                                </div>
                                <a class="button" href="/planuvannya-kvartiri/?id=<?=$apartment['ap_id']?>"><?_e('Watch the apartment','happy-house');?></a>
                            </li>
                    <?$cou++;}}}
                    echo '<span style="display: none"; id="cou" data-count="'.$cou.'"></span>';?>
                </ul>
                <a class="button filter__more" href="#"><?_e('Download more schedules','happy-house');?></a>
            </div>
        </section>
        <!-- </section> -->


    </div>
    <!-- end wrapper -->
</div>

<?php get_footer();?>
<style>
    .result__img img {
        max-width: 100%;
        height: 180px;
        margin: 0 auto;
        display: block;
    }
    /*
    .irs-from, .irs-to {
        display: block;
        width: 66px;
        top: 0px;
    }
    */
</style>
<script>
    var c = $('#cou').data('count');
    console.log(c);
    $(".count_filter").text(c);
</script>

