<?php
include '../core/init.php';
// $result = mysqli_query($conn, "SELECT * FROM `contacts`");

// if (mysqli_num_rows($result) > 0 ){
//     $i = 0;
//     while ( $row = mysqli_fetch_array($result)) {
//         echo $row['email'];
//     }
// } else {
//     echo 'No result found';
// }

echo 'Helllo';

$sql = "SELECT * FROM `contacts`";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "id: " . $row["id"] . " - Name: " . $row["first_name"] . " " . $row["last_name"] . "<br>";
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
?>