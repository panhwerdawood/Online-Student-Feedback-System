<?php
	extract($_POST);
	if(isset($save))
	{	
	
	mysqli_query($conn,"update faculty set Name='$n',designation	='$desg',programme='$prg',semester='$sem',mobile='$mob',	password='$pass' where email='".$_SESSION['faculty_login']."'");	

$err="<font color='green'>Faculty Details updated</font>";

	}

$con=mysqli_query($conn,"select * from faculty where email='".$_SESSION['faculty_login']."'");

$res=mysqli_fetch_assoc($con);	
//print_r($res);
?>


<!--<h3 class="page-header">Update Profile</h3>
--><div class="col-lg-8" style="margin:15px;">
	<form method="post">
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label><?php echo @$err;?></label>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Name:</label>
            	<input type="text" value="<?php echo @$res['Name'];?>" name="n" class="form-control" required>
        </div>
   	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Designation:</label>
            	<select name="Designation" class="form-control" required>
                    
                    <option>Select Designation</option>
                    <option>Assistant Lecturer</option>
                    <option>Lecturer</option>
                    <option>Assistant professor</option>
                    <option>Associate professor</option>
                    <option>Professor</option>
                    </select>
        </div>
   	</div>
 	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Email :</label>
            	<input type="email" value="<?php echo @$res['email'];?>"  name="email" readonly="true" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Password :</label>
          <input type="text" value="<?php echo @$res['password'];?>"  name="pass" class="form-control" required>
        </div>
    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Programme:</label>
            <label>Department:</label>
              <select name="prg" value="<?php echo @$res['programme'];?>" class="form-control" required>
                    
                    <option>Select Department</option>
                    <option>CSE</option>
                    <option>EEE</option>
                    <option>MPE</option>
                    <option>SW</option>
                    <option>BTM</option>
                    <option>CEE</option>
                    </select>
        </div>

    </div>
	
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Semester</label>
            <select name="sem" value="<?php echo @$res['semester'];?>" class="form-control" required>
                    
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
        </div>
    </div>
                  
	<div class="control-group form-group">
    	<div class="controls">
        	<label>Mobile Number:</label>
            	<input type="number" id="mob" value="<?php echo @$res['mobile'];?>" class="form-control" maxlength="10" name="mob"  required>
        </div>
  	</div>
	
	<div class="control-group form-group">
    	<div class="controls">
            	<input type="submit" class="btn btn-success" name="save" value="Update  Profile">
        </div>
  	</div>
	</form>


</div>