<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="css/bootstrap.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
</head>

<body class="tijelo" background="images/pozadina2.jpg">


<header class="logo">

<img  src="images/logo.png" >

</header>

<div class="glavni"> <!-- sadrzi sve ostalo -->
	<div class=navigacija><!--div za navigaciju -->
		<ul>
			<li><a href="jelovnik.php">Jelovnik</a></li>
			<li><a href="kartapica.php">Karta pića</a></li>
		
			<li><a href="kontakt.php">Kontakt</a></li>
			<li><a href="index.php">O nama</a></li>
		</ul>
	</div>
		<div class="sadrzaj">
		
		
		<?php 
		$mysqli = new mysqli("localhost", "root", "root", "dwaseminar1");
				if ($mysqli->connect_errno) {
					echo $mysqli->connect_error;
				}
					$query= "SELECT * from kontakt";
					$result=  $mysqli->query($query);
					
					while($row= $result->fetch_assoc() ){
						
						echo '<div class="naslov">';
						echo '<h3> Kontakt </h3>';
						echo '</div></br>';
						
						echo '<div class="tekst">';
						echo '<p>' . $row['Kontakt'] . '</p>';
						echo '</div></br></br>';
						
						}
					
		?>
		</div>
		
		
		</div>
		
		
		
	
		</div>
	
</div>

<footer>

</footer>
</div>
</body>
</html>
































</html>