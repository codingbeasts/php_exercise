<? require_once "../view/ex_header.php" ?>
<?php require_once "../data_types/class_objects.php"?>
<?
    echo '<br>Find out type of variable using is_<br>';
    echo 'is_null() : '.is_null(null).'<br>';
    echo 'is_bool() : '.is_bool(true).'<br>';
    echo 'is_int() : '.is_int(5).'<br>';
    echo 'is_integer() : '.is_integer(13).'<br>';
    echo 'ctype_digit() : '.ctype_digit('10').'<br>';
    echo 'is_float() : '.is_float(4.5).'<br>';
    echo '<b class="text-danger">This function is deperciated and removed from php > 7.4 is_real() : </b>'.'<br>';
    echo 'is_double() : '.is_double(43434434.54).'<br>';
    echo 'is_long() : '.is_long(6743498643798265798).'<br>';
    echo '<b>*can be floating or non floating value*</b> is_numeric() : '.is_numeric(47892.544).'<br>';
    echo 'is_string() : '.is_string("dipanshu Shora").'<br>';
    echo 'is_array() ; '.is_array([4,3,5,6]).'<br>';
    echo 'is_object() : '.is_object($dipanshu).'<br>';
    echo 'is_callable() : '.'<br>';
    echo 'is_countable() : '.is_countable([1,2,3,4,5]).'<br>';
    echo 'is_iterable() : '.is_iterable(['a','b','c','d']).'<br>';
    echo 'is_resource() : '.'<br>';
    echo 'is_scalar() : '.'<br>';
?>
<? require_once "../view/ex_footer.php" ?>