<?php

//using multidimensional Array


echo "<h2>Display Values from An Multidimentional Array</h2>";
$cities= array(array('Name'=>'Bikaner',
					 'state'=>'Rajasthan',	
					 'country'=>'India'),
			   array('Name'=>'Ahmedabad',
			   		 'state'=>'Gujrat',
			   		 'country'=>'India'),
			   array('Name'=>'New York',
			   		'state'=>'New York',
			   		'country'=>'USA'),
			   array('Name'=>'Sydney',
			   		'state'=>'NSW',
			   		'country'=>'Australia')
			   );
/*

echo $cities[0]['Name'] ;     echo $cities[0]['state'];           echo $cities[0]['country'] .'<br>'; 
echo $cities[1]['Name'] ;	  echo $cities[1]['state'] ;          echo $cities[1]['country'] .'<br>';
echo $cities[2]['Name'] ;     echo $cities[2]['state'] ;          echo $cities[2]['country'] .'<br>';*/



?>

<table>

	<tr>
		<th>Name </th>
		<th>State </th>
		<th>Country </th>
	<tr>
	
	<tr>
		<td><?php  echo $cities[0]['Name'] ?></td>
		<td><?php  echo $cities[0]['state'] ?></td>	
		<td><?php  echo $cities[0]['country'] ?></td>	
	</tr>	

	<tr>
		<td><?php  echo $cities[1]['Name'] ?></td>
		<td><?php  echo $cities[1]['state'] ?></td>	
		<td><?php  echo $cities[1]['country'] ?></td>	
	</tr>	

	<tr>
		<td><?php  echo $cities[2]['Name'] ?></td>
		<td><?php  echo $cities[2]['state'] ?></td>	
		<td><?php  echo $cities[2]['country'] ?></td>	
	</tr>	

	<tr>
		<td><?php  echo $cities[3]['Name'] ?></td>
		<td><?php  echo $cities[3]['state'] ?></td>	
		<td><?php  echo $cities[3]['country'] ?></td>	
	</tr>		

</table>	