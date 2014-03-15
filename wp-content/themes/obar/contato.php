<?php
/*
Template Name: Página de Contato
*/

if ($_POST['envia_mail']) {

		$nome = $_POST['campo_nome'];
		$email = $_POST['campo_email'];
		$mensagem = $_POST['campo_mensagem'];
		
		$destinatario = "rodrigo.magno@xplanet.com.br";
		$assunto = "Contato via SITE";
		
		$corpo = '
		<html>
			<head>
				<title>Novo Contato via Site</title>
			</head>
			<body>
				<b>Correio Eletrônico.</b> Você recebeu uma nova mensagem de um visitante.<br />
				<h2>'. $nome .'</h2>
				<br />
				<h3>Mensagem: '. $mensagem .'</h3>
				<br />
				<p>
				E-mail: '. $email .'
				</p>
			</body>
		</html>
		'; 
	
		//para o envio em formato HTML
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-type: text/html;
		charset=utf-8\r\n";
		
		//endereço do remetente
		$headers .= "From: O Bar Virtual<contato@obarvirtual.com.br>\r\n";
	
		//endereços que receberão uma copia 
		//$headers .= "Cc: caio.hodos@yahoo.com.br\r\n"; 
	
	
		$result = mail($destinatario,$assunto,$corpo,$headers);
		
		$erro = '<p><b>Falha no envio de e-mail, por favor tente novamente.</b></p>';
		
		$sucesso = '<p><b>E-mail enviado com sucesso.</b></p>';		
}

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			

			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'content', 'page' ); ?>
			<?php endwhile; // end of the loop. ?>
			
			<div class="box" style="margin-top:-20px">
			<?php
			if(!$result)
				echo $erro;
			else
				echo $sucesso;
			?>
			<form id="formContato" class="form-contato" name="formContato" method="post" action="#contato">
				<p><label>Nome</label><input type="text" name="campo_nome" required></p>
				<p><label>E-mail</label><input type="email" name="campo_email" required></p>
				<p><label>Mensagem</label><textarea name="campo_mensagem" rows="4" required></textarea></p>
				<p><input type="submit" class="send-button" name="envia_mail" value="Enviar" /></p>
			</form>
			</div>

		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>