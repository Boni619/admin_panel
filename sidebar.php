<?php
			 $showdata=mysql_query("select * from `admin`   where 	`email`='$sessionid' ");
	 
	$data=mysql_fetch_array($showdata);
			 ?>
 <aside class="main-sidebar">
   <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="img/<?= $data['image']; ?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
		
          <p><?= ucfirst($username);?></p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
      
        <li class="active treeview">
          <a href="#">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="home.php"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
           </ul>
        </li>
        
        
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>POST</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-post.php"><i class="fa fa-plus"></i> Add Post</a></li>
            <li><a href="view-post.php"><i class="fa fa-list"></i> View Post</a></li>
            
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pencil"></i> <span>Categories</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="add-categories.php"><i class="fa fa-plus"></i>Add Categories</a></li>
            <li><a href="view-categories"><i class="fa fa-list"></i>View Categories</a></li>
          </ul>
        </li>
        <li>
         <li class="treeview">
          <a href="#">
            <i class="fa fa-share-square-o"></i> <span>Social madia</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-facebook-square"></i>Facebook link</a></li>
            <li><a href="#"><i class="fa fa-twitter"></i>Twitter link</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-envelope"></i> <span>Email</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="#"><i class="fa fa-envelope-o" ></i>Mails</a></li>
           
          </ul>
        </li>
       
      </ul>
    </section>

 </aside>