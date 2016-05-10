<?php
/**
 * The template for displaying home page
 *
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */

get_header(); ?>

<section class="banner">
	<div class="home-banner">
		<?php if( have_rows('slides') ):
			while( have_rows('slides') ): the_row(); 
				$image = get_sub_field('image'); 
				$mob_img = get_sub_field('mobile_image'); ?>

				<div class="home-slide">
					<img class="desktop-img" src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>">
					<img class="mobile-img" src="<?php echo $mob_img['url']; ?>" alt="<?php echo $mob_img['alt']; ?>">
					<div class="container">
						<div class="slide-content">
							<h1><?php echo the_sub_field('text_line_1'); ?></h1>
							<h3><?php echo the_sub_field('text_line_2'); ?></h3>
							<a href="<?php the_sub_field('link'); ?>"><?php the_sub_field('link_text'); ?></a>
						</div>
					</div>
				</div>

			<?php endwhile;
		endif; ?>
	</div>
</section>

<section class="women-empowerment">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="row">
					<?php $we_image = get_field('we_image'); ?>
					<img class="img-responsive" src="<?php echo $we_image['url']; ?>" alt="<?php echo $we_image['alt']; ?>" />
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="row">
					<div class="women-empowerment-content">
						<h2><?php the_field('we_heading'); ?></h2>
						<p><?php the_field('we_content'); ?></p>
						<a href="<?php the_field('we_link'); ?>"><?php the_field('we_link_text'); ?></a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="ripple-effect">
	<div class="container">
		<h2 class="section-header"><?php the_field('re_heading'); ?></h2>
		<div class="row">
			<?php if( have_rows('effects') ): ?>
				<div class="desktop-effects">

					<?php $ctr = 1;
					while( have_rows('effects') ): the_row();
						if($ctr == 1 || $ctr == 6) : ?>
							<div class="effect <?php if($ctr == 6) : echo 'last-effect'; endif; ?>">
								<?php $icon = get_sub_field('icon'); ?>
								<img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" />
								<h3><?php the_sub_field('header'); ?></h3>
								<p><?php the_sub_field('content'); ?></p>
							</div>
							<div class="clearfix"></div>
						<?php else : 

							if($ctr == 2 || $ctr == 4): ?>
								<div class="center-effects-col">
							<?php endif; ?>

								<div class="row">
									<div class="effect">
										<?php $icon = get_sub_field('icon'); ?>
										<img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" />
										<h3><?php the_sub_field('header'); ?></h3>
										<p><?php the_sub_field('content'); ?></p>
									</div>
								</div>

							<?php if($ctr == 3 || $ctr == 5): ?>
								</div>
							<?php endif; ?>

							<?php if($ctr == 3): ?>
								<div class="center-image">
									<?php $center_image = get_field('center_image'); ?>
									<img class="img-responsive" src="<?php echo $center_image['url'] ?>" alt="<?php echo $center_image['alt'] ?>" />
								</div>
							<?php endif; ?>

							<?php if($ctr == 5): ?>
								<div class="clearfix"></div>
							<?php endif; ?>

						<?php endif; ?>

					<?php $ctr++;
					endwhile; ?>

				</div>

				<div class="mobile-effects">
					<div class="mobile-invest">
						<?php $center_image = get_field('center_image'); ?>
						<img class="img-responsive" src="<?php echo $center_image['url'] ?>" alt="<?php echo $center_image['alt'] ?>" />
					</div>

					<div class="ripple-mobile">
						<?php while( have_rows('effects') ): the_row(); ?>
							<div class="effect">
								<?php $icon = get_sub_field('icon'); ?>
								<img src="<?php echo $icon['url'] ?>" alt="<?php echo $icon['alt'] ?>" />
								<h3><?php the_sub_field('header'); ?></h3>
								<p><?php the_sub_field('content'); ?></p>
							</div>
						<?php endwhile; ?>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="our-causes">
	<div class="container">
		<div class="row">
			<h2 class="section-header"></h2>
			<div class="col-lg-6 col-md-6 col-sm-6 cause-tile">
				<?php $causes_left_tile_image = get_field('causes_left_tile_image'); ?>
				<img src="<?php echo $causes_left_tile_image['url'] ?>" alt="<?php echo $causes_left_tile_image['alt'] ?>" />
				<div class="cause-content">
					<h2><?php the_field('causes_left_tile_heading'); ?></h2>
					<p><?php the_field('causes_left_tile_content'); ?></p>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-6 cause-tile">
				<?php $causes_right_tile_image = get_field('causes_right_tile_image'); ?>
				<img src="<?php echo $causes_right_tile_image['url'] ?>" alt="<?php echo $causes_right_tile_image['alt'] ?>" />
				<div class="cause-content">
					<h2><?php the_field('causes_right_tile_heading'); ?></h2>
					<p><?php the_field('causes_right_tile_content'); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="get-involved">
	<div class="col-lg-6 col-md-6 col-sm-6">
		<div class="row">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/get-involved.jpg" alt="" />
		</div>
	</div>

	<div class="col-lg-6 col-md-6 col-sm-6">
		<h2 class="section-header">Get Involved</h2>
		<p>Join the Palmon Foundation TODAY to be a</p>
		<div class="foundation-members">
			<div class="member-type">Mentor</div>
			<div class="member-or">or</div>
			<div class="member-type">Volunteer</div>
		</div>
	</div>

	<div class="clearfix"></div>

	<div class="involved-donate">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-6">
					<h2>You can <span>Light the Way</span></h2>
				</div>

				<div class="col-lg-6 col-md-6 col-sm-6">
					<div class="row">
						<a href="#">Donate Now</a>
						<a href="#">Sponsor a Child</a>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="our-partners">
	<div class="container">
		<h2 class="section-header">Our Partners</h2>
		<div class="row">
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/jeev-sewa.png" alt="" />
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/zb.png" alt="" />
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/roundtable.png" alt="" />
			<img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/assets/images/harmonyhouse.png" alt="" />
		</div>
	</div>
</section>

<section class="our-programs">
	<div class="container">
		<h2 class="section-header">Our Programs</h2>
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 flagship">
				<h3>Flagship Projects</h3>
				<div class="program-controls">
					<a href="#" class="all-programs">View All</a>
					<a href="#" class="program-left"></a>
					<a href="#" class="program-right"></a>
				</div>

				<?php
					$args = array(
						'post_type'			  	=> 'programs',
						'posts_per_page'      	=> 2,
						'ignore_sticky_posts'	=> 1,
					);
					$query = new WP_Query($args);

					if( $query->have_posts() ): ?>
						<div class="programs-slider">
							<?php
							while( $query->have_posts() ) : $query->the_post(); ?>
								<div class="col-md-6 col-sm-6 program-slide">
									<a href="<?php the_permalink(); ?>">
										<div class="program-img">
											<?php the_post_thumbnail('full');?>
										</div>
										<h4><?php the_title(); ?></h4>
										<p><?php echo shortenText(get_the_excerpt(), 90, ''); ?></p>
									</a>

									<div class="preview-content">
										<h3><?php the_title(); ?></h3>
										<?php $images = get_field('gallery_images', get_the_ID());
											if( $images ): ?>
												<div class="preview-images" data-program="<?php the_ID(); ?>">
										            <?php foreach( $images as $image ): ?>
										                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										            <?php endforeach; ?>
									            </div>
											<?php endif; ?>
										<?php echo shortenText(wpautop(get_the_content()), 385, ''); ?>
									</div>

								</div>
							<?php 
							endwhile; ?>
						</div>
					<?php
					endif;

					wp_reset_postdata();

					if( $query->have_posts() ): ?>
						<div class="programs-slider mobile-programs">
							<?php
							while( $query->have_posts() ) : $query->the_post(); ?>
								<div class="col-md-12 program-slide">
									<a href="<?php the_permalink(); ?>">
										<div class="program-img">
											<?php the_post_thumbnail('full');?>
										</div>
										<h4><?php the_title(); ?></h4>
										<p><?php echo shortenText(get_the_excerpt(), 90, ''); ?></p>
									</a>

									<div class="preview-content">
										<h3><?php the_title(); ?></h3>
										<?php $images = get_field('gallery_images', get_the_ID());
											if( $images ): ?>
												<div class="preview-images" data-program="<?php the_ID(); ?>">
										            <?php foreach( $images as $image ): ?>
										                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
										            <?php endforeach; ?>
									            </div>
											<?php endif; ?>
										<?php echo shortenText(wpautop(get_the_content()), 385, ''); ?>
									</div>

								</div>
							<?php 
							endwhile; ?>
						</div>
					<?php
					endif;

					wp_reset_postdata();
				?>

				<!-- <div class="programs-slider">
					<div class="col-md-6 col-sm-6 program-slide">
						<a href="#">
							<div class="program-img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/program1.jpg" />
							</div>
						</a>
					</div>

					<div class="col-md-6 col-sm-6 program-slide">
						<a href="#">
							<div class="program-img">
								<img src="<?php echo get_template_directory_uri(); ?>/assets/images/program2.jpg" />
							</div>
						</a>
					</div>
				</div> -->
			</div>

			<div class="col-lg-6 col-md-6 col-sm-6 ">
				<div class="program-preview">
					<?php
						$args = array(
							'post_type'			  	=> 'programs',
							'posts_per_page'      	=> 1,
							'ignore_sticky_posts'	=> 1,
						);
						$query = new WP_Query($args);

						if( $query->have_posts() ): ?>
							<div class="programs-content">
								<?php
								while( $query->have_posts() ) : $query->the_post(); ?>
									<h3><?php the_title(); ?></h3>
									<?php $images = get_field('gallery_images', get_the_ID());
										if( $images ): ?>
											<div class="preview-images" data-program="<?php the_ID(); ?>">
									            <?php foreach( $images as $image ): ?>
									                    <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
									            <?php endforeach; ?>
								            </div>
										<?php endif; ?>
									<?php echo shortenText(wpautop(get_the_content()), 385, ''); ?>
								<?php 
								endwhile; ?>
							</div>
						<?php
						endif;

						wp_reset_postdata();
					?>
				</div>
			</div>
			
		</div>
	</div>
</section>

<section class="recent-events">
	<h2 class="section-header">Recent Events</h2>
	<h4>Explore, Engage, Empower</h4>
	<div class="event-tiles">

		<?php
			$args = array(
				'post_type'			  	=> 'events',
				'posts_per_page'      	=> 2,
				'ignore_sticky_posts'	=> 1,
			);
			$query = new WP_Query($args);

			if( $query->have_posts() ):
				while( $query->have_posts() ) : $query->the_post(); ?>
					<div class="event-group">
						<?php $images = get_field('gallery', get_the_ID());
							if( $images ):
								$ctr = 1;
								foreach( $images as $image ):
									if($ctr <= 6) : ?>
										<div class="event-tile">
											<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
											<a href="<?php the_permalink(); ?>">
												<span><?php the_title(); ?></span>
											</a>
										</div>
									<?php endif;
									$ctr++;
								endforeach;
							endif;
						?>
					</div>
				<?php
				endwhile;
			endif;

			wp_reset_postdata();
		?>
	</div>
</section>

<section class="home-posts">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6 col-sm-6 home-blogs home-voices">
				<div class="row">
					<h2>Voices of Change</h2>
					<a class="all-posts" href="#">View All</a>

					<?php
						$args = array(
							'post_type'			  => 'voices',
							'posts_per_page'      => 1,
							'ignore_sticky_posts' => 1,
						);
						$query = new WP_Query($args);

						if( $query->have_posts() ): ?>
							<div class="featured-blogs">
								<?php
								while( $query->have_posts() ) : $query->the_post(); ?>
									<div class="col-lg-12 col-md-12 col-sm-12 home-blog">
										<a class="home-blog-img" href="<?php the_permalink(); ?>">
											<?php the_post_thumbnail('full');?>
										</a>
										<h3><?php the_title(); ?><span class="news-date"><?php the_time('d.m.Y'); ?></span></h3>
										<p><?php echo shortenText(get_the_excerpt(), 195, ''); ?></p>
										<a href="<?php the_permalink(); ?>">Read more</a>
									</div>
								<?php 
								endwhile; ?>
							</div>
						<?php
						endif;

						wp_reset_postdata();
					?>
				</div>
			</div>

			<div class="col-lg-6 col-md-6 col-sm-6 home-blogs">
				<div class="row">
					<div class="col-md-12"><h2>From our Blogs</h2></div>
					<a class="all-posts" href="#">View All</a>

					<?php
						$args = array(
							'posts_per_page'      => 2,
							'post__in'            => get_option( 'sticky_posts' ),
							'ignore_sticky_posts' => 1,
						);
						$query = new WP_Query($args);

						if( $query->have_posts() ): ?>
							<div class="desktop-blogs">
								<div class="featured-blogs">
									<?php
									while( $query->have_posts() ) : $query->the_post(); ?>
										<div class="col-lg-6 col-md-6 col-sm-6 home-blog">
											<a class="home-blog-img" href="<?php the_permalink(); ?>">
												<?php the_post_thumbnail('full');?>
											</a>
											<h3><?php the_title(); ?><span class="news-date"><?php the_time('d.m.Y'); ?></span></h3>
											<p><?php echo shortenText(get_the_excerpt(), 94, ''); ?></p>
											<a href="<?php the_permalink(); ?>">Read more</a>
										</div>
									<?php 
									endwhile; ?>
								</div>
							</div>
						<?php
						endif;

						wp_reset_postdata();

						if( $query->have_posts() ): ?>
							<div class="mobile-blogs">
								<div class="featured-blogs">
									<div class="blogs-slide">
										<?php
										while( $query->have_posts() ) : $query->the_post(); ?>
											<div class="col-md-12 home-blog">
												<a class="home-blog-img" href="<?php the_permalink(); ?>">
													<?php the_post_thumbnail('full');?>
												</a>
												<h3><?php the_title(); ?><span class="news-date"><?php the_time('d.m.Y'); ?></span></h3>
												<p><?php echo shortenText(get_the_excerpt(), 94, ''); ?></p>
												<a href="<?php the_permalink(); ?>">Read more</a>
											</div>
										<?php 
										endwhile; ?>
									</div>
								</div>
							</div>
						<?php
						endif;

						wp_reset_postdata();


					?>
				</div>
			</div>
		</div>
	</div>
</section>

<?php get_footer(); ?>




















