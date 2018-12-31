<?php
if(isset($_POST['submit']))
{
	$input1=$_POST['num1'];
	$input2=$_POST['num2'];

	if (empty($input1) && empty($input2))
	{
		echo "<div class='error'>";
		echo "Error! Please write First and Second Number <br/>";
		echo "</div>";
	}
	elseif(empty($input1))
	{
		echo "<div class='error'>";
		echo "Error! Please write First Number<br/>";
		echo "</div>";
	}
	elseif(empty($input2))
	{
		echo "<div class='error'>";
		echo "Error! Please write Second Number <br/>";
		echo "</div>";
	}
	else{
	echo "<br>The sum of $input1 and $input2 is".($input1+$input2);
		echo "<br>The subtraction of $input1 by $input2 is".($input1-$input2);
			echo "<br>The multiplication of $input1 and $input2 is".($input1*$input2);
				echo "<br>The division of $input1 and $input2 is".($input1/$input2);
}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Arithematic Form</title>

</head>
<body>
<form method="POST" name="userInput" action="">
<fieldset>
<legend>Arithematic Operation</legend>

<input type="number" name="num1" value=<?php if(isset($n1)) echo $n1;?>></br>
<input type="number" name="num2" value=<?php if(isset($n2)) echo $n2;?>></br>
<input type="submit" name="submit" value="SUBMIT">
</fieldset>
</form>

</body>
</html>