<?php
session_start();
$d1=4;
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="kool3.css" rel="stylesheet" type="text/css" />

<html dir="rtl">
</head>

<body>
<?php
$name2="";
$user2="";
$pass2="";
$mobil2="";
$adress2="";
$user5="";
$p1="";
$p2="";
$p3="";
$p4="";
$p5="";
$val1="";
$val2="";	
$val3="";
$dd="";
$dd1="";
$dd2="";
$d3="disabled";
$s1="";
$name6="";
$user6= "";	
$pass6= "";
$tel6= "";
$adres6= "";
$resalt="";
///////////////////////////////////////جستجو برای حذف کاربر////////////////////////
if(isset($_POST['b1'])){
$d3='disabled';

$user3= $_POST['user3'];	

$link= mysqli_connect("localhost","root","","saba");
mysqli_query($link,"set character set utf8");
///echo" اطلاعات 646456456456 ثبت نشد";
if(!$user3 ){
	//$_POST['25'] =  "اطلاعات را کامل وارد کنید";
	//value.$_POST['25']=$_POST['25'] ;
	//$payam="ثبت نشد***اطلاعات را کامل وارد کنید فیلدها نباید خالی باشد";
	//echo $payam;
	 $val1="کلمه کاربری را وارد کنید";
	}
	else{
$tabl=mysqli_query($link,"select * from user");
$rcordnum=mysqli_num_rows($tabl);

for($rec=1 ; ($rec<= $rcordnum)  ; $rec++){
	$row=mysqli_fetch_array($tabl);
	if($user3 == $row[2]){
		$name2=$row[1];
		$user2=$row[2];
		$pass2=$row[3];
		$mobil2=$row[4];
	    $adress2=$row[5];
		$rec= $rcordnum;
		$d1=1;

	}
	else{
		
		$d1=0;
		}
}}}
//////////////////////////////////حذف کاربر///////////////////////////////
if(isset($_POST["b6"])){
	$dd=$_POST['name2'];
   if($dd){
	   $link= mysqli_connect("localhost","root","","saba");
	 $resalt = mysqli_query($link,"delete from user where name='$dd'");
	$val1="کاربر با موفقیت حذف شد";
   }
else{
	$val1="ابتدا کاربر را جستجو کنید";
	}
	
	}
	//////////////////////////////////////////////////
	
/////////////////////////////////////////

	//////////////////////////////////اضافه کردن//////////////////////////
	if(isset($_POST["b3"])){

		$link= mysqli_connect("localhost","root","","saba");
        mysqli_query($link,"set character set utf8");
	//$dd1=$_POST['h1'];
$name6= $_POST['h1'];
$user6= $_POST['h2'];	
$pass6= $_POST['h3'];
$tel6= $_POST['h4'];
$adres6= $_POST['h5'];
	 if($name6 and $user6 and $pass6 and $tel6  and $adres6){
		 $tabl=mysqli_query($link,"select * from user");
         $rcordnum=mysqli_num_rows($tabl);
	for($rec=1 ; ($rec<= $rcordnum)  ; $rec++){
		$d=1;
	$row=mysqli_fetch_array($tabl);
	if($user6 == $row[2]){
		$d=0;
		$val2= "این کلمه کاربری ثبت شده ***اطلاعات ثبت نشد";
	$rec=$rcordnum;
	}
	else{
		
		}}
	 }
	 else{
		 $val2="اطلاعات کاربر کامل شود";

		 }
	
	}
	if ($d==1){
$resalt = mysqli_query($link,"insert into user values(NULL,'$name6','$user6','$pass6','$tel6','$adres6',NULL)");

if($resalt){
	 $val2="اطلاعات با موفقیت ثبت شد";
	//echo"  اطلاعات با موفقیت ثبت شد";
	}
	else{
		 $val2="  اطلاعات با موفقیت ثبت نشد";
	//	echo"اطلاعات  ثبت نشد" ;
		}}
////////////	////////////////////////جستجو برای ویرایش//////////////////////////////
	if(isset($_POST['b7'])){

$user5= $_POST['user5'];	

$link1= mysqli_connect("localhost","root","","saba");
mysqli_query($link1,"set character set utf8");
///echo" اطلاعات 646456456456 ثبت نشد";
if(!$user5){
	//$_POST['25'] =  "اطلاعات را کامل وارد کنید";
	//value.$_POST['25']=$_POST['25'] ;
	//$payam="ثبت نشد***اطلاعات را کامل وارد کنید فیلدها نباید خالی باشد";
	//echo $payam;
	 $val3="کلمه کاربری را وارد کنید";
	}
	else{
$tab1l=mysqli_query($link1,"select * from user");
$rcordnum1=mysqli_num_rows($tab1l);

for($rec1=1 ; ($rec1<= $rcordnum1)  ; $rec1++){
	$row1=mysqli_fetch_array($tab1l);
	if($user5 == $row1[2]){
		
	//	$_POST['name2']=$row[1];
		$p1=$row1[1];
		$p2=$row1[2];
		$p3=$row1[3];
		$p4=$row1[4];
	    $p5=$row1[5];
		$rec1= $rcordnum1;
		$d1=1;
	
	}
	else{
		
		$d1=0;
		}}
}}
////////////////////////////////////ویرایش کاربر//////////////////////////
if(isset($_POST["b4"])){
	$dd2=$_POST['p2'];
	// if($dd2){
$name6= $_POST['p1'];
$user6= $_POST['p2'];	
$pass6= $_POST['p3'];
$tel6= $_POST['p4'];
$adres6= $_POST['p5'];
 if($name6 and $user6 and $pass6 and $tel6  and $adres6){ 
	 $link= mysqli_connect("localhost","root","","saba");
	 
	 if($dd2){
	   $link= mysqli_connect("localhost","root","","saba");
 $resalt = mysqli_query($link,"update user set   name='$name6' ,usern='$user6',pass='$pass6',mobile='$tel6',adress='$adres6' where usern='$dd2'");
	$val3="کاربر با ویرایش  شد";
   }
else{
	$val3="ابتدا کاربر را جستجو کنید";
	}
	
	}
	 
	  
	 else{
		  $val3="اطلاعات را کامل کنید";
		 }
	}
//}
	//////////////////////////////////////////////
?>

<body>
<div class="kool3">
  <div class="nav"></div>
  <div class="menu1">
  
  <ul>
       <li><a href="t8.php">مشاهده اجناس </a></li>
       <li><a href="t3.php">رویت مشتریان </a></li> 
       <li><a href="r3.php">مدیریت مشتری</a></li>
       <li><a href="t5.php"> پرداختی مشتری</a></li>
       <li><a href="t7.php"> مدیریت پرداخت</a></li>
       <li><a href="t4.php"> حساب مشتری</a></li>
       <li><a href="t2.php">رویت کالا</a></li>
 	   <li> <a href="t1.php">مدیریت کالا</a></li>
       <li><a href="t6.php">مدیریت فاکتور مشتری</a></li>
        <li><a href="t9.php">مدیریت صفحه اول</a></li>
       <li><a href="r1.php">خروج </a></li>
       
   </ul> 
  </div>
  <div class="main1"></div>
  <div class="main2"></div>
  <div class="main3">
    <div class="main3-1">
      <form id="form2" name="form2" method="post" action="">
        <table width="339" height="431">
          <tr>
            <td height="51" colspan="3" align="center" bgcolor="#CC66CC">حذف کاربر</td>
          </tr>
          <tr>
            <td width="117" height="58" align="left"> کلمه کاربری* </td>
            <td height="58" colspan="2" align="right"><label for="b2"></label>
              <input type="text" name="user3" id="b" size="30" value=""   /></td>
          </tr>
          <tr>
            <td height="54" align="left" valign="top">&nbsp;</td>
            <td colspan="2" align="center" valign="top"><input type="submit" name="b1" id="b2" value="جستجو"  /></td>
          </tr>
          <tr>
            <td height="26" align="left">نام و نام خانوادگی</td>
            <td colspan="2" align="right"><input name="name2" type="text"  id="w1"  value="<?php echo "$name2"  ?>" size="30" readonly="readonly"  /></td>
          </tr>
          <tr>
            <td height="30" align="left">کلمه کاربری</td>
            <td colspan="2" align="right"><input name="user2" type="text" id="w2"  value="<?php echo "$user2"  ?>" size="30" readonly="readonly" /></td>
          </tr>
          <tr>
            <td height="24" align="left">رمز عبور</td>
            <td colspan="2" align="right"><input name="pass2" type="text" id="w3" value="<?php echo "$pass2"  ?>" size="30" readonly="readonly"/></td>
          </tr>
          <tr>
            <td height="24" align="left">موبایل</td>
            <td colspan="2" align="right"><input name="mobil2" type="text" id="w4" value="<?php echo "$mobil2"  ?>"  size="30" readonly="readonly"/></td>
          </tr>
          <tr>
            <td height="24" align="left">آدرس</td>
            <td colspan="2" align="right"><input name="adress2" type="text" id="textfield"   value="<?php echo "$adress2"  ?>" size="30" readonly="readonly" /></td>
          </tr>
          <tr>
            <td height="58" align="left">&nbsp;</td>
            <td width="66" align="left">&nbsp;</td>
            <td width="140" align="right"><input name="b6" type="submit" id="b6" value=" حذف کاربر" formaction=""/></td>
          </tr>
          <tr>
            <td height="58" colspan="3" align="center" bgcolor="#FFCCCC"> <?php echo "$val1"  ?>&nbsp;</td>
          </tr>
        </table>
      </form>
    </div>
    <div class="main3-2">
      <form id="form1" name="form1" method="post" action="">
        <table width="338" height="313" align="center">
          <tr>
            <td height="54" colspan="4" align="center" bgcolor="#CC66CC"><label for="w1"></label>
              اضافه کردن کاربر</td>
          </tr>
          <tr>
            <td height="21" colspan="2" align="left" valign="bottom">&nbsp;</td>
            <td colspan="2" align="right" valign="bottom">&nbsp;</td>
          </tr>
          <tr>
            <td height="24" colspan="2" align="left"><label for="w2"></label>
            نام و نام خانوادگی</td>
            <td colspan="2" align="right"><label for="h1"></label>
            <input type="text" name="h1" id="h1" size="30" /></td>
          </tr>
          <tr>
            <td height="24" colspan="2" align="left"><label for="w3"></label>
            کلمه کاربری</td>
            <td colspan="2" align="right"><label for="h2"></label>
            <input type="text" name="h2" id="h2" size="30" /></td>
          </tr>
          <tr>
            <td height="24" colspan="2" align="left">رمز عبور</td>
            <td colspan="2" align="right"><label for="h3"></label>
            <input type="text" name="h3" id="h3"  size="30"/></td>
          </tr>
          <tr>
            <td height="25" colspan="2" align="left">موبایل</td>
            <td colspan="2" align="right"><label for="h4"></label>
            <input type="text" name="h4" id="h4"  size="30"/></td>
          </tr>
          <tr>
            <td height="25" colspan="2" align="left"><label for="w4">آدرس</label></td>
            <td colspan="2" align="right"><label for="h5"></label>
            <input type="text" name="h5" id="h5" size="30"/></td>
          </tr>
          <tr>
            <td width="50" height="47" align="left">&nbsp;</td>
            <td width="72" align="left">&nbsp;</td>
            <td width="66" align="left">&nbsp;</td>
            <td width="116" align="right"><input type="submit" name="b3" id="b4" value="اضافه کردن" /></td>
          </tr>
          <tr>
            <td height="47" colspan="4" align="center" bgcolor="#FFCCCC"><label for="w5"><?php echo "$val2"  ?></label></td>
          </tr>
        </table>
      </form>
    </div>
    <div class="main3-3">
      <form id="form3" name="form3" method="post" action="">
        <table width="334" height="439">
          <tr>
            <td height="49" colspan="3" align="center" bgcolor="#CC66CC">ویرایش کاربر</td>
          </tr>
          <tr>
            <td width="134" height="58" align="left"> کلمه کاربری* </td>
            <td colspan="2" align="right"><label for="p11"></label>
            <input name="user5" type="text" id="p11" size="30" value=""  /></td>
          </tr>
          <tr>
            <td height="57" align="right" valign="top">&nbsp;</td>
            <td colspan="2" align="center" valign="top"><input type="submit" name="b7" id="button" value="جستجو" /></td>
          </tr>
          <tr>
            <td height="24" align="left">نام و نام خانوادگی</td>
            <td colspan="2" align="right"><label for="p11"></label>
            <input name="p1" type="text" id="p1" size="30" value="<?php echo "$p1"  ?>" /></td>
          </tr>
          <tr>
            <td height="24" align="left">کلمه کاربری</td>
            <td colspan="2" align="right"><label for="p2"></label>
            <input name="p2" type="text" id="p2"  value="<?php echo "$p2"  ?>" size="30" readonly="readonly" /></td>
          </tr>
          <tr>
            <td height="24" align="left">رمز عبور</td>
            <td colspan="2" align="right"><label for="p3"></label>
            <input name="p3" type="text" id="p3" size="30" value="<?php echo "$p3"  ?>" /></td>
          </tr>
          <tr>
            <td height="24" align="left">موبایل</td>
            <td colspan="2" align="right"><label for="p4"></label>
            <input name="p4" type="text" id="p4" size="30" value="<?php echo "$p4"  ?>" /></td>
          </tr>
          <tr>
            <td height="24" align="left">آدرس</td>
            <td colspan="2" align="right"><label for="p5"></label>
            <input name="p5" type="text" id="p5" size="30" value="<?php echo "$p5"  ?>"/></td>
          </tr>
          <tr>
            <td height="64" align="left">&nbsp;</td>
            <td width="82">&nbsp;</td>
            <td width="134"><input type="submit" name="b4" id="b3" value="ویرایش کاربر"  "$s1" /></td>
          </tr>
          <tr>
            <td height="67" colspan="3" align="center" bgcolor="#FFCCCC"><?php echo "$val3"  ?>&nbsp;</td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  <div class="main4"></div>
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
	

</style>
</html>