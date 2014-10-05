<?php get_header(); ?>
<main class="wrapper">
	<div class="main-contents">
		<?php if (have_posts()) : ?>
			<?php while (have_posts()) : the_post(); ?>
				<article>
					<header class="main-content-header">
						<time class="single-post-time"><?php the_time('Y.m.d'); ?></time>
						<h1 class="single-post-title"><?php the_title(); ?></h1>
					</header>
					<p class="single-thumbnail">
						<?php the_post_thumbnail(); ?>
					</p>
					<section class="single-content">
						<?php the_content(); ?>
					</section>
				</article>
				<p class="twitter-btn"><a href="https://twitter.com/share" class="twitter-share-button" data-size="large" data-count="none">Tweet</a></p><script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
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