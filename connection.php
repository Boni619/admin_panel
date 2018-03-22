<?php
@session_start();
$conn1=mysql_connect("localhost","root","");
$conn=mysql_select_db("blog");





if(!$conn){
echo ('database not selected');
}
   

?>