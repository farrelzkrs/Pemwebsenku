<?php

/**
 * @param mysqli $conn
 * @param string $username_email
 * @return array|false
 */
function findUserByUsernameOrEmail(mysqli $conn, string $username_email): array|false
{
    $sql = "SELECT id, username, email, password_hash FROM users WHERE username = ? OR email = ?";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "ss", $username_email, $username_email);
        if (mysqli_stmt_execute($stmt)) {
            $result = mysqli_stmt_get_result($stmt);
            $user = mysqli_fetch_assoc($result);
            mysqli_stmt_close($stmt);
            return $user ?: false;
        }
        mysqli_stmt_close($stmt);
    }
    error_log("Database error in findUserByUsernameOrEmail: " . mysqli_error($conn));
    return false;
}

/**
 * @param mysqli $conn
 * @param string $username
 * @param string $email
 * @param string $password
 * @return bool|string
 */
function registerUser(mysqli $conn, string $username, string $email, string $password): bool|string
{
    if (empty($username) || empty($email) || empty($password)) {
        return "Semua field harus diisi.";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return "Format email tidak valid.";
    }
    if (strlen($password) < 6) {
        return "Password minimal harus 6 karakter.";
    }

    $existingUser = findUserByUsernameOrEmail($conn, $username);
    if ($existingUser) {
        return "Username sudah digunakan.";
    }
    $existingEmail = findUserByUsernameOrEmail($conn, $email);
     if ($existingEmail) {
        return "Email sudah terdaftar.";
    }

    $password_hash = password_hash($password, PASSWORD_DEFAULT);
    if ($password_hash === false) {
        error_log("Password hashing failed.");
        return "Terjadi kesalahan sistem saat memproses pendaftaran.";
    }

    $sql = "INSERT INTO users (username, email, password_hash) VALUES (?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql);

    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "sss", $username, $email, $password_hash);
        if (mysqli_stmt_execute($stmt)) {
            mysqli_stmt_close($stmt);
            return true;
        } else {
            error_log("Database error on registerUser execute: " . mysqli_stmt_error($stmt));
             mysqli_stmt_close($stmt);
            return "Gagal mendaftarkan pengguna. Silakan coba lagi.";
        }
    } else {
         error_log("Database error on registerUser prepare: " . mysqli_error($conn));
        return "Terjadi kesalahan pada database.";
    }
}

?>