<?php
/*
Template Name: Новини
*/
?>
<?php get_header(); ?>
    <div class="container advantages_block wow fadeIn">

    <!-- header -->
    <div class="header">
        <div class="main_name">
            <div class="line_grey">
                <div class="line_fanny"></div>
            </div>
            <div class="name_box">
                <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
                <span><h1><?_e('News','happy-house');?></h1></span>
                <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
            </div>
        </div>
    </div>
    <!-- end header -->

    <section class="wrapper">
    <div class="line_link">
        <a href="/" class="link_active"><?php _e('breadcr-1','happy-house');?></a>&#8195;|&#8195;<span class="link_no_active"><?_e('News','happy-house');?></span>
    </div>
        <!-- page-top -->

        <section class="news_block flex">

            <?php
            //$post = get_post(60);
            $ReaNews =LoadingNews(-1, 0);

            if (count($ReaNews['ReaNews'])) {

                $i = 0;
                foreach ($ReaNews['ReaNews'] as $k => $post) {

                    $img = get_the_post_thumbnail_url($post->ID);
                    if (!$img) {
                        $img = get_template_directory_uri() . "/assets/img/defolt.png";
                    }

                    $date = explode(' ', $post->post_date);
                    $new_date = explode('-', $date[0]);
                    $title = get_the_title();
                    $rest = substr($title, 0, 87);
                    ?>
                    <div class="block_double news_item__<?=$i;?>">
                        <div class="block__name">
                            <h2><?php echo $post->post_title; ?></h2>
                            <div class="icon_line_box">
                                <svg class="icon_line"><use xlink:href="#line"></use></svg>
                            </div>
                        </div>
                        <div class="block_img" style="position:relative;">
                          <img src="<?=$img?>" alt="<?php echo $post->post_title; ?>" title="<?php echo $post->post_title; ?>">
                        </div>
                        <figcaption class="flex">
                            <div class="block_prev">
                              <div class="date" style="font-size: 0.8em; color: #666;">
                                <?=$date[0]?>
                              </div>
                                <?php echo $post->post_excerpt; ?>
                            </div>
                           <div>
                                <a class="link_round"  href="<?php echo $post->post_name; ?>">
                                    <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                                    <p><?_e('Read','happy-house');?></p>
                                </a>
                           <div>

                        </figcaption>
                    </div>
                    <?php
                    $i++;
                }
            }
            ?>

<!--            <div class="pagination">-->
<!--                <ul class="pad__center">-->
<!--                    <li><a href="#">1</a></li>-->
<!--                    <li><a href="#">2</a></li>-->
<!--                    <li><a href="#">3</a></li>-->
<!--                    <li><a href="#">4</a></li>-->
<!--                    <li><a href="#">5</a></li>-->
<!--                </ul>-->
<!--            </div>-->


        </section><!--news__list end-->
    </div>

<?php get_footer(); ?>
