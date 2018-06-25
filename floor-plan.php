<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>План поверху Happy House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- top-menu -->
    <?php include_once 'includes/top-menu.php';?>
    <!-- end top-menu -->
    <?php include_once 'includes/form_callback.php';?>

    <div class="container floorplan_block">

      <!-- header -->
      <div class="header">
        <div class="main_name">
          <div class="line_grey">
            <div class="line_fanny"></div>
          </div>
          <div class="name_box">
            <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
            <span>Обрати квартиру</span>
            <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
          </div>
        </div>
      </div>
      <!-- end header -->

        <div class="wrapper">
          <div class="line_link">
            <a href="/" class="link_active">Головна</a>&#8195;|&#8195;
            <a href="/" class="link_active">Обрати поверх</a>&#8195;|&#8195;
            <span class="link_no_active">Обрати квартиру</span>
          </div>


          <div class="floorplan__info flex">
            <div class="floorplan__info__item">
              <a href="/filter" class="flex btn_transparent">
                <svg height="10" viewBox="0 0 661.621 363.89101" width="36" xmlns="http://www.w3.org/2000/svg" fill="#ed1c24"><path d="m90.973 168.449v-168.449h-33.081v168.449c-19.22 6.831-33.081 25.009-33.081 46.578s13.861 39.747 33.081 46.578v400.016h33.081v-400.016c19.237-6.832 33.081-25.009 33.081-46.578s-13.845-39.747-33.081-46.578zm264.648 281.189v-449.638h-33.081v449.638c-19.236 6.831-33.081 25.01-33.081 46.578 0 21.569 13.861 39.747 33.081 46.578v118.827h33.081v-118.827c19.237-6.831 33.081-25.009 33.081-46.578s-13.844-39.747-33.081-46.578z" transform="matrix(0 1 -1 0 659.479832 -24.811)"/></svg>
                <span>Фільтр</span>
              </a>

            </div>
            <div class="floorplan__info__item flex">
              <a class="link_round" href="#" title="">
                <svg class="icon_line" style="transform: scaleX(-1)"><use xlink:href="#arrow_circle"></use></svg>
                <!-- <p>деталі</p> -->
              </a>
              <div class="floorplan_number">
                <span>2</span> поверх
              </div>
              <a class="link_round" href="#" title="">
                <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                <!-- <p>деталі</p> -->
              </a>
            </div>

            <div class="floorplan__info__item">
              <img src="/img/compas.png" alt="compas">
            </div>

          </div>
          <div class="floorplan__box">
            <a class="floor__img" href="/" data-square="105" data-livsquare="60" data-rooms="2" data-floor="5">
              <img src="/img/floor-plan/plan1.png" alt="План поаерху Happy House">
            </a>

          </div>



          <!-- всплывайка с данными по квартире -->
          <div id="appInfo" class="infobox">
            <div class="infobox__logo">
              <img src="img/HH_logo.svg" alt="Happy House">
            </div>
            <ul class="infobox__params">
              <li>Кількість кімнат <span id="rooms">3</span></li>
              <li>Загальна площа ,м.кв <span id="square">87,5</span></li>
              <li>Житлова площа ,м.кв <span id="livingSquare">52,2</span></li>
              <li>Поверх <span id="floor">4</span></li>
            </ul>
          </div>
          <!-- конец всплывайки с данными по квартире -->
        </div>
        <!-- end wrapper -->
    </div>
    <!-- end section -->

    <!-- bottom-menu -->
    <?php include_once 'includes/bottom-menu.php';?>
      <!--end bottom-menu -->
      <!-- footer -->
      <?php include_once 'includes/footer.php';?>
      <!-- end footer -->
    
  </body>
</html>
