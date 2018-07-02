<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Хід будівництва Happy House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/jquery.fancybox.css">
  </head>
  <body>

    <!-- top-menu -->
    <?php include_once 'includes/top-menu.php';?>
    <!-- end top-menu -->
    <?php include_once 'includes/form_callback.php';?>

    <div class="container_building">

      <!-- header -->
      <div class="header">
        <div class="main_name">
          <div class="line_grey">
            <div class="line_fanny"></div>
          </div>
          <div class="name_box">
            <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
            <span>Хід будівництва</span>
            <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
          </div>
        </div>
      </div>
      <!-- end header -->

        <div class="wrapper">
          <div class="line_link">
            <a href="/" class="link_active">Головна</a>&#8195;|&#8195;<span class="link_no_active">Хід будівництва</span>
          </div>

          <div class="status_box flex">

            <div class="building_timebar flex">

              <div class="timebar__item flex">
                <div class="timebar_name"> Будівництво</div>
                <div class="tooltip tooltip-effect-2">
                  <div class="tooltip-item">
                    <svg class="container_svg" id="container1_0"></svg>
                  </div><!--Фасад-->
                  <div class="tooltip-content clearfix">
                    <div class="tooltip-text">
                      Роботи до відм. 0,000 - 70%<br>
                      Каркас -36.04%<br>
                      Цегляна кладка - 9.79%<br>
                      Внутрішнє опорядження - 0%
                     </div>
                  </div>
                </div>
              </div>

              <div class="timebar__item flex">
                <div class="timebar_name">Благоустрій</div>
                  <svg class="container_svg" id="container1_1" style="font-weight: 700; padding: 0 10px; box-sizing: content-box;"></svg>
              </div>

              <div class="timebar__item flex">
                <div class="timebar_name">Фасад</div>
                <div class="tooltip tooltip-effect-2">
                  <div class="tooltip-item">
                    <svg class="container_svg" id="container1_2"></svg>
                  </div>
                  <div class="tooltip-content clearfix">
                    <div class="tooltip-text">Вікна - 5%<br> Фасад - 7% </div>
                  </div>
                </div>
              </div>
              <div class="timebar__item flex">
                <div class="timebar_name">Мережі</div>
                <div class="tooltip tooltip-effect-2">
                  <div class="tooltip-item">
                    <svg class="container_svg" id="container1_3"></svg>
                  </div>
                  <div class="tooltip-content clearfix">
                    <div class="tooltip-text">Внутрішні - 5%<br> Зовнішні - 7% </div>
                  </div>
                </div>
              </div>

            </div>
            <div class="building_webcam">

              <a class="building_webcam__link" href="#">
                <svg enable-background="new 0 0 370 370" viewBox="0 0 370 370" xmlns="http://www.w3.org/2000/svg" fill="#ed1c24" width="34" height="40"><path d="m274.221 284.781c40.578-28.245 67.146-75.225 67.146-128.415 0-86.358-70.009-156.366-156.367-156.366-86.357 0-156.367 70.008-156.367 156.365 0 53.19 26.568 100.17 67.146 128.415l-37.202 38.376c-2.58 3.626-3.972 7.965-3.972 12.416v13.031c0 11.817 9.58 21.396 21.396 21.396h217.998c11.815 0 21.395-9.579 21.395-21.396v-13.031c0-4.451-1.392-8.79-3.972-12.416zm-89.221-201.398c40.309 0 72.983 32.676 72.983 72.982 0 40.307-32.674 72.983-72.983 72.983s-72.982-32.676-72.982-72.983c0-40.306 32.673-72.982 72.982-72.982zm-83.048 249.033 28.549-29.454c16.969 6.314 35.328 9.769 54.499 9.769s37.53-3.455 54.499-9.769l28.549 29.454z"></path><path d="m185 201.689c25.033 0 45.322-20.291 45.322-45.324 0-16.152-8.456-30.32-21.177-38.349-.274 7.068-10.968 12.752-24.145 12.752-13.176 0-23.871-5.684-24.145-12.752-12.721 8.028-21.177 22.197-21.177 38.349 0 25.033 20.289 45.324 45.322 45.324z"></path></svg>
                Веб<br>камера
              </a>

            </div>
          </div>

          <div class="building_info">
            Завершення будівництва: ....

          </div>

          <div class="hod-stroitelstva__box clearfix">
            <div class="gold__timeline"></div>


            <!-- элемент для добавления -->
            <div class="hod-stroitelstva__item stroy_item__1 wow fadeIn">
              <a class="hod-stroitelstva__link" href="/img/hod/1.jpg" data-fancybox="group1" data-caption="19 марта 2018 года"></a>
              <figcaption>
                <div class="news_date">
                    <svg enable-background="new 0 0 508.52 508.52" height="16"  fill="#ee1c25" viewBox="0 0 508.52 508.52" width="26" xmlns="http://www.w3.org/2000/svg"><g><path d="m506.645 89.372c-4.036-12.935-15.637-22.502-29.907-22.502h-31.782v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-190.855v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-31.623c-14.27 0-25.903 9.567-29.907 22.502h-1.875v387.365c0 17.544 14.239 31.782 31.782 31.782h444.955c17.544 0 31.782-14.239 31.782-31.782v-387.365zm-29.908 387.365h-444.955v-254.26h444.955z"/><path d="m111.08 132.088c8.772 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.119-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.119 15.891 15.891 15.891z"/><path d="m397.281 132.088c8.74 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.151-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.151 15.891 15.891 15.891z"/></g></svg>
                    <span> 14 травня 2018 року</span>
                </div>
              </figcaption>
              <a href="/img/hod/2.jpg" data-fancybox="group1" data-caption="19 марта 2018 года"></a>
              <a href="/img/hod/2.jpg" data-fancybox="group1" data-caption="19 марта 2018 года"></a>
              <a href="/img/hod/2.jpg" data-fancybox="group1" data-caption="19 марта 2018 года"></a>
            </div>
            <!-- конец элемента для добавления -->

            <div class="hod-stroitelstva__item stroy_item__2 wow fadeIn">
              <a class="hod-stroitelstva__link" href="/img/hod/2.jpg" data-fancybox="group2" data-caption="20 марта 2018 года"></a>
              <figcaption>
                <div class="news_date">
                    <svg enable-background="new 0 0 508.52 508.52" height="16"  fill="#ee1c25" viewBox="0 0 508.52 508.52" width="26" xmlns="http://www.w3.org/2000/svg"><g><path d="m506.645 89.372c-4.036-12.935-15.637-22.502-29.907-22.502h-31.782v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-190.855v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-31.623c-14.27 0-25.903 9.567-29.907 22.502h-1.875v387.365c0 17.544 14.239 31.782 31.782 31.782h444.955c17.544 0 31.782-14.239 31.782-31.782v-387.365zm-29.908 387.365h-444.955v-254.26h444.955z"/><path d="m111.08 132.088c8.772 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.119-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.119 15.891 15.891 15.891z"/><path d="m397.281 132.088c8.74 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.151-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.151 15.891 15.891 15.891z"/></g></svg>
                    <span> 14 травня 2018 року</span>
                </div>
              </figcaption>
              <a class="" href="/img/hod/2.jpg" data-fancybox="group2" data-caption="20 марта 2018 года"></a>
              <a class="" href="/img/hod/2.jpg" data-fancybox="group2" data-caption="20 марта 2018 года"></a>
              <a class="" href="/img/hod/2.jpg" data-fancybox="group2" data-caption="20 марта 2018 года"></a>
            </div>

            <div class="hod-stroitelstva__item stroy_item__3 wow fadeIn">
              <a class="hod-stroitelstva__link" href="/img/hod/3.jpg" data-fancybox="group3" data-caption="21 марта 2018 года"></a>
              <figcaption>
                <div class="news_date">
                    <svg enable-background="new 0 0 508.52 508.52" height="16"  fill="#ee1c25" viewBox="0 0 508.52 508.52" width="26" xmlns="http://www.w3.org/2000/svg"><g><path d="m506.645 89.372c-4.036-12.935-15.637-22.502-29.907-22.502h-31.782v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-190.855v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-31.623c-14.27 0-25.903 9.567-29.907 22.502h-1.875v387.365c0 17.544 14.239 31.782 31.782 31.782h444.955c17.544 0 31.782-14.239 31.782-31.782v-387.365zm-29.908 387.365h-444.955v-254.26h444.955z"/><path d="m111.08 132.088c8.772 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.119-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.119 15.891 15.891 15.891z"/><path d="m397.281 132.088c8.74 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.151-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.151 15.891 15.891 15.891z"/></g></svg>
                    <span> 14 травня 2018 року</span>
                </div>
              </figcaption>
              <a class="" href="/img/hod/2.jpg" data-fancybox="group3" data-caption="21 марта 2018 года"></a>
              <a class="" href="/img/hod/2.jpg" data-fancybox="group3" data-caption="21 марта 2018 года"></a>
              <a class="" href="/img/hod/2.jpg" data-fancybox="group3" data-caption="21 марта 2018 года"></a>
            </div>

            <div class="hod-stroitelstva__item stroy_item__4 wow fadeIn">
              <a class="hod-stroitelstva__link" href="/img/hod/4.jpg" data-fancybox="group4" data-caption="22 марта 2018 года"></a>
              <figcaption>
                <div class="news_date">
                    <svg enable-background="new 0 0 508.52 508.52" height="16"  fill="#ee1c25" viewBox="0 0 508.52 508.52" width="26" xmlns="http://www.w3.org/2000/svg"><g><path d="m506.645 89.372c-4.036-12.935-15.637-22.502-29.907-22.502h-31.782v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-190.855v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-31.623c-14.27 0-25.903 9.567-29.907 22.502h-1.875v387.365c0 17.544 14.239 31.782 31.782 31.782h444.955c17.544 0 31.782-14.239 31.782-31.782v-387.365zm-29.908 387.365h-444.955v-254.26h444.955z"/><path d="m111.08 132.088c8.772 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.119-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.119 15.891 15.891 15.891z"/><path d="m397.281 132.088c8.74 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.151-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.151 15.891 15.891 15.891z"/></g></svg>
                    <span> 14 травня 2018 року</span>
                </div>
              </figcaption>
              <a class="" href="/img/hod/2.jpg" data-fancybox="group4" data-caption="22 марта 2018 года"></a>
              <a class="" href="/img/hod/2.jpg" data-fancybox="group4" data-caption="22 марта 2018 года"></a>
              <a class="" href="/img/hod/2.jpg" data-fancybox="group4" data-caption="22 марта 2018 года"></a>
            </div>

          </div>


        </div>
        <!-- end wrapper -->
    </div>
    <!-- end section -->


    <?php include_once 'includes/bottom-menu.php';?>
    <?php include_once 'includes/footer.php';?>
    <script type="text/javascript">
    (function() {

        $(document).ready(function() {
                //Общие данные
                var totalConstructionMain = 30.76; //Загально будівельні
                var facadeMain = 16.08; // Фасад
                var networksMain = 8.02; // Мережі
                var beautificationMain = 2; //Благоустройство

                //Уточненные данные
                //Строительство
                var constructionTillPoint = 2; //Работы до отм.
                var carcassConstrution = 1; //Каркас
                var brickworkConstrution = 8.23; //Кирпичня кладка
                var interiorFinshConstrution = 7.50; //Внутренняя отделка
                //Фасад
                var facadeFacade = 5.45; //Фасад
                var windowsFacade = 7.68; //Окна
                //Инженерия
                var inernalEngineering = 8.95; //Внутренние
                var externalEngineering = 4; //Внешние


                $("#container1_0").Progress({
                    percent: totalConstructionMain,
                    width: 220,
                    height: 40,
                    backgroundColor: '#ffffff',
                    barColor: '#ed1c24',
                    fontColor: '#000',
                    radius: 0,
                    fontSize: 14,
                    increaseTime: 1000.00/60.00,
                    increaseSpeed: 1,
                    animate: true
                });

                $("#container1_1").Progress({
                    percent: beautificationMain,
                    width: 220,
                    height: 40,
                    backgroundColor: '#ffffff',
                    barColor: '#ed1c24',
                    fontColor: '#000',
                    radius: 0,
                    fontSize: 14,
                    increaseTime: 1000.00/60.00,
                    increaseSpeed: 1,
                    animate: true
                });

                $("#container1_2").Progress({
                    percent: facadeMain,
                    width: 220,
                    height: 40,
                    backgroundColor: '#ffffff',
                    barColor: '#ed1c24',
                    fontColor: '#000',
                    radius: 0,
                    fontSize: 14,
                    increaseTime: 1000.00/60.00,
                    increaseSpeed: 1,
                    animate: true
                });

                $("#container1_3").Progress({
                    percent: networksMain,
                    width: 220,
                    height: 40,
                    backgroundColor: '#ffffff',
                    barColor: '#ed1c24',
                    fontColor: '#000',
                    radius: 0,
                    fontSize: 14,
                    increaseTime: 1000.00/60.00,
                    increaseSpeed: 1,
                    animate: true
                });

            });

    })();

    </script>
    <script src="/js/jquery.fancybox.js">

    </script>
  </body>
</html>
