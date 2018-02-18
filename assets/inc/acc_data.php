<?php
 

function defaultDay(){
    $url = $_SERVER['REQUEST_URI'];
    if(strpos($url, 'today')){
        echo "<option value=\"acc_log.php?day=today\" selected>Today</option>
                                    <option value=\"acc_log.php?day=3days\">Last 3 days</option>
                                    <option value=\"acc_log.php?day=5days\">Last 5 days</option>
                                    <option value=\"acc_log.php?day=7days\">Last 7 days</option>
                                    <option value=\"acc_log.php?day=15days\">Last 15 days</option>
                                    <option value=\"acc_log.php?day=30days\">Last 30 days</option>
                                    <option value=\"acc_log.php?day=180days\">Last 180 days</option>";
    }elseif(strpos($url, '3days')){
        echo "<option value=\"acc_log.php?day=today\">Today</option>
                                    <option value=\"acc_log.php?day=3days\" selected>Last 3 days</option>
                                    <option value=\"acc_log.php?day=5days\">Last 5 days</option>
                                    <option value=\"acc_log.php?day=7days\">Last 7 days</option>
                                    <option value=\"acc_log.php?day=15days\">Last 15 days</option>
                                    <option value=\"acc_log.php?day=30days\">Last 30 days</option>
                                    <option value=\"acc_log.php?day=180days\">Last 180 days</option>";
    }elseif(strpos($url, 'day=5days')){
        echo "<option value=\"acc_log.php?day=today\">Today</option>
                                    <option value=\"acc_log.php?day=3days\">Last 3 days</option>
                                    <option value=\"acc_log.php?day=5days\" selected>Last 5 days</option>
                                    <option value=\"acc_log.php?day=7days\">Last 7 days</option>
                                    <option value=\"acc_log.php?day=15days\">Last 15 days</option>
                                    <option value=\"acc_log.php?day=30days\">Last 30 days</option>
                                    <option value=\"acc_log.php?day=180days\">Last 180 days</option>";
    }elseif(strpos($url, '7days')){
        echo "<option value=\"acc_log.php?day=today\">Today</option>
                                    <option value=\"acc_log.php?day=3days\">Last 3 days</option>
                                    <option value=\"acc_log.php?day=5days\">Last 5 days</option>
                                    <option value=\"acc_log.php?day=7days\" selected>Last 7 days</option>
                                    <option value=\"acc_log.php?day=15days\">Last 15 days</option>
                                    <option value=\"acc_log.php?day=30days\">Last 30 days</option>
                                    <option value=\"acc_log.php?day=180days\">Last 180 days</option>";
    }elseif(strpos($url, '15days')){
        echo "<option value=\"acc_log.php?day=today\">Today</option>
                                    <option value=\"acc_log.php?day=3days\">Last 3 days</option>
                                    <option value=\"acc_log.php?day=5days\">Last 5 days</option>
                                    <option value=\"acc_log.php?day=7days\">Last 7 days</option>
                                    <option value=\"acc_log.php?day=15days\" selected>Last 15 days</option>
                                    <option value=\"acc_log.php?day=30days\">Last 30 days</option>
                                    <option value=\"acc_log.php?day=180days\">Last 180 days</option>";
    }elseif(strpos($url, '30days')){
        echo "<option value=\"acc_log.php?day=today\">Today</option>
                                    <option value=\"acc_log.php?day=3days\">Last 3 days</option>
                                    <option value=\"acc_log.php?day=5days\">Last 5 days</option>
                                    <option value=\"acc_log.php?day=7days\">Last 7 days</option>
                                    <option value=\"acc_log.php?day=15days\">Last 15 days</option>
                                    <option value=\"acc_log.php?day=30days\" selected>Last 30 days</option>
                                    <option value=\"acc_log.php?day=180days\">Last 180 days</option>";
    }elseif(strpos($url, '180days')){
        echo "<option value=\"acc_log.php?day=today\">Today</option>
                                    <option value=\"acc_log.php?day=3days\">Last 3 days</option>
                                    <option value=\"acc_log.php?day=5days\">Last 5 days</option>
                                    <option value=\"acc_log.php?day=7days\">Last 7 days</option>
                                    <option value=\"acc_log.php?day=15days\">Last 15 days</option>
                                    <option value=\"acc_log.php?day=30days\">Last 30 days</option>
                                    <option value=\"acc_log.php?day=180days\" selected>Last 180 days</option>";
    }

}

function asOf(){
    $url = $_SERVER['REQUEST_URI'];
    if(strpos($url, 'acc_log.php?day=today')){
        echo " today.";
    }elseif(strpos($url, 'acc_log.php?day=3days')){
        echo " 3 days.";
    }elseif(strpos($url, 'acc_log.php?day=5days')){
        echo " 5 days.";
    }elseif(strpos($url, 'acc_log.php?day=7days')){
        echo " 7 days.";
    }elseif(strpos($url, 'acc_log.php?day=15days')){
        echo " 15 days.";
    }elseif(strpos($url, 'acc_log.php?day=30days')){
        echo " 30 days.";
    }elseif(strpos($url, 'acc_log.php?day=180days')){
        echo " 180 days.";
    }else{
        echo "
        <script>
        window.location.href = 'acc_log.php?day=today';
        </script>
        ";
    }
}



function accData(){

    include 'db.php';

    if(isset($_REQUEST['day'])){

        $url = $_SERVER['REQUEST_URI'];

        if(strpos($url, 'day=today')){

            $timestamp = time();
            $dateNow = date("m-d-y", $timestamp);
            $firstSql = "SELECT * FROM acc_log WHERE date = '$dateNow' ";
            $firstQuery = mysqli_query($conn, $firstSql);

            while($firstRow = mysqli_fetch_assoc($firstQuery)){
                echo '
                    <tr>
                        <td>'.$firstRow['time']."  ".$firstRow['date'].'</td>
                        <td>'.$firstRow['lname'].'</td>
                        <td>'.$firstRow['fname'].'</td>
                        <td class="center">'.$firstRow['mname'].'</td>
                        <td class="center">'.$firstRow['pos'].'</td>
                        <td>'.$firstRow['type'].'</td>
                        <td>'.$firstRow['action'].'</td>
                    </tr>



                ';
            }

        }elseif(strpos($url, 'day=3days')){

            $timestamp = time();
            $dateNow = $timestamp - 302400;
            $firstSql = "SELECT * FROM acc_log WHERE timestamp BETWEEN '$dateNow' AND '$timestamp'";
            $firstQuery = mysqli_query($conn, $firstSql);

            while($firstRow = mysqli_fetch_assoc($firstQuery)){
                echo '
                    <tr>
                        <td>'.$firstRow['time']."  ".$firstRow['date'].'</td>
                        <td>'.$firstRow['lname'].'</td>
                        <td>'.$firstRow['fname'].'</td>
                        <td class="center">'.$firstRow['mname'].'</td>
                        <td class="center">'.$firstRow['pos'].'</td>
                        <td>'.$firstRow['type'].'</td>
                        <td>'.$firstRow['action'].'</td>
                    </tr>



                ';
            }

        }elseif(strpos($url, 'day=5days')){

            $timestamp = time();
            $dateNow = $timestamp - 475200;
            $firstSql = "SELECT * FROM acc_log WHERE timestamp BETWEEN '$dateNow' AND '$timestamp'";
            $firstQuery = mysqli_query($conn, $firstSql);

            while($firstRow = mysqli_fetch_assoc($firstQuery)){
                echo '
                    <tr>
                        <td>'.$firstRow['time']."  ".$firstRow['date'].'</td>
                        <td>'.$firstRow['lname'].'</td>
                        <td>'.$firstRow['fname'].'</td>
                        <td class="center">'.$firstRow['mname'].'</td>
                        <td class="center">'.$firstRow['pos'].'</td>
                        <td>'.$firstRow['type'].'</td>
                        <td>'.$firstRow['action'].'</td>
                    </tr>



                ';
            }

        }elseif(strpos($url, 'day=7days')){

            $timestamp = time();
            $dateNow = $timestamp - 648000;
            $firstSql = "SELECT * FROM acc_log WHERE timestamp BETWEEN '$dateNow' AND '$timestamp'";
            $firstQuery = mysqli_query($conn, $firstSql);

            while($firstRow = mysqli_fetch_assoc($firstQuery)){
                echo '
                    <tr>
                        <td>'.$firstRow['time']."  ".$firstRow['date'].'</td>
                        <td>'.$firstRow['lname'].'</td>
                        <td>'.$firstRow['fname'].'</td>
                        <td class="center">'.$firstRow['mname'].'</td>
                        <td class="center">'.$firstRow['pos'].'</td>
                        <td>'.$firstRow['type'].'</td>
                        <td>'.$firstRow['action'].'</td>
                    </tr>



                ';
            }

        }elseif(strpos($url, 'day=15days')){

            $timestamp = time();
            $dateNow = $timestamp - 1339200;
            $firstSql = "SELECT * FROM acc_log WHERE timestamp BETWEEN '$dateNow' AND '$timestamp'";
            $firstQuery = mysqli_query($conn, $firstSql);

            while($firstRow = mysqli_fetch_assoc($firstQuery)){
                echo '
                    <tr>
                        <td>'.$firstRow['time']."  ".$firstRow['date'].'</td>
                        <td>'.$firstRow['lname'].'</td>
                        <td>'.$firstRow['fname'].'</td>
                        <td class="center">'.$firstRow['mname'].'</td>
                        <td class="center">'.$firstRow['pos'].'</td>
                        <td>'.$firstRow['type'].'</td>
                        <td>'.$firstRow['action'].'</td>
                    </tr>



                ';
            }

        }elseif(strpos($url, 'day=30days')){

            $timestamp = time();
            $dateNow = $timestamp - 2678400;
            $firstSql = "SELECT * FROM acc_log WHERE timestamp BETWEEN '$dateNow' AND '$timestamp'";
            $firstQuery = mysqli_query($conn, $firstSql);

            while($firstRow = mysqli_fetch_assoc($firstQuery)){
                echo '
                    <tr>
                        <td>'.$firstRow['time']."  ".$firstRow['date'].'</td>
                        <td>'.$firstRow['lname'].'</td>
                        <td>'.$firstRow['fname'].'</td>
                        <td class="center">'.$firstRow['mname'].'</td>
                        <td class="center">'.$firstRow['pos'].'</td>
                        <td>'.$firstRow['type'].'</td>
                        <td>'.$firstRow['action'].'</td>
                    </tr>



                ';
            }

        }elseif(strpos($url, 'day=180days')){

            $timestamp = time();
            $dateNow = $timestamp - 15638400;
            $firstSql = "SELECT * FROM acc_log WHERE timestamp BETWEEN '$dateNow' AND '$timestamp'";
            $firstQuery = mysqli_query($conn, $firstSql);

            while($firstRow = mysqli_fetch_assoc($firstQuery)){
                echo '
                    <tr>
                        <td>'.$firstRow['time']."  ".$firstRow['date'].'</td>
                        <td>'.$firstRow['lname'].'</td>
                        <td>'.$firstRow['fname'].'</td>
                        <td class="center">'.$firstRow['mname'].'</td>
                        <td class="center">'.$firstRow['pos'].'</td>
                        <td>'.$firstRow['type'].'</td>
                        <td>'.$firstRow['action'].'</td>
                    </tr>



                ';
            }

        }

    }

}


?>