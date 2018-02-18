<?php

$url = $_SERVER['REQUEST_URI'];



if(isset($_GET['del_id'])){
	$del_id = $_REQUEST['del_id'];
	$delSql = "DELETE FROM users WHERE id = '$del_id' ";
	if(mysqli_query($conn, $delSql)){ ?>
		<script>
			window.location = "update.php?delete=success";
		</script>
	<?php }

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
                toastr.info(\'One record has been deleted!\', \'Success\');

            }, 1300);

            </script>
	';
}

if(strpos($url, 'edit=success')){
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
                toastr.info(\'One record has been edited!\', \'Success\');

            }, 1300);

            </script>
	';
}

?>