<!DOCTYPE html>
<html>
<head>
	<title>Mathrix Addition</title>
</head>
<body>
	<h1> Matric Addition </h1>
	<?php
		$a=array(array(2,5,6),array(5,1,0),array(9,1,6));
		$b=array(array(1,5,3),array(0,1,8),array(5,8,0));

		echo "<h3> Given matrix A: <br> </h3>";
		echo "<pre/>";print_r($a);
		echo "<h3> Given matrix B: <br> </h3>";
		echo "<pre/>";print_r($b);

		echo"<br><h3> Multiplication of a matrix: <br> </h3>";
		for ($i = 0; $i<3; $i++) 
    		{ 
        		for ($j = 0; $j<3; $j++) 
        		{ 
            		$res[$i][$j] = 0; 
            		for ($k = 0; $k < 3; $k++) 
                		$res[$i][$j] =$res[$i][$j]+$a[$i][$k]*$b[$k][$j]; 
        		} 
    		}
		echo "<pre/>";print_r($res);
	?>
</body>
</html>