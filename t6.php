<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
 <html dir="rtl">
   
 
<link href="styl6.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div class="kool3">
<div class="nav"></div>
    
<div class="menu1">
     
      <ul>
        <li><a href="t8.php">مشاهده اجناس </a></li>
        <li><a href="t3.php">رویت مشتریان </a></li>
        <li><a href="r3.php"> مدیریت مشتری</a></li>
        <li><a href="t5.php"> پرداختی مشتری</a></li>
        <li><a href="t7.php"> مدیریت پر داخت</a></li>
        <li><a href="t4.php"> حساب مشتری</a></li>
        <li > <a href="t2.php">رویت کالا</a></li>
        <li> <a href="t1.php">مدیریت کالا</a></li>
        <li > <a href="t6.php">مدیریت فاکتور خریدار</a></li>
        <li > <a href="t9.php">مدیریت صفحه اول</a></li>
        <li><a href="out.php">خروج</a></li>
      </ul> 
  </div>
<div class="main1">
  <div class="main2"><form action="" method="post">
    <table width="283" height="433" border="1" align="center">
      <tr>
        <td height="41" colspan="2" align="center" bgcolor="#FF66FF">حذف فاکتور خریدار</td>
        </tr>
      <tr>
        <td width="120" height="30" align="center">شماره فاکتور</td>
        <td width="129">
          <label for="textfield2"></label>
          <input type="text" name="t1" id="textfield2" />
       </td>
      </tr>
      <tr>
        <td height="34" align="center">کلمه عبور خریدار</td>
        <td>
          <label for="textfield2"></label>
          <input type="text" name="t2" id="textfield2" />
       </td>
      </tr>
      <tr align="center">
        <td height="52" colspan="2">
          <input type="submit" name="b1" id="button" value="جستجوی فاکتور" />
          
           <?php
 $d15=0;	   
	$row5="";
	$dd10="";
	$tt11="";
	$tt12="";	 
    $tt13="";
	$tt14="";
	$tt15="";
	$tt16="";
	$tt17="";
	$tt18="";
	$link12="";
	$tab2="";
	$val2="";
	$val3="";
	$val14="";
	$val4="";
	$rcordnum11="";
	$resat="";
//////////////////////////////////h3 جستجو برای حذف فاکتور//////////////////
if(isset($_POST['b1'])){
	$tt11=$_POST['t1'];
	$tt12=$_POST['t2'];
$link12= mysqli_connect("localhost","root","","saba");
mysqli_query($link12,"set character set utf8");
///echo" اطلاعات 646456456456 ثبت نشد";

if(!$tt11 and !$tt12 ){
	//$_POST['25'] =  "اطلاعات را کامل وارد کنید";
	//value.$_POST['25']=$_POST['25'] ;
	//$payam="ثبت نشد***اطلاعات را کامل وارد کنید فیلدها نباید خالی باشد";
	//echo $payam;

	 $val4="اطلاعات کالا را کامل وارد کنید";
	}
	else{
		 $tab12=mysqli_query($link12,"select * from faktor");
         $rcordnum11=mysqli_num_rows($tab12);
		 $d15=0;
	for($rec11=1 ; ($rec11<= $rcordnum11)  ; $rec11++){	
	$row5=mysqli_fetch_array($tab12);
	if(($tt11 == $row5[0]) and ($tt12 == $row5[3]) ){
		
		$tt13=$row5[0];
		$tt14=$row5[1];
		$tt15=$row5[2];
		$tt16=$row5[3];
		$tt17=$row5[4];
		
		 $val4="کلید حذف را زده تا فاکتور حذف شود";
		//$tt6=$row[6];
		//$tt7=$row[8];
	//	$tt8=$row[7];
	//	$tt9=$row[9];
	//	$tt10=$row[10];
		$d15=1;
	//	$val2=$tt11;
	
		//$val14= "لطفا عدد یک را وارد کرده کلید ویرایش را بزنید";
	$rec11=$rcordnum11;
	}
	else{
		$d15=0;
		$val4= "فاکتور مورد نظر وجود ندارد***";
		}}
	 }}
	 //////////////////////////////////////پایان جستجوحذف ش///////////
	 ?>
        </td>
        </tr>
      <tr>
        <td height="34" align="center">
          <label for="textfield3"></label>
          شماره فاکتور
        </td>
        <td><input name="t3" type="text" id="textfield" readonly="readonly" value="<?php echo $tt13 ?>" /></td>
      </tr>
      <tr>
        <td height="35" align="center">تاریخ خرید</td>
        <td height="35"><label for="textfield9">
          <input name="t4" type="text" id="textfield11" readonly="readonly" value="<?php echo $tt14 ?>" />
        </label></td>
      </tr>
      <tr>
        <td height="35" align="center">نام خریدار</td>
        <td height="35">
          <label for="textfield4">
            <input type="text" name="t5" id="textfield9" value="<?php echo $tt15?>"/>
          </label></td>
        
        
      </tr>
      <tr>
        <td height="35" align="center">کلمه عبور</td>
        <td>
          <label for="textfield5"></label>
          <input name="t6" type="text" id="textfield5" readonly="readonly" value="<?php echo $tt16 ?>" />
        </td>
      </tr>
      <tr>
        <td align="center">جمع کل</td>
        <td>
          <label for="textfield6">
          <?php
		  /////////////////////////////////////////ویرایش فاکتور//////////////////////////////////
		  $m="";
		   $m1="";
		  $link20="";
		   $resalt20="";
		   $tab20="";
		   $val14="";
		  if(isset($_POST['b5'])){
			   $m=$_POST['t1'];
			  $m1=$_POST['t2'];
		 $link20= mysqli_connect("localhost","root","","saba");
         mysqli_query($link20,"set character set utf8");
       // $rcordnum11=mysqli_num_rows($tab12);
		 $tab20=mysqli_query($link20,"select * from faktor");
		  $resalt20 = mysqli_query($link20,"update faktor set user2='$m1' where ( shf1=$m)");
		  $val14="1245345332453";
		  }
		  ?>
            <input name="t7" type="text" id="textfield10" readonly="readonly" value="<?php echo $tt17 ?>" />
          </label></td>
      </tr>
          <?php
		  ///////////////////////////////////حذف فاکتور//////////////////////
		  $m="";
		   $m1="";
		   $m2="";
		   $m3="";
		   $m4="";
		   $m5="";
		    $m6="";
		    $m7="";
		  $link30="";
		  $link31="";
		   $resalt30="";
		   $tab30="";
		   $val14="";
		  if(isset($_POST['b2'])){
			   $m3=$_POST['t3'];
			   $m4=$_POST['t4'];
			  $m5=$_POST['t5'];
			  $m6=$_POST['t6'];
			  $m7=$_POST['t7'];
			  
			If($m3 and $m6){
		 $link30= mysqli_connect("localhost","root","","saba");
         mysqli_query($link30,"set character set utf8");
       // $rcordnum11=mysqli_num_rows($tab12);
		 $tab30=mysqli_query($link30,"select * from faktor");
		 $resalt30 = mysqli_query($link30,"delete from faktor where (shf1='$m3' and tar1='$m4' and name1='$m5' and user2='$m6' and jam='$m7')"); 
		  if($resalt30){$val4="فاکتور با موفقیت حذف شد";}
		  else{$val4="فاکتور با موفقیت حذف نشد100";}
		  ////////////////////////////////////////////////////////
		  $link31= mysqli_connect("localhost","root","","saba");
         mysqli_query($link31,"set character set utf8");
		  $resalt31 = mysqli_query($link31,"delete from kala1 where (shf='$m3'  and user1='$m6' and chek=0)"); 
			}
		  }
		  ?>
          
          
          
      <tr>
        <td align="center"><input type="button" name="b5" id="b5" value="ویرایش" /></td>
        <td align="center"><input type="submit" name="b2" id="button2" value="حذف فاکتور" /></td>
      </tr>
      <tr>
        <td height="93" colspan="2" align="center"><?php echo $val4 ?></td>
        </tr>
  </table></form>
  </div>
  <div class="main3"><form action="" method="post">
    <table width="267" height="479" border="1" align="center">
  <tr>
    <td height="37" colspan="2" align="center" bgcolor="#FF66FF">ویرایش فاکتور خریدار</td>
    </tr>
  <tr>
    <td width="99" align="center">شماره فاکتور</td>
    <td width="152" align="center">
      <label for="textfield5"></label>
      <input type="text" name="t7" id="textfield5" />
   </td>
  </tr>
  <tr>
    <td align="center">کلمه عبورخریدار</td>
    <td align="center">
      <label for="textfield6"></label>
      <input type="text" name="t8" id="textfield6" />
    </td>
  </tr>
  <tr>
    <td height="62" colspan="2" align="center">
      <input type="submit" name="b3" id="button3" value="جستجوی فاکتور" />
               
          <?php
 $d5=0;	   
	$row="";
	$dd10="";
	$tt1="";
	$tt2="";	 
    $tt3="";
	$tt4="";
	$tt5="";
	$tt6="";
	$tt7="";
	$tt8="";
	$link2="";
	$tab2="";
	$val2="";
	$val3="";
	$val4="";
	
	$resalt="";
//////////////////////////////////h3 جستجو برای ویرایش کردن کالا//////////////////
if(isset($_POST['b3'])){
	$tt1=$_POST['t7'];
	$tt2=$_POST['t8'];
$link2= mysqli_connect("localhost","root","","saba");
mysqli_query($link2,"set character set utf8");
///echo" اطلاعات 646456456456 ثبت نشد";

if(!$tt1 and !$tt2 ){
	//$_POST['25'] =  "اطلاعات را کامل وارد کنید";
	//value.$_POST['25']=$_POST['25'] ;
	//$payam="ثبت نشد***اطلاعات را کامل وارد کنید فیلدها نباید خالی باشد";
	//echo $payam;

	 $val4="اطلاعات کالا را کامل وارد کنید";
	}
	else{
		 $tab2=mysqli_query($link2,"select * from kala1");
         $rcordnum1=mysqli_num_rows($tab2);
		 $d5=0;
	for($rec1=1 ; ($rec1<= $rcordnum1)  ; $rec1++){	
	$row=mysqli_fetch_array($tab2);
	if(($tt1 == $row[0]) and ($tt2 == $row[3]) and $row[9]==0 ){
		
		$tt3=$row[0];
		$tt4=$row[2];
		$tt5=$row[3];
		$tt6=$row[9];
		//$tt6=$row[6];
		//$tt7=$row[8];
	//	$tt8=$row[7];
	//	$tt9=$row[9];
	//	$tt10=$row[10];
		$d5=1;
	//	$val2=$tt11;
	
		$val4= "لطفا عدد یک را وارد کرده کلید ویرایش را بزنید";
	$rec1=$rcordnum1;
	}
	else{
		$d5=0;
		$val4= "فاکتور مورد نظر وجود ندارد***";
		}}
	 }}
	 //////////////////////////////////////پایان جستجو ویرایش///////////
	 $link="";
	  $dd100="";
	 $dd2="";
	  $dd3="";
	   $dd6="";
	    $dd10="";
		$link30="";
	//$gg=ِdate("Y-m-d h:i:sa" );
	 if(isset($_POST["b4"])){
	$dd100=$_POST['t12'];
	$dd2=$_POST['t9'];
    $dd3=$_POST['t11'];
	//$dd7=$_POST['v5'];
	//$dd8=$_POST['v6'];
	//$tt1="456000000000000000000";
   if($dd100==1){
	 $link= mysqli_connect("localhost","root","","saba");
	 $resalt = mysqli_query($link,"update kala1 set chek=1 , shf=NULL where (shf='$dd2' and user1='$dd3' and chek=0)"); 
	/////////////////////////////////////////////////////////////////// 
	  $link30= mysqli_connect("localhost","root","","saba");
         mysqli_query($link30,"set character set utf8");
	  mysqli_query($link30,"delete from faktor where (shf1='$dd2'   and user2='$dd3' )");
	 
	  ///
	if($resalt){$val14=" فاکتور با موفقیت ویرایش شد**فاکتور تبدیل به پیش فاکتور شد ";}
	else{$val4="مشکل بانک اطلاعاتی";}
   }
else{
	$val4=" فاکتور را جستجو کنید**لطفا عدد یک را وارد کنید";
	}
	if($dd10==0){$val4=" فاکتور این کالا بسته شده امکان ویرایش وجود ندارد";}
	
	}
	 
	 ?>
    </td>
    </tr>
  <tr>
    <td align="center">شماره فاکتور</td>
    <td align="center">
      <label for="textfield7"></label>
      <input name="t9" type="text" id="textfield7" readonly="readonly" value="<?php echo $tt3?>"/>
    </td>
  </tr>
  <tr>
    <td align="center">نام خریدار</td>
    <td align="center"><label for="textfield8"></label>
      <input name="t10" type="text" id="textfield8" value="<?php echo $tt4 ?>" readonly="readonly" /></td>
  </tr>
  <tr>
    <td align="center">کلمه عبور</td>
    <td align="center">
      <label for="textfield3"></label>
      <input name="t11" type="text" id="textfield3" value="<?php echo $tt5 ?> " readonly="readonly"/>
  </td>
  </tr>
  <tr>
    <td align="center">چک فاکتور</td>
    <td align="center">
      <label for="textfield4"></label>
      <input type="text" name="t12" id="textfield4" value="<?php echo $tt6 ?>" />
    </td>
  </tr>
  <tr>
    <td height="55" colspan="2" align="center">چک فاکتور را عدد یک قرار دهید تا خریدار بتواند فاکتور را تصحیح کند**فاکتور تبدیل به پیش فاکتورمی شود</td>
    </tr>
  <tr>
    <td colspan="2" align="center">
      <input type="submit" name="b4" id="button4" value="ویرایش فاکتور" />
   </td>
    </tr>
  <tr>
    <td height="66" colspan="2" align="center"><?php echo $val4 ?></td>
    </tr>
</table></form>

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
	
	
.kool3 {
	background:#66FFFF;
	direction:rtl;
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
	background-color: #CCF;
	height: 549px;
	width: 1145px;
	position:absolute;
	right:202px;
	top:50px;
	z-index:98;
	text-align: center;
}


  </style>
</html>