<?php

include '../db_config.php';

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM MyGuests";

    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->setFetchMode(PDO::FETCH_OBJ);


    echo '<table>';
    foreach ($stmt->fetchAll() as $guest) {
        echo "<tr>
                <td>$guest->firstname</td>
                <td>$guest->lastname</td>
                <td>$guest->email</td>
                <td>$guest->reg_date</td>
                <td>
                    [<a href='view.php?id=$guest->id'>view</a>]
                    [<a href='edit.php?id=$guest->id'>edit</a>]
                    [<a href='delete.php?id=$guest->id'>delete</a>]
                </td>
            </tr>";
    }
    echo '</table>';
} catch (PDOException $e) {
    echo "Error: ".$e->getMessage();
}
