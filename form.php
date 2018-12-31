<?php
if(isset($_POST['submit']))
{
	$input1=$_POST['num1'];
	$input2=$_POST['num2'];
	echo "<br>The sum of $input1 and $input2 is".($input1+$input2);
		echo "<br>The subtraction of $input1 by $input2 is".($input1-$input2);
			echo "<br>The multiplication of $input1 and $input2 is".($input1*$input2);
				echo "<br>The division of $input1 and $input2 is".($input1/$input2);
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Arithematic Form</title>

</head>
<body>
<form method="POST" name="OddEven" action="">
<fieldset>
<legend>Odd Even Check</legend>

<input type="number" name="num1">
<input type="number" name="num2">
<input type="submit" name="submit" value="SUBMIT">
</fieldset>
</form>

</body>
</html>