<?php
/**
Template Name: What we do
 */

get_header(); 
			
$image = get_field('banner');
$mob_img = get_field('banner_mobile');
		
?>

<section class="banner what-we-do">
	<div class="container">
		<div class="row">
			<h2 class="section-header"><?php the_field('fwg_heading'); ?></h2>
			<h3><?php the_field('fwg_subheading'); ?></h3>
			<!-- <div class="row"> -->
				<div class="content">
					<div class="col-md-6">
						<?php echo wpautop(get_field('fwg_text_content')); ?>
					</div>
					<div class="col-md-6">
						<?php $fwg_img = get_field('fwg_image'); ?>
						<img src="<?php echo $fwg_img['url']; ?>" alt="<?php echo $fwg_img['alt']; ?>" />
					</div> 
					<div class="clearfix"></div>
				</div>
			<!-- </div> -->
		</div> 
	</div>
</section>


<section class="working-model">
	<div class="container">
		<div class="row">
			<h2 class="section-header">Our Working Model</h2>
			<div class="content">
				<div>
					<span>Girls out of school</span>
				</div>
				<div>
					<span>Girl’s Education</span>
				</div>
				<div>
					<span>Career Development</span>
				</div>
				<div>
					<span>Women in Leadership</span>
				</div>
				<div>
					<span>Bringing systemic change</span>
				</div>
				<div>
					Generations of girls in school
				</div>
			</div>
		</div> 
	</div>
</section>

<section class="keys">
	<div class="container">
		<div class="row">
			<h2 class="section-header"><?php the_field('keys_heading'); ?></h2>
			<h3><?php the_field('keys_subheading'); ?></h3>
			<div class="content">
				<?php if( have_rows('keys_keys') ): ?>
					<?php $ctr = 1; ?>
					<ul class="nav-tabs" id="sync1">
						<?php while ( have_rows('keys_keys') ) : the_row(); ?>
							<li class="col-xs-3 key<?php echo $ctr; ?> box <?php if($ctr == 1) { echo 'active'; } ?>">
								<a data-toggle="tab" href="#tab_<?php echo $ctr; ?>">
									<div class="key">
									</div>
									<?php echo get_sub_field('title'); ?>
								</a>
							</li>
							<?php $ctr++; ?>
						<?php endwhile; ?>
					</ul>
				<?php endif; ?>
			</div>
		</div> 
	</div>
	<div class="tab-content" id="sync2">
		<?php if( have_rows('keys_keys') ): ?>
			<?php $ctr = 1; ?>
			<?php while ( have_rows('keys_keys') ) : the_row(); ?>
					<div class="tab-pane fade in <?php if($ctr == 1) { echo 'active'; } ?>" id="tab_<?php echo $ctr; ?>">
						<div class="container">
							<div class="row">
								<div class="col-xs-2">
									<img src="<?=get_template_directory_uri()?>/assets/images/key-1.png">
								</div>
								<div class="col-xs-10">
									<h1><?php echo get_sub_field('title'); ?></h1>
									<?php echo wpautop(get_sub_field('content')); ?>
								</div>
								<div class="clearfix"></div>
							</div>
						</div>
					</div>
			<?php $ctr++; ?>
		<?php endwhile; ?>
	<?php endif; ?>
	</div>
</section>

<section class="programmes">
	<div class="container">
		<div class="row">
			<h2 class="section-header"><?php the_field('wwdop_heading'); ?></h2>
			<h3><?php the_field('wwdop_subheading'); ?></h3>
			<div class="program">
				<div class="col-md-6">
					<h1>Lifeskills at Schools</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> 
				</div>
				<div class="col-md-6">
					<img src="<?=get_template_directory_uri()?>/assets/images/programmes.jpg">
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="program">
				<div class="col-md-6 pull-right">
					<h1>Lifeskills at Schools</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> 
				</div>
				<div class="col-md-6">
					<img src="<?=get_template_directory_uri()?>/assets/images/programmes.jpg">
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="program">
				<div class="col-md-6">
					<h1>Lifeskills at Schools</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque</p> 
				</div>
				<div class="col-md-6">
					<img src="<?=get_template_directory_uri()?>/assets/images/programmes.jpg">
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>

<?php $donate_bg = get_field('donate_background_image'); ?>
<section class="donate" style="background: url(<?php echo $donate_bg['url']; ?>) center no-repeat #333;">
	<div class="container">
		<h1><?php the_field('donate_content'); ?></h1>
		<div class="row">
			<a href="<?php the_field('donate_button_link'); ?>"><?php the_field('donate_button_text'); ?></a>
		</div>
	</div>
</section>

<section class="voice">
	<div class="container">
		<div class="row">
			<h2 class="section-header">Voice of Change</h2>

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
					<div class="col-md-6">
						<?php the_post_thumbnail('full');?>
					</div>
					<div class="col-md-6">
						<h1><?php the_title(); ?></h1>
						<p><?php echo shortenText(get_the_excerpt(), 195, ''); ?></p> 
					</div>
					<div class="clearfix"></div>
				<?php 
				endwhile; ?>
			</div>
			<?php
			endif;

			wp_reset_postdata();
			?>
			
		</div>
	</div>
</section>

<?php get_footer(); ?>




















