<?php
   if(isset($_POST['submit']))
{
   $fname = $_POST['First_name'];
   $lname = $_POST['Last_name'];
   $c_id= $_POST['card_id'];
   $id = $_POST['Id_no'];
   $pcode = $_POST['pcode'];
   $address = $_POST['Address'];
   $s_id = $_POST['State'];
   $d_id = $_POST['District'];
   $case = $_POST['Case_id'];
   $contact = $_POST['contact'];
   $des = $_POST['Description'];
     # code...
     
   $con = mysqli_connect('localhost','root','','bikaner');
   
   
   if(!$con)
	   {
          die("database not connected");
       }
   $query = "INSERT INTO report (First_name,Last_name,card_id,Id_no,code,Address,State,District,Case_id,contact,Description) VALUES ('$fname','$lname','$c_id','$id','$pcode','$address','$s_id','$d_id','$case','$contact','$des') " ;
        $add_res = mysqli_query($con, $query)
                   or die(mysqli_error($con));
        if($add_res)
		{
            echo "<h1> <center> You Are Sucessfully Registred </center> </h1> ";
           	
		}
   }
   
   else
		{
            echo "<h1> <center> Wrong Password Entered! </center> </h1>";
		
    }	
?>