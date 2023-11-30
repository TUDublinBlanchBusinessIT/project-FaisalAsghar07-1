<?php
date_default_timezone_set('Europe/Dublin');
include("dbcon.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Collect form data
    $name = $_POST['surName'];
    $fname = $_POST['foreName'];
    $contact = $_POST['contact'];

   
    $sql = "INSERT INTO contacts (surname, forename, contact) VALUES ('$name', '$fname', '$contact')";
    
    
    echo "Data received: Surname - $name, Forename - $fname, Contact - $contact";
} else {
    echo "No data received"; 
}
?>
