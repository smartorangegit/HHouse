<?php
/*
Template Name: Благодарность
*/
?>
<?php get_header(); ?>
    <div class="container">
      <div class="message_logo">
        <a href="/" title="Happy House">
          <img src="/wp-content/themes/happy-house/assets/img/HH_logo.svg" alt="Happy">
        </a>

      </div>


      <div class="message_inner">
        <p class="block_name"><?_e('tnk-mess-1','happy-house');?></p>
        <p>
            <?_e('tnk-mess-2','happy-house');?>
        </p>
        <p>
            <?_e('tnk-mess-3','happy-house');?>
        </p>

      </div>
      <section class="projects">
        <div class="wrapper">
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
      <a class="btn_red" href="/"><?_e('tnk-mess-4','happy-house');?></a>



    </div>
    <style media="screen">
      html, body{
        height: 100%;
      }
      .header{
        position: absolute;
        width: 100%;
        bottom: 0;
      }
      .container{
        height: 100%;
        background: url('/wp-content/themes/happy-house/assets/img/message.jpg') center no-repeat;
        background-size: cover;
        color: white;
        text-align: center;
      }
      .header {
        margin-top: 0;
      }
      p{
        font-size: 18px;
        line-height: 1.8;
      }
      .block_name{
        font-size: 40px;
        margin-top: 12vh;
        margin-bottom: 5vh;
        line-height: 1.3;
      }
      .projects .wrapper {
        border: none;
        max-width: 1160px;
        padding: 5px 0;
        background: rgba(255,255,255,.5);
        }
      .message_logo{
        background: rgba(255,255,255,.8);
        }
      .footer{
        height: 0;
        overflow: hidden;
      }
      .btn_red{
        max-width: 280px;
        margin: 0 auto;
      }
    </style>

<?php get_footer();?>