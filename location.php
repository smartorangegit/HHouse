<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Розташування Happy House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- top-menu -->
    <?php include_once 'includes/top-menu.php';?>
    <!-- end top-menu -->
    <?php include_once 'includes/form_callback.php';?>

    <div class="container location_block">

      <!-- header -->
      <div class="header">
        <div class="main_name">
          <div class="line_grey">
            <div class="line_fanny"></div>
          </div>
          <div class="name_box">
            <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
            <span>Розташування</span>
            <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
          </div>
        </div>
      </div>
      <!-- end header -->

        <div class="wrapper">
          <div class="line_link">
            <a href="/" class="link_active">Головна</a>&#8195;|&#8195;<span class="link_no_active">Розташування</span>
          </div>
        </div>

        <div class="wrapper flex">
          <div class="location_item location_item_1">
            <div class="location_box">
              <div class="location_box_inner">
                <p>Найближча станція метро, Берестейська, знаходиться у декількох хвилинах пішки від будинку. </p>
              </div>
            </div>
            <img class="metro_logo" src="/img/location/metro.png" alt="Metro">
          </div>

          <div class="location_item location_item_2">
            <div class="location_box">
              <div class="location_box_inner">
                <p>Завдяки тому, що Happy House розташований на деякій відстані від проспекту, звук автомобільної траси не буде заважати вашій сім’ї.</p>
              </div>
            </div>
          </div>
        </div>
        <div class="location_map">
          <div id="map" ></div>
          <div class="wrapper">

            <ul class="location_list">
              <li>
                <span class="red">5 хвилин </span>пішки
                <p>до станцій метро Берестейська</p>
              </li>
              <li>
                <span class="red">10 хвилин </span>пішки
                <p>до найближчого парку</p>
              </li>
              <li>
                <span class="red">5 хвилин </span>на авто
                <p>до Київського зоопарку</p>
              </li>
              <li>
                <span class="red">5 хвилин </span>на авто
                <p>до найближчого ТРУЦ</p>
              </li>
              <li>
                <span class="red">15 хвилин </span>на авто
                <p>до Хрещатику</p>
              </li>
            </ul>
          </div>

        </div>

        <!-- end wrapper -->
    </div>
    <!-- end section -->

  <?php include_once 'includes/section-contacts.php';?>

    <!-- bottom-menu -->
    <?php include_once 'includes/bottom-menu.php';?>
      <!--end bottom-menu -->
      <!-- footer -->
      <?php include_once 'includes/footer.php';?>
      <!-- end footer -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDehzKltJ2hA0p9O2BWYkXG2Z4q7A-3TTM&sensor=false"></script>
      <script src="js/map.js"></script>
  </body>
</html>
