<?php

get_header();?>
<div class="row p-top-80 contactBg">
	<span class="small-12 medium-12 large-4 columns text-center p-top-15 p-bot-15"><i class="Phone is-animating"></i>
		<p>
			<strong>Potrzebujesz pomocy? Zadzwoń</strong>
		</p>
		<a class="black" href="tel:0048727778828"><span style="color: #c04034;">(+48)</span> 727 799 001</a>
	</span>
	<span class="small-12 medium-4 large-4 columns text-center p-top-15 p-bot-15">
		<i class="Clock"></i>
		<p>
			<strong>Adres e-mail</strong>
		</p>
		<a class="black" href="mailto:info@RestartAGD.pl">info@RestartAGD.pl</a>
	</span>
	<span class="small-12 medium-4 large-4 columns text-center p-top-15 p-bot-15">
		<i class="Mail"></i>
		<p><strong>Godziny pracy:</strong></p>
		<p>
			Pn. – Pt.: 8:00 – 20:00 <br>
			RestartAGD.pl <br>
			ul. Obornicka 330 <br>
			60-689 Poznań
		</p>
	</span>
</div>
<div class="row subpage">
	<aside id="sidebar" class="small-12 medium-6 large-6 columns">
		<?php if (get_field('sidebar_why', 'options')): ?>
			<div class="row">
				<div class="small-12 medium-12 large-12 columns why equalize">
					<ul class="contact-city">
						<br />
						<div class="title">Dlaczego warto nam zaufać?</div>
						<ul>
							<?php while (has_sub_field('sidebar_why', 'options')): ?>
								<li><?php if (get_field('img1')): ?>
										<img src="<?php the_field('img1');?>" />
									<?php endif;?><?php the_sub_field('title');?>
								</li>
							<?php endwhile;?>
						</ul>
				</div>
			</div>
		<?php endif;?>
	</aside>
	<?php while (have_posts()): the_post();?>
					<article class="small-12 medium-6 large-6 columns contact offerSideRight">
						<header>
							<h1 class="entry-title p-top-15">
								Zamów usługę
								<span>wypełnij formularz</span>
							</h1>
						</header>
						<?php the_content();?>
					</article>
				<?php endwhile;?>
</div>
<?php get_footer();?>
