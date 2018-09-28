<?php
require 'conn.php';


if(isset($_POST['registerbtn']))
{
    $name = $_POST['full_name'];
    $email = $_POST['email'];
    $pass = md5($_POST['pass']);

    $sql = "INSERT INTO users(email,password,full_name)VALUES('$email','$pass','$name')";

    if(mysqli_query($conn,$sql))
    {
        echo "Successfully Registered!";
    }
    else
    {
        echo "Please Try Again!!";
    }




}


?>



<html>
    <head>
        <title>
            Registration
        </title>
    </head>
    <body><style>
        body{
        background-image: url('../images/monobg1.jpg');
        background-size: cover;
        }</style><center>
        <h3><font size="5" style="border-collapse: " color="#000000">Registration Form : </font></h3>
        <hr><fieldset>
        <form method="POST">
            <font size="3" style="border-collapse: " color="#FFFFFF">Enter Full Name : </font>
            <br>
            <input type="text" name = "full_name" placeholder = "Enter Full Name Here..">
            <br>
            
            <font size="3" style="border-collapse: " color="#FFFFFF">Enter Email-ID :</font> 
            <br>
            <input type="email" name = "email" placeholder = "Enter Email-ID Here..">
            <br>

            <font size="3" style="border-collapse: " color="#FFFFFF">Enter Password : </font>
            <br>
            <input type="password" name = "pass" placeholder = "Enter Password Here..">
            <br>

            <input type="submit" name="registerbtn" value="REGISTER">
            <br>
            <font size="3" style="border-collapse: " color="#FFFFFF">Already Have Account ?</font> <a href="login.php">Click Here..</a>
        </form></fieldset></center>
    </body>
</html>