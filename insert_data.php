<?php

include 'db_config.php';

try {
    if (!$_POST) {
        die('Netinkamas metodas');
    }

    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // prepare sql and bind parameters
    $stmt = $conn->prepare(
        "INSERT INTO MyGuests (firstname, lastname, email)
  VALUES (:firstname, :lastname, :email)"
    );
    $stmt->bindParam(':firstname', $firstname);
    $stmt->bindParam(':lastname', $lastname);
    $stmt->bindParam(':email', $email);

    // insert another row
    $firstname = $_POST['vardas'];
    $lastname = $_POST['pavarde'];
    $email = $_POST['elpastas'];
    $stmt->execute();

    echo "New records created successfully";
} catch (PDOException $e) {
    echo "Error: ".$e->getMessage();
}
