<?php require_once "../view/ex_header.php"?>
    <a href="/">Homepage</a>
    <div>
        <h4>Data Handling function in php</h4>
        <ul>
            <?php $value = "value";?>
            <li>gettype() - this function is used to gettype of a variable : <?php echo gettype($value);?></li>
            <li>empty() - this function is used to check whether variable is empty or not : <?php echo empty($value);?></li>
            <li>isset() - to check whether is defined or not. and this can also check multiple data-type : <?php echo isset($value);?></li>
            <li>unset() - this function is used to destroy variable : <?php unset($value);?></li>
        </ul>
    </div>
    
<?php require_once "../view/ex_footer.php"?>