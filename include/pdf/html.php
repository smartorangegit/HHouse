<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <title></title>
    <!-- <link rel="stylesheet" type="text/css" href="/wp-content/themes/happy-house/assets/css/style_pdf.css"> -->

</head>
<body>



<div class="main_info_wrapper">

    <div class="pdf_main__info">
       <table class="pdf__info_main" style="width: 100%; margin: 0 auto;">
           <tr>
               <td class="red"><?=$_SESSION['pdfF'][0]['data']?></td>
               <td class="red"><?=$_SESSION['pdfF'][1]['data']?></td>
               <td class="red"><?=$_SESSION['pdfF'][2]['data']?></td>
               <td class="red"><?=$_SESSION['pdfF'][3]['data']?></td>
           </tr>
           <tr>
               <td><?=$_SESSION['pdfF'][0]['name']?></td>
               <td><?=$_SESSION['pdfF'][1]['name']?></td>
               <td><?=$_SESSION['pdfF'][2]['name']?></td>
               <td><?=$_SESSION['pdfF'][3]['name']?></td>
           </tr>
       </table>
    </div>
  </div>

  <div class="main" style="height: 500px;">
    <div class="clear">
      <div class="cell_img_inner">
        <?=$_SESSION['svg_min_plan']?>
      </div>

      <div class="pdf_descr">
          <table class="pdf_table">
              <?php
              foreach ($_SESSION['pdfData'] as $item){
                  echo '<tr>'.$item.'</tr>';
              }
              ?>
            </table>
          </div>
      </div>

    </div>



<!-- <htmlpagefooter name="footer">
        <hr />
          <div class="pdf_footer">
              <img src="/wp-content/themes/happy-house/pdf_template/footer.svg" alt="">
          </div>
          <div class="pdf__line">
              <div class="pdf_linefunny"></div>
          </div>

</htmlpagefooter>
    <sethtmlpagefooter name="footer" value="on" /> -->


<pagebreak>



<!--<div class="pdf_header" style="margin-top: 50px;">-->
<!--    <img src="/wp-content/themes/happy-house/pdf_template/header.svg" alt="">-->
<!--</div>-->
<!--<div class="pdf__line">-->
<!--    <div class="pdf_linefunny"></div>-->
<!--</div>-->
<div class="main_info_wrapper">
<div class="pdf_main__info">
   <table class="pdf__info_main" style="width: 100%; margin: 0 auto;">
       <tr>
           <td class="red"><?=$_SESSION['pdfF'][0]['data']?></td>
           <td class="red"><?=$_SESSION['pdfF'][1]['data']?></td>
           <td class="red"><?=$_SESSION['pdfF'][2]['data']?></td>
           <td class="red"><?=$_SESSION['pdfF'][3]['data']?></td>
       </tr>
       <tr>
           <td><?=$_SESSION['pdfF'][0]['name']?></td>
           <td><?=$_SESSION['pdfF'][1]['name']?></td>
           <td><?=$_SESSION['pdfF'][2]['name']?></td>
           <td><?=$_SESSION['pdfF'][3]['name']?></td>
       </tr>
   </table>
</div>
</div>
<div class="main" style="height: 200px; padding: 100px 0; width: 260mm; margin: 0 auto;" >

<?
print_r($_SESSION['svg_floor']);
?>
</div>
<!--<div class="pdf_footer">-->
<!--    <img src="/wp-content/themes/happy-house/pdf_template/footer.svg" alt="">-->
<!--</div>-->
<!--<div class="pdf__line">-->
<!--    <div class="pdf_linefunny"></div>-->
<!--</div>-->

</body>

</html>
