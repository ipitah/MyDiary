<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login/Register</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<link href="css/styles.css" rel="stylesheet" type="text/css" />

</head>

<body>



<h1 id="title">MyDiary HOME</h1>


<form id="loginform" name="loginform" method="post" action="">
  <table width="200" border="1" id="itemstable">
    <caption>
      Login here
    </caption>
    <tr>
      <td width="42%"><span id="sprytextfield4">
        <label for="username"></label>
        <input type="text" name="username" id="username" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      <td width="34%"><span id="sprypassword2">
        <label for="password"></label>
        <input type="password" name="password" id="password" />
      <span class="passwordRequiredMsg">A value is required.</span></span></td>
      <td width="24%"><input type="submit" name="loginbt" id="loginbt" value="Submit" /></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>



<form id="additem" name="additem" method="post" action="">
  <table width="100%" border="1">
    <caption>
      Fill details to register here
    </caption>
    <tr>
      <th scope="row">First name</th>
      <td>&nbsp;</td>
      <td><span id="sprytextfield1">
        <label for="fname"></label>
        <input type="text" name="fname" id="fname" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <th scope="row">Last Name</th>
      <td>&nbsp;</td>
      <td><span id="sprytextfield2">
        <label for="lname"></label>
        <input type="text" name="lname" id="lname" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td>&nbsp;</td>
      <td><span id="sprytextfield3">
      <label for="email"></label>
      <input type="text" name="email" id="email" />
      <span class="textfieldRequiredMsg">A value is required.</span><span class="textfieldInvalidFormatMsg">Invalid format.</span></span></td>
    </tr>
    <tr>
      <th scope="row">Password</th>
      <td>&nbsp;</td>
      <td><span id="sprypassword1">
      <label for="passreg"></label>
      <input type="password" name="passreg" id="passreg" />
      <span class="passwordRequiredMsg">A value is required.</span><span class="passwordMinCharsMsg">Minimum number of characters not met.</span><span class="passwordInvalidStrengthMsg">The password doesn't meet the specified strength.</span></span></td>
    </tr>
    <tr>
      <th scope="row">Change Password</th>
      <td>&nbsp;</td>
      <td><span id="spryconfirm1">
        <label for="corfirmpass"></label>
        <input type="password" name="corfirmpass" id="corfirmpass" />
      <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
    </tr>
    <tr>
      <th scope="row"><input type="reset" name="resetreg" id="resetreg" value="Reset" /></th>
      <td>&nbsp;</td>
      <td><input type="submit" name="subreg" id="subreg" value="Register" /></td>
    </tr>
  </table>
</form>

<p>&nbsp;</p>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3", "email");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1", {minChars:6, minAlphaChars:1, minNumbers:1, minUpperAlphaChars:1, minSpecialChars:1});
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "passreg");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4", "none", {hint:"Username"});
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2");
</script>
</body>
</html>