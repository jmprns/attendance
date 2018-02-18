<?php

include 'utilities.php';

$url = "http://".$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
$session_id = $_SESSION['admin'];



if(strpos($url, 'dashboard.php') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li class="active">
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'attendance=jhs') !== false){
    echo '

    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li class="active">
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="active"><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'attendance=shs') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li class="active">
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li class="active"><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'attendance=bsa') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li class="active">
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li class="active"><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'attendance=bsba') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li class="active">
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li class="active"><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'attendance=bscs') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li class="active">
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li class="active"><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'attendance=ccje') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li class="active">
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li class="active"><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'attendance=beed') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li class="active">
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li class="active"><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'attendance=faculty') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li class="active">
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li class="active"><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'attendance=guard') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li class="active">
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li class="active"><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'attendance=all') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li class="active">
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li class="active"><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'register.php') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li class="active">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li class="active"><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'update.php') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li class="active">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li class="active"><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'edit.php') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li class="active">
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li class="active">
                            <a href="#">Update <span class="fa arrow"></span></a>
                            <ul class="nav nav-third-level">
                                <li class="active">
                                    <a>Edit</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'profile.php') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li class="active">
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}elseif(strpos($url, 'system.php') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li class="active">
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}

elseif(strpos($url, 'acc_log.php') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li>
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li class="active">
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}

elseif(strpos($url, 'announcements.php') !== false){
    echo '


    <nav class="navbar-default navbar-static-side" role="navigation">
        <div class="sidebar-collapse">
            <ul class="nav metismenu" id="side-menu">
                <li class="nav-header">
                    <div class="dropdown profile-element"> <span>
                            <img alt="image" class="img-circle" src="img/'.$fetchImg.'" width="60px" height="60px" />
                             </span>
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                            <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">'.$fetchFirst.'</strong>
                             </span> <span class="text-muted text-xs block">'.$fetchPos.'</a>

                    </div>
                    <div class="logo-element">
                        WUP
                    </div>
                </li>

                <li>
                    <a href="dashboard.php"><i class="fa fa-dashboard"></i> <span class="nav-label">Dashboard</a>
                </li>


                <li>
                    <a href="#"><i class="fa fa-bar-chart-o"></i> <span class="nav-label">Attendance</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="attendance.php?attendance=jhs&amp;day=today">Junior High</a></li>
                        <li><a href="attendance.php?attendance=shs&amp;day=today">Senior High</a></li>
                        <li><a href="attendance.php?attendance=bsa&amp;day=today">Accountancy</a></li>
                        <li><a href="attendance.php?attendance=bsba&amp;day=today">Bussiness Administration</a></li>
                        <li><a href="attendance.php?attendance=bscs&amp;day=today">Computer Science</a></li>
                        <li><a href="attendance.php?attendance=ccje&amp;day=today">Criminology</a></li>
                        <li><a href="attendance.php?attendance=beed&amp;day=today">Education</a></li>
                        <li><a href="attendance.php?attendance=faculty&amp;day=today">Faculty/Staff</a></li>
                        <li><a href="attendance.php?attendance=guard&amp;day=today">Guards</a></li>
                        <li><a href="attendance.php?attendance=all&amp;day=today">See All</a></li>
                    </ul>
                </li>

                <li>
                    <a href="#"><i class="fa fa-edit"></i> <span class="nav-label">Register/Update</span><span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level collapse">
                        <li><a href="register.php">Register</a></li>
                        <li><a href="update.php">Update</a></li>
                    </ul>
                </li>
                <li class="active">
                    <a href="announcements.php"><i class="fa fa-bullhorn"></i> <span class="nav-label">Announcements</a>
                </li>
                <li>
                    <a href="profile.php"><i class="fa fa-users"></i> <span class="nav-label">Profile</a>
                </li>
                <li>
                    <a href="system.php"><i class="fa fa-cogs"></i> <span class="nav-label">System</a>
                </li>


                <li class="special_link">
                    <a href="logout.php?session_id='.$session_id.'"><i class="fa fa-sign-out"></i> <span class="nav-label">Logout</span></a>
                </li>
            </ul>

        </div>
    </nav>


    ';
}

?>