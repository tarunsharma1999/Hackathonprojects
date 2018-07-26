<?php
   if(isset($_POST['submit']))
{
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $date1= $_POST['date1'];
   $mobile = $_POST['mobile'];
   $check1 = $_POST['gender'];
   $email = $_POST['email'];
   $password = $_POST['password'];
   $re_password = $_POST['re_password'];
   //$remember = $_POST['remember'];
     # code...
     
   $con = mysqli_connect('localhost','root','','bikaner');
   
   
   if(!$con)
	   {
          die("database not connected");
       }
   $query = "INSERT INTO sign2 (fname,lname,date1,mobile,check1,email,password,re_password) VALUES ('$fname','$lname','$date1','$mobile','$check1','$email','$password','$re_password') " ;
        $add_res = mysqli_query($con, $query)
                   or die(mysqli_error($con));
        if($add_res)
		{
            echo "<h1> <center> You Are Sucessfully Registred </center> </h1> ";
           	
		}
   
   
   else
		{
            echo "<h1> <center> Wrong Password Entered! </center> </h1>";
		
    }	}
?>