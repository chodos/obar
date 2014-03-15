<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * For example, it puts together the home page when no home.php file exists.
 *
 * @link http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
		<?php if ( have_posts() ) : 
					if (is_home()) {
						echo do_shortcode("[SlideDeck2 id=39]"); 
					}
					$args = array(
						'post_type' => 'post',
						'cat' => 7,
						'posts_per_page' => 1
					);
					$noticias = new WP_Query($args);
					
					if($noticias->have_posts()){
						$args = array(
							'post_type' => 'post',
							'cat' => -7,
							'posts_per_page' => 6
						);
						$geral = new WP_Query($args);
						
						echo '<div class="post-row">';
						$geral->the_post();		
						get_template_part( 'conteudo', get_post_format() );					
						$noticias->the_post();
						get_template_part( 'noticias', get_post_format() );	
						echo '</div>';
						
						echo '<div class="post-row">';
						$i = 2;
						
						while ($i < 6) : 
						$geral->the_post(); 						
						get_template_part( 'conteudo', get_post_format() );
						
						if($i % 2 != 0) { 
							echo '</div><div class="post-row">'; 
						} 
						
						$i++; 
						endwhile; 
						$geral->the_post(); 						
						get_template_part( 'conteudo-full', get_post_format() );
						echo '</div>';
					}
					else {
						$i = 1; 
						echo '<div class="post-row">';
						
						while ( $i < 5 ) : 
						the_post();
						get_template_part( 'conteudo', get_post_format() );
						
						if($i % 2 == 0) { 
							echo '</div><div class="post-row">'; 
						} 
						$i++;
						
						endwhile; 
						the_post();
						get_template_part( 'conteudo-full', get_post_format() );
						echo '</div>';
					}
?>
			<?php wp_related_posts()?>
			<?php //twentytwelve_content_nav( 'nav-below' ); ?>

		<?php else : ?>

			<article id="post-0" class="post no-results not-found">

			<?php if ( current_user_can( 'edit_posts' ) ) :
				// Show a different message to a logged-in user who can add posts.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'No posts to display', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php printf( __( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwelve' ), admin_url( 'post-new.php' ) ); ?></p>
				</div><!-- .entry-content -->

			<?php else :
				// Show the default message to everyone else.
			?>
				<header class="entry-header">
					<h1 class="entry-title"><?php _e( 'Nothing Found', 'twentytwelve' ); ?></h1>
				</header>

				<div class="entry-content">
					<p><?php _e( 'Apologies, but no results were found. Perhaps searching will help find a related post.', 'twentytwelve' ); ?></p>
					<?php get_search_form(); ?>
				</div><!-- .entry-content -->
			<?php endif; // end current_user_can() check ?>

			</article><!-- #post-0 -->

		<?php endif; // end have_posts() check ?>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>