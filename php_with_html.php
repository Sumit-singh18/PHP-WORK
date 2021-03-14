<?php
//Include php in html tags
?>
<html>
    <head>
        <title>LCM</title>
    </head>
    <body>
        <?php
           $x = 5;
           $y = 11;
            //$lcm = $x>$y?$x:$y; //by using conditional operator
            /*if($x>$y){
                $lcm = $x;
            }
            else{
                $lcm = $y;
            }
            while(1){
                if($lcm%$x==0 and $lcm%$y==0){
                    echo "LCM of two nos. are new ".$lcm;
                    break;
                }
                $lcm++;
            }*/
            
            for($i=1;$i<=$x and $i<=$y;++$i)
            {
	            if($x%$i==0 and $y%$i==0)
		        $gcd=$i;
            }
            $lcm = ($x*$y)/$gcd;
            echo "LCM of two nos. are ".$lcm; */
        ?>
        <br><b>End of the while loop</b>
    </body>
</html>
