<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Новини Happy House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- top-menu -->
    <?php include_once 'includes/top-menu.php';?>
    <!-- end top-menu -->
    <?php include_once 'includes/form_callback.php';?>

    <div class="container newsitem_block">

      <!-- header -->
      <div class="header">
        <div class="main_name">
          <div class="line_grey">
            <div class="line_fanny"></div>
          </div>
          <div class="name_box">
            <span>Заголовок для новини</span>
          </div>
        </div>
      </div>
      <!-- end header -->

        <div class="wrapper flex">
          <div class="line_link">
            <a href="/" class="link_active">Головна</a>&#8195;|&#8195;
            <a href="/news.php" class="link_active">Новини</a>&#8195;|&#8195;
            <span class="link_no_active">Назва новини у два рядки</span>
          </div>
          <div class="news_date">
              <svg enable-background="new 0 0 508.52 508.52" height="16"  fill="#ee1c25" viewBox="0 0 508.52 508.52" width="26" xmlns="http://www.w3.org/2000/svg"><g><path d="m506.645 89.372c-4.036-12.935-15.637-22.502-29.907-22.502h-31.782v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-190.855v49.326c0 26.284-21.39 47.674-47.674 47.674s-47.674-21.39-47.674-47.674v-49.326h-31.623c-14.27 0-25.903 9.567-29.907 22.502h-1.875v387.365c0 17.544 14.239 31.782 31.782 31.782h444.955c17.544 0 31.782-14.239 31.782-31.782v-387.365zm-29.908 387.365h-444.955v-254.26h444.955z"/><path d="m111.08 132.088c8.772 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.119-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.119 15.891 15.891 15.891z"/><path d="m397.281 132.088c8.74 0 15.891-7.119 15.891-15.891v-100.306c0-8.772-7.151-15.891-15.891-15.891s-15.891 7.119-15.891 15.891v100.306c0 8.772 7.151 15.891 15.891 15.891z"/></g></svg>
              <span> 14 травня 2018 року</span>
              <svg enable-background="new 0 0 559.98 559.98" height="16" fill="#ee1c25" viewBox="0 0 559.98 559.98" width="26" xmlns="http://www.w3.org/2000/svg"><path d="m279.99 0c-154.389 0-279.99 125.601-279.99 279.99 0 154.39 125.601 279.99 279.99 279.99 154.39 0 279.99-125.601 279.99-279.99s-125.6-279.99-279.99-279.99zm0 498.78c-120.644 0-218.79-98.146-218.79-218.79 0-120.638 98.146-218.79 218.79-218.79s218.79 98.152 218.79 218.79c0 120.644-98.146 218.79-218.79 218.79z"/><path d="m304.226 280.326v-117.35c0-13.103-10.618-23.721-23.716-23.721-13.102 0-23.721 10.618-23.721 23.721v124.928c0 .373.092.723.11 1.096-.312 6.45 1.91 12.999 6.836 17.926l88.343 88.336c9.266 9.266 24.284 9.266 33.543 0 9.26-9.266 9.266-24.284 0-33.544z"/></svg>
              <span>14:20 </span>
          </div>
        </div>

        <div class="news_item_wrapper">
          <div class="newsitem_img">
            <img src="/img/render1.jpg" alt="">
          </div>

          <div class="newsitem_text">
            <p>
              Lorem Ipsum - це текст-"риба", що використовується в друкарстві та дизайні. Lorem Ipsum є, фактично, стандартною "рибою" аж з XVI сторіччя, коли невідомий друкар взяв шрифтову гранку та склав на ній підбірку зразків шрифтів.
            </p>
            <p>
              "Риба" не тільки успішно пережила п'ять століть, але й прижилася в електронному верстуванні, залишаючись по суті незмінною. Вона популяризувалась в 60-их роках минулого сторіччя завдяки виданню зразків шрифтів Letraset, які містили уривки з Lorem Ipsum, і вдруге - нещодавно завдяки програмам комп'ютерного верстування, які використовували різні версії Lorem Ipsum.
            </p>
            <p>
              Вже давно відомо, що читабельний зміст буде заважати зосередитись людині, яка оцінює композицію сторінки. Сенс використання Lorem Ipsum полягає в тому, що цей текст має більш-менш нормальне розподілення літер на відміну від, наприклад, "Тут іде текст. Тут іде текст." Це робить текст схожим на оповідний. Багато програм верстування та веб-дизайну використовують Lorem Ipsum як зразок і пошук за терміном "lorem ipsum" відкриє багато веб-сайтів, які знаходяться ще в зародковому стані. Різні версії Lorem Ipsum з'явились за минулі роки, деякі випадково, деякі було створено зумисно (зокрема, жартівливі).
            </p>
          </div>

          <div class="newsitem_btn flex">
            <a href="#" class="btn_transparent">
              <svg fill="#ee1c25" height="14" viewBox="0 0 215.60001 421.0636" width="50" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" style="position:relative; top:-1px;"><path d="m215.6 416.08179c0 2-1.2 3.8-3.1 4.6s-4 .3-5.4-1.1l-205.6-205.6c-1-1-1.5-2.3-1.5-3.5s.5-2.6 1.5-3.5l205.5-205.4999914c1.3-1.4 3.5-1.9 5.5-1.1 1.9.8 3.1 2.6000001 3.1 4.6000002z"></path></svg>
              Повернутися до новин
            </a>
            <a href="#" class="btn_red">
              <svg height="12" viewBox="0 0 100 49" width="50" xmlns="http://www.w3.org/2000/svg" fill="#ffffff" ><path d="m-14.237332 377.98047c-9.647141-9.52657-25.149377-9.42908-34.675947.21806-2.026943 2.05259-3.643364 4.51058-5.05458 7.1712l-42.835125.26947-10.134706 10.26297 10.262973 10.13471 6.080824-6.15779 6.157784 6.08083 6.080823-6.15779 6.157784 6.08083 18.357804-.11544c1.239359 2.44002 2.886566 4.87748 5.144367 7.10706 9.647248 9.52668 25.149377 9.42909 34.675947-.21805s9.4293009-25.14938-.217948-34.67606zm-13.11093 23.54076c-3.489465-3.44585-3.522813-8.74914-.07696-12.23861 3.445852-3.48946 8.749142-3.52281 12.238607-.077 3.489464 3.44586 3.522813 8.74915.07696 12.23861-3.445853 3.48947-8.749144 3.52281-12.238607.077z" stroke-width=".150835" transform="translate(106.93769 -370.89887)"/></svg>
              <span>Обрати квартиру</span>
            </a>

          </div>

        </div>

          <div class="header">
            <div class="main_name">
              <div class="line_grey">
                <div class="line_fanny"></div>
              </div>
              <div class="name_box">
                <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
                <span>Читайте також</span>
                <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
              </div>
            </div>
          </div>


          <div class="wrapper">

          <section class="news_block flex">

            <div class="block_double news_item__1">
              <div class="block__name">
                Заголовок новини в два рядка тексту
                <div class="icon_line_box">
                  <svg class="icon_line"><use xlink:href="#line"></use></svg>
                </div>
              </div>
              <div class="block_img"></div>
              <figcaption class="flex">
                <div class="block_prev">
                  Придбання власної квартири – дуже серйозний крок. Обираючи житло, треба врахувати багато різних факторів. Але головний з них – щасливе та гармонійне життя вашої сім’ї.
                </div>
                <a class="link_round" href="#">
                  <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                  <p>читати</p>
                </a>
              </figcaption>
            </div>

            <div class="block_double news_item__2">
              <div class="block__name">
                Заголовок, назва новини, максимум в два рядки
                <div class="icon_line_box">
                  <svg class="icon_line"><use xlink:href="#line"></use></svg>
                </div>
              </div>
              <div class="block_img"></div>
              <figcaption class="flex">
                <div class="block_prev">
                  Придбання власної квартири – дуже серйозний крок. Обираючи житло, треба врахувати багато різних факторів. Але головний з них – щасливе та гармонійне життя вашої сім’ї.
                </div>
                <a class="link_round" href="#">
                  <svg class="icon_line"><use xlink:href="#arrow_circle"></use></svg>
                  <p>читати</p>
                </a>
              </figcaption>
            </div>

          </section>

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
