<?php

require_once ('../conn/initialize.php');

$Omschrijving = $_POST['Omschrijving'];

$ID = $_GET['ID'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

          $sql = "UPDATE ticket
        SET Omschrijving='$Omschrijving' WHERE ID= $ID";
    
    // Prepare statement
    $stmt = $conn->prepare($sql);

    // execute the query
    $stmt->execute();

    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
header("Location: ../../public/");
?>
