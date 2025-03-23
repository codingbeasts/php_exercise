<?php require_once "../view/ex_header.php" ?>
                <div class="mb-4"><a href="/">Homepage</a></div>
                <div class="">
                    <form class="d-flex flex-column gap-4 align-items-start" method="POST" action="">
                        <div class="form-group">
                                <label for="dataval" class="form-label">Enter Value</label>
                                <input type="text" name="dataval" id="dataval" class="form-control">
                        </div>
                        <button class="btn btn-success">Show Datatype of Current Value</button>
                    </form>
                </div>
                <?php
                    if($_SERVER['REQUEST_METHOD'] == "POST"){
                        echo $_SERVER['REQUEST_METHOD'];
                        $dataval = htmlspecialchars($_POST["dataval"]);
                        if(isset($dataval)){
                            if($dataval === "null"){
                                print "<br>Type is null";
                            }
                            else if(strtolower($dataval) === "true" || strtolower($dataval) === "false"){
                                print "<br>Type is boolean";
                            }
                            else if(ctype_digit($dataval)){
                                print "<br>Type Integer";
                            }
                            else if(is_numeric($dataval) && strpos($dataval,'.') !== false){
                                print "<br>Type Float";
                            }
                            else if(is_string($dataval)){
                                print "<br>Type String";
                            }
                            else{
                                print "<br>Data Type : ".gettype($dataval);
                            }
                        }
                    }
                ?>
<?php require_once "../view/ex_footer.php" ?>
