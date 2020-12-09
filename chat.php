
<?php
$name=$_GET['uname'];
$pin=$_GET['pin'];

include"connect.php";

$find=mysqli_query($con,"SELECT * FROM reg WHERE uname='$name' and passkey='$pin'")   ;
$row=mysqli_num_rows($find)  ;
$fop=mysqli_fetch_array($find);
$picx=$fop['pix'];
if($row<1){  
echo"<script>
  alert('Invalid Password or Username') ;
  window.location='index.html';
  </script>"; 
exit();
}

?>
<html>
<head>
<title>Friendz_HOME</title>

<link rel="stylesheet" type="text/css" href="css/style.css">
     <script type='text/javascript'>
      <!--
      function godwin(){
       var sam;
       if(confirm('Are you sure you want to logout......?')) {
        window.location='index.html';     }
        else{
         window.location='';     
        }

      }
         now= new Date();
/**document.write("Time: " + now.getHours() + ":" + now.getMinutes() + "<br>");
document.write("Date: " + (now.getMonth() + 1) + "/" + now.getDate() +"/" +
(1900 + now.getYear()));**/
      //-->
      
     </script>
             
</head>
<body>


       <img src="images/friendz2.png" width="100%" height="150"> <br><br><br>
 <div class="head"><h1>FRIENDZ FORUM</h1><h2 class="h2"><a href="index.html" style="color:#ffffff">HOME</a></h2> </div>
    <div class="body3"> 
 
   <div style="float: right; font-family:trebuchet ms;"><?php echo "Hello ".$name?><a href='search.php?uname=$name&passkey=$pin'><img src="img/<?php echo $picx;?>" width="80" height="80"></a><br>&nbsp;&nbsp;
  &nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  &nbsp;
  &nbsp;<a href='javascript:godwin()'>logout</a></div> 

<script src="js/jquery.min.js"  ></script>

<script>
$(document).ready(function() {
$("#my_dialog").css("display","none");
setTimeout(function() { $( "#my_dialog" ).dialog(); }, 4000);
})
</script>
<script type="text/javascript">
    $(document).ready(function ()
{
    //Fade in delay for the background overlay (control timing here)
    $("#bkgOverlay").delay(4800).fadeIn(400);
  //Fade in delay for the popup (control timing here)
    $("#delayedPopup").delay(5000).fadeIn(400);
    
    //Hide dialouge and background when the user clicks the close button
    $("#btnClose").click(function (e)
    {
        HideDialog();
        e.preventDefault();
    });
});
//Controls how the modal popup is closed with the close button
function HideDialog()
{
    $("#bkgOverlay").fadeOut(400);
    $("#delayedPopup").fadeOut(300);
}

</script>
</head>
<body>

<div id="bkgOverlay" class="backgroundOverlay"></div>
  
<div id="delayedPopup" class="delayedPopupWindow">
  <!-- This is the close button -->
  <a href="#" id="btnClose" title="Click here to close this deal box.">[ X ]</a>

  How do you feel? <br/><br/>

<?php

 $sit=mysqli_query($con,"SELECT * FROM emotion ");
 while($roz=mysqli_fetch_array($sit)){
?>
<a target="blank" href='result.php?id=<?php echo $roz['id'];?>'><img src="images/<?php echo $roz['image'];?>"  height="80" width="80"></a>
<?php } ?>
 
  </div>

</div>


 <form action="" method="post" enctype="multipart/form-data">
    
    <br>
    
       <div align="center">
        <textarea name="chat" cols="70" rows="3" required="required" class="input"></textarea>


      
        <label>
        <input type="submit" name="comment"  value="Send" class="submit">
        </label>

</div>
    </form>  </html>
    <?php

 if(isset($_POST['comment'])) {
    $chat=$_POST['chat'];
    $date=date("d-m-y @ g:i A");    
mysqli_query($con,"INSERT INTO chat(chat,name,pic,date) VALUES('$chat','$name','$picx','$date')");
 }    ?>

<?php 
 
  $seat=mysqli_query($con,"SELECT * FROM chat order by ID_NO DESC ");
 while($row3=mysqli_fetch_array($seat)){
 $chat=$row3['chat'];    
  $name=$row3['name'];
  $pix=$row3['pic'];
 $date=$row3['date'];

       echo"<div style='width: auto; height: auto;  box-shadow:2px 10px 23px #888888;  background-color: #fff ; margin:auto; word-wrap:break-word;'>";
   
           echo"<div style='width:auto; height:auto ;  box-shadow:2px 10px 23px #888888;  background-color: #fff ; margin:auto; word-wrap:break-word;'>";
   
   
          echo"<table>
             <tr><td><img src=img/$pix width=90 height=75></td>
          
        <td>  $chat</td></tr></table>";
        echo"<hr>";
          echo"<div style='float:right; font-size:12px;'>$name &nbsp;&nbsp; $date</div>";
               
     echo"</div><br>"; echo" </div> "; 
 }
 
   echo"<br><br>";     
      echo"<br><br>";

      
 
   
?>
 
<br>   <br>  <br>  

  
   <div id="fam"> <br>Friendz Copyright &copy; &nbsp;<script>document.write((now.getYear() + 1900)) ;</script> by Godwin<br><br></div>

   
   
    </body>
</html>