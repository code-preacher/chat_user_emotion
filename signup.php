<?php
include("connect.php");


if(isset($_POST['submit'])){     
    $fname=$_POST['fname'];
     $mname=$_POST['mname']; 
      $sname=$_POST['sname']; 
      $uname=$_POST['uname']; 
      $passkey=$_POST['passkey'] ;
       $address=$_POST['address']; 
             $phone_no=$_POST['phone_no']; 
            
        $occupation=$_POST['occupation']; 
              $gender=$_POST['gender'];
              $state=$_POST['state'];
              $lga=$_POST['lga'];
              $day=$_POST['day'] ;
              $month=$_POST['month'];
              $year=$_POST['year'];
                        $pikx=$_FILES['pix']['name'];
          $temp=$_FILES['pix']['tmp_name'];
          $folder="img/" ;   
          $pos=strpos($pikx,'.');
$len=strlen($pikx);
$ext=substr($pikx, $pos, $len); 
            $pikx=str_replace($pikx,'.',rand(00000,99999).$ext );         
        $pix="friendz"."_".$uname."_"."$pikx";

          $date=date("d/m/y \@ g:i A");
          
          move_uploaded_file($temp,$folder.$pix)  ;
          
          

$uname=$_POST['uname']; 
$r=mysqli_query($con,"select uname from reg where uname='$uname'");
$g=mysqli_num_rows($r);
    
    
    if($g>0){
      echo" <script> alert('Username already in use,please choose a different one');
        window.location='signup.php';      </script>
        ";
       exit();
    }
        
mysqli_query($con,"INSERT INTO reg(fname,mname,sname,uname,passkey,address,phone_no,occupation,gender,state,lga,day,month,year,pix,date) VALUES ('$fname','$mname','$sname','$uname','$passkey','$address','$phone_no','$occupation','$gender','$state','$lga','$day','$month','$year','$pix','$date')");
   
   header("location:index.html");
}




?>


<!DOCTYPE html>
 <html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Friendz_Registration</title>
<style type="text/css">
.sam2{ padding:1px;    color:rgb(204,204,205);  font-size:16;
float:right;     position:relative;
}
.input{
height:38px; color:gray; width:250px; font-family:trebuchet ms; font-size:16; border-radius:7px; position:relative;
}
.input2{height:35px; color:gray; width:70px; font-family:trebuchet ms; font-size:16; border-radius:7px; position:relative; }
.input3{height:35px; color:gray; width:70px; font-family:trebuchet ms; font-size:16; border-radius:7px; position:relative;}
.submit{
background:#0F7ACC;          border-radius:25px;
color:white;
font-size:15;
font-family:trebuchet ms;
font-weight:bolder; width:110px; height:38px; cursor:pointer;   position:relative;
}
.submit:hover{
background:white;
color:black;
font-size:16;
font-family:trebuchet ms;
font-weight:bolder;      position:relative;
}
.main{ width:700px; height:680px; font-size:20; position:relative;}
.main2{background:white; color:#0F7ACC; font-size:16; height:1298px; width:780px;  border:1px solid gray;box-shadow: -2px 10px 30px #000;
margin:auto; border-radius:0px 0px 25px 25px; padding:17px;  position:relative; font-family: trebuchet ms; 
}
#fam{ background:#000000; width:100%; height:90px; text-align:center; color:white; font-size:25px; font-weight:bolder;font-family: trebuchet ms;  }

</style>
<script language="JavaScript">
<!-- hide
now= new Date();
/**document.write("Time: " + now.getHours() + ":" + now.getMinutes() + "<br>");
document.write("Date: " + (now.getMonth() + 1) + "/" + now.getDate() + "/" +
(1900 + now.getYear()));**/
// -->
</script>


</head>

<body>
<img src="images/friendz2.png" width="100%" height="190"><br>

<div class="main2">
<div style="background:#f2f2f2; color:#0F7ACC; text-align:center; width:775px; height:30px; font-family:trebuchet ms;">
Please fill all required information correctly in other for us to know you better....<a href="index.html">Back to Login</a></div><br>
<div class="sam2">
<form action="signup.php" method="post" enctype="multipart/form-data">
<img src="images/passport.png" width="120" height="120"><br><br>Upload Image<br><br><input type="file" value="upload" name="pix" title="Please select an image" required="required"></div>
<table >     <tr><td>
 
First name:<br><input type="text"  required="required" name="fname" title="Please enter your First name" placeholder="First name" class="input">
<br><br>Middle name:<br><input type="text"  required="required" name="mname" title="Please enter your Middle name" placeholder="Middle name" class="input">
<br><br>Surname:<br><input type="text"  required="required" name="sname" title="Please enter your Surname" placeholder="Surname" class="input">
<br><br>Username:<br><input type="text" required="required" name="uname" title="Please enter your Username" placeholder="Username" class="input">
 <br><br>Password:<br><input type="password" required="required" name="passkey" title="Please enter your Password" placeholder="Password" class="input">
<br><br>Address:<br><input type="text" required="required" name="address" title="Please enter your Address" placeholder="Address" class="input">
 <br><br>Phone Number:<br><input type="text" placeholder="Phone Number" required="required" name="phone_no" title="Enter Phone_Number" class="input">
<br><br>Occupation:<br>
<select class="input" name="occupation">
<option value="-------Select_Occupation-------">---------Select_Occupation--------</option>
<option value="Student">Student</option>
<option value="Employed">Employed</option>
<option value="Unemployed">Unemployed</option>
<option value="Business_Personnel">Business_Personnel</option>
</select> <br>  <br>  
 Gender:<br> 
<select class="input" name="gender" required="required" title="Please Select Your Gender">
<option value="-------Select_Occupation-------">----------Select_Gender------</option>
<option value="Male">Male</option>
<option value="Female">Female</option>
<option value="Both">Both</option> </select>


<br><br>State:<br><input type="text"  placeholder="State" required="required"  name="state" title="Enter Your State" class="input">
 <br><br>
 L.G.A:<br><input type="text"  placeholder="LGA" required="required"  name="lga" title="Enter Your Local government" class="input">

<br>               <br>

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span>Date Of Birth:</span> <br> 
<select name="day" required="required" title="Please Select day of Birth" class="input2" >
<option  value="Day">Day</option>
<option value="1">1</option>
<option value="2">2</option>
<option value="3">3</option>
<option value="4">4</option>
<option value="5">5</option>
<option value="6">6</option>
<option value="7">7</option>
<option value="8">8</option>
<option value="9">9</option>
<option value="10">10</option>
<option value="11">11</option>
<option value="12">12</option>
<option value="13">13</option>
<option value="14">14</option>
<option value="15">15</option>
<option value="16">16</option>
<option value="17">17</option>
<option value="18">18</option>
<option value="19">19</option>
<option value="20">20</option>
<option value="21">21</option>
<option value="22">22</option>
<option value="23">23</option>
<option value="24">24</option>
<option value="25">25</option>
<option value="26">26</option>
<option value="27">27</option>
<option value="28">28</option>
<option value="29">29</option>
<option value="30">30</option>
<option value="31">31</option>
</select>
                        
              <select name="month"  required="required" title="Please Select month of Birth" class="input2">
               <option value="Month">Month</option>
                        <option value="January">January</option>
                           <option value="February">February</option>
                             <option value="March">March</option>
                            <option value="April">April</option>
                             <option value="May">May</option>
                         <option value="June">June</option>
                        <option value="July">July</option>
                    <option value="September">September</option>
                 <option value="October">October</option>
                <option value="November">November</option>
            <option value="December">December</option>
        </select>
                                           
                <select name="year" required="required" title="Please Select Year of Birth" class="input2">
                     <option value="Year">Year</option><option value="2013">2013</option>
                     <option value="2012">2012</option><option value="2011">2011</option>
                     <option value="2010">2010</option><option value="2009">2009</option>
                     <option value="2008">2008</option><option value="2007">2007</option>
                     <option value="2006">2006</option><option value="2005">2005</option>
                     <option value="2004">2004</option><option value="2003">2003</option>
                     <option value="2002">2002</option><option value="2001">2001</option>
                     <option value="2000">2000</option><option value="1999">1999</option>
                     <option value="1998">1998</option><option value="1997">1997</option>
                     <option value="1996">1996</option><option value="1995">1995</option>
                     <option value="1994">1994</option><option value="1993">1993</option>
                     <option value="1992">1992</option><option value="1991">1991</option>
                     <option value="1990">1990</option><option value="1989">1989</option>
                     <option value="1988">1988</option><option value="1987">1987</option>
                     <option value="1986">1986</option><option value="1985">1985</option>
                     <option value="1984">1984</option><option value="1983">1983</option>
                     <option value="1982">1982</option><option value="1981">1981</option>
                     <option value="1980">1980</option><option value="1979">1979</option>
                     <option value="1978">1978</option><option value="1977">1977</option>
                     <option value="1976">1976</option><option value="1975">1975</option>
                     <option value="1974">1974</option><option value="1973">1973</option>
                     <option value="1972">1972</option><option value="1971">1971</option>
                     <option value="1970">1970</option><option value="1969">1969</option>
                     <option value="1968">1968</option><option value="1967">1967</option>
                     <option value="1966">1966</option><option value="1965">1965</option>
                     <option value="1964">1964</option><option value="1963">1963</option>
                     <option value="1962">1962</option><option value="1961">1961</option>
                     <option value="1960">1960</option><option value="1959">1959</option>
                     <option value="1958">1958</option><option value="1957">1957</option>
                     <option value="1956">1956</option><option value="1955">1955</option>
                     <option value="1954">1954</option><option value="1953">1953</option>
                     <option value="1952">1952</option><option value="1951">1951</option>
                                     </select>  </td></tr></table>                          
         <br>  <br> <br> <br> 
       <hr color="gray" width="670"> 
       
      

    
<br><center><input type="submit" value="Register" class="submit" name="submit">&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="Clear" class="submit" ></center></form>


</div>
  </center>   </div> 
      <br>  <br>  <br>
<div id="fam"> <br>Friendz Copyright &copy; &nbsp;<script>document.write((now.getYear() + 1900)) ;</script> by blessing</div>
    

</form>
</body>
</html>
