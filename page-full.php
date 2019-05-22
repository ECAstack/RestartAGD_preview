<?php

get_header();?>

<?php if (get_field('icon', 5)): ?>
<?php endif;?>

<div class="row subpage">
	<article class="small-12 medium-12 large-12 columns contact">
		<?php while (have_posts()): the_post();?>
				<header>
					<h1 class="entry-title">
						<span><?php the_title();?></span>
					</h1>
				</header>
				<?php the_content();?>

				<?php endwhile;?>
		<?php if (get_field('according')): ?>

		<ul id="pytania">
			<?php while (has_sub_field('according')): ?>
			<li>
				<input checked="checked" type="checkbox" />

				<h4 class="accordingTitle">
					<i></i>
					<?php the_sub_field('title');?>
				</h4>
				<p>
					<?php the_sub_field('content');?>
				</p>
			</li>
			<?php endwhile;?>
			<?php endif;?>
		</ul>
	</article>
</div>

<?php get_footer();?>
