<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $event_date = $_POST['event_date'];
    $message = $_POST['message'];

    $sql = "INSERT INTO enquiries (name, email, phone, event_date, message) VALUES ('$name', '$email', '$phone', '$event_date', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Enquiry submitted successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>