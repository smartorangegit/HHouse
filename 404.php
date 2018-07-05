<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>404 Помилка Happy House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
  
    <!-- top-menu -->
    <?php include_once 'includes/top-menu.php';?>
    <!-- end top-menu -->
    <?php include_once 'includes/form_callback.php';?>

    <div class="container">
      <div class="header">
        <div class="main_name not-found__main_name">
          <div class="line_grey not-found__line_grey">
            <div class="line_fanny not-found__line_fanny"></div>
          </div>
        </div>
      </div>

      <div class="not-found__container">
        <div class="not-found__content">
          <img src="img/404/404.png" alt="404" class="not-found__image">
          <div class="not-found-info">
            <svg class="icon_line not-found-info__icon_line"><use xlink:href="#line"></use></svg>
            <h1 class="not-found-info__heading">Вибачте, сторінку не знайдено</h1>
            <div class="not-found-info__button-wrap">
              <a href="#" class="not-found-info__button">Назад</a>
              <a href="#" class="not-found-info__button">На головну</a>
            </div>
          </div>
        </div>
      </div>

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
