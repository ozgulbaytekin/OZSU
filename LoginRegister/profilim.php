<head>
    <link href="/ozsu/LoginRegister/styles.css" rel="stylesheet" />
    <style

    </style>
</head>
<?php
session_start();

// Eğer kullanıcı oturumu açık değilse, login.php sayfasına yönlendir
if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

// Kullanıcı oturumu açık ise, kullanıcı adını al
$user_name = $_SESSION["user_name"];
$user_email = $_SESSION["user_email"];
$company_position = $_SESSION["company_position"];



require_once('/ozsu/LoginRegister/DatabaseConnector.php');

$db = new DatabaseConnector();
$db->connect();

ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profilim</title>
    <link href="/ozsu/LoginRegister/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://kit.fontawesome.com/242deccd00.js" crossorigin="anonymous"></script>
</head>
<body>
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-6 mb-4">
            <div class="card card-profilim">
                <div class="card-header">
                    <i class="fas fa-info-circle"></i> Kullanıcı Detayları
                </div>
                <div class="card-body">
                    <ul class="user-details">
                        <?php
                        $sql = "SELECT * FROM users WHERE id = {$_SESSION['user_id']}";
                        $result = $db->query($sql);
                        if ($result && $result->num_rows > 0) {
                            $user_data = $result->fetch_assoc();
                            echo "<li><i class='fas fa-user text-primary'></i> Ad: {$user_data['name']}</li>";
                            echo "<li><i class='fas fa-envelope text-primary'></i> E-posta: {$user_data['email']}</li>";
                            echo "<li><i class='fas fa-briefcase text-primary'></i> Bölüm: {$user_data['company_position']}</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="path/to/bootstrap.bundle.min.js"></script> <!-- Bootstrap JavaScript dosyası -->
</body>
</html>
