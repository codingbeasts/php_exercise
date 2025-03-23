<?php require_once "../view/ex_header.php"?>
    <div>
        <div class="mb-4"><a href="/">Homepage</a></div>
        <form class="d-flex flex-column gap-4 align-items-start" method="POST">
            <div class="form-group">
                <label class="form-label" for="sumVal">Enter Value to sum together </label>
                <input id="sumVal" class="form-control" type="text" name="sVal">
            </div>
            <button class="btn btn-primary">submit</button>
            <?php
                if($_SERVER['REQUEST_METHOD'] === "POST"){
                    $sum = 0;
                    $r;
                    $sum_val = intval($_POST["sVal"]);

                    do{
                        echo "Sum val : ".$sum_val."<br>";
                        $r = $sum_val % 10;
                        $sum = $sum + $r;
                        $sum_val = floor($sum_val / 10);
                    }while($sum_val > 0);

                    echo "Sum of digit ".$sum;
                }
            ?>
        </form>
    </div>
<?php require_once "../view/ex_footer.php"?>
