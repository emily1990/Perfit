<?php
$con=mysqli_connect("perfit.db.10747906.hostedresource.com","perfit","Harvard1990!","perfit");
 
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else
    {
		$sex=(string)$_POST["select1"];//sex value!!!!
		
        $brandname=(string)$_POST["select2"];//brand!!!
		
		$style=(string)$_POST["select3"];//style!!!
		
        $brandsize=(string)$_POST["pcj_size_field"];//Size!!!!
		
        $shape=(string)$_POST["select4"];//shape!!!!
		
		if (strpos($brandname, 'H&M')!==false)
		{
			$brandname = "H&M";
		}
		
		if (strpos($brandname, 'ZARA')!==false)
		{
			$brandname = "ZARA";
		}
		if (strpos($brandname, 'GAP')!==false)
		{
			$brandname = "GAP";
			}
			
			
			
		if (strpos($style,'TOPS&OUTWARE')!==false)
		{
			$style = "TOPS&OUTWARE";
			}
		if (strpos($style,'SKIRTS')!==false)
		{
			$style = "SKIRTS";
			}
			
		if (strpos($style,'JEANS')!==false)
		{
			$style = "JEANS";
			}
			if (strpos($style,'BOTTOMS')!==false)
		{
			$style = "BOTTOMS";
			}
			
		if (strpos($shape,'SHAPE')!==false)
		{
			$shape = "N/A";
			}
		if (strpos($style,'SHIRTS')!==false)
		{
			$style = "SHIRTS";
			}
		if (strpos($style,'FOOTWEAR')!==false)
		{
			$style = "FOOTWEAR";
			}
			
			
			
        $brandsize=stripslashes($brandsize);
		
			if ($style=="BOTTOMS" or $style =="TROUSERS" or $style =="JEANS" or $style =="TRACKSUITS" or $style =="UNDERWARE" or $style=="SHORTS" or $style== "BELTS" or $style=="PANTS" or $style =="SKIRTS" or $style =="DRESSES")
			{
				
			$sql="SELECT WAIST FROM $sex WHERE brand='$brandname' and style='$style' and size='$brandsize' and shape='$shape'";
		
			}
			
			if ($result=mysqli_query($con,$sql))
			{
				$count=mysqli_num_rows($result);
			
				if($count==0)
				{
				echo "I am sorry, there is no record in our database";
				}
				
				while ($row=mysqli_fetch_row($result))
				{
					$waistarray[]=$row[0];
					echo $row[0];
				}
			}
			else 
			{
				die(mysqli_error($con));
			}
			}
			$size=sizeof($waistarray);
			for ($i=0; $i<$size; $i+=1)
			{
				$waist=(string)$waistarray[$i];
				$waist=stripslashes($waist);
                echo $waist;
				$sql1="SELECT brand,size,style FROM $sex WHERE waist='$waist' and brand!='$brandname'";
				//echo $sql1;
				if ($result1=mysqli_query($con,$sql1))
			{
				$count1=mysqli_num_rows($result1);
			
				if($count1==0)
				echo $count1;
				
				
				while ($row=mysqli_fetch_row($result))
				{
					echo $row[0];
					echo $row[1];
					echo $row[2];
				}
			}
			else 
			{
				die(mysqli_error($con));
			}
			
				
		
        
		
		//echo $sex;
		
		//echo $brandname;
		//echo $style;
		//echo $shape;
		//echo $brandsize;
		
		

			}

	
	mysqli_close($con);
?>