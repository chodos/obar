<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>

	<article id="post-<?php the_ID(); ?>" class="corpo-obar" style="width:100%;margin:0.8% 0px;padding:0px">
		<header class="entry-header">
			<h1 class="titulo-artigo"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<p class="artigo-data"><?php the_time('d/m/Y'); ?></p>
		</header>
		<div class="entry-content artigos">
			<p><?php the_excerpt(); ?></p>
			<?php the_post_thumbnail(); ?>
		</div>
		<footer>
			<p class="leia-artigo"><a href="<?php the_permalink(); ?>" rel="bookmark">Leia mais...</a></p>
		</footer>
	</article>

