<?php
session_start();
if (isset($_SESSION["CalisanId"]) AND $_SESSION["CalisanId"] > 0)
    header("Location: /ozsu/LoginRegister/dashboard.php");
?>
<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="/ozsu/LoginRegister/styles.css" rel="stylesheet" />
    <style>
        .btn {
            /* Existing styles... */
            background-color: #007bff; /* Change the background color to blue */
            color: #ffffff;
            border: none;
            cursor: pointer;
        }
        .btn:hover {
            background-color: #0056b3;
        }
    </style>
    <title>Document</title>
</head>
<body>

<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title text-center mb-4">Please login...</h1>
                    <form action="/ozsu/LoginRegister/login_process.php" method="post">
                        <div class="mb-3">
                            <label for="email" class="email">E-mail</label>
                            <input type="text" name="email" class="form-control" required>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="password">password</label>
                            <input type="password" name="password" class="form-control" required>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-dark mb-2">Giriş Yap</button>

                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>