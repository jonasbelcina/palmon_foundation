<?php
/**
Template Name: What we do
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
					<h1>Mission</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, .</p>
				</div>
				<div class="col-md-7 who">
					<h1>Who we are</h1>
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur.</p>
				</div>
				<div class="clearfix"></div>
			</div> 
		</div>
	</div>
</section>

<section class="founders">
	<div class="container">
		<div class="row">
			<h2 class="section-header">Founders Speak</h2>

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
		<h2 class="section-header">The Need</h2>
		<div class="row">
			<div class="details">
				<h2>We believe that everybody has exceptional skills, they only need an environment where they can blossom</h2>
				<p>Educating girls and empowering women mobilizes communities to take a stand against gender disparity and to assure access to quality education and lifestyle</p>
				<h3>Educated Girls &amp; Women WILL...</h3>
			</div>
			<div class="needs">
				<div class="col-md-6">
					<div class="col-md-8 need"> 
						Earn 10% More Income
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-8 need"> 
						Earn 10% More Income
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-8 need"> 
						Earn 10% More Income
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-8 need"> 
						Earn 10% More Income
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-8 need"> 
						Earn 10% More Income
					</div>
				</div>
				<div class="col-md-6">
					<div class="col-md-8 need"> 
						Earn 10% More Income
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
	</div>
</section>

<section class="advisory-board">
	<div class="container">
		<h2 class="section-header">Advisory Board</h2>
		<div class="row">
			<div class="advisory-board-slider">
				<?php
				if( have_rows('advisory_board') ):
					while ( have_rows('advisory_board') ) : the_row();
				?>
					<div class="person-tile" >
						<div class="col-sm-6 image">
							<?php $image = get_sub_field('image'); ?>
							<img src="<?php echo $image; ?>" alt="" />
						</div>
						<div class="col-sm-6 content">
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
		<h2 class="section-header">Our Partners</h2>
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
		<h2 class="section-header">Impact</h2>
		<div class="row">
			<div class="col-md-4 single">
				<div class="image">
					<img src="<?=get_template_directory_uri()?>/assets/images/book.png">
				</div>
				<h2>Earn 10% More Income</h2>
				<p>We educate girls and empower women by leveraging the latest tools and technology and our collaborative learning community.</p>
			</div> 
			<div class="col-md-4 single">
				<div class="image">
					<img src="<?=get_template_directory_uri()?>/assets/images/prize.png">
				</div>
				<h2>Championing Change</h2>
				<p>We equip our members with cutting-edge knowledge, resources and opportunities to become agents of change in their communities.</p>
			</div> 
			<div class="col-md-4 single">
				<div class="image">
					<img src="<?=get_template_directory_uri()?>/assets/images/globe.png">
				</div>
				<h2>Massive Presence</h2>
				<p>Palmon Foundation is leaping for women's economic empowerment  with like minded members, organizations and companies.</p>
			</div>
			<div class="clearfix"></div>
			<a href="#" class="join">Join US Now</a>
		</div>
	</div>
</section>


<?php get_footer(); ?>




















