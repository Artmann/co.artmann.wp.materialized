<!DOCTYPE html>
<html <?php language_attributes(); ?> style="margin: 0px !important;>
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php wp_title( '|', true, 'right' ); ?></title>
		<link href='https://fonts.googleapis.com/css?family=Open+Sans|Lato' rel='stylesheet' type='text/css'>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/css/materialize.min.css">
		<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.1/js/materialize.min.js"></script>
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
		<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="all" />

		<?php wp_head(); ?>
	</head>

	<body <?php body_class(); ?>>

	<nav role="navigation">
    <div class="nav-wrapper container">
			<a id="logo-container" href="<?php echo site_url(); ?>" class="brand-logo"><?php echo bloginfo('name'); ?></a>

			<?php wp_nav_menu( [ 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'right hide-on-med-and-down' ] ); ?>

			<?php wp_nav_menu( [ 'theme_location' => 'header-menu', 'container' => false, 'menu_class' => 'side-nav', 'menu_id' => 'nav-mobile' ] ); ?>
      <a href="#" data-activates="nav-mobile" class="button-collapse"><i class="material-icons">menu</i></a>
    </div>
  </nav>
	<div class="container">
		<div class="row">
			<div class="col s12 m8">
