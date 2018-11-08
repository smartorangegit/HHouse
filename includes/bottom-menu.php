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
        <li class="contacts__info__social">
          <a href="https://www.facebook.com/Happy-House-1949651561753839/" target="_blank">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="40"
            viewBox="0 0 408.788 408.788" style="enable-background:new 0 0 408.788 408.788;" xml:space="preserve">
            <path style="fill:#475993;" d="M353.701,0H55.087C24.665,0,0.002,24.662,0.002,55.085v298.616c0,30.423,24.662,55.085,55.085,55.085
              h147.275l0.251-146.078h-37.951c-4.932,0-8.935-3.988-8.954-8.92l-0.182-47.087c-0.019-4.959,3.996-8.989,8.955-8.989h37.882
              v-45.498c0-52.8,32.247-81.55,79.348-81.55h38.65c4.945,0,8.955,4.009,8.955,8.955v39.704c0,4.944-4.007,8.952-8.95,8.955
              l-23.719,0.011c-25.615,0-30.575,12.172-30.575,30.035v39.389h56.285c5.363,0,9.524,4.683,8.892,10.009l-5.581,47.087
              c-0.534,4.506-4.355,7.901-8.892,7.901h-50.453l-0.251,146.078h87.631c30.422,0,55.084-24.662,55.084-55.084V55.085
              C408.786,24.662,384.124,0,353.701,0z"/>
          </svg>
          </a>
        </li>
      </ul>
      <div class="phone_box">
        <div class="flex " style="display: inline-flex;">
          <svg xmlns="http://www.w3.org/2000/svg" height="24" width="18" viewBox="0 0 45 45" fill="#c8c8c8"><path d="m33.506 36.816c.114.27.172.544.172.822 0 .385-.102.743-.307 1.077-.204.333-.491.588-.859.764l-1.73.81c-.675.307-1.351.53-2.028.669s-1.361.209-2.053.209c-1.113 0-2.212-.185-3.298-.555s-2.125-.9-3.117-1.589-1.923-1.523-2.792-2.5c-.869-.978-1.648-2.068-2.335-3.271-.438-.667-.898-1.428-1.381-2.283-.409-.728-.876-1.6-1.402-2.617-.526-1.016-1.056-2.145-1.592-3.384-.548-1.24-.983-2.323-1.304-3.249-.321-.927-.57-1.697-.745-2.31-.205-.716-.346-1.33-.423-1.841-.282-.949-.49-1.893-.623-2.832s-.199-1.869-.199-2.789c0-1.203.121-2.36.362-3.473s.612-2.148 1.111-3.105 1.132-1.813 1.899-2.568 1.674-1.369 2.721-1.844l1.706-.785c.269-.115.539-.172.809-.172.38 0 .734.105 1.062.316.327.211.573.502.736.874l3.283 7.455c.115.27.172.54.172.81 0 .397-.102.764-.307 1.101s-.493.59-.865.758l-3.375 1.552c-.446.205-.787.505-1.025.902-.237.397-.356.824-.356 1.282 0 .348.065.675.196.982l5.541 12.653c.217.487.516.845.899 1.074.382.229.799.344 1.249.344.307 0 .62-.07.939-.209l3.375-1.552c.266-.114.534-.172.804-.172.372 0 .724.105 1.055.316s.581.5.749.868z" transform="matrix(.91538585 .41238535 -.40257762 .9376868 2.181317 -5.822241)"/></svg>
          <div class="top-menu__item phone-number"><a href="tel:0442222233">(044) 222-22-33</a></div>
        </div>
        <a id="phone_call2" class="btn_red slidebottomleft" href="#"><?php _e('Order a call','happy-house'); ?></a>
      </div>
    </div>
  </div>
</div>
  <!--end bottom-menu -->
