<?php
$updateDataSql = "SELECT * FROM users";
$updateDataRun = mysqli_query($conn, $updateDataSql);
$uiq = uniqid('', true);
$sha = sha1($uiq);
$md5 = md5($uiq);
$token = $sha.$md5.$sha.$md5;
 


$c = 1;
                        
while($rows = mysqli_fetch_assoc($updateDataRun)){
         echo '
			<tr>
                                <td>'.$c.'</td>
                                <td>'.$rows['lname'].'</td>
                                <td>'.$rows['fname'].'</td>
                                <td class="center">'.$rows['mname'].'</td>
                                <td class="center">'.$rows['users_barcode'].'</td>
                                <td>'.$rows['card'].'</td>
                                <td>'.$rows['cp_num'].'</td>
                                <td>'.$rows['department'].'</td>
                                <td>'.$rows['grade'].'</td>
                                <td  class="text-center">
                                    <a href="edit.php?id='.$rows['id'].'&lname='.$rows['lname'].'&fname='.$rows['fname'].'&mname='.$rows['mname'].'&barcode='.$rows['users_barcode'].'&cp_num='.$rows['cp_num'].'&card='.$rows['card'].'" class="btn btn-warning btn-xs" type="button"><i class="fa fa-pencil"></i></a>
                                    <a href="update.php?del_id='.$rows['id'].'" class="btn btn-danger btn-xs" type="button"><i class="fa fa-times"></i></a>
                                </td>
                        </tr>

                            ';
                            $c++;
                        }


?>