
<!DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'>

<head>	
	<title>login </title>
	


</head>
<body>
	<div id='login_form'>
		<form action='<?php echo site_url('login/process');?>' method='post' name='process'>
			<h2>Login User</h2>
			<br />
			<?php if(! is_null($msg)) echo $msg;?>			
			<label for='username'>UserID</label>
			<input type='text' name='username' id='username' size='25' /><br />
		
			<label for='password'>Password</label>
			<input type='password' name='password' id='password' size='25' /><br />							
		
			<input type='Submit' value='Login' />			
		</form>
	</div>
</body>
</html>