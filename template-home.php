

<?php
/**
* Template Name: Homepage Page
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
 $sourcesLink = esc_url(get_template_directory_uri());
 get_header();
?>

			<!-- Hero start -->
			<section class="hero-section">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="hero-content">
								<h1 class="hero-title"><?php echo  get_field('hero_section_heading'); ?></h1>
								<p>
								<?php echo  get_field('hero_content'); ?>
								</p>
								<?php 

									if(get_field('hero_button_link_1') || get_field('hero_button_link_2')){
										?>
											<a href="<?php echo  get_field('hero_button_link_1'); ?>" class="vb-btn vb-btn-filled rounded"> <?php echo get_field('hero_button_text_1'); ?> </a>
											<a href="<?php echo  get_field('hero_button_link_2'); ?>" class="vb-btn vb-btn-text"><?php echo get_field('hero_button_text_2'); ?>  <i class="fa-solid fa-chevron-right"></i></a>
										<?php
									} 
								?>
								
							</div>
						</div>
						<div class="col-md-6">
							<figure class="hero-img img-shadow">
									<img src="<?php the_field('hero_image'); ?>" />
							</figure>
						</div>
					</div>
				</div>
			</section>
			<!-- Hero end -->

			<!-- Hero start -->
			<section class="hero-section">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<figure class="hero-img img-shadow">
							<img src="<?php the_field('hero_image2'); ?>" alt="<?php bloginfo('name') ?>" />
							</figure>
						</div>
						<div class="col-md-6">
							<div class="hero-content">
								<h2 class="hero-title"><?php echo  get_field('left_image_block_heading'); ?></h2>
								<p>
								<?php echo  get_field('left_image_block_content'); ?>
								</p>
								<?php 

									if(get_field('right_image_block_link')){
										?>
											<a href="<?php echo get_field('left_image_block_link'); ?>" class="vb-btn vb-btn-text"> <?php echo get_field('left_image_block_link_text'); ?> <i class="fa-solid fa-chevron-right"></i></a>
										<?php
									} 
								?>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Hero end -->

			<!-- Hero start -->
			<section class="hero-section">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="hero-content">
								<h2 class="hero-title"><?php echo  get_field('right_block_image_heading'); ?></h2>
								<p>
								<?php echo  get_field('right_image_block_content'); ?>
								</p>
								<?php 

									if(get_field('right_image_block_link')){
										?>
											<a href="<?php echo get_field('right_image_block_link');  ?>" class="vb-btn vb-btn-text"><?php echo get_field('right_image_block_link_text');  ?> <i class="fa-solid fa-chevron-right"></i></a>
										<?php
									} 
								?>
								
							</div>
						</div>
						<div class="col-md-6">
							<figure class="hero-img img-shadow">
								<img src="<?php the_field('right_image_block_image'); ?>" alt="<?php bloginfo('name') ?>" />
							
							</figure>
						</div>
					</div>
				</div>
			</section>
			<!-- Hero end -->

			<!-- Service start -->
			<section class="services-section">
				<div class="container">
					<div class="row">
						<div class="col-md-10 m-auto">
							<div class="section-heading text-center">
								<h5 class="sec-title"><?php echo get_field('icon_box_section_sub_heading'); ?></h5>
								<p class="sec-subtitle"><?php echo get_field('icon_box_section_heading'); ?></p>
							</div>
						</div>
					</div>
					<div class="row">
		
						<?php
							// Check rows exists.
							if( have_rows('icon_box') ):

								// Loop through rows.
								while( have_rows('icon_box') ) : the_row();

									?>
									<div class="col-md-4 col-sm-6">
										<div class="service-item" data-bg="#e2f5f8">
											<div>
												<span class="icon">
													<img src="<?php echo  get_sub_field('icon'); ?>" alt="" >
												</span>
												<h3><a href="<?php echo  get_sub_field('icon_box_url'); ?>"> <?php echo  get_sub_field('icon_box_content'); ?> </a></h3>
											</div>

											<?php 

												if(get_sub_field('icon_box_url')){
													?>
														<a href="<?php echo  get_sub_field('icon_box_url'); ?>">About Us <i class="fa-solid fa-chevron-right"></i></a>
													<?php
												} 
											?>

										</div>
									</div>
									<?php

								// End loop.
								endwhile;

							// No value.
							else :
								// Do something...
							endif;
						?>

					</div>
				</div>
			</section>
			<!-- Service end -->

			<!-- Hero start -->
			<section class="hero-section bis-resources">
				<div class="container">
					<div class="row align-items-center">
						<div class="col-md-6">
							<div class="hero-content">
								<h2 class="hero-title"><?php echo get_field('businesses_info_heading'); ?></h2>
								<p>
									<?php echo get_field('businesses_info_content'); ?>
								</p>
								<a href="<?php echo get_field('businesses_info_link'); ?>" class="vb-btn vb-btn-text"><?php echo get_field('businesses_info_link_text'); ?><i class="fa-solid fa-chevron-right"></i></a>
							</div>
						</div>
						<div class="col-md-6">
							<figure class="hero-img img-shadow">
								<img src="<?php echo get_field('businesses_info_thumbnail'); ?>" alt="<?php bloginfo('name') ?>" />
							</figure>
						</div>
					</div>
				</div>
			</section>
			<!-- Hero end -->

			<!-- Testimonial start -->
			<section class="testimonial-section">
				<div class="container">
					<div class="row">
						<div class="col-md-10 m-auto">
							<div class="section-heading text-center">
								<h5 class="sec-title"><?php echo get_field('testimonial_section_heading'); ?></h5>
								<p class="sec-subtitle"> <?php echo get_field('testimonial_section_sub_heading'); ?> </p>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 tsm-slider-wrapper m-auto">
							<div class="tsm-slider owl-carousel">
								<?php
									// Check rows exists.
									if( have_rows('testimonial') ):

										// Loop through rows.
										while( have_rows('testimonial') ) : the_row();

											// Load sub field value.
											// $sub_value = get_sub_field('sub_field');
											// Do something...
											?>
											<div class="tsm-item">
												<div class="row align-items-center">
													<div class="col-md-4">
														<figure class="tsm-avatar">
															<img src="<?php echo get_sub_field('testimonial_user_image'); ?>" alt="Aynsley Rosin" />
														</figure>
													</div>
													<div class="col-md-8">
														<div class="tsm-content">
															<span class="quote-icon">
																<svg width="20" height="16" viewBox="0 0 20 16" fill="none">
																	<path
																		d="M4.08 0.679998L0.56 7.84V15.48H8.28V7.84H1.08L10.48 0.679998H4.08ZM13.28 0.679998L9.76 7.84V15.48H17.48V7.84H10.28L19.68 0.679998H13.28Z"
																		fill="#001833"
																	/>
																</svg>
															</span>
															<p>
																<?php echo get_sub_field('testimonial_content'); ?>
															</p>
															<div class="customer-info">
																<h6><?php echo get_sub_field('testimonial_heading'); ?></h6>
																<p><?php echo get_sub_field('testimonial_designation'); ?></p>
															</div>
															<?php 

															if(get_sub_field('testimonial_url')){
																?>
																<a href="<?php  echo get_sub_field('testimonial_url'); ?>" class="vb-btn vb-btn-text">Read the case study <i class="fa-solid fa-chevron-right"></i></a>
																<?php
															} 
															?>
															
														</div>
													</div>
												</div>
											</div>
											<?php

										// End loop.
										endwhile;

									// No value.
									else :
										// Do something...
									endif;
								?>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- Testimonial end -->

			<!-- Contact start -->
			<section class="contact-section">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-10 m-auto">
							<div class="section-heading text-center">
								<h5 class="sec-title"> <?php echo get_field('home_contact_title'); ?> </h5>
								<div class="sec-subtitle">
									<?php echo get_field('home_contact_paragraph'); ?>
									
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 contact-form-wrapper m-auto">
						
						<?php echo get_field('home_contact_form'); ?>

						</div>
					</div>
				</div>
			</section>
			<!-- Contact end -->
		</main>
		<!-- main.main-wrapper end -->

<?php get_footer(); ?>
