<?php 

    require_once('scripts/config.php');
    confirm_logged_in();
    
    //To Do: Login Needed
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to your admin panel</title>
</head>
<body>

    <h1>Admin Dashboard</h1>
    <h3>Welcome <?php echo $_SESSION['user_name'];?></h3>
    <p>This is the admin dashboard</p>

    <nav>
        <ul>
            <li><a href="#">Create User</a></li>
            <li><a href="#">Edit User</a></li>
            <li><a href="#">Delete User</a></li>
            <li><a href="scripts/caller.php?caller_id=logout">Sign Out</a></li>
        </ul>
    </nav>


    <?php
    setCookie('user_date', date("F j, Y, g:i a"),time()+60*60*24*365);
    echo 'Last Log In: ';

    $timezone  = -5; //(GMT -5:00) EST (U.S. & Canada) 
    echo gmdate("Y/m/j H:i", time() + 3600*($timezone+date("I")));
    ?>


    <p><?php 
    $hour = date('H');
    $dayTime = ($hour > 17) ? "Evening" : ($hour < 12) ? "Morning" : "Afternoon";
    echo "Good " . $dayTime; 
    ?></p>
</body>
</html>