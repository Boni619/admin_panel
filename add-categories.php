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
     
         $name=$_POST['name'];

          $sql="INSERT INTO `category` (`name`) values('$name') ";
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
             <form method="post" enctype="multipart/form-data" class="form-horizontal">
                  <div class="form-group">
                    <label for="inputName"  class="col-sm-2 control-label">Add Caregory</label>

                    <div class="col-sm-10">
					<!--<input type="hidden" name="id" id="id" value="<?= $id; ?>"> !-->
                      <input type="text" name="name" class="form-control" id="inputName"  placeholder="Title">
                    </div>

                  
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" name="submit" class="btn btn-danger">Submit</button>
        
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
include 'footer.php';
?>