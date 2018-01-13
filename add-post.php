<?php
include 'connection.php';
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>AdminLTE 2 | User Profile</title>
  
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
<?php
include 'header.php';
include 'sidebar.php';
?>
<?php
if(isset($_POST['submit'])){

$title=trim ($_POST['title']);
$contant=addslashes($_POST['contant']);
$category=$_POST['category'];

$image=$_FILES['image']['name'];
$temp_name=$_FILES['image']['tmp_name'];
$path="img/blog/$image";
move_uploaded_file($temp_name,$path);


$sql="INSERT INTO `post` (`title`,`contant` ,`category`,`image`)values('$title','$contant','$category','$image')";

mysql_query($sql);


}

?>



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
       
        <!-- /.col -->
        <div class="col-md-12">
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              
              <li><a href="#settings" data-toggle="tab">Settings</a></li>
            </ul>
            <div class="tab-content">
              
             
              <!-- /.tab-pane -->

              <div class="tab-pane active" id="settings">
                <form method="post" enctype="multipart/form-data" action="" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName"  class="col-sm-2 control-label">Title</label>

                    <div class="col-sm-10">
					<!--<input type="hidden" name="id" id="id" value="<?= $id; ?>">!-->
                      <input type="text" name="title" class="form-control" id="inputName"  placeholder="Title">
                    </div>
                  </div>
                   <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Select Category</label>

                    <div class="col-sm-10">
                      <select class="form-control" name="category" >
                      <option value="">--Select Category--</option>
                      <?php

                      $select="SELECT * FROM `category` ORDER BY `name`";

                       $select_query=mysql_query($select);
                       while($data=mysql_fetch_array($select_query)){
                      
                       ?>
                       
                      <option value="<?= $data['name']; ?>"> <?= $data['name']; ?></option>
                      
                       <?php } ?>
                      </select>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputExperience" class="col-sm-2 control-label">Contant</label>

                    <div class="col-sm-10">
                      <textarea name="contant" class="form-control"></textarea>
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
  
  <script src="https://cdn.ckeditor.com/4.5.7/standard/ckeditor.js"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="tinymce/js/tinymce.min.js"></script>
<script>tinymce.init({ selector:'textarea' });</script>






<?php
include 'footer.php';
?>