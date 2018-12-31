<?php
echo "Multiplication table of 5";
$i=1;
$num=5;
echo "<table cellspacing=2 cellpadding=2 border=2 width=200px>";
for($i=1;$i<=10;$i++)
{
echo "<tr><td>$num*$i=".$num*$i."</tr></td>";
}
echo "</table>";
?>
