<?php
    $is_invalid = false;
    if ($_SERVER["REQUEST_METHOD"] === "POST"){
        $mysqli = require  __DIR__ . "/database.php";
        $sql = sprintf("SELECT * FROM registre WHERE email = '%s'", $mysqli->real_escape_string($_POST['email']));
        $result = $mysqli->query($sql);
        $user = $result->fetch_assoc();
        if ($user){
            if (password_verify($_POST['password'], $user['password_hash'])){
                sssion_start();
                session_regenerate_id();
                $session["user_id"] = $user["Slno"];
                header("Location: home.partials.php");
                exit;
            }
        }
        $is_invalid = true;
    }
?>

<html>
<head>
    <title>Login</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <div class="login">
        <h1>Log in</h1>
        <?php if ($is_invalid): ?>
            <em>Invalid Login</em>
        <?php endif; ?>
        <form method="post" id="login_form">
            <label for="email">Email Address</label>
            <input type="email" name="email" id="email" class="moving" value="<?= htmlspecialchars($_POST['email'] ?? "") ?>" placeholder="Enter a Email ID">

            <label for="password">Password</label>
            <input type="password" name="password" id="password" class="moving" placeholder="Enter a Password">

            <button>Log In</button>
        </form>
    </div>
</body>
</html>