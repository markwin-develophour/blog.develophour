<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package DevelopHour_Blog_Site
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/bootstrap.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/now-ui-kit.min.css'; ?>">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri() . '/assets/css/custom.css'; ?>">
</head>

<body class="index-page sidebar-collapse">
<?php wp_body_open(); ?>
<div id="page" class="site">
	<nav class="fixed-top navbar-transparent navbar navbar-expand-lg bg-info" color-on-scroll="400">
		<div class="container">
			<div class="navbar-translate">
				<a id="navbar-brand" class="navbar-brand"><b>Develop</b>Hour</a>
				<button class="navbar-toggler navbar-toggler" aria-expanded="false" type="button">
					<span class="navbar-toggler-bar top-bar"></span><span class="navbar-toggler-bar middle-bar"></span>
					<span class="navbar-toggler-bar bottom-bar"></span>
				</button>
			</div>
			<div class="justify-content-end collapse navbar-collapse">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="https://www.facebook.com/DevelopHour-10760387433088" target="_blank" id="facebook-tooltip" class="nav-link"><i class="fab fa-facebook-square"></i>
							<p class="d-lg-none d-xl-none">Facebook</p>
						</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
