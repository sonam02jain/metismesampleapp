<html>
<head>
<title>metisme sample application page</title>
<link rel="stylesheet" href="format.css">

<script type="text/javascript">
	
function ValidateloginPage()
{
	
		if(document.loginform.username.value == "")
		{			
			alert ("username must be filled!!!");
			return false;
	}
	
	if(document.loginform.password.value == "")
		{			
			alert ("password required!!!");
			return false;
	}
}
</script>
</head>
<body>

<div class="maindiv">

<h1 align="middle" style="color:green"> MetisMe sample web application</h1>
 <br>

<form name="loginform" method="post" onsubmit="return ValidateloginPage()" action="login.php" >
<table width="100%" border="0" cellpadding="2" cellspacing="2">

  <tr>
    <td width="13%" align="left" valign="middle"><strong>Userame</strong></td>
    <td width="2%" align="left" valign="middle">:</td>
    <td width="85%" align="left" valign="middle"><label>
      <input name="username" type="email" class="textbox"  id="email" />
    </label></td>
  </tr>

  <tr>
    <td width="13%" align="left" valign="middle"><strong>Password</strong></td>
    <td width="2%" align="left" valign="middle">:</td>
    <td width="85%" align="left" valign="middle"><label>
      <input name="password" type="password" class="textbox"  id="password" />
    </label></td>
  </tr>

  <tr>
    <td align="left" valign="middle">&nbsp;</td>
    <td align="left" valign="middle">&nbsp;</td>
    <td align="left" valign="middle"><label>
      <input name="login" type="submit" class="login" id="login" value="Submit" />
	  <input type="reset"/>
    </label>
	</tr>
</form>
<form method="post" action="register.php">
	<td align="left" valign="left">&nbsp;</td>
    <td align="left" valign="left">&nbsp;</td>
	</td>
	 <td align="left" valign="left"><label>
      <input name="signup" type="submit" class="signup" id="signup" value="SignUp" />
    </label>
	</td>

</table>
</form>
</div>
</body>
</html>
