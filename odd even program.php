<?php
if(isset($_POST['OddEvenCheck']))
{
	$n1=$_POST['OddEven'];
	echo "$n1";
}

	if($n1%2==0)
	{
		echo "<br/>the given number $n1 is even";
}
		else {
			echo "<br/>the given number $n1 is odd ";
	}
?>
<html>
<head>
	<title>User Input | Odd Even Program</title>

</head>
<body>
<form method="POST" name="OddEven" action="">
<fieldset>
<legend>Odd Even Check</legend>

<input type="number" name="OddEven">
<input type="submit" name="OddEvenCheck" value="Result">
</fieldset>
</form>

</body>
</html>