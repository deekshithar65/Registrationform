<?php
session_start();

// Fetch all registrations from the session
$registrations = isset($_SESSION['registrations']) ? $_SESSION['registrations'] : [];
$totalRegistrations = count($registrations);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Success</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h1>Form Submission Successful!</h1>
        <h2>Details of the Current Registration:</h2>
        <p><strong>Name:</strong> <?= htmlspecialchars(end($registrations)['name']) ?></p>
        <p><strong>Email:</strong> <?= htmlspecialchars(end($registrations)['email']) ?></p>
        <p><strong>Phone:</strong> <?= htmlspecialchars(end($registrations)['phone']) ?></p>
        <p><strong>Gender:</strong> <?= htmlspecialchars(end($registrations)['gender']) ?></p>
        <p><strong>Message:</strong> <?= htmlspecialchars(end($registrations)['message']) ?></p>

        <h2>Total Registrations: <?= $totalRegistrations ?></h2>

        <h3>All Registrations:</h3>
        <ul>
            <?php foreach ($registrations as $index => $registration): ?>
                <li>
                    <?= $index + 1 ?>. <?= htmlspecialchars($registration['name']) ?> (<?= htmlspecialchars($registration['email']) ?>)
                </li>
            <?php endforeach; ?>
        </ul>
        <a href="index.html">Back to Form</a>
    </div>
</body>
</html>
