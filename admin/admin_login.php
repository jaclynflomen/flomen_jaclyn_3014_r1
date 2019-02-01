<?php require_once('scripts/config.php');
    if(empty($_POST['username']) || empty($_POST['password'])){
        $message = 'Missing Fields';
    }else{
        $username = $_POST['username'];
        $password = $_POST['password'];

        $message = login($username, $password);
    }
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Login</title>
</head>
<body>

    <?php if(!empty($message)):?>
    <p><?php echo $message;?></p>
    <?php endif;?>

    <?php
 
 // your auth method
 function auth()
 {
     return 0;
 }
    
 if(!empty($username) && !empty($password)){
     if(!auth())
     {
         //Login attempts
         $_SESSION['attempts'] += 1;
         echo "Failed to log in. Attempt: {$_SESSION['attempts']} of 3.";
     }
 } else {
     
 }
  
 if($_SESSION['attempts'] < 3)
 {
 
 ?>
    <form action="admin_login.php" method="post"> <!-- use post to keep username and pw private-->
         <label for="username">Username:
        <input type="text" name="username" value="" required>
        </label>
        <br>
        <label for="password">Password:
        <input type="password" name="password" value="" required>
        </label>
        <br>
        <button type="submit">Submit</button>
    </form>
    
    <?php
} else {
    echo "<br /> <b>Your account has been locked.</b>";
    
}
?>


</body>
</html>