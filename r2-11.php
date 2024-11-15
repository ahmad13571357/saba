<?php
session_start();
if (isset($_SESSION['y'])){
 //echo $_SESSION['z'];
 $dd=$_SESSION['x'];
 $dd1=$_SESSION['y'];
 $dd2=$_SESSION['z'];
//$dd3=$_SESSION['hh'];
$dd10=$_SESSION['hh10'];
}
		 
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
$link="";
$tabl="";
$rcordnum="";
$rec="";
$row="";
$nam="";
$bra="";
$mod="";
$dd11=1;
$link= mysqli_connect("localhost","root","","saba");
mysqli_query($link,"set character set utf8");
$tabl=mysqli_query($link,"select * from kala1");
$rcordnum=mysqli_num_rows($tabl);

for($rec=1 ; ($rec<= $rcordnum)  ; $rec++){
	$row=mysqli_fetch_array($tabl);
	$nam=$row[4];
	$bra=$row[5];
	$mod=$row[6];
	
      if ($dd1==$row[3] and $row[9]==1  ){
		  if($dd10==$dd11){
			    mysqli_query($link,"set character set utf8");
		 mysqli_query($link,"delete from kala1 where (namek='$nam' and brand1='$bra' and model='$mod' and user1=$dd1 and chek=1)"); 
		 echo " با موفقیت حذف شد";
		   echo "<p>";
		  echo $nam;
		   echo "<p>";
		  echo $bra;
		     echo "<p>";
		   echo $mod;
		      echo "<p>";
	 header("LOCATION:r2-1-1.php");
	  exit; 
		echo $dd11;
		$rec=$rcordnum;
			  }
			  $dd11++;
	
	  }

}
 //header("LOCATION:r2-1-1.php");
 
		//  exit; 
?>

</body>
</html>