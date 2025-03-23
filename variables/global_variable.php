<?php
echo '<a href="\">Homepage</a>'.'<br>';
$data = "Hello";
$num1 = 20;

function testing()
{
    global $data;
    global $num1;
    $num1++;
    $data = "World";
    echo "Variable Inside a function " . $data . "<br>";
    echo "Value of Global variable inside function num1 : ".$num1."<br>";
}

testing();
testing();
testing();
testing();
testing();


echo "Variable Outside a function " . $data . "<br>";
echo "Value of Global variable outside function num1 : ".$num1."<br>";
?>
