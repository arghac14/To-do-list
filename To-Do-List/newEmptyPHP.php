
<!DOCTYPE html>
<html>
<head>
    <title></title>
    <style type="text/css">
          body{
        background-image: url('images/half.jpg');
        background-size: cover;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        
    }
      </style>
</head>
<body><center>
<?php

    require 'conn.php';
    $sql = "SELECT * FROM list";
    $result = mysqli_query($conn,$sql);
    ?>
    <table border="1" cellpadding="20px" width="80%" bgcolor="#FFFFF0" bordercolor="blue">
    <tr>
        <th>Title</th>
        <th>Description</th>
    </tr>
       
    <?php
    while($data = mysqli_fetch_assoc($result))
    {
        ?>
        <tr>
            <td><b><?php echo $data['Title']; ?></b></td>
            <td><?php echo  $data['Description'];?></td>
        </tr>
        <?php
    }
    ?>
    </table>
    <h5 class="foot"><center><a href="mainpage.html"><br><--Back</a></center></h5>
</body></center>
</html>


    

<!-- 
 
 </body>
 </html> -->


