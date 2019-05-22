<?php

get_header();?>
<div class="row subpage" style="background-color:#fff;">
	<aside id="sidebar" class="small-12 medium-6 large-6 columns">
		<?php if (get_field('sidebar_why', 'options')): ?>
		<div class="row">
			<div class="small-12 medium-12 large-12 columns why" style="border-bottom: 1px solid #e5e5e5;">
				<div class="title"><span class="mainColor">Dlaczego warto nam zaufać?</span></div>
				<ul>
					<?php while (has_sub_field('sidebar_why', 'options')): ?>
					<li><?php the_sub_field('title');?></li>
					<?php endwhile;?>
				</ul>
			</div>
		</div>
		<?php endif;?>
	</aside>
	<div class="small-12 medium-6 large-6 columns" style="background-color:white; padding-right: 0; padding-left: 0;">
		<div class="google_maps visible-for-medium-up">
			<?php the_field('city_maps');?>
		</div>
		<div class="emptySpace hide-for-small"></div>
	</div>
	<div class="emptySpace hide-for-small"></div>
	<article class="small-12 medium-6 large-6 columns contact">
		<?php while (have_posts()): the_post();?>
				 <?php the_field('city_about_third');?>
			</article>
			<article class="small-12 medium-6 large-6 columns contact">
				<?php the_field('city_about');?>
			</article>
			<article class="small-12 medium-12 large-6 columns contact">
				<h2 class="mainColor ">Realizowane naprawy <br> w Serwisie AGD</h2>
				<?php the_field('city_about_second');?>
			</article>
			<article class="small-12 medium-12 large-6 columns contact">
				<h2 class="mainColor ">Dojazd i diagnoza w cenie naprawy sprzętu AGD</h2>
				<?php the_field('city_diagnosis');?>
			</article>

			<div class="slider">
				<?php if (get_field('partners', 'options')): ?>
				<div class="row margi-city"></div>
				<div class="row margi-city"></div>
				<div class="test">
				<?php while (has_sub_field('partners', 'options')): ?>




						<div class="text-center" style="height:100%; width:100%; background-color: white;">
							<img src="<?php the_sub_field('picture');?>" alt="<?php the_sub_field('title');?>" />
						</div>


				<?php endwhile;?>
		<?php endif;?>
		</div>
		<?php endwhile;?>

		<div class="row margi-city"></div>
		<div class="row margi-city"></div>
		<div class="trustBanner">
			<h4 class="text-center">
				Zaufało nam <br> <span class="mainColor">15 000 klientów</span>
			</h4>
			<div class="row margi-city"></div>
			<p class="text-center">Jako portal internetowy RestartAGD.pl współpracujemy z hydraulikami, którzy od lat
				<br>
				z pasją świadczą usługi hydrauliczne na najwyższym poziomie.</p>
		</div>
		<div class="siema text-right small-12 medium-12 large-12 columns">
			<?php if (get_field('city_opinion')): ?>
			<?php while (has_sub_field('city_opinion')): ?>
			<div class="innerSiema text-center-for-small  text-left">
				<h6><?php the_sub_field('name');?> </h6>
				<div class="rating">
					<span class="icon-star"></span>
					<span class="icon-star"></span>
					<span class="icon-star"></span>
					<span class="icon-star"></span>
					<span class="icon-star"></span>
				</div>
				<p><?php the_sub_field('opinion');?></p>
			</div>
			<?php endwhile;?>
			<?php endif;?>
			<?php if (get_field('city_opinion')): ?>
			<?php while (has_sub_field('city_opinion')): ?>
			<div class="innerSiema text-center-for-small text-left">
				<h6><?php the_sub_field('name');?> </h6>
				<div class="rating">
					<span class="icon-star"></span>
					<span class="icon-star"></span>
					<span class="icon-star"></span>
					<span class="icon-star"></span>
					<span class="icon-star"></span>
				</div>
				<p style="text-align: left !important;"><?php the_sub_field('opinion');?></p>
			</div>
			<?php endwhile;?>
			<?php endif;?>
		</div>
		<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/siema.min.js" />
		</script>
		<script>
			const mySiema = new Siema({
				duration: 2050,
				loop: true,
				perPage: {
					768: 1,
					1024: 3
				}
			});
			// listen for keydown event
			setInterval(() => mySiema.next(), 6000);
		</script>
	</div>
</div>
<?php get_footer();?>
