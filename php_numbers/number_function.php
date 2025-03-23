<?php require_once '../view/ex_header.php' ?>
<div>
    <div class="mb-4"><a href="/">Homepage</a></div>
    <h4>Number Functions in PHP</h4>
    <ol>
        <li>abs(-15) : <?= abs(-15);?></li>
        <li>pow(2,4) : <?= pow(2,4)?></li>
        <li>sqrt(15) : <?= sqrt(15)?></li>
        <li>min(10,2) : <?= min(10,2)?></li>
        <li>max(1,24,32) : <?= max(1,24,32)?></li>
        <li>round(2.5) : <?=round(2.5)?></li>
        <li>round(2.4) : <?= round(2.4)?></li>
        <li>round(2.6) : <?= round(2.6)?></li>
        <li>floor(2.6) : <?= floor(2.6)?></li>
        <li>floor(2.3) : <?= floor(2.3)?></li>
        <li>ceil(2.4) : <?= ceil(2.4)?></li>
        <li>ceil(2.6) : <?= ceil(2.6)?></li>
    </ol>
</div>
<?php require_once '../view/ex_footer.php' ?>