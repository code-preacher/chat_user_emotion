<?php   
   $name=$_GET['uname'];
$pin=$_GET['passkey'];
include_once("connect.php");



      $pat=mysqli_query($con,"select * from reg  WHERE uname='$name' and passkey='$pin'") ;
      $doe=mysqli_fetch_array($pat);   
      $pass=$doe['passkey'] ;
    $fname=$doe['fname'];
     $mname=$doe['mname']; 
      $sname=$doe['sname']; 
      $uname=$doe['uname'];  
       $address=$doe['address']; 
             $phone_no=$doe['phone_no']; 
                     $occupation=$doe['occupation']; 
              $gender=$doe['gender'];
              $state=$doe['state'];
              $lga=$doe['lga'];
              $day=$doe['day'] ;
              $month=$doe['month'];
              $year=$doe['year'];

              

          $pix=$doe['pix'] ;
           
          $date=$doe['date'];
          

 if(isset($_POST['updat'])) {
     $np=$_POST['name'];
       $pikx=$_FILES['pix']['name'];
          $tmp=$_FILES['pix']['tmp_name'];
          $folder="img/" ;   
          $pos=strpos($pikx,'.');
$len=strlen($pikx);
$ext=substr($pikx, $pos, $len); 
            $pikx=str_replace($pikx,'.',rand(00000,99999).$ext );         
        $pixz="friendz"."_".$np."_"."$pikx";
        move_uploaded_file($tmp,$folder.$pixz);
      
       mysqli_query($con,"update reg SET uname='$np',pix='$pixz' WHERE passkey='$pin'") ;
        header("location:search.php?uname=$np&passkey=$pin");
      } 

echo"

<!DOCTYPE html>
 <html>
<head>
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=utf-8\" />
<title>E-ADMISSION_Registration_details</title>
<style type=\"text/css\">
.sam2{ padding:1px;    color:rgb(204,204,205);  font-size:16;
float:right;     position:relative;
}
ul li a{text-decoration: none; color: white;text-decoration:none; font-family:comic sans ms; font-size:33; font-weight:lighter; color:white;}
ul li a:visited{color: white; }
.head{background-color: #708090; width: 991px; height:50px; border-radius:7px;}
h1{ text-align:center; text-decoration:none; font-family:comic sans ms; font-size:33; font-weight:lighter; color:white;}
h4{ text-align:left; text-decoration:none; font-family:comic sans ms; font-size:28; font-weight:lighter; color:white;}

.h3{margin:-30px 0px 0px 13px; color:black; position:fixed;}
h2{ text-align:center; text-decoration:none; font-family:comic sans ms; font-size:28; font-weight:lighter; color:white;}
.h2{margin:-63px 0px 0px 740px;}

.input{
height:30px; color:gray; width:250px; font-family:comic sans ms; font-size:16; border-radius:7px; position:relative;
}
.input2{height:35px; color:gray; width:70px; font-family:comic sans ms; font-size:16; border-radius:7px; position:relative; }
.input3{height:35px; color:gray; width:70px; font-family:comic sans ms; font-size:16; border-radius:7px; position:relative;}
.submit{
background:#708090;
color:white;
font-size:15px;
font-family:comic sans ms;
font-weight:bolder; border-radius:25px;
}
.submit:hover{
background:white;
color:black;
font-size:16px;
font-family:comic sans ms;
font-weight:bolder;
}
.fieldset{ width:700px; height:800px; font-size:20; position:relative;border:1px solid #f2f2f2;}
.main2{background:white; color:#00000d; font-size:16; height:850px; width:780px; border:1px solid #f2f2f2;box-shadow: -2px 10px 30px #000;
margin:auto; border-radius:0px 0px 25px 25px; padding:17px;  position:relative; font-family: comic sans ms; 
}
#fam{ background:#00000d; width:100%; height:auto; text-align:center; color:white; font-size:25px; font-weight:bolder;font-family: comic sans ms;  }
  .damd{ float:right; background:transparent; width:auto; height:auto; }
  ul li{
   text-decoration:none; font-family:comic sans ms; font-size:33; font-weight:lighter; color:white;
  width:260px;

float:left;
padding:6px;
margin: 5px 24px 24px 15px; 
list-style: none outside none;
}
</style>
<script language=\"JavaScript\">
<!-- hide
now= new Date();
/**document.write(\"Time: \" + now.getHours() + \":\" + now.getMinutes() + \"<br>\");
document.write(\"Date: \" + (now.getMonth() + 1) +\"/\" + now.getDate() + \"/\" +
(1900 + now.getYear()));**/
// -->
</script></head>

<body>
<img src=\"images/friendz2.jpg\" width=\"100%\" height=\"100\"><br>
<div class=\"head\">
 <ul><li><a href='chat.php?uname=$name&pin=$pin'>BACK</a></li>
    <li>REGISTRATION DETAILS</li>
    <li><a href=\"index.html\">HOME</a></li>
     </ul>
  </div>
   ";

     echo"<br>
<div class=\"main2\">
 <fieldset class=\"fieldset\"><div class=\"sam2\"><img src=\"img/$pix\" width=\"120\" height=\"120\"><br><br<br>Image</div>
<div class=\"mainform\"><br>
 
First name:&nbsp;&nbsp;&nbsp;$fname<br>  <br> 
Middle name:&nbsp;&nbsp;&nbsp;$mname<br>  <br> 
Surname:&nbsp;&nbsp;&nbsp;$sname<br>  <br> 
Username:&nbsp;&nbsp;&nbsp;$uname<br>  <br> 
Phone Number:&nbsp;&nbsp;&nbsp;$phone_no<br>  <br> 
Gender:&nbsp;&nbsp;&nbsp;$gender<br> <br> 
Address:&nbsp;&nbsp;&nbsp;$address<br> <br> 
Occupation:&nbsp;&nbsp;&nbsp;$occupation<br><br>  
State:&nbsp;&nbsp;&nbsp;$state<br><br>
L.G.A:&nbsp;&nbsp;&nbsp;$lga<br><br>
Date of Birth:&nbsp;&nbsp;&nbsp;$day|$month|$year<br><br>
   ";
   
   echo"
  <div style='float:right;'>   <fieldset style='border:1px solid #f2f2f2;'>
   <form action=\"\" method=\"post\" enctype=\"multipart/form-data\">
   Change Username and profile picture <hr>
<img src=\"images/passport.png\" width=\"70\" height=\"70\"><br>Upload Image<br><input type=\"file\" value=\"upload\" name=\"pix\" title=\"Please select an image\" required=\"required\">
   <br>
 
Username:<br><input type=\"text\" pattern=\"[A-Za-z]+\" required=\"required\" name=\"name\" title=\"Please enter your Username\" placeholder=\"Username\" class=\"input\">
       
<br><center><input type=\"submit\" value=\"Change\" class=\"submit\" name=\"updat\">&nbsp;&nbsp;&nbsp;&nbsp;<input type=\"reset\" value=\"Clear\" class=\"submit\" ></center></form>
       </fieldset>
  
  
  </div>

</fieldset>  </div>
";    
?>

<?
   
?>

 <br>  <br>  <br>
<div id="fam"> <br>FRIENDZ Copyright &copy; &nbsp;<script>document.write((now.getYear() + 1900)) ;</script> by ochikul<br><br></div>
      


</body>
</html>