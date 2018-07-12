<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Login/Register</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />

<link href="css/styles.css" rel="stylesheet" type="text/css" />

</head>

<body>



<h1 id="title">MyDiary</h1>
<ul id="menu">
  <li><a href="addview.php">Add item</a></li>
  <li><a href="profile.php">Profile</a></li>
  <li><a href="logout.php">Logout</a></li>
</ul>

<form id="updateme" name="updateme" method="post" action="">
  <table width="100%" border="1">
    <caption>
      Fill details to register here
    </caption>
    <tr>
      <th scope="row">First name</th>
      <td>&nbsp;</td>
      <td><span id="sprytextfield1">
        <label for="fname"></label>
        <input name="fname" type="text" id="fname" value="Peter" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <th scope="row">Last Name</th>
      <td>&nbsp;</td>
      <td><span id="sprytextfield2">
        <label for="lname"></label>
        <input name="lname" type="text" id="lname" value="Ndegwa" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <th scope="row">Email</th>
      <td>&nbsp;</td>
      <td><span id="sprytextfield3">
        <label for="email"></label>
        <input name="email" type="text" id="email" readonly="readonly" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <th scope="row">&nbsp;</th>
      <td>&nbsp;</td>
      <td><input type="submit" name="subreg" id="subreg" value="Update" /></td>
    </tr>
  </table>
</form>
<p>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
  </script> </p>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");

var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");


var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");

  </script>
</body>
</html>