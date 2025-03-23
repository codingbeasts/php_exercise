<?php require_once "../view/ex_header.php"?>
    <div>
        <div class="mb-4"><a href="/">Homepage</a></div>
        <form class="d-flex flex-column gap-4 align-items-start" method="POST" action="">
            <div class="form-group">
                <label class="form-label" for="chk_num">Enter Number which is odd or even</label>
                <input id="chk_num" class="form-control" type="text" name="num_val">
            </div>
            <button class="btn btn-primary">submit</button>
            <?php 
                if($_SERVER["REQUEST_METHOD"] === "POST"){
                    $num_val = htmlspecialchars($_POST["num_val"]);
                    $num_val = intval($num_val);

                    if($num_val % 2 != 0){
                        echo "Entered Value is Odd";
                    }
                    else{
                        echo "Entered Value is Even";
                    }
                }
            ?>
        </form>
    </div>
<?php require_once "../view/ex_footer.php"?>
