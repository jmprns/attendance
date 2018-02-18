<?php

include_once 'db.php';


function asOff(){
    $url = $_SERVER['REQUEST_URI'];
    if(strpos($url, 'day=today')){
        echo " today.";
    }elseif(strpos($url, 'day=3days')){
        echo " 3 days.";
    }elseif(strpos($url, 'day=5days')){
        echo " 5 days.";
    }elseif(strpos($url, 'day=7days')){
        echo " 7 days.";
    }elseif(strpos($url, 'day=15days')){
        echo " 15 days.";
    }elseif(strpos($url, 'day=30days')){
        echo " 30 days.";
    }elseif(strpos($url, 'day=180days')){
        echo " 180 days.";
    }else{
        echo "
        <script>
        window.location.href = 'attendance.php?attendance=".$_REQUEST['attendance']."&day=today';
        </script>
        ";
    }
}


function defaultDay(){
    $url = $_SERVER['REQUEST_URI'];
    if(strpos($url, 'today')){
        echo "
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=today\" selected>Today</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=3days\">Last 3 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=5days\">Last 5 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=7days\">Last 7 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=15days\">Last 15 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=30days\">Last 30 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=180days\">Last 180 days</option>
        ";
    }elseif(strpos($url, '3days')){
        echo "
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=today\">Today</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=3days\" selected>Last 3 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=5days\">Last 5 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=7days\">Last 7 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=15days\">Last 15 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=30days\">Last 30 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=180days\">Last 180 days</option>
        ";
    }elseif(strpos($url, '5days')){
        echo "
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=today\">Today</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=3days\">Last 3 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=5days\" selected>Last 5 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=7days\">Last 7 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=15days\">Last 15 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=30days\">Last 30 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=180days\">Last 180 days</option>
        ";
    }elseif(strpos($url, '7days')){
        echo "
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=today\">Today</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=3days\">Last 3 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=5days\">Last 5 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=7days\" selected>Last 7 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=15days\">Last 15 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=30days\">Last 30 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=180days\">Last 180 days</option>
        ";
    }elseif(strpos($url, 'day=15days')){
        echo "
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=today\">Today</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=3days\">Last 3 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=5days\">Last 5 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=7days\">Last 7 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=15days\" selected>Last 15 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=30days\">Last 30 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=180days\">Last 180 days</option>
        ";
    }elseif(strpos($url, '30days')){
        echo "
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=today\">Today</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=3days\">Last 3 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=5days\">Last 5 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=7days\">Last 7 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=15days\">Last 15 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=30days\" selected>Last 30 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=180days\">Last 180 days</option>
        ";
    }elseif(strpos($url, '180days')){
        echo "
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=today\">Today</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=3days\">Last 3 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=5days\">Last 5 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=7days\">Last 7 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=15days\">Last 15 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=30days\">Last 30 days</option>
        <option value=\"attendance.php?attendance=".$_REQUEST['attendance']."&day=180days\" selected>Last 180 days</option>
        ";
    }

}

function attData(){
    include 'db.php';
    if(isset($_REQUEST['day']) && isset($_REQUEST['attendance'])){
        $url = $_SERVER['REQUEST_URI'];
        $date = date("m/d/y");
        //JHS
        if(strpos($url, 'attendance=jhs')){
            $dept = 'JHS';
            if(strpos($url, 'day=today')){
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `attendance_o`.`date_check` = '$date' AND `users`.`department` = '$dept'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }


            }elseif(strpos($url, 'day=3days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 302400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=5days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 475200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=7days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 648000;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=15days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 1339200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=30days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 2678400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=180days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 15638400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                        
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }else{

            }
        }

        //SHS
        elseif(strpos($url, 'attendance=shs')){
            $dept = 'SHS';
            if(strpos($url, 'day=today')){
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `attendance_o`.`date_check` = '$date' AND `users`.`department` IN('ABM', 'GAS', 'STEM', 'HUMMS')
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                        
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }


            }elseif(strpos($url, 'day=3days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 302400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` IN('ABM', 'GAS', 'STEM', 'HUMMS')
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=5days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 475200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` IN('ABM', 'GAS', 'STEM', 'HUMMS')
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=7days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 648000;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` IN('ABM', 'GAS', 'STEM', 'HUMMS')
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=15days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 1339200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` IN('ABM', 'GAS', 'STEM', 'HUMMS')
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=30days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 2678400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` IN('ABM', 'GAS', 'STEM', 'HUMMS')
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=180days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 15638400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` IN('ABM', 'GAS', 'STEM', 'HUMMS')
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }else{

            }
        }

        //BSA
        elseif(strpos($url, 'attendance=bsa')){
            $dept = 'BSA';
            if(strpos($url, 'day=today')){
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `attendance_o`.`date_check` = '$date' AND `users`.`department` = '$dept'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }


            }elseif(strpos($url, 'day=3days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 302400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=5days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 475200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=7days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 648000;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=15days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 1339200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=30days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 2678400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=180days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 15638400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }else{

            }

        }

        //BSBA
        elseif(strpos($url, 'attendance=bsba')){
        $dept = 'BSBA';
            if(strpos($url, 'day=today')){
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `attendance_o`.`date_check` = '$date' AND `users`.`department` = '$dept'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }


            }elseif(strpos($url, 'day=3days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 302400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=5days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 475200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=7days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 648000;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=15days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 1339200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=30days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 2678400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=180days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 15638400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }else{

            }

        }


        //BSCS
        elseif(strpos($url, 'attendance=bscs')){
        $dept = 'BSCS';
            if(strpos($url, 'day=today')){
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `attendance_o`.`date_check` = '$date' AND `users`.`department` = '$dept'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }


            }elseif(strpos($url, 'day=3days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 302400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=5days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 475200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=7days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 648000;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=15days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 1339200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=30days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 2678400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=180days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 15638400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }else{

            }

        }


        //CCJE
        elseif(strpos($url, 'attendance=ccje')){
        $dept = 'CCJE';
            if(strpos($url, 'day=today')){
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `attendance_o`.`date_check` = '$date' AND `users`.`department` = '$dept'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }


            }elseif(strpos($url, 'day=3days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 302400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=5days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 475200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=7days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 648000;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=15days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 1339200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=30days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 2678400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=180days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 15638400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }else{

            }

        }


        //BEED
        elseif(strpos($url, 'attendance=beed')){
        $dept = 'BEED';
            if(strpos($url, 'day=today')){
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `attendance_o`.`date_check` = '$date' AND `users`.`department` = '$dept'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }


            }elseif(strpos($url, 'day=3days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 302400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=5days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 475200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=7days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 648000;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=15days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 1339200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=30days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 2678400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=180days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 15638400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }else{

            }

        }


        //FACULTY
        elseif(strpos($url, 'attendance=faculty')){
        $dept = 'FACULTY';
            if(strpos($url, 'day=today')){
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `attendance_o`.`date_check` = '$date' AND `users`.`department` = '$dept'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }


            }elseif(strpos($url, 'day=3days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 302400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=5days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 475200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=7days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 648000;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=15days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 1339200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=30days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 2678400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=180days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 15638400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }else{

            }

        }


        //GUARDS
        elseif(strpos($url, 'attendance=guard')){
        $dept = 'GUARD';
            if(strpos($url, 'day=today')){
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `attendance_o`.`date_check` = '$date' AND `users`.`department` = '$dept'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }


            }elseif(strpos($url, 'day=3days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 302400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=5days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 475200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=7days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 648000;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=15days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 1339200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=30days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 2678400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=180days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 15638400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `users`.`department` = '$dept'
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }else{

            }
        }


        //ALL
        elseif(strpos($url, 'attendance=all')){
            if(strpos($url, 'day=today')){
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode` AND `attendance_o`.`date_check` = '$date'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }


            }elseif(strpos($url, 'day=3days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 302400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode`
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=5days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 475200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode`
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=7days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 648000;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode`
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=15days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 1339200;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode`
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=30days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 2678400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode`
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }elseif(strpos($url, 'day=180days')){
                $timestamp1 = time();
                $timestamp2 = $timestamp1 - 15638400;
                $attendanceSql = "SELECT `attendance_o`.`barcode`, `attendance_o`.`timestamp`, `attendance_o`.`action`, `attendance_o`.`sms`, `users`.`lname`, `users`.`fname`, `users`.`mname`, `users`.`department`, `users`.`grade`, `users`.`card`  
                        FROM `attendance_o`,`users`
                        WHERE `attendance_o`.`barcode` = `users`.`users_barcode`
                        AND  `attendance_o`.`timestamp` >= '$timestamp2'
                        ORDER BY `attendance_o`.`timestamp` DESC";
                $attendanceQuery = mysqli_query($conn, $attendanceSql);

                while($attendanceRow = mysqli_fetch_assoc($attendanceQuery)){
                    $attendanceLast = $attendanceRow['lname'];
                    $attendanceFirst = $attendanceRow['fname'];
                    $attendanceMid = $attendanceRow['mname'];
                    $attendanceDept = $attendanceRow['department'];
                    $attendanceYear = $attendanceRow['grade'];
                    $attendanceCard = $attendanceRow['card'];
                    $attendanceBar = $attendanceRow['barcode'];

                    $attendanceTS1 = $attendanceRow['timestamp'];
                    $attendanceTS2 = date("m/d/y", $attendanceTS1);
                    $attendanceTS3 = date("h:i:s A", $attendanceTS1);
                    $attendanceTime = $attendanceTS3."  ".$attendanceTS2;


                    if($attendanceRow['action'] == 0){
                        $attendanceAct = 'TIME IN';
                    }else{
                        $attendanceAct = 'TIME OUT';
                    }

                    if($attendanceRow['sms'] == 0){
                        $attendanceSms = '<span class="label label-danger">NOT SENT</span>';
                    }else{
                        $attendanceSms = '<span class="label label-success">SENT</span>';
                    }

                    echo '

                    <tr>
                        <td>'.$attendanceTime.'</td>
                        <td>'.$attendanceLast.'</td>
                        <td>'.$attendanceFirst.'</td>
                        <td>'.$attendanceMid.'</td>
                        <td>'.$attendanceDept.'</td>
                        <td>'.$attendanceYear.'</td>
                        <td>'.$attendanceBar.'</td>
                         
                        <td>'.$attendanceAct.'</td>
                        <td class="text-center">'.$attendanceSms.'</td>
                    </tr>


                    ';

                }
            }else{

            }

        }

       
    }else{
        header('location:attendance.php?attendance=jhs&day=today');
    }
}

?>