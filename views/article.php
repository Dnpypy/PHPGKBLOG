<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf8">
		<title>Мой первый блог</title>
		<link rel="stylesheet" href="style.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" 
	</head>
	<body>
		<div class="container">
			<h1>Мой первый блог!</h1>
			<div>
			     <div class="article">
				 <h3> <?=$article['title']?></h3>
				 <em>Опубликовано <?=$article['date']?></em>	 
					 <p><?=$article['content']?></p>
				
				</div>
			</div>
			<footer>
			<p>Мой первый блог<br>Copyright &copy; 2015</p>
			</footer>
		</div>
	
	</body>

</html>