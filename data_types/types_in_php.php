<?php require_once "../view/ex_header.php" ?>
<a href="/">homepage</a>
<div>
    <h1>Types of Data types in php</h1>
    <ul>
        <li>String</li>
        <li>Integer</li>
        <li>Float (floating point numbers : also called doubles)</li>
        <li>Boolean</li>
        <li>Array</li>
        <li>Object</li>
        <li>NULL</li>
        <li>RESOURCES</li>
    </ul>
</div>
<?php
$str = "This is a string";
echo 'gettype : ' . gettype($str);
$num = 123;
echo '<br>gettype : ' . gettype($num);
$floatingval = 20.45;
echo '<br>gettype : ' . gettype($floatingval);
$testbool = false;
echo '<br>gettype : ' . gettype($testbool);
$ex_array = ["12", 3, "32", true];
echo '<br>gettype : ' . gettype($ex_array);
$ex_object = [
    "name" => "dipanshu",
    "lastname" => "shora"
];
echo '<br>Associate array gettype : ' . gettype($ex_object);
echo '<br>gettype : ' . gettype(null);
?>
<?php require_once "../view/ex_footer.php" ?>