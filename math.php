

<h2> Calculator</h2>
<form method="post" action="#">
	Insert First Value: <input type="text" name="value1"> </br>
	Insert Second Value:<input type="text" name="value2"> </br>
	<input type="submit" name="calculate" value="calculate"> </br>
	<input type="submit" name="reset" value="reset"> </br>
</form>



<?php
if(isset($_POST['calculate'])){

	

$value1 = $_POST['value1'];
$value2 = $_POST['value2'];

echo 'First value Inserted = ' .$value1  .'<br>';
echo 'Second value Inserted = ' .$value2 .'<br>';


echo "ADD  =";
echo $value1 + $value2 . '<br>';

echo "SUBTRACT =";
echo $value1 - $value2 . '<br>';

echo "MULTIPLY =";
echo $value1 * $value2 . '<br>';

echo "DIVIDE =";
echo $value1 / $value2 . '<br>';
}




if(isset($_POST['reset'])){

	

$value1 = 0;
$value2 = 0;

echo 'First value Inserted = ' .$value1  .'<br>';
echo 'Second value Inserted = ' .$value2 .'<br>';
}


