<?php

$servername = "localhost";
$username = "root";
$password = "123";
$db = 'ka_norim';

// Prisijungiam prie serverio
$conn = mysqli_connect($servername, $username, $password, $db);

// Patikrinam prisijungimą
if (!$conn) {
   die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


$sql = "CREATE TABLE IF NOT EXISTS MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP
    )";
   
    if (mysqli_query($conn, $sql)) {
        echo "Table MyGuests created successfully";
    } else {
        echo "Error creating table: " . mysqli_error($conn);
    }

 
$sql = "INSERT INTO MyGuests (firstname, lastname, email)
VALUES ('John', 'Doe', 'john@example.com')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
   

$sql = "SELECT id, firstname, lastname FROM MyGuests WHERE id > 20";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
   // kiekvieną eilutę atskirai
   while($row = mysqli_fetch_assoc($result)) {
       echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
   }
} else {
   echo "0 results";
}

$sql = "DELETE FROM MyGuests WHERE id < 11 OR id = 15";

if (mysqli_query($conn, $sql)) {
   echo "Record deleted successfully";
} else {
   echo "Error deleting record: " . mysqli_error($conn);
}

$sql = "UPDATE MyGuests SET lastname='Kaminskytyte' WHERE id > 0";

if (mysqli_query($conn, $sql)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
