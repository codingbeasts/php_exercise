<?php
$title = "Validation in PHP";
require_once "../view/ex_header.php";
define("REQUIRED_FIELD_ERROR", "This field is required");
$errors = [];
echo '<a href="\">Homepage</a>'.'<br>';
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    function handleData($field, $validation)
    {
        global $errors;
        $value = isset($_POST[$field])
            ? htmlspecialchars(stripcslashes(trim($_POST[$field])))
            : null;
        if ($value === null || $value === "" || $value === "null") {
            $errors[$field] = "This field must not be empty";
            // return null;
        } else {
            // return $value;
            return $validation($value, $field);
        }
    }

    function validateData($data, $type)
    {
        global $errors;
        // Explicitly check if the data is empty
        if ($data === null || $data === "") {
            $errors[$type] = REQUIRED_FIELD_ERROR;
            return null;
        }
        switch ($type) {
            case "eName":
                if (strlen($data) < 6 || strlen($data) > 20) {
                    $errors[$type] =
                        "User name must be between minimum 6 and maximum 20 character.";
                    return null;
                } else {
                    return $data;
                }
            case "mail":
                if (!filter_var($data, FILTER_VALIDATE_EMAIL)) {
                    $errors[$type] = "This field must be a valid mail";
                    return null;
                } else {
                    return $data;
                }
            case "pass":
                return $data;
            case "cnfrm_pass":
                if (
                    $_POST["pass"] &&
                    $data &&
                    strcmp($_POST["pass"], $data) != 0
                ) {
                    $errors[$type] =
                        "This field must be a match with Password Field";
                    return null;
                } else {
                    return $data;
                }
            case "cv_link":
                if (!filter_var($data, FILTER_VALIDATE_URL)) {
                    $errors[$type] = "This field must be a valid url";
                    return null;
                } else {
                    return $data;
                }
            default:
                return "Give Field is not valid";
        }
    }
    $name = handleData("eName", "validateData");
    $mail = handleData("mail", "validateData");
    $pass = handleData("pass", "validateData");
    $cnfrm_pass = handleData("cnfrm_pass", "validateData");
    $cv_link = handleData("cv_link", "validateData");
    echo "<pre>";
    var_dump($name, $mail, $pass, $cnfrm_pass, $cv_link);
    echo "</pre>";
}
?>
<div class="register">
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])?>" method="POST" class="d-flex flex-column align-items-start">
        <div class="form-group">
            <label for="u_name" class="form-label">Name</label>
            <input type="text" name="eName" id="u_name" class="form-control <?= isset(
                $errors["eName"]
            )
                ? "is-invalid"
                : "" ?>" value="<?= isset($name) ? $name : "" ?>">
            <div class="invalid-feedback">
                <?= $errors["eName"] ?>
            </div>
        </div>
        <div class="form-group">
            <label for="mail_id" class="form-label">Email</label>
            <input type="email" name="mail" id="mail_id" class="form-control <?= isset(
                $errors["mail"]
            )
                ? "is-invalid"
                : "" ?>" value="<?= isset($mail) ? $mail : "" ?>">
            <div class="invalid-feedback">
                <?= $errors["mail"] ?>
            </div>
        </div>
        <div class="form-group">
            <label for="pswrd" class="form-label">Password</label>
            <input type="password" name="pass" id="pswrd" class="form-control <?= isset(
                $errors["pass"]
            )
                ? "is-invalid"
                : "" ?>" value="<?= isset($pass) ? $pass : "" ?>">
            <div class="invalid-feedback">
                <?= $errors["pass"] ?>
            </div>
        </div>
        <div class="form-group">
            <label for="cnfrm_pswrd" class="form-label">Confirm Password</label>
            <input type="password" name="cnfrm_pass" id="cnfrm_pswrd" class="form-control <?= isset(
                $errors["cnfrm_pass"]
            )
                ? "is-invalid"
                : "" ?>" value="<?= isset($cnfrm_pass) ? $cnfrm_pass : "" ?>">
            <div class="invalid-feedback">
                <?= $errors["cnfrm_pass"] ?>
            </div>
        </div>
        <div class="form-group">
            <label for="" class="form-label">Cv Link</label>
            <input type="text" name="cv_link" id="url__link" class="form-control <?= isset(
                $errors["cv_link"]
            )
                ? "is-invalid"
                : "" ?>" value="<?= isset($cv_link) ? $cv_link : "" ?>">
            <div class="invalid-feedback">
                <?= $errors["cv_link"] ?>
            </div>
        </div>
        <button class="btn btn-primary mt-3">Submit</button>
    </form>
</div>
<?php require_once "../view/ex_footer.php"; ?>
