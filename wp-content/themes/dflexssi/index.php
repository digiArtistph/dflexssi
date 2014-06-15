<?php get_header(); ?>

<!--------------Content--------------->
<section id="content">
	<div class="zerogrid block">	
		<div class="row block04">
			<div class="col16">
				<section>
					<p>Home >> Blog</p>
				</section>
			</div>
		</div>

	<div class="row block05">
		<div id="main-content" class="col-2-3">

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<article>
			<div class="heading">
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				<div class="info">Ported by Admin | 2 Comments | March 11, 2014</div>
			</div>
			<div class="content">
				<?php the_post_thumbnail(); ?>
				<p><?php the_content(); ?></p>

			</div>
		</article>	
	<?php endwhile; endif; ?>
	
	<div id="sidebar" class="col-1-3">

			</div>
		</div>
	</div>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>