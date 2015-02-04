<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Tìm số lớn</title>
<style type="text/css">
.trang {
	color: #FFF;
	font-weight: bold;
}
body,td,th {
	font-size: 24px;
}
</style>
</head>
<?php error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	if(isset($_POST["soa"])&&isset($_POST["sob"]))
	{
 	$soa=$_POST["soa"];
  	$sob=$_POST["sob"];
	
	if($soa>=$sob)
	{
		$solon=$soa;
	}
	if($sob>$soa)
	{
		$solon=$sob;
	}
	}
?>

<body>
<form id="form1" name="form1" method="post" action="So sanh 2 so.php">
  <table width="394" border="0" align="center" bgcolor="#FFCC99">
    <tr>
      <td height="36" colspan="2" align="center" bgcolor="#FFCC66" class="trang">TÌM SỐ LỚN HƠN</td>
    </tr>
    <tr>
      <td width="159">Số A:</td>
      <td width="225"><label for="soa"></label>
      <input name="soa" type="text" id="soa" value="<?php echo $_POST["soa"];?>" size="25" /></td>
    </tr>
    <tr>
      <td>Số B:</td>
      <td><label for="sob"></label>
      <input name="sob" type="text" id="sob" value="<?php echo $_POST["sob"];?>" size="25" /></td>
    </tr>
    <tr>
      <td>Số lớn hơn:</td>
      <td><label for="solon"></label>
      <input name="solon" type="text" id="solon" value="<?php echo $solon;?>" size="25" readonly="true" style="background-color:#F9C"/></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Tìm" /></td>
    </tr>
  </table>
</form>
</body>
</html>