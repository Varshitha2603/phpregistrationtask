<?php
    session_start();
    if (isset($_SESSION['user_id'])){
        $mysqli = require __DIR__ . "/database.php";
        $sql = "SELECT * FROM registre WHERE Slno = {$_SESSION['user_id']}";
        $result = $mysqli->query($sql);
        $user = $result->fetch_assoc();
    }
?>

<html>
<head>
    <title>Course</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <?php if (isset($user)): ?>
        <?= htmlspecialchars($user['fname']) ?>
        <?php require "./nav.php"; ?>
    <?php else: ?>
        <a href="nav.partials.php">Register</a>
    <?php endif; ?>
</body>
</html>
