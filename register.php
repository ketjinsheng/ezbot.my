<?php

$con = mysqli_connect("localhost","kk","kk211299","jedb");

if (mysqli_connect_errno($con))
    {
        echo "Failed to connect to mysql" . mysqli_connect_error();
    }
        echo '<table border = 1>';
        echo '<tr>';
            echo ' <th>id</th>';
            echo '<th>username</th>';
            echo ' <th>password</th>';
        echo ' </tr>';
    $result = mysqli_query($con,"SELECT * FROM EZ");
    while($row=mysqli_fetch_array($result))
    {
        echo "<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['username'] . "</td>";
        echo "<td>" . $row['password'] . "</td>";
        echo "</tr>";
    }
    mysqli_close($con);
    echo '</table>';
?>