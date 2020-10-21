<?php require_once ('../conn/initialize.php');?>

<?php  
    $ID = $_GET["ID"];
    $query1 = "SELECT * FROM ticket WHERE ID ='" . $ID . "'"; 

$result = $conn->query($query1);
$row = $result->fetch();
    $ID = $row['ID'];
    $Date = $row['Date'];
    $Customer_id = $row['Customer_id'];
    $Omschrijving= $row['Omschrijving'];
    ?>