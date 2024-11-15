<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
   <html dir="rtl">
    
    
  <link href="styl7.css" rel="stylesheet" type="text/css" />
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
    <div class="main10"><form action="" method="post">
      <table width="259" height="381" border="1" align="center">
        <tr>
          <td height="33" colspan="2" align="center" bgcolor="#CC99FF">حذف پرداخت نقدی</td>
        </tr>
        <tr>
          <td height="39" align="center">نام و نام خانوادگی</td>
          <td align="center">
            <label for="textfield10"></label>
            <input type="text" name="t10" id="textfield10" />
          </td>
        </tr>
        <tr>
          <td height="42" align="center">کلمه عبور</td>
          <td align="center">
            <label for="textfield11"></label>
            <input type="text" name="t11" id="textfield11" />
          </td>
        </tr>
        <tr>
          <td height="41" align="center">شماره پیگیری</td>
          <td align="center">
            <label for="textfield12"></label>
            <input type="text" name="t12" id="textfield12" />
        </td>
        </tr>
        <tr>
          <td height="40" colspan="2" align="center">
          <?php
		  $t10="";
		  $t11="";
		  $t12="";
		  $t13="";
		  $t14="";
		  $link3="";
		  $tab3="";
		  $rcordnum3="";
		  $rec3="";
		  $row3="";
		  $val3="";
		  if(isset($_POST["b3"])){
			  $t10=$_POST["t10"];
			  $t11=$_POST["t11"];
			  $t12=$_POST["t12"];
			  if($t10 and $t11 and $t12){
			$link3= mysqli_connect("localhost","root","","saba");
            mysqli_query($link3,"set character set utf8");
			$tab3=mysqli_query($link3,"select * from pnaghd");
            $rcordnum3=mysqli_num_rows($tab3);
				for($rec3=1 ;($rec3<=$rcordnum3);$rec3++){
					$row3=mysqli_fetch_array($tab3);
					if($t10==$row3[1] and $t11==$row3[0] and $t12==$row3[2]  ){
						$t13=$row3[3];
						$t14=$row3[4];
						$val3="پرداخت نقدی با موفقیت یافت شد";
						$rec3=$rcordnum3;
						}
						else{$val3="پرداخت نقدی با این مشخصات یافت نشد";}
					}
				  
				  }
			    else{$val3="اطلاعات را کامل وارد کنید";}
			  }
		   ?>
          
            <input type="submit" name="b3" id="button3" value="جستجو" />
          </td>
        </tr>
        <tr>
          <td height="41" align="center">مبلغ پرداختی</td>
          <td height="41" align="center">
            <label for="textfield13"></label>
            <input name="t13" type="text" id="textfield13" readonly="readonly" value="<?php echo $t13 ?>" />
          </td>
        </tr>
        <tr>
          <td height="41" align="center">تاریخ پرداخت</td>
          <td height="41" align="center">
            <label for="textfield14"></label>
            <input name="t14" type="text" id="textfield14" readonly="readonly" value="<?php echo $t14?>" />
          </td>
        </tr>
        <tr>
        
        <?php
		$t133="";
		$t144="";
		$link33="";
		$tab33="";
		$resalt33='';
		 if(isset($_POST["b33"])){
			 $t133=$_POST["t13"];
			  $t144=$_POST["t14"];
			  if($t133 and $t144){
			$link33= mysqli_connect("localhost","root","","saba");
            mysqli_query($link33,"set character set utf8");
			$tab33=mysqli_query($link33,"select * from pnaghd");
			  $resalt33 = mysqli_query($link33,"delete from pnaghd where ( mablagh='$t133' and tar='$t144')");
			   $val3="پرداخت نقدی با موفقیت حذف شد";
		       }
			   else{ $val3="اطلاعات را کامل وارد کنید"; }
		 }
		
		?>
          <td height="41" colspan="2" align="center"><input type="submit" name="b33" id="button" value="حذف مبلغ پرداختی" /></td>
        </tr>
        <tr>
          <td height="41" colspan="2" align="center"> <?php echo $val3 ?></td>
        </tr>
      </table></form>
    
    </div>
      <div class="main20"><form action="" method="post">
      <table width="259" height="381" border="1" align="center">
        <tr>
          <td height="33" colspan="2" align="center" bgcolor="#CC99FF">حذف پرداخت چکی</td>
        </tr>
        <tr>
          <td height="39" align="center">نام و نام خانوادگی</td>
          <td align="center">
            <label for="textfield10"></label>
            <input type="text" name="t110" id="textfield10" />
          </td>
        </tr>
        <tr>
          <td height="42" align="center">کلمه عبور</td>
          <td align="center">
            <label for="textfield11"></label>
            <input type="text" name="t111" id="textfield11" />
          </td>
        </tr>
        <tr>
          <td height="41" align="center">شماره سریال چک</td>
          <td align="center">
            <label for="textfield12"></label>
            <input type="text" name="t112" id="textfield12" />
        </td>
        </tr>
        <tr>
          <td height="40" colspan="2" align="center">
          <?php
		  $t110="";
		  $t111="";
		  $t112="";
		  $t113="";
		  $t114="";
		  $link330="";
		  $tab330="";
		  $rcordnum330="";
		  $rec330="";
		  $row330="";
		  $val113="";
		  if(isset($_POST["b4"])){
			  $t110=$_POST["t110"];
			  $t111=$_POST["t111"];
			  $t112=$_POST["t112"];
			  if($t110 and $t111 and $t112){
			$link330= mysqli_connect("localhost","root","","saba");
            mysqli_query($link330,"set character set utf8");
			$tab330=mysqli_query($link330,"select * from pchek");
            $rcordnum330=mysqli_num_rows($tab330);
				for($rec330=1 ;($rec330<=$rcordnum330);$rec330++){
					$row330=mysqli_fetch_array($tab330);
					if($t110==$row330[1] and $t111==$row330[0] and $t112==$row330[2]  ){
						$t113=$row330[3];
						$t114=$row330[4];
						$val113="پرداخت چکی با موفقیت یافت شد";
						$rec330=$rcordnum330;
						}
						else{$val113="پرداخت چکی بااین مشخصات یافت نشد";}
					}
				  
				  }
			    else{$val113="اطلاعات را کامل وارد کنید";}
			  }
		   ?>
          
            <input type="submit" name="b4" id="button3" value="جستجو" />
          </td>
        </tr>
        <tr>
          <td height="41" align="center">مبلغ چک</td>
          <td height="41" align="center">
            <label for="textfield13"></label>
            <input name="t113" type="text" id="textfield13" readonly="readonly" value="<?php echo $t113 ?>" />
          </td>
        </tr>
        <tr>
          <td height="41" align="center">تاریخ سررسید </td>
          <td height="41" align="center">
            <label for="textfield14"></label>
            <input name="t114" type="text" id="textfield14" readonly="readonly" value="<?php echo $t114?>" />
          </td>
        </tr>
        <tr>
        
        <?php
		$t1333="";
		$t1444="";
		$link333="";
		$tab333="";
		$resalt333='';
		 if(isset($_POST["b44"])){
			 $t1333=$_POST["t113"];
			  $t1444=$_POST["t114"];
			  if($t1333 and $t1444){
			$link333= mysqli_connect("localhost","root","","saba");
            mysqli_query($link333,"set character set utf8");
			$tab333=mysqli_query($link333,"select * from pnaghd");
			  $resalt333 = mysqli_query($link333,"delete from pchek where ( mablagh='$t1333' and tar='$t1444')");
			   $val113="پرداخت نقدی با موفقیت حذف شد";
		       }
			   else{$val113="اطلاعات را کامل وارد کنید"; }
		 }
		
		?>
          <td height="41" colspan="2" align="center"><input type="submit" name="b44" id="button" value="حذف چک پرداختی" /></td>
        </tr>
        <tr>
          <td height="41" colspan="2" align="center"> <?php echo $val113 ?></td>
        </tr>
      </table></form>
      
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
	background-color: #CCCCFF;
	height: 549px;
	width: 1145px;
	position:absolute;
	right:202px;
	top:51px;
	z-index:98;
	text-align: center;
}



  
  </style>
</html>
</div>
