<!-- bottom-menu -->
<div class="bottom-menu">
  <div class="wrapper flex">
    <div class="bottom-menu__item">
      <p class="bottom-menu_name"><?php _e('about project','happy-house'); ?></p>
      <ul>
          <?php
          wp_nav_menu(array(
              'theme_location' => 'footer-menu-1',
              'container'      => '',
              'container_class'=>'',
              'menu_class'     => '   ',
              'menu_id'     => '   ',
              'depth' =>1,
              'walker'=> new Foter_Walker_Nav_Menu()
          ));
          ?>
      </ul>
    </div>
    <div class="bottom-menu__item">
      <p class="bottom-menu_name"><?php _e('choose apartment','happy-house'); ?></p>
      <ul>
          <?php
          wp_nav_menu(array(
              'theme_location' => 'footer-menu-2',
              'container'      => '',
              'container_class'=>'',
              'menu_class'     => '   ',
              'menu_id'     => '   ',
              'depth' =>1,
              'walker'=> new Foter_Walker_Nav_Menu()
          ));
          ?>
        <!-- <li><a href="#">Коммерційна нерухомість</a></li> -->
      </ul>
    </div>
    <div class="bottom-menu__item">
      <p class="bottom-menu_name"><?php _e('Construction','happy-house'); ?></p>
      <ul>
          <?php
          wp_nav_menu(array(
              'theme_location' => 'footer-menu-3',
              'container'      => '',
              'container_class'=>'',
              'menu_class'     => '   ',
              'menu_id'     => '   ',
              'depth' =>1,
              'walker'=> new Foter_Walker_Nav_Menu()
          ));
          ?>

      </ul>
    </div>
    <div class="bottom-menu__item">
      <p class="bottom-menu_name"><?php _e('Sales department','happy-house'); ?></p>
      <ul>
        <li>
            <img style="width: 32px; height: 32px;     margin: 0 0 -11px 0;" src="<?php bloginfo('template_url'); ?>/assets/img/m.png" alt="Happy House">
            <?_e('metro','happy-house');?></li>
        <li><?php _e('locat','happy-house'); ?>, 67</p></li>
      </ul>
      <div class="phone_box">
        <div class="flex " style="display: inline-flex;">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" width="18" viewBox="0 0 45 45" fill="#c8c8c8"><path d="m33.506 36.816c.114.27.172.544.172.822 0 .385-.102.743-.307 1.077-.204.333-.491.588-.859.764l-1.73.81c-.675.307-1.351.53-2.028.669s-1.361.209-2.053.209c-1.113 0-2.212-.185-3.298-.555s-2.125-.9-3.117-1.589-1.923-1.523-2.792-2.5c-.869-.978-1.648-2.068-2.335-3.271-.438-.667-.898-1.428-1.381-2.283-.409-.728-.876-1.6-1.402-2.617-.526-1.016-1.056-2.145-1.592-3.384-.548-1.24-.983-2.323-1.304-3.249-.321-.927-.57-1.697-.745-2.31-.205-.716-.346-1.33-.423-1.841-.282-.949-.49-1.893-.623-2.832s-.199-1.869-.199-2.789c0-1.203.121-2.36.362-3.473s.612-2.148 1.111-3.105 1.132-1.813 1.899-2.568 1.674-1.369 2.721-1.844l1.706-.785c.269-.115.539-.172.809-.172.38 0 .734.105 1.062.316.327.211.573.502.736.874l3.283 7.455c.115.27.172.54.172.81 0 .397-.102.764-.307 1.101s-.493.59-.865.758l-3.375 1.552c-.446.205-.787.505-1.025.902-.237.397-.356.824-.356 1.282 0 .348.065.675.196.982l5.541 12.653c.217.487.516.845.899 1.074.382.229.799.344 1.249.344.307 0 .62-.07.939-.209l3.375-1.552c.266-.114.534-.172.804-.172.372 0 .724.105 1.055.316s.581.5.749.868z" transform="matrix(.91538585 .41238535 -.40257762 .9376868 2.181317 -5.822241)"/></svg>
          <span><a href="tel:0442222233">(044) 499-07-70</a></span>
        </div>
        <a id="phone_call2" class="btn_red slidebottomleft" href="#"><?php _e('Order a call','happy-house'); ?></a>
      </div>
    </div>
  </div>
</div>
  <!--end bottom-menu -->
