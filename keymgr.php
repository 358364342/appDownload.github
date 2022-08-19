<?php
    $str = $_SERVER["QUERY_STRING"];
	$var=explode("=",$str);
	$arr = array("456","789");
	$arrlength=count($arr);
	for ($i=0; $i<$arrlength; $i++)
	{
		if (strcmp($arr[$i],$var[1])==0)
		{
			echo 1;
			break;
		}
		else
		{
			echo 0;
		}
	}

?>