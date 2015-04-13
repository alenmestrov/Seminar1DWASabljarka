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
			<li><a href="#">Vinska Karta</a></li>
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
				
				if($_GET[nav] == "0"){
					$query= "SELECT * from jela where idvrstajela=0;";
					$result=  $mysqli->query($query);
				}
				if($_GET[nav]== "2"){
					$query= "SELECT * from jela where idvrstajela=2;";
					$result=  $mysqli->query($query);
				}
				if($_GET[nav] == "3"){
					$query= "SELECT * from jela where idvrstajela=3;";
					$result=  $mysqli->query($query);
				}
				if($_GET[nav] == "4"){
					$query= "SELECT * from jela where idvrstajela=4;";
					$result=  $mysqli->query($query);
				}
				if($_GET[nav] == "1"){
					$query= "SELECT * from jela where idvrstajela=1;";
					$result=  $mysqli->query($query);
				}
						$i=0;
						echo '<a href="jelovnik.php">Jelovnik</a>';
						
						
						echo '<div >';
						echo '<h2 align="center">Izbor jela:</h2><hr>';
						
					
					while($row= $result->fetch_assoc() ){
						
						
						
						echo '<div class="nbox1">';
						echo '<h2>' . $row[imejela] . '<h3>' . $row[cijena] . '</h3></h2>';
						echo '<div class="vise"> <a href="infojelo.php?nav=' . $_GET[nav] . '&id=' . $i . '">Opsirnije</a></div>';
						echo '</div>';
						$i=$i+1;
					
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