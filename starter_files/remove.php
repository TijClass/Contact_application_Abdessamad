<?php
require('./core/init.php');

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $sql = "DELETE FROM contacts WHERE id=$id";
    if (mysqli_query($conn, $sql)) {
        echo true;
    } else {
        echo "Error occurred while deleting your information. Please try again " . $sql . "<br>" . mysqli_error($conn);
    }
}
