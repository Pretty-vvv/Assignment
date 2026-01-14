<!DOCTYPE HTML>
<html>
<body>
		<?php 
			$name = $program = $student = $grade = $pointBase = " ";
			$name = $_POST["name"];
			$program = $_POST["program"];
			$student = $_POST["student"];
			$grade = $_POST["grade"];
			$pointBase = 0;
			$imageName = "smile.jpg";
			$imageName2 = "sad.jpg";
			
			echo "Hi, $name with student number $student of $program";
				echo "<br>";
				echo "Your Grade is $grade";
				echo "<br>";
				
			if ($grade >= 98 && $grade <= 100)
				{
					echo"Excellent";
					echo "<br>";
					$pointBase = 1.0;
				}
			else if ($grade >=95 && $grade <= 97)
					 {
						 echo"Perfect";
						 echo "<br>";
						$pointBase = 1.5;
					 }
			else if ($grade >= 90 && $grade <= 94)
				{
					echo"Very Good";
					echo "<br>";
					$pointBase = 1.75;
				}
			else if ($grade >=85 && $grade <= 89)
					 {
						 echo"Good";
						 echo "<br>";
						$pointBase = 2.0;
					 }
			else if ($grade >= 75 && $grade <= 84)
				{
					echo"Passed";
					echo "<br>";
					$pointBase = 3.0;
				}
			else if ($grade >= 50 && $grade <= 74)
					 {
						 echo"Failed";
						 echo "<br>";
						$pointBase = 5.0;
					 }
			else if ($grade >= 0 && $grade <= 49)
				{
					echo"Grade Undefined";
					echo "<br>";
				}
			if($grade >= 75 && $grade <= 100){
				echo "<img src='$imageName'style='width:300px;height:200px;'>";
			}
			else{
				echo "<img src='$imageName2'style='width:300px;height:200px;'>";
			}
				
		?>
		
	</body>
</html>
