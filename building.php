<?php
/*
Template Name: Хід будівництва
*/
?>
<?php get_header(); ?>

    <div class="container_building wow fadeIn">

        <!-- header -->
        <div class="header">
            <div class="main_name">
                <div class="line_grey">
                    <div class="line_fanny"></div>
                </div>
                <div class="name_box">
                    <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
                    <span><h1><?_e('building','happy-house');?></h1></span>
                    <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
                </div>
            </div>
        </div>
        <!-- end header -->

        <div class="wrapper">
            <div class="line_link">
                <a href="/" class="link_active"><?php _e('breadcr-1','happy-house');?></a>&#8195;|&#8195;<span class="link_no_active"><?_e('building','happy-house');?></span>
            </div>

            <div class="status_box flex">

                <div class="building_timebar flex">

                    <div class="timebar__item flex">
                        <div class="timebar_name"> <?_e('building-2','happy-house');?></div>
                        <div class="tooltip tooltip-effect-2">
                            <div class="tooltip-item">
                                <svg class="container_svg" id="container1_0"></svg>
                            </div><!--Фасад-->
                            <div class="tooltip-content clearfix">
                                <div class="tooltip-text">
                                    <?_e('building-3','happy-house');?> 0%<br>
                                    <?_e('building-4','happy-house');?>  - 0%<br>
                                    <?_e('building-5','happy-house');?> - 0%<br>
                                    <?_e('building-6','happy-house');?>  - 0%
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="timebar__item flex">
                        <div class="timebar_name"><?_e('building-7','happy-house');?></div>
                        <svg class="container_svg" id="container1_1" style="font-weight: 700; padding: 0 10px; box-sizing: content-box;"></svg>
                    </div>

                    <div class="timebar__item flex">
                        <div class="timebar_name"><?_e('building-8','happy-house');?></div>
                        <div class="tooltip tooltip-effect-2">
                            <div class="tooltip-item">
                                <svg class="container_svg" id="container1_2"></svg>
                            </div>
                            <div class="tooltip-content clearfix">
                                <div class="tooltip-text"><?_e('building-9','happy-house');?> - 0%<br> <?_e('building-10','happy-house');?> - 0% </div>
                            </div>
                        </div>
                    </div>
                    <div class="timebar__item flex">
                        <div class="timebar_name"><?_e('building-11','happy-house');?></div>
                        <div class="tooltip tooltip-effect-2">
                            <div class="tooltip-item">
                                <svg class="container_svg" id="container1_3"></svg>
                            </div>
                            <div class="tooltip-content clearfix">
                                <div class="tooltip-text"><?_e('building-12','happy-house');?> - 0%<br> <?_e('building-13','happy-house');?> - 0% </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="building_webcam">

                    <a class="building_webcam__link" href="/webcam/">
                        <svg enable-background="new 0 0 370 370" viewBox="0 0 370 370" xmlns="http://www.w3.org/2000/svg" fill="#ed1c24" width="34" height="40"><path d="m274.221 284.781c40.578-28.245 67.146-75.225 67.146-128.415 0-86.358-70.009-156.366-156.367-156.366-86.357 0-156.367 70.008-156.367 156.365 0 53.19 26.568 100.17 67.146 128.415l-37.202 38.376c-2.58 3.626-3.972 7.965-3.972 12.416v13.031c0 11.817 9.58 21.396 21.396 21.396h217.998c11.815 0 21.395-9.579 21.395-21.396v-13.031c0-4.451-1.392-8.79-3.972-12.416zm-89.221-201.398c40.309 0 72.983 32.676 72.983 72.982 0 40.307-32.674 72.983-72.983 72.983s-72.982-32.676-72.982-72.983c0-40.306 32.673-72.982 72.982-72.982zm-83.048 249.033 28.549-29.454c16.969 6.314 35.328 9.769 54.499 9.769s37.53-3.455 54.499-9.769l28.549 29.454z"></path><path d="m185 201.689c25.033 0 45.322-20.291 45.322-45.324 0-16.152-8.456-30.32-21.177-38.349-.274 7.068-10.968 12.752-24.145 12.752-13.176 0-23.871-5.684-24.145-12.752-12.721 8.028-21.177 22.197-21.177 38.349 0 25.033 20.289 45.324 45.322 45.324z"></path></svg>
                        <?_e('web-cam','happy-house');?>
                    </a>

                </div>
            </div>

            <div class="building_info">
                <?_e('fin-build','happy-house');?> <?_e('building-main','happy-house');?>

            </div>

            <div class="hod-stroitelstva__box clearfix">
                <div class="gold__timeline"></div>


                <!-- элемент для добавления -->
<!--                <div class="hod-stroitelstva__item stroy_item__1 wow fadeIn">-->
<!--                    <a class="hod-stroitelstva__link" href="/wp-content/themes/happy-house/assets/img/hod/1.jpg" data-fancybox="group1" data-caption="19 марта 2018 года"></a>-->
<!--                    <figcaption>-->
<!--                        <div class="news_date">-->
<!--                            <svg enable-background="new 0 0 508.52 508.52" height="16"  fill="#ee1c25" viewBox="0 0 508.52 508.52" width="26" xmlns="http://www.w3.org/2000/svg"><g><path d="m506.645 89.372c-4.036-12.935-15.637-22.502-29.907-22.502h-31.782v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-190.855v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-31.623c-14.27 0-25.903 9.567-29.907 22.502h-1.875v387.365c0 17.544 14.239 31.782 31.782 31.782h444.955c17.544 0 31.782-14.239 31.782-31.782v-387.365zm-29.908 387.365h-444.955v-254.26h444.955z"/><path d="m111.08 132.088c8.772 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.119-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.119 15.891 15.891 15.891z"/><path d="m397.281 132.088c8.74 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.151-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.151 15.891 15.891 15.891z"/></g></svg>-->
<!--                            <span> 14 травня 2018 року</span>-->
<!--                        </div>-->
<!--                    </figcaption>-->
<!--                    <a href="/wp-content/themes/happy-house/assets/img/hod/2.jpg" data-fancybox="group1" data-caption="19 марта 2018 года"></a>-->
<!--                    <a href="/wp-content/themes/happy-house/assets/img/hod/2.jpg" data-fancybox="group1" data-caption="19 марта 2018 года"></a>-->
<!--                    <a href="/wp-content/themes/happy-house/assets/img/hod/2.jpg" data-fancybox="group1" data-caption="19 марта 2018 года"></a>-->
<!--                </div>-->
                <!-- конец элемента для добавления -->


                <?
                if ( have_posts() ) :
                    query_posts('cat=2');   // указываем ID рубрик, которые необходимо вывести.
                    while (have_posts()) : the_post();
                        $post_array [] = $post->ID;
                        ?>
                        <?php the_content();
                    endwhile;  // завершаем цикл.
                endif;
if($post_array){
                //перебираем массив из ID постов из рубрики ход строительства - формируем галерееи и выводим
                foreach ($post_array as $pArray){
                    $metas = get_post_meta($pArray);

                    $firsImg = wp_get_attachment_image_src($metas['slider_hod_0_img'][0]);
                    $BIG = str_replace('-150x150','',$firsImg[0]);

                    ?>
                    <div class="hod-stroitelstva__item stroy_item__<?=$pArray;?> wow fadeIn" style="background-image: url('<?=$BIG?>')">
                        <a class="hod-stroitelstva__link" href="<?=$BIG?>" data-fancybox="<?=$pArray;?>" data-caption="<?=$metas['slider_hod_0_text'][0];?>"></a>
                        <figcaption>
                            <div class="news_date">
                                <svg enable-background="new 0 0 508.52 508.52" height="16"  fill="#ee1c25" viewBox="0 0 508.52 508.52" width="26" xmlns="http://www.w3.org/2000/svg"><g><path d="m506.645 89.372c-4.036-12.935-15.637-22.502-29.907-22.502h-31.782v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-190.855v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-31.623c-14.27 0-25.903 9.567-29.907 22.502h-1.875v387.365c0 17.544 14.239 31.782 31.782 31.782h444.955c17.544 0 31.782-14.239 31.782-31.782v-387.365zm-29.908 387.365h-444.955v-254.26h444.955z"/><path d="m111.08 132.088c8.772 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.119-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.119 15.891 15.891 15.891z"/><path d="m397.281 132.088c8.74 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.151-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.151 15.891 15.891 15.891z"/></g></svg>
                                <span> <?=$metas['slider_hod_0_text'][0];?></span>
                            </div>
                        </figcaption>
                        <?
                        for ($i=1;$i<$metas['slider_hod'][0]; $i++){
                            if(!empty($metas['slider_hod_'.$i.'_img'][0])) {
                                $image_attributes = wp_get_attachment_image_src($metas['slider_hod_' . $i . '_img'][0]);
                                $big = str_replace('-150x150','',$image_attributes[0]);
                                ?>
                                <a href="<?=$big;?>"  alt="<?=$metas['slider_hod_0_text'][0];?>" data-fancybox="<?=$pArray;?>"></a>
                            <?} else{}}?>

                    </div>
                <?}}?>





        </div>
        <!-- end wrapper -->
    </div>

<?php get_footer();?>
<script type="text/javascript">
    (function() {

        $(document).ready(function() {
            //Общие данные
            var totalConstructionMain = 3; //Загально будівельні
            var facadeMain = 0; // Фасад
            var networksMain = 0; // Мережі
            var beautificationMain = 0; //Благоустройство

            //Уточненные данные
            //Строительство
            var constructionTillPoint = 0; //Работы до отм.
            var carcassConstrution = 0; //Каркас
            var brickworkConstrution = 0; //Кирпичня кладка
            var interiorFinshConstrution = 0; //Внутренняя отделка
            //Фасад
            var facadeFacade = 0; //Фасад
            var windowsFacade = 0; //Окна
            //Инженерия
            var inernalEngineering = 0; //Внутренние
            var externalEngineering = 0; //Внешние


            $("#container1_0").Progress({
                percent: totalConstructionMain,
                width: 220,
                height: 40,
                backgroundColor: '#ffffff',
                barColor: '#ed1c24',
                fontColor: '#000',
                radius: 0,
                fontSize: 14,
                increaseTime: 1000.00/60.00,
                increaseSpeed: 1,
                animate: true
            });

            $("#container1_1").Progress({
                percent: beautificationMain,
                width: 220,
                height: 40,
                backgroundColor: '#ffffff',
                barColor: '#ed1c24',
                fontColor: '#000',
                radius: 0,
                fontSize: 14,
                increaseTime: 1000.00/60.00,
                increaseSpeed: 1,
                animate: true
            });

            $("#container1_2").Progress({
                percent: facadeMain,
                width: 220,
                height: 40,
                backgroundColor: '#ffffff',
                barColor: '#ed1c24',
                fontColor: '#000',
                radius: 0,
                fontSize: 14,
                increaseTime: 1000.00/60.00,
                increaseSpeed: 1,
                animate: true
            });

            $("#container1_3").Progress({
                percent: networksMain,
                width: 220,
                height: 40,
                backgroundColor: '#ffffff',
                barColor: '#ed1c24',
                fontColor: '#000',
                radius: 0,
                fontSize: 14,
                increaseTime: 1000.00/60.00,
                increaseSpeed: 1,
                animate: true
            });

        });

    })();

</script>
<?php //wp_enqueue_script( 'fancybox', get_template_directory_uri().'/assets/js/jquery.fancybox.js' );?>
<!--<script src="/wp-content/themes/happy-house/assets/js/jquery.fancybox.js">-->
