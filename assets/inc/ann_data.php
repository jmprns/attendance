<?php

	include 'db.php';
function annData() {
	include 'db.php';

	$annSql = "SELECT * FROM announcements";
	$annQuery = mysqli_query($conn, $annSql);

	$annId = 1;

	while($annRow = mysqli_fetch_assoc($annQuery)){

		if($annRow['status'] == 0){
			$status = '<span class="label label-danger">Unpublished</span>';
		}else{
			$status = '<span class="label label-success">Published</span>';
		}


		echo '
			<tr>
				<td>'.$annId.'</td>
				<td>'.$annRow['content'].'</td>
				<td>'.$annRow['author'].'</td>
				<td class="text-center">'.$status.'</td>
				<td class="text-center"><a href="announcements.php?del_id='.$annRow['id'].'" class="btn btn-danger btn-xs" type="button"><i class="fa fa-trash"></i></a></td>
			</tr>
		';
			$annId++;
	}


}





if(isset($_POST['btnAnn']) ){
	$annContent = $_POST['announcementData'];


	$author = $_SESSION['admin'];
	$authorSql = "SELECT fname, lname FROM admin WHERE id = '$author' ";
	$authorQuery = $conn->query($authorSql);
	$authorRow = mysqli_fetch_assoc($authorQuery);
	$authorName = $authorRow['fname']." ".$authorRow['lname'];

	$timestamp = time();


	$addAnn = "INSERT INTO `announcements` (`id`, `content`, `author`, `status`, `timestamp`)
				VALUES ('', '$annContent','$authorName', '1', '$timestamp') ";
	$annQuery2 = $conn->query($addAnn);

	if(!$annQuery2){
		header('Location:?error=add');
	}else{
		header('Location:?add=success');
	}
 
}

$url = $_SERVER['REQUEST_URI'];

if(strpos($url, 'del_id')){
	$delid = $_REQUEST['del_id'];

	$delSql = "DELETE FROM announcements WHERE id = '$delid' ";

	if(mysqli_query($conn, $delSql)){
		echo '
		<script>
			window.location = "announcements.php?delete=success";
		</script>
		';
	}else{
		echo '
		<script>
			window.location = "announcements.php?delete=error";
		</script>
		';
	}
}

if(strpos($url, 'delete=success')){
	echo '
	<script>
	setTimeout(function() {
                toastr.options = {
                    "closeButton": true,
  					"debug": false,
					"progressBar": true,
					"preventDuplicates": false,
					"positionClass": "toast-top-right",
					"onclick": null,
					"showDuration": "400",
					"hideDuration": "1000",
					"timeOut": "2000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
                };
                toastr.info(\'One announcement has been deleted!\', \'Success\');

            }, 1300);

            </script>
	';
}

if(strpos($url, 'add=success')){
	echo '
	<script>
	setTimeout(function() {
                toastr.options = {
                    "closeButton": true,
  					"debug": false,
					"progressBar": true,
					"preventDuplicates": false,
					"positionClass": "toast-top-right",
					"onclick": null,
					"showDuration": "400",
					"hideDuration": "1000",
					"timeOut": "2000",
					"extendedTimeOut": "1000",
					"showEasing": "swing",
					"hideEasing": "linear",
					"showMethod": "fadeIn",
					"hideMethod": "fadeOut"
                };
                toastr.success(\'One announcement has been published!\', \'Success\');

            }, 1300);

            </script>
	';
}

?>