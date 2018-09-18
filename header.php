<!DOCTYPE html>
<html <?php language_attributes(); ?> >
<head>
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

<?php get_template_part('includes/preloader');?>

<?php get_template_part('includes/top-menu'); ?>
<?php get_template_part('includes/form_callback');?>

