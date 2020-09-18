<!DOCTYPE html>
<html>
<body>

<?php

	# Christian Le
    # Professor Toegel
    # IT 202 - 009
    # 21 September 2020

	# Create an array of numbers
    $nums = array(2,3,4,4,5,6,7,8,8);
    
    # Initalize with any number from array (more than 1)
	$num = 2;

	# Create a loop to show each value
    echo "LOOP OUTPUT<br>";
    foreach($nums as $num){
    	echo $num . " " ;
    }
   
   # Break between the two outputs
    echo "<br><br>";
    
    # Loop outputs only even numbers
    echo "LOOP EVEN OUTPUT<br>";
    foreach($nums as $num){
    	if($num % 2 == 0){
        	echo $num . " ";
        }
    }

?>

</body>
</html>

