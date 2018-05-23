<?php

$students = array(array('name'=>'rajesh', 'class'=>5, 'rolenum'=>'ABC123' ),
				    array('name'=>'ramesh', 'class'=>6, 'rolenum'=>'123ABC' ),
				    	array('name'=>'nagesh', 'class'=>10, 'rolenum'=>'321bvb' ));


	foreach($students as $student => $items)
	{
		echo $student. '<br>';

		foreach( $items as $item)
		{
			echo $item .'<br>';
		}

		
	}

























/*
foreach($students as $student => $items)
{

	echo $student. '<br>';
		
		foreach( $items as $item)
		{
			echo $item. '<br>';
		}
}*/