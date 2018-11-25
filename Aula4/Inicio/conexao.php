<?php

$servername = "localhost";
$username = "root";
$password = "123";
$database = "login";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";


//$query = "select usuario_id, usuario from usuario where usuario = '{$email}' and senha = md5('{$senha}')";
$sql = "SELECT usuario_id, usuario FROM usuario";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        echo "<br>" . "id: " . $row["usuario_id"]. " - Name: " . $row["usuario"];
    }
} else {
    echo "0 results";
}

mysqli_close($conn);
