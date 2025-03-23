<? require_once "../view/ex_header.php" ?>
<a href="/">Back to homepage</a>
<br>
<?

$num_1 = 5;
$num_2 = 5.34;
$num_3 = '32';


echo '<h3>gettype of numbers in php</h3>','<br>';
echo 'gettype($num_1) : '.gettype($num_1).'<br>';
echo 'gettype($num_2) : '.gettype($num_2).'<br>';
echo 'gettype($num_3) : '.gettype($num_3).'<br>';

echo '<br><h3 class="my-0">Type checking function in php if return 1 means true, or 0 means false</h3>'.'<br>';
echo '<b class="text-danger">* if the value is false php will not print any value. *</b><br>';

echo 'is_int($num_1) : '.is_int($num_1).'<br>';
echo 'is_int($num_2) : '.is_int($num_2).'<br>';
echo 'is_int($num_3) : '.is_int($num_3).'<br>';
echo 'is_number($num_2) : '.is_numeric($num_2).'<br>';
?>
<? require_once "../view/ex_footer.php" ?>