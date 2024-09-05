<?php
session_start();
if (!isset($_SESSION["CalisanId"]) AND !($_SESSION["CalisanId"] > 0)) {
    header("Location: /ozsu/LoginRegister/login.php");
    exit();
}
$user_name = $_SESSION["user_name"];
$user_email = $_SESSION["user_email"];
$company_position = $_SESSION["company_position"];
?>

<?php ob_start(); ?>
<?php

function getWeatherData($apiUrl) {
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, $apiUrl);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $response = curl_exec($curl);

    if (!$response) {
        $error = curl_error($curl);
        error_log("cURL Hata: " . $error);
        echo "cURL Hata: " . $error;
    }
    curl_close($curl);
    return json_decode($response, true);
}

$apiUrl = 'https://api.openweathermap.org/data/2.5/weather?q=Yalova&units=metric&appid=ea16c631e83167878b80e0eb3b5b5bc2';
$weatherData = getWeatherData($apiUrl);
if ($weatherData && isset($weatherData['main']['temp'], $weatherData['weather'][0]['description'], $weatherData['name'])) {
    $temperature = $weatherData['main']['temp'];
    $description = $weatherData['weather'][0]['description'];
    $city = $weatherData['name'];
} else {
    $temperature = 'N/A';
    $description = 'Veri alınamadı.';
}
?>

<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="/ozsu/LoginRegister/styles.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <style>
        .welcome-section {
            text-align: center;
            margin-bottom: 30px;
        }
        .welcome-message {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .user-info {
            font-size: 18px;
            margin-bottom: 5px;
        }
        .user-info span {
            font-weight: bold;
        }

        .button-card {
            background-image: url();
            padding: 15px;
            border-radius: 5px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
        }
        .button-card .button-group {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
        }
        .button-card .button-group .btn {
            flex: 1;
            min-width: 150px;
            margin: 5px;
        }
        .custom-button {
            background-image: url(); /* Buton arka plan resminin dosya yolunu burada belirtin */
            background-size: cover; /* Resmi kapsamlı bir şekilde sığdır */
            background-repeat: no-repeat; /* Resmi tekrarlamayı engelle */
            padding: 10px;
            border-radius: 5px;
            color: white; /* Buton yazı rengini beyaz yapın, ki arka plan rengi ile uyumlu olsun */
            font-weight: bold; /* Yazıyı kalın yapın, daha belirgin olsun */
            text-align: center; /* Yazıyı ortala */
        }
        .exchange-rate-widget i {
            margin-right: 5px;
        }
        .welcome-section {
            background-image: url();
            border: 1px solid #ccc;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .welcome-message {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .user-info {
            font-size: 18px;
            margin-bottom: 5px;
        }

        .user-info span {
            font-weight: bold;
            color: #007bff;
        }
        body {
            background-color: rgba(176, 211, 222, 0.49);
            background-size: cover;
            background-repeat: no-repeat;
    </style>

</head>
<body>

<div class="container welcome-section py-5">
    <div class="welcome-message">
        <i class="fas fa-user"></i>
        <?php echo $user_name; ?>
    </div>
    <div class="user-info">
        <i class="fas fa-envelope"></i>
        <span><?php echo $user_email; ?></span>

        <?php
        if ($company_position === 'Infirmary') {
            $formatted_position = 'Infirmary';
        } elseif ($company_position === 'Stock') {
            $formatted_position = 'Stock ';
        } elseif ($company_position === 'Sale') {
            $formatted_position = 'Sale  ';
        } elseif ($company_position === 'Production') {
            $formatted_position = 'Production  ';
        }
        elseif ($company_position === 'Admin') {
            $formatted_position = 'Admin  ';
        }

        else {
            $formatted_position = ucwords(str_replace('_', ' ', $company_position));
        }
        ?>
        <div class="user-info">
            <i class="fas fa-building"></i> <!-- Bina simgesi -->
            <span><?php echo isset($formatted_position) ? $formatted_position : ''; ?></span>
        </div>
        <div class="container">
            <div class="button-card">
                <div class="button-group">
                    <?php if ($user_email === 'admin@admin'): ?>
                        <a href= "/ozsu/report_index.php") class="btn btn-dark mb-2 custom-button">
                            <i class="fas fa-user fa-2x"></i>
                            <br>
                            Çalışan İşlemleri
                        </a>
                        <a href="/ozsu/infirmary_index.php" class="btn btn-dark mb-2 custom-button">
                            <i class="fas fa-box fa-2x"></i>
                            <br>
                            Revir Kaydı
                        </a>
                        <a href="/ozsu/production_index.php" class="btn btn-dark mb-2 custom-button">
                            <i class="fas fa-user fa-2x"></i>
                            <br>
                            Üretim Kaydı
                        </a>
                        <a href="/ozsu/employee_index.php" class="btn btn-dark mb-2 custom-button">
                            <i class="fas fa-user-plus fa-2x"></i>
                            <br>
                            Yeni Çalısan Kaydı
                        </a>
                        <a href="/ozsu/sales_index.php" class="btn btn-dark mb-2 custom-button">
                            <i class="fas fa-user fa-2x"></i>
                            <br>
                            Satış Kaydı
                        </a>
                        <a href="/ozsu/stock_index.php" class="btn btn-dark mb-2 custom-button">
                            <i class="fas fa-user fa-2x"></i>
                            <br>
                            Stok Kaydı
                        </a>
                    <?php endif; ?>

                    <?php if ($company_position === 'Infirmary'): ?>
                        <a href="/ozsu/infirmary_index.php" class="btn btn-dark mb-2 custom-button">
                            <i class="fas fa-user fa-2x"></i>
                            <br>
                            Revir İşlemleri
                        </a>

                    <?php endif; ?>

                    <?php if ($company_position === 'Stocks'): ?>
                        <a href="/ozsu/stock_index.php" class="btn btn-dark mb-2 custom-button">
                            <i class="fas fa-user-plus fa-2x"></i>
                            <br>
                            Stok Kaydı
                        </a>
                    <?php endif; ?>

                    <?php if ($company_position === 'Sales'): ?>
                        <a href="/ozsu/sales_index.php" class="btn btn-dark mb-2 custom-button">
                            <i class="fas fa-box fa-2x"></i>
                            <br>
                            Satış Kaydı
                        </a>
                    <?php endif; ?>

                    <?php if ($company_position === 'Productions'): ?>
                        <a href="/ozsu/production_index.php" class="btn btn-dark mb-2 custom-button">
                            <i class="fas fa-box fa-2x"></i>
                            <br>
                            Üretim Kaydı
                        </a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="container text-center mt-3">
            <a href="/ozsu/LoginRegister/logout.php" class="btn btn-danger">Çıkış Yap</a>
        </div>
        <br><br><br>
</body>
</html>