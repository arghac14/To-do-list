<?php
session_start();
require 'conn.php';

if(isset($_SESSION['loggedIn']))
{
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM users WHERE id = '$id'";
    $data = mysqli_query($conn,$sql);
    $userDetails = mysqli_fetch_assoc($data);
    echo "Welcome ".$userDetails['full_name'];
    ?>
    <a href="logout.php">Logout</a>
    <?php
}  
else
{
    ?>
    <script>
        window.location.href = 'login.php';
    </script>
    <?php
}




?>