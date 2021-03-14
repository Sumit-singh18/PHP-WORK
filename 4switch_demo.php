<?php
//Demostrate switch statement
$value=1;
echo "Demonstrate the switch statement<br>";
switch($value){
    case 1:
        {
        echo "one is executed";
        echo "one is executed";
        break;
    }
    case 2:
        echo "two is executed";
        break;
    case 3:
        echo "third is executed";
        break;
    default:
        echo "invalid value";
}
echo "<br>"."Switch statement is executed succesfully";
?>