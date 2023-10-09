<?php
// Connect to the database
$db = new PDO('mysql:host=localhost;dbname=36qtfil', 'root', '');

// Get the questions
$sql = "SELECT * FROM questions";
$results = $db->query($sql);

// Display the questions
foreach ($results as $row) {
    echo '<p>' . $row['QUESTIONS'] . '</p>';
}
?>
