<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Фільтр Happy House</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0" />
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body>
    <!-- top-menu -->
    <?php include_once 'includes/top-menu.php';?>
    <!-- end top-menu -->
    <?php include_once 'includes/form_callback.php';?>

    <div class="container filter_block">

      <!-- header -->
      <div class="header">
        <div class="main_name">
          <div class="line_grey">
            <div class="line_fanny"></div>
          </div>
          <div class="name_box">
            <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
            <span>Фільтр</span>
            <svg class="menu_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
          </div>
        </div>
      </div>
      <!-- end header -->

        <div class="wrapper">
          <div class="line_link">
            <a href="/" class="link_active">Головна</a>&#8195;|&#8195;<span class="link_no_active">Фільтр</span>
          </div>
          <!-- <section class="advantages_block"> -->

          <section class="filter">


              <div class="wrapper">
                <div class="param_container1">
                  <!-- <div class="filter__mainname">Фільтр</div> -->
                  <div class="param_container">
                    <!-- <a class="close" href="javascript:history.go(-1)" mce_href="javascript:history.go(-1)"><img src="/img/close.svg" alt="close" width="40px"></a> -->
                    <div class="range_box">
                        <div class="range__item">
                         <div class="filter_name">Вартість, грн</div>
                         <input
                           class="slider__currentMin slider__currentMin<?=$t?>"
                           type="number"
                           min="100000"
                           value="100000"
                           max="500000">
                         <input
                           class="slider__currentMax slider__currentMax<?=$t?>"
                           type="number"
                           min="100000"
                           value="500000"
                           max="500000">
                         <input type="text" id="price"  value="200000"/>
                         <input type="hidden" id="" value="<?echo $Rest[$t]['min'].'/'.$Rest[$t]['max']?>"/>
                       </div>

                       <div class="range__item">
                        <div class="filter_name">Загальна площа, м.кв</div>
                        <input
                          class="slider__currentMin slider__currentMin<?=$t?>"
                          type="number"
                          min="42"
                          value="42"
                          max="150">
                        <input
                          class="slider__currentMax slider__currentMax<?=$t?>"
                          type="number"
                          min="42"
                          value="150"
                          max="150">
                        <input type="text" id="square"  value="44"/>
                        <input type="hidden" id="" value="<?echo $Rest[$t]['min'].'/'.$Rest[$t]['max']?>"/>
                      </div>

                    </div>
                    <div class="checkbox__box">
                      <div class="filter_name">Кіл-ть кімнат</div>
                      <div class="checkbox__item checkboxes__rooms">
                        <input id="checkbox__room1" class="checkbox__room filter__checkbox" type="checkbox" value="1"/>
                        <label for="checkbox__room1" class="checkbox__text">1</label>
                        <input id="checkbox__room2" class="checkbox__room filter__checkbox" type="checkbox" value="2"/>
                        <label for="checkbox__room2" class="checkbox__text">2</label>
                        <input id="checkbox__room3" class="checkbox__room filter__checkbox" type="checkbox" value="3"/>
                        <label for="checkbox__room3" class="checkbox__text">3</label>
                        <input id="checkbox__room4" class="checkbox__room filter__checkbox" type="checkbox" value="4"/>
                        <label for="checkbox__room4" class="checkbox__text">4</label>
                      </div>

                    </div>
                    <div class="range_box">

                        <div class="range__item">
                         <div class="filter_name">Ціна за м.кв, грн</div>
                         <input
                           class="slider__currentMin slider__currentMin<?=$t?>"
                           type="number"
                           min="7000"
                           value="7000"
                           max="50000">
                         <input
                           class="slider__currentMax slider__currentMax<?=$t?>"
                           type="number"
                           min="7000"
                           value="50000"
                           max="50000">
                         <input type="text" id="priceM"  value="7000"/>
                         <input type="hidden" id="" value="<?echo $Rest[$t]['min'].'/'.$Rest[$t]['max']?>"/>
                       </div>

                       <div class="range__item">
                        <div class="filter_name">Загальна площа, м.кв</div>
                        <input
                          class="slider__currentMin slider__currentMin<?=$t?>"
                          type="number"
                          min="12"
                          value="12"
                          max="154">
                        <input
                          class="slider__currentMax slider__currentMax<?=$t?>"
                          type="number"
                          min="12"
                          value="154"
                          max="154">
                        <input type="text" id="squareLiv"  value="52"/>
                        <input type="hidden" id="" value="<?echo $Rest[$t]['min'].'/'.$Rest[$t]['max']?>"/>
                      </div>

                    </div>


                  </div>
                  <div class="button__box">
                    <span class="filter_rev">За вашими параметрами знайдено <span class="number_flats">0</span> квартир</span>
                    <input class="button" type="submit" value="Шукати">
                    <a class="reset-button js-reset-filter-button" href="#" id="reset_button">Зкинути параметри</a>
                  </div>
                </div><!--end param container -->

                <div class="filter__info">
                  <div class="filter__info__quant">
                    Знайдено квартир: <span>123</span>
                  </div>
                  <ul class="filter_info__list">
                    <li><a href="#">1-кімнатні</a></li>
                    <li><a href="#">2-кімнатні</a></li>
                    <li><a href="#">3-кімнатні</a></li>
                    <li><a href="#">4-кімнатні</a></li>
                  </ul>
                </div>

                <ul class="result__list with-empty-cells">
                  <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
                    <div class="result__item__inner">
                      <div class="result__img">
                        <img src="/img/filter/Plan.png" alt="">
                      </div>
                      <table style="width:100%; line-height:1.5;">
                        <tr><td>Секція</td><td>4</td></tr>
                        <tr><td>Кількість кімнат</td><td>2</td></tr>
                        <tr><td>Загальна площа</td><td>78,5</td></tr>
                        <tr><td>Житлова площа</td><td>52</td></tr>
                      </table>
                    </div>
                    <a class="button" href="">Дивитися квартиру</a>
                  </li>
                  <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
                      <div class="result__item__inner">
                        <div class="result__img">
                          <img src="/img/filter/Plan.png" alt="">
                        </div>
                        <table style="width:100%; line-height:1.5;">
                          <tr><td>Секція</td><td>4</td></tr>
                          <tr><td>Кількість кімнат</td><td>2</td></tr>
                          <tr><td>Загальна площа</td><td>78,5</td></tr>
                          <tr><td>Житлова площа</td><td>52</td></tr>
                        </table>
                      </div>
                      <a class="button" href="">Дивитися квартиру</a>
                    </li>
                    <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
                      <div class="result__item__inner">
                        <div class="result__img">
                          <img src="/img/filter/Plan.png" alt="">
                        </div>
                        <table style="width:100%; line-height:1.5;">
                          <tr><td>Секція</td><td>4</td></tr>
                          <tr><td>Кількість кімнат</td><td>2</td></tr>
                          <tr><td>Загальна площа</td><td>78,5</td></tr>
                          <tr><td>Житлова площа</td><td>52</td></tr>
                        </table>
                      </div>
                      <a class="button" href="">Дивитися квартиру</a>
                    </li>
                    <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
                      <div class="result__item__inner">
                        <div class="result__img">
                          <img src="/img/filter/Plan.png" alt="">
                        </div>
                        <table style="width:100%; line-height:1.5;">
                          <tr><td>Секція</td><td>4</td></tr>
                          <tr><td>Кількість кімнат</td><td>2</td></tr>
                          <tr><td>Загальна площа</td><td>78,5</td></tr>
                          <tr><td>Житлова площа</td><td>52</td></tr>
                        </table>
                      </div>
                      <a class="button" href="">Дивитися квартиру</a>
                    </li>
                    <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
                      <div class="result__item__inner">
                        <div class="result__img">
                          <img src="/img/filter/Plan.png" alt="">
                        </div>
                        <table style="width:100%; line-height:1.5;">
                          <tr><td>Секція</td><td>4</td></tr>
                          <tr><td>Кількість кімнат</td><td>2</td></tr>
                          <tr><td>Загальна площа</td><td>78,5</td></tr>
                          <tr><td>Житлова площа</td><td>52</td></tr>
                        </table>
                      </div>
                      <a class="button" href="">Дивитися квартиру</a>
                    </li>
                    <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
                      <div class="result__item__inner">
                        <div class="result__img">
                          <img src="/img/filter/Plan.png" alt="">
                        </div>
                        <table style="width:100%; line-height:1.5;">
                          <tr><td>Секція</td><td>4</td></tr>
                          <tr><td>Кількість кімнат</td><td>2</td></tr>
                          <tr><td>Загальна площа</td><td>78,5</td></tr>
                          <tr><td>Житлова площа</td><td>52</td></tr>
                        </table>
                      </div>
                      <a class="button" href="">Дивитися квартиру</a>
                    </li>
                    <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
                      <div class="result__item__inner">
                        <div class="result__img">
                          <img src="/img/filter/Plan.png" alt="">
                        </div>
                        <table style="width:100%; line-height:1.5;">
                          <tr><td>Секція</td><td>4</td></tr>
                          <tr><td>Кількість кімнат</td><td>2</td></tr>
                          <tr><td>Загальна площа</td><td>78,5</td></tr>
                          <tr><td>Житлова площа</td><td>52</td></tr>
                        </table>
                      </div>
                      <a class="button" href="">Дивитися квартиру</a>
                    </li>

                    <li class="sort result__item cell" data-floor='' data-area='' data-room='' data-sec='' data-build='' style='' >
                      <div class="result__item__inner">
                        <div class="result__img">
                          <img src="/img/filter/Plan.png" alt="">
                        </div>
                        <table style="width:100%; line-height:1.5;">
                          <tr><td>Секція</td><td>4</td></tr>
                          <tr><td>Кількість кімнат</td><td>2</td></tr>
                          <tr><td>Загальна площа</td><td>78,5</td></tr>
                          <tr><td>Житлова площа</td><td>52</td></tr>
                        </table>
                      </div>
                      <a class="button" href="">Дивитися квартиру</a>
                    </li>
                </ul>
                <a class="button filter__more" href="#">Завантажити більше планувань</a>
              </div>
          </section>
          <!-- </section> -->


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
      <script src="js/ion.rangeSlider.js"></script>
      <script src="js/range.js"></script>
  </body>
</html>
