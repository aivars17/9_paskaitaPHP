<?php
	
function getVolume($x,$y,$z = 6.421111) {
	$price = $x * $y * $z;
	return round($price, 4);
}
function getPlotas($x,$y,$z) {
	$plots = 2 * $x * $z + 2 * $y * $z + $x * $y;
	return $plots;
}
function getTiles($x,$y = 0.25) {
	$plyt = $x / $y ;
	return ceil($plyt);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="container">
		<div class="row">
			<h1>9 Paskaita PHP</h1>
		</div>
	</div>
	<div class="container">
		<div class="row">
			<div class="col">
				<?php
					echo "Tūris " . getVolume(2,4) . " m3 <br>";
					echo "Vidinis plotas " . getPlotas(2,4,5) . " m2 <br>";
					echo "Vidinis plotas " . getTiles(68) . " vnt <br>";
					$i = 0;
					while ($i < 900) { 
						echo "<div class='tile' id='$i'>$i</div>";
						$i++;
					}
					function go($i) {
						if ($i > 1) {
							$i++;
						}	else {
							$i = 4;
						}	
						document.getElementById($i).style.backgroundColor = "red";
					}
				?>
			</div>
			<div class="col-2">
				<button onclick="go('1')" class="btn btn-danger">Go</button>
			</div>
		</div>
	</div>
</body>
</html>