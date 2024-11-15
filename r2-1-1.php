<?php
session_start();
if (isset($_SESSION['y'])){
 //echo $_SESSION['z'];
 $dd=$_SESSION['x'];
 $dd1=$_SESSION['y'];
 $dd2=$_SESSION['z'];
//$dd3=$_SESSION['hh'];
$dd4=$_SESSION['hh1'];

		 
}
else{
	//echo "fdhfghfghfg";
	header("LOCATION:r1.php");
	}
?>




<?php
$link330="";
$tab330="";
$rcordnum330="";
$rec330="";
$row330="";
$jam330=0;
$d330=0;
$link330= mysqli_connect("localhost","root","","saba");
                  mysqli_query($link330,"set character set utf8");
				  $tab330=mysqli_query($link330,"select * from kala1");
                  $rcordnum330=mysqli_num_rows($tab330);
				  for($rec330=1 ; ($rec330<= $rcordnum330)  ; $rec330++){
					  $row330=mysqli_fetch_array($tab330);
					  if($row330[3]==$dd1 and $row330[9]==1){
						  $jam330=$jam330+($row330[7]*$row330[8]);
						  $d330++;
						  }
				  }
?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

  <html xmlns="http://www.w3.org/1999/xhtml">
    
    
        <style type="text/css">
body {
	background-color: #FCF;
}
  </style>  
  <head>
  
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
  </head>
    
  <body>
      
      
  <?php
$e="";
$e1="";
$u="";
$u10="";
$u2="";
$u3="";
$u4="";
$u6="";
$u7="";
$curPageName="";
$r=array();
$row2="";
	$res2="";
	$tabl1="";
	$rec1="";
	$link2="";
	$rcordnum1="";
	$image="";
	$rr=5;
	$rr1="";
	//$arr=array();
//$e = "$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
//var_dump(parse_url($e));

//$rr1=parse_url($e);
//$rr2=parse_url($url);
 
//$arr=explode('&',$rr1['query']);
//$e1 = "http://$_SERVER[HTTP_HOST]$_SERVER[SCRIPT_NAME]";
//header("$e1");

$link2= mysqli_connect("localhost","root","","saba");
mysqli_query($link2,"set character set utf8");
$tab11=mysqli_query($link2,"select * from kala");
$rcordnum1=mysqli_num_rows($tab11);
for($rec1=1 ; ($rec1<= $rcordnum1)  ; $rec1++){
	$row2=mysqli_fetch_array($tab11);
    if ($rec1==$dd4){
    $u=1;
	$u10=$row2[8];
	$u2=$row2[1];
	$u3=$row2[2];
	$u4=$row2[3];
	$u6=$row2[6];
	$u7=$row2[7];
//	$target_dir = $u10;
//$target_file = $target_dir . basename($_FILES["name"]);
//$u10=$target_dir;
	$rec1=$rcordnum1;
	}
	
else{
    $u=0;
}

$rr++;
}

//$curPageName = substr($_SERVER["SCRIPT_NAME"],strrpos($_SERVER["SCRIPT_NAME"],"/")+1);  
 //   echo "The current page name is: ".$curPageName;  
 //   echo "</br>";  
   

//var_dump(parse_url($e));
//$u=file_get_contents('https://hellodigi.ir/')
?>
  <div class="kol2-2-1">  
    <div class="baner">
      <div class="main2">
            
            <?php
	  	echo  "<td width='10'><form id='form8' name='form8' method='post' action=''>";
		echo	 "<table width='40' border='1'>";
 echo "<tr>";
   echo "<td>";

        echo    "<input type='submit' name='b30' id='b30' value='صفحه قبل' />";
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
          
      <div class="main222">
            
            <?php
	  	echo  "<td width='10'><form id='form8' name='form8' method='post' action=''>";
		echo	 "<table width='40' border='1'>";
 echo "<tr>";
   echo "<td>";

        echo    "<input type='submit' name='b40' id='b30' value='صفحه جستجو' />";
			  if(isset($_POST['b40'])){
				  header("LOCATION:r2-2.php");
				  exit;
			  }
				echo  "</td>";
 echo "</tr>";
echo "</table>";
  
	  
				 echo "</form>" ;
			  
				  
				  
			  ?>
      </div>
          
    </div>
        
    <div class="main50">
      <div class="main60">
        <table width="202" height="270" border="1">
          <tr>
            <td align="center" bgcolor="#FF9933"><table width="171" height="246" border="1" align="center">
                <tr>
                  <td height="33" align="center" bgcolor="#FFCCFF">بستن پیش فاکتور</td>
                </tr>
                <tr>
                  <td align="center" bgcolor="#FFCCCC">برای قطعی شدن فاکتور حتما باید پیش فاکتور بسته شود</td>
                </tr>
                <tr>
                  <td align="center" bgcolor="#FFCCCC">بعد از بسته شدن پیش فاکتور امکان ویرایش یا حذف یا اضافه کردن کالا به فاکتور وجود ندارد</td>
                </tr>
                <tr>
                  <?php
 	   
	  $row500="";
	$resalt500="";
	$link500="";
	$tab500=""; 
	$row500="";
	$row="";
	$resalt="";
	$link3="";
	$tab2="";
	$link5="";
	$link3="";
	$tab2="";
	$val2="";
	$dd10="";
	$dd20="";
	$dd30="";	 
    $dd40="";
	$resalt="";
	$rec500=0;
	$rand=0;
	$rand1=0;
	$t22="";
	$t8=0;
	$pp3=0;
	$pp4=0;
	$pp5=0;
	$val400="";
	$val3="";
	$n=1;
//////////////////////////////////h3 بستن فاکتور//////////////////
if(isset($_POST['b4'])){
	$link500= mysqli_connect("localhost","root","","saba");
mysqli_query($link500,"set character set utf8");
	$tab500=mysqli_query($link500,"select * from faktor");
         $rcordnum500=mysqli_num_rows($tab500);
		 if( $rcordnum500==0){$rand=rand(1450,8560);}
		 $rand=rand(1450,8560);
		 $n=1;
	for($rec500=1 ; ($rec500<= $rcordnum500)  ; $rec500++){	
	$row500=mysqli_fetch_array($tab500);
	
	if ($rand==$row500[0] ){$n=0; }
	}
	if($n==0){$rand=rand(1450,8560);}
	
$link5= mysqli_connect("localhost","root","","saba");
mysqli_query($link5,"set character set utf8");
	$tab2=mysqli_query($link5,"select * from kala1");
         $rcordnum1=mysqli_num_rows($tab2);
	for($rec1=1 ; ($rec1<= $rcordnum1)  ; $rec1++){	
	$row=mysqli_fetch_array($tab2);
	if ($dd1==$row[3] and $row[9]==1 and $row[7]!=0 and  $row[7]!=NULL ){
		
		$dd20=$row[4];
		$dd30=$row[5];
		$dd40=$row[6];
		$t8=1;
		$pp4=$row[7];
		$pp5=$row[8];
		$t22=date("y/m/d");
		$pp3= ($pp4 * $pp5)+$pp3;
		 $resalt = mysqli_query($link5,"update kala1 set chek=0 , shf='$rand' ,tar='$t22' where (namek='$dd20' and brand1='$dd30' and model='$dd40' and user1=$dd1 and chek=1)"); 
		 $jam330=0;
         $d330=0;
	//	$link5= mysqli_connect("localhost","root","","saba");
	 //$resalt = mysqli_query($link5,"update kala1 set (shf='4000' , chek='0'  )where (user1='$dd1' and namek='$dd2' and brand1='$dd3' and model='$dd4')");
	 $val4=" پیش فاکتور با موفقیت بسته شد "; 
	// $tt7=$row[0];
	}
	// mysqli_close($link5);
	}
	if($t8==1){  
	
	$link3= mysqli_connect("localhost","root","","saba");
mysqli_query($link3,"set character set utf8");
		  mysqli_query($link3,"select * from faktor");
	$resalt= mysqli_query($link3,"insert into faktor values('$rand','$t22','$dd','$dd1','$pp3')");
	$rand1=$rand;
	 $val2="فاکتور با شماره";
	 $val3="صادر شد " ;
	}
}
	 //////////////////////////////////////پایان بستن فاکتور///////////
	
	
	 
     ?>
                    
                  <td height="36" align="center" bgcolor="#FFCCCC"><form id="form4" name="form4" method="post" action="">
                      <input type="submit" name="b4" id="button3" value="بستن پیش فاکتور" />
                  </form></td>
                </tr>
                <tr>
                  <td height="57" align="center" bgcolor="#D6D6D6"><?php  echo $val2 ;  echo $rand1; echo $val3;?></td>
                </tr>
            </table></td>
          </tr>
        </table>
      </div>
    </div>
        
        
    <form action="" method="post">   <div class="main3">
      <div class="main40">
          <table width="524" height="92" border="1" align="center">
            <tr>
              <td height="34" align="center" bgcolor="#FFCCFF">مشاهده پیش فاکتور</td>
            </tr>
            <tr>
              <td height="43" align="center"><input type="submit" name="b3" id="button4" value="مشاهده اجناس پیش فاکتور" />
                
              </td>
            </tr>
          </table>
            
            
        </div>
      <?php
  $a="";
$row2="";
	$res2="";
	$tabl="";
	$rec="";
	$d10=0;
	$d20=0;
	$hh10="";
	$link400="";
	$d401="";
	$d402="";
	$d403="";
	$val400="";
	$r=array("m1","m2","m3","m4","m5","m6","m7","m8","m9","m10","m11","m12","m13","m14","m15");
	 $z=array("k1","k2","k3","k4","k5","k6","k7","k8","k9","k10","k11","k12","k13","k14","k15","k16","k17","k18","k19","k20",
	 "k21","k22","k23","k24","k25","k26","k27","k28","k29","k30","k31","k32","k33","k34","k35","k36","k37","k38","k39","k40",
	 "k41","k42","k43","k44","k45","k46","k47","k48","k49","k50","k51","k52","k53","k54","k55","k56","k57","k58","k59","k60",
	 "k61","k62","k63","k64","k65","k66","k67","k68","k69","k70","k71","k72","k73","k74","k75","k76","k77","k78","k79","k80",
	 "k81","k82","k83","k84","k85","k86","k87","k88","k89","k90","k91","k92","k93","k94","k95","k96","k97","k98","k99","k100",
	 );
	$z1=array("bb1","bb2","bb3","bb4","bb5","bb6","bb7","bb8","bb9","bb10","bb11","bb12","bb13","bb14","bb15","bb16",
"bb17","bb18","bb19","bb20","bb21","bb22","bb23","bb24","bb25","bb26","bb27","bb28","bb29","bb30","bb31","bb32"
,"bb33","bb34","bb35","bb36","bb37","bb38","bb39","bb40","bb41","bb42"
,"bb43","bb44","bb45","bb46","bb47","bb48","bb49","bb50","bb51","bb52"
,"bb53","bb54","bb55","bb56","bb57","bb58","bb59","bb60","bb61","bb62");
 //////////////////////////////////////////////رویت پیش فاکتور///////////////////////////////////
//if(isset($_POST['b3'])){
$link= mysqli_connect("localhost","root","","saba");
mysqli_query($link,"set character set utf8");
$tabl=mysqli_query($link,"select * from kala1");
$rcordnum=mysqli_num_rows($tabl);
$d10=0;
for($rec=1 ; ($rec<= $rcordnum)  ; $rec++){
	$_SESSION['hh10']=$d10;
	$row=mysqli_fetch_array($tabl);
	if ($dd1==$row[3] and $row[9]==1 and $row[7]!=0 and  $row[7]!=NULL ){	
	
	echo "<article class=$z[$d10]>";
	
   echo   "<table width='169' height='218' border='1' align='center'>";
     echo   "<tr>";
   echo       "<td height='146' colspan='3'><img src='$row[10]' />  </td>";
     echo  " </tr>";
   echo     "<tr>";
     echo     "<td width='60' height='23'>$row[4]</td>";
	 
     echo     "<td width='52'>$row[5]</td>";
	
   echo       "<td height='23'>$row[6]</td>";
    
     echo   "</tr>";
    echo    "<tr>";
     echo    " <td height='23' colspan='2'> $row[8]تومان</td>";
	  echo   " <td height='23' > $row[7]عدد</td>";
     echo   "</tr>";
	 echo "<form action='' method='post'>";
	  echo     "<tr>";
     echo     "<td width='60' height='23'><input name='b333' type='submit' id='b333' value=' ویرایش' /></label></td>";
     echo     "<td width='52'></td>";
	
   echo       "<td height='23'><input name='$z1[$d10]' type='submit' id='b444' value=' حذف' /></td>";
   if(isset($_POST["bb1"])){
	 $_SESSION['hh10']=1;
	 header("LOCATION:r2-11.php");
		  exit;
   }
	 
	 if(isset($_POST["bb2"])){
	 $_SESSION['hh10']=2;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb3"])){
	 $_SESSION['hh10']=3;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb4"])){
	 $_SESSION['hh10']=4;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	 
	  if(isset($_POST["bb5"])){
	 $_SESSION['hh10']=5;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb6"])){
	 $_SESSION['hh10']=6;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb7"])){
	 $_SESSION['hh10']=7;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	 
	  if(isset($_POST["bb8"])){
	 $_SESSION['hh10']=8;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb9"])){
	 $_SESSION['hh10']=9;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb10"])){
	 $_SESSION['hh10']=10;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	 
	  if(isset($_POST["bb11"])){
	 $_SESSION['hh10']=11;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	 if(isset($_POST["bb12"])){
	 $_SESSION['hh10']=12;
	 header("LOCATION:r2-11.php");
		  exit;
	 } 
	 
	 
	 if(isset($_POST["bb13"])){
	 $_SESSION['hh10']=13;
	 header("LOCATION:r2-11.php");
		  exit;
	 } 
	  if(isset($_POST["bb14"])){
	 $_SESSION['hh10']=14;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb15"])){
	 $_SESSION['hh10']=15;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb16"])){
	 $_SESSION['hh10']=16;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	 
	  if(isset($_POST["bb17"])){
	 $_SESSION['hh10']=17;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb18"])){
	 $_SESSION['hh10']=18;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb19"])){
	 $_SESSION['hh10']=19;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb20"])){
	 $_SESSION['hh10']=20;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb21"])){
	 $_SESSION['hh10']=21;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb22"])){
	 $_SESSION['hh10']=22;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	 
	 if(isset($_POST["bb23"])){
	 $_SESSION['hh10']=23;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb24"])){
	 $_SESSION['hh10']=24;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb25"])){
	 $_SESSION['hh10']=25;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb26"])){
	 $_SESSION['hh10']=26;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	 
	  if(isset($_POST["bb27"])){
	 $_SESSION['hh10']=27;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb28"])){
	 $_SESSION['hh10']=28;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	  if(isset($_POST["bb29"])){
	 $_SESSION['hh10']=29;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	 
	  if(isset($_POST["bb30"])){
	 $_SESSION['hh10']=30;
	 header("LOCATION:r2-11.php");
		  exit;
	 }
	 
////////////////////////////////////////////////
 

	

echo	"</form>";

//////////////////////////////////////////////////////////////پایان حذف//////////////////////////////////////////

   
     echo   "</tr>";
    echo  "</table>";
  
	echo "</article> ";
	
$d10++;

}

else{ }

	$d20++;
}
//}

///////////////////////////////////////////////انما یش پیش فاکتورپایان ////////////////////////////
//////////////////////////////////////////////////////////////////////////////////شروع خذف پیش فاکتور////////////////////////
 
    ?>
    </div></form>
          
      <div class="main">
        <form id="form1" name="form1" method="post" action="">
            
          <table width="334" height="498" border="1" align="center">
              <tr>
                <td height="47" colspan="3" align="center" bgcolor="#FF99FF">  اضافه کردن کالا به پیش فاکتور</td>
              </tr>
              <tr>
                <td height="163" colspan="3" align="center">          <a><img src= "<?php echo $u10 ?>"   width="160" height="149" border="1" /></a></td>
              </tr>
              <tr>
                <td width="96" height="31" align="center">
                  <label for="textfield2"></label>
                  
                  <input name="t2" type="text" id="textfield2" value="<?php echo $u2 ?>" size="10" readonly="readonly"/>
                </td>
                <td width="92" align="center">
                  
                  <label for="textfield3"></label>
                  <input name="t3" type="text" id="textfield3" value="<?php echo $u3 ?>" size="10" readonly="readonly" />
                </td>
                <td width="124" align="center">
                  
                  <label for="textfield4"></label>
                  <input name="t4" type="text" id="textfield4" value="<?php echo $u4 ?>"  size="10" readonly="readonly"/>
                </td>
              </tr>
              <tr>
                <td height="32" colspan="2" align="center">قیمت</td>
                <td align="center">
                  
                  <label for="textfield5"></label>
                  <input name="t5" type="text" id="t5" value="<?php echo $u6 ?>" size="10" readonly="readonly"/>
                </td>
              </tr>
             <tr>
               <?php
  $t10=0;
  $r2=0;
   $link18="";
   $tab12="";
   $row6="";
  //$r4=200;
		  $link18= mysqli_connect("localhost","root","","saba");
          mysqli_query($link18,"set character set utf8");
		  $tab12=mysqli_query($link18,"select * from cont");
		  $row6=mysqli_fetch_array($tab12);
		  if(isset($_POST['b31'])){
			//  for($r3=1 ; $r3<=$r4; $r3++){
				if($row6[0]>0){
				$t10=$row6[0]-1;
			//mysqli_query($link18,"set character set utf8");	
			mysqli_query($link18,"update cont set sh='$t10' "); 
	 
				}
			  }
			  // }
		  if(isset($_POST['b32']))
		  {
			  
			  $t10=$row6[0]+1;
			 // $link18= mysqli_connect("localhost","root","","saba");
			  mysqli_query($link18,"update cont set sh='$t10' "); 
			  
			  }
		 
		  ?>
                <td height="37" colspan="2" align="center" valign="top"> تعداد</td>
                <td height="37" align="center" valign="top">
                  <input type="submit" name="b32" id="button2" value="زیاد" src="<?php echo 'uploads/106.jpg' ?>" />
                  <input name="t1" type="text" id="textfield" border="3" align="center"  value="<?php echo $t10 ?>" size="3"  readonly="readonly" />
               <input type="submit" name="b31" id="button3" value="کم"  src="<?php echo 'uploads/107.gif' ?>" /></td>
                
            </tr>
              <tr>
                <td height="70" colspan="3" align="center"><table width="323" height="64" border="1">
                  <tr>
                    <td width="29" align="center" valign="middle">شرح کالا</td>
                    <td width="136" align="center" valign="middle"><?php echo $u7 ?></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td height="43" colspan="3" align="center">
                  <input type="submit" name="h4" id="button" value="اضافه کردن به پیش فاکتور" />
                  <?php
			  $link22="";
			  $tab22="";
	          $t1="";
			  $t2="";
			   $t3="";
			  $t4="";
			   $t5="";
			  $t7="";
			  $link33="";
			  $tab33="";
			  $rcordnum33="";
			  $rec33=0;
			  $row33="";
			  $val22="";
			  $d=1;
              if(isset($_POST['h4'])){
				  $t1=$_POST['t1'];
				  $t2=$_POST['t2'];
				  $t3=$_POST['t3'];
				  $t4=$_POST['t4'];
				  $t5=$_POST['t5'];
				  $link33= mysqli_connect("localhost","root","","saba");
                  mysqli_query($link33,"set character set utf8");
				  $tab33=mysqli_query($link33,"select * from kala");
                  $rcordnum33=mysqli_num_rows($tab33);
				  for($rec33=1 ; ($rec33<= $rcordnum33)  ; $rec33++){
					  $row33=mysqli_fetch_array($tab33);
				  if(($t2 == $row33[1]) and ($t3 == $row33[2]) and($t4 == $row33[3])  ){
				   $t7=$row33[8];
				    $rec33=$rcordnum33;
					
				  }
				 
				  }
			//////////////////////////////////////	  
				  if($t1>0 and $t2 and $t3 and $t4 and $t5){
				  $link22= mysqli_connect("localhost","root","","saba");
                  mysqli_query($link22,"set character set utf8");
				  $tab22=mysqli_query($link22,"select * from kala1");
   mysqli_query($link22,"insert into kala1 values(NULL,NULL,'$dd','$dd1','$t2','$t3','$t4','$t1','$t5','1','$t7')");
  // $d++;
   $val22="این کالا با موفقیت ثبت شد";
			  }
			  else{   $val22=  "تعدا کالا را درست وارد کنید";}
			  }
			  ?>
                </td>
              </tr>
              <tr>
                <td height="40" colspan="3" align="center"><?php echo $val22 ?></td>
              </tr>
        </table> </form>
          
    </div> 
    <div class="main2000">
    <div class="main200">
      <table width="198" height="141" border="1">
        <tr>
          <td height="31" align="center">تعداد اقلام پیش فاکتور</td>
        </tr>
        <tr>
          <td height="29" align="center">
            <label for="textfield6"></label>
            <input name="t15" type="text" id="textfield6" value="<?php echo $d330 ?>" readonly="readonly"/>
          </td>
        </tr>
        <tr>
          <td height="32" align="center">جمع کل پیش فاکتور</td>
        </tr>
        <tr>
          <td height="37" align="center">
            <label for="textfield8"></label>
            <input name="t16" type="text" id="textfield8" align="left" value="<?php echo $jam330 ?>" readonly="readonly" />
          </td>
        </tr>
      </table>
    </div>
     </div>
  </div>
      
  </body>
  <style type="text/css">
.kol2-2-1 {
	
	position:absolute;
	direction:rtl;
	height: 600px;
	width: 1345px;
	top:0px;
	left:0px;
	right:0px;
}
.baner {
	background-color: #9FC;
	height: 50px;
	width: 1345px;
	position:fixed;
	direction:rtl;
	top:0px;
	right:0px;

	z-index:99;
}
.main {
	background-color: #FCC;
	height: 515px;
	width: 344px;
	position:fixed;
	direction:rtl;
	top:50px;
	margin-right:20px;
	border: 1px double #000;
	text-align: center;
	right:5px;
}
  .main2 {
	background-color: #FCF;
	height:auto;
	width:auto;
	position: absolute;
	padding:5px;
	left: 37px;
	top: 5px;
	text-align: center;
}

 .main222 {
	background-color: #FCF;
	height:auto;
	width:auto;
	position: absolute;
	padding:5px;
	right:420px;
	top: 5px;
	text-align: center;
}
  .main3 {
	height:110px;
	width:723px;
	position: absolute;
	direction:rtl;
	right:386px;
	top: 56px;
	text-align: center;
	z-index:90;
}
.main40 {
	background-color:#F93;
	direction:rtl;
	height:auto;
	width: 718px;
	position:fixed;
	top:50px;
	right:382px;
	z-index:99;
	
	
}	

.main50 {
	direction:rtl;
	position:absolute;
	height: 284px;
	width: 209px;
	right:1127px;
	top: 57px;
}
.main60 {
	background-color:#CCC;
	direction:rtl;
	position:fixed;
	height:265px;
	width: 200px;
	right:1127px;
	
}

.main200{
	background-color:#CC99FF;
	direction:rtl;
	position:fixed;
	height:154px;
	width: 200px;
	right:1127px;
	top: 364px;
	text-align: center;
}
.main2000{
	
	direction:rtl;
	position:absolute;
	height:155px;
	width: 201px;
	right:1127px;
	top: 364px;
}

		.k1	{	
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:100px;
	right:5px;	
}
	.k2	{			
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:100px;
	right:180px;	
}
	.k3	{	
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:100px;
	right:355px;
}

.k4	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:100px;
	right:530px;
}
	/*    888888888888888888888888888888888888888888888888 */
.k5	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:355px;
	right:5px;
}		
.k6	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:355px;
	right:180px;	
}

.k7 {		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:355px;
	right:355px;	
}		
.k8	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:355px;
	right:530px;
}	
	/*    888888888888888888888888888888888888888888888888 */
.k9	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:610px;
	right:5px;
}	

.k10	{	
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:610px;
	right:180px;
}	
.k11	{			     
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:610px;
	right:355px;
}	
.k12   {			     
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:610px;
	right:530px;
}

/*    888888888888888888888888888888888888888888888888 */
	.k13	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:865px;
	right:5px;	
}		
.k14  {		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:865px;
	right:180px;
}	
.k15	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:865px;
	right:355px;
}	

.k16	{	
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:865px;
	right:530px;
}	
/*    888888888888888888888888888888888888888888888888 */

.k17 {			     
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1120px;
	right:5px;
}	
.k18 {			     
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1120px;
	right:180px;
}

	.k19	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1120px;
	right:355px;	
}		
.k20  {		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1120px;
	right:530px;
}	
/*    888888888888888888888888888888888888888888888888 */

.k21	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1375px;
	right:5px;
}	

.k22	{	
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1375px;
	right:180px;
}	
.k23 {			     
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1375px;
	right:355px;
}	
.k24 {			     
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1375px;
	right:530px;
}
/*    888888888888888888888888888888888888888888888888 */
	.k25	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1630px;
	right:5px;	
}		
.k26  {		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1630px;
	right:180px;
}	
.k27	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1630px;
	right:355px;
}	
.k28	{	
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1630px;
	right:530px;
}	
/*    888888888888888888888888888888888888888888888888 */
.k29 {			     
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1885px;
	right:5px;
}	
.k30 {			     
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1885px;
	right:180px;
}

	.k31	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1885px;
	right:355px;	
}		
.k32  {		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1885px;
	right:530px;
}	
/*    888888888888888888888888888888888888888888888888 */
.k33	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:2140px;
	right:5px;
}	
.k34	{	
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:2140px;
	right:180px;
}	
.k35 {			     
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:2140px;
	right:355px;
}	
.k36 {			     
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:2140px;
	right:530px;
}
/*    888888888888888888888888888888888888888888888888 */
	.k37	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1530px;
	right:20px;	
}		
.k38  {		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1530px;
	right:195px;
}	
.k39	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1530px;
	right:370px;
}	
.k40	{	
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1530px;
	right:543px;
}	
.k41 {			     
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1530px;
	right:716px;
}	
.k42 {			     
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1530px;
	right:889px;
}
/*    888888888888888888888888888888888888888888888888 */
	.k43	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1755px;
	right:20px;	
}		
.k44  {		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1755px;
	right:195px;
}	
.k45	{		
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1755px;
	right:370px;
}	
.k46	{	
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1755px;
	right:543px;
}	
.k47 {			     
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1755px;
	right:716px;
}	
.k48 {			     
	background-color:#CC6;
	height: 250px;
	width: 170px;
	position:absolute;
	top:1755px;
	right:889px;
}
  </style>
</html>

