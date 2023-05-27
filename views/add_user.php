<!DOCTYPE html>
<html>
<head>
	<title>ADD NEW ACCOUNT</title>
</head>
<script>  
function validateform4(){  
var name=document.myform.name.value;  
var password=document.myform.password.value;  
  
if (name==null || name==""){  
  alert("Name can't be blank");  
  return false;  
  } 
  else if(phone.length<11){  
  alert("phone No must be at least 11 characters long.");  
  return false;  
  } 
  if else(email==null || email==""){  
  alert("Name can't be blank");  
  return false;


}  
</script>
<body background="../asset/img1.png">

	<h1 style="text-align:center;background-color:gray;">ADD NEW USER ACCOUNT</h1>
	<hr style="height:2px;color:black;background-color:black;">
    <left>
		<a href="home.php" style="color: black;background-color:AntiqueWhite;text-decoration:none;">Back </a> ||
		<a href="../controller/logout.php" style="color: black;background-color:AntiqueWhite;text-decoration:none;">logout </a>
	</left>
	<br>
	<br>

	<table align="center">
		         <tr>
					<td>Account No:</td>
				</tr>
				<tr>
                    <td ><input type="text" name="" value="" placeholder="Account No."></td>
				</tr>
				<tr>
					<td>Full Name:</td>
				</tr>
				<tr>
                    <td ><input type="text" name="" value="" placeholder="username"></td>
				</tr>

				<tr>
					<td>Phone No:</td>
				</tr>
				<tr>	
					<td><input type="text" name="" value=""></td>

				</tr>
				
				<tr>
					<td>Email:</td>
				</tr>
				<tr>	
					<td><input type="email" name="" value=""></td>

				</tr>
				<tr>
					<td>Date of Birth:</td>
				</tr>
				<tr>	
					<td> <input type="date" name="" value=""></td>

				</tr>

				<tr>
					<td>Gender: </td>
				</tr>
				<tr>	
					<td><input type="radio" name="gender" value=""> Male
		                <input type="radio" name="gender" value=""> Female
		                <input type="radio" name="gender" value=""> Other
		                <input type="text" name="" value="">
		            </td>

				</tr>

				<tr>
					<td>Address:</td>
				</tr>
				<tr>	
					<td>
		               <textarea></textarea>
		           </td>

				</tr>
				<tr>
					<td>Type of account:</td>
				</tr>
				<tr>	
					<td>
		               <input type="checkbox" name="" value=""> Savings
		               <input type="checkbox" name="" value=""> Current
		               <input type="checkbox" name="" value=""> Other
		               <input type="text" name="" value="">
		           </td>

				</tr>

				<tr>
					<td>Image:</td>
				</tr>
				<tr>	
					<td>
		               <input type="file" name="myfile"/>
		           </td>

				</tr>

				<tr>
					<td>Picture of NID/Birth Certificate:</td>
				</tr>
				<tr>	
					<td>
		               <input type="file" name="myfile"/>
		           </td>

				</tr>


				<tr>
					<td><input type="submit" name="ADD" value="ADD" onclick="return validateform4()" style="color:black;background-color:AntiqueWhite;"></td>
				</tr>

			</table>



	

             

</table>


</body>
</html>