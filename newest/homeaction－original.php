<?php
    $con=mysqli_connect("perfit.db.10747906.hostedresource.com","perfit","Harvard1990!","perfit");
    
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else
    {
        
        $brandname=(string)$_POST["select2"];
        $brandsize=(string)$_POST["pcj_size_field"];
        $style=(string)$_POST["select3"];
        $sex=(string)$_POST["select1"];
        $shape = (string)$_POST["select4"];
        $brandname=stripslashes($brandname);
        $brandsize=stripslashes($brandsize);
        //$resultarray=array();
        $chestsize = (string)$_POST["chest"];
        $waistsize = (string)$_POST["waist"];
        $hipsize = (string)$_POST["hip"];
        
        $sql="SELECT * FROM $sex WHERE brand='$brandname' and size='$brandsize' and style = '$style' and  shape = '$shape'";
       // $sql = "SELECT * FROM $sex WHERE style = '$style'";
       // echo $_POST["select3"];
       // echo $style;
        
        if ($result=mysqli_query($con,$sql))
        {
            $count=mysqli_num_rows($result);
            echo "Welcome: this is your size";
            if ($count==0)
            {echo "Sorry, please try another brand you have";}
            // Fetch one and one row
            echo "<table border=\"1\" align=\"center\">";
            echo "<tr><th>Chest</th>";
             echo "<th>Waist</th>";
             echo "<th>Hip</th></tr>";
            while ($row=mysqli_fetch_row($result))
            {
                echo"<tr><td>";
                echo $row[11];
                echo"<td>";
                echo $row[15];
                echo"</td><td>";
                echo $row[16];
                echo "</td></tr>";
                
                
                $dimensionarray[]=$row[11];
                $dimensionarray[]=$row[15];
                $dimensionarray[]=$row[16];
               // echo $dimensionarray;
                
                //printf ("%s %s %s %s %s %s",$dimensionarray[0],$dimensionarray[1],$dimensionarray[2],$dimensionarray[3],$dimensionarray[4],$dimensionarray[5]);
            }
            echo "</table>";
            // Free result set
            //mysqli_free_result($result);
        }
        else
        {die(mysqli_error($con));
        }
        
        
      $size=sizeof ($dimensionarray);
        //$S=($size/3)-1;
        //echo "$S";
        //$i=0;
        
        
       for ($i=0; $i<$size; $i+=2)
        {
            //echo "this is $i <br>";
            
            $chesttmp=(string)$dimensionarray[$i];
            $waisttmp=(string)$dimensionarray[$i+1];
            $hiptmp=(string)$dimensionarray[$i+2];
            $chesttmp=stripslashes($chesttmp);
            $waisttmp=stripslashes($waisttmp);
            $hiptmp=stripslashes($hiptmp);
          if ($waisttmp=="N/A" and $hiptmp!="N/A")
                //$sql="SELECT * FROM women WHERE Brand='$brandname' and size='$brandsize' and style='JEANS'";
            {$sql1="SELECT DISTINCT * FROM $sex WHERE hip ='$hiptmp'and style = '$style'";
                //echo "$sql1";
            }
            elseif ($waisttmp!="N/A" and $hiptmp =="N/A")
            {
                $sql1="SELECT DISTINCT * FROM $sex WHERE waist ='$waisttmp' and style= '$style'";
                //echo "$sql1";
            }
            elseif ($waisttmp!="N/A" and $hiptmp !="N/A")
            {
                $sql1="SELECT DISTINCT * FROM $sex WHERE waist ='$waisttmp'and hip='$hiptmp'and style = '$style'";
                
            }
            else
            {echo "I am sorry. there is no recommendations from our database <br>";}
            
            

            
            $result=mysqli_query($con,$sql1);
            $count=mysqli_num_rows($result);
            
            echo "there are $count recommendations for you <br>";
            
            echo "<table border=\"1\" align=\"center\">";
            echo "<tr><th>Brand</th>";
            echo "<th>Style</th>";
            echo "<th>Shape</th>";
            echo "<th>Size</th></tr>";
            
            while($row1=mysqli_fetch_row($result))
            {//printf ("%s %s %s %s %s %s %s<br>",$row1[1],$row1[2],$row1[3],$row1[4],$row1[5],$row1[6],$row1[7]);
                
                echo"<tr><td>";
                echo $row1[1];
                echo"</td><td>";
                echo $row1[2];
                
             echo"</td><td>";
             echo $row1[8];
                echo"</td><td>";
                echo $row1[3];
                echo "</td></tr>";
                
                
                
            }
            echo "</table>";
            /*if ($result=mysqli_query($con,$sql1))
             {
             $count=mysqli_num_rows($result);
             if ($count==0)
             echo "I am sorry, there is no record in our database";
             // Fetch one and one row
             while ($row=mysqli_fetch_row($result))
             {
             printf ("%s %s %s\n",$row1[1],$row1[2],$row1[3]);
             
             //printf ("%s %s %s %s %s %s",$dimensionarray[0],$dimensionarray[1],$dimensionarray[2],$dimensionarray[3],$dimensionarray[4],$dimensionarray[5]);
             }
             // Free result set
             mysqli_free_result($result);
             }
             else
             {die(mysqli_error($con));
             }
             
             */
            
            
            
            
            
            
        }
       
        
        
    }
    
    //}
    mysqli_close($con);
    ?>
	