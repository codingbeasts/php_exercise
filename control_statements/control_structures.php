<?php require_once "../view/ex_header.php" ?>
<div>
    <div class="mb-4"><a href="/">Homepage</a></div>
    <div class="">
        <h1>Control Statement in php</h1>
        <ol>
            <li>if-else</li>
            <li>if-elseif-else</li>
            <li>switch</li>
            <li>ternary operator</li>
        </ol>
        <form action="" method="POST" class="d-flex flex-column align-items-start gap-4 mb-3">
            <div class="form-check">
                <label for="if_else" class="form-check-label">If else</label><input type="radio" name="ctrlStmt" value="if_stmt" id="if_else" class="form-check-input">
            </div>
            <div class="form-check"><label for="switch" class="form-check-label">Switch</label><input type="radio" name="ctrlStmt" value="switch_stmt" id="switch" class="form-check-input"></div>
            <div class="form-check"><label for="ternary" class="form-check-label">Ternary</label><input type="radio" name="ctrlStmt" value="tern_stmt" id="ternary" class="form-check-input"></div>
            <div class="form-group">
                <label for="compVal" class="form-label">Enter Comparision Value : </label>
                <input type="text" name="cValue" id="compVal" class="form-control" placeholder="Enter Your Occupation">
            </div>
            <button class="btn btn-outline-primary">Submit</button>
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $cval = htmlspecialchars($_POST['cValue']);
            if (is_numeric($cval)) {
                echo "<b>Please Enter Only String Values</b>";
            }

            if ($_POST['ctrlStmt'] === 'if_stmt') {
                if ($cval === 'programmer') {
                    echo '<h4>This person is programmer</h4>';
                } else if ($cval === 'teacher') {
                    echo '<h4>This person is a teacher</h4>';
                } else {
                    echo "<b class=\"text-danger\">Please Choose Either teacher or programmer</b>";
                }
            } else if ($_POST['ctrlStmt'] === 'switch_stmt') {
                switch ($cval) {
                    case 'corporate':
                        echo '<h4>This person works in corporate</h4>';
                        break;
                    case 'product-based':
                        echo '<h4>This person works in product based company</h4>';
                        break;
                    default:
                        echo "<b class=\"text-danger\">Please Choose Either corporate or product-based</b>";
                }
            } else {

                echo $cval === 'government' ? 'This person works in Government' : 'This is person works in Private';
            }
        }
        ?>
    </div>
</div>
<?php require_once "../view/ex_footer.php" ?>