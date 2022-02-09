<?php
    require('DBconnection.php');
    echo '<h1>DashBoard</h1>';
    echo '<br><br>';

    echo '<a href="formInsert.html">Add Task</a>';
    echo '<a href="formUpdate.html">Edit Task</a>';
    echo '<a href="formDelete.html">Delete Task</a>';

    $results = $conn->query("SELECT * FROM PROJECTS ORDER BY Id ASC");

    echo "<table border=1>";

    echo '<tr>';
    echo ' <td> <b> ID <b> </td>';
    echo ' <td> <b> NAME <b> </td>';
    echo ' <td> <b> START <b> </td>';
    echo ' <td> <b> STATUS <b> </td>';
    echo ' <td> <b> DEADLINE <b> </td>';
    echo '</tr>';

    while($row = $results->fetch_assoc()) {
        echo '<tr>';
        echo ' <td>'.$row["Id"].'</td>';
        echo ' <td>'.$row["Name"].'</td>';
        echo ' <td>'.$row["Inicio"].'</td>';
        echo ' <td>'.$row["Status"].'</td>';
        echo ' <td>'.$row["EndTime"].'</td>';
    }

    echo '</table>';

    $results->free();
    $conn->close();
    
?>