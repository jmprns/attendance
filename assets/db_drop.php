<?php
	if(isset($_POST['btnDrop'])){
		$sq = new mysqli("localhost", "root", "", "wup_gate");
		$sql = "DROP DATABASE wup_gate";
		$mysqli = $sq->query($sql);
		header("Location:index.php");

	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="POST"><button name="btnDrop">DROP</button></form>

</body>
</html>