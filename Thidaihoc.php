<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<?php error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
	if(isset($_POST["Toan"])&&isset($_POST["Ly"])&&isset($_POST["Hoa"]))
	{
 	$Toan=$_POST["Toan"];
  	$Ly=$_POST["Ly"];
	$Hoa=$_POST["Hoa"];
	$Diemchuan=20;
	$Tongdiem=$Toan+$Ly+$Hoa;
	if($Tongdiem >= $Diemchuan )
	{
		$Ketqua="Đậu rồi";
	}
	else
	{
		$Ketqua="Hẹn năm sau gặp lại..";
	}
	}
?>
<body>
<form id="form1" name="form1" method="post" action="">
  <table width="313" border="0" align="center">
    <tr>
      <td colspan="2" align="center">KẾT QUẢ THI ĐẠI HỌC</td>
    </tr>
    <tr>
      <td width="95">Toán:</td>
      <td width="208"><label for="Toan"></label>
      <input name="Toan" type="text" id="Toan" value="<?php echo $_POST["Toan"];?>" size="20" /></td>
    </tr>
    <tr>
      <td>Lý:</td>
      <td><label for="Ly"></label>
      <input name="Ly" type="text" id="Ly" value="<?php echo $_POST["Ly"];?>" size="20" /></td>
    </tr>
    <tr>
      <td>Hóa:</td>
      <td><label for="textfield3"></label>
      <input name="textfield3" type="text" id="textfield3" value="<?php echo $_POST["Hoa"];?>" /></td>
    </tr>
    <tr>
      <td>Điểm chuẩn:</td>
      <td><label for="Diemchuan"></label>
      <input name="Diemchuan" type="text" id="Diemchuan" value="<?php echo $Diemchuan;?>" size="20" /></td>
    </tr>
    <tr>
      <td>Tổng Điểm:</td>
      <td><label for="Tongdiem"></label>
      <input name="Tongdiem" type="text" id="Tongdiem" value="<?php echo $Tongdiem;?>" size="20" /></td>
    </tr>
    <tr>
      <td>Kết quả thi:</td>
      <td><label for="Ketqua"></label>
      <input name="Ketqua" type="text" id="Ketqua" value="<?php echo $Ketqua;?>" /></td>
    </tr>
    <tr>
      <td colspan="2" align="center"><input type="submit" name="button" id="button" value="Kết Quả" /></td>
    </tr>
  </table>
</form>
</body>
</html>