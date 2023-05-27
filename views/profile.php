<!DOCTYPE html>
<html>
<head>
	<title>PROFILE</title>
</head>
<script>  
function validateform(){   
var password=document.myform.password.value;  
  
if(password.length<6)
{  
  alert("Password must be at least 6 characters long.");  
  return false;  
  }  
}  
</script> 
<body background="../asset/img1.png">

	<h1 style="text-align:center;background-color:gray;">PROFILE</h1>
	<hr style="height:2px;color:black;background-color:black;">
    <left>
		<a href="home.php" style="color: black;background-color:AntiqueWhite;text-decoration:none;">Back </a> ||
		<a href="../controller/logout.php" style="color: black;background-color:AntiqueWhite;text-decoration:none;">logout </a>
	</left>
	<table align="center">
				
				<tr>
                    <td ><img src="../asset/img2.png" width="100px" height="100px"></td>
				</tr>
				
				<tr>
					<td>Edit Profile Picture:</td>
				</tr>
				<tr>	
					<td><input type="file" name="myfile"/></td>

				</tr>

				<tr>
					<td>Change Password:</td>
				</tr>
				<tr>	
					<td><input type="Password" name="" value="" placeholder="New Password"></td>

				</tr>  

				<tr>
					<td><input type="submit" name="Save" value="Save" onclick="return validateform()" style="color:black;background-color:AntiqueWhite;"></td>
				</tr>

			</table>
</body>
</html>


