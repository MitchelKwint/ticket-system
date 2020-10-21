<?php require_once ('../conn/initialize.php');?>

<?php

$Date = filter_input(INPUT_POST, 'Date');
$Customer_id = filter_input(INPUT_POST, 'Customer_id');
$Omschrijving = filter_input(INPUT_POST, 'Omschrijving');


try {
    $conn = new PDO("mysql:host=$servername;dbname=$database", $username, $password);

    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "INSERT INTO ticket (Date, Customer_id, Omschrijving)
    VALUES ('$Date','$Customer_id','$Omschrijving')";
    //WHERE EXISTS (SELECT FROM ticket WHERE  Customer_id='$Customer_id')";

    $conn->exec($sql);
    echo "New record created successfully";
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
header("Location: ../../public/");
?>