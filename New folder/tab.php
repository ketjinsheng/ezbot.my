// sql to create table
$sql =   "CREATE TABLE EZ (
     id INT NOT NULL PRIMARY KEY AUTO_INCREMENT,
     username VARCHAR(50) NOT NULL UNIQUE,
     password VARCHAR(255) NOT NULL,
     created_at DATETIME DEFAULT CURRENT_TIMESTAMP
)";


    if ($conn->query($sql) === TRUE) {
        echo "Table EZ created successfully";
    } else {
        echo "Error creating table: " . $conn->error;
    }
    
    $conn->close();
    ?>