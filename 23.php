	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

  <html xmlns="http://www.w3.org/1999/xhtml">
  <html dir="rtl">  
  <style type="text/css">
  </style>
  <link href="kol.css" rel="stylesheet" type="text/css" />
  <style type="text/css">
  body {
	background-color: #CCF;
}
  </style>
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
    
  <head>
    
  <body>
     <div class="kol">
          <div class="baner"></div>
          
          <div class="f">
			<ul>
				<li> <a href="r1.php">ثبت نام / ورود اعضاء</a></li>
	        </ul> 
         </div>
        
          <div class="meno">
          <ul>
	 	<li> <a href="#">صفحه اصلی</a></li>
		<li > <a href="#">فروشگاه صبا</a>
		<ul>	
			    <li><a href="#">کـامپیــوتر</a></li>
			    <li><a href="#">لـپ تـاپ</a></li>
			    <li><a href="#">لـوازم جانبـی</a></li>
			    <li><a href="#">لـوازم خانگی</a></li>
                <li><a href="#">قطعــات</a>
                      <ul>
                      <li><a href="#">قطعــات لپ تاپ</a></li>
			          <li><a href="#">قطعــات کامپیوتر</a></li>
			          <li><a href="#">قطعـات دست دوم</a></li>
                      </ul>
          </li>      
		</ul>   
		</li>
		<li><a href="Untitled-4.html"> درباره ما</a></li>
		<li><a href="Untitled-3.html">تماس با ما</a></li>
          </ul>
       </div>
         <div class="min10">
         
         <?php
	   echo  "<td width='10'><form id='form7' name='form7' method='post' action=''>";
	  $x=0;
	  $y=0;
  $a="";
$row2="";
	$res2="";
	$tabl="";
	$rec="";
	$d=0;
	$d2=0;
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
$hh="";
$hh1="";
$z1=array("bb1","bb2","bb3","bb4","bb5","bb6","bb7","bb8","bb9","bb10","bb11","bb12","bb13","bb14","bb15","bb16",
"bb17","bb18","bb19","bb20","bb21","bb22","bb23","bb24","bb25","bb26","bb27","bb28","bb29","bb30","bb31","bb32"
,"bb33","bb34","bb35","bb36","bb37","bb38","bb39","bb40","bb41","bb42"
,"bb43","bb44","bb45","bb46","bb47","bb48","bb49","bb50","bb51","bb52"
,"bb53","bb54","bb55","bb56","bb57","bb58","bb59","bb60","bb61","bb62");
 //////////////////////////////////////////////جستجوی 1///////////////////////////////////
 
 
//if(isset($_POST['b2'])){
//$d3='disabled';

//$user3= $_POST['user3'];	

$link= mysqli_connect("localhost","root","","saba");
mysqli_query($link,"set character set utf8");
///echo" اطلاعات 646456456456 ثبت نشد";

//if(!$user3 ){
	//$_POST['25'] =  "اطلاعات را کامل وارد کنید";
	//value.$_POST['25']=$_POST['25'] ;
	//$payam="ثبت نشد***اطلاعات را کامل وارد کنید فیلدها نباید خالی باشد";
	//echo $payam;
//	 $val1="اطلاعات کالا را کامل وارد کنید";
	//}
	//else{
	
$tabl=mysqli_query($link,"select * from safhe1");
$rcordnum=mysqli_num_rows($tabl);
$d=0;

for($rec=1 ; ($rec<= $rcordnum)  ; $rec++){
	$row=mysqli_fetch_array($tabl);
//	if($user3 ==$hom ){ 
	//$d4=$r[$d];
	$_POST['hh']=$row['8'];
	
	//echo  "<form id='form7' name='form7' method='post' action=''>";
		 $_SESSION['hh1']=$d;
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
    //    echo    "<label for='textfield'><input name='$z1[$d]' type='submit' id='b333' value=' ' /></label>";
		
		if(isset($_POST['bb1'])){
		  $_SESSION['hh1']=1;
		  header("LOCATION:r2-1-1.php");
		  exit;
		  }
		if(isset($_POST['bb2'])){
		  $_SESSION['hh1']=2;
		  header("LOCATION:r2-1-1.php");
		  exit;
		  }
		  if(isset($_POST['bb3'])){
		  $_SESSION['hh1']=3;
		  header("LOCATION:r2-1-1.php");
		  exit;
		  }
          if(isset($_POST['bb4'])){
		  $_SESSION['hh1']=4;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  }
		
		if(isset($_POST['bb5'])){
		  $_SESSION['hh1']=5;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  }
		if(isset($_POST['bb6'])){
		  $_SESSION['hh1']=6;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  }
		 if(isset($_POST['bb7'])){
		  $_SESSION['hh1']=7;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb8'])){
		  $_SESSION['hh1']=8;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   
		   if(isset($_POST['bb9'])){
		  $_SESSION['hh1']=9;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb10'])){
		  $_SESSION['hh1']=10;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb11'])){
		  $_SESSION['hh1']=11;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb12'])){
		  $_SESSION['hh1']=12;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb13'])){
		  $_SESSION['hh1']=13;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb14'])){
		  $_SESSION['hh1']=14;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb15'])){
		  $_SESSION['hh1']=15;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  }
		    if(isset($_POST['bb16'])){
		  $_SESSION['hh1']=16;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb17'])){
		  $_SESSION['hh1']=17;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb18'])){
		  $_SESSION['hh1']=18;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb19'])){
		  $_SESSION['hh1']=19;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb20'])){
		  $_SESSION['hh1']=20;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		  if(isset($_POST['bb21'])){
		  $_SESSION['hh1']=21;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb22'])){
		  $_SESSION['hh1']=22;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb23'])){
		  $_SESSION['hh1']=23;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb24'])){
		  $_SESSION['hh1']=24;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb25'])){
		  $_SESSION['hh1']=25;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb26'])){
		  $_SESSION['hh1']=26;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb27'])){
		  $_SESSION['hh1']=27;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb28'])){
		  $_SESSION['hh1']=28;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb29'])){
		  $_SESSION['hh1']=29;
	     header("LOCATION:r2-1-1.php");
		 exit;
		  } 
		   if(isset($_POST['bb30'])){
		  $_SESSION['hh1']=30;
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
 // echo    "</td>";
 echo    "</form></td>";
     echo   "</tr>";
    echo  "</table>";

	echo "</article>";


echo    "</form>";

$d++;
$d2++;
     // $val1=$z;
	  

//function g(){
//	return $d;
//	}
}
//echo "<form action='r2-1-1.php' method='post'>";










	//echo    "</form>";	  

//echo  "<input name='bb300' type='submit' value='rf1000000000000000ytrty' />";
//if(isset($_POST['bb300'])){
		//  $_SESSION['hh1']=$u;
		//  header("LOCATION:r2-1-1.php");
		 // }
//echo "</form>";

	// else if($user3 == $row[1]){	
	//$d4=$r[$d];
	
	//echo "<article class=$z[$d]>";
	
 //  echo   "<table width='169' height='218' border='1' align='center'>";
  //   echo   "<tr>";
  // echo       "<td height='146' colspan='3'><a href='r2-1-1.php'   ><img src='$row[7] ' /> </a> </td>";
  //   echo  " </tr>";
  // echo     "<tr>";
   //  echo     "<td width='60' height='23'>$row[1]</td>";
   //  echo     "<td width='52'>$row[2]</td>";
 //  echo       "<td height='23'>$row[3]</td>";
   //  echo   "</tr>";
   // echo    "<tr>";
   //  echo    " <td height='23' colspan='2'>$row[6]</td>";
     //   echo  "<td width='10'><form id='form7' name='form7' method='post' action=''>";
       // echo    "<label for='textfield'>قیمت</label>";
     
     // echo    "</form></td>";
   //  echo   "</tr>";
   // echo  "</table>";
  
	//echo "</article> ";
	


//$d++;
//$d2++;
    //  $val1=$z;

	   //       }
	//else{
		
	
	//	}
//}}}

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
   echo       "<td height='146' colspan='3'><img src='$row[7]'/> </td>";
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
	   
	   }

	
	else{
		
		$d1=0;
		}
}}}
/////////////////////////////////////اتمام جستجوی 2/////////////////////////////
?>
         
         </div>
       <div class="foot100">
         <div class="foot10">
           <table width="1341" height="36" border="0">
             <tr>
               <td align="center" valign="middle">به فروشگاه صبا خوش آمدید</td>
             </tr>
           </table>
       </div>
       </div>
 
  
  </div>
    
  </body>
  </html>
  