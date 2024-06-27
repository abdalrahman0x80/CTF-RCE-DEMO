<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>CTF #2</title>
</head>
<body>
	<Form action="index.php" method="GET">
		<input type="enter your ip address" name="cmd">
		<button type="submit">send</button>
	</Form>
   <?php
   echo shell_exec("ping -c 1 ".$_GET["cmd"]);

   ?>
</body>
</html>