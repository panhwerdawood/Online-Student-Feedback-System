
<?php 
extract($_POST);
if(isset($save))
{
//check user alereay exists or not
$sql=mysqli_query($conn,"select * from user where email='$e'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$err= "<font color='red'><h3 align='center'>This user already exists</h3></font>";
}
else
{
//dob
$dob=$yy."-".$mm."-".$dd;


//image
$imageName=$_FILES['img']['name'];


//encrypt your password
$pass=md5($p);


$query="insert into user values('','$n','$e','$pass','$mob','$pro','$sem','$gen','$imageName','$dob',now())";
mysqli_query($conn,$query);

//upload image

mkdir("images/$e");
move_uploaded_file($_FILES['img']['tmp_name'],"images/$e/".$_FILES['img']['name']);


$err="<font color='blue'><h3 align='center'>Registration successfull !!<h3></font>";

}
}




?>


		<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		<form method="post" enctype="multipart/form-data">
		<table class="table table-bordered" style="margin-bottom:50px">
			<caption><h2 align="center">REGISTRATION FORM</h2></caption>

				<Tr>
					<Td colspan="2"><?php echo @$err;?></Td>
				</Tr>
				
				<tr>
					<td>Full Name</td>
					<td><input  type="text" name="n" class="form-control" placeholder="Enter Your Full Name" required/></td>
				</tr>
				<tr>
					<td>Email</td>
					<td><input type="email" name="e" class="form-control" placeholder="Enter Your Email" required/></td>
				</tr>
				
				<tr>
					<td>Password </td>
					<td><input type="password" name="p" class="form-control" placeholder="Enter Your Strong Password" required/></td>
				</tr>
				
				<tr>
					<td>Mobile Number </td>
					<td><input type="text" name="mob" class="form-control" placeholder="Enter Your Mobile Number" required/></td>
				</tr>
				
				<tr>
					<td>Deparrment</td>
					<td><select name="pro" class="form-control" required>
					
					<option>Select Department</option>
					<option>CSE</option>
					<option>EEE</option>
					<option>MPE</option>
					<option>SW</option>
					<option>BTM</option>
					<option>CEE</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Semester</td>
					<td><select name="sem" class="form-control" required>
					
					<option>Select Semester</option>
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					</select>
					</td>
				</tr>
				
				<tr>
					<td>Gender</td>
					<td>
						Male <input type="radio" name="gen" value="m"/>
						Female <input type="radio" name="gen" value="f"/>	
					</td>
				</tr>
				
				
				
				<tr>
					<td>Upload Image </td>
					<td><input type="file" name="img" class="form-control"/></td>
				</tr>
				
				<tr>
					<td>Date of Birth</td>
					<td>
					<select style="width:100px;float:left" name="yy" class="form-control" required>
					<option value="">Year</option>
					<?php 
					for($i=1950;$i<=2016;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					<select style="width:100px;float:left" name="mm" class="form-control" required>
					<option value="">Month</option>
					<?php 
					for($i=1;$i<=12;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
 					
					<select style="width:100px;float:left" name="dd" class="form-control" required>
					<option value="">Date</option>
					<?php 
					for($i=1;$i<=31;$i++)
					{
					echo "<option>".$i."</option>";
					}					
					?>
					
					</select>
					
					</td>
				</tr>
				
				<tr>
					
					
					<td colspan="2" align="center">
						<input type="submit" value="Save" class="btn btn-info" name="save"/>
						<input type="reset" value="Reset" class="btn btn-info"/>				
					</td>
				</tr>
			</table>
		</form>
		</div>
		<div class="col-sm-2"></div>
		</div>
	</body>
</html>