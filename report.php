<html>
<head>
	<title>		Register Your Complaint	</title>
<link href="home_style.css" rel="stylesheet" media="screen">
</head>

<body bgcolor="#FFD4A7">
	
<table>
	<tr>
			<td >
				<img src="logo_img_2.png" height="100">
			</td>
			
			<td width="1980px"> 
				<h1 align="center" style="font-size:50px; margin: 0px 5px 0px 0px; font-family: 'Chela One', cursive;"> SURKSHIT BHARAT </h1>
			</td>
			
			<td width="250px">
				<center> <img src="logo_img_2.png" height="100"> </center>
			</td>
	</tr>
</table>

<div class="navbar">
	<ul>
		<li>	<a href="index.html">			Home		</a>	</li>
		<li>	<a href="report.php">	Case reg.	</a>	</li>
		<li>	<a href="status.html">			Status		</a>	</li>
		<li>	<a href="sign.php">			Register	</a>	</li>
		<li>	<a href="login2.php">			Sign in	</a>	</li>
		<li>	<a href="About.html">	About	</a>	</li>
	</ul>

</div>

<div class="left_panel">

	<div class="text"> Information				</div>
	<div class="text2"> Register Your Complaint	</div>

 </div>

<div >
 <div class="menu_bar">
 	<br>
 	<table width="100%" border="0">
 		<tr>	<td>	<a href="lost_found.html"> Lost & Found	<br><br> </td> </tr>
 		<tr>	<td>	<a href="Reward.html"> Criminal Information	<br><br> </td> </tr>
 		<tr>	<td>	<a href="#"> Lost & Found	<br><br> </td> </tr>
 		<tr>	<td>	<a href="#"> Lost & Found	<br><br> </td> </tr>

 	</table>

 </div>

<div class="content">
		<br>
	<form action="text.php" method="POST">
		<table align="left" style="margin-left: 100px;" border="0">
			<tr>
				<td>
					<h3>	First Name:	
					 <input style="margin-left: 50px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; height: 30px" type="text" name="First_name" placeholder="Your First Name"> </h3>
				</td> 
				<td width="100"> </td>
				<td>
					<h3>	Last Name: 
						<input style="margin-left: 50px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; height: 30px" type="text" name="Last_name" placeholder="Your Last Name"> </h3>
				</td>
			</tr>
			<tr>
				 
				<td>
					<h3>	Id Type:  <select id="id_type" name="card_id" style="margin-left: 75px; width: 175px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; height: 40px; "> 
										<option> 	Select One  </option>
										<option>	Aadhar Card	</option>
										<option>	Aadhar Card	</option>
										<option>	Aadhar Card	</option>
										<option>	Aadhar Card	</option>
										</select> </h3>
				</td> 
			<td width="100"> </td>
			
				<td>
					<h3>	Id No:	
					 <input style="margin-left: 90px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; height: 30px" type="digit" name="Id_no" placeholder="identity number"> </h3>
				</td> 
			</tr>

			<tr>
				<td>
					<h3>	Address: 
						<textarea style="margin-left: 70px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" rows="2" cols="22" name="Address" placeholder="Your Address"> </textarea> </h3>
				</td> 
				<td width="100"> </td>
				<td>
					<h3>	Postal Code: 
						<input style="margin-left: 39px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; height: 30px" type="digit" name="pcode" placeholder="Your Postal code"> </h3> 
				</td> 
						</tr>
						<tr>
				<td>
					<h3>	State:  <select id="State_id" name="State" style="margin-left: 94px; width: 175px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; height: 40px; "> 
										<option> 	Select One  </option>
										<option>	Rajasthan	</option>
										<option>	Haryana		</option>
										<option>	Punjab		</option>
										<option>	Gujrat		</option>
										</select> </h3>
				</td> 
			<td width="100"> </td>
				<td>
					<h3>	District:  <select id="District_id" name="District" style="margin-left: 74px; width: 175px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; height: 40px; "> 
										<option> 	Select One  </option>
										<option>	Jaipur		</option>
										<option>	Sikar 		</option>
										<option>	Churu		</option>
										<option>	Jhunjhunu	</option>
										</select> </h3>
				</td> 
			</tr>
			<tr>
				<td>
					<h3>	Case-Type:  <select id="Casetype_id" name="Case_id" style="margin-left: 52px; width: 175px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; height: 40px; "> 
										<option> 	Select One  </option>
										<option>	Missing		</option>
										<option>	Accident	</option>
										<option>	Murder		</option>
										<option>	Harrasment	</option>
										</select> </h3>
				</td> 
				<td width="100">  </td>
				<td>
					<h3>	Contact Number: 
						<input style="margin-left: 3px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; height: 30px" type="digit" name="contact" placeholder="Your Last Name"> </h3>
				</td>
			</tr>
		</table>
		<table border="0" align="left" style="margin-left: 100px;">
			<tr>
				<td>
					<h3>	Descriptions: </h3> </td>
					<td>
						<textarea style="margin-left: 40px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box;" rows="6" cols="82" name="Description" placeholder="Your Address"> </textarea>
					
						</td> 
			</tr>
		</table>

<input style="margin-left: 120px; margin-top:15px;   width:100px; height:40px;" type="submit" name="submit">
<input type="reset" name="clear" style="margin-left: 10px; width:100px; height:40px;">

	</form>

</div>
</div>

<br><br><br><br><br><br><br><br><br><br>
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
<table bgcolor="grey" width="100%" height="25%" >
	 	<tr align="center">
	 		<td colspan="4" > <img src="t2.png" width="30" height="30" style="margin-right:40;"> <img src="facebook-icon-circle-logo-09F32F61FF-seeklogo.com.png" width="30" height="30" style="margin-right:40;"> <img src="pinterest.png" width="30" height="30" style="margin-right:40;"><img src="md_5a9797d18f418.png" width="30" height="30" style="margin-right:40;"></td></tr>
	 		<tr align="center" height:"10%" margin-top:"0">
	 			<td width="15%"> <h3><a href="demmo.html">Contact Us</a> &emsp;&emsp;
	 			
	 			
	 				<a href="#">FAQ</a>&emsp;&emsp;
	 					<a href="terms.html">Terms & Conditions</a>&emsp;&emsp;	
	 			
	 					<a href="#">Queries</a>&emsp;&emsp;	</h3></td>
		</tr>
	 	
	 </table>
	 <table bgcolor="#974b07" width="100%" height="10%">
	 	<tr align="center">
	 		<td>  <b><a href="mo.pdf">Rajasthan Police Rules, 2008 (English) </a> &emsp;| &emsp;<a href="mo1.pdf">Rajasthan Police Rules, 2008 (Hindi) </a>&emsp;	 |&emsp;	<a href="mo2.pdf"> Rajasthan Police Subordinate Service Rules 1989</a></b></td></tr>
	 </table>



<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";  
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}    
    x[myIndex-1].style.display = "block";  
    setTimeout(carousel, 2000); // Change image every 2 seconds
}
</script>
</body>
</html>