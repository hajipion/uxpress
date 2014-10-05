<?php get_header(); ?>
<main class="wrapper">
	<div class="main-contents">
		<section>
			<?php if (have_posts()) : ?>
				<header class="main-content-header">
					<h2 class="header-title">
						<?php $cat = get_the_category(); $cat = $cat[0]; { echo $cat->cat_name; } ?>
					</h2>
				</header>
				<?php while (have_posts()) : the_post(); ?>
					<section class="post-box">
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>">
							<div class="post-thumbnail">
								<?php the_post_thumbnail(); ?>
							</div>
							<div class="post-caption">
								<div class="post-header">
									<?php $cat = get_the_category(); $cat = $cat[0]; $slug = $cat->slug; ?>
									<div class="post-cat <?php if ($slug == "webservice"): ?>cat-webservice<?php elseif ($slug == "knowledge"): ?>cat-knowledge<?php elseif ($slug == "technique"): ?>cat-technique<?php elseif ($slug == "event"): ?>cat-event<?php elseif ($slug == "news"): ?>cat-news<?php elseif ($slug == "designacademy"): ?>cat-designacademy<?php endif; ?>">
										<?php { echo $cat->cat_name; } ?>
									</div>
									<time class="post-time"><?php the_time('Y.m.d'); ?></time>
								</div>
								<h3 class="post-title"><?php the_title(); ?></h3>
							</div>
						</a>
					</section>
				<?php endwhile; ?>
			<?php else : ?>
				<?php include (TEMPLATEPATH . '/tmp-error.php'); ?>
			<?php endif; ?>
		</section>
	</div>
	<?php get_sidebar(); ?>
</main>
<?php get_footer(); ?>