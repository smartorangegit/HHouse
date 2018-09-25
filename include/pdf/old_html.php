<?session_start();?>
<html>
<head>
<style type="text/css">

</style>
<link rel="stylesheet" type="text/css" href="/wp-content/themes/happy-house/assets/css/style_pdf.css">
</head>
  <body>

<div class="midle">
<div class="ch-left">
 <div class="ch-sec ch-sec-logo" >
				 <img class="logo-img"   src="<?=$_SERVER['DOCUMENT_ROOT']."/img/logo-pdf.svg";?>" alt="logo">
 </div>

  <div class="ch-sec ch-sec-tel" >
				<?/* <img class="logo-img logo-img-tel"   src="<?=$_SERVER['DOCUMENT_ROOT']."/img/tel-pdf.svg";?>" alt="logo"> */?>
 </div>


			    <div class="ch-sec" style="padding-top:250px;">
				<div class="ch-sec-bg">
                <p class="ch-text2"><?=$plan?></p>
				 </div>
				     <p class="ch-text" ><?=$mes['pdf1-mes']?></p>
                </div>
					<?/* Секция
				<div class="ch-sec">
				<div class="ch-sec-bg">
                <p class="ch-text2"><?=$sec?></p>
				 </div>
				  	<p class="ch-text" ><?=$mes['pdf2-mes']?></p>
                </div>*/?>
			<div class="ch-sec">
				<div class="ch-sec-bg">
                <p class="ch-text2"><?=$number?></p>
				 </div>
				  	<p class="ch-text" ><?=$mes['pdf3-mes']?></p>
             </div>

 </div>





 <div class="ch-center">
	<div class="ch-" style="height:	50px"></div>
 <div class="ch-maplevel">
		<?
		list($width, $height) = getimagesize($_SERVER['DOCUMENT_ROOT'].'/img/houses/house'.$plan.'_black/floor'.$floor[0].'/'.$pdf['img'].'.png');

	//	echo '<pre>'; print_r($width); echo '</pre>';
	//	echo '<pre>'; print_r($height); echo '</pre>';

		?>
<? echo $svg_min_plan;

/*
<img class="img-center"  src="<?=$_SERVER['DOCUMENT_ROOT']?>/img/dom<?=$plan?>sec<?=$sec?>.png">*/
?>


    </div>

<div class="ch-maplevel" style='margin-top: -140px'>
	<div class="ch-maplevel-center">
		<div class="r_ch-sec_buttom " >
				<div class="ch-sec-bg_buttom">
                <p class="ch-text2"><?=$floor[0]?></p>
				 </div>
				     <p class="ch-text" ><?=$mes['pdf4-mes']?></p>
        </div>
		<div class="r_ch-sec_buttom " >
				<div class="ch-sec-bg_buttom">
                <p class="ch-text2"><?=$all_room?> <?=$mes['fl-mes8']?></p>
				 </div>
				     <p class="ch-text" ><?=$mes['pdf7-mes']?></p>
        </div>

	</div>

</div>


	 </div>
<div class="ch-center">
	<div class="ch-" <?if($width-100 >$height) { echo 'style="height: 100px"';}?>></div>
    <div class="center r_center">
		<img class="img-center r_img-center"  src="<?=$_SERVER['DOCUMENT_ROOT']?>/img/houses/house<?=$plan?>_black/floor<?=$floor[0]?>/<?=$pdf['img']?>.png">

    </div>
</div>

<div class="ch-right r_ch-right">
<?/* <div class="logo"><img class="logo-img" style='transform: rotate(<?=$si['compas']?>deg);'  src="<?=$_SERVER['DOCUMENT_ROOT']."/img/compas-".(substr($_POST['lang'], 0, 2));?>.svg" alt="logo"> </div> */?>
<? $i=1; foreach ($pdf['print'] as $key =>$t) {

	if ($t AND $key>1) {
	$b='';
	if($i%2) {$b='r_ch-sec-b';}?>
		<div class="r_ch-sec <?=$b?>" >
				<div class="ch-sec-bg">
                <p class="ch-text2"><?=$t?>  <?=$mes['fl-mes8']?></p>
				 </div>
				     <p class="ch-text" ><?=$mes['pl-mes'][$key]?></p>
        </div>
	<? $i++;}	?>

<? }?>

</div>
			<div class="clear"></div>
		<div class="block-foot">
			<div class="allright">

			 <img class="footer-img" src="<?=$_SERVER['DOCUMENT_ROOT']."/img/footer.svg"?>">

            </div>
		</div>
</div>

	  <pagebreak/>
<?//3?>


</body>
</html>
