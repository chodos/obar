<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
</div><!-- #page -->
<div class="barra-rodape">
	<footer id="colophon" role="contentinfo">
		<div style="width:100%;margin-bottom:8px">
			<div style="width:20%;display:inline-block"><img src="<?php echo get_template_directory_uri(); ?>/imagens/mini-logo.png" alt="Logotipo O Bar Virtual"/></div>
			<div style="width:59%;display:inline-block;vertical-align:top">
				<nav id="site-navigation" class="footer-navigation" role="navigation">
					<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>	
				</nav>
			</div>
			<div style="width:20%;display:inline-block;vertical-align:top">
				<div class="social-media">
					<a href="http://www.facebook.com/OBarVirtual" class="facebook btn" title="Curta O Bar Virtual" target="_blank"> Facebook</a>
					<a href="http://www.twitter.com/obarvirtual" class="twitter btn" title="O Bar Virtual no Twitter" target="_blank"> Twitter</a>
					<a href="http://instagram.com/obarvirtual" class="instagram btn" title="O Bar Virtual no Instagram" target="_blank"> instagram</a>
					<a href="" class="google btn" title="O Bar Virtual no Google Plus" target="_blank"> Google Plus</a>
				</div>
			</div>
		</div>
		<div style="width:49%;display:inline-block">
			&copy;2014. Todos os direitos reservados.
		</div><!-- .site-info -->
		<div style="width:49%;display:inline-block;text-align:right">
			Portal mantido por <a href="http://www.xplanet.com.br" target="_blank">XPLANET</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div>

<?php wp_footer(); ?>

<!-- Facebook Comments -->
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/pt_BR/all.js#xfbml=1&appId=403239433144790";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- Facebook Comments -->

</body>
</html>