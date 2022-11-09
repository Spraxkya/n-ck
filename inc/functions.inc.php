<?php

function userEmail($conn, $email) {
    $sql = "SELECT * FROM members WHERE email = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../index.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function userName($conn, $username) {
    $sql = "SELECT * FROM members WHERE username = ?;";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../index.php?error=stmtfailed');
        exit();
    }

    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);

    $resultData = mysqli_stmt_get_result($stmt);

    if($row = mysqli_fetch_assoc($resultData)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }

    mysqli_stmt_close($stmt);

}

function createUser($conn, $email, $username, $pwd) {
    $sql = "INSERT INTO members (email, username, user_pwd) VALUES (?, ?, ?);";
    $stmt = mysqli_stmt_init($conn);
    if (!mysqli_stmt_prepare($stmt, $sql)) {
        header('location: ../index.php?error=stmtfailed');
        exit();
    }

    $hashedPwd = password_hash($pwd, PASSWORD_DEFAULT);

    mysqli_stmt_bind_param($stmt, "sss", $email, $username, $hashedPwd);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_close($stmt);
    header('location: ../index.php?error=none');
    exit();
}

function loginUserName($conn, $username, $pwd) {
    $userName = userName($conn, $username);


    if ($userName === false) {
        header('location: ../index.php?error=UsernameDoNotExist');
        exit();
    }

    $pwdHashed = $userName["user_pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
        header('location: ../index.php?error=wrongpasswordbitch');
        exit();
    } else if($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $userName["user_id"];
        $_SESSION["nickname"] = $userName["username"];
        $_SESSION["mailu"] = $userName["email"];
        header("location: ../index.php");
        exit();
    }
}

function loginUserEmail($conn, $email, $pwd) {
    $userEmail = userEmail($conn, $email);


    if ($userEmail === false) {
        header('location: ../index.php?error=EmailDoNotExist');
        exit();
    }

    $pwdHashed = $userEmail["user_pwd"];
    $checkPwd = password_verify($pwd, $pwdHashed);

    if($checkPwd === false) {
        header('location: ../index.php?error=wrongpasswordbitch');
        exit();
    } else if($checkPwd === true) {
        session_start();
        $_SESSION["userid"] = $userEmail["user_id"];
        $_SESSION["nickname"] = $userEmail["username"];
        $_SESSION["mailu"] = $userEmail["email"];
        header("location: ../index.php");
        exit();
    }
}
?>