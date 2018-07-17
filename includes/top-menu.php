<!-- hidden block -->
<div class="hidden__box">
  <div id="arrow_right">
    <svg height="421.0636" viewBox="0 0 215.60001 421.0636" width="215.60001" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><path d="m0 416.08179c0 2 1.2 3.8 3.1 4.6s4 .3 5.4-1.1l205.6-205.6c1-1 1.5-2.3 1.5-3.5s-.5-2.6-1.5-3.5l-205.5-205.4999914c-1.3-1.4-3.5-1.9-5.5-1.1-1.9.8-3.1 2.6000001-3.1 4.6000002z"/></svg>
  </div>
  <div id="arrow_left">
    <svg height="421.0636" viewBox="0 0 215.60001 421.0636" width="215.60001" xmlns="http://www.w3.org/2000/svg" fill="#ffffff"><path d="m215.6 416.08179c0 2-1.2 3.8-3.1 4.6s-4 .3-5.4-1.1l-205.6-205.6c-1-1-1.5-2.3-1.5-3.5s.5-2.6 1.5-3.5l205.5-205.4999914c1.3-1.4 3.5-1.9 5.5-1.1 1.9.8 3.1 2.6000001 3.1 4.6000002z"/></svg>
  </div>
  <svg width="0" height="0" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
    <defs>
      <symbol id="long_arrow_right" viewBox="0 0 89 49">
        <title id="title">long_arrow_right</title>
        <path d="m71.415 74.415 22.498-22.499c.094-.093.178-.196.251-.307.032-.047.054-.099.081-.148.035-.064.074-.127.103-.195.027-.065.043-.133.063-.2.017-.058.039-.113.051-.173.052-.259.052-.524 0-.783-.012-.06-.034-.115-.051-.173-.02-.067-.035-.135-.063-.2-.028-.068-.067-.131-.103-.195-.027-.05-.049-.102-.081-.148-.073-.11-.157-.214-.251-.307l-22.498-22.501c-.781-.781-2.048-.781-2.828 0-.391.391-.586.902-.586 1.414s.195 1.023.586 1.414l19.086 19.086h-80.172c-1.104 0-2 .896-2 2s.896 2 2 2h80.172l-19.086 19.086c-.391.391-.586.902-.586 1.414s.195 1.023.586 1.414c.78.782 2.047.782 2.828.001z" transform="translate(-5.501 -26.00025)"></path>
      </symbol>
      <symbol id="smile" viewBox="0 0 22 22" height="100" width="100">
        <title id="title">smile</title>
        <g fill="#ccc" transform="matrix(.99598086 0 0 .94256753 -358.584634 -380.57059)"><path d="m364.27339 410.6c1.6 0 2.9-1.3 2.9-2.9s-1.3-2.9-2.9-2.9-2.9 1.3-2.9 2.9 1.3 2.9 2.9 2.9z"/><path d="m378.07339 414.9c-1.6 0-2.8 1.3-2.8 2.8-.2 2.1-1.9 3.8-4.1 3.8s-3.9-1.7-4.1-3.8c0-1.6-1.3-2.8-2.8-2.8-1.6 0-2.8 1.3-2.8 2.8.2 5.2 4.4 9.4 9.7 9.4s9.5-4.2 9.7-9.4c0-1.5-1.2-2.8-2.8-2.8z"/><path d="m378.07339 404.8c-1.6 0-2.9 1.3-2.9 2.9s1.3 2.9 2.9 2.9 2.9-1.3 2.9-2.9-1.3-2.9-2.9-2.9z"/></g>
      </symbol>
      <symbol id="line" height="12" viewBox="0 0 24 1" width="90">
        <title id="title">line</title>
        <g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" stroke="#ee1c25"/><g><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g>
      </symbol>
      <symbol id="arrow_circle" height="100" viewBox="0 0 40 40" width="100">
        <title id="title">arrow_circle</title>
        <path fill="#ee1c25" d="m20 0c-11.027 0-20 8.973-20 20s8.973 20 20 20 20-8.973 20-20-8.973-20-20-20zm7.059 22.281h-9.187l2.142 2.521c.815.96.698 2.399-.263 3.216-.429.363-.953.543-1.476.543-.646 0-1.288-.272-1.739-.806l-5.334-6.278c-.723-.853-.723-2.103 0-2.953l5.334-6.279c.814-.961 2.254-1.078 3.215-.264.961.815 1.078 2.256.263 3.217l-2.142 2.521h9.187c1.26 0 2.28 1.021 2.28 2.281s-1.021 2.281-2.28 2.281z" transform="matrix(-1 0 0 1 40 0)"/></svg>
      </symbol>
    </defs>
  </svg>
</div>
<!-- end hidden block -->
<!-- top-menu -->
<div class="top-menu">
  <div class="wrapper flex">

    <div class="top-menu__left">
      <div class="top-menu__logo">
        <a href="/">
          <img src="<?php bloginfo('template_url'); ?>/assets/img/HH_logo.svg" alt="Happy House">
        </a>
      </div>
    </div>
      <?
      $locale = get_locale();
      if($locale=='uk'){
          $locale = 'ua';
      }
      $requestU = $_SERVER['REQUEST_URI'];
      if($locale=='ru_RU'){
          $locale = 'ru';
          $requestU = str_replace('/ru','',$_SERVER['REQUEST_URI']);
      }
      $uaUri = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/'.'ua'.$requestU;
      $ruUri = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'].'/'.'ru'.$requestU;
      ?>
    <div class="top-menu__right flex">
      <div class="top-menu__item is_desktop">
        <a href="#" class="top-menu__link" style="color:#ed1c24">▼</a>

        <ul class="lang_list">
          <li class="lang_item lang_item_active" style="padding-bottom:3px;"><a href="<?=$uaUri?>">Укр</a> </li>
          <li class="lang_item" style="padding-bottom:3px;"><a href="<?=$ruUri?>">Рус</a> </li>
        </ul>
        <!-- <span>Укр</span> -->

      </div>
      <div class="top-menu__item is_desktop">
        <a href="/webcam/" class="top-menu__link">
          <svg enable-background="new 0 0 370 370" viewBox="0 0 370 370" xmlns="http://www.w3.org/2000/svg" fill="#ed1c24"><path d="m274.221 284.781c40.578-28.245 67.146-75.225 67.146-128.415 0-86.358-70.009-156.366-156.367-156.366-86.357 0-156.367 70.008-156.367 156.365 0 53.19 26.568 100.17 67.146 128.415l-37.202 38.376c-2.58 3.626-3.972 7.965-3.972 12.416v13.031c0 11.817 9.58 21.396 21.396 21.396h217.998c11.815 0 21.395-9.579 21.395-21.396v-13.031c0-4.451-1.392-8.79-3.972-12.416zm-89.221-201.398c40.309 0 72.983 32.676 72.983 72.982 0 40.307-32.674 72.983-72.983 72.983s-72.982-32.676-72.982-72.983c0-40.306 32.673-72.982 72.982-72.982zm-83.048 249.033 28.549-29.454c16.969 6.314 35.328 9.769 54.499 9.769s37.53-3.455 54.499-9.769l28.549 29.454z"/><path d="m185 201.689c25.033 0 45.322-20.291 45.322-45.324 0-16.152-8.456-30.32-21.177-38.349-.274 7.068-10.968 12.752-24.145 12.752-13.176 0-23.871-5.684-24.145-12.752-12.721 8.028-21.177 22.197-21.177 38.349 0 25.033 20.289 45.324 45.322 45.324z"/></svg>
        <span>Камера</span>
      </a>
      </div>
      <div class="top-menu__item is_desktop">
        <a href="/gallery/" class="top-menu__link">
          <svg xmlns="http://www.w3.org/2000/svg" enable-background="new 0 0 440 440" viewBox="0 0 440 440" fill="#ed1c24"><path d="m421.376 46.336h-403.456c-9.728 0-17.92 8.192-17.92 17.92v310.784c0 9.728 8.192 17.92 17.92 17.92h403.456c9.728 0 17.92-8.192 17.92-17.92v-310.784c0-10.24-7.68-17.92-17.92-17.92zm-17.92 214.528-73.216-58.368c-6.656-5.12-16.384-5.12-23.04.512l-82.432 71.68-109.056-122.88c-3.584-3.584-8.704-6.144-13.824-6.144s-9.728 2.048-13.312 5.632l-52.736 57.344v-126.464h367.616z"/><path d="m219.648 92.928c-32.256 0-58.88 26.624-58.88 58.88s26.112 58.88 58.88 58.88 58.88-26.624 58.88-58.88c0-32.768-26.624-58.88-58.88-58.88z"/></svg>
        <span>Галерея</span>
      </a>
      </div>
      <div class="top-menu__item phone-number"><span class="big_letter">(044)</span> 223-16-53</div>
      <div id="phone_call" class="top-menu__item menu__link top-menu__link slidebottomleft" style="flex-direction: row; -webkit-flex-direction: row;">
        <svg  class="phone_icon" height="20" width="8" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 8 26" fill="#ffffff"><path d="m10.435875 22.732923c-.249882.2779-.4998781.54072-.7643519.8111-.6175235.50315-1.3378727.90119-2.094986 1.14898-1.1171739.23283-2.2786356.18024-3.3885707-.14267-.7056435-.2178-1.2862889-.70593-1.6170522-1.36678-3.41062922-6.68383-3.42533488-14.6368295-.058823-21.3431895.3895859-.75863 1.0731139-1.33685003 1.881697-1.55464003.6027039-.15765 1.2055218-.27033 1.8008158-.2853 1.3966383-.0226 2.9622778.86357 4.094272 1.65965003.139646.0901.157343.0609.157343.24113 0 .0901.04197.23545-.0094.31058l-3.0585897 4.53251c-.1396467.24779-.4557613.33788-.7056435.1952l-1.5142835-.84854c-.088177-.0526-.1764108-.0676-.2645878-.0676-.3014089 0-.5292326.24779-.5292326.55568v11.5427895c0 .30789.2278807.55574.5292896.55574.1028826 0 .2057652-.0376.2939991-.0901l.852643-.59324c.2278237-.14267.5071171-.10517.683528.0751l3.6899804 3.92762c.08818.10517.139647.23282.139647.3755 0 .12771-.05147.25536-.117646.36047z" stroke-width="0.057614"/></svg>


          <span class="is_desktop">Замовити дзвінок</span>
      </div>
      <div id="menu" class="top-menu__item menu__link open-overlay">
        <span style="margin-bottom:-1px;">Меню</span>
        <span class="menu_line"></span>
        <span class="menu_line"></span>
      </div>
    </div>
  </div>
</div>
<!-- выпадающее меню -->
<div class="overlay-navigation">
  <!-- <div class="nav_inner"> -->

  <nav role="navigation">
    <div class="main_name">
      <div class="line_grey is_desktop">
        <div class="line_fanny"></div>
      </div>
      <div class="name_box">
        <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
        <span>Меню</span>
        <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
      </div>
    </div>
    <ul>
      <!-- <li class="nav_item"></li> -->
      <li class="nav_item">

        <a href="/" class="nav_name">Головна</a>
        <ul>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu-left',
                'container'      => '',
                'container_class'=>'',
                'menu_class'     => '   ',
                'menu_id'     => '   ',
                'depth' =>1,
                'walker'=> new Foter_Walker_Nav_Menu()
            ));
            ?>
        </ul>
      </li>
      <li class="nav_item">
        <p class="nav_name">Проект:</p>
        <ul>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu-2',
                'container'      => '',
                'container_class'=>'',
                'menu_class'     => '   ',
                'menu_id'     => '   ',
                'depth' =>1,
                'walker'=> new Foter_Walker_Nav_Menu()
            ));
            ?>
        </ul>
      </li>
      <li class="nav_item">
        <p class="nav_name">Обрати квартиру</p>
        <ul>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu-3',
                'container'      => '',
                'container_class'=>'',
                'menu_class'     => '   ',
                'menu_id'     => '   ',
                'depth' =>1,
                'walker'=> new Foter_Walker_Nav_Menu()
            ));
            ?>
        </ul>
      </li>
      <li class="nav_item">
        <p class="nav_name">Хід проекту</p>
        <ul>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu-4',
                'container'      => '',
                'container_class'=>'',
                'menu_class'     => '   ',
                'menu_id'     => '   ',
                'depth' =>1,
                'walker'=> new Foter_Walker_Nav_Menu()
            ));
            ?>
        </ul>
      </li>
      <li class="nav_item">
        <p class="nav_name">Контакти</p>
        <ul>
            <?php
            wp_nav_menu(array(
                'theme_location' => 'main-menu-5',
                'container'      => '',
                'container_class'=>'',
                'menu_class'     => '   ',
                'menu_id'     => '   ',
                'depth' =>1,
                'walker'=> new Foter_Walker_Nav_Menu()
            ));
            ?>
          <li>метро Нивки</li>
          <li>
            <div class="phone_box">
              <div class="flex">
                <svg xmlns="http://www.w3.org/2000/svg" height="24" width="18" viewBox="0 0 45 45" fill="#c8c8c8"><path d="m33.506 36.816c.114.27.172.544.172.822 0 .385-.102.743-.307 1.077-.204.333-.491.588-.859.764l-1.73.81c-.675.307-1.351.53-2.028.669s-1.361.209-2.053.209c-1.113 0-2.212-.185-3.298-.555s-2.125-.9-3.117-1.589-1.923-1.523-2.792-2.5c-.869-.978-1.648-2.068-2.335-3.271-.438-.667-.898-1.428-1.381-2.283-.409-.728-.876-1.6-1.402-2.617-.526-1.016-1.056-2.145-1.592-3.384-.548-1.24-.983-2.323-1.304-3.249-.321-.927-.57-1.697-.745-2.31-.205-.716-.346-1.33-.423-1.841-.282-.949-.49-1.893-.623-2.832s-.199-1.869-.199-2.789c0-1.203.121-2.36.362-3.473s.612-2.148 1.111-3.105 1.132-1.813 1.899-2.568 1.674-1.369 2.721-1.844l1.706-.785c.269-.115.539-.172.809-.172.38 0 .734.105 1.062.316.327.211.573.502.736.874l3.283 7.455c.115.27.172.54.172.81 0 .397-.102.764-.307 1.101s-.493.59-.865.758l-3.375 1.552c-.446.205-.787.505-1.025.902-.237.397-.356.824-.356 1.282 0 .348.065.675.196.982l5.541 12.653c.217.487.516.845.899 1.074.382.229.799.344 1.249.344.307 0 .62-.07.939-.209l3.375-1.552c.266-.114.534-.172.804-.172.372 0 .724.105 1.055.316s.581.5.749.868z" transform="matrix(.91538585 .41238535 -.40257762 .9376868 2.181317 -5.822241)"/></svg>
                <div>(044) 222-22-33</div>
              </div>
              <a id="phone_call1" class="btn_red slidebottomleft" href="#">Замовити дзвінок</a>
            </div>
          </li>
        </ul>
      </li>
      <!-- <li class="nav_item"></li> -->
    </ul>
    <div class="nav_logo">
      <a href="/">
        <img src="<?php bloginfo('template_url'); ?>/assets/img/HH_logo.svg" alt="Happy House">
      </a>
    </div>
    <div class="close_btn open-overlay">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50" height="50"><path d="M37.304 11.282l1.414 1.414-26.022 26.02-1.414-1.413z" fill="#ed1c24"></path><path d="M12.696 11.282l26.022 26.02-1.414 1.415-26.022-26.02z" fill="#ed1c24"></path></svg>
    </div>
  </nav>
<!-- </div> -->
</div>
<!-- end top-menu -->
