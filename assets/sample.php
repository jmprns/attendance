<?php



function myData(){

	$conn = mysqli_connect("localhost", "root", "", "wup_gate");
	$sql = "SELECT * FROM users";
	$query = $conn->query($sql);

	while($sqlRow = mysqli_fetch_assoc($query)){

		$idRow = $sqlRow['id'];
		$NameRow = $sqlRow['fname'];

		echo "

		<tr>
			<td>".$idRow."</td>
			<td>".$NameRow."</td>
		</tr>

		";


	}




}

?>

<!DOCTYPE html>
<html>
 <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/plugins/sweetalert/sweetalert.css">
	<link href="css/plugins/dataTables/datatables.min.css" rel="stylesheet">
    <body>

       <table id="example" class="display" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
            </tr>
        </thead>
        
        <tbody>
        	<?php myData(); ?>
        </tbody>
    </table>
     <script src="js/jquery-2.1.1.js"></script>
      <script src="js/bootstrap.min.js"></script>
    	<script src="js/plugins/dataTables/datatables.min.js"></script>
        <script>
        	$(document).ready(function() {
   	 $('#example').DataTable();
		} );
        </script>
    </body>
</html>