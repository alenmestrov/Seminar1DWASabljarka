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
			<li><a href="#">Karta pića</a></li>
			
			<li><a href="#">Kontakt</a></li>
			<li><a href="index.php">O nama</a></li>
		</ul>
	</div>
		<div class="sadrzaj" >
		
		
		<?php 
		
		$mysqli = new mysqli("localhost", "root", "root", "dwaseminar1");
				if ($mysqli->connect_errno) {
					echo $mysqli->connect_error;
				}
					$k=$_GET[id];
				if($_GET[nav] == "0"){
					$query= "SELECT * from jela WHERE idvrstajela= 0 AND idvise=" . $_GET[id] . ";";
					$result=  $mysqli->query($query);
				}
				if($_GET[nav]== "2"){
					$query= "SELECT * from jela WHERE idvrstajela= 2 AND idvise=" . $_GET[id] . ";";
					$result=  $mysqli->query($query);
				}
				if($_GET[nav] == "3"){
					$query= "SELECT * from jela WHERE idvrstajela= 3 AND idvise=" . $_GET[id]  . ";";
					$result=  $mysqli->query($query);
				}
				if($_GET[nav] == "4"){
					$query= "SELECT * from jela WHERE idvrstajela= 4 AND idvise=" . $_GET[id] . ";";
					$result=  $mysqli->query($query);
				}
				if($_GET[nav] == "1"){
					$query= "SELECT * from jela WHERE idvrstajela= 1 AND idvise=" . $_GET[id] . ";";
					$result=  $mysqli->query($query);
				}
						echo '<a href="jelovnik.php">Jelovnik</a>';
						echo ' <b> - </b> ';
						echo '<a href="dodatnestranice.php?nav=' . $_GET[nav] . '">Izbor Jela</a>';
				

							$row= $result->fetch_assoc();
						
						echo '<div >';
						echo '<h2 align="center">' . $row[imejela] . ':</h2><hr>';
						
					
				
						
						
						echo '<div class="nbox1">';
						echo '<div class="slika">';
						echo '<img src="' . $row[slika] . '" ></div>';
						echo '<h2>' . $row[imejela] . '<h3>' . $row[cijena] . '</h3></h2>';
						echo '<h3>' . $row[ojelu] . '</h3>';
						
						echo '<div class="vise"> <a href="dodatnestranice.php?nav=' . $_GET[nav] . '">Natrag</a></div>';
						echo '</div>';
						
					
						
						
				
					
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