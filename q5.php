   <html>  
    <body>  
    <form method="post"> 
        <input type="number" name="targetSum"> 
        <input type="submit" name="submit" value="Submit">  
    </form>  
    </body>  
    </html>
<?php
    ///////////////////////////Reem/////////////////////////////

// PHP program to  returns any sum of two integers that
//equals a target sum in an array of distinct integers otherwise
//returns empty array

function hasArrayTwoCandidates($A, $arr_size,$sum)
{
	$l; $r;

	/* Sort the elements */
	sort($A);

	/* Now look for the two candidates
	in the sorted array*/
	$l = 0;
	$r = $arr_size - 1;
	while ($l < $r)
	{
		if($A[$l] + $A[$r] == $sum){
			echo "[".$A[$l]." ,".$A[$r]."]";
			$result['0']=$A[$l];
			$result['1']=$A[$r];
			return $result;
			}
		else if($A[$l] + $A[$r] < $sum)
			$l++;
		else // A[i] + A[j] > sum
			$r--;
	}
	return 0;
}

// Driver Code
$A = array (3,5,-4,8,11,1,-1,6);
$arr_size = sizeof($A);
	
	if(isset($_POST['submit']))
	{
		$n = $_POST['targetSum'];
		echo "target sum = ". $n ."<br>";
		
		// Function calling
		hasArrayTwoCandidates($A, $arr_size, $n);

	}



?>
