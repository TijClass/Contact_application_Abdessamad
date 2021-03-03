<?php


include "./core/init.php";

if (isset($_POST['submit'])) {
    $firstName = strip_tags($_POST['firstname']);
    $lastName = strip_tags($_POST['lastname']);
    $email = strip_tags($_POST['email']);
    $group = strip_tags($_POST['group']);
    $address = strip_tags($_POST['address']);
    $phone = strip_tags($_POST['phone']);
    $notes = strip_tags($_POST['notes']);
    $dateTimeVariable = date("Y-m-d H:i:s"); 

    $sql = "INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `email`, `phone`, `address1`, `group`, `notes`, `date_added`) VALUES (null, '$firstName', '$lastName', '$email', '$phone', '$address', '$group', '$notes', '$dateTimeVariable')";

    if (mysqli_query($conn, $sql)) {
        header("Location: index.php?success=Information was submitted successfully!");
        exit();
    } else {
        header("Location: index.php?error=Error occurred while submitting your information. Please try again");
        exit();
    }

    mysqli_close($conn);
}
