<?php

$pattern = "";
$name = "aaaaa";
$replaceText = "";
$replacedText = "";
$error_name = false;
$email = "";
$error_email = false;
$match = "Not checked yet.";
$password = "";
$error_password = false;
$username = "";
$error_username = false;
$confirm_password = "";
$error_confirm_password = false;
$date_of_birth = "";
$error_data_of_birth = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST['password'];
    $username = $_POST['username'];
    $confirm_password = $_POST['password_2'];
    $date_of_birth = $_POST['birth'];
    if (empty($name)) {
        $error_name = true;
    } else {
        $error_name = !preg_match('/[a-zA-z]{3,}/', $name);
    }
    if (empty($email)) {
        $error_email = true;
    } else {
        $error_email = !preg_match('/^[a-zA-z]@\w\.[a-z]{1,3}$/', $email);
    }
    if (empty($password)) {
        $error_password = true;
    }
    else {
        $error_password = preg_match('/\A(?=\w{6,10}\z)(?=[^a-z]*[a-z])(?=(?:[^A-Z]*[A-Z]){3})(?=\D*\d).*/',$password);
    }
    if (empty($confirm_password)) {
        $error_confirm_password = true;
    }
    else {
        $error_confirm_password = $password == $confirm_password;
    }
    if (empty($username)){
        $username = true;
    }
    else {
        $error_username = preg_match('/^\w{5,}$/',$username);
    }
    if (empty($date_of_birth)){
        $error_data_of_birth = true;
    }
    else {
        $error_data_of_birth = preg_match('/^[1-31]{2}\.[1-12]{2}\.\d{4}$/',$date_of_birth);
    }
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN" "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>Validating Forms</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
          integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu" crossorigin="anonymous">

    <!-- Optional theme -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap-theme.min.css"
          integrity="sha384-6pzBo3FDv/PJ8r2KRkGHifhEocL+1X2rVCTTkUfGk7/0pbek5mMa1upzvWbrUbOZ" crossorigin="anonymous">

    <!-- Latest compiled and minified JavaScript -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
            integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
            crossorigin="anonymous"></script>

</head>

<body>
<h1>Registration Form</h1>

<p>
    This form validates user input and then displays "Thank You" page.<?php echo $name ?>
</p>

<hr/>

<h2>Please, fill below fields correctly</h2>
<form action="index.php" method="post">
    <dl>

        <dt>Name</dt>
        <dd><input type="text" class="form-control " name="name" value="<?= $name ?>">
            <div class="invalid-feedback text-danger" style=<?= $error_name ? "" : "display:none" ?>>
                Please provide a valid name.
            </div>
        </dd>

        <dt>Email</dt>
        <d
        <dd><input type="text" class="form-control " name="email" value="<?= $email ?>">
            <div class="invalid-feedback text-danger" style=<?= $error_email ? "" : "display:none" ?>>
                Please provide a valid email.
            </div>
        </dd>

        <dt>Username</dt>
        <dd><input type="text" class="form-control " name="username" value="<?= $username ?>">
            <div class="invalid-feedback text-danger"style=<?= $error_username ? "" : "display:none" ?>>
                Please provide a valid city.
            </div>
        </dd>

        <dt>Password</dt>
        <dd><input type="text" class="form-control " name="password" value="<?= $password ?>">
                <div class="invalid-feedback text-danger" style=<?= $error_password ? "" : "display:none" ?>>
                Please provide a valid password.
            </div>
        </dd>

        <dt>Confirm Password</dt>
        <dd><input type="text" class="form-control " name="password_2" value="<?= $confirm_password ?>">
            <div class="invalid-feedback text-danger" style=<?= $error_confirm_password ? "" : "display:none" ?>>
                Passwords don`t matches
            </div>
        </dd>

        <dt>Date of Birth</dt>
        <dd><input type="text" class="form-control " name="birth" value="<?= $date_of_birth ?>">
            <div class="invalid-feedback text-danger" style=<?= $error_data_of_birth ? "" : "display:none" ?>>
                Please provide a valid date of birth.
            </div>
        </dd>

        <dt>Gender</dt>
        <dd><input type="text" class="form-control " name="gender" value="<?= $name ?>">
            <div class="invalid-feedback text-danger" style="display: none">
                Please provide a valid city.
            </div>
        </dd>
        <dt>Marital Status</dt>
        <dd><input type="text" class="form-control " name="status" value="<?= $name ?>">
            <div class="invalid-feedback text-danger" style="display: none">
                Please provide a valid city.
            </div>
        </dd>
        <dt>Address</dt>
        <dd><input type="text" class="form-control " name="address" value="<?= $name ?>">
            <div class="invalid-feedback text-danger" style="display: none">
                Please provide a valid city.
            </div>
        </dd>
        <dt>City</dt>
        <dd><input type="text" class="form-control " name="city" value="<?= $name ?>">
            <div class="invalid-feedback text-danger" style="display: none">
                Please provide a valid city.
            </div>
        </dd>
        <dt>Postal Code</dt>
        <dd><input type="text" class="form-control " name="code" value="<?= $name ?>">
            <div class="invalid-feedback text-danger" style="display: none">
                Please provide a valid city.
            </div>
        </dd>
        <dt>Home Phone</dt>
        <dd><input type="text" class="form-control " name="phone" value="<?= $name ?>">
            <div class="invalid-feedback text-danger" style="display: none">
                Please provide a valid city.
            </div>
        </dd>

        <dt>Credit Card Number</dt>
        <dd><input type="text" class="form-control " name="card" value="<?= $name ?>">
            <div class="invalid-feedback text-danger" style="display: none">
                Please provide a valid city.
            </div>
        </dd>
        <dt>Credit Card Expiry Date</dt>
        <dd><input type="text" class="form-control " name="expiry card" value="<?= $name ?>">
            <div class="invalid-feedback text-danger" style="display: none">
                Please provide a valid city.
            </div>
        </dd>
        <dt>Monthly Salary</dt>
        <dd><input type="text" class="form-control " name="salary" value="<?= $name ?>">
            <div class="invalid-feedback text-danger" style="display: none">
                Please provide a valid city.
            </div>
        </dd>
        <dt>Web Site URL</dt>
        <dd><input type="text" class="form-control " name="web_site" value="<?= $name ?>">
            <div class="invalid-feedback text-danger" style="display: none">
                Please provide a valid city.
            </div>
        </dd>

        <dt>Overall GPA</dt>
        <dd><input type="text" class="form-control " name="gpa" value="<?= $name ?>">
            <div class="invalid-feedback text-danger" style="display: none">
                Please provide a valid city.
            </div>
        </dd>


        <dt>Replaced Text</dt>
        <dd><code><?= $replacedText ?></code></dd>

        <dt>&nbsp;</dt>
        <dd><input type="submit" value="Check"></dd>
    </dl>
</form>
<div>
    Register
</div>
</body>
</html>