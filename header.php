<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package value-balance
 */
	$sourcesLink = esc_url(get_template_directory_uri());
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<!-- Required meta tags -->
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
		<link rel="icon" type="image/png" href="<?php echo  $sourcesLink ?> /assets/images/favicon.png" />

		<?php wp_head(); ?>
	</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<?php 

$custom_logo_id = get_theme_mod( 'logo_option' , get_template_directory_uri().'/assets/images/logo.png' );

// $image = wp_get_attachment_image_src( $custom_logo_id , 'full' );

?>
		<main class="main-wrapper">
			
			<!-- Header start -->
			<header class="header">
				<div class="container">
					<div class="header-wrapper">
						<div class="logo">
							<?php
	
							if ($custom_logo_id) :?>
								<a href="<?php echo esc_url( home_url( '/home' ) ); ?>">

								<img src=" <?php echo $custom_logo_id ?> " alt="<?php bloginfo( 'name' ); ?>">
								
								</a>
							<?php endif; ?>
						</div>
						<div class="nav-wrapper">
							<nav class="nav">
								<?php 
								
								wp_nav_menu(
									array(
										'theme_location' => 'header-main-menu',					
									)
								);
								
								?>
							</nav>
							<div class="header-info">
								<a href="tel:1855728-2566" class="phone"><?php echo get_theme_mod( 'phone_number', '1 (855) 728-2566' ) ?></a>
								<a href="#" class="vb-btn vb-btn-filled rounded contact-btn">Work With Us</a>
							</div>
							<a href="javascript:void(0);" id="menu-toogler-btn" class="">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path
										d="M5.35714 2C5.35714 0.895625 6.12482 0 7.07143 0H22.2857C23.2339 0 24 0.895625 24 2C24 3.10625 23.2339 4 22.2857 4H7.07143C6.12482 4 5.35714 3.10625 5.35714 2ZM0 12C0 10.8937 0.767679 10 1.71429 10H22.2857C23.2339 10 24 10.8937 24 12C24 13.1062 23.2339 14 22.2857 14H1.71429C0.767679 14 0 13.1062 0 12ZM22.2857 24H7.07143C6.12482 24 5.35714 23.1062 5.35714 22C5.35714 20.8937 6.12482 20 7.07143 20H22.2857C23.2339 20 24 20.8937 24 22C24 23.1062 23.2339 24 22.2857 24Z"
										fill="black"
									/>
								</svg>
								<i class="fa-solid fa-xmark"></i>
							</a>
						</div>
					</div>
				</div>
			</header>
			<!-- Header end -->
