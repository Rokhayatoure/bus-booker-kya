<<?php
// On démarre les sessions
session_start();

try {
    $db = new PDO("mysql:host=localhost:3306;dbname=darar_dd;charset=utf8", "root", "");
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
} catch (Exception $e) {
    die("Error: " . $e->getMessage());
}
