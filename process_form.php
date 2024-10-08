<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $first_name = htmlspecialchars($_POST['first_name']);
    $last_name = htmlspecialchars($_POST['last_name']);
    $age = htmlspecialchars($_POST['age']);
    $contact = htmlspecialchars($_POST['contact']);
    $address = htmlspecialchars($_POST['address']);

    echo "<h2>Submitted Successfully</h2>";
    echo "First Name: " . $first_name . "<br>";
    echo "Last Name: " . $last_name . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Contact: " . $contact . "<br>";
    echo "Address: " . $address . "<br>";
} ?>

