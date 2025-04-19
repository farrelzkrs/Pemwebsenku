<?php
session_start();
require_once 'db_connect.php';
require_once 'db_functions.php';

$error_message = '';
$success_message = '';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['register'])) {
    $username = trim($_POST['username']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);

    $registration_result = registerUser($conn, $username, $email, $password);

    if ($registration_result === true) {
        $_SESSION['register_success'] = "Pendaftaran berhasil! Silakan login.";
        mysqli_close($conn);
        header("Location: login.php");
        exit;
    } else {
        $error_message = $registration_result;
    }
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
    <title>Daftar - Senku Coffee</title>
    <style>
        body {
            background-color: #f8f9fa;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .register-container {
            max-width: 450px;
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
    <div class="register-container">
        <div class="card">
            <div class="card-header">
                <h4>Daftar Akun Baru</h4>
            </div>
            <div class="card-body p-4">
                <?php if ($error_message): ?>
                <div class="alert alert-danger" role="alert">
                    <?php echo htmlspecialchars($error_message); ?>
                </div>
                <?php endif; ?>
                <form action="daftar.php" method="post">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" class="form-control" id="username" name="username"
                            value="<?php echo isset($_POST['username']) ? htmlspecialchars($_POST['username']) : ''; ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email"
                            value="<?php echo isset($_POST['email']) ? htmlspecialchars($_POST['email']) : ''; ?>"
                            required>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password" name="password" required>
                        <div id="passwordHelpBlock" class="form-text">
                            Password minimal harus 6 karakter.
                        </div>
                    </div>
                    <div class="d-grid">
                        <button type="submit" name="register" class="btn btn-submit">Daftar</button>
                    </div>
                </form>
                <div class="text-center mt-3">
                    <p>Sudah punya akun? <a href="login.php">Login di sini</a></p>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>