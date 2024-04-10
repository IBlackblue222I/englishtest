<?php
	$note = 10;
	$answers = ["past simple", "present perfect continuous", "present perfect", "present simple", "present continuous", "past perfect continuous", "future simple", "past continuous", "past perfect", "future perfect", "future continuous"];
	for($i=1;$i<=10;$i++)
	{
		if($answers[$i-1] === $_POST["i".$i])
		{
			echo $i."-OK -> ".$answers[$i-1];
			echo "<br>";
		}
		else
		{
			echo "<br>";
			echo $i." NO -> ".$answers[$i-1];
			echo "<br>";
			$note--;
		}
		
	}
	echo "<br>";
	echo "YOUR RESULT: ".$note*2;
	echo "<br>";
	
	if($note >= 8)
	{
		echo "You must be bilingual !";
	}
	else 
	{
		if($note >= 4 && $note < 8)
		{
			echo "Way to go !";
		}
		else
		{
			echo "Good try";
		}
	}
?>