<?php require_once "../view/ex_header.php"?>
            <div class="">
                <div class="mb-4"><a href="/">Homepage</a></div>
                <form class="d-flex flex-column gap-4 align-items-start" method="POST" action="">
                    <div class="form-group"><label for="vOne" class="form-label">Enter Value 1</label><input type="text"
                            name="vOne" id="vOne" class="form-control"></div>
                    <div class="form-group"><label for="vTwo" class="form-label">Enter Value 2</label><input type="text"
                            name="vTwo" id="vTwo" class="form-control"></div>
                    <button class="btn btn-success">Swap Values</button>
                </form>
            </div>
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                echo $_SERVER['REQUEST_METHOD']."<br>";
                $v1 = intval(htmlspecialchars($_POST["vOne"]));
                $v2 = intval(htmlspecialchars($_POST["vTwo"]));
                if (isset($v1) && isset($v2)) {
                    if (is_int($v1) && is_int($v2)) {
                        $v2 = $v1+$v2;
                        $v1 = $v2-$v1;
                        $v2 = $v2-$v1;
                        print "Value 1 : ".$v1."<br>"."Value 2 : ".$v2;
                    } else {
                        print "Enter only integer values";
                    }
                } else {
                    print "Values are not entered";
                }
            }
            ?>
<?php require_once "../view/ex_footer.php"?>
