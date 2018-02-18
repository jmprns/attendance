<?php  

                    $facultyUrl = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
                    $c = 1;

                    if(strpos($facultyUrl, 'faculty_jhs.php') !== false){

                        include 'inc/db.php';

                        

                        $facultySql = "SELECT * FROM faculty_students WHERE faculty = 'JHS' ";
                        $facultyRun = mysqli_query($conn, $facultySql);
                        
                        while($rows = mysqli_fetch_assoc($facultyRun)){
                            echo '

                            <tr>
                                <td>'.$c.'</td>
                                <td>'.$rows['last_name'].'</td>
                                <td>'.$rows['first_name'].'</td>
                                <td class="center">'.$rows['middle_name'].'</td>
                                <td class="center">'.$rows['barcode'].'</td>
                                <td>'.$rows['id_card'].'</td>
                                <td>'.$rows['cp_number'].'</td>
                                <td>'.$rows['faculty'].'</td>
                                <td>'.$rows['grade_year'].'</td>
                                <td  class="text-center">
                                    <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#myModalEdit"><i class="fa fa-pencil"></i></button>
                                    <a href="faculty_jhs.php?del_id='.$rows['id'].'" class="btn btn-danger btn-xs" type="button" ><i class="fa fa-times"></i></a>
                                </td>
                        </tr>

                            ';
                            $c++;
                        }

                    }elseif(strpos($facultyUrl, 'faculty_shs.php') !== false){

                        include 'inc/db.php';

                        $facultySql = "SELECT * FROM faculty_students WHERE faculty = 'ABM' OR faculty = 'GAS' OR faculty = 'HUMMS' OR faculty = 'STEM'";
                        $facultyRun = mysqli_query($conn, $facultySql);
                        while($rows = mysqli_fetch_assoc($facultyRun)){
                            echo '

                            <tr>
                                <td>'.$c.'</td>
                                <td>'.$rows['last_name'].'</td>
                                <td>'.$rows['first_name'].'</td>
                                <td class="center">'.$rows['middle_name'].'</td>
                                <td class="center">'.$rows['barcode'].'</td>
                                <td>'.$rows['id_card'].'</td>
                                <td>'.$rows['cp_number'].'</td>
                                <td>'.$rows['faculty'].'</td>
                                <td>'.$rows['grade_year'].'</td>
                                <td  class="text-center">
                                    <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#myModalEdit"><i class="fa fa-pencil"></i></button>
                                    <a href="faculty_shs.php?del_id='.$rows['id'].'" class="btn btn-danger btn-xs" type="button" ><i class="fa fa-times"></i></a>
                                </td>
                        </tr>

                            ';
                            $c++;
                        }

                    

                    }elseif(strpos($facultyUrl, 'faculty_bsa.php') !== false){

                        include 'inc/db.php';

                        $facultySql = "SELECT * FROM faculty_students WHERE faculty = 'BSA' ";
                        $facultyRun = mysqli_query($conn, $facultySql);
                        while($rows = mysqli_fetch_assoc($facultyRun)){
                            echo '

                            <tr>
                                <td>'.$c.'</td>
                                <td>'.$rows['last_name'].'</td>
                                <td>'.$rows['first_name'].'</td>
                                <td class="center">'.$rows['middle_name'].'</td>
                                <td class="center">'.$rows['barcode'].'</td>
                                <td>'.$rows['id_card'].'</td>
                                <td>'.$rows['cp_number'].'</td>
                                <td>'.$rows['faculty'].'</td>
                                <td>'.$rows['grade_year'].'</td>
                                <td  class="text-center">
                                    <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#myModalEdit"><i class="fa fa-pencil"></i></button>
                                    <a href="faculty_bsa.php?del_id='.$rows['id'].'" class="btn btn-danger btn-xs" type="button" ><i class="fa fa-times"></i></a>
                                </td>
                        </tr>

                            ';
                            $c++;
                        }

                    

                    }elseif(strpos($facultyUrl, 'faculty_bsba.php') !== false){

                        include 'inc/db.php';

                        $facultySql = "SELECT * FROM faculty_students WHERE faculty = 'BSBA' ";
                        $facultyRun = mysqli_query($conn, $facultySql);
                        while($rows = mysqli_fetch_assoc($facultyRun)){
                            echo '

                            <tr>
                                <td>'.$c.'</td>
                                <td>'.$rows['last_name'].'</td>
                                <td>'.$rows['first_name'].'</td>
                                <td class="center">'.$rows['middle_name'].'</td>
                                <td class="center">'.$rows['barcode'].'</td>
                                <td>'.$rows['id_card'].'</td>
                                <td>'.$rows['cp_number'].'</td>
                                <td>'.$rows['faculty'].'</td>
                                <td>'.$rows['grade_year'].'</td>
                                <td  class="text-center">
                                    <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#myModalEdit"><i class="fa fa-pencil"></i></button>
                                    <a href="faculty_bsba.php?del_id='.$rows['id'].'" class="btn btn-danger btn-xs" type="button" ><i class="fa fa-times"></i></a>
                                </td>
                        </tr>

                            ';
                            $c++;
                        }

                    

                    }elseif(strpos($facultyUrl, 'faculty_bscs.php') !== false){

                        include 'inc/db.php';

                        $facultySql = "SELECT * FROM faculty_students WHERE faculty = 'BSCS' ";
                        $facultyRun = mysqli_query($conn, $facultySql);
                        while($rows = mysqli_fetch_assoc($facultyRun)){
                            echo '

                            <tr>
                                <td>'.$c.'</td>
                                <td>'.$rows['last_name'].'</td>
                                <td>'.$rows['first_name'].'</td>
                                <td class="center">'.$rows['middle_name'].'</td>
                                <td class="center">'.$rows['barcode'].'</td>
                                <td>'.$rows['id_card'].'</td>
                                <td>'.$rows['cp_number'].'</td>
                                <td>'.$rows['faculty'].'</td>
                                <td>'.$rows['grade_year'].'</td>
                                <td  class="text-center">
                                    <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#myModalEdit"><i class="fa fa-pencil"></i></button>
                                    <a href="faculty_bscs.php?del_id='.$rows['id'].'" class="btn btn-danger btn-xs" type="button" ><i class="fa fa-times"></i></a>
                                </td>
                        </tr>

                            ';
                            $c++;
                        }

                    

                    }elseif(strpos($facultyUrl, 'faculty_ccje.php') !== false){

                        include 'inc/db.php';

                        $facultySql = "SELECT * FROM faculty_students WHERE faculty = 'CCJE' ";
                        $facultyRun = mysqli_query($conn, $facultySql);
                        while($rows = mysqli_fetch_assoc($facultyRun)){
                            echo '

                            <tr>
                                <td>'.$c.'</td>
                                <td>'.$rows['last_name'].'</td>
                                <td>'.$rows['first_name'].'</td>
                                <td class="center">'.$rows['middle_name'].'</td>
                                <td class="center">'.$rows['barcode'].'</td>
                                <td>'.$rows['id_card'].'</td>
                                <td>'.$rows['cp_number'].'</td>
                                <td>'.$rows['faculty'].'</td>
                                <td>'.$rows['grade_year'].'</td>
                                <td  class="text-center">
                                    <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#myModalEdit"><i class="fa fa-pencil"></i></button>
                                    <a href="faculty_ccje.php?del_id='.$rows['id'].'" class="btn btn-danger btn-xs" type="button" ><i class="fa fa-times"></i></a>
                                </td>
                        </tr>

                            ';
                            $c++;
                        }

                    

                    }elseif(strpos($facultyUrl, 'faculty_beed.php') !== false){

                        include 'inc/db.php';

                        $facultySql = "SELECT * FROM faculty_students WHERE faculty = 'BEED' ";
                        $facultyRun = mysqli_query($conn, $facultySql);
                        while($rows = mysqli_fetch_assoc($facultyRun)){
                            echo '

                            <tr>
                                <td>'.$c.'</td>
                                <td>'.$rows['last_name'].'</td>
                                <td>'.$rows['first_name'].'</td>
                                <td class="center">'.$rows['middle_name'].'</td>
                                <td class="center">'.$rows['barcode'].'</td>
                                <td>'.$rows['id_card'].'</td>
                                <td>'.$rows['cp_number'].'</td>
                                <td>'.$rows['faculty'].'</td>
                                <td>'.$rows['grade_year'].'</td>
                                <td  class="text-center">
                                    <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#myModalEdit"><i class="fa fa-pencil"></i></button>
                                    <a href="faculty_beed.php?del_id='.$rows['id'].'" class="btn btn-danger btn-xs" type="button" ><i class="fa fa-times"></i></a>
                                </td>
                        </tr>

                            ';
                            $c++;
                        }

                    

                    }elseif(strpos($facultyUrl, 'faculty_all.php') !== false){

                        include 'inc/db.php';

                        $facultySql = "SELECT * FROM faculty_students ";
                        $facultyRun = mysqli_query($conn, $facultySql);
                        while($rows = mysqli_fetch_assoc($facultyRun)){
                            echo '

                            <tr>
                                <td>'.$c.'</td>
                                <td>'.$rows['last_name'].'</td>
                                <td>'.$rows['first_name'].'</td>
                                <td class="center">'.$rows['middle_name'].'</td>
                                <td class="center">'.$rows['barcode'].'</td>
                                <td>'.$rows['id_card'].'</td>
                                <td>'.$rows['cp_number'].'</td>
                                <td>'.$rows['faculty'].'</td>
                                <td>'.$rows['grade_year'].'</td>
                                <td  class="text-center">
                                    <button class="btn btn-warning btn-xs" type="button" data-toggle="modal" data-target="#myModalEdit"><i class="fa fa-pencil"></i></button>
                                    <a href="faculty_all.php?del_id='.$rows['id'].'" class="btn btn-danger btn-xs" type="button" ><i class="fa fa-times"></i></a>
                                </td>
                        </tr>

                            ';
                            $c++;
                        }

                    

                    }


if(isset($_REQUEST['del_id'])){

    $del_sql = "DELETE FROM faculty_students WHERE id = '$_REQUEST[del_id]' ";
    $del_run = mysqli_query($conn, $del_sql);
    
    if(strpos($facultyUrl, 'faculty_all')){
        echo "
        <script>
            swal({
                  title: 'Deleted!',
                  text: 'One row has been deleted!.',
                  timer: 2000
                })
               setTimeout(function(){
                window.location.href = 'faculty_all.php';
              }, 2000);
        </script>
        ";


    }elseif(strpos($facultyUrl, 'faculty_jhs')){
        echo "
        <script>
            swal({
                  title: 'Deleted!',
                  text: 'One row has been deleted!.',
                  timer: 1500
                })
               setTimeout(function(){
                window.location.href = 'faculty_jhs.php';
              }, 1500);
        </script>
        ";


    }elseif(strpos($facultyUrl, 'faculty_shs')){
        echo "
        <script>
            swal({
                  title: 'Deleted!',
                  text: 'One row has been deleted!.',
                  timer: 1500
                })
               setTimeout(function(){
                window.location.href = 'faculty_shs.php';
              }, 1500);
        </script>
        ";


    }elseif(strpos($facultyUrl, 'faculty_bsba')){
        echo "
        <script>
            swal({
                  title: 'Deleted!',
                  text: 'One row has been deleted!.',
                  timer: 1500
                })
               setTimeout(function(){
                window.location.href = 'faculty_bsba.php';
              }, 1500);
        </script>
        ";


    }elseif(strpos($facultyUrl, 'faculty_bsa')){
        echo "
        <script>
            swal({
                  title: 'Deleted!',
                  text: 'One row has been deleted!.',
                  timer: 1500
                })
               setTimeout(function(){
                window.location.href = 'faculty_bsa.php';
              }, 1500);
        </script>
        ";


    }elseif(strpos($facultyUrl, 'faculty_beed')){
        echo "
        <script>
            swal({
                  title: 'Deleted!',
                  text: 'One row has been deleted!.',
                  timer: 1500
                })
               setTimeout(function(){
                window.location.href = 'faculty_beed.php';
              }, 1500);
        </script>
        ";


    }elseif(strpos($facultyUrl, 'faculty_bscs')){
        echo "
        <script>
            swal({
                  title: 'Deleted!',
                  text: 'One row has been deleted!.',
                  timer: 1500
                })
               setTimeout(function(){
                window.location.href = 'faculty_bscs.php';
              }, 1500);
        </script>
        ";


    }elseif(strpos($facultyUrl, 'faculty_ccje')){
        echo "
        <script>
            swal({
                  title: 'Deleted!',
                  text: 'One row has been deleted!.',
                  timer: 1500
                })
               setTimeout(function(){
                window.location.href = 'faculty_ccje.php';
              }, 1500);
        </script>
        ";


    }




}

?>