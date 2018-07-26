<!DOCTYPE html>
<html>
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box}
/* Full-width input fields */
input[type=text], input[type=number], input[type=date], input[type=password] {
    
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: none;
    background: #f1f1f1;
}

/* Add a background color when the inputs get focus */
input[type=text]:focus, input[type=number]:focus, input[type=date]:focus, input[type=password]:focus {
    background-color: #ddd;
    outline: none;
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50; font-size: 20px;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

button:hover {
    opacity:1;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
    background-color: #474e5d;
    padding-top: 50px;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
    border: 1px solid #888;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: #f1f1f1;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }
}
</style>
<body bgcolor="black">


<button onclick="document.getElementById('id01').style.display='block'" style="width:auto; background-color:green; margin-top:280px; margin-left: 470px;padding: 20px 40px;">Sign Up</button>

 <a href="login2.php"> <input type="button" name="login" value="login" style="background-color: green;
    color: white;font-size: 20px;
    padding: 20px 40px;
    margin: 8px 0;
    border: none;
    margin-left: 40px;
    cursor: pointer;
    opacity: 0.9; column-width: 50px; "></a>


<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
  <form class="modal-content animate" action="sign2.php" method="POST">
    <div class="container">
      <h1>Sign Up</h1>
      <p>Please fill in this form to create an account.</p>
      <hr><table width=100%><tr><td>
      <label for="email"><b>FIRST NAME:</b></label></td><td>
         <label for="email"><b>LAST NAME:</b></label></td></tr><tr><td>
      <input type="text" placeholder="Enter First Name" name="fname" required size="50%"></td><td>
    
      <input type="text" placeholder="Enter Last Name" name="lname" required size="50%"></td></tr></table>
      <b>DOB:</b>
      <br><input type="date" name="date1" style="width: 100%;"><br>

       <b>Mobile No.</b><br>
      <input type="number" name="mobile" placeholder="Enter Mobile No." style= "width: 100%;" required><br>

      <b>Gender:</b><br><br>
      <input type="radio" name="gender" value=Male>Male&emsp;&emsp;&emsp;
      <input type="radio" name="gender" value=Female>Female&emsp;&emsp;&emsp;
      <input type="radio" name="gender" value=Other>Other
      <br><br><br>
      
         <label for="email" style="width: 100%;"><b>Email</b></label><br>
      <input type="text" placeholder="Enter Email" name="email" required style="width: 100%;">
       <br>
      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required style="width: 100%;">
<br>
      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input type="password" placeholder="Repeat Password" name="re_password" style="width: 100%;" required>
      
      




      <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>

      <div class="clearfix">
        <button type="button" onclick="document.getElementById('signup').style.display='none'" class="cancelbtn">Cancel</button>
        <button type="submit" class="signupbtn" name="submit" > NEXT</button></a>
      </div>
    </div>
  </form>
</div>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>

</body>
</html>
