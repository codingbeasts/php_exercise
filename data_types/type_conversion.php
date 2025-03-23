<?php require_once "../view/ex_header.php"?>
    <a href="/">Homepage</a>
    <div>
        <?php $val = 20; echo '<b>Value to be converted is : '.$val.'</b>';?>
        <h4>This are the Explicit Methods that can be used to change data-type in php</h4>
        <ul>
            <li>boolval(20) — Get the boolean value of a variable : <?php var_dump(boolval($val));?></li>
            <li>doubleval(20) — Alias of floatval : <?php var_dump(doubleval($val));?></li>
            <li>floatval(20) — Get float value of a variable : <?php var_dump(floatval($val));?></li>
            <li>intval(20) — Get the integer value of a variable : <?php var_dump(intval($val));?></li>
            <li>strval(20) — Get string value of a variable : <?php var_dump(strval($val));?></li>
        </ul>
        <div>
            <h4>This are the Explicit Type Casting that can be used without Method() Arguments</h4>
            <b>Also type can be changed via using type directly like : </b>
            <ul>
                <li>(bool) $var_name : <?php echo gettype((bool)$val)?></li>
                <li>(int) $var_name : <?php echo gettype((int)$val)?></li>
                <li>(float) $var_name : <?php echo gettype((float)$val)?></li>
                <li>(string) $var_name : <?php echo gettype((string)$val)?></li>
            </ul>
        </div>
        <div>
            <h4>There is also another method called settype() which is a method that takes a value and type to change data-type</h4>
            <div>settype($val,'null') <?settype($val,'null'); echo gettype($val)?></div>
        </div>
    </div>
<?php require_once "../view/ex_footer.php"?>