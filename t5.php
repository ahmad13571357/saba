<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <title>Untitled Document</title>
   <html dir="rtl">
    
    <link href="r2-0.php" >
  <link href="styl5.css" rel="stylesheet" type="text/css" />
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
      <li> <a href="t1.php">مدیریت کالا</a></li>
      <li > <a href="t2.php">رویت کالا</a></li>
      <li > <a href="t6.php">مدیریت فاکتور خریدار</a></li>
      <li > <a href="t9.php">مدیریت صفحه اول</a></li>
      <li><a href="out.php">خروج</a></li>
    </ul> 
    </div>
  <div class="main1">
  
      <div class="main20"><form action="" method="post">
        <table width="279" height="328" border="1" align="center">
          <tr>
            <td colspan="2" align="center" bgcolor="#CC99FF">ثبت پرداخت نقدی</td>
          </tr>
          <tr>
            <td width="114" align="center">
              <label for="textfield"></label>
              نام و نام خانوادگی
           </td>
            <td width="149" align="center"><input type="text" name="t1" id="textfield" /></td>
          </tr>
          <tr>
            <td align="center">
              <label for="textfield2"></label>
              کلمه عبور
            </td>
            <td align="center"><input type="text" name="t2" id="textfield2" /></td>
          </tr>
          <tr>
            <td align="center">
              <label for="textfield3"></label>
              مبلغ پرداختی
            </td>
            <td align="center"><input type="text" name="t3" id="textfield3" /></td>
          </tr>
          <tr>
            <td align="center">
              <label for="textfield4"></label>
              تاریخ پرداخت
           </td>
            <td align="center"><input type="text" name="t4" id="textfield4" /></td>
          </tr>
          <tr>
            <td colspan="2" align="center">
            <?php
			$t1="";
			$t2="";
			$t3="";
			$t4="";
			$link1="";
			$tab1="";
			$link11="";
			$tab11="";
			$rcordnum1="";
			$rec1=0;
			$row1="";
			$s1=0;
			$tt=0;
			$val1="";
			if(isset($_POST["b1"])){
			$t1=$_POST["t1"];
			$t2=$_POST["t2"];
			$t3=$_POST["t3"];
			$t4=$_POST["t4"];
			$link1= mysqli_connect("localhost","root","","saba");
            mysqli_query($link1,"set character set utf8");
			$tab1=mysqli_query($link1,"select * from user");
            $rcordnum1=mysqli_num_rows($tab1);
				for($rec1=1 ;($rec1<=$rcordnum1);$rec1++){
					$row1=mysqli_fetch_array($tab1);
					if($t1==$row1[1] and $t2==$row1[2]){
						
						$s1=1;
						$rec1=$rcordnum1;
						}
						else{$s1=0;}
					}
				if($s1==1){
					$link11= mysqli_connect("localhost","root","","saba");
            mysqli_query($link11,"set character set utf8");
			$tab11=mysqli_query($link11,"select * from pnaghd");
			$tt=rand(2500,4500);
			$resalt11 = mysqli_query($link11,"insert into pnaghd values('$t2','$t1','$tt','$t3','$t4')");
			$val1="پرداخت نقدی با موفقیت ثبت شد";
					}
				else if($s1==0){$val1="پرداخت نقدی ثبت نشد** مشتری وجود ندارد"; }
				
				
				}

			 ?>
              <input type="submit" name="b1" id="button" value="ثبت پرداختی" />
           </td>
          </tr>
          <tr>
            <td height="71" colspan="2" align="center"><?php echo $val1 ?></td>
          </tr>
        </table></form>
      </div>
   
    <div class="main30"><form action="" method="post">
      <table width="294" height="343" border="1" align="center">
        <tr>
          <td height="35" colspan="2" align="center" bgcolor="#FFCCFF">ثبت پرداخت چکی</td>
        </tr>
        <tr>
          <td align="center">نام و نام خانوادگی</td>
          <td align="center">
            <label for="textfield5"></label>
            <input type="text" name="t5" id="textfield5" />
          </td>
        </tr>
        <tr>
          <td align="center">کلمه عبور</td>
          <td align="center">
            <label for="textfield6"></label>
            <input type="text" name="t6" id="textfield6" />
         </td>
        </tr>
        <tr>
          <td align="center">
            <label for="textfield7"></label>
            سریال چک
         </td>
          <td align="center"><input type="text" name="t7" id="textfield7" /></td>
        </tr>
        <tr>
          <td align="center">
            <label for="textfield8"></label>
            مبلغ چک
         </td>
          <td align="center"><input type="text" name="t8" id="textfield8" /></td>
        </tr>
        <tr>
          <td align="center">
            <label for="textfield9"></label>
            تاریخ سر رسید چک
          </td>
          <td align="center"><input type="text" name="t9" id="textfield9" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
           
              <input type="submit" name="b1" id="button" value="ثبت پرداختی" />
           </td>
          </tr>
          <tr>
            <td height="71" colspan="2" align="center"><?php echo $val1 ?></td>
          </tr>
        </table></form>
    </div>
   
    <div class="main30"><form action="" method="post">
      <table width="294" height="357" border="1" align="center">
        <tr>
          <td height="35" colspan="2" align="center" bgcolor="#FFCCFF">ثبت پرداخت چکی</td>
        </tr>
        <tr>
          <td align="center">نام و نام خانوادگی</td>
          <td align="center">
            <label for="textfield5"></label>
            <input type="text" name="t5" id="textfield5" />
          </td>
        </tr>
        <tr>
          <td align="center">کلمه عبور</td>
          <td align="center">
            <label for="textfield6"></label>
            <input type="text" name="t6" id="textfield6" />
         </td>
        </tr>
        <tr>
          <td align="center">
            <label for="textfield7"></label>
            سریال چک
         </td>
          <td align="center"><input type="text" name="t7" id="textfield7" /></td>
        </tr>
        <tr>
          <td align="center">
            <label for="textfield8"></label>
            مبلغ چک
         </td>
          <td align="center"><input type="text" name="t8" id="textfield8" /></td>
        </tr>
        <tr>
          <td align="center">
            <label for="textfield9"></label>
            تاریخ سر رسید چک
          </td>
          <td align="center"><input type="text" name="t9" id="textfield9" /></td>
        </tr>
        <tr>
          <td colspan="2" align="center">
          <?php
			$t5="";
			$t6="";
			$t7="";
			$t8="";
			$t9="";
			
			$link2="";
			$tab2="";
			$link22="";
			$tab22="";
			$rcordnum2="";
			$rec2=0;
			$row2="";
			$s2=0;
			$ttt=0;
			$val2="";
			if(isset($_POST["b2"])){
			$t5=$_POST["t5"];
			$t6=$_POST["t6"];
			$t7=$_POST["t7"];
			$t8=$_POST["t8"];
			$t9=$_POST["t9"];
			$link2= mysqli_connect("localhost","root","","saba");
            mysqli_query($link2,"set character set utf8");
			$tab2=mysqli_query($link2,"select * from user");
            $rcordnum2=mysqli_num_rows($tab2);
				for($rec2=1 ;($rec2<=$rcordnum2);$rec2++){
					$row2=mysqli_fetch_array($tab2);
					if($t5==$row2[1] and $t6==$row2[2]){
						
						$s2=1;
						$rec2=$rcordnum2;
						}
						else{$s2=0;}
					}
				if($s2==1){
			$link22= mysqli_connect("localhost","root","","saba");
            mysqli_query($link22,"set character set utf8");
			$tab22=mysqli_query($link22,"select * from pnaghd");
			$resalt22 = mysqli_query($link22,"insert into pchek values('$t6','$t5','$t7','$t8','$t9')");
			$val2="چک با موفقیت ثبت شد";
					}
				else if($s2==0){$val2="چک ثبت نشد** مشتری وجود ندارد"; }
				
				
				}

			 ?>
          
          
            <input type="submit" name="b2" id="b2" value="ثبت چک" />
         </td>
        </tr>
        <tr>
          <td height="53" colspan="2" align="center"><?php echo $val2 ?></td>
        </tr>
      </table></form>
           
    </div>
    <div class="main40"><form action="" method="post">
      <table width="259" height="338" border="1">
        <tr>
          <td height="33" colspan="2" align="center" bgcolor="#FFCCCC">جستجوی پرداخت نقدی</td>
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
          <td height="41" colspan="2" align="center"> <?php echo $val3 ?></td>
        </tr>
      </table></form>
    </div>
    <div class="main50"><form action="" method="post">
      <table width="264" height="295" border="1">
        <tr>
          <td height="32" colspan="2" align="center" bgcolor="#99CCCC">جستجوی پرداخت چکی</td>
        </tr>
        <tr>
          <td height="42" align="center">نام و نام خانوادگی</td>
          <td align="center">
            <label for="textfield15"></label>
            <input type="text" name="t15" id="textfield15" />
          </td>
        </tr>
        <tr>
          <td height="36" align="center">کلمه عبور</td>
          <td align="center">
            <label for="textfield16"></label>
            <input type="text" name="t16" id="textfield16" />
          </td>
        </tr>
        <tr>
          <td align="center">شماره سریال چک</td>
          <td align="center">
            <label for="textfield17"></label>
            <input type="text" name="t17" id="textfield17" />
          </td>
        </tr>
        <tr>
          <td height="59" colspan="2" align="center">
          <?php
		  $t15="";
		  $t16="";
		  $t17="";
		  $t18="";
		  $t19="";
		  $link4="";
		  $tab4="";
		  $rcordnum4="";
		  $rec4="";
		  $row4="";
		  $val4="";
		  if(isset($_POST["b4"])){
			  $t15=$_POST["t15"];
			  $t16=$_POST["t16"];
			  $t17=$_POST["t17"];
			  if($t15 and $t16 and $t17){
			$link4= mysqli_connect("localhost","root","","saba");
            mysqli_query($link4,"set character set utf8");
			$tab4=mysqli_query($link4,"select * from pchek");
            $rcordnum4=mysqli_num_rows($tab4);
				for($rec4=1 ;($rec4<=$rcordnum4);$rec4++){
					$row4=mysqli_fetch_array($tab4);
					if($t15==$row4[1] and $t16==$row4[0] and $t17==$row4[2]  ){
						$t18=$row4[3];
						$t19=$row4[4];
						$val4="پرداختچکی با موفقیت یافت شد";
						$rec4=$rcordnum4;
						}
						else{$val4="پرداخت چکی با این مشخصات یافت نشد";}
					}
				  
				  }
			    else{$val4="اطلاعات را کامل وارد کنید";}
			  }
		   ?>
          
            <input type="submit" name="b4" id="button4" value="جستجو" />
          </td>
        </tr>
        <tr>
          <td height="40" align="center">مبلغ چک</td>
          <td align="center">
            <label for="textfield18"></label>
            <input type="text" name="t18" id="textfield18" value="<?php echo $t18 ?>" />
          </td>
        </tr>
        <tr>
          <td height="42" align="center">تاریخ سررسید</td>
          <td align="center">
            <label for="textfield19"></label>
            <input type="text" name="t19" id="textfield19" value="<?php echo $t19 ?>"/>
          </td>
        </tr>
        <tr>
          <td height="42" colspan="2" align="center"> <?php echo $val4 ?></td>
          </tr>
      </table></form>
    </div>
  </div>
</div>
</body>
<style>




  
</style>
</html>
</div>
