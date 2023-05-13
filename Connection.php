
<?php

$conn = "";

try {
    $servername = "localhost:8111";
    $dbname = "srms";
    $username = "root";
    $password = "";

    $conn = new PDO(
        "mysql:host=$servername; dbname=srms",
        $username, $password
    );

   $conn->setAttribute(PDO::ATTR_ERRMODE,
                    PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

?>
