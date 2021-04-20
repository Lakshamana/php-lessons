<?php
session_start();
if (!isset($_SESSION['username'])) {
	header('Location: index.php?error=1');
}
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
        $('#btn-tweet').click(function(e) {
					e.preventDefault()
          const content = $('#text-tweet').val()
          if (content) {
            $.ajax({
              url: 'services/create_tweet.php',
              method: 'POST',
							data: $('#tweet-form').serialize(),
              success: function(data) {
								$('#text-tweet').val('')
								alert(data)
              }
            })
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
	            <li><a href="logout.php">Sair</a></li>
	          </ul>
	        </div><!--/.nav-collapse -->
	      </div>
	    </nav>


	    <div class="container">
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<h4 style="padding:0.5em"><?= $_SESSION['username'] ?></h4>
							<hr>
							<div class="col-md-6">
								TWEETS <br> 1
							</div>
							<div class="col-md-6">
								FOLLOWERS <br> 1
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="panel panel-default">
						<div class="panel-body">
							<form id="tweet-form" class="input-group">
								<input
									id="text-tweet"
									name="content"
									class="form-control"
									type="text"
									placeholder="What's happening now?"
									maxlength="140"
								>
								<span class="input-group-btn">
									<button id="btn-tweet" class="btn btn-default" type="submit">Tweet</button>
								</span>
							</form>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="panel panel-default">
						<div class="panel-body">
							<h4><a href="#">Search for people...</a></h4>
						</div>
					</div>
				</div>
		</div>


	    </div>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

	</body>
</html>

