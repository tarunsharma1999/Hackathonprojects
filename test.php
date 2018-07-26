<?php
   if(isset($_POST['submit']))
{
   $name = $_POST['username'];
   $pass = $_POST['password'];
   $con = mysqli_connect('localhost','root','','users');
   
   if(!$con)
   {
          echo "database not connected";
   }
   $query = "SELECT * from user_id where username= '$name' AND password = '$pass'" ;
   
        $result = mysqli_query($con, $query)
                   or die(mysqli_error($con));
        if(mysqli_num_rows($result)>0)
		{
            echo "you are succesfully logged in";
		}
        else
		{
            echo "Invalid Details";
		}
		}			
?>