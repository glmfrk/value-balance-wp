<?php
/**
* Template Name: Price Page
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
						<div class="col-lg-7 col-sm-6">
							<div class="hero-content">
								<h1 class="hero-title"><?php echo  get_field('price_hero_title'); ?></h1>
								<p>
									<?php echo  get_field('price_hero_content'); ?>
								</p>
							</div>
						</div>
						<div class="col-lg-5 col-sm-6">
							<figure class="hero-img img-shadow">
								<img src="<?php echo get_field('price_hero_image'); ?>" alt="<?php echo bloginfo('name') ?>" />
							</figure>
						</div>
					</div>
				</div>
			</section>
			<!-- Hero end -->

			<div class="pricing-switch-wrapper">
				<span><?php echo get_field('switcher_text_left'); ?></span>
				<span class="pricing-switch">
					<span class="pricing-switch-active"></span>
				</span>
				<span><?php echo get_field('switcher_text_right'); ?></span>
			</div>

			<div class="hourly-section">
				<!-- pricing section start -->
				<section class="pricing-section">
					<div class="container">
						<div class="row">
							<div class="col-md-10 m-auto">
								<div class="section-heading text-center">
									<h5 class="sec-title"><?php echo get_field('pricing_switcher_title_top'); ?></h5>
								</div>
							</div>
						</div>
						<div class="row gy-5">

							<?php
								// Check rows exists.
								if( have_rows('hourly_top_pricing_card') ):

									// Loop through rows.
									while( have_rows('hourly_top_pricing_card') ) : the_row();

										?>
											<div class="col-md-4 col-sm-6">
												<div class="pricing-card">
													<div class="pricing-card-header"><?php echo get_sub_field('card_title'); ?></div>
													<div class="pricing-card-content">
														<h2><?php echo get_sub_field('card_heading'); ?></h2>
														<p><?php echo get_sub_field('card_sub_heading'); ?></p>
														<?php echo get_sub_field('card_features'); ?>
													</div>
													<div class="pricing-card-button">
														<a href="<?php echo get_sub_field('card_button_link'); ?>"><?php echo get_sub_field('card_button_text'); ?></a>
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
				</section>
				<!-- pricing section end -->

			</div>

			<div class="monthly-section">
				<!-- pricing section start -->
				<section class="pricing-section">
					<div class="container">
						<div class="row">
							<div class="col-md-10 m-auto">
								<div class="section-heading text-center">
									<h5 class="sec-title"><?php echo get_field('pricing_switcher_title_top'); ?></h5>
								</div>
							</div>
						</div>
						<div class="row gy-5">

						<?php
							// Check rows exists.
							if( have_rows('monthly_top_pricing_card') ):

								// Loop through rows.
								while( have_rows('monthly_top_pricing_card') ) : the_row();

									?>
										<div class="col-md-4 col-sm-6">
											<div class="pricing-card">
												<div class="pricing-card-header"><?php echo get_sub_field('card_title'); ?></div>
												<div class="pricing-card-content">
													<h2><?php echo get_sub_field('card_heading'); ?></h2>
													<p><?php echo get_sub_field('card_sub_heading'); ?></p>
													<?php echo get_sub_field('card_features'); ?>
												</div>
												<div class="pricing-card-button">
													<a href="<?php echo get_sub_field('card_button_link'); ?>"><?php echo get_sub_field('card_button_text'); ?></a>
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
				</section>
				<!-- pricing section end -->

				<!-- pricing section start -->
				<section class="pricing-section">
					<div class="container">
						<div class="row">
							<div class="col-md-10 m-auto">
								<div class="section-heading text-center">
									<h5 class="sec-title"><?php echo get_field('pricing_switcher_title_bottom'); ?></h5>
								</div>
							</div>
						</div>
						<div class="row gy-5">

						<?php
							// Check rows exists.
							if( have_rows('monthly_bottom_pricing_card') ):

								// Loop through rows.
								while( have_rows('monthly_bottom_pricing_card') ) : the_row();

									?>
										<div class="col-md-4 col-sm-6">
											<div class="pricing-card">
												<div class="pricing-card-header"><?php echo get_sub_field('card_title'); ?></div>
												<div class="pricing-card-content">
													<h2><?php echo get_sub_field('card_heading'); ?></h2>
													<p><?php echo get_sub_field('card_sub_heading'); ?></p>
													<?php echo get_sub_field('card_features'); ?>
											
												</div>
												<div class="pricing-card-button">
													<a href="<?php echo get_sub_field('card_button_link'); ?>"><?php echo get_sub_field('card_button_text'); ?></a>
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
				</section>
				<!-- pricing section end -->
			</div>

			<!-- tasks start -->
			<section class="task-section">
				<div class="container">
					<div class="row">
						<div class="col-md-10 m-auto">
							<div class="section-heading text-center">
								<h5 class="sec-title"> <?php echo get_field('task_section_title'); ?> </h5>
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
												<span class="icon">
													<img src="<?php echo  get_sub_field('icon'); ?>" alt="<?php echo bloginfo('name'); ?>" >
												</span>
											<h3><a href="<?php echo  get_sub_field('icon_box_url'); ?>"> <?php echo  get_sub_field('icon_box_content'); ?> </a></h3>
											<?php 

											if(get_sub_field('icon_box_url')){
												?>
													<a href="<?php echo  get_sub_field('icon_box_url'); ?>"> <?php echo get_field('icon_box_url_text'); ?> About Us <i class="fa-solid fa-chevron-right"></i></a>
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
			<!-- tasks end -->

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

			<!-- FAQ Start -->
			<section class="faq">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-10 m-auto">
							<div class="section-heading text-center">
								<h5 class="sec-title"><?php echo get_field('accordion_section_title'); ?></h5>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12">
							<div class="faq-wrapper">
								<div class="accordion" id="faqOne">
								<?php
								$i = 0;
								// Check rows exists.
									if( have_rows('accordion') ):

										// Loop through rows.
										while( have_rows('accordion') ) : the_row();
								
											?>
												<div class="accordion-item">
												<h2 class="accordion-header" id="headingOne<?php echo $i; ?>">
													<button
														class="accordion-button"
														type="button"
														data-bs-toggle="collapse"
														data-bs-target="#faq<?php echo $i; ?>"
														aria-expanded="true"
														aria-controls="faq<?php echo $i; ?>"
													>
													<?php echo get_sub_field('accordion_heading'); ?>
														
													</button>
												</h2>
												<div id="faq<?php echo $i; ?>" class="accordion-collapse collapse" aria-labelledby="headingOne<?php echo $i; ?>" data-bs-parent="#faqOne<?php echo $i; ?>">
													<div class="accordion-body">
														<?php echo get_sub_field('accordion_content'); ?>
													
													</div>
												</div>
											</div>
												
											<?php
											$i++;
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
				</div>
			</section>
			<!-- FAQ end -->

			<!-- Contact start -->
			<section class="contact-section">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-sm-10 m-auto">
							<div class="section-heading text-center">
								<h5 class="sec-title"> <?php echo get_field('price_contact_title'); ?> </h5>
								<div class="sec-subtitle">
									<?php echo get_field('price_contact_paragraph'); ?>
									
								</div>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-12 contact-form-wrapper m-auto">
						
						<?php echo get_field('price_contact_form'); ?>

						</div>
					</div>
				</div>
			</section>
			<!-- Contact end -->
		</main>
		<!-- main.main-wrapper end -->

<?php get_footer(); ?>

