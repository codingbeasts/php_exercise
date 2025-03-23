<?php require_once "../view/ex_header.php" ?>
            <div class="">
                <div class="mb-4"><a href="/">Homepage</a></div>
                <form class="d-flex flex-column gap-4 align-items-start" method="POST" action="">
                    <div class="form-group"><label for="rval" class="form-label">Enter radius</label><input type="text"
                            name="rval" id="rval" class="form-control"></div>
                    <button class="btn btn-success">Calculate Radius</button>
                </form>
            </div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo $_SERVER['REQUEST_METHOD']."<br>";
                $rval = floatval(htmlspecialchars($_POST["rval"]));
                if (isset($rval)) {
                    if (is_float($rval)) {
                        print "Calculated Area of Circle : ". pi() * pow($rval,2);
                    } else {
                        print "Enter Radius Value";
                    }
                } else {
                    print "Values are not entered";
                }
            }
            ?>
<?php require_once "../view/ex_footer.php" ?>
