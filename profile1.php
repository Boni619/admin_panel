<?php


include ("connection.php");

 $email=$_SESSION['id'];
			  list($username,$sessionid)=mysql_fetch_array(mysql_query("SELECT `fullname`,`id` FROM `admin` WHERE `email`='$email'  " ));
			  
			 

if(isset($_POST['submit']))
{
$id=$_POST['id'];	
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$mobile=$_POST['mobile'];


   $image=$_FILES['image']['name'];
   $temp_name=$_FILES['image']['tmp_name'];
   
   $path="img/$image";
   move_uploaded_file($temp_name,$path);
   
   if(!empty($name) && !empty($email) && !empty($password) && !empty($mobile))
   {
	   
	 $sql=("UPDATE `admin` SET 
	 `fullname`='$name',
	 `email`='$email',
	 `password`='$password',
	 `mobile`='$mobile'
	 WHERE `id`='$sessionid'
	 
	 ");
	 
	 
	 mysql_query($sql);
	$image_check=$_FILES['image']['name'];
	 if($image_check!="")
	 {
		 $sql=mysql_query("UPDATE `admin` SET `image`='$image' WHERE `id`='$sessionid' ");
	 }
	 //echo "<script>window.location='profile.php'; </script>";
	 
	

	 

   }
	
 }	



 
  $showdata=mysql_query("select * from `admin` where `id`='$sessionid' ");
	 
	$data=mysql_fetch_array($showdata);
?>




<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | User Profile</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

 <?php 
 
include ("header.php");

include 'sidebar.php';
?>
  
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        User Profile
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">User profile</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">

      <div class="row">
        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="img/<?= $data['image'];?>" alt="User profile picture">
 
              <h3 class="profile-username text-center"><?= ucfirst($username);?></h3>

              <p class="text-muted text-center">Software Engineer</p>

              

              <a href="#" class="btn btn-primary btn-block"><b>Follow</b></a>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Education</strong>

              <p class="text-muted">
                B.S. in Computer Science from the University of Tennessee at Knoxville
              </p>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Location</strong>

              <p class="text-muted">Malibu, California</p>

              <hr>

              <strong><i class="fa fa-pencil margin-r-5"></i> Skills</strong>

              <p>
                <span class="label label-danger">UI Design</span>
                <span class="label label-success">Coding</span>
                <span class="label label-info">Javascript</span>
                <span class="label label-warning">PHP</span>
                <span class="label label-primary">Node.js</span>
              </p>

              <hr>

              <strong><i class="fa fa-file-text-o margin-r-5"></i> Notes</strong>

              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam fermentum enim neque.</p>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              
             
              <!-- /.tab-pane -->

              <div class="tab-pane active" id="settings">
                <form method="post" enctype="multipart/form-data" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName"  class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
					<input type="hidden" name="id" id="id" value="<?= $id; ?>">
                      <input type="text" name="name" class="form-control" id="inputName" value="<?php echo $data['fullname'];?>" placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputEmail" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" id="inputEmail" value="<?php echo $data['email'];?>"  placeholder="Email">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Password</label>

                    <div class="col-sm-10">
                      <input type="text" name="password" class="form-control" id="inputName" value="<?php echo $data['password'];?>"  placeholder="Name">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Mobile</label>

                    <div class="col-sm-10">
                      <input type="number" name="mobile" class="form-control" id="mobile" value="<?php echo $data['mobile'];?>"  required pattern="[0,9]{10}">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="image" class="col-sm-2 control-label">image</label>

                    <div class="col-sm-10">
                      <input type="file" name="image" class="form-control" id="image" >
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <label>
                          <input type="checkbox"> I agree to the <a href="#">terms and conditions</a>
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php 
  
  include ("footer.php");
  
  ?>