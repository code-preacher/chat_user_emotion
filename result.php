<?php 
include"connect.php";  

      $pat=mysqli_query($con,"select id,name from emotion  WHERE id=".$_GET['id']."") ;
      $doe=mysqli_fetch_array($pat);   
      $id=$doe['id'] ;
      $name=$doe['name'] ;
 ?>

<!DOCTYPE html>
 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Friendz_HOME</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<script language="JavaScript">
<!-- hide
now= new Date();
</script></head>

<body>
<br>
<div class="main2">

  <div style="height: 40px; background: #00000d;color: #fff;">
    <center>All results for mood </center>
  </div>

<div class="mainform"><br>
 <?php
 $sit=mysqli_query($con,"SELECT * FROM music where emotion='$name' ");
 while($roz=mysqli_fetch_array($sit)){
?>
<ul>
  <li><?php echo $roz['name'];?></li><br/><audio width="200" height="50" controls> <source src="music/<?php echo $roz['song'];?>" type="audio/mp3"></audio></ul>
<?php } ?>

  </div> 

</body>
</html>