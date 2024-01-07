<?php
session_start();
include "login_db.php";


if(isset($_POST['email']) && isset($_POST['password'])) {

    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return data;
    }
}

$email = validate($_POST['email']);
$pass = validate($_POST['password']);

if(empty($email)) {
    header ("Location: index.php?erro=User Name os required");
    exit();
}
else if(empty($pass)) {
    header ("Location: index.php?erro=User Name os required");
    exit();
}

$sql = "SELECT * FROM email WHERE email='$email' AND password='$pass'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1) {
    $row = mysqli_fetch_assoc($result);
    if($row['email'] === $uname && $row['password'] === $pass) {
        echo "Logged in!";
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['id'] = $row['id'];
        header("Location: home.php");
        exit();
    }
    else{
        header("Location: index.php?error=Incorrect Email or Password");
        exit();
    }
}
else {
    header("Location: /msproj/home(cutomer)/index.php");
    exit();    
}