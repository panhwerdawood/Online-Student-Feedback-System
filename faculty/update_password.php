<?php 
extract($_POST);
if(isset($save))
{

	if($np=="" || $cp=="" || $op=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{

$sql=mysqli_query($conn,"select * from faculty where password='$op' and email='".$_SESSION['faculty_login']."'");
$r=mysqli_num_rows($sql);
if($r==true)
{

	if($np==$cp)
	{
	$sql=mysqli_query($conn,"update faculty set password='$np' where email='".$_SESSION['faculty_login']."'");
	
	$err="<font color='blue'>Password updated </font>";
	}
	else
	{
	$err="<font color='red'>New  passwords fields does not match</font>";
	}
}

else
{

$err="<font color='red'>Wrong Old Password </font>";

}
}
}

?>
<h2 align="center">Update Password</h2><br>
<form method="post">
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your old Password</div>
		<div class="col-sm-12">
		<input type="password" name="op" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Enter Your New Password</div>
		<div class="col-sm-12">
		<input type="password" name="np" class="form-control"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4">Re-Enter Your New Password</div>
		<div class="col-sm-12">
		<input type="password" name="cp" class="form-control"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">
		
		
		<input type="submit" value="Update Password" name="save" class="btn btn-success1"/>
		<input type="reset" class="btn btn-success2"/>
		</div>
	</div>
</form>	