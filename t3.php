<?php

	$foods=array('Healthy'=>array('35','53'),'Unhealthy'=>array('46','64'));
	print_r($foods);
	echo '<br>';
	foreach($foods as $element=>$inner_part)
	{
		echo $element.'<br>';
		foreach($inner_part as $food)
		{
			echo $food.'<br>';
		}
	}
?>