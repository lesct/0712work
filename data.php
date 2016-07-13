<?php
for($i=0;$i<1000;$i++)
{
	$uid = sprintf("%05d",$i);
	echo $uid."\t";

	if(rand(1,3)==1)
	{
		echo rand(30,59)."\t";
	}else{
		echo rand(60,100)."\t";
	}
	if(rand(1,3)==1)
	{
		echo rand(30,59)."\t";
	}else{
		echo rand(60,100)."\t";
	}
	
	if(rand(1,3)==1)
	{
		echo rand(30,59)."\t";
	}else{
		echo rand(60,100)."\t";
	}
	
	if(rand(1,3)==1)
	{
		echo rand(30,59)."\n";
	}else{
		echo rand(60,100)."\n";
	}

}
