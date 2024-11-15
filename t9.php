<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
  <html dir="rtl">
  <head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
   
  </head>
    
  <body>
  <?php 
  $target_file="";
  $target_file="";
  ?>
    <?php
			////////////////////////////اپلود تصویر   
$target_file="";
$target_file="";
$pic10="";
/**
* Create by Mojtaba hosseini
* URL : www.Nemayman.com/upload-picture-php-code
*/
//if(isset($_POST["submit"])) {
//	$target_dir = "uploads/";

//	$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//	$uploadOk = 1;
	//$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

	
//	  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
//		  $target_dir = "uploads/";
    //      $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
     //    $pic10= $target_file;
		
	//	echo "فایل ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " با موفقیت آپلود شد.";
	// } else {
	//	echo "متاسفیم ، خطایی در آپلود تصویر رخ داده است.";
	//  }
//}
//}//////////////////////////////پایان اپلود
?>
            
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
$w1="";
$w2="";
$w3="";
$w4="";
$w5="";
$w6="";
$user4="";
$user5="";
$user6="";
$val="";
$tt="";

///////////////////////////////////////جستجو برای حذف کاربر////////////////////////
if(isset($_POST['b4'])){


$user4= $_POST['w8'];
$user5= $_POST['w9'];	
$user6= $_POST['w10'];

$link= mysqli_connect("localhost","root","","saba");
mysqli_query($link,"set character set utf8");
///echo" اطلاعات 646456456456 ثبت نشد";
if(!$user4 and !$user5 and !$user6  ){
	//$_POST['25'] =  "اطلاعات را کامل وارد کنید";
	//value.$_POST['25']=$_POST['25'] ;
	//$payam="ثبت نشد***اطلاعات را کامل وارد کنید فیلدها نباید خالی باشد";
	//echo $payam;
	$tt="اطلاعات کالا را کامل وارد کنید";
	}
	else{
		
$tabl=mysqli_query($link,"select * from safhe1");
$rcordnum=mysqli_num_rows($tabl);
$val1="dsfsdfgsdgfsdgsdgsdgsd200";
for($rec=1 ; ($rec<= $rcordnum)  ; $rec++){
	
	$row=mysqli_fetch_array($tabl);
	if($user4 == $row[1] and $user5 == $row[2]  and $user6 == $row[3] ){
		$w1=$row[1];
		$w2=$row[2];
		$w3=$row[3];
		$w4=$row[4];
	    $w5=$row[5];
		$w6=$row[6];
		
		$rec= $rcordnum;
		$d1=1;

	}
	else{
		
		$d1=0;
		}
}}}
//////////////////////////////////حذف کالا///////////////////////////////
if(isset($_POST["b2"])){
	$dd=$_POST['w1'];
	$dd1=$_POST['w2'];
	$dd2=$_POST['w3'];
   if($dd and $dd1 and $dd2){
	   $link= mysqli_connect("localhost","root","","saba");
	 $resalt = mysqli_query($link,"delete from safhe1 where (name='$dd' and brand='$dd1' and model='$dd2') ");
	$tt="کالا با موفقیت حذف شد";
   }
else{
	$tt="ابتدا کالا را جستجو کنید";
	}
	
	}
	//////////////////////////////////////////////////

?>
 
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
$dd3="";
$dd4="";
$dd5="";
$dd6="";
$dd7="";
$dd8="";
$d3="disabled";
$s1="";
$name6="";
$user6= "";	
$pass6= "";
$tel6= "";
$adres6= "";
$resalt="";
$v1="";
$v2="";
$v3="";
$v4="";
$v5="";
$v6="";
$user8="";
$user9="";
$user10="";
$val="";
$tt1="";

///////////////////////////////////////جستجو برای ویرایش کاربر////////////////////////
if(isset($_POST['b5'])){


$user8= $_POST['user8'];
$user9= $_POST['user9'];	
$user10= $_POST['user10'];

$link= mysqli_connect("localhost","root","","saba");
mysqli_query($link,"set character set utf8");
///echo" اطلاعات 646456456456 ثبت نشد";
if(!$user8 and !$user9 and !$user10  ){
	//$_POST['25'] =  "اطلاعات را کامل وارد کنید";
	//value.$_POST['25']=$_POST['25'] ;
	//$payam="ثبت نشد***اطلاعات را کامل وارد کنید فیلدها نباید خالی باشد";
	//echo $payam;
	 $tt1="اطلاعات کالا را کامل وارد کنید";
	}
	else{
		
$tabl=mysqli_query($link,"select * from safhe1");
$rcordnum=mysqli_num_rows($tabl);
$val1="dsfsdfgsdgfsdgsdgsdgsd200";
for($rec=1 ; ($rec<= $rcordnum)  ; $rec++){
	
	$row=mysqli_fetch_array($tabl);
	if($user8 == $row[1] and $user9== $row[2]  and $user10 == $row[3] ){
		$v1=$row[1];
		$v2=$row[2];
		$v3=$row[3];
		$v4=$row[4];
	    $v5=$row[5];
		$v6=$row[6];
		$rec= $rcordnum;
		$d1=1;

	}
	else{
		$tt1="اطلاعات کالا را کامل وارد کنید";
		$d1=0;
		}
}}}
//////////////////////////////////ویرایش کالا///////////////////////////////
if(isset($_POST["b3"])){
	$dd3=$_POST['v1'];
	$dd4=$_POST['v2'];
	$dd5=$_POST['v3'];
    $dd6=$_POST['v4'];
	$dd7=$_POST['v5'];
	$dd8=$_POST['v6'];
	//$tt1="456000000000000000000";
   if($dd3 and $dd4 and $dd5 and $dd6 and $dd7 and $dd8  ){
	   $link= mysqli_connect("localhost","root","","saba");
	 $resalt = mysqli_query($link,"update safhe1 set  name='$dd3',brand='$dd4',model='$dd5',t='$dd6',ghkh='$dd7',ghf='$dd8' where (name='$dd3' and brand='$dd4' and model='$dd5')");
	$tt1="کالا با موفقیت ویرایش شد";
   }
else{
	$tt1="ابتدا کالا را جستجو کنید";
	}
	
	}
	//////////////////////////////////////////////////

?>


 
  
    
  <div class="kool3">
    <div class="nav"></div>
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
         <li><a href="t9.php">مدیریت صفحه اول</a></li>
        <li><a href="out.php">خروج</a></li>
      </ul> 
    </div>
    <div class="main1">
      <div class="m2">
        <form action="" method="post" enctype="multipart/form-data">
          <table width="400" height="526" border="1" align="center">
            <tr>
              <td height="37" colspan="2" align="center" bgcolor="#CC99FF">اضافه کردن کالا</td>
            </tr>
            
                          <?php
		/////////////////////////////////////////اضافه کردن56765/////////////////////////////////////////
$h1="";
$h2="";
$h3="";
$h4="";
$h5="";
$h6="";
$h7="";
$link2="";
$tab2="";
$rcordnum1="";
$d="";
$val="";
$resalt="";
$val1="";
$rec1="";
$link20="";
$tab20="";
$row20="";
$pic101="";
//$_FILES["fileToUpload"]["name"]="";
//$_POST["fileToUpload"]="";
$pic10="";
if(isset($_POST["b100"])){
	$target_dir = "uploads/";
	$uploadOk = 1;
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
if (file_exists($target_file)) {
	
	  $uploadOk = 0;
	}
	if ($uploadOk == 0) {
	 $val= "تصویر قبلا اپلود شده *** فایل آپلود نشد. "; //  echo "متاسفیم، فایل آپلود نشد.";
	// if everything is ok, try to upload file
	} else {
move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
 $val= " فایل با موفقیت آپلود شد."; 
$pic10= $target_file;
$link20= mysqli_connect("localhost","root","","saba");
mysqli_query($link20,"set character set utf8");
mysqli_query($link20,"select * from kala100");
mysqli_query($link20,"update kala100 set  pic='$pic10'");
}}
if(isset($_POST["b1"])){
	
	$link20= mysqli_connect("localhost","root","","saba");
mysqli_query($link20,"set character set utf8");
 $tab20=mysqli_query($link20,"select * from kala100");
$row20=mysqli_fetch_array($tab20);
$pic101=$row20[0];

$link2= mysqli_connect("localhost","root","","saba");
mysqli_query($link2,"set character set utf8");
	//$dd1=$_POST['h1'];
$h1= $_POST['h1'];
$h2= $_POST['h2'];	
$h3= $_POST['h3'];
$h4= $_POST['h4'];
$h5= $_POST['h5'];
$h6= $_POST['h6'];
$h600=$_POST['t600'];
//$target_dir = "uploads/";
//$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
//$pic10= $target_file;
//$pic10= $pic11;
	 if($h1 and $h2 and $h3 and $h4  and $h5 and $h6){
		 
		 $tab2=mysqli_query($link2,"select * from safhe1");
         $rcordnum1=mysqli_num_rows($tab2);
		 if($rcordnum1==0){
			 $resalt = mysqli_query($link2,"insert into safhe1 values('1000','$h1','$h2','$h3','$h4','$h5','$h6','$h600','$pic101')");
			  $val="کالا با موفقیت اضافه شد";
			 }
	for($rec1=1 ; ($rec1<= $rcordnum1)  ; $rec1++){
		$val="سیشسیشسیشسیشس";
		$d=1;
	$row=mysqli_fetch_array($tab2);
	if(($h1 == $row[1]) and ($h2 == $row[2]) and($h3 == $row[3])  ){
		$d=0;
		$val= "این کالا قبلا ثبت شده به قسمت ویرایش بروید***اطلاعات ثبت نشد";
	$rec1=$rcordnum1;
	}
	else{
		
		}}
	 }
	 else{
		 $val="اطلاعات کالا کامل وارد شود";

		 }
	
	}
	if ($d==1){
$resalt = mysqli_query($link2,"insert into safhe1 values('1000','$h1','$h2','$h3','$h4','$h5','$h6','$h600','$pic101')");

if($resalt){
	 $val="کالا با موفقیت اضافه شد";
	//echo"  اطلاعات با موفقیت ثبت شد";
	}
	else{
		 $val="  کالا اضافه نشد";
	//	echo"اطلاعات  ثبت نشد" ;
		}}
		/////////////////////////////////////////اضافه کردن تمام/////////////////////////////////////////
?>
            
            <tr>
              <td height="120">تصویر کالا </td>
             <td><img src="<?php echo $pic10 ?>"></td>
            </tr>
            <tr>
              <td height="26"><input type="file" name="fileToUpload" id="fileToUpload" /></td>
              <td><input type="submit" name="b100" id="button" value="اپلود" /></td>
            </tr>
            <tr>
              <td width="124" height="26">نام کالا</td>
              <td width="212"><label for="textfield4"></label>
              <input type="text" name="h1" id="textfield4" /></td>
            </tr>
            <tr>
              <td height="26">برند</td>
              <td><label for="textfield5"></label>
              <input type="text" name="h2" id="textfield5" /></td>
            </tr>
            <tr>
              <td height="26">مدل</td>
              <td><label for="textfield6"></label>
              <input type="text" name="h3" id="textfield6" /></td>
            </tr>
            <tr>
              <td height="26">تعداد</td>
              <td><label for="textfield7"></label>
              <input type="text" name="h4" id="textfield7" /></td>
            </tr>
            <tr>
              <td height="23">قیمت خرید </td>
              <td><label for="textfield8"></label>
              <input type="text" name="h5" id="textfield8" /></td>
            </tr>
            <tr>
              <td height="23">قیمت فروش</td>
              <td><label for="textfield9"></label>
              <input type="text" name="h6" id="textfield9" /></td>
            </tr>
            <tr>
              <td height="66" align="center"><label for="textarea">شرح کالا</label></td>
              <td height="66" align="center"><textarea name="t600" id="textarea" cols="20" rows="3"></textarea></td>
            </tr>
            <tr>
              <td height="23" colspan="2" align="center"><input type="submit" name="b1" id="b11" value=" اضافه کردن کالا" /></td>
            </tr>
            
            
            
            
            

<tr>
            <td height="63" colspan="2"  > <?php echo "$val" ?> </td> </tr>
          </table>
        </form>
      </div>
      
      <div class="m1">
        <form  method="post" action="">
          <table width="247" height="506" border="1" align="center">
            <tr>
              <td height="26" colspan="2" align="center" bgcolor="#CC99FF">حذف  کالا</td>
            </tr>
            <tr>
              <td height="26">نام کالا</td>
              <td><label for="textfield2"></label>
              <input type="text" name="w8" id="textfield2"  size="15"/></td>
            </tr>
            <tr>
              <td width="102" height="26">برند</td>
              <td width="291"><input type="text" name="w9" id="textfield3"  size="15"/></td>
            </tr>
            <tr>
              <td height="26">مدل</td>
              <td><input type="text" name="w10" id="textfield" size="15" /></td>
            </tr>
            <tr>
              <td height="28" colspan="2" align="center"><input type="submit" name="b4" id="button3" value="جستجو" /></td>
            </tr>
            <tr>
              <td height="34">نام کالا</td>
              <td height="34"><label for="textfield11"></label>
              <input name="w1" type="text" id="textfield11" value="<?php echo "$w1"  ?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td height="34">برند</td>
              <td height="34"><label for="textfield12"></label>
              <input name="w2" type="text" id="textfield12" value="<?php echo "$w2"  ?>" readonly="readonly"  /></td>
            </tr>
            <tr>
              <td height="35">مدل</td>
              <td height="35"><label for="textfield13"></label>
              <input name="w3" type="text" id="textfield13" value="<?php echo "$w3"  ?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td height="32">تعداد</td>
              <td height="32"><label for="textfield14"></label>
              <input name="w4" type="text" id="textfield14" value="<?php echo "$w4"  ?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td height="33">قیمت خرید</td>
              <td height="33"><label for="textfield15"></label>
              <input name="w5" type="text" id="textfield15" value="<?php echo "$w5"  ?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td height="29">قیمت فروش</td>
              <td height="29"><label for="textfield16"></label>
              <input name="w6" type="text" id="textfield16" value="<?php echo "$w6"  ?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td height="28" colspan="2" align="center"><input type="submit" name="b2" id="button2" value="حذف کالا" /></td>
            </tr>
            <tr>
              <td height="39" colspan="2" align="center"><?php echo "$tt" ?></td>
            </tr>
            
  </table>
  </form>
        
  </div>
      <div class="m4">
        <form id="form1" name="form1" method="post" action="">
          <table width="243" height="498" border="1" align="center">
            <tr>
              <td height="24" colspan="2" align="center" bgcolor="#CC99FF">ویرایش کالا</td>
            </tr>
            <tr>
              <td width="76" height="30">نام کالا</td>
              <td width="145"><label for="textfield10"></label>
              <input type="text" name="user8" id="textfield10" /></td>
            </tr>
            <tr>
              <td height="28">برند</td>
              <td><label for="textfield17"></label>
              <input type="text" name="user9" id="textfield17" /></td>
            </tr>
            <tr>
              <td height="26">مدل</td>
              <td><label for="textfield18"></label>
              <input type="text" name="user10" id="textfield18" /></td>
            </tr>
            <tr>
              <td height="28" colspan="2" align="center"><input type="submit" name="b5" id="button5" value="جستجو" /></td>
            </tr>
            <tr>
              <td height="33">نام کالا</td>
              <td><label for="textfield19"></label>
              <input name="v1" type="text" id="textfield19" value="<?php echo "$v1"  ?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td height="26">برند</td>
              <td><label for="textfield20"></label>
              <input name="v2" type="text" id="textfield20" value="<?php echo "$v2"  ?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td height="29">مدل</td>
              <td><label for="textfield21"></label>
              <input name="v3" type="text" id="textfield21" value="<?php echo "$v3"  ?>" readonly="readonly" /></td>
            </tr>
            <tr>
              <td height="32">تعداد</td>
              <td><label for="textfield22"></label>
              <input type="text" name="v4" id="textfield22" value="<?php echo "$v4"  ?>" /></td>
            </tr>
            <tr>
              <td height="32">قیمت خرید</td>
              <td><label for="textfield23"></label>
              <input type="text" name="v5" id="textfield23"value="<?php echo "$v5"  ?>"  /></td>
            </tr>
            <tr>
              <td height="38">قسمت فروش</td>
              <td><label for="textfield25"></label>
              <input type="text" name="v6" id="textfield25"  value="<?php echo "$v6"  ?>"/></td>
            </tr>
            <tr>
              <td height="38" colspan="2" align="center"><label for="textfield24">
                <input type="submit" name="b3" id="button7" value="ویرایش کالا" />
              </label></td>
            </tr>
            <tr>
              <td colspan="2" align="center"> <?php echo "$tt1"  ?></td>
            </tr>
          </table>
        </form>
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
	padding-top: 10px;
	padding-right: 23px;
	padding-bottom: 15px;
	padding-left: 25px;
}
	
	
.kool3 {
	background:#66FFFF;
	height:647px;
	width: 1355px;
	position:absolute;
	right:0px;
    left:0px;
	top:0px;
}
.nav {
	background-color: #9FC;
	height: 50px;
	width: 1355px;
	position:absolute;
	right:0px;
	
}
.menu1 {
	background-color: #FC9;
	position:absolute;
	height: 550px;
	width: 200px;
	right:2px;
	top:49px;
}

.main1 {
	background-color:#6CF;
	height: 549px;
	width: 1145px;
	position:absolute;
	right:202px;
	top:49px;
	z-index:98;
	text-align: center;
}

.m1 {
	background-color: #FCC;
	height: 512px;
	width: 259px;
	position:absolute;
	left: 352px;
	top: 13px;
	text-align: center;
	border: 1px double #000;
}
.m2 {
	background-color:#FCF;
	height: 545px;
	width: 408px;
	position:absolute;
	left: 656px;
	top: -1px;
	text-align: center;
	border: 1px double #000;
}
.m4 {
	background-color: #FFCCFF;
	height:507px;
	width: 254px;
	position:absolute;
	left: 44px;
	top: 15px;
	text-align: center;
	border: 1px double #000;
}
  </style>
    
</html>
</div>
