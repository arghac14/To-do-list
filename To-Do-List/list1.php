<?php
require 'conn.php';
if(isset($_POST['submitbtn']))
{
   $title = $_POST['Title'];
   $description=$_POST['Description'];
   $query="INSERT INTO List(Title,Description)VALUES('$title','$description')";
   if(mysqli_query($conn,$query))
   {
        echo "Succesfully Inserted";

   }
    else

   {
   echo "Not Successful";
   }
}
   

?>

<html>
<head>
<title>FORM</title>
<style type="text/css">
	body{
		background-image: url('images/back.jpg');
		background-size: cover;
	}
</style><script>
		window.alert('Add your to do list here');
	</script>
</head>
<body>

  <br><br><br><br><br>
<center>
  <fieldset><fieldset>
<form  method="post">
<h1>Enter Title:</h1>
<input type="text" name="Title" placeholder="Title....."><br>

<p style position="float-right"><img src="images\livejournal.png" height=20px width=20px></p>
<h1>Enter Description:</h1>
<input type="text" name="Description" placeholder="Description....."><br>
<br><img src="images\livejournal.png" height=20px width=20px>
<br>

<input type="submit" name="submitbtn" value="SUBMIT"> <br>
</form></fieldset></fieldset></center>
<h5 class="foot"><center><font size="3" color=" #FFFFF0">Copyrigts Reserved</font>
<a href="mainpage.html" class="foot"><br><--Back</a></center></h5>
</body>
</html>







