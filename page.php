<?php get_header(); ?>
<main class="wrapper">
	<div class="main-contents">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<article>
					<header class="main-content-header">
						<h2 class="header-title"><?php the_title(); ?></h2>
					</header>
					<section class="single-content page">
						<?php the_content(); ?>
					</section>
				</article>
				<?php include (TEMPLATEPATH . '/tmp-to-top.php'); ?>
			<?php endwhile; ?>
		<?php else : ?>
			<?php include (TEMPLATEPATH . '/tmp-error.php'); ?>
		<?php endif; ?>
		</section>
	</div>
	<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>