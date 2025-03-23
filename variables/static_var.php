<?php
// static variables in php 
echo '<a href="\">Homepage</a>'.'<br>';
function call_static_var(){
    static $num = 20;
    $sum = 23; 

    $num++;
    $sum++;
    return [$num,$sum];
}

$var_static = call_static_var();
$var_static = call_static_var();
$var_static = call_static_var();
$var_static = call_static_var();
echo "Type of call_static_var function : ".gettype($var_static)."<br>";
echo "Counting Array of call_static_var function : ".count($var_static)."<br>";
foreach($var_static as $key => $data){
    if($key == 0){
        echo "Value of Static Variable : ".$data.PHP_EOL."<br>";
    }
    else{
        echo "Value of Normal Variable : ".$data.PHP_EOL."<br>";
    }
}


