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

    <?php include_once 'includes/top-menu.php';?>
    <?php include_once 'includes/form_callback.php';?>

    <div class="container">
      <div class="day_block">
        <div class="wrapper">
          <div class="line_link">
            <a href="/" class="link_active">Главная</a>&#8195;|&#8195;
            <span class="link_no_active">День у Happy House</span>
          </div>
          <div class="day_controls">
            <div class="day_round">
              <div class="icon_line_box">
                <svg class="icon_line line_active"><use xlink:href="#line"></use></svg>
              </div>
              <span>Сніданок у сімейному колі</span>
              <div class="day_looktime">08:00</div>
            </div>
            <div class="day_line">
              <ul>
                <li class="day_time day_time_active" data-time="08:00" data-image="img1" data-info="Сніданок у сімейному колі"></li>
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

    <!-- <script type="text/javascript">

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

    </script> -->
  </body>
</html>
