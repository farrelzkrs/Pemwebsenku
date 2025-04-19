<?php
session_start();
require_once 'db_connect.php';
require_once 'db_functions.php';

$error_message = '';
$show_register_link = false;

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['login'])) {
    $username_email = trim($_POST['username_email']);
    $password = trim($_POST['password']);

    $user = findUserByUsernameOrEmail($conn, $username_email);

    if ($user) {
        if (password_verify($password, $user['password_hash'])) {
            $_SESSION['user_logged_in'] = true;
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            mysqli_close($conn);
            header("Location: index.php");
            exit;
        } else {
            $error_message = "Username/Email atau Password salah.";
        }
    } else {
        $error_message = "Username/Email atau Password salah.";
        $show_register_link = true;
    }
}

$register_success_message = '';
if (isset($_SESSION['register_success'])) {
    $register_success_message = $_SESSION['register_success'];
    unset($_SESSION['register_success']);
}

if (isset($conn)) {
     mysqli_close($conn);
}
?>
<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Login - Senku Coffee</title>
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .login-container {
            max-width: 400px;
            width: 100%;
        }

        .card {
            border: none;
            border-radius: 0.75rem;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: burlywood;
            color: rgb(0, 100, 0);
            font-weight: bold;
            text-align: center;
            border-bottom: none;
            border-top-left-radius: 0.75rem;
            border-top-right-radius: 0.75rem;
            padding: 1.25rem;
        }

        .btn-submit {
            background-color: rgb(0, 100, 0);
            border-color: rgb(0, 100, 0);
            color: white;
        }

        .btn-submit:hover {
            background-color: darkgreen;
            border-color: darkgreen;
        }
    </style>
</head>

<body>
    <div class="login-container">
        <div class="card">
            <div class="card-header">
                <h4>Login Senku Coffee</h4>
            </div>
            <div class="card-body p-4">

                <?php if ($register_success_message): ?>
                <div class="alert alert-success" role="alert">
                    <?php echo htmlspecialchars($register_success_message); ?>
                </div>
                <?php endif; ?>

                <?php if ($error_message): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo htmlspecialchars($error_message); ?>
                    <?php if ($show_register_link): ?>
                    <br> Belum punya akun? <a href="daftar.php">Daftar di sini</a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>

                <form action="login.php" method="post">
                    <div class="mb-3">
                        <label for="username_email" class="form-label">Username atau Email</label>
                        <input type="text" class="form-control" id="username_email" name="username_email" required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="login" class="btn btn-submit">Masuk</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <?php if (!$show_register_link && !$register_success_message): ?>
                    <p>Belum punya akun? <a href="daftar.php">Daftar di sini</a></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>