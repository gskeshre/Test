<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form action="session.login" method="post">
		<label>User Name</label><br>
		<input type="text" name="username" required="false" placeholder="Username"><br>
		<label>User Password</label><br>
		<input type="password" name="pwd" required="true" placeholder="Password"><br>
		<?php echo csrf_field(); ?>
		<button type="submit"> Login </button>
	</form>
</body>
</html><?php /**PATH /home/rtdl-001/Sites/demo.dev/webdemo/resources/views/session/login.blade.php ENDPATH**/ ?>