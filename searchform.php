<?php query_posts("post_type=post"); ?>
<form method="get" id="searchform" action="<?php bloginfo('url'); ?>" class="search-text">
	<input type="text" class="search-box" placeholder="ブログ内テキスト検索" value="<?php the_search_query(); ?>" name="s" id="s">
	<input type="hidden" id="searchsubmit" value="検索">
</form>