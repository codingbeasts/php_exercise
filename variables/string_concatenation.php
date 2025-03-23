<?php

?>


<?php require_once "../view/ex_header.php" ?>
                <div class="">
                    <div class="mb-4"><a href="/">Homepage</a></div>
                    <form class="d-flex flex-column gap-4 align-items-start" method="POST" action="">
                        <div class="form-group"><label for="string_One" class="form-label">Enter String 1</label><input
                                type="text" name="str_1" id="string_One" class="form-control"></div>
                        <div class="form-group"><label for="string_Two" class="form-label">Enter String 2</label><input
                                type="text" name="str_2" id="string_Two" class="form-control"></div>
                        <button class="btn btn-success">Show Catenation</button>
                    </form>
                </div>
                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    echo $_SERVER['REQUEST_METHOD'];
                    $str_1 = htmlspecialchars($_POST["str_1"]);
                    $str_2 = htmlspecialchars($_POST["str_2"]);
                    if (isset($str_1) && isset($str_2) && is_string($str_1) && is_string($str_2)) {
                        print "<div>" . $str_1.$str_2 . "<div>";
                    }
                }
                ?>
<?php require_once "../view/ex_footer.php" ?>
