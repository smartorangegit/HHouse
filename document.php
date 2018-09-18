<?php
/*
Template Name: Документи
*/
?>
<?
//берем данные из админки, для этог опоста
$args = array('post_type' =>'page', 'include' => array(26));
$wp_posts= get_posts($args);
//текксты
$links = explode ("\n",$wp_posts[0]->post_content);
$links = str_replace('<pre>','', $links);
//изображение (одиночное)
$img = (get_the_post_thumbnail_url($post->ID, 'full'));
?>
<?php get_header(); ?>
<?php //bloginfo('template_url'); ?><!--/assets/-->
    <div class="container document_block wow fadeIn">

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
            <div class="document_inner flex">
              <div class="document_inner__item">
                <h2 class="bottom-menu_name"><?_e('doc-1','happy-house');?></h2>
                <div class="document__images flex">
                  <a class="document_links" href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/Dozvil.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/dozvil-1.jpg" alt="">
                  </a>
                  <a class="document_links is_desktop" href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/Dozvil.pdf"  target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/dozvil-2.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="document_inner__item">
                <h2 class="bottom-menu_name"><?_e('doc-2','happy-house');?></h2>
                <div class="document__images flex">
                  <a class="document_links"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/Licence.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/Licence-1.jpg" alt="">
                  </a>
                  <a class="document_links is_desktop"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/Licence.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/Licence-2.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="document_inner__item">
                <h2 class="bottom-menu_name"><?_e('doc-3','happy-house');?></h2>
                <div class="document__images flex">
                  <a class="document_links"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/EZ.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/EZ-1.jpg" alt="">
                  </a>
                  <a class="document_links is_desktop"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/EZ.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/EZ-2.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="document_inner__item">
                <h2 class="bottom-menu_name"><?_e('doc-4','happy-house');?></h2>
                <div class="document__images flex">
                  <a class="document_links"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/dodatok-do-EZ.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/dodatok-do-EZ-1.jpg" alt="">
                  </a>
                  <a class="document_links is_desktop"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/dodatok-do-EZ.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/dodatok-do-EZ-2.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="document_inner__item">
                <h2 class="bottom-menu_name"><?_e('doc-5','happy-house');?></h2>
                <div class="document__images flex">
                  <a class="document_links"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/MUO.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/MUO-1.jpg" alt="">
                  </a>
                  <a class="document_links is_desktop"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/MUO.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/MUO-2.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="document_inner__item">
                <h2 class="bottom-menu_name"><?_e('doc-6','happy-house');?></h2>
                <div class="document__images flex">
                  <a class="document_links"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/investdogovir.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/investdogovir-1.jpg" alt="">
                  </a>
                  <a class="document_links is_desktop"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/investdogovir.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/investdogovir-2.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="document_inner__item">
                <h2 class="bottom-menu_name"><?_e('doc-7','happy-house');?></h2>
                <div class="document__images flex">
                  <a class="document_links"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/dogovir.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/dogovir-1.jpg" alt="">
                  </a>
                  <a class="document_links is_desktop"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/dogovir.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/dogovir-15.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="document_inner__item">
                <h2 class="bottom-menu_name"><?_e('doc-8','happy-house');?></h2>
                <div class="document__images flex">
                  <a class="document_links"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/raspor.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/raspor-1.jpg" alt="">
                  </a>
                  <a class="document_links is_desktop"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/raspor.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/raspor-2.jpg" alt="">
                  </a>
                </div>
              </div>
              <div class="document_inner__item">
                <h2 class="bottom-menu_name"><?_e('doc-9','happy-house');?></h2>
                <div class="document__images flex">
                  <a class="document_links"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/vityag.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/vityag-1.jpg" alt="">
                  </a>
                  <a class="document_links is_desktop"  href="<?php bloginfo('template_url'); ?>/assets/img/pdf_docs/vityag.pdf" target="_blank">
                    <img src="<?php bloginfo('template_url'); ?>/assets/img/document/vityag-2.jpg" alt="">
                  </a>
                </div>
              </div>
            </div>

            <style media="screen">
            .document_inner{flex-wrap:wrap; -webkit-flex-wrap:wrap; }
            .document_block .bottom-menu_name{margin-bottom: 30px;}
            .document_inner__item{width: 48%;}
            .document_links img{width: 160px; height: auto; margin: 10px; box-shadow: 0px 0px 4px rgba(0,0,0,.1);}
            .document__images{margin-bottom: 60px;justify-content: flex-start; -webkit-justify-content: flex-start;}
            @media only screen and (max-width : 768px) {
              .document_inner{ flex-direction: column; -webkit-flex-direction: column;}
              .document_inner__item{width: 100%;}
              .document__images {flex-direction: column; -webkit-flex-direction: column; margin-bottom: 30px;}
              .document_links img { width: 100%; max-width: 260px; display: block; margin: 16px auto; }
              .document_block .bottom-menu_name{text-align: center;}
            }
            </style>




            <!-- end section contacts -->
<!--            --><?php //get_template_part('includes/section-contacts'); ?>
            <!-- end section contacts -->





        </div>
        <!-- end wrapper -->
    </div>

<?php get_footer();?>
