<?php
	session_start();
	include ('header.php');

?>
<main class = "flex">
		<div class ="row">
			<div class = "col">
				Отзывы:
			</div>
		</div>
		<div class = "container-fluid">
<?php
				include ('dbconnect.php');
				$label = 'ID';
				$id = false;
				if (!empty($_GET[$label]))
				{
					$id = $_GET[$label];
				}
				$result = $mysqli->query("SELECT * FROM remarks WHERE ID = '$id'");
				$myrow = $result->fetch_assoc();	
				$div = '<div class = "row">';
				$div .='<div class = "col">
					<div class = "Psiholog">';
				$id = $myrow['ID'];
				$div .='<p>'.$myrow['name'].'</p>';	
				$div .='<p>'.$myrow['mark'].'</p>';	
				$div .='</div></div>';	
				$div .='</div>';

				echo $div;
			?>