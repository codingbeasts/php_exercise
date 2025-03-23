<?php declare(strict_types=1);?>
<?php require_once "../view/ex_header.php"?>
<div>
    <div><a href="/">Home</a></div>
    <div>
        <h4>User Defined functions</h4>
        <?php
        function greet(string $name):string{ return "Hello $name <br>"; }
        echo greet('dipanshu');
        ?>
        <h4>Function with default arguments</h4>
        <?php
        function describe(string $detail = 'he is doing something'):string{ return "He is a $detail <br>"; }
        echo describe('Developer');
        ?>
        <h4>Function with variable number of arguments</h4>
        <?php
        function sum(int ...$num):array{
            return array_map(fn($n):int => $n += $n,$num);
        }
        echo '<pre>';
        print_r(sum(1, 2, 3, 4, 5));
        echo '</pre>';
        ?>
        <h4>Anonymous function in PHP</h4>
        <?php 
        $ageCalc = function(int $year):int{
            return date('Y') - $year;
        };
        echo "My current age is ".$ageCalc(1997);
        ?>
        <h4>use keyword for inheriting variables for the parent scope not from parent class.</h4>
        <?php 
            $message = 'Welcome Mr.';
            $msgBox = function ($name) use ($message):string 
            { return $message . " " . $name; };
            echo $msgBox('dipanshu');
        ?>
        <h4>First class function in PHP</h4>
        <?php
            function greets($name):string{
                return "Hola $name";
            }

            $dipanshu = "greets";

            function sayMyname($fn,$name){
                return $fn($name);
            }
            echo sayMyname($dipanshu,'dipanshu');
        ?>
    </div>
</div>
<?php require_once "../view/ex_footer.php"?>