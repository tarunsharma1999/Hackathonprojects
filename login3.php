<?php

if(isset($_POST['submit'])){

    $fname = $_POST['username'];
    $password = $_POST['password'];

    $con=mysqli_connect('localhost','root','','bikaner');
    if(!$con)
    {
        die("database not connected");
    }
        //$query="SELECT* from `student`(`name`, `password`, `confirm`) VALUES ('$name','$pass','$confirmpass')";
        
        $query="SELECT * from sign2 where fname= '$fname' AND password= '$password'"; 

         $result= mysqli_query($con, $query)
          or die(mysqli_error($con));
   
         if (mysqli_num_rows($result)>0) {

             echo "";
            
                         # code...
         }

         else{
            echo "Invalid username, password";
         }

}
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body><center>
 <h1 style="color: green; font-size: 40px;"> you are successfully logged in <br>
 Go to <a href="index.html" style="text-decoration: none; color: red;">HOME</a>    </h1>
</body>
</html>
 




