<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package value-balance
 */

$sourcesLink = esc_url(get_template_directory_uri());
?>

	<!-- <footer id="colophon" class="site-footer">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'value-balance' ) ); ?>">
				<?php
	
				printf( esc_html__( 'Proudly powered by %s', 'value-balance' ), 'WordPress' );
				?>
			</a>
			<span class="sep"> | </span>
				<?php
			
				printf( esc_html__( 'Theme: %1$s by %2$s.', 'value-balance' ), 'value-balance', '<a href="http://underscores.me/">Underscores.me</a>' );
				?>
		</div>
	</footer> 
</div> -->

<?php 

get_sidebar();

?>



<!-- Footer start -->
<footer class="footer">
			<div class="footer-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-4">
							<div class="footer-widget footer-widget-text">
							<?php dynamic_sidebar( 'footer-column-1' ); ?>
							</div>
						</div>
						<div class="col-lg-8">
							<div class="nav-flex">
							
								<?php dynamic_sidebar( 'footer-column-2' ); ?>
								<?php dynamic_sidebar( 'footer-column-3' ); ?>
								<?php dynamic_sidebar( 'footer-column-4' ); ?>
								<?php dynamic_sidebar( 'footer-column-5' ); ?>
								
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-sm-8 text-center text-sm-start">
							<?php dynamic_sidebar( 'copyright-left' ); ?>
						
						</div>
						<div class="col-sm-4 text-center text-sm-end">
						<?php dynamic_sidebar( 'copyright-right' ); ?>
						
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer end -->
			
		<?php wp_footer(); ?>
	</body>
</html>
