<?php
$error = isset($_GET['error']) ? $_GET['error'] : 0;
?>
<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Twitter clone</title>

		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<script>
			$(document).ready(function() {
				$('#btn_login').click(function(e) {
					const userField = $('#username-field')
					const passwordField = $('#password-field')
					let el

					userField.css('border-color', '')
					if (!userField.val()) {
						el = userField
						userField.css('border-color', '#a94442')
					}

					passwordField.css('border-color', '')
					if (!passwordField.val()) {
						el = passwordField
						passwordField.css('border-color', '#a94442')
					}

					if (el) {
						el.focus()
						return false
					}
				})
			})
		</script>
	</head>

	<body>

		<!-- Static navbar -->
	    <nav class="navbar navbar-default navbar-static-top">
	      <div class="container">
	        <div class="navbar-header">
	          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          </button>
	          <img src="imagens/icone_twitter.png" />
	        </div>

	        <div id="navbar" class="navbar-collapse collapse">
	          <ul class="nav navbar-nav navbar-right">
	            <li><a href="signup.php">Inscrever-se</a></li>
							<li id="dropdown" class="<?= $error ? 'open' : '' ?>">
	            	<a id="entrar" data-target="#" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Entrar</a>
					<ul class="dropdown-menu" aria-labelledby="entrar">
						<div class="col-md-12">
				    		<p>Você possui uma conta?</h3>
				    		<br />
							<form method="post" action="access.php" id="formLogin">
								<div class="form-group">
									<input
										type="text"
										class="form-control"
										id="username-field"
										name="user"
										placeholder="Usuário"
										aria-required="required"
								/>
								</div>

								<div class="form-group">
									<input
										type="password"
										class="form-control red"
										id="password-field"
										name="password"
										placeholder="Senha"
										aria-required="required"
									/>
								</div>

								<button type="submit" class="btn btn-primary" id="btn_login">Entrar</button>

								<br /><br />

							</form>
							<?php
								if ($error) {
									echo '<font color="#a94442">Invalid username or password</font>';
								}
							?>
						</form>
				  	</ul>
	            </li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">

	      <!-- Main component for a primary marketing message or call to action -->
	      <div class="jumbotron">
	        <h1>Bem vindo ao twitter clone</h1>
	        <p>Veja o que está acontecendo agora...</p>
	      </div>

	      <div class="clearfix"></div>
		</div>


	    </div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
</html>
