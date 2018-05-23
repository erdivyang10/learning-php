<form method="post" action="#">
	Insert the Value: <input type="text" name="number">
		<input type="submit" name="save">
</form>

<?php

$number = $_POST['number'];


if(isset($_POST['save']))

{
switch($number)
{

case '1';
echo "Inserted Number is One";
break;

case '2';
echo "Inserted Number is two";
break;

case '3';
echo "Inserted Number is three";
break;

case '4';
echo "Inserted Number is Four";
break;


default;
echo "Unknown Number";

}

}
?>