<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
<form method="post" action="<?php echo $_SERVER["PHP_SELF"];?>">
<fieldset style="width: 370px;">
  <legend><b>LOGIN</b></legend>
  Product Name:<br> <input type="text" name="pname"><br><br>
  Buying Price:<br> <input type="text" name="bprice"><br><br>
  Selling Price:<br> <input type="text" name="sprice"><br><br>

  <input type="submit" name="save" value= "Save">
</fieldset>
</form>
</body>
</html>