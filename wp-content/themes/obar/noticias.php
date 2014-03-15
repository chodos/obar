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

	<article id="post-<?php the_ID(); ?>" class="corpo-obar noticias">
		<header class="entry-header">
			<h2 class="titulo-noticias">Ctrl+C Ctrl+V</h2>
			<h3 class="titulo-noticias">Notícias do Mercado</h3>
			<h1 class="titulo-artigo"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
			<p class="artigo-data"><?php the_date(); ?></p>
		</header>
		<div class="entry-content artigos">
			<p class="artigo-resumo"><?php the_excerpt(); ?></p>
			<?php the_post_thumbnail(); ?>
		</div>
		<footer>
			<p class="leia-artigo"><a href="<?php the_permalink(); ?>" rel="bookmark">Leia mais...</a></p>
		</footer>
	</article>

