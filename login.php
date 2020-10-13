<?php 
include("confi.php");
if (isset($_POST['submit'])) {
    $use =  $_POST['username'];
    $passs =  $_POST['password'];
    $sql = "SELECT * FROM user";
    $output = mysqli_query($conn, $sql);
    if (mysqli_num_rows($output) > 0) {
        while ($row = mysqli_fetch_assoc($output)) {
    
            if ($use == $row["user_name"] && $passs == $row['password']) {
                 session_start();
                $_SESSION['username'] = $row["user_name"];
                 $_SESSION['password'] = $row["password"];
                header('location:hello.php');
            } 
        }
    }
}
mysqli_close($conn);
?>
<!DOCTYPE html>
<html>

<head>
    <title>
        Login
    </title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="wrapper">
        <div id="login-form">
            <h2>Login</h2>
            <form action="log.php" method="POST">
                <p>
                    <label for="username">Username: <input type="text" name="username" required></label>
                </p>
                <p>
                    <label for="password">Password: <input type="text" name="password" required></label>
                </p>
                <p>
                    <input type="submit" name="submit" value="Submit">
                </p>
              
            </form>
        </div>
    </div>
</body>

</html>
log.php