<?php
include 'auth.php'; 
include 'data.php';
$sql = "SELECT * FROM inschrijvingen";
$result = $conn->query($sql);

?>
<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Inschrijvingen</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Inschrijvingen</h1>
    <table class="table table-striped">
        <thead>
        <tr>
            <th>ID</th>
            <th>Naam</th>
            <th>Email</th>
            <th>Event</th>
            <?php if (isAdmin()) { ?>
                <th>Acties</th>
            <?php } ?>
        </tr>
        </thead>
        <tbody>
        <?php while ($row = $result->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['event']; ?></td>
                <?php if (isAdmin()) { ?>
                    <td>
                        <a href="bewerk_inschrijvingen.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-sm">Bewerken</a>
                        <a href="verwijder_inschrijvingen.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-sm">Verwijderen</a>
                    </td>
                <?php } ?>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
</body>
</html>
