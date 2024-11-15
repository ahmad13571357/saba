<?php
session_start();
if (isset($_SESSION['y'])){
 //echo $_SESSION['z'];
 $dd=$_SESSION['x'];
 $dd1=$_SESSION['y'];
 $dd2=$_SESSION['z'];
}
else{
	//echo "fdhfghfghfg";
	header("LOCATION:r1.php");
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<html dir="rtl">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="kool24.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function MM_jumpMenu(targ,selObj,restore){ //v3.0
  eval(targ+".location='"+selObj.options[selObj.selectedIndex].value+"'");
  if (restore) selObj.selectedIndex=0;
}
</script>
</head>
 <style type="text/css">
  body {
	background-color: #CCF;
}
  </style>
<body>
<div class="kool2">
<div class="nav1"></div>
  <div class="menu">
    <div class="user"><table width="200" border="1">
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
</div>
</div>
  <div class="main">
    <div class="main10"><form action="" method="post">
     <?php
	   $link2="";
	   $rec2=0;
	   $tab2="";
	   $record2="";
	 //  $dd1="";
	   $row2="";
	   $r=0;
	   
$link2= mysqli_connect("localhost","root","","saba");
mysqli_query($link2,"set character set utf8");
$tab2=mysqli_query($link2,"select * from faktor");
$record2=mysqli_num_rows($tab2);
//echo"fsdfgdsgfdsg";
?>

     <table width="481" height="32" border="1" align="center">
       <tr>
         <td colspan="4" align="center" bgcolor="#FFCCCC">مشاهده  کل  فاکتورهای ===><?php echo $dd ?>  </td>
        </tr>
       <tr>
         <td width="117" align="center" bgcolor="#FF66CC">شماره فاکتور</td>
         <td width="105" align="center" bgcolor="#FF66CC">نام خریدار</td>
         <td width="112" align="center" bgcolor="#FF66CC">تاریخ خرید</td>
         <td width="204" align="center" bgcolor="#FF66CC">مبلغ کل</td>
         
       </tr>
        <?php
		$jam=0;
   for( $rec2=1  ;  $rec2 <= $record2; $rec2++){
	   $row2=mysqli_fetch_array($tab2);
	   if($dd==$row2[2] and $dd1==$row2[3]){
	   echo "<tr>";
	        echo "<td align='center' bgcolor='yellow'> $row2[0]  </td>";
			echo "<td align='center'> $row2[2] </td>";
			echo "<td align='center'> $row2[1] </td>";
			echo "<td align='center' > $row2[4] </td>";
			$jam=$row2[4]+$jam;
			$r++;
	   echo "</tr>";
	   }}
   ?>
   
   <tr>
         <td></td>
         <td ></td>
         <td width="" align="center" bgcolor="#FF66CC">جمع کل</td>
         <td width="204" align="center" bgcolor="#FF66CC"><?php echo $jam ?></td>
         
       </tr>
   
 </table>
     </p>
     <table width="152" border="1" align="center">
  <tr>
    <td width="113">تعداد فاکتور ها</td>
    <td width="56"><input name="input" type="text" title=" "  value="<?php  echo $r ?>"  size="3" readonly="readonly"/></td>
  </tr>
</table></form>

  </div>
    <div class="main20">
    <?php
	   $link3="";
	   $rec3="";
	   $tab3="";
	   $record3="";
	   $dd3="";
	   $row3="";
	   $r3=0;
	   
$link3= mysqli_connect("localhost","root","","saba");
mysqli_query($link3,"set character set utf8");
$tab3=mysqli_query($link3,"select * from pnaghd");
$record3=mysqli_num_rows($tab3);
//echo"fsdfgdsgfdsg";
?>
      <table width="312" height="114" border="1" align="center">
        <tr>
          <td height="39" colspan="3" align="center">مشاهده پرداخت های نقدی===><?php echo $dd ?> </td>
        </tr>
        <tr>
          <td width="68" height="33" align="center" bgcolor="#FF66CC">شماره پیگیری</td>
          <td align="center" bgcolor="#FF66CC">مبلغ پرداختی</td>
          <td align="center" bgcolor="#FF66CC">تاریخ پرداخت</td>
        </tr>
        <?php
		$jam3=0;
   for( $rec3=1  ;  $rec3 <= $record3; $rec3++){
	   $row3=mysqli_fetch_array($tab3);
	   if($dd==$row3[1] and $dd1==$row3[0]){
	   echo "<tr>";
	        echo "<td bgcolor='yellow'> $row3[2]  </td>";
			echo "<td> $row3[3] </td>";
			echo "<td> $row3[4] </td>";
			//echo "<td> $row3[4] </td>";
			$jam3=$row3[3]+$jam3;
			$r3++;
	   echo "</tr>";
	   }}
   ?>
   <tr>
        
 
         <td width="94" align="center" bgcolor="#FF66CC">جمع کل</td>
         <td width="109" align="center" bgcolor="#FF66CC"><?php echo $jam3 ?></td>
         
       </tr>
      </table>
    <p>
      <table width="161" border="1" align="center">
  <tr>
    <td width="118">تعداد پرداخت نقدی</td>
    <td width="27"><input name="input" type="text" title=" "  value="<?php  echo $r3 ?>"  size="3" readonly="readonly"/></td>
  </tr>
</table>
    </div>
    <div class="main30">
      
      <?php
	   $link4="";
	   $rec4="";
	   $tab4="";
	   $record4="";
	   $dd4="";
	   $row4="";
	   $r4=0;
	   
$link4= mysqli_connect("localhost","root","","saba");
mysqli_query($link4,"set character set utf8");
$tab4=mysqli_query($link4,"select * from pchek");
$record4=mysqli_num_rows($tab4);
//echo"fsdfgdsgfdsg";
?>
      <table width="312" height="114" border="1" align="center">
        <tr>
          <td height="39" colspan="3" align="center">مشاهده  پرداخت های چکی===><?php echo $dd ?> </td>
        </tr>
        <tr>
          <td width="68" height="33" align="center" bgcolor="#FF66CC"> سریال چک</td>
          <td align="center" bgcolor="#FF66CC">مبلغ چک</td>
          <td align="center" bgcolor="#FF66CC">تاریخ سر رسید</td>
        </tr>
        <?php
		$jamkol=0;
		$jam4=0;
   for( $rec4=1  ;  $rec4 <= $record4; $rec4++){
	   $row4=mysqli_fetch_array($tab4);
	   if($dd==$row4[1] and $dd1==$row4[0]){
	   echo "<tr>";
	        echo "<td bgcolor='yellow'> $row4[2]  </td>";
			echo "<td> $row4[3] </td>";
			echo "<td> $row4[4] </td>";
			//echo "<td> $row3[4] </td>";
			$jam4=$row4[3]+$jam4;
			$r4++;
	   echo "</tr>";
	   }}
	   $jamkol=$jam-($jam3+$jam4);
   ?>
   <tr>
        
         
         <td width="94" align="center" bgcolor="#FF66CC">جمع کل</td>
         <td width="109" align="center" bgcolor="#FF66CC"><?php echo $jam4 ?></td>
         
       </tr>
      </table>
    <p>
      <table width="167" border="1" align="center">
  <tr>
    <td width="119">تعداد پرادخت چکی</td>
    <td width="32"><input name="input" type="text" title=" "  value="<?php  echo $r4 ?>"  size="3" readonly="readonly"/></td>
  </tr>
</table>
      
    </div>
    <div class="main40">
       <table width="635" height="78" border="1">
         <tr>
           <td width="159" height="36" align="center" bgcolor="#FFCCFF">جمع کل فاکتورها</td>
           <td width="168" align="center" bgcolor="#FFCCFF">جمع کل پرداخت نقدی</td>
           <td width="121" align="center" bgcolor="#FFCCFF">جمع کل پرداخت چکی</td>
           <td width="136" align="center" bgcolor="#FFCCFF">صورتحساب</td>
         </tr>
         <tr>
           <td height="34" align="center" bgcolor="#FFCCFF"><?php echo $jam ?></td>
           <td align="center" bgcolor="#FFCCFF"><?php echo $jam3 ?></td>
           <td align="center" bgcolor="#FFCCFF"><?php echo $jam4 ?></td>
           <td align="center" bgcolor="#FFFFCC"><?php echo $jamkol ?></td>
         </tr>
       </table>
       <p>&nbsp;</p>
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
	

</style>
</html>