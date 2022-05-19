<?php
    ///////////////////////////Reem/////////////////////////////

function binarySearch(Array $arr, $x)
{
	// check for empty array
	if (count($arr) === 0) return false;
	$low = 0;
	$high = count($arr) - 1;
	
	while ($low <= $high) {
		
		// compute middle index
		$mid = floor(($low + $high) / 2);

		// element found at mid
		if($arr[$mid] == $x) {
			echo "result ".$mid;
			return true;
		}

		if ($x < $arr[$mid]) {
			// search the left side of the array
			$high = $mid -1;
		}
		else {
			// search the right side of the array
			$low = $mid + 1;
		}
	}
	
	// If we reach here element x doesnt exist
	echo "result -1";
	return false;
}

// Driver code
$arr = array(100 ,107,112,175,250,321,333,400,496,500);
binarySearch($arr, 112);
echo "<br>";
binarysearch($arr,50);
echo "<br>";
binarysearch($arr,100);

?>