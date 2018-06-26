<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Галерея Happy House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>


    <?php include_once 'includes/top-menu.php';?>

    <?php include_once 'includes/form_callback.php';?>

    <div class="container">
      <!-- header -->
      <div class="header">
        <div class="main_name">
          <div class="line_grey">
            <div class="line_fanny"></div>
          </div>
          <div class="name_box">
            <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
            <span>Галерея</span>
            <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
          </div>
        </div>
      </div>
      <!-- end header -->

      <div class="wrapper">
        <div class="line_link">
          <a href="/" class="link_active">Головна</a>&#8195;|&#8195;<span class="link_no_active">Галерея</span>
        </div>
      </div>

      <section class="one one_gallery1">
        <ul class=" gallery1">
          <li class="gallery__item gitem__1"></li>
          <li class="gallery__item gitem__2"></li>
          <li class="gallery__item gitem__3"></li>
          <li class="gallery__item gitem__4"></li>
          <li class="gallery__item gitem__5"></li>
          <li class="gallery__item gitem__6"></li>
        </ul>
        <div id="bx-pager">
          <a data-slide-index="0" href=""><img src="/img/gallery/min/gal1.jpg" /></a>
          <a data-slide-index="1" href=""><img src="/img/gallery/min/gal2.jpg" /></a>
          <a data-slide-index="2" href=""><img src="/img/gallery/min/gal3.jpg" /></a>
          <a data-slide-index="3" href=""><img src="/img/gallery/min/gal4.jpg" /></a>
          <a data-slide-index="4" href=""><img src="/img/gallery/min/gal5.jpg"/></a>
          <a data-slide-index="5" href=""><img src="/img/gallery/min/gal6.jpg"/></a>


        </div>

      </section>

    </div>

    <!-- bottom-menu -->
    <?php include_once 'includes/bottom-menu.php';?>
      <!--end bottom-menu -->
      <!-- footer -->
      <?php include_once 'includes/footer.php';?>
      <!-- end footer -->


  </body>
</html>
