<?php
if(isset($_POST['submit']))
{
	$choice=$_POST['submit'];
	if($_POST['number']!="")
	{
		$number=$_POST['number'];
	
	if($choice=="Factorial")
	{
		$fact=1;
		for($i=1;$i<=$number;$i++)
		{
			$fact=$fact*$i;
		}
		echo "Factorial of $number is ".$fact;
	}
	else if($choice=="Prime Number")
	{
		$count=0;
		for($i=1;$i<=$number;$i++)
		{
			if(($number%$i)==0)
			{
				$count++;
			}
		}
		if($count==2)
		{
			echo "$number is a Prime Number";
		}
		else
		{
			echo "$number is not a Prime Number";
		}
	}
	else if($choice=="reset")
	{
		$number='';
	}
}
}
?>