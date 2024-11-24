Submit.php
<?php 
include('db.php');

$con =  indexhtml();

if ($con) {
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $name = mysqli_real_escape_string($con, $_POST['name']);
        $address = mysqli_real_escape_string($con, $_POST['address']);

        // Insert data without specifying the id
        $sql = "INSERT INTO info (name, address) VALUES ('$name', '$address')";

        if (mysqli_query($con, $sql)) {
            echo "Record inserted successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }

        mysqli_close($con);
    }
} else {
    echo "Error connecting to the database.";
}
?>
