<?php
include 'auth.php'; 
include 'data.php';
if (!isAdmin()) {
    header('Location: inschrijvingen.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM inschrijvingen WHERE id = $id";
    $conn->query($sql);
}

header('Location: inschrijvingen.php');
exit();
?>
