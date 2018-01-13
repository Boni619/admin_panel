<?php
include 'connection.php';

if(isset($_GET['msg'])){
$cid=$_GET['msg'];
$sql=mysql_query("delete from `post` where `id`='$cid'");
}
 ?>
<?php
 include 'header.php';

 include 'sidebar.php';
 ?>
  <div class="content-wrapper">
   <section class="content">
    <div class="row">
     <div class="col-xs-12">
         
            
       <div class="box">
            <div class="box-header">
              <h3 class="box-title">View all the posts</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <table id="example1" class="table table-bordered table-striped">
                <thead>

             <?php
                $select="SELECT * FROM `post`";
                $sql_query=mysql_query($select);
                while($data=mysql_fetch_array($sql_query)){
               ?>

                <tr>
                  <th>Ttile</th>
                  <th>Category</th>
                  <th>Contant</th>
                  <th>Image</th>
                  <th>Action</th>
                </tr>
                </thead>
                <tbody>
                <tr>
                  <td><?= $data['title']; ?> </td>
                  <td><?= $data['category']; ?>
                  </td>
                  <td><?= $data['contant']; ?></td>
                  <td><img src="img/blog/<?= $data['image']; ?>" style="height:70px;"></img></td>
                 
                  
                  <td><a href="">Edit</a>/ <a href="view-post.php?msg=<?= $data['id'];?>">Delete</a></td>
               
                </tr>
                <?php } ?>
                </tbody>
               
               
              </table>
            </div>
   
          </div>
       
        </div>
      
      </div>
   
    </section>
  
</div>



<?php
include 'footer.php';
?>
