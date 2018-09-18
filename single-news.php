<?php /**Сторінка новин*/?>

<?php get_header(); ?>

<?
$gallery3   	= get_post_meta($post->ID, 'gallery_block3', true);

$links = explode ("\n",$post->post_content);
$links = str_replace('<pre>','', $links);


$args = array('post_type' =>'page', 'include' => array(51));
$wp_posts= get_posts($args);
$pageContent = explode ("\n",$wp_posts[0]->post_content);

//print_r($post);
$pdt = explode(' ',$post->post_date);

$img=get_the_post_thumbnail_url( $post->ID);
?>
    <div class="container newsitem_block">

        <!-- header -->
        <div class="header">
            <div class="main_name">
                <div class="line_grey">
                    <div class="line_fanny"></div>
                </div>
                <div class="name_box">
                    <span><?the_title();?></span>
                </div>
            </div>
        </div>
        <!-- end header -->

        <div class="wrapper flex">
            <div class="line_link">
                <a href="/" class="link_active"><?php _e('breadcr-1','happy-house');?></a>&#8195;|&#8195;
                <a href="/news" class="link_active"><?php _e('News','happy-house');?></a>&#8195;|&#8195;
                <span class="link_no_active"><?the_title();?></span>
            </div>
            <div class="news_date">
                <svg enable-background="new 0 0 508.52 508.52" height="16"  fill="#ee1c25" viewBox="0 0 508.52 508.52" width="26" xmlns="http://www.w3.org/2000/svg"><g><path d="m506.645 89.372c-4.036-12.935-15.637-22.502-29.907-22.502h-31.782v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-190.855v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-31.623c-14.27 0-25.903 9.567-29.907 22.502h-1.875v387.365c0 17.544 14.239 31.782 31.782 31.782h444.955c17.544 0 31.782-14.239 31.782-31.782v-387.365zm-29.908 387.365h-444.955v-254.26h444.955z"/><path d="m111.08 132.088c8.772 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.119-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.119 15.891 15.891 15.891z"/><path d="m397.281 132.088c8.74 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.151-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.151 15.891 15.891 15.891z"/></g></svg>
                <span><?=$pdt[0]?></span>
                <svg enable-background="new 0 0 559.98 559.98" height="16" fill="#ee1c25" viewBox="0 0 559.98 559.98" width="26" xmlns="http://www.w3.org/2000/svg"><path d="m279.99 0c-154.389 0-279.99 125.601-279.99 279.99 0 154.39 125.601 279.99 279.99 279.99 154.39 0 279.99-125.601 279.99-279.99s-125.6-279.99-279.99-279.99zm0 498.78c-120.644 0-218.79-98.146-218.79-218.79 0-120.638 98.146-218.79 218.79-218.79s218.79 98.152 218.79 218.79c0 120.644-98.146 218.79-218.79 218.79z"/><path d="m304.226 280.326v-117.35c0-13.103-10.618-23.721-23.716-23.721-13.102 0-23.721 10.618-23.721 23.721v124.928c0 .373.092.723.11 1.096-.312 6.45 1.91 12.999 6.836 17.926l88.343 88.336c9.266 9.266 24.284 9.266 33.543 0 9.26-9.266 9.266-24.284 0-33.544z"/></svg>
                <span><?=$pdt[1]?></span>
            </div>
        </div>

        <div class="news_item_wrapper">
            <div class="newsitem_img">
                <?
                $img = (get_the_post_thumbnail_url($post->ID, 'full'));

                $metasz2 = get_post_meta( $post->ID);
                //                print_r($metasz2);
                if(!empty($img)){
                    ?>
<!--                    <img src="--><?//=$img?><!--" alt="News Image">-->
                    <?
                }
                else {
                    for ($i = 0; $i <= $metasz2['gallery_news'][0]; $i++) {
                        if (!empty($metasz2['gallery_news_' . $i . '_img'][0])) {
                            $image_attributesz2 = wp_get_attachment_image_src($metasz2['gallery_news_' . $i . '_img'][0]);
                            $bigz2 = str_replace('-150x150', '', $image_attributesz2[0]);
                            ?>
                            <img src="<?= $bigz2 ?>" alt="News Image">
                        <? } else {
                        }
                    }
                }
                ?>
            </div>
<?//print_r($post);?>
            <div class="newsitem_text">
                <?=$post->post_content;?>
            </div>

            <div class="newsitem_btn flex">
                <a href="/news/" class="btn_transparent">
                    <svg fill="#ee1c25" height="14" viewBox="0 0 215.60001 421.0636" width="50" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" style="position:relative; top:-1px;"><path d="m215.6 416.08179c0 2-1.2 3.8-3.1 4.6s-4 .3-5.4-1.1l-205.6-205.6c-1-1-1.5-2.3-1.5-3.5s.5-2.6 1.5-3.5l205.5-205.4999914c1.3-1.4 3.5-1.9 5.5-1.1 1.9.8 3.1 2.6000001 3.1 4.6000002z"></path></svg>
                    <?_e('back to news','happy-house');?>
                </a>
                <a href="/level-floor/" class="btn_red">
                    <svg height="12" viewBox="0 0 100 49" width="50" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" ><path d="m-14.237332 377.98047c-9.647141-9.52657-25.149377-9.42908-34.675947.21806-2.026943 2.05259-3.643364 4.51058-5.05458 7.1712l-42.835125.26947-10.134706 10.26297 10.262973 10.13471 6.080824-6.15779 6.157784 6.08083 6.080823-6.15779 6.157784 6.08083 18.357804-.11544c1.239359 2.44002 2.886566 4.87748 5.144367 7.10706 9.647248 9.52668 25.149377 9.42909 34.675947-.21805s9.4293009-25.14938-.217948-34.67606zm-13.11093 23.54076c-3.489465-3.44585-3.522813-8.74914-.07696-12.23861 3.445852-3.48946 8.749142-3.52281 12.238607-.077 3.489464 3.44586 3.522813 8.74915.07696 12.23861-3.445853 3.48947-8.749144 3.52281-12.238607.077z" stroke-width=".150835" transform="translate(106.93769 -370.89887)"/></svg>
                    <span><?_e('choose ap','happy-house');?></span>
                </a>

            </div>

        </div>

        <div class="header">
            <div class="main_name">
                <div class="line_grey">
                    <div class="line_fanny"></div>
                </div>
                <div class="name_box">
                    <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
                    <span><?_e('Read more','happy-house');?></span>
                    <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
                </div>
            </div>
        </div>


        <div class="wrapper">

            <section class="news_block flex">
                <?php
                $post = get_post(60);
                $ReaNews =LoadingNews(NewsOnPage, 0);

                if (count($ReaNews['ReaNews'])) {

                    $i = 0;
                    foreach ($ReaNews['ReaNews'] as $k => $post) {

                        $img = get_the_post_thumbnail_url($post->ID);
                        if (!$img) {
                            $img = get_template_directory_uri() . "/assets/img/defolt.png";
                        }
//                    print_r($post);
                        $date = explode(' ', $post->post_date);
                        $new_date = explode('-', $date[0]);
                        $title = get_the_title();
                        $rest = substr($title, 0, 87);
                        ?>
                        <div class="block_double news_item__<?=$i;?>">
                            <div class="block__name">
                                <?php echo $post->post_title; ?>
                                <div class="icon_line_box">
                                    <svg class="icon_line"><use xlink:href="#line"></use></svg>
                                </div>
                            </div>
                            <div class="block_img" style="background-image: url('<?=$img?>')"></div>
                            <figcaption class="flex">
                                <div class="block_prev">
                                    <?php echo $post->post_excerpt; ?>
                                </div>
                                <a class="link_round" href="<?php echo $post->post_name; ?>">
                                    <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                                    <p><?_e('Read','happy-house');?></p>
                                </a>
                            </figcaption>
                        </div>


                        <?php
                        $i++;
                        if($i>=2){
                            break;
                        }
                    }
                }
                ?>

            </section>

        </div>
        <!-- end wrapper -->
    </div>
<style>
    sub{position:relative; font-size:60%; top:-5px;}
</style>




<?php get_footer(); ?>