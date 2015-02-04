<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	if(isset($_POST["time"]))
	{
 	$time=$_POST["time"];
  	
	
	if($time>=0 && $time<=10)
	{
		$chao="Chào buổi sáng!!!";
	}
	else if($time>10 && $time<=14)
	{
		$chao="Chào buổi trưa!!!";
	}
	else if($time>14 && $time<=18)
	{
		$chao="Chào buổi chiều!!!";
	}
	else if($time>18 && $time<=24)
	{
		$chao="Chào buổi tối!!!";
	}
	else
	{	
		$chao="Kiểm tra lại thời gian...";	
	}
	}
?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="330" border="0" align="center" bgcolor="#3399CC">
    <tr>
      <td height="35" colspan="2" align="center">CHÀO THEO GIỜ</td>
    </tr>
    <tr>
      <td width="94" bgcolor="#33CCCC">Nhập giờ:</td>
      <td width="226" bgcolor="#33CCCC"><label for="time"></label>
      <input name="time" type="text" id="time" value="<?php echo $_POST["time"];?>" size="10" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center" bgcolor="#33CCCC"><label><?php echo $chao;?></label></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Chào" /></td>
    </tr>
  </table>
</form>
</body>
</html>