<?php
/*
Template Name: Головна
*/
?>
<?
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(7));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);
$links = str_replace('<pre>','', $links);
//изображение (одиночное)
$img = (get_the_post_thumbnail_url($post->ID, 'full'));
?>
<?php get_header();?>
<?php //bloginfo('template_url'); ?><!--/assets/-->
<div class="container">
    <section class="one">
        <ul class=" gallery">
            <li class="gallery__item gitem__1"></li>
            <li class="gallery__item gitem__2"></li>
            <li class="gallery__item gitem__4"></li>
        </ul>
        <div class="one__box">
            <h1 class="wow fadeInUp"><?=$links[0]?></h1>
            <svg  class="arrow_down" enable-background="new 0 0 100 100" viewBox="0 0 90.211869 158.80933" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><path d="m82.143 18-32.143 48.001-32.143-48.001h-12.857l45 64 45-64z" transform="translate(-4.788136 28.292373)"/><path d="m5 18 45 64 45-64h-12.857l-32.143 48.001-32.143-48.001z" transform="translate(-5 -18)"/><path d="m17.857 18h-12.857l45 64 45-64h-12.857l-32.143 48.001z" transform="translate(-5 76.809322)"/></svg>
        </div>
        <div class="one__line">
            <div class="line_fanny"></div>
        </div>
    </section>
    <section class="main">
        <div class="wrapper flex">

            <div class="block_about block_double">
                <div class="block__name">
                    <?=$links[1]?>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img">
                  <img src="/wp-content/themes/happy-house/assets/img/proj_bg.jpg" alt="<?=$links[1]?>" title="<?=$links[1]?>">
                </div>
                <figcaption>
                    <div class="block_prev">
                    <?=$links[2];?>
                    </div>
                    <a class="link_round" href="/about/">
                        <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                        <p><?=$links[3]?></p>
                    </a>
                </figcaption>
            </div>

            <div class="block_location block_double">
                <div class="block__name">
                    <?=$links[4]?>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img">
<!--                  <img src="/wp-content/themes/happy-house/assets/img/locat_bg.jpg" alt="--><?//=$links[4]?><!--" title="--><?//=$links[4]?><!--">-->
                  <img src="/wp-content/themes/happy-house/assets/img/hh5.png" alt="<?=$links[4]?>" title="<?=$links[4]?>" style="top: 20%;">
                </div>
                <figcaption>
                    <div class="block_prev">
                    <?=$links[5]?>
                    </div>
                    <a class="link_round" href="/location/">
                        <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                        <p><?=$links[6]?></p>
                    </a>
                </figcaption>
            </div>

            <div class="block_genplan block_single">
                <div  class="block__name">
                    <h2><?=$links[7]?></h2>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img">
                  <img src="/wp-content/themes/happy-house/assets/img/plan_bg.jpg" alt="<?=$links[7]?>" title="<?=$links[7]?>">
                </div>
                <a class="link_round" href="/genplan/">
                    <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                    <p><?=$links[44]?></p>
                </a>
            </div>

            <div class="block_hub block_double">
                <div class="block__name">
                    <?=$links[9]?>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img">
                  <img src="/wp-content/themes/happy-house/assets/img/mama_bg.jpg" alt="<?=$links[9]?>" title="<?=$links[9]?>">
                </div>
                <figcaption>
                    <div class="block_prev">
                        <?=$links[10]?>
                    </div>
                    <a class="link_round" href="/mamahub/">
                        <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                        <p>читати</p>
                    </a>
                </figcaption>
            </div>


            <div class="block_infra block_double">
                <div class="block__name">
                    <?=$links[11]?>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img ">
                    <div class="infra_slider">
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render1.jpg" title="Дитячий садок нового покоління"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render2.jpg" title="Центр дитячого розвитку"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render3.jpg" title="Сімейне кафе"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render1.jpg" title="Дитяча клініка"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render2.jpg" title="MAMA HUB"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render3.jpg" title="Безпечні дитячий та спортивний майданчики на даху"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render2.jpg" title="Простір для зберігання дитячих візків та велосипедів"></div>
                    </div>
                </div>
                <figcaption>
                    <div class="block_prev">
                    <?=$links[12]?>
                    </div>
                    <a class="link_round" href="/infrastructura/">
                        <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                        <p><?=$links[13]?></p>
                    </a>
                </figcaption>
            </div>


            <div class="block_gallery block_single">
                <div  class="block__name">
                    <h2><?=$links[14]?></h2>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img ">
                    <div class="gallery_slider">
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/render1.jpg" ></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/render2.jpg" ></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/render3.jpg" ></div>
                    </div>
                </div>
                <a class="link_round" href="/gallery/">
                    <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                    <p><?=$links[15]?></p>
                </a>
            </div>


            <div class="block_values block_double">
                <div class="block__name">
                    <?=$links[16]?>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img ">
                    <div class="values_slider">
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/value_bg.jpg" title="Продумана інфраструктура для навчання, розвитку та розваг ваших дітей"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render2.jpg" title="Екосистема, що створює затишок, комфорт та безпеку вашої сім’ї"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render3.jpg" title="Гармонічне середовище – запорука гармонійного розвитку та гармонійних відносин"></div>
                    </div>
                </div>
                <figcaption>
                    <div class="block_prev">
                      <?=$links[17]?>
                    </div>
                    <a class="link_round" href="/values/">
                        <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                        <p><?=$links[18]?></p>
                    </a>
                </figcaption>
            </div>
<?/*
            <div class="block_special block_double">
                <div class="block__name">
                    <?=$links[19]?>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img ">
                    <div class="values_slider">
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/spec_bg.jpg" title="Спеціальні умови придбання квартири для молодих сімей"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render2.jpg" title="Дизайн дитячої кімнати у подарунок при придбанні квартири"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render3.jpg" title="Бонус за народження дитини до завершення будівництва будинку"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render3.jpg" title="Вигідне кредитування"></div>

                    </div>
                </div>
                <figcaption>
                    <div class="block_prev">
                      <?=$links[20]?>
                    </div>
                    <a class="link_round" href="/special/">
                        <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                        <p><?=$links[21]?></p>
                    </a>
                </figcaption>
            </div>
            */?>
            <div class="block_special block_double">
                <div class="block__name">
                    <?=$links[22]?>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img ">
                    <div class="values_slider">

                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/adv_bg.jpg"  title="Зручне розташування"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render2.jpg"  title="Продумана інфраструктура будинку, призначена для дітей та їх батьків"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render3.jpg" title="Сучасний дитячий садок, розташований на 1-му поверсі будинку" ></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/adv_bg.jpg"  title="Безпечні дитячий та спортивний майданчики на даху будинку"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render2.jpg"  title="Система відео-нагляду за суспільними просторами, доступна усім мешканцям"></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render3.jpg" title="Зручні планування квартир, що задовольнять потреби будь-якої сім’ї" ></div>
                        <div class="double_slider_item"><img src="<?php bloginfo('template_url'); ?>/assets/img/render3.jpg" title="Спеціальні умови придбання квартири для молодих сімей" ></div>

                    </div>
                </div>
                <figcaption>
                    <div class="block_prev">
                      <?=$links[23]?>
                    </div>
                    <a class="link_round" href="/advantages/">
                        <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                        <p><?=$links[24]?></p>
                    </a>
                </figcaption>
            </div>

<?/*

            <div class="block_advantages block_single">
                <div class="block__name">
                    <h2><?=$links[22]?></h2>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img ">
                    <div class="gallery_slider1">
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/adv_bg.jpg"  title="Зручне розташування"></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/render2.jpg"  title="Продумана інфраструктура будинку, призначена для дітей та їх батьків"></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/render3.jpg" title="Сучасний дитячий садок, розташований на 1-му поверсі будинку" ></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/adv_bg.jpg"  title="Безпечні дитячий та спортивний майданчики на даху будинку"></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/render2.jpg"  title="Система відео-нагляду за суспільними просторами, доступна усім мешканцям"></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/render3.jpg" title="Зручні планування квартир, що задовольнять потреби будь-якої сім’ї" ></div>
                        <div><img src="<?php bloginfo('template_url'); ?>/assets/img/render3.jpg" title="Спеціальні умови придбання квартири для молодих сімей" ></div>
                    </div>
                    <!-- <div class="block_prev">
                      <?=$links[23]?>
                    </div> -->
                    <a class="link_round" href="/advantages/">
                        <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                        <p><?=$links[24]?></p>
                    </a>
                </div>

            </div>
*/?>
            <div class="block_flats block_single">
                <div class="block__name">
                    <h2><?=$links[25]?></h2>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img ">
                  <img src="/wp-content/themes/happy-house/assets/img/flat_bg.jpg" alt="<?=$links[25]?>" title="<?=$links[25]?>">

                    <figcaption>
                        <div class="block_prev wow fadeInRight">
                          <?=$links[26]?>
                        </div>
                        <a class="link_keys" href="/filter/">
                            <svg height="12" viewBox="0 0 100 49" width="22" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" ><path d="m-14.237332 377.98047c-9.647141-9.52657-25.149377-9.42908-34.675947.21806-2.026943 2.05259-3.643364 4.51058-5.05458 7.1712l-42.835125.26947-10.134706 10.26297 10.262973 10.13471 6.080824-6.15779 6.157784 6.08083 6.080823-6.15779 6.157784 6.08083 18.357804-.11544c1.239359 2.44002 2.886566 4.87748 5.144367 7.10706 9.647248 9.52668 25.149377 9.42909 34.675947-.21805s9.4293009-25.14938-.217948-34.67606zm-13.11093 23.54076c-3.489465-3.44585-3.522813-8.74914-.07696-12.23861 3.445852-3.48946 8.749142-3.52281 12.238607-.077 3.489464 3.44586 3.522813 8.74915.07696 12.23861-3.445853 3.48947-8.749144 3.52281-12.238607.077z" stroke-width=".150835" transform="translate(106.93769 -370.89887)"/></svg>
                            <span><?=$links[27]?></span>
                        </a>
                    </figcaption>
                </div>
            </div>

            <div class="block_commerc block_double">
                <div class="block__name">
                    <?=$links[28]?>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img">
                  <img src="/wp-content/themes/happy-house/assets/img/commerc_bg.jpg" alt="<?=$links[28]?>" title="<?=$links[28]?>">
                </div>
                <figcaption>
                    <div class="block_prev">
                      <?=$links[29]?>
                    </div>
                    <a class="link_round" href="/kommercheskaya/">
                        <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                        <p><?=$links[30]?></p>
                    </a>
                </figcaption>
            </div>

            <div class="block_atmosfera block_double">
                <div class="block__name">
                    <?=$links[31]?>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img">
                  <img src="/wp-content/themes/happy-house/assets/img/sfera_bg.jpg" alt="<?=$links[31]?>" title="<?=$links[31]?>">
                </div>
                <figcaption>
                    <div class="block_prev">
                        <?=$links[32]?>
                    </div>
                    <a class="link_round" href="/atmosfera/">
                        <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                        <p><?=$links[33]?></p>
                    </a>
                </figcaption>
            </div>


            <div class="block_building block_double">
                <div class="block__name">
                    <?=$links[34]?>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img">
                  <img src="/wp-content/themes/happy-house/assets/img/build_bg.jpg" alt="<?=$links[34]?>" title="<?=$links[34]?>">
                </div>
                <figcaption>
                    <div class="block_prev">
                      <?=$links[35]?>
                    </div>
                    <a class="link_round" href="/building/">
                        <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                        <p><?=$links[36]?></p>
                    </a>
                </figcaption>
            </div>

            <div class="block_developer block_double">
                <div class="block__name">
                    <?=$links[37]?>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img">
                    <a href="http://saga-development.com.ua/" class="develop__img" title="Saga Development">
                        <img src="<?php bloginfo('template_url'); ?>/assets/img/logos/saga-logo.svg" alt="Saga Development" title="<?=$links[37]?> Saga Development">
                    </a>
                </div>
                <figcaption>
                    <div class="block_prev">
<?=$links[38]?>
                    </div>
                    <a class="link_round" href="/developer/">
                        <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                        <p><?=$links[39]?></p>
                    </a>
                </figcaption>
            </div>

        </div>
    </section>

    <section class="projects">
        <div class="wrapper">
            <h2 class="content_subname">
                <?=$links[40]?>
            </h2>
            <div class="projects__slider">
                <a class="projects__item projects__item_bristol" href="https://bristol.house/" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logos/bristol_logo.svg" alt="BRISTOL Logo">
                </a>
                <a class="projects__item projects__item_chicago" href="https://chicago.kiev.ua/" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logos/chicago_logo.svg" alt="Chicago Logo">
                </a>
                <a class="projects__item projects__item_einstein" href="https://einstein.house/" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logos/einstein_logo.svg" alt="EINSTEIN Logo">
                </a>
                <a class="projects__item projects__item_kandinskiy" href="http://kandinsky-residence.com.ua/" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logos/kandinsky_logo.svg" alt="Kandinsky Logo">
                </a>
                <a class="projects__item projects__item_new-york" href="http://new-york.com.ua/" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logos/new_york_logo.svg" alt="New York Logo">
                </a>
                <a class="projects__item projects__item_resident" href="http://resident.house/" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logos/resident_logo.svg" alt="Resident House Logo">
                </a>
                <a class="projects__item projects__item_rybalsky" href="https://rybalsky.com.ua/" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logos/rybalsky_logo.svg" alt="Rybalsky Logo">
                </a>
                <a class="projects__item projects__item_san-francisco" href="http://san.smarto.com.ua/" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/logos/san_francisco_logo.svg" alt="San Francisco Logo">
                </a>
            </div>
        </div>
    </section>


    <section class="day">
        <div class="wrapper">
            <div class="block_day block_single">
                <div class="block__name">
<h2><?=$links[41]?></h2>
                    <div class="icon_line_box">
                        <svg class="icon_line"><use xlink:href="#line"></use></svg>
                    </div>
                    <svg class="icon_smile"><use xlink:href="#smile"></use></svg>
                </div>
                <div class="block_img ">
                    <div class="block_prev">
<?=$links[42]?>
                    </div>
                    <a class="link_round" href="/day/">
                        <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                        <p><?=$links[43]?></p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- end section contacts -->
<!--    --><?php //include_once 'includes/section-contacts.php';?>
    <!-- end section contacts -->

</div>
<!-- superseo -->
<!-- <img src="/wp-content/themes/happy-house/assets/img/gallery/gal1.jpg" class="superseo" alt="happy-house-gal1" title="happy-house-gal1">
<img src="/wp-content/themes/happy-house/assets/img/gallery/gal2.jpg" class="superseo" alt="happy-house-gal2" title="happy-house-gal2">
<img src="/wp-content/themes/happy-house/assets/img/gallery/gal3.jpg" class="superseo" alt="happy-house-gal13" title="happy-house-gal3">
<img src="/wp-content/themes/happy-house/assets/img/gallery/gal4.jpg" class="superseo" alt="happy-house-gal4" title="happy-house-gal4">
<img src="/wp-content/themes/happy-house/assets/img/gallery/gal5.jpg" class="superseo" alt="happy-house-gal5" title="happy-house-gal5">
<img src="/wp-content/themes/happy-house/assets/img/gallery/gal6.jpg" class="superseo" alt="happy-house-gal6" title="happy-house-gal6">

<img src="/wp-content/themes/happy-house/assets/img/proj_bg.jpg" class="superseo" alt="<?=$links[1]?>" title="<?=$links[1]?>">
<img src="/wp-content/themes/happy-house/assets/img/locat_bg.jpg" class="superseo" alt="<?=$links[4]?>" title="<?=$links[4]?>">

<img src="/wp-content/themes/happy-house/assets/img/plan_bg.jpg" class="superseo" alt="<?=$links[7]?>" title="<?=$links[7]?>">

<img src="/wp-content/themes/happy-house/assets/img/mama_bg.jpg" class="superseo" alt="<?=$links[7]?>" title="<?=$links[7]?>"> -->



<!-- end superseo -->
<?php get_footer();?>
