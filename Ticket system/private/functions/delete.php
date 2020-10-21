<?php require_once('../conn/db_credentials.php'); ?>

<?php

$id = $_GET['ID'];

try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "DELETE FROM `ticket` 
    WHERE id = $id" ;


    $conn->exec($sql);
    echo "Record deleted successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;

header("Location: ../../public/");
//exit;