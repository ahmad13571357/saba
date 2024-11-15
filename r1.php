<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link href="r2.php" >
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"utf-8" />
<title>Untitled Document</title>
<link href="kool.css" rel="stylesheet" type="text/css" />
<html dir="rtl">
</head>
<link href="r3.php" >
<?php
$payam="";
$payam1="";
//////////////////////////////////////////////////ثبت اطلاعات اعضا/////////////////////////////
if(isset($_POST['insert1'])){
$name= $_POST['name'];
$user= $_POST['user'];	
$pass= $_POST['pass'];
$tel= $_POST['tel'];
$adres= $_POST['adres'];
$link= mysqli_connect("localhost","root","","saba");
mysqli_query($link,"set character set utf8");
///echo" اطلاعات 646456456456 ثبت نشد";
if(!$name or !$user or !$pass or !$tel  or !$adres){
	//$_POST['25'] =  "اطلاعات را کامل وارد کنید";
	//value.$_POST['25']=$_POST['25'] ;
	$payam="ثبت نشد***اطلاعات را کامل وارد کنید فیلدها نباید خالی باشد";
	//echo $payam;
	}
	else{
$tabl=mysqli_query($link,"select * from user");
$rcordnum=mysqli_num_rows($tabl);
$d=1;	
for($rec=1 ; ($rec<= $rcordnum)  ; $rec++){
	$row=mysqli_fetch_array($tabl);
	if($user == $row[2]){
		$d=0;
		$payam= "این کلمه کاربری ثبت شده *** کلمه کاربری دیگری انتخاب کنید**اطلاعات ثبت نشد";
//	$_POST['m']=	 "کلمه کاربری تکراری است *** اطلاعات ثبت نشد";
	//$ss=$_POST['m'];
	//echo'[<input class="m" id="m" style="position:absolute 200px 200px"  >"gdfgdfg"</div>]'.$ss; 
	
	//"<input name='m' type=’text’   id='m'  size='60'  position='100px'  value='$ss' form='form1'/>";
		//echo $_POST['m'];//"     کلمه کاربری تکراری است *** اطلاعات ثبت نشد    ";
		//echo '<hr>';
			//	exit;
	}
	else{
		///echo"fghfgjhgfjhgfjh";
		}
}
if ($d==1){
$resalt = mysqli_query($link,"insert into user values(NULL,'$name','$user','$pass','$tel','$adres',NULL)");

if($resalt){
	$payam="اطلاعات با موفقیت ثبت شد";
	//echo"  اطلاعات با موفقیت ثبت شد";
	}
	else{
		$payam="  اطلاعات با موفقیت ثبت نشد";
	//	echo"اطلاعات  ثبت نشد" ;
		}
}
	}
	
		
}

			
///////////////////////////////////////////////ورود اعضا/////////////

		
		if(isset($_POST['insert2'])){
		//	mysqli_close("localhost","root","","saba");
			 $user2= $_POST['user2'];	
             $pass2= $_POST['pass2'];
			 $link= mysqli_connect("localhost","root","","saba");
             mysqli_query($link,"set character set utf8");
			 $dd=3;	
             if( !$user2 or !$pass2){
				 $payam1= "اطلاعات را کامل وارد کنید فیلدها نباید خالی باشد"; 
             // echo "اطلاعات را کامل وارد کنید فیلدها نباید خالی باشد";      
			                     }
	else{
$tabl=mysqli_query($link,"select * from user");
$rcordnum1=mysqli_num_rows($tabl);
	
for($rec1=1 ; ($rec1<= $rcordnum1)  ; $rec1++){
	$row=mysqli_fetch_array($tabl);
	if(($user2 =='1010' and $pass2=='1020') or ($user2 =='2020' and $pass2=='2030')) {
	header("Location:t8.php");	

	}
	if($user2 ==$row[2] and $pass2==$row[3]){
		$dd=1;	
	//	$name=$row[1];
	
		$_SESSION['x']=$row[1];
		$_SESSION['y']=$row[2];
		$_SESSION['z']=$row[3];
		//echo " کاربر وجود دارد";
	////	echo '</br>';
	//	echo "وارد صفحه شخصی خود شدید ";
		//echo  "$_SESSION1";
		header("Location:r2-0.php");
		
//redirect("r2.php");
	//<a href="r2.php"> </a>;
		//redirect($url);
		//redirect("https://www.google.com"); 
		//exit;
	}
		else{
			$dd=0;	
			
		}
}}
	
	if ($dd==1){
		
		}
else if($dd==0){
	$payam1="  کاربر مورد نظر یافت نشد**ابتدا ثبت نام کنید یااطلاعات کاربر را بطور صحیح وارد کنید";
	//echo " کاربر مورد نظر یافت نشد ابتدا ثبت نام کنید";
	}
	
}

	//function myFunc(){
   
  //  $b = "gfdgdfgfdg";
    
   // return $b;
 //}

?>
<body>
<div class="kool">
  <div class="nav">
  <ul>
    <li><a href="23.php">صفحه اصلی</a></li>
  </ul>
  </div>
  <div class="main">
  <div class="sabt">
    <form action="" method="post" name="form1" id="form1" class="form1">
      <table width="359" height="424" border="0">
  <tr>
    <td height="53" colspan="2" align="center" bgcolor="#99CCCC">ثبت اطلاعات</td>
    </tr>
  <tr>
    <td width="248" height="45" align="right"><label for="name"></label>
      *
        <input name="name" type="text" id="name" dir="rtl" lang="fa" /></td>
    <td width="101" align="left" valign="middle">نام و نام خانوادگی</td>
  </tr>
  <tr>
    <td height="40" align="right"><label for="user"></label>
      *
        <input name="user" type="text" id="user" /></td>
    <td align="left" valign="middle">کلمه کاربری</td>
  </tr>
  <tr>
    <td height="52" align="right"><label for="pass"></label>
      *
        <input type="text" name="pass" id="pass" /></td>
    <td align="left" valign="middle">رمز عبور</td>
  </tr>
  <tr>
    <td height="44" align="right"><label for="tel"></label>
      *
        <input type="text" name="tel" id="tel" /></td>
    <td align="left" valign="middle">موبایل &nbsp;</td>
  </tr>
  <tr>
    <td height="91" align="right"><label for="adres"></label>
      *
        <textarea name="adres" cols="" rows="4" id="adres" dir="rtl"></textarea></td>
    <td align="left" valign="middle">آدرس&nbsp;</td>
  </tr>
  <tr>
    <td align="right"><input type="submit" name="insert1" id="button" value="ثبت اطلاعات" /></td>
    <td align="left"><input type="reset" name="button2" id="button2" value="بازنشانی" /></td>
  </tr>
  <tr>
    <td height="50" colspan="2" align="center" valign="middle" bgcolor="#FFFFCC"><?php echo "$payam"  ?><label for="m"></label></td>
    </tr>
</table>

    </form>
    </div>

    
    <div class="vorod">
      <form id="form2" name="form2" method="post" action="">
        <table width="298" height="330" border="0">
          <tr>
            <td height="52" colspan="2" align="center" nowrap="nowrap" bgcolor="#99CCCC">ورود اعضاء</td>
          </tr>
          <tr>
            <td height="97" align="right"><label for="textfield"></label>
              *                
              <input type="text" name="user2" id="user2" /></td>
            <td align="left">کلمه کاربری</td>
          </tr>
          <tr>
            <td height="51" align="right"><label for="textfield2"></label>
              *
                <input type="text" name="pass2" id="pass2" /></td>
            <td align="left">رمز عبور</td>
          </tr>
          <tr>
            <td height="68" align="right"><input type="submit" name="insert2" id="button3" value="تائید" /></td>
            <td align="left"><input type="reset" name="button4" id="button4" value="بازنشانی" /></td>
          </tr>
          <tr>
            <td height="50" colspan="2" align="center" valign="middle" bgcolor="#FFFFCC"><?php echo "$payam1"  ?></td>
          </tr>
        </table>
      </form>
    </div>
  </div>
  <div class="foot"></div>
</div>

</body>
<style>
</style>
</html>
