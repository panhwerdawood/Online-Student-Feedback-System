<?php 
extract($_POST);
if(isset($save))
{

	if($e=="" || $p=="")
	{
	$err="<font color='red'>fill all the fileds first</font>";	
	}
	else
	{

$sql=mysqli_query($conn,"select * from faculty where email='$e' and password='$p'");

$r=mysqli_num_rows($sql);

if($r==true)
{
$_SESSION['faculty_login']=$e;
header('location:faculty');
}

else
{

$err="<font color='red'>Invalid login details</font>";

}
}
}

?>
<h1>FACULTY LOGIN</h1>
<div class="row">
		<div class="col-sm-2"></div>
		<div class="col-sm-8">

<form method="post">
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-5"><h2 class="heading">Enter Login Detals</h2></div>
	</div>
	
	<div class="row">
		<div class="col-sm-4"></div>
		<div class="col-sm-4"><?php echo @$err;?></div>
	</div>
	
	
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"id="fileds"><b>Email</b></div>
		<div class="col-sm-5">
		<input type="email" name="e" class="form-control"id="fileds"placeholder="Faculty@example.com"/></div>
	</div>
	
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"id="fileds"><b>Password</b></div>
		<div class="col-sm-5">
		<input type="password" name="p" class="form-control"id="fileds" placeholder="*********"/></div>
	</div>
	<div class="row" style="margin-top:10px">
		<div class="col-sm-4"></div>
		<div class="col-sm-8">
		<input type="submit" value="LOGIN" name="save" class="btn btn-info" id="button1"/>
		
		</div>
	</div>
</form>	
</div>
</div>