<!DOCTYPE HTML>
<html>
	<head> <meta charset = utf-8>
		<title> Urban Farm</title>
		<link rel = "stylesheet" href = "style.css"/>
	</head>
	<header>
		<?php include("elem/elem_entete.php"); ?>
	</header>
	<body>
			<div id="corps">
				<div id ="nav">
					<form method="post" action="page_commande.php">
						<p>
							<label for="name">Nom d'utilisateur :</label>
							<br/>
							<input type="text" name="pseudo"/>
							<br/>
							<label for="name">Mot de passe :</label>
							<br/>
							<input type="text" name="mot de passe"/>
							<br/>
							<input type="submit" value="valider"/>
						</p>
					</form>
					<br/>
					<form action="page_inscription.php">
						<input type="submit" value="Nouvel Utilisateur">
					</form>
				</div>
				<div id = "contenu">
					<h2> A propos de nous</h2>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus vulputate urna risus, at efficitur magna interdum et. Sed urna mauris, molestie fringilla turpis ut, mollis finibus elit. Proin velit lectus, feugiat id enim et, commodo convallis eros. Donec eros orci, pellentesque in dui ut, gravida auctor lacus. Sed egestas nec enim nec ultricies. Nunc tempor tortor metus, id aliquet dolor facilisis id. In luctus venenatis pulvinar. Ut id nisl elit. Suspendisse tincidunt, nibh et sollicitudin venenatis, lectus est fermentum nisi, nec venenatis lorem eros eu ex. Mauris non nunc quis velit pharetra ornare at et velit. Curabitur at leo porta, tempus nunc at, blandit nulla.
						Nam vitae efficitur mi. Vivamus pretium augue ut varius ornare. Nunc ac feugiat ipsum. Pellentesque et neque purus. Sed sollicitudin maximus fringilla. Sed dignissim lacus nisi, ut tristique ligula pulvinar vitae. Nulla facilisi. Sed ut felis leo. Etiam vitae dui auctor, egestas urna quis, scelerisque ligula. Morbi maximus mollis est quis venenatis. Cras ac justo pretium, ornare mauris sit amet, gravida enim. Maecenas tincidunt elit quis risus pellentesque, non convallis tortor porttitor.
					</p>
				</div>
		</div>
	</body>
	<footer>
		<?php include("elem/elem_pied.php"); ?>
	</footer>
</html>