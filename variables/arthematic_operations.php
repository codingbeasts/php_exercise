<?php
ob_start();
session_start();
$result = "";
$errors = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $choice = htmlspecialchars($_POST["flexRadioDefault"]);
    $num1 = intval($_POST["num1"]);
    $num2 = intval($_POST["num2"]);
    if (isset($choice) && isset($num1) && isset($num2)) {
        // var_dump($num1, $num2);
        if(is_numeric($num1) && is_numeric($num2)){
            $result =
                "Calculate value : " .
                calculation($choice, $num1, $num2);
            }
        else{
            $result = '<h4 class="text-danger">*Enter Values are not numeric please enter numbers only*<h4>';
        }
        $_SESSION["result"] = $result;
        header("Location: " . $_SERVER['PHP_SELF']);
        exit();
    } else {
        $errors["flexRadioDefault"] =
            "Pleae Select atleast an option";
    }
}

if (isset($_SESSION['result'])) {
    $result = $_SESSION['result'];
    unset($_SESSION['result']);
}

function calculation($choice, $num1, $num2)
{
    switch ($choice) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        case "/":
            return $num1 / $num2;
        default:
            return "Please Select Any Choice First";
    }
}
?>
<?php require_once "../view/ex_header.php" ?>
<div class="mb-4"><a href="/">Homepage</a></div>
<h1>
    Store two numbers in variables and perform the following operations
</h1>
<h3 class="mt-5">Choices</h3>
<div class="d-flex align-items-start gap-5 mt-5">
    <form method="POST" action=""
        class="d-flex flex-column gap-5 align-items-start col-5 py-3 px-3 bg-light rounded-4 shadow-lg">
        <div class="form-group">
            <label class="form-label">Enter Your Choice </label>
            <div class="form-check">
                <label class="form-check-label" for="flexRadioDefault0">Addition</label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault0" value="+">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="flexRadioDefault1">Subraction</label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1" value="-">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="flexRadioDefault2">Mutliplication</label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" value="*">
            </div>
            <div class="form-check">
                <label class="form-check-label" for="flexRadioDefault3">Divide</label>
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault3" value="/">
            </div>
        </div>
        <div class="form-group">
            <label class="form-label" for="num1">Enter num 1</label>
            <input id="num1" class="form-control" name="num1" type="text">
        </div>
        <div class="form-group">
            <label class="form-label" for="">Enter num 2</label>
            <input id="num2" class="form-control" name="num2" type="text">
        </div>
        <button class="btn btn-primary">Submit</button>
    </form>
    <div>
        <?php if ($result): ?>
            <p>
                <?php echo $result; ?>
            </p>
        <?php endif; ?>
        <?php if (!empty($errors)): ?>
            <p>
                Expected Result : <?php echo $errors['flexRadioDefault']; ?>
            </p>
        <?php endif; ?>
    </div>

</div>
<?php require_once "../view/ex_footer.php" ?>
<?php ob_end_flush(); ?>