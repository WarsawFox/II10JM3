<?php
	$tekst = 'kajak';
	
	function check($str)
	{
		$pal = false;
		
		$n = strlen($str)/2;
		for($i = 0; $i <= $n; $i++)
		{
			for($j = $n; $j>=0; $j++)
			{
				if($str[$i] == $str[$j])
					$pal = true;
			}	
		}
		
		return $pal;
	}
?>