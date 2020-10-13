<?php
include("confi.php");
$message = "";
$errors = array();

if (isset($_POST["submit"])) {
    $username = isset($_POST["username"]) ? $_POST["username"] : "";
    $password = isset($_POST["password"]) ? $_POST["password"] : "";
    $repassword = isset($_POST["repassword"]) ? $_POST["repassword"] : "";
    $email = isset($_POST["email"]) ? $_POST["email"] : "";

    if ($password == $repassword) {
        $errors = array("input" => "password", "msg" => "password dosnt match");
    }
    $sql = "INSERT INTO user 
VALUES ('" . $username . "', '" . $password . "', '" . $email . "')";

    if ($conn->query($sql) === true) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

     <html>
        <head>
            <title>PHP</title>
            <link type="text/css" rel="stylesheet" href="signup.css">
        </head>

        <body>
            <div id="message"><?php echo $message; ?></div>
            <h1>Register</h1>
            <form id="signup" action="signup.php" method="post" enctype="multipart/form.data">
                <label for="username">Username<input type="text" name="username">
                <label for="password">password<input type="password" name="password">
                <label for="repassword">Re-Username<input type="password" name="repassword">
                <label for="email">Email<input type="text" name="email">
                <p><input type="submit" name="submit" value="submit"></p>
</form>
<div>
    <h1>Already have an account</h1>
</div>
<div class="dropdown">
    <a href="log.php">Direct Login</a>
</div>
</body>
</html>
