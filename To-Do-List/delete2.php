    
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
        $sql = "SELECT * FROM List";
        $result = mysqli_query($conn,$sql);
    $conn = mysqli_connect('localhost','root','','To_Do_List');
    if(!$conn)
    {
        die();
    }
   
    if(isset($_POST['updatebtn']))
    {
        $ID = $_POST['ID'];
        $Title = $_POST['Tilte'];
        $Description = $_POST['Description'];
        $sql = "UPDATE List SET Title = '$Title',Description = '$Description',  WHERE ID = '$ID'";
   
        mysqli_query($conn,$sql);
   
   
    }













   if(isset($_GET['ID']))
   {
       $ID = $_GET['ID'];
       $query = "DELETE FROM List WHERE ID = '$ID'";
       mysqli_query($conn,$query);
   }


   if(isset($_GET['updateID']))
   {
       $update_ID = $_GET['updateID'];
       $query = "SELECT * FROM List WHERE ID = '$update_ID'";
       $data = mysqli_query($conn,$query);
       $result = mysqli_fetch_assoc($data);
       ?>
       <form action="delete2.php" method="POST">


       <input type="hidden" value = "<?php echo $result['ID']; ?>" name ="ID">


       <h1>Enter your Title:</h1>
        <input type="text" value="<?php echo $result['Title'];?>" name="Title" placeholder="Enter Title"><br>
       
       
        <h1>Description:</h1>
        <input type="text" value="<?php echo $result['Description'];?>" name="Description" placeholder="Description"><br>
      
        <input type="submit" name="updatebtn" value="Update">
       
       
       
       </form>
       <?php
   }


    if(isset($_GET['id']))
    {
      $id = $_GET['id'];
      $sql2 = "DELETE FROM list WHERE ID='$id'";

      if(mysqli_query($conn,$sql2))
      {
        echo "Deleted Successfully";
      }
      else
      {
        echo "Something Went Wrong";
      }
    }



   $query = "select * from list";
   $data = mysqli_query($conn,$query);
   
   ?>
   <table  border="1" cellpadding="20px" width="80%" bgcolor="#FFFFF0" bordercolor="blue">
        <tr>
            <th>Id</th>
            <th>Title</th>
            <th>Description</th>
        </tr>

  
   <?php
   while($result = mysqli_fetch_assoc($data))
   {
       ?>
       <tr>
        <td><?php echo $result['ID'];?></td>
        <td><?php echo $result['Title'];?></td>
        <td><?php echo $result['Description'];?></td>
       <td> 
        
        
        <a href="delete2.php?id=<?php echo $result['ID'];?>">Delete</a> </td>
       </tr>
      
       <?php
       
   }
?>

 </table></center>
<h5 class="foot"><center><a href="mainpage.html"><br><--Back</a></center></h5>
</body>
