<?php require_once "../view/ex_header.php"?>
    <div>
        <div class="mb-4"><a href="/">Homepage</a></div>
        <h2>Compound Interest Cacluation.</h2>
        <form class="d-flex flex-column gap-4 align-items-start" action="" method="POST">
            <div class="form-group">
                <label class="form-label" for="pr_amt">Principal Amount</label>
                <input id="pr_amt" class="form-control" type="text" name="prpl">
            </div>
            <div>
                <label class="form-label" for="roi">Rate of interest</label>
                <input id="roi" class="form-control" type="text" name="ri">
            
            </div>
            <div>
                <label class="form-label" for="yr">For Years</label>
                <input id="yr" class="form-control" type="text" name="yrs">
            
            </div>
            <div>
                <h5>Compound Times in a year</h5>
                <ul>
                    <li class="form-check">
                        <input id="ct_y1" class="form-check-input" type="radio" value="12" name="t_yr">
                        <label class="form-check-label" for="ct_y1">Monthly</label>
                    </li>
                    <li class="form-check">
                        <input id="ct_y2" class="form-check-input" type="radio" value="4" name="t_yr">
                        <label class="form-check-label" for="ct_y2">Quarterly</label>
                    </li>
                    <li class="form-check">
                        <input id="ct_y3" class="form-check-input" type="radio" value="2" name="t_yr">
                        <label class="form-check-label" for="ct_y3">Half Yearly</label>
                    </li>
                    <li class="form-check">
                        <input id="ct_y4" class="form-check-input" type="radio" value="1" name="t_yr">
                        <label class="form-check-label" for="ct_y4">Yearly</label>
                    </li>
                </ul>
            </div>
            <?php 
                $ci = '';
                if($_SERVER["REQUEST_METHOD"] === "POST"){
                    $p = floatval($_POST["prpl"]);
                    $r = floatval($_POST["ri"]) / 100;
                    $t = floatval($_POST["yrs"]);
                    $n = floatval($_POST["t_yr"]);
                
                
                    $ci = $p * pow((1+($r/$n)),($n*$t));

                }
            ?>
            <div><?= $ci;?></div>
            <button class="btn btn-secondary">Calculate</button>
        </form>
    </div>
<?php require_once "../view/ex_footer.php"?>
