<?php
    $con=mysqli_connect("perfit.db.10747906.hostedresource.com","perfit","Harvard1990!","perfit");
    
    if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    else
    {
        
        $brandname=(string)$_POST["brand"];
        $brandsize=(string)$_POST["pcj_size_field"];
        $style=(string)$_POST["style"];
        $sex=(string)$_POST["sex"];
        $brandname=stripslashes($brandname);
        $brandsize=stripslashes($brandsize);
        //$resultarray=array();
        $sql="SELECT * FROM women WHERE Brand='$brandname' and size='$brandsize' and style = 'COATS'";
        
        
        if ($result=mysqli_query($con,$sql))
        {
            // Fetch one and one row
            while ($row=mysqli_fetch_row($result))
            {
                printf ("%s %s %s %s %s %s %s %s\n",$row[0],$row[1],$row[2],$row[3],$row[4],$row[5],$row[6],$row[7]);
            }
            // Free result set
            mysqli_free_result($result);
        }
        else
        {die(mysqli_error($con));
    }