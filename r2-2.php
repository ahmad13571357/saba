<?php
session_start();
if (isset($_SESSION['y'])){
 //echo $_SESSION['z'];
 $p=$_SESSION['x'];
 $p1=$_SESSION['y'];
 
}
else{
	//echo "fdhfghfghfg";
	header("LOCATION:r1.php");
	}
?>
<?php
  $link18="";
  $tab12="";
  $row6='';
   $link18= mysqli_connect("localhost","root","","saba");
          mysqli_query($link18,"set character set utf8");
		  $tab12=mysqli_query($link18,"select * from cont");
		  $row6=mysqli_fetch_array($tab12);
           mysqli_query($link18,"update cont set sh=0 "); 
  ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<style type="text/css">
  body {
	background-color: #CCF;
}
  </style>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style4.css" rel="stylesheet" type="text/css" />
</head>
<html dir="rtl">
<body>

<div class="kool4">
  <div class="baner">
    <form action="" method="post">
 <div class="m1">
   <table width="291" height="33" border="1">
     <tr>
       <td width="57" align="center">نام کالا</td>
       <td width="120" align="center"><label for="textfield2"></label>
         <input type="text" name="user3" id="textfield2"  size="20"/></td>
       <td width="63" align="center"><input type="submit" name="h1" id="button2" value="جستجو" /></td>
     </tr>
   </table>
 </div>
  <div class="m2">
    <table width="479" height="38" border="1">
      <tr>
        <td width="65" align="center">نام کالا</td>
        <td width="120" align="center"><label for="textfield8"></label>
          <input type="text" name="user4" id="textfield8" size="20" /></td>
        <td width="28" align="center">برند</td>
        <td width="126" align="center"><label for="textfield9"></label>
          <input type="text" name="user5" id="textfield9"  size="20"/></td>
        <td width="69" align="center"><input type="submit" name="h2" id="button4" value="جستجو" /></td>
      </tr>
    </table>
  </div>
</form>
    <div class="main221">
        
          <?php
	  	echo  "<td width='10'><form id='form8' name='form8' method='post' action=''>";
		echo	 "<table width='40' border='1'>";
 echo "<tr>";
   echo "<td>";

        echo    "<input type='submit' name='b30' id='b30' value='مشاهده اجناس' />";
			  if(isset($_POST['b30'])){
				  header("LOCATION:r2-0.php");
				  exit;
			  }
				echo  "</td>";
 echo "</tr>";
echo "</table>";
  
	  
				 echo "</form>" ;
			  
				  
				  
			  ?>
    </div>
  </div>
  <div class="menu">
      <div class="user">
        <table width="200" border="1">
          <tr>
            <td height="46" align="center" valign="middle" bgcolor="#FFCCCC"><?php echo " سلام   $p خوش آمدید "; ?></td>
          </tr>
  </table>
        
  </div>
      <div class="menu1">
        <p>&nbsp;</p>
        <ul>
          <li> <a href="r2-0.php">مشاهده کالا</a></li>
          <li> <a href="r2-2.php">جستجوی کالا</a></li>
          <li > <a href="r2-1.php">خرید جدید</a></li>
          <li><a href="r2-3.php">فاکتورهای خرید </a></li>
          <li><a href="r2-4.php">صورتحساب </a></li>
          <li><a href=""> تماس با واحد فروش</a></li>
          <li><a href="out.php">خروج</a></li>
        </ul> 
    </div>
 </div>
    <div class="main60">
     
 
 <?php
 // echo  "<form id='form7' name='form7' method='post' action=''>";
 
 
      
  $a="";
$row2="";
	$res2="";
	$tabl="";
	$rec="";
	$d=0;
	$d2=1;
	$d4="";
	$link5="";
	//$r=array("m1","m2","m3","m4","m5","m6","m7","m8","m9","m10","m11","m12","m13","m14","m15");
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
$hh1="";
$link18="";
  $tab12="";
  $row6="";
$z1=array("bb1","bb2","bb3","bb4","bb5","bb6","bb7","bb8","bb9","bb10","bb11","bb12","bb13","bb14","bb15","bb16",
"bb17","bb18","bb19","bb20","bb21","bb22","bb23","bb24","bb25","bb26","bb27","bb28","bb29","bb30","bb31","bb32"
,"bb33","bb34","bb35","bb36","bb37","bb38","bb39","bb40","bb41","bb42"
,"bb43","bb44","bb45","bb46","bb47","bb48","bb49","bb50","bb51","bb52"
,"bb53","bb54","bb55","bb56","bb57","bb58","bb59","bb60","bb61","bb62");
 //////////////////////////////////////////////جستجوی 1///////////////////////////////////
if(isset($_POST['h1'])){
	

$user3= $_POST['user3'];

/////////////////////////////////////////////////////////////////
 $link18= mysqli_connect("localhost","root","","saba");
          mysqli_query($link18,"set character set utf8");
		  $tab12=mysqli_query($link18,"select * from cont1");
		  $row6=mysqli_fetch_array($tab12);
           mysqli_query($link18,"delete from cont1 "); 

	//////////////////////////////////////////////////////////////////////////////
$link5= mysqli_connect("localhost","root","","saba");
mysqli_query($link5,"set character set utf8");
if(!$user3 ){
	
	 $val1="اطلاعات کالا را کامل وارد کنید";
	}
	else{
	
	$tabl=mysqli_query($link5,"select * from kala");
$rcordnum=mysqli_num_rows($tabl);
$d=0;

for($rec=1 ; ($rec<= $rcordnum)  ; $rec++){
	$row=mysqli_fetch_array($tabl);
	if($user3 == $row[1]){	
	
	
			
	echo "<article class=$z[$d]>" ;

  echo   "<table width='169' height='218' border='1' align='center'>";
     echo   "<tr>";
   echo       "<td height='146' colspan='3'><img src='$row[8] '   />  </td>";
     echo  " </tr>";
   echo     "<tr>";
     echo     "<td width='60' height='23'>$row[1]</td>";
     echo     "<td width='52'>$row[2]</td>";
   echo       "<td height='23'>$row[3]</td>";
     echo   "</tr>";
    echo    "<tr>";
     echo    " <td height='23' colspan='2'>$row[6]</td>";
	// echo  "<td width='10'>";
      echo  "<td width='10'><form id='form7' name='form7' method='post' action=''>";
        echo    "<label for='textfield'><input name='$z1[$d]' type='submit' id='b333' value=' خرید' /></label>";
		
		
		// echo    "</form></td>";
		 echo    "</tr>";
		 echo  "</table>";
			echo "</article>";
	

$d++;


      $val1=$z;
	// echo "<table width='40' border='1' align='left'>";
 // echo "<tr>";
 // echo   "<input type='text' name='textfield' id='textfield' value=  '$d2 '/> </td>";
 //echo "</tr>";
//echo "</table>";

 $link18= mysqli_connect("localhost","root","","saba");
          mysqli_query($link18,"set character set utf8");
		  $tab12=mysqli_query($link18,"select * from cont1");
		  $row6=mysqli_fetch_array($tab12);
           mysqli_query($link18,"insert into cont1 values('$d2') "); 

	          }
	else{}
	
	
  
	
$d2++;	
}

}	
		
}
////////////////////////////////////////////////////////////////////////////////

if(isset($_POST['h2'])){
	

$user4= $_POST['user4'];
$user5= $_POST['user5'];
/////////////////////////////////////////////////////////////////
 $link18= mysqli_connect("localhost","root","","saba");
          mysqli_query($link18,"set character set utf8");
		  $tab12=mysqli_query($link18,"select * from cont1");
		  $row6=mysqli_fetch_array($tab12);
           mysqli_query($link18,"delete from cont1 "); 

	//////////////////////////////////////////////////////////////////////////////
$link5= mysqli_connect("localhost","root","","saba");
mysqli_query($link5,"set character set utf8");
if(!$user4 and !$user5 ){
	
	 $val1="اطلاعات کالا را کامل وارد کنید";
	}
	else{
	
	$tabl=mysqli_query($link5,"select * from kala");
$rcordnum=mysqli_num_rows($tabl);
$d=0;

for($rec=1 ; ($rec<= $rcordnum)  ; $rec++){
	$row=mysqli_fetch_array($tabl);
	if($user4 == $row[1] and $user5== $row[2] ){	
	
	
			
	echo "<article class=$z[$d]>" ;

  echo   "<table width='169' height='218' border='1' align='center'>";
     echo   "<tr>";
   echo       "<td height='146' colspan='3'><img src='$row[8] '   />  </td>";
     echo  " </tr>";
   echo     "<tr>";
     echo     "<td width='60' height='23'>$row[1]</td>";
     echo     "<td width='52'>$row[2]</td>";
   echo       "<td height='23'>$row[3]</td>";
     echo   "</tr>";
    echo    "<tr>";
     echo    " <td height='23' colspan='2'>$row[6]</td>";
	// echo  "<td width='10'>";
      echo  "<td width='10'><form id='form7' name='form7' method='post' action=''>";
        echo    "<label for='textfield'><input name='$z1[$d]' type='submit' id='b333' value=' خرید' /></label>";
		
		
		// echo    "</form></td>";
		 echo    "</tr>";
		 echo  "</table>";
			echo "</article>";
	

$d++;


      $val1=$z;
	// echo "<table width='40' border='1' align='left'>";
 // echo "<tr>";
 // echo   "<input type='text' name='textfield' id='textfield' value=  '$d2 '/> </td>";
 //echo "</tr>";
//echo "</table>";

 $link18= mysqli_connect("localhost","root","","saba");
          mysqli_query($link18,"set character set utf8");
		  $tab12=mysqli_query($link18,"select * from cont1");
		  $row6=mysqli_fetch_array($tab12);
           mysqli_query($link18,"insert into cont1 values('$d2') "); 

	          }
	else{}
	
	
  
	
$d2++;	
}

}	
		
}

///////////////////////////////////////////////////////////////////////////////////////////

 $link18= mysqli_connect("localhost","root","","saba");
          mysqli_query($link18,"set character set utf8");
		  $tab12=mysqli_query($link18,"select * from cont1");
		  $rcordnum=mysqli_num_rows($tab12);
		 for($rec=1 ; ($rec<= $rcordnum)  ; $rec++){ 
		  $row6=mysqli_fetch_array($tab12);
         $p10=$row6[0];

if(isset($_POST['bb1']) and $rec==1 ){
	 $_SESSION['hh1']=$p10;
		 header("LOCATION:r2-1-1.php");
		  exit;
		  }
		if(isset($_POST['bb2'])and $rec==2){
		  $_SESSION['hh1']=$p10;
		  header("LOCATION:r2-1-1.php");
		  exit;
		  }
		  if(isset($_POST['bb3'])and $rec==3){
		  $_SESSION['hh1']=$p10;
		  header("LOCATION:r2-1-1.php");
		  exit;
		  }
          if(isset($_POST['bb4'])and $rec==4){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  }
		
		if(isset($_POST['bb5'])and $rec==5){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  }
		if(isset($_POST['bb6'])and $rec==6){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  }
		 if(isset($_POST['bb7'])and $rec==7){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb8'])and $rec==8){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   
		   if(isset($_POST['bb9'])and $rec==9){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb10'])and $rec==10){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb11'])and $rec==11){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb12'])and $rec==12){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb13'])and $rec==13){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb14'])and $rec==14){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb15'])and $rec==15){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  }
		    if(isset($_POST['bb16'])and $rec==16){
		  $_SESSION['hh1']=16;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb17'])and $rec==17){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb18'])and $rec==18){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb19'])and $rec==19){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb20'])and $rec==20){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		  if(isset($_POST['bb21'])and $rec==21){
		  $_SESSION['hh1']=21;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb22'])and $rec==22){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb23'])and $rec==23){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb24'])and $rec==24){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb25'])and $rec==25){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb26'])and $rec==26){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb27'])and $rec==27){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb28'])and $rec==28){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb29'])and $rec==29){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb30'])and $rec==30){
		  $_SESSION['hh1']=$p10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb31'])){
		  $_SESSION['hh1']=31;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb32'])){
		  $_SESSION['hh1']=32;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb33'])){
		  $_SESSION['hh1']=33;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb34'])){
		  $_SESSION['hh1']=34;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb35'])){
		  $_SESSION['hh1']=35;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb36'])){
		  $_SESSION['hh1']=36;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb37'])){
		  $_SESSION['hh1']=37;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb38'])){
		  $_SESSION['hh1']=38;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  }
		   if(isset($_POST['bb39'])){
		  $_SESSION['hh1']=39;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  }  
		   if(isset($_POST['bb40'])){
		  $_SESSION['hh1']=40;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb41'])){
		  $_SESSION['hh1']=41;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb42'])){
		  $_SESSION['hh1']=42;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb43'])){
		  $_SESSION['hh1']=43;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb44'])){
		  $_SESSION['hh1']=44;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb45'])){
		  $_SESSION['hh1']=45;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		 }
 echo    "</form></td>";

//$a= a();
//	echo $a;


///////////////////////////////////////////////اتمام جستجوی 1////////////////////////////


 
  /////////////////////////////////////////////////////جستجوی 2//////////////////////////////////////////

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
	padding-top: 15px;
	padding-right: 23px;
	padding-bottom: 15px;
	padding-left: 25px;
}
.m ul{
	float:none;
	list-style:inside;
	}
 </style>
</html>