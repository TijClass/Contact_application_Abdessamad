<?php
session_start();
include "./core/init.php";

if (isset($_POST['login_email']) && isset($_POST['login_password'])) {
    
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
    $login_email = validate(($_POST['login_email']));
    $login_password = validate(($_POST['login_password']));

    if (empty($login_email)) {
        header("Location: https://b3ns44dhost.local/starter_files/components/loginPage.php?error=User Name is required");
        exit();
    } else if (empty($login_password)) {
        header("Location: https://b3ns44dhost.local/starter_files/components/loginPage.php?error=Password is required");
        exit();
    } else {
        $sql = "SELECT * FROM users WHERE email='$login_email' AND password='password'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['login_email'] === $login_email & $row['password'] === $login_password) {
                $_SESSION['login_username'] === $row['login_email'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: contact.php");
                exit();
            } else {
                header("Location: https://b3ns44dhost.local/starter_files/components/loginPage.php?error=Incorect User name or password");
                exit();
            }
        } else {
            header("Location: https://b3ns44dhost.local/starter_files/components/loginPage.php?error=Incorect User name or password");
            exit();
        }
    }
} else {
    header("Location: https://b3ns44dhost.local/starter_files/components/loginPage.php");
    exit();
}
