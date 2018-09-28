<?php

require 'conn.php';
session_start();
if(isset($_POST['loginbtn']))
{
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);

    $query = "SELECT * FROM users WHERE email = '$email' AND password = '$pass'";

    $data = mysqli_query($conn,$query);
    $num = mysqli_num_rows($data);
    if($num != 0 )
    {
        //  header('location : dashboard.php');
        $res = mysqli_fetch_assoc($data);
        $_SESSION['id'] = $res['id'];

        $_SESSION['loggedIn'] = 'true';
        ?>
        <script>
            window.location.href='../mainpage.html';
        </script>
        <?php
    }
    else
    {
        echo "<span style='color:red;'>Invalid Credentials</span>";
    }


}


?>


<html>
    <head>
        <title>
            Login
        </title>
    </head>
    <body>
        <style type="text/css">
    body{
        background-image: url('../images/monobg1.jpg');
        background-size: cover;
    }
</style>
        
        <hr><center><font size="5" style="border-collapse: " color="#000000">To-Do-List:</font> </center><center><br><hr><h3><center><font size="5" color="#FFFFFF">Login Form :</font> </center></h3><hr><br><br>
            <fieldset>
        <form method="POST">
            Enter Email-ID : 
            <br>
            <input type="email" name = "email" placeholder = "Enter Email-ID Here..">
            <br>

            Enter Password : 
            <br>
            <input type="password" name = "pass" placeholder = "Enter Password Here..">
            <br>

            <input type="submit" name="loginbtn" value="LOGIN">
            <br>
            Do Not Have An Account ? <a href="register.php">Click Here..</a>
        </form></fieldset></center>
    </body>
</html>