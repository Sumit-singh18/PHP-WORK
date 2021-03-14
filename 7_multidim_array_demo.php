<?php 
// Defining a multidimensional array 
$favorites = array( 
    "first" =>array( 
        "name" => "Dave Punk", 
        "mob" => "5689741523", 
        "email" => "davepunk@gmail.com", 
    ), 
    "Second"=>array( 
        "name" => "Monty Smith", 
        "mob" => "2584369721", 
        "email" => "montysmith@gmail.com", 
    ), 
    "third"=>array( 
        "name" => "John Flinch", 
        "mob" => "9875147536", 
        "email" => "johnflinch@gmail.com", 
    ) 
);
echo "<pre>";
print_r($favorites);
echo "<br><br>";
foreach($favorites as $key=>$val)
{
    echo $key. "<br>";
    foreach($val as $key2=>$val2){
        echo " ";
        echo $key2;
        echo " ";
        echo $val2;
        echo "<br><br>";
    }
}
?> 
