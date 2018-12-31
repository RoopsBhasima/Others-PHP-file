<?php
	echo "My name is Rupesh Bhasima";
	//phpinfo();
	$message="Welcome to PHP class";
	echo "<br>";
	//Single Line Comment
	/*
	#multi line comments
	#another line of comments
	*/
	?>
	<?=$message?>

	<?php
	$qty=5;
	$price=10000;
	$amt=$qty*$price;
	echo "<br>";
	echo "Rs" . number_format($amt,2);
	?>

	<?php
	$num1=46;
	$num2=68;
	$sum=$num1+$num2;
	echo "the sum of $num1 and $num2 is $sum";
	echo "<br>";
	echo "the multiplication of $num1 and $num2 is " .($num1*$num2);
	?>

	<?php
	$num=7;
	if($num%2==0)
	{
		echo "<br/>$num is even";
}
		else {
			echo "<br/>$num is odd ";
	}
	?>
