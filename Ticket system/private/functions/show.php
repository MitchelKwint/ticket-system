<?php

$sql = "SELECT * FROM ticket" ;

$result = $conn->query($sql);

    echo "<table><tr><th>Delete</th><th>Edit</th><th>ID</th><th>Date</th><th>Customer id</th></tr>";

    while($row = $result->fetch()) {
        echo "<tr><td>"
        .'<a  href="../private/functions/delete.php?ID='.$row["ID"].'"><img src="../public/images/delete.png"" alt="delete" /></a>'.
        "</td><td>"
        .'<a  href="../private/form/edit.php?ID='.$row["ID"].'"><img src="../public/images/edit.png"" alt="edit" /></a>'.
        "</td><td>"
        .$row["ID"].
        "</td><td>"
        .$row["Date"].
        "</td><td>"
        .$row["Customer_id"].
        "</td></tr>";
    }
    echo "</table>";

//$conn = null;
?>
