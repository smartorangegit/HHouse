<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>День у Happy House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
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
        </defs>
      </svg>
    </div>
    <!-- end hidden block -->

    <!-- top-menu -->
    <?php include_once 'includes/top-menu.php';?>
    <!-- end top-menu -->
    <div class="container">

      
      <div class="day_block">
        <div class="wrapper">
          <div class="line_link">
            <a href="/" class="link_active">Главная</a>&#8195;/&#8195;
            <span class="link_no_active">День у Happy House</span>
          </div>
          <div class="day_controls">
            <div class="day_round">
              <span>Сніданок у сімейному колі</span>
              <div class="day_looktime">08:00</div>
            </div>
            <div class="day_line">
              <ul>
                <li class="day_time" data-time="08:00" data-image="img1" data-info="Сніданок у сімейному колі"></li>
                <li class="day_time" data-time="09:00" data-image="img2" data-info="Відвести малюка до дитячого садочку на першому поверсі Happy House"></li>
                <li class="day_time" data-time="10:00" data-image="img3" data-info="Позайматися спортом на тренажерах, що розташовані на даху будинку"></li>
                <li class="day_time" data-time="12:00" data-image="img4" data-info="Прогулятися у найближчому парку"></li>
                <li class="day_time" data-time="13:00" data-image="img5" data-info="Пообідати у сімейному кафе"></li>
                <li class="day_time" data-time="15:00" data-image="img6" data-info="Відвідати із дитиною центр дитячого розвитку"></li>
                <li class="day_time" data-time="17:00" data-image="img7" data-info="Побавитися із малюком на дитячому майданчику"></li>
                <li class="day_time" data-time="19:00" data-image="img8" data-info="Повечеряти усією сім&prime;єю"></li>
                <li class="day_time" data-time="21:00" data-image="img9" data-info="Подивитися улюблений фільм у затишній вітальні"></li>
              </ul>
            </div>
            <!-- end day_line -->
          </div>
        </div>
      </div>
        <!-- end wrapper -->
    </div>
    <!-- end section -->

    <!-- footer -->
    <?php include_once 'includes/footer.php';?>
    <!-- end footer -->

    <script type="text/javascript">

    $('.day_time').hover(function(){
      var image = this.dataset.image
      var info = this.dataset.info
      var time = this.dataset.time
      $('.day_block').css('backgroundImage','url(img/day/' + image + '.jpg)');
      $('.day_looktime').html(time);
      $('.day_round span').html(info);
      $('.day_time').removeClass('day_time_active');
      $(this).addClass('day_time_active');
    });

    </script>
  </body>
</html>
