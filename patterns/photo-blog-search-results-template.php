<?php
/**
 * Title: Photo blog search results
 * Slug: twentytwentyfive/photo-blog-search-results
 * Template Types: search
 * Viewport width: 1400
 * Inserter: no
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_Five
 * @since Twenty Twenty-Five 1.0
 */

?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"var:preset|spacing|60"}}},"layout":{"type":"constrained"}} -->
<main class="wp-block-group" style="margin-top:var(--wp--preset--spacing--60)">
	<!-- wp:query-title {"type":"search","textAlign":"center","align":"wide"} /-->
	<!-- wp:group {"align":"wide","layout":{"type":"default"}} -->
	<div class="wp-block-group alignwide">
		<!-- wp:pattern {"slug":"twentytwentyfive/hidden-search"} /-->
	</div>
	<!-- /wp:group -->
	<!-- wp:pattern {"slug":"twentytwentyfive/photo-blog-posts"} /-->
</main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer"} /-->
