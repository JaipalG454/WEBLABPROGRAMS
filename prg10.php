<!DOCTYPE html>
<html>
<head>
	<title> Selection Sort</title>
	<style type="text/css">
		td,th
		{
			padding: 1px 5px;
		}
	</style>
</head>
<body>
	<h1> Selection Sort to sort student list </h1>
	<?php
		$con=mysqli_connect('localhost','root','','weblab');
		$str="SELECT * FROM student";
		$res=mysqli_query($con,$str);
		$a=[];
		if(mysqli_num_rows($res) > 0)
		{
			echo "<h2> Before Sorting </h2><br>";
			echo "<table>";
			echo "<tr><th>USN</th><th>NAME</th><th>SEM</th></tr>";
			while($row = mysqli_fetch_assoc($res))
			{
				echo "<tr>";
				echo "<td>".$row['usn']."</td>";
				echo "<td>".$row['name']."</td>";
				echo "<td>".$row['sem']."</td>";
				echo "</tr>";
				array_push($a,$row['usn']);
			}
			echo "</table>";
		}
	
		$b=$a;

		$n=count($a);

		for($i=0; $i<($n-1); $i++)
		{
			$pos=$i;
			for($j=($i+1); $j<$n; $j++)
			{
				if($a[$pos] > $a[$j])
				{
					$pos=$j;
				}
			}

			if($pos!=$i)
			{
				$temp=$a[$i];
				$a[$i]=$a[$pos];
				$a[$pos]=$temp;
			}
		}

		$c=[];
		$d=[];
		$str="SELECT * FROM student";
		$res=mysqli_query($con,$str);
		if(mysqli_num_rows($res) > 0)
		{
			while($row = mysqli_fetch_assoc($res))
			{
				for($i=0; $i<$n; $i++)
				{
					if($row['usn'] == $a[$i])
					{
						$c[$i]=$row['name'];
						$d[$i]=$row['sem'];
					}
				}
			}
		}

		echo "<h2> After Sorting </h2><br>";
			echo "<table>";
			echo "<tr><th>USN</th><th>NAME</th><th>SEM</th></tr>";
			for($i=0; $i<$n; $i++)
			{
				echo "<tr>";
				echo "<td>".$a[$i]."</td>";
				echo "<td>".$c[$i]."</td>";
				echo "<td>".$d[$i]."</td>";
				echo "</tr>";
				array_push($a,$row['usn']);
			}
			echo "</table>";
		$con->close();
	?>


</body>
</html>