<?php

get_header();?>





<?php if (get_field('four_box')): ?>
	<div class="row four-box ">
		<div class="title-four-box">Dlaczego warto skorzystać z Naszych usług</div>

		<?php while (has_sub_field('four_box')): ?>
			<div class="small-12 medium-6 large-6 columns innerBox">
				<img src="<?php the_sub_field('picture');?>" alt="" />
				<div class="title"><?php the_sub_field('title');?></div>
				<div class="description"><?php the_sub_field('description');?></div>
			</div>
		<?php endwhile;?>
	</div>
	<div class="mainBg">
		<div class="p-bott-15"></div>
	<?php endif;?>
	<?php if (get_field('block')): ?>
		<div class="row">
			<div class="block-homepage visible-for-medium-up block-grid-3">
				<?php while (has_sub_field('block')): ?>
					<div class="block ">
						<div class="medium-4 large-4 columns">
							<div class="description <?php the_sub_field('title_picture');?>">
								<div class="title"><?php the_sub_field('title');?></div>
								<div class="subtitle"><?php the_sub_field('subtitle');?></div>
							</div>
							<img src="<?php the_sub_field('picture');?>" alt="" />
						</div>
					</div>
				<?php endwhile;?>
			</div>
		</div>
	<?php endif;?>
	<br>







	<?php get_footer();?>
