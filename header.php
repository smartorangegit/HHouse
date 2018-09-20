<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-5CC8JNN');</script>
    <!-- End Google Tag Manager -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo wp_get_document_title (); ?></title>
    <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/assets/img/favicon.ico" type="image/x-icon">
    <meta name="description" content="<?php echo wp_get_document_title (); ?>">
    <?php wp_head(); ?>
<?php	

?>
	<meta property="og:locale" content="<?php language_attributes(); ?>" />
	<meta property="og:type" content="article" />
	<meta property="og:title" content="<?php echo wp_get_document_title (); ?>" />
	<meta property="og:description" content="<?php echo wp_get_document_title (); ?>" />
	<meta property="og:url" content="<?php echo 'https://'.$_SERVER['SERVER_NAME'].$_SERVER["REQUEST_URI"];?>" />
	<meta property="og:image" content="<?php echo 'https://'.$_SERVER['SERVER_NAME']?>/themes/happy-house/assets/img/gallery/gal1.jpg" />
	<meta property="og:site_name" content="Happy House" />

</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5CC8JNN"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<?php get_template_part('includes/preloader');?>

<?php get_template_part('includes/top-menu'); ?>
<?php get_template_part('includes/form_callback');?>


