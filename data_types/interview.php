<?php
$str = 'dipanshu';
// echo strrev($str);
$revstr = "";
$countStr = strlen($str);
for ($i = $countStr - 1; $i >= 0; $i--) {
    $revstr .= $str[$i];
}
echo "$revstr<br>";


$randomThings = [
    "fruit" => "Mango",
    "color" => "Turquoise",
    "animal" => "Red Panda",
    "city" => "Kyoto",
    "car" => "Tesla Model S",
    "gadget" => "Steam Deck",
    "movie" => "Inception",
    "song" => "Bohemian Rhapsody",
    "book" => "1984",
    "planet" => "Neptune",
    "drink" => "Mojito",
    "language" => "Python",
    "game" => "The Legend of Zelda",
    "flower" => "Cherry Blossom",
    "invention" => "Light Bulb",
];

echo '<br> Counting length of an associative array : ' . count(array_values($randomThings));
$data1 = '';
$data2 = NULL;
$data3 = 0;
$data4 = true;
$data5 = 12332;


echo '<h4>isset()</h4>';
echo '<pre>';
var_dump(isset($data1));
var_dump(isset($data2));
var_dump(isset($data3));
var_dump(isset($data4));
var_dump(isset($data5));
echo '</pre>';
echo '<h4>empty()</h4>';
echo '<pre>';
var_dump(empty($data1));
var_dump(empty($data2));
var_dump(empty($data3));
var_dump(empty($data4));
var_dump(empty($data5));
echo '</pre>';
