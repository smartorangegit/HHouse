<!-- form_callback вызом из верхнего меню-->
<?$webAd = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];?>
<div id="form_callback" class="form_box">

  <div class="main_name">
    <div class="line_grey">
      <div class="line_fanny"></div>
    </div>
    <div class="name_box">
      <svg class="smile_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
      <span><?_e('form-0','happy-house');?></span>
      <svg class="smile_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
      <div id="close_form" class="close_btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50" height="50"><path d="M37.304 11.282l1.414 1.414-26.022 26.02-1.414-1.413z" fill="#ed1c24"></path><path d="M12.696 11.282l26.022 26.02-1.414 1.415-26.022-26.02z" fill="#ed1c24"></path></svg>
      </div>

    </div>
  </div>

  <form id="callback-form-main" class="contact_form" onsubmit="ajax_form(this)">
    <p class="contact_form__text">
      Відправте заявку на телефонний дзвінок і менеджер відділу продажу зв'яжеться з вами найближчим часом. Або оберіть зручний вам час для дзвінка.
    </p>
    <div class="input_wrapper required_input">
        <input class="js-input-name" type="text" name="name" required placeholder="<?_e('form-1','happy-house');?>" data-required="true" onkeyup="javascript:countme('callback-form-main');">
        <div class="validation-error validation-error_required" style="display: none"><?_e('form-2','happy-house');?></div>
        <div class="form__img">
          <svg enable-background="new 0 0 100 100" height="89.438004" viewBox="0 0 69.690468 89.438004" width="69.690468" xmlns="http://www.w3.org/2000/svg"><circle cx="34.845293" cy="21.215999" r="21.216"/><path d="m49.999 52.061c-6.993 0-14.139.411-21.241 1.222-1.919.219-3.633 1.309-4.647 2.952-6.591 10.691-9.182 19.518-8.941 30.467.069 3.113 2.402 5.708 5.49 6.11 9.779 1.265 19.648 1.908 29.334 1.908 9.684 0 19.557-.644 29.345-1.908 3.089-.402 5.423-2.997 5.491-6.11.24-10.948-2.35-19.775-8.939-30.467-1.015-1.644-2.728-2.733-4.649-2.952-7.103-.811-14.25-1.222-21.243-1.222z" transform="translate(-15.154707 -5.282)"/></svg>
        </div>
    </div>
    <div class="input_wrapper required_input">
        <input class="js-input-phone" id="tel2" type="tel" name="phone" required placeholder="<?_e('form-3','happy-house');?>" data-required="true" >
        <div class="validation-error validation-error_required" style="display: none"><?_e('form-4','happy-house');?></div>
        <div class="validation-error validation-error_phone-format" style="display: none"><?_e('form-5','happy-house');?></div>
        <div class="form__img">
            <svg enable-background="new 0 0 100 100" height="60.000999" viewBox="0 0 59.958 60.000999" width="59.958" xmlns="http://www.w3.org/2000/svg"><path d="m67.983 79.999c-5.312 0-10.967-1.508-16.801-4.475-5.379-2.74-10.689-6.662-15.365-11.342s-8.59-9.998-11.326-15.379c-2.965-5.84-4.471-11.492-4.471-16.805 0-3.443 3.211-6.771 4.588-8.039 1.984-1.826 5.104-3.961 7.371-3.961 1.129 0 2.449.738 4.16 2.322 1.277 1.182 2.713 2.783 4.148 4.631.867 1.117 5.191 6.816 5.191 9.547 0 2.24-2.535 3.801-5.215 5.449-1.039.635-2.109 1.293-2.883 1.914-.828.666-.979 1.016-1.002 1.094 2.848 7.098 11.553 15.803 18.645 18.645.064-.02.416-.158 1.09-1 .621-.773 1.283-1.848 1.916-2.883 1.652-2.68 3.211-5.217 5.449-5.217 2.734 0 8.432 4.324 9.545 5.191 1.852 1.436 3.451 2.873 4.635 4.148 1.582 1.711 2.32 3.033 2.32 4.16 0 2.271-2.133 5.4-3.955 7.393-1.271 1.385-4.6 4.607-8.045 4.607z" transform="translate(-20.02 -19.998)"/></svg>
        </div>
    </div>
    <div class="input_wrapper ">
        <input class="js-input-message" type="text" name="message" required placeholder="<?_e('form-6','happy-house');?>">
        <div class="form__img">
            <svg height="83.39061" viewBox="0 0 50.013023 83.39061" width="50.013023" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-24 -8.109391)"><path d="m74 32.2c-.5-12.7-10.4-23-23-24-7.1-.6-14.1 1.8-19.2 6.6-5 4.7-7.8 11.1-7.8 18 0 3.3 2.7 6 6 6s6-2.7 6-6c0-3.5 1.4-6.8 4-9.2 2.7-2.5 6.3-3.7 10.1-3.4 6.5.5 11.7 6 11.9 12.5.2 4.9-2.3 9.2-6.6 11.5-7.6 4.1-12.4 12.2-12.4 21.1 0 3.3 2.7 6 6 6s6-2.7 6-6c0-4.5 2.3-8.6 6.1-10.6 8.3-4.5 13.2-13.1 12.9-22.5z"/><circle cx="50" cy="83.5" r="8"/></g></svg>
        </div>
    </div>
    <div class="input_wrapper">
      <input type="text" id="datetimepicker_dark" required="" placeholder="<?_e('form-7','happy-house');?>" name="when">
          <div class="form__img">
              <svg enable-background="new 0 0 559.98 559.98" height="20" viewBox="0 0 559.98 559.98" width="20" xmlns="http://www.w3.org/2000/svg" fill="#ed1c24"><path d="m279.99 0c-154.389 0-279.99 125.601-279.99 279.99 0 154.39 125.601 279.99 279.99 279.99 154.39 0 279.99-125.601 279.99-279.99s-125.6-279.99-279.99-279.99zm0 498.78c-120.644 0-218.79-98.146-218.79-218.79 0-120.638 98.146-218.79 218.79-218.79s218.79 98.152 218.79 218.79c0 120.644-98.146 218.79-218.79 218.79z"/><path d="m304.226 280.326v-117.35c0-13.103-10.618-23.721-23.716-23.721-13.102 0-23.721 10.618-23.721 23.721v124.928c0 .373.092.723.11 1.096-.312 6.45 1.91 12.999 6.836 17.926l88.343 88.336c9.266 9.266 24.284 9.266 33.543 0 9.26-9.266 9.266-24.284 0-33.544z"/></svg>
          </div>
    </div>
      <input  name="typ" class="webad" type="hidden" value="1" >
      <input  name="webad" class="webad" type="hidden" value="<?=$webAd;?>"/>
      <input  name="metka" class="metka" type="hidden" value="Замовити телефонний дзвінок - Happy-House"/>
      <input  name="inn" class="userInn" type="hidden" value="Happy-House"/>
    <input type="submit" value="<?_e('form-submit','happy-house');?>" class="contacts__tab-submit-btn">
  </form>
</div>

<!-- end form_callback -->

<!-- form_callback вызов из открытого меню-->
<div id="form_callback1" class="form_box">

  <div class="main_name">
    <div class="line_grey">
      <div class="line_fanny"></div>
    </div>
    <div class="name_box">
      <svg class="smile_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg" style="transform:scaleX(-1);"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
      <span>Замовити телефонний дзвінок</span>
      <svg class="smile_line" height="1.011161mm" viewBox="0 0 23.316424 1.011161" width="23.316425mm" xmlns="http://www.w3.org/2000/svg"><g transform="translate(-10.843172 -11.709181)"><path d="m10.843172 12.209181h17.681462.310205" fill="#ee1c25" stroke="#ee1c25"/><g fill="none"><path d="m30.238531 12.220342h1.322917" stroke="#000"/><path d="m32.836681 12.218563h1.322917" stroke="#ee1c25"/></g></g></svg>
      <div id="close_form1" class="close_btn">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="50" height="50"><path d="M37.304 11.282l1.414 1.414-26.022 26.02-1.414-1.413z" fill="#ed1c24"></path><path d="M12.696 11.282l26.022 26.02-1.414 1.415-26.022-26.02z" fill="#ed1c24"></path></svg>
      </div>

    </div>
  </div>

  <form id="" class="contact_form" action="3" method="post">
    <div class="input_wrapper required_input">
        <input class="js-input-name" type="text" name="name" required placeholder="Ваше ім'я:" data-required="true">
        <div class="validation-error validation-error_required" style="display: none">Данне поле обов'язкове для заповнення</div>
        <div class="form__img">
          <svg enable-background="new 0 0 100 100" height="89.438004" viewBox="0 0 69.690468 89.438004" width="69.690468" xmlns="http://www.w3.org/2000/svg"><circle cx="34.845293" cy="21.215999" r="21.216"/><path d="m49.999 52.061c-6.993 0-14.139.411-21.241 1.222-1.919.219-3.633 1.309-4.647 2.952-6.591 10.691-9.182 19.518-8.941 30.467.069 3.113 2.402 5.708 5.49 6.11 9.779 1.265 19.648 1.908 29.334 1.908 9.684 0 19.557-.644 29.345-1.908 3.089-.402 5.423-2.997 5.491-6.11.24-10.948-2.35-19.775-8.939-30.467-1.015-1.644-2.728-2.733-4.649-2.952-7.103-.811-14.25-1.222-21.243-1.222z" transform="translate(-15.154707 -5.282)"/></svg>
        </div>
    </div>
    <div class="input_wrapper required_input">
        <input class="js-input-phone" id="tel" type="tel" name="phone" required placeholder="Ваш телефон:" data-required="true" >
        <div class="validation-error validation-error_required" style="display: none">Данне поле обов'язкове для заповнення</div>
        <div class="validation-error validation-error_phone-format" style="display: none">Невірний формат телефону</div>
        <div class="form__img">
            <svg enable-background="new 0 0 100 100" height="60.000999" viewBox="0 0 59.958 60.000999" width="59.958" xmlns="http://www.w3.org/2000/svg"><path d="m67.983 79.999c-5.312 0-10.967-1.508-16.801-4.475-5.379-2.74-10.689-6.662-15.365-11.342s-8.59-9.998-11.326-15.379c-2.965-5.84-4.471-11.492-4.471-16.805 0-3.443 3.211-6.771 4.588-8.039 1.984-1.826 5.104-3.961 7.371-3.961 1.129 0 2.449.738 4.16 2.322 1.277 1.182 2.713 2.783 4.148 4.631.867 1.117 5.191 6.816 5.191 9.547 0 2.24-2.535 3.801-5.215 5.449-1.039.635-2.109 1.293-2.883 1.914-.828.666-.979 1.016-1.002 1.094 2.848 7.098 11.553 15.803 18.645 18.645.064-.02.416-.158 1.09-1 .621-.773 1.283-1.848 1.916-2.883 1.652-2.68 3.211-5.217 5.449-5.217 2.734 0 8.432 4.324 9.545 5.191 1.852 1.436 3.451 2.873 4.635 4.148 1.582 1.711 2.32 3.033 2.32 4.16 0 2.271-2.133 5.4-3.955 7.393-1.271 1.385-4.6 4.607-8.045 4.607z" transform="translate(-20.02 -19.998)"/></svg>
        </div>
    </div>
    <div class="input_wrapper ">
        <input class="js-input-message" type="text" name="message" required placeholder="Ваше питання:">
    </div>
    <input type="submit" value="Відправити" class="contacts__tab-submit-btn">
  </form>
</div>

<!-- end form_callback -->
