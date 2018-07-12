<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add and view entries</title>
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

<form id="additem" name="additem" method="post" action="">
  <table width="100%" border="1">
    <caption>
      Add entry
    </caption>
    <tr>
      <th scope="row">Item</th>
      <td>&nbsp;</td>
      <td><span id="sprytextfield1">
        <label for="item"></label>
        <input name="item" type="text" id="item" value="Meeting" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <th scope="row">Date</th>
      <td>&nbsp;</td>
      <td><span id="sprytextfield2">
        <label for="dateof"></label>
        <input name="dateof" type="text" id="dateof" value="20/07/2018" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <th scope="row">Start time</th>
      <td>&nbsp;</td>
      <td><span id="sprytextfield3">
        <label for="timeof"></label>
        <input name="timeof" type="text" id="timeof" value="15:00" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <th height="26" scope="row"><p>Duration (Hrs)</p></th>
      <td>&nbsp;</td>
      <td><span id="sprytextfield4">
        <label for="durationof"></label>
        <input name="durationof" type="text" id="durationof" value="2" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <th scope="row"><input type="reset" name="clearitem" id="clearitem" value="Reset" /></th>
      <td>&nbsp;</td>
      <td><input type="submit" name="additem" id="additem" value="Add item" /></td>
    </tr>
  </table>
</form>
<p>&nbsp; </p>
<table width="50%" border="1" id="itemstable">
  <caption>
    Entries added
  </caption>
  <tr>
    <th scope="col">Item</th>
    <th scope="col">Date</th>
    <th scope="col">Start time</th>
    <th scope="col">Duration</th>
    <th scope="col">End time</th>
    <th scope="col">Date entered</th>
    <th scope="col">Update</th>
    <th scope="col">Delete</th>
  </tr>
  <tr>
    <td>1</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><a href="updateview.php">update</a></td>
    <td>Delete</td>
  </tr>
  <tr>
    <td>2</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
  </tr>
</table>
<p>&nbsp; </p>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
  </script>
</body>
</html>