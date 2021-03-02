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
        // echo "<div style='color:#73AD21;text-align:center; padding: 7px'> Information was submitted successfully!</div>";
    } else {
        header("Location: index.php?error=Error occured while submitting your information. Please try again");
        exit();
        // echo "<div style='color:red;text-align:center;padding: 7x'>Error occured while submitting your information. Please try again</div>" . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
}
