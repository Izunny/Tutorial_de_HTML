<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = htmlspecialchars($_POST["fname"]);
    $lname = htmlspecialchars($_POST["lname"]);

    echo "<h2>Submitted Form Data</h2>";
    echo "Nombre: " . $fname . "<br>";
    echo "Apellido: " . $lname;
}
?>
