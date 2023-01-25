<?php
/**
 *
 * @package template
 */ ?>

<form class="searchform" role="search" method="get" id="searchform" action="<?php echo home_url( '/' ) ?>" >
	<input type="text" value="<?php echo get_search_query() ?>" name="s" id="s" placeholder="Поиск по сайту" />
	<button type="submit" id="searchsubmit" value="найти"><i class="fa fa-search"></i></button>
</form>
