<?php

$sql = "SELECT * FROM fixed_ticket" ;

$result = $conn->query($sql);

    echo "<table><tr><th>ID</th><th>Date</th><th>Customer id</th><th>Status</th></tr>";

    while($row = $result->fetch()) {
        echo "<tr><td>"
        .$row["ID"].
        "</td><td>"
        .$row["Date"].
        "</td><td>"
        .$row["Customer_id"].
        "</td><td>"
        .'<div id="fixedtickets">Fixed</div>'.
        "</td></tr>";
    }
    echo "</table>";

$conn = null;
?>
