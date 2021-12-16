<?php

// Visuomet pirma startuojam sesija
session_start();

if (
    $_POST['username'] === 'admin'
    &&
    $_POST['password'] === 'pass123'
) {
    $_SESSION['arPrisijunges'] = true;
    header("Location: http://localhost:8008/admin");
}