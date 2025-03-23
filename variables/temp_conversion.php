<?php require_once "../view/ex_header.php"?>
<?php $fahrenheit = '';?>
<div>
    <div class="mb-4"><a href="/">Homepage</a></div>
    <h1>Celsius to Fahrenheit</h1>
    <form action="" class="d-flex flex-column gap-4 align-items-start" method=POST>
        <div class="form-group">
            <label class="form-label" for="">Enter Celsius</label>
            <input id="cs" class="form-control" type="text" name="cels">
        </div>
        <?php 
            if($_SERVER['REQUEST_METHOD'] === "POST"){
                $celsius = floatval($_POST["cels"]);
                $fahrenheit = ($celsius * 9/5) + 32;
            }
        ?>
        <div class="form-group">
            <label class="form-label" for="">To Fahrenheit</label>
            <input id="fr" class="form-control" type="text" name="frnt" value="<?php echo $fahrenheit;?>" disabled>
        </div>
        <button class="btn btn-primary">Calculate</button>
    </form>
</div>
<?php require_once "../view/ex_footer.php"?>
