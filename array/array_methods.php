<?php require_once "../view/ex_header.php";



$arrayEx = ['jatin', 'lakshay', 'siddhanth', 'jitender'];
$arraySur = ['ahuja','vinayak','singh','kumar'];
$arrAssoc = [
    ["name" => "dipanshu", "job" => "programming", "salary"=>30000,"field"=>"Software development"],
    ["name" => "jatin", "job" => "manager","salary"=>80000,"field"=>"Customer Relation"]
];


echo '<pre>';
var_dump($arrayEx);
echo '</pre>';
?>
<div><a href="/">Homepage</a></div>
<h4>Arrays Methods</h4>
<ol>
    <li>
        <h5>Check whether is_array($arrayEx) : <?= is_array($arrayEx) ?></h5>
    </li>
    <li>
        <h5>Check array declaration or not isset($arrayEx) : <?= isset($arrayEx) ?></h5>
    </li>
    <li>
        <h5>Print Whole array by foreach loop </h5>
        <ul>
            <?php foreach ($arrayEx as $arrK => $arrV): ?>
                <li>Keys : <?= $arrK ?> & Values : <?= $arrV ?></li>
            <?php endforeach ?>
        </ul>
    </li>
    <li>
        <h5>Get a particular Element by index at 2 $arrayEx[2] : <?= $arrayEx[2] ?></h5>
    </li>
    <li>
        <h5>Edit a particular Element by index at 1 $arrayEx[1] : <?= $arrayEx[1] = 'Robert' ?></h5>
    </li>
</ol>
<h4>Basic Array Operation</h4>
<ol>
    <li>array() - Create an array.</li>
    <li>array_push() - Insert elements at the end : <?= array_push($arrayEx, "Bull", "Pit") ?></li>
    <li>array_pop() - Take out the value from the end : <?= array_pop($arrayEx) ?></li>
    <li>array_unshift() - Insert elements from the beginning : <?= array_unshift($arrayEx, "Joe", "Rogan") ?></li>
    <li>array_shift() - Take out the value from the beginning : <?= array_shift($arrayEx) ?></li>
    <li>count() - count how many elements are there in array : <?= count($arrayEx) ?></li>
    <li>sizeof() - same as count : <?= sizeof($arrayEx) ?></li>
</ol>
<h4>Searching & Checking operation in array</h4>
<ol>
    <li>in_array(element,array) - Check if value exists in array or not : <?= in_array('Bull', $arrayEx) ?></li>
    <li>array_search(element,array) - Search for a value and return it's index : <?= array_search("siddhanth", $arrayEx); ?></li>
    <li>array_key_exists(index, array) - Check if keys exits using index <?= array_key_exists(3, $arrayEx) ?></li>
    <li><b class="text-decoration-line-through">array_find() - Return the first element satisfying a callback function</b></li>
    <li><b class="text-decoration-line-through">array_find_key() - Return the key of the first matching element</b></li>
    <li><b class="text-decoration-line-through">array_is_list() — Check if an array is a list</b></li>
</ol>
<h4>Sorting &amp; Ordering</h4>
<ol>
    <li>sort() - Sort an array in ascending order : <?= sort($arrayEx) ?></li>
    <li>rsort() - Reverse Sort an array in descending order : <?= rsort($arrayEx) ?></li>
    <li>asort() - Sort an associative array in ascending order : <?= asort($arrAssoc)?></li>
    <li>arsort() - Reverse Sort an associative array in descending order : <?= arsort($arrAssoc)?></li>
    <li>ksort() - Sort by keys in ascending order : <?= ksort($arrAssoc)?></li>
    <li>krsort() - Reverse Sort by keys in descending order : <?= krsort($arrAssoc)?></li>
</ol>
<h4>Key & Value Operations</h4>
<ol>
    <li>array_keys() - Get all keys : <?= print_r(array_keys($arrAssoc[0]))?></li>
    <li>array_values() - Get all values : <?= print_r(array_values($arrAssoc[0]))?></li>
    <li>array_flip() - Swap key and values : <?= print_r(array_flip($arrAssoc[0]))?></li>
    <li>array_columns() - Extract a column from an array :<?= print_r(array_column($arrAssoc,'salary'))?></li>
    <li>array_key_first() - Get the first key : <?= var_dump(array_key_first($arrAssoc[0]))?></li>
    <li>array_key_last() - Get the last key : <?= var_dump(array_key_last($arrAssoc[0]))?></li>
</ol>
<?php 
$arrayEx = ['jatin', 'lakshay', 'siddhanth', 'jitender'];
$arraySur = ['ahuja','vinayak','singh','kumar'];
?>
<h4>Merge & Splitting</h4>
<ol>
    <li>array_merge - Merge multiple arrays : <?= print_r(array_merge($arrayEx,$arraySur))?></li>
    <li>array_merge_recursive - Merge mulitple array recursively : <?= print_r(array_merge_recursive($arrayEx,$arraySur))?></li>
    <li>array_combine - Create one array using keys and another as values : <?= print_r(array_combine($arrayEx,$arraySur))?></li>
    <li>array_slice - Extract a portion of array : <?= print_r(array_slice($arrayEx,3))?></li>
    <li>array_splice - Remove portion and replace with array : <?= print_r(array_splice($arrayEx,1,3,$arraySur))?></li>
    <li>array_chunk - Split array into chunk : <?= print '<pre>';print_r(array_chunk($arrayEx,2)). print '</pre>';?></li>
</ol>
<h4>Filtering & Transforming</h4>
<ol>
    <li>array_map() - Transforming Data with callback function : <?= print_r(array_map(fn($cb):float => $cb* 84,[3000,400,3300,6546] ))?></li>
</ol>
<?php
// echo '<pre>';
// var_dump($arrAssoc);
// echo '</pre>';
?>
<?php require_once "../view/ex_footer.php"; ?>