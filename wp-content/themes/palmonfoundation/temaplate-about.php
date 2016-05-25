<?php
/**
Template Name: About Us
 */

get_header(); 
			
$image = get_field('banner'); 
$mob_img = get_field('banner_mobile'); 
		
?>
<style type="text/css">
	.banner.about{
		background-image: url(<?=$image?>);
	}
	@media (max-width: 767px) {
		.banner.about{
			background-image: url(<?=$mob_img?>);
		}
	}
</style>
<section class="banner about">
	<div class="about-banner">
		<div class="container">
			<div class="row">
				<div class="col-md-5 mission"> 
					<h1><?php the_field('banner_left_col_header'); ?></h1>
					<?php echo wpautop(get_field('banner_left_col_content')); ?>
				</div>
				<div class="col-md-7 who">
					<h1><?php the_field('banner_right_col_header'); ?></h1>
					<?php echo wpautop(get_field('banner_right_col_content')); ?>
				</div>
				<div class="clearfix"></div>
			</div> 
		</div>
	</div>
</section>

<section class="founders">
	<div class="container">
		<div class="row">
			<h2 class="section-header"><?php the_field('founders_heading'); ?></h2>

			<?php
				if( have_rows('founders') ):
					while ( have_rows('founders') ) : the_row();
			?>
				<div class="col-lg-6 col-md-6 col-sm-6 founder-tile">
					<?php $image = get_sub_field('image'); ?>
					<img src="<?php echo $image; ?>" alt="" />
					<div class="founder-content">
						<div class="inner">
							<h2><?php the_sub_field('name'); ?></h2>
							<p class="title"><?php the_sub_field('designation'); ?></p>
							<p class="title"><?php the_sub_field('organisation'); ?></p>
							<div class="details">
								<p><?php the_sub_field('details'); ?></p>
							</div>
						</div>
					</div>
				</div>
			<?php
					endwhile;
				endif;
			?>
		</div>
	</div>
</section>

<section class="the-need">
	<div class="container">
		<h2 class="section-header"><?php the_field('the_need_heading'); ?></h2>
		<div class="row">
			<div class="details">
				<h2><?php the_field('the_need_subheading_1'); ?></h2>
				<p><?php the_field('the_need_subheading_2'); ?></p>
				<h3><?php the_field('the_need_subheading_3'); ?></h3>
			</div>
			<div class="needs">
				<?php if( have_rows('educated_benefits') ): ?>
					<?php while ( have_rows('educated_benefits') ) : the_row(); ?>
						<div class="col-md-6">
							<div class="col-md-8 need"> 
								<?php the_sub_field('content'); ?>
							</div>
						</div>
					<?php endwhile; ?>
					<div class="clearfix"></div>
				<?php endif; ?>
			</div>
		</div>
	</div>
</section>

<section class="advisory-board">
	<div class="container">
		<h2 class="section-header"><?php the_field('advisory_board_heading'); ?></h2>
		<div class="row">
			<div class="advisory-board-slider">
				<?php
				if( have_rows('advisory_board') ):
					while ( have_rows('advisory_board') ) : the_row();
				?>
					<div class="person-tile" >
						<div class="col-md-6 image">
							<?php $image = get_sub_field('image'); ?>
							<img src="<?php echo $image; ?>" alt="" />
						</div>
						<div class="col-md-6 content">
							<div class="inner">
								<h2><?php the_sub_field('name'); ?></h2>
								<p class="title"><?php the_sub_field('designation'); ?></p>
								<p><?php the_sub_field('description'); ?></p>
							</div>
						</div>
						<div class="clearfix"></div>
					</div>
				<?php
						endwhile;
					endif;
				?>
			</div> 
		</div>
	</div>
</section>

<section class="our-partners">
	<div class="container">
		<h2 class="section-header"><?php the_field('about_partners_heading'); ?></h2>
		<div class="row">
			<?php $images = get_field('partners');
			if( $images ): ?>
			    <div class="partners-slider">
			        <?php foreach( $images as $image ): ?>
			            <img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>" />
			        <?php endforeach; ?>
			    </div>
			<?php endif; ?>
		</div>
	</div>
</section>

<section class="impact">
	<div class="container">
		<h2 class="section-header"><?php the_field('impact_heading'); ?></h2>
		<div class="impact-slider">
			<?php 
			if( have_rows('impact') ):
				while ( have_rows('impact') ) : the_row(); ?>
				<div class="col-sm-4 single">
					<?php $impact_img = get_sub_field('image'); ?>
					<div class="image">
						<img src="<?php echo $impact_img['url']; ?>" alt="<?php echo $impact_img['alt']; ?>" />
					</div>
					<h2><?php the_sub_field('heading'); ?></h2>
					<?php echo wpautop(get_sub_field('content')); ?>
				</div> 
			<?php endwhile;
			endif; ?>
		</div>
		<a href="<?php the_field('impact_button_link'); ?>" class="join"><?php the_field('impact_button_text'); ?></a>
	</div>
</section>


<?php get_footer(); ?>




















