<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">

	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1"> -->

	<meta name="robots" content="index,follow">

	<link rel="stylesheet" type="text/css" href="/assets/css/style.css" media="all">

	<script src="/assets/js/jquery-1.11.2.min.js"></script>
	<?php wp_head(); ?>
</head>


<body>
<div class="wrapper">
	<header class="header <?php echo is_front_page() && is_home() ? '' : 'header____fixed'; ?>">
		<?php 
			$slug_name = basename(get_permalink()); 
			if ($slug_name !== 'rim') :
		?>
		<h1>LEAP INC.</h1>
		<?php else : ?>
		<h1>RIM</h1>			
		<?php endif; ?>
	</header>

	<div class="main <?php echo is_front_page() && is_home() ? '' : 'main____underlayer'; ?>">
