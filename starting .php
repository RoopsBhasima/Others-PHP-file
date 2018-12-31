<html>
<head>
	<title>Starting php by different ways</title>
</head>
<body>

<h1>The Date and Time of Nepal is:
</h1>
<?php
date_default_timezone_set('Asia/Kathmandu');
echo date('Y/m/d h:i:s');
?>

</body>
</html>