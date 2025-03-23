<?php
    session_start();
?>
<?php require_once '../view/ex_header.php'?>
<div>
<h4 class="text-success">$_SERVER - this is SERVER superglobal</h4>
<?php
    echo '<pre>';
    print_r($_SERVER);
    echo '</pre>';
?>
<h4 class="text-success">$_REQUEST - this is REQUEST superglobal</h4>
<?php
    echo '<pre>';
    print_r($_REQUEST);
    echo '</pre>';
?>
<h4 class="text-success">$_POST - this is POST superglobal</h4>
<?php 
    echo '<pre>';
    print_r($_POST);
    echo '</pre>';
?>
<h4 class="text-success">$_GET - this is GET superglobal</h4>
<?php 
    echo '<pre>';
    print_r($_GET);
    echo '</pre>';
?>
<h4 class="text-success">$_FILES - this is FILES superglobal</h4>
<?php
    echo '<pre>';
    print_r($_FILES);
    echo '</pre>';
?>
<h4 class="text-success">$_ENV - this is ENV superglobal</h4>
<?php
    echo '<pre>';
    print_r($_ENV);
    echo '</pre>';
?>
<h4 class="text-success">$_COOKIE - this is COOKIE superglobal</h4>
<?php
    echo '<pre>';
    print_r($_COOKIE);
    echo '</pre>';
?>
<h4 class="text-success">$_SESSION - this is SESSION superglobal</h4>
<?php
    echo '<pre>';
    print_r($_SESSION);
    echo '</pre>';
?>
</div>
<?php require_once '../view/ex_footer.php'?>