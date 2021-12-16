<?php
// Šią kodo dalį talpiname kiekviename puslapyje kurį norime apsaugoti

// Visuomet pirma startuojam sesija
session_start();

if (isset($_SESSION['arPrisijunges'])) {
    echo "Matote slaptus duomenis : :)";
    echo '<a href="/logout.php">Atsijungti</a>';
} else {
    // Nukreipia lankytoją į prisijungimo skriptą
    header("Location: http://localhost:8008/loginForm.php");
}