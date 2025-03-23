<?php require_once '../view/ex_header.php' ?>
<div>
    <div><a href="/">Homepage</a></div>
    <h4>Loops in PHP</h4>
    <p>Print Counting Using for loop</p>
    <?php for ($i = 1; $i <= 10; $i++): ?>
        <span><?= $i ?></span>
    <?php endfor ?>
    <p>Print Only Even Numbers Till 10</p>
    <?php $i = 1;
    while ($i <= 10) {
        if ($i % 2 !== 0) {
            echo "$i<br>";
        }
        $i++;
    }
    function printPrime($n):bool{
        if($n == 1 || $n ==0){
            return false;
        }
        for($c=2;$c<=sqrt($n);$c++){
            if($n % $c === 0){
                return false;
            }
        }
        return true;    
    }
    $numb = 20;
    $i = 1;
    do{
        if(printPrime($i)){
            echo 'Prime : '.$i.'<br>';
        }
        $i++;
    }while($i <= $numb);
    ?>

    <p>Print only those prime numbers till 20</p>
</div>
<?php require_once '../view/ex_footer.php' ?>