<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
   <html dir="rtl">
     <style type="text/css">
body {
	background-color: #FCF;
}
  </style>  
  <link href="styl8.css" rel="stylesheet" type="text/css" />
  </head>
   
<body>
  <div class="kool3">
  <div class="nav"><form action="" method="post">
    <div class="mm">
      <table width="300" height="39" border="1">
        <tr>
          <td align="center">نام کالا</td>
          <td align="center">
            <label for="textfield4"></label>
            <input type="text" name="user3" id="textfield4" />
         </td>
          <td align="center">
            <input type="submit" name="b2" id="b2" value="جستجو" />
          </td>
        </tr>
      </table>
      
    </div>
    <div class="mm1">
      <table width="497" height="37" border="1">
        <tr>
          <td width="61" align="center">نام کالا</td>
          <td width="144" align="center">
            <label for="textfield5"></label>
            <input type="text" name="user4" id="textfield5" />
          </td>
          <td width="39" align="center">برند</td>
          <td width="149" align="center">
            <label for="textfield6"></label>
            <input type="text" name="user5" id="textfield6" />
         </td>
          <td width="70" align="center">
            <input type="submit" name="b3" id="button2" value="جستجو" />
          </td>
        </tr>
      </table>
    </div>
    </form>
  </div>
    
  <div class="menu1">
   
    <ul>
      <li><a href="t8.php">مشاهده اجناس </a></li>
      <li><a href="t3.php">رویت مشتریان </a></li>
      <li><a href="r3.php"> مدیریت مشتری</a></li>
      <li><a href="t5.php"> پرداختی مشتری</a></li>
       <li><a href="t7.php"> مدیریت پرداخت</a></li>
      <li><a href="t4.php"> حساب مشتری</a></li>
      <li > <a href="t2.php">رویت کالا</a></li>
      <li> <a href="t1.php">مدیریت کالا</a></li>
      <li > <a href="t6.php">مدیریت فاکتور خریدار</a></li>
      <li > <a href="t9.php">مدیریت صفحه اول</a></li>
      <li><a href="out.php">خروج</a></li>
    </ul> 
    </div>
  <div class="main1">
    <?php
	  $x=0;
	  $y=0;
  $a="";
$row2="";
	$res2="";
	$tabl="";
	$rec="";
	$d=0;
	$d2=1;
	$d4="";
	$r=array("m1","m2","m3","m4","m5","m6","m7","m8","m9","m10","m11","m12","m13","m14","m15");
	 $z=array("k1","k2","k3","k4","k5","k6","k7","k8","k9","k10","k11","k12","k13","k14","k15","k16","k17","k18","k19","k20",
	 "k21","k22","k23","k24","k25","k26","k27","k28","k29","k30","k31","k32","k33","k34","k35","k36","k37","k38","k39","k40",
	 "k41","k42","k43","k44","k45","k46","k47","k48","k49","k50","k51","k52","k53","k54","k55","k56","k57","k58","k59","k60",
	 "k61","k62","k63","k64","k65","k66","k67","k68","k69","k70","k71","k72","k73","k74","k75","k76","k77","k78","k79","k80",
	 "k81","k82","k83","k84","k85","k86","k87","k88","k89","k90","k91","k92","k93","k94","k95","k96","k97","k98","k99","k100",
	 );
	 $user3="";
	$user4="";
	$k="";
$user5="";
$kk="";
$hom="همه";
 //////////////////////////////////////////////جستجوی 1///////////////////////////////////
 
 
if(isset($_POST['b2'])){
//$d3='disabled';

$user3= $_POST['user3'];	

$link= mysqli_connect("localhost","root","","saba");
mysqli_query($link,"set character set utf8");
///echo" اطلاعات 646456456456 ثبت نشد";

if(!$user3 ){
	//$_POST['25'] =  "اطلاعات را کامل وارد کنید";
	//value.$_POST['25']=$_POST['25'] ;
	//$payam="ثبت نشد***اطلاعات را کامل وارد کنید فیلدها نباید خالی باشد";
	//echo $payam;
	 $val1="اطلاعات کالا را کامل وارد کنید";
	}
	else{
	
	$tabl=mysqli_query($link,"select * from kala");
$rcordnum=mysqli_num_rows($tabl);
$d=0;

for($rec=1 ; ($rec<= $rcordnum)  ; $rec++){
	$row=mysqli_fetch_array($tabl);
	if($user3 ==$hom ){ 
	//$d4=$r[$d];
	$x=10;
	$y=10;
	echo "<article class=$z[$d]> ";
	
   echo   "<table width='169' height='218' border='1' align='center'>";
     echo   "<tr>";
   echo       "<td height='146' colspan='3'><img src='$row[8] '  />  </td>";
     echo  " </tr>";
   echo     "<tr>";
     echo     "<td width='60' height='23'>$row[1]</td>";
     echo     "<td width='52'>$row[2]</td>";
   echo       "<td height='23'>$row[3]</td>";
     echo   "</tr>";
    echo    "<tr>";
     echo    " <td height='23' >$row[6]</td>";
	  echo    " <td height='23' >$row[5]</td>";
        echo  "<td width='10'><form id='form7' name='form7' method='post' action=''>";
        echo    "<label for='textfield'>$row[4]</label>";
     
      echo    "</form></td>";
     echo   "</tr>";
    echo  "</table>";
  
	echo "</article> ";
	
$d++;
$d2++;
      $val1=$z;

	
	}
	 else if($user3 == $row[1]){	
	//$d4=$r[$d];
	
	echo "<article class=$z[$d]>";
	
   echo   "<table width='169' height='218' border='1' align='center'>";
     echo   "<tr>";
   echo       "<td height='146' colspan='3'><img src='$row[8] ' />  </td>";
     echo  " </tr>";
   echo     "<tr>";
     echo     "<td width='60' height='23'>$row[1]</td>";
     echo     "<td width='52'>$row[2]</td>";
   echo       "<td height='23'>$row[3]</td>";
     echo   "</tr>";
    echo    "<tr>";
     echo    " <td height='23' colspan='2'>$row[6]</td>";
        echo  "<td width='10'><form id='form7' name='form7' method='post' action=''>";
        echo    "<label for='textfield'>قیمت</label>";
     
      echo    "</form></td>";
     echo   "</tr>";
    echo  "</table>";
  
	echo "</article> ";
	


$d++;
$d2++;
      $val1=$z;

	          }
	else{
		
	
		}
}}}

//$a= a();
//	echo $a;


///////////////////////////////////////////////اتمام جستجوی 1////////////////////////////


 
  /////////////////////////////////////////////////////جستجوی 2//////////////////////////////////////////
if(isset($_POST['b3'])){


$user4= $_POST['user4'];	
$user5= $_POST['user5'];
$link= mysqli_connect("localhost","root","","saba");
mysqli_query($link,"set character set utf8");
///echo" اطلاعات 646456456456 ثبت نشد";

if(!$user4 and !$user5 ){
	//$_POST['25'] =  "اطلاعات را کامل وارد کنید";
	//value.$_POST['25']=$_POST['25'] ;
	//$payam="ثبت نشد***اطلاعات را کامل وارد کنید فیلدها نباید خالی باشد";
	//echo $payam;
	 $val1="اطلاعات کالا را وارد کنید";
	}
	else{
	$row2="";
	$res2="";
	$tabl="";
	$rec="";
	$d1="";
	$tabl=mysqli_query($link,"select * from kala");
$rcordnum=mysqli_num_rows($tabl);
$d=0;
for($rec=1 ; ($rec<= $rcordnum)  ; $rec++){
	$row=mysqli_fetch_array($tabl);
	
	if(($user4 == $row[1]) and ($user5==$row[2])){
		$d1=1;
		
		
		echo "<article class=$z[$d]>";
	
   echo   "<table width='169' height='218' border='1' align='center'>";
     echo   "<tr>";
   echo       "<td height='146' colspan='3'><img src='$row[8]'/> </td>";
     echo  " </tr>";
   echo     "<tr>";
     echo     "<td width='60' height='23'>$row[1]</td>";
     echo     "<td width='52'>$row[2]</td>";
   echo       "<td height='23'>$row[3]</td>";
     echo   "</tr>";
    echo    "<tr>";
     echo    " <td height='23'>$row[6]</td>";
	 echo    " <td height='23' >$row[5]</td>";
        echo  "<td width='10'><form id='form7' name='form7' method='post' action=''>";
        echo    "<label for='textfield'>$row[4]</label>";
       
      echo    "</form></td>";
     echo   "</tr>";
    echo  "</table>";
  
	echo "</article> ";
	
	$d++;
	   
	   }

	
	else{
		
		$d1=0;
		}
}}
}
/////////////////////////////////////اتمام جستجوی 2/////////////////////////////
?>
  </div>
  </div>
</body>
<style>


.menu1 ul{
	padding: 0px 0px;
	position: relative;
	list-style: none;
	z-index: 99;
	text-align: center;
		}
	
	.menu1 ul li:hover > ul {
		
	display: block;
		
}
	.menu1 ul li {
	float:none;
	position: relative;
	background-color: #FC6;
	border: 1px ridge #003;
}
	
	.menu1 ul li:hover > a {
	color: #fff;
	font-size: 17px;
	background-color: #096;
	text-align: center;
}
	
	.menu1 ul li a {
	display: block;
	width:150px;
	border:#00CC99;
	color: #4e4e4e;
	font-size:17px;
	text-decoration:none;
	float: none;
	padding-top: 10px;
	padding-right: 23px;
	padding-bottom: 15px;
	padding-left: 25px;
}
	
	

.nav {
	background-color: #9FC;
	height: 50px;
	width: 1355px;
	position:fixed;
	top:0px;
	right:0px;
	z-index:99;	
}
.menu1 {
	background-color: #FC9;
	position:fixed;
	height: 550px;
	width: 200px;
	right:2px;
	top:49px;
}

.main1 {
	
	height: 531px;
	width: 1145px;
	position:absolute;
	right:202px;
	top:50px;
	z-index:90;
	text-align: center;
}



  
  </style>
</html>
</div>
