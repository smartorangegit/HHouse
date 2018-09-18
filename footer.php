	<!-- Stsrt footer-menu -->
<!--	--><?//	$menu_block=['about'=>'Про проект:', 'choose'=>'Обрати квартиру:', 'construction'=>'Хід проекту:'];
//		$t=0;
//		foreach ($menu_block as $k=>$block) { $t++;
//
//			$items= wp_nav_menu(array(
//				'theme_location' => 'footer-menu-'.$t,
//				'container'      => false,
//				'container_class'=>'',
//				'menu_class'     => '',
//				'menu_id'     	 => '',
//				'depth'			 => 1,
//				'echo' 			 => false,
//				'walker'=> new Foter_Walker_Nav_Menu()
//			));
//
//			 if (!empty($items)) {
//
//				  echo '<div class="b-nav__part b-nav__part_'.$t.'">
//							<div class="b-nav__heading">
//							   '.$block.'
//							</div>';
//				  echo $items;
//				  echo '</div>';
//			 }
//		}
//	?>
<!--    --><?//echo date('d.m', strtotime("+0 days"));?>
<!--    --><?//echo date('d.m', strtotime("+1 days"));?>
<!--    --><?//echo date('d.m', strtotime("+21 days"));?>
<style>
   .compass{
        -moz-transform: rotate(45deg); /* Для Firefox */
        -ms-transform: rotate(45deg); /* Для IE */
        -webkit-transform: rotate(45deg); /* Для Safari, Chrome, iOS */
        -o-transform: rotate(45deg); /* Для Opera */
        transform: rotate(45deg);
    }
</style>
    <?php
    if ($post->ID != 23) {
        get_template_part('includes/bottom-menu');
    }?>

    <!-- End footer-menu -->
        <div class="footer">
            <div class="wrapper flex">
                <div class="footer__left">© <?php _e('prava','happy-house'); ?></div>
                <div class="footer__right"><img src="<?php bloginfo('template_url'); ?>/assets/img/smart_logo_w.svg" alt="SmartOrange studio"></div>
			</div>
<div style="display:none;">		
<div itemscope itemtype="http://schema.org/Organization"> 
<span itemprop="name">Житловий комплекс Happy House</span> 
<a itemprop="url" href="https:/house-happy.com.ua"> 
<div itemprop="address" itemscope itemtype="http://schema.org/PostalAddress"> 
<span itemprop="streetAddress">Льва Толстого, 37</span>,
<span itemprop="addressLocality">Київ</span>,
<span itemprop="addressRegion">Київська область</span>. 
</div> <img itemprop="logo" src="https:/house-happy.com.ua/wp-content/themes/happy-house/assets/img/HH_logo.svg" />
<span itemprop="telephone">(044)499-07-70</span> 
<span itemprop="email">іnfo@saga-development.com.ua</span> </div>
</div>
</div>


    <script>
        function ajax_form(e) {
            event.preventDefault();
            var str = $("#"+e.id).serialize();
                var x = document.forms[e.id]["name"].value;
                var y = document.forms[e.id]["phone"].value;
                if (x == "" || y == "") {
                    //alert("Заполните все поля!");
                    $.ajax({
                        method: "POST",
                        url: "/wp-content/themes/happy-house/forms/application-mail.php",
                        data: str
                    })
                        .done(function (msg) {
                            // success();
                            console.log(msg);
                            var allInputs = document.querySelectorAll('[type="text"],  [type="email"]');
                            allInputs.forEach(function (input) {
                                input.value = '';
                            });
                            //location.replace('/message/');
                            //console.log(window.location.hostname);

                        });
                }
                else {
                    //console.log(str);
                    $.ajax({
                        method: "POST",
                        url: "/wp-content/themes/happy-house/forms/application.php",
                        data: str
                    })
                        .done(function (msg) {
                           // success();
                            console.log(msg);
                            var callbackFormModal = document.querySelector('.form_box');
                            var allInputs = document.querySelectorAll('[type="text"], [type="tel"], [type="email"]');
                            allInputs.forEach(function (input) {
                                input.value = '';
                            });
                            $( ".form_box" ).hide();
                            location.replace('/message/');
                            console.log(window.location.hostname);

                        });
                }
            }
        //}

        var ct = 0;
        var addCount = document.createElement('input');
        addCount.type = "hidden";
        addCount.id = "count";
        addCount.name = "count";
        addCount.value = "0";

        function countme(form) {
            document.getElementById(form).appendChild(addCount);
            document.getElementById('count').value = ++ct;
        }

    </script>
<?php do_action('hook_assets_footer'); ?>

<?php wp_footer(); ?>
<script src="/wp-content/themes/happy-house/assets/js/maskinput.js"></script>

<link rel="stylesheet" href="/wp-content/themes/happy-house/assets/css/jquery.datetimepicker.css">
<script src="/wp-content/themes/happy-house/assets/js/datapick/jquery.datetimepicker.js"></script>
<script src="/wp-content/themes/happy-house/assets/js/datapick/php-date-formatter.min.js"></script>
    <script>
        $.datetimepicker.setLocale('ru');


        var logic1 = function( currentDateTime ){
            if ( currentDateTime.getDate() == new Date().getDate() ){
                this.setOptions({
                    minTime: new Date()
                });
            } else
            {
                this.setOptions({
                    minTime:'9:00'
                });
            }
        };

        $('#datetimepicker_dark').datetimepicker({
//            theme:'dark',
            // value: 'trololo',
            // value: new Date(),
            minDate: new Date(),
            maxTime: '20:00',
            yearStart: 2018,
            yearEnd: 2018,
            dayOfWeekStart : 1,
            onSelectDate: logic1,
            onShow: logic1

        });

    </script>

<script type="text/javascript">
   jQuery(function($){
   $("#tel").mask("+38(999) 999-99-99");
   $("#tel2").mask("+38(999) 999-99-99");
   $("#tel3").mask("+38(999) 999-99-99");
   $("#tel-loc").mask("+38(999) 999-99-99");
   });
</script>
</body>
</html>