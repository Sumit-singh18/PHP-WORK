
<?php
//Demonstrate for each loop with associative array
$color = array(1=>"Red",2=>"Blue",3=>"Green");
foreach($color as $key=>$val){
    echo "The color key is ".$key." and the value ".$val."<br/>";
}
?>