<?php
session_start();
if (isset($_SESSION['y'])){
 //echo $_SESSION['z'];
 $dd=$_SESSION['x'];
 $dd1=$_SESSION['y'];
 
}
else{
	//echo "fdhfghfghfg";
	header("LOCATION:r1.php");
	}
?>

<?php
$val1="";
$name2="";
$user2="";
$pass2="";
$mobil2="";
$adress2="";
$adress3="";
$link="";
$z="";

$user6="";
$user7="";
$user8="";
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
  <html xmlns="http://www.w3.org/1999/xhtml">
  <html dir="rtl">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
  <link href="kool22.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
  </head>
  
  <body>
           <?php
	$d5=0;	   
	$row="";
	$t1="";
	$t2="";	 
    $t3="";
	$t6="";
	$t7="";
	$link2="";
	$tab2="";
	$val2="";
	$val30="";
//////////////////////////////////h3 جستجو برای اضافه کردن کالا//////////////////
if(isset($_POST['h3'])){
	
$user6= $_POST['user6'];	
$user7= $_POST['user7'];
$user8= $_POST['user8'];
$val30="wetwetwetwtw";
$link2= mysqli_connect("localhost","root","","saba");
mysqli_query($link2,"set character set utf8");
///echo" اطلاعات 646456456456 ثبت نشد";

if(!$user6 or !$user7 or !$user8){
	//$_POST['25'] =  "اطلاعات را کامل وارد کنید";
	//value.$_POST['25']=$_POST['25'] ;
	//$payam="ثبت نشد***اطلاعات را کامل وارد کنید فیلدها نباید خالی باشد";
	//echo $payam;
	 $val2="اطلاعات کالا را کامل وارد کنید";
	}
	else{
		 $tab2=mysqli_query($link2,"select * from kala");
         $rcordnum1=mysqli_num_rows($tab2);
		 $d5=0;
	for($rec1=1 ; ($rec1<= $rcordnum1)  ; $rec1++){	
	$row=mysqli_fetch_array($tab2);
	if(($user6 == $row[1]) and ($user7 == $row[2]) and($user8 == $row[3])  ){
		
		$t1=$row[1];
		$t2=$row[2];
		$t3=$row[3];
		$t6=$row[6];
		$t7=$row[7];
		$d5=1;
		
		$val30= "لطفا تعداد کالا را وارد کرده کلید ثبت را بزنید";
	$rec1=$rcordnum1;
	}
	else{
		$d5=0;
		$val30= "کالای مورد نظر وجود ندارد";
		}}
	 }}
	 ////////////////////////////////////////////ثبت کالا////////////////////////////////
	// if ($d5==1 ){
	//$val2=$d5;
	$y="";
	$t0="";
	$t8="";
	
	$t10="";
	$tar="";
	 $chk="";
	$link3="";
	$tab3="";
	$resalt3 ="";
	$val3="";
	$row4="";
	$rec3=1;
	$f=3;
	$t11="";
	$t12="";
	$t13="";
	$t16="";
	$t17="";
	$t70="";
	$row22="";
	$link22="";
	$tab22="";
	$rcordnum22="";
		$rec22="";
	////////////////////////////////////////////////////
	if(isset($_POST['h4'])){ 
	$y=$_POST['t10'];
	//$val2=$y;
	$t11=$_POST['t1'];	
	$t12=$_POST['t2'];
	$t13=$_POST['t3'];
	$t16=$_POST['t6'];

	//////////////////////////////////////////////////////////////////
	
	
	$link22= mysqli_connect("localhost","root","","saba");
    mysqli_query($link22,"set character set utf8");
///echo" اطلاعات 646456456456 ثبت نشد";

		 $tab22=mysqli_query($link22,"select * from kala");
         $rcordnum22=mysqli_num_rows($tab22);
		 $d5=0;
	for($rec22=1 ; ($rec22<= $rcordnum22)  ; $rec22++){	
	$row22=mysqli_fetch_array($tab22);
	if(($t11 == $row22[1]) and ($t12 == $row22[2]) and($t13 == $row22[3])  ){
		
		
		$t70=$row22[7];
		
		
		$val30="لطفا تعداد کالا را وارد کرده کلید ثبت را بزنید";
	$rec22=$rcordnum22;
	}
	
	 }
	

	
	//if($chk==0){$t10=rand(23560,95620);$t0=$t10;} else {}
	$link3= mysqli_connect("localhost","root","","saba");
    mysqli_query($link3,"set character set utf8");
	
	$tab3=mysqli_query($link3,"select * from kala1");
	$rcordnum3=mysqli_num_rows($tab3);
	for($rec3=1 ; ($rec3<= $rcordnum3)  ; $rec3++){
		$row4=mysqli_fetch_array($tab3);
		if($row4[9]==0 and $y!=0   ){
			$resalt3 = mysqli_query($link3,"insert into kala1 values(NULL,NULL,'$dd','$dd1','$t11','$t12','$t13','$y','$t16','1','$t70')");
			$f=1;
			$val3=$t70;//"کالا با موفقیت ثبت شد";
			$rec3=$rcordnum3;
	                       }//بعد از forif
		
		else{$f=0; $val3="این کالا قبلا ثبت شده --ان را ویرایش کنید"; echo $val3; }
		
	}///for
	}
	/////////////////////////////////
//	if( $f==1){
	//if( $chk==1 and $y!=0  and($y!=NULL) and $dd1!=$row4[3]  ){
	//	$resalt3 = mysqli_query($link3,"insert into kala1 values(NULL,NULL,'$dd','$dd1','$t1','$t2','$t3','$y','$t6','1','$t7')");
	//$tab3=mysqli_query($link3,"select * from kala1");

//$chk=1;
//$val2="4444کالا با موفقیت ثبت شد";
//if($resalt3){
	//$val3="کالا با موفقیت ثبت شد";
	//echo"  اطلاعات با موفقیت ثبت شد";
//	}
//	else{
	//	 $val3="  مشکل در بانک اطلاعاتی** کالا ثبت نشد";
	//	}
	//}
//	else{$val3=" تعداد صفر است یا این فاکتور بسته شده"; echo $val3;}
//	}
	
//	}
	//}
	//else{
	//	$val2="  تعداد را وارد کنید***تعداد نباید صفر باشد** کالا ثبت نشد";
		
	  //    }	
	

		///////////////////////////////////////// تمام/////////////////////////////////////////


		
////////////////////////////////////////////////بستن فاکتور خرید//////////////////////////////////	
function m(){
	$g="";
	$gg="";
	$g= $GLOBALS['t0'];
	date_default_timezone_set("Iran");
	//$gg=ِdate("Y-m-d h:i:sa" );
if(isset($_POST['b4'])){
		  $link3= mysqli_connect("localhost","root","","saba");
	// $resalt = mysqli_query($link3,"update kala1 set  shf='$t0',tar='ِdate('Y-m-d h:i:sa' )' where (chk='1' )");
	 $GLOBALS['chk']=0;
	}
else{ $GLOBALS['chk']=1; return  $GLOBALS['chk'] ;}
}
//////////////////////////////////////////////////////////پایان بستن فاکتور خرید////////////////////

?>
          
          
  <div class="kool2">
  <div class="nav1">
  
  </div>
    <div class="menu">
      <div class="user">
        <table width="200" border="1">
          <tr>
            <td height="46" align="center" valign="middle" bgcolor="#FFCCCC"><?php echo " سلام "   , $dd, " خوش آمدید "; ?></td>
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
  </div
></div>
    
   <div class="main300">
    <div class="main20">
      <form id="form1" name="form1" method="post" action="">
        <table width="259" height="518" border="1" align="center">
          <tr>
            <td colspan="2" align="center" bgcolor="#FF99CC">اضافه کردن  کالا  به پیش فاکتور</td>
          </tr>
          <tr>
            <td width="86" height="26" align="center">نام کالا</td>
            <td width="157" align="center"><label for="textfield4"></label>
              <input type="text" name="user6" id="textfield4" /></td>
          </tr>
          <tr>
            <td height="26" align="center">برند</td>
            <td align="center"><label for="textfield5"></label>
              <input type="text" name="user7" id="textfield5" /></td>
          </tr>
          <tr>
            <td align="center">مدل</td>
            <td align="center"><input type="text" name="user8" id="textfield6" /></td>
          </tr>
          <tr>
            <td height="28" align="center">&nbsp;</td>
            <td align="center"><label for="textfield6">
              <input type="submit" name="h3" id="button5" value="جستجو" />
            </label></td>
          </tr>
          <tr>
            <td align="center">نام کالا</td>
            <td align="center"><label for="textfield7"></label>
              <input name="t1" type="text" id="textfield7" readonly="readonly" value="<?php echo "$t1" ?>" /></td>
          </tr>
          <tr>
            <td align="center">برند</td>
            <td align="center"><label for="textfield8"></label>
              <input name="t2" type="text" id="textfield8" readonly="readonly" value="<?php echo "$t2" ?>" /></td>
          </tr>
          <tr>
            <td align="center">مدل</td>
            <td align="center"><label for="textfield9"></label>
              <input name="t3" type="text" id="textfield9" readonly="readonly" value="<?php echo "$t3" ?>" /></td>
          </tr>
          <tr>
            <td align="center">قیمت خرید</td>
            <td align="center"><label for="textfield10"></label>
              <input name="t6" type="text" id="textfield10" readonly="readonly"  value="<?php echo "$t6" ?>" /></td>
          </tr>
          <tr>
            <td height="159" align="center">تصویر</td>
            <td align="center" bgcolor="#FFCCFF"><img src="<?php echo $t7 ?>" alt="" name="t7" width="160" height="160" id="t7" /></td>
          </tr>
          <tr>
            <td height="26" align="center">تعداد کالا</td>
            <td align="center" bgcolor="#3399FF"><input type="text" name="t10" id="textfield11" value="0"/></td>
          </tr>
          <tr>
            <td colspan="2" align="center"><input type="submit" name="h4" id="button2" value="ثبت کالا در پیش فاکتور" /></td>
          </tr>
          <tr>
            <td height="42" colspan="2" align="center" bgcolor="#FF99FF"><?php echo $val30 ?></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
 <form id="form5" name="form5" method="post" action=""> <div class="main30">
     <div class="main40">
       <table width="524" height="92" border="1" align="center">
         <tr>
           <td height="34" align="center" bgcolor="#FFCCFF">رویت پیش فاکتور</td>
         </tr>
         <tr>
           <td height="43" align="center"><input type="submit" name="b3" id="button4" value="مشاهده اجناس پیش فاکتور" /></td>
         </tr>
       </table>
       
       
     </div>
     <?php
  $a="";
$row2="";
	$res2="";
	$tabl="";
	$rec="";
	$d=0;
	$r=array("m1","m2","m3","m4","m5","m6","m7","m8","m9","m10","m11","m12","m13","m14","m15");
	 $z=array("k1","k2","k3","k4","k5","k6","k7","k8","k9","k10","k11","k12","k13","k14","k15","k16","k17","k18","k19","k20",
	 "k21","k22","k23","k24","k25","k26","k27","k28","k29","k30","k31","k32","k33","k34","k35","k36","k37","k38","k39","k40",
	 "k41","k42","k43","k44","k45","k46","k47","k48","k49","k50","k51","k52","k53","k54","k55","k56","k57","k58","k59","k60",
	 "k61","k62","k63","k64","k65","k66","k67","k68","k69","k70","k71","k72","k73","k74","k75","k76","k77","k78","k79","k80",
	 "k81","k82","k83","k84","k85","k86","k87","k88","k89","k90","k91","k92","k93","k94","k95","k96","k97","k98","k99","k100",
	 );
	
 //////////////////////////////////////////////رویت پیش فاکتور///////////////////////////////////
if(isset($_POST['b3'])){
$link= mysqli_connect("localhost","root","","saba");
mysqli_query($link,"set character set utf8");
$tabl=mysqli_query($link,"select * from kala1");
$rcordnum=mysqli_num_rows($tabl);
$d=0;
for($rec=1 ; ($rec<= $rcordnum)  ; $rec++){
	$row=mysqli_fetch_array($tabl);
	if ($dd1==$row[3] and $row[9]==1 and $row[7]!=0 and  $row[7]!=NULL ){	
	
	echo "<article class=$z[$d]>";
	
   echo   "<table width='169' height='218' border='1' align='center'>";
     echo   "<tr>";
   echo       "<td height='146' colspan='3'><img src='$row[10]' /> </td>";
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
    echo  "</table>";
  
	echo "</article> ";
	
$d++;

}

else{ }

	
}
}

///////////////////////////////////////////////انما یش پیش فاکتورhjlhl ////////////////////////////
?>
    </div></form>
  
   <div class="main50">
     <div class="main60">
       <table width="202" height="270" border="1">
       <tr>
         <td align="center"><table width="171" height="246" border="1">
           <tr>
             <td height="33" align="center" bgcolor="#CCCCFF">بستن پیش فاکتور</td>
           </tr>
           <tr>
             <td align="center" bgcolor="#FFCCCC">برای قطعی شدن فاکتور حتما باید پیش فاکتور بسته شود</td>
           </tr>
           <tr>
             <td align="center" bgcolor="#FFCCCC">بعد از بسته شدن پیش فاکتور امکان ویرایش یا حذف یا اضافه کردن کالا به فاکتور وجود ندارد</td>
           </tr>
           <tr>
           <?php
 	   
	$row="";
	$dd10="";
	$dd2="";
	$dd3="";	 
    $dd4="";
	
	$link5="";
	$link3="";
	$tab2="";
	$val2="";
	
	$resalt="";
	
	$rand=0;
	$t="";
	$t8=0;
	$pp3=0;
	$pp4=0;
	$pp5=0;
//////////////////////////////////h3 بستن فاکتور//////////////////
if(isset($_POST['b4'])){
	
	
$link5= mysqli_connect("localhost","root","","saba");
mysqli_query($link5,"set character set utf8");

	$tab2=mysqli_query($link5,"select * from kala1");
         $rcordnum1=mysqli_num_rows($tab2);
		
	$rand=rand(1,200);
	for($rec1=1 ; ($rec1<= $rcordnum1)  ; $rec1++){	
	$row=mysqli_fetch_array($tab2);
	if ($dd1==$row[3] and $row[9]==1 and $row[7]!=0 and  $row[7]!=NULL ){
		$dd2=$row[4];
		$dd3=$row[5];
		$dd4=$row[6];
		$t8=1;
		$pp4=$row[7];
		$pp5=$row[8];
		$t=date("y/m/d");
		$pp3= ($pp4 * $pp5)+$pp3;
		 $resalt = mysqli_query($link5,"update kala1 set chek=0 , shf='$rand' ,tar='$t' where (namek='$dd2' and brand1='$dd3' and model='$dd4' and user1=$dd1 and chek=1)"); 
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
	$resalt= mysqli_query($link3,"insert into faktor values('$rand','$t','$dd','$dd1','$pp3')");
	 $val2="eyeryertyery";
	}
}
	 //////////////////////////////////////پایان بستن فاکتور///////////
	
	
	 
     ?>
           
             <td height="36" align="center" bgcolor="#FFCCCC"><form id="form4" name="form4" method="post" action="">
               <input type="submit" name="b4" id="button3" value="بستن پیش فاکتور" />
             </form></td>
           </tr>
           <tr>
             <td height="57" align="center" bgcolor="#D6D6D6"><?php  echo $val2 ; echo 'با شماره فاکتور '; echo $rand; ?></td>
           </tr>
         </table></td>
       </tr>
       </table>
     </div>
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
	

	.main300{

	width:282px;
	height:608px;
	position:absolute;
	top:55px;
	right:210px;
		}		
	

  </style>
  </html>
</div>
