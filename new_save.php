<?php
// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=36qtfil', 'root', '');

// Save the questions
foreach ($_POST as $key => $value) {
    $sql = "INSERT INTO questions (QUESTIONS) VALUES ('$value')";
    $db->query($sql);
}

// Redirect to the main page
header('Location: new_view.php');

?>
