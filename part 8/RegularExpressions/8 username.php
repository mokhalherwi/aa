<?php 
extract($_REQUEST);
if(isset($save))
{
	if(preg_match("/^[a-zA-Z ]*$/",$username))
	{
	echo "Congrates name is ok ";		
	}
	else
	{
	echo "<h3 style='color:Red'>Username not valid</h3>";
	}
}
?>
<html>
<head>
	<title>Regular Express example 1</title>
</head>
<body>
	<form method="post">
		<table>
		<tr>
		<td>Enter Your Name</td>
		<td><input type="text" name="username"/></td>
		</tr>
		<tr>
		<td colspan="2" align="center">
		<input type="submit" name="save" value="check"/></td>
		</tr>
		</table>
	</form>
</body>
</html>