
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
</head>
<style type="text/css">
    body{
        font-family: Verdana;
        font-size: 13px;
    }
    header{

        height: 30px;
        padding: 10px;
        background-color: #0b5886;
        color: white;
    }
    header a{
        color: white;
        text-decoration: none;
    }

</style>
<body>
    <header><a href="index.php">Home</a> . <a href="admin.php">Admin</a> . <a href="acc.php">Accountant</a> . <a href="rec.php">Receptionist</a> . <a href="login.php">Login</a> . <a href="signup.php">Signup</a> . <a href="logout.php">Logout</a> .</header>
   <span><?php
  
   if(isset($_SESSION['myname']))
   {
    echo " Hi, " . $_SESSION['myname'];
   }
   
   ?>

   <?php
   
   if(access('ADMIN', false)): ?>
   <form method="post">
    <select>
        <option>user</option>
        <option>accountant</option>
        <option>receptionist</option>
        <option>admin</option>
    </select>

   </form>
   <?php endif; ?>

   </span>