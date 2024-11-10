<?php
include 'auth.php'; 
include 'data.php';

if (!isAdmin()) {
    header('Location: inschrijvingen.php');
    exit();
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM inschrijvingen WHERE id = $id";
    $result = $conn->query($sql);
    $registration = $result->fetch_assoc();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $event = $_POST['event'];

    $sql = "UPDATE inschrijvingen SET name = '$name', email = '$email', event = '$event' WHERE id = $id";
    $conn->query($sql);
    header('Location: inschrijvingen.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Bewerk Inschrijving</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Bewerk Inschrijving</h1>
    <form method="POST">
        <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" class="form-control" value="<?php echo $inschrijvingen['name']; ?>" required>
        </div>
        <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" class="form-control" value="<?php echo $inschrijvingen['email']; ?>" required>
        </div>
        <div class="form-group">
            <label for="event">Event</label>
            <input type="text" id="event" name="event" class="form-control" value="<?php echo $inschrijvingen['event']; ?>" required>
        </div>
        <button type="submit" class="btn btn-primary">Opslaan</button>
        <a href="inschrijvingen.php" class="btn btn-secondary">Annuleren</a>
    </form>
</div>
</body>
</html>
