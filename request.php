<?php 
include 'connect.php';

# Функция для генерации URL после "/"
function gen_shorturl($char = 6) {
    $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    $new_chars = str_split($chars);
    $shorturl = '';
    for ($i = 0; $i < $char; $i++) {
        $shorturl .= $new_chars[ mt_rand(0, sizeof($new_chars))];
    }
    return $shorturl;
}

$request = trim($_GET['short_url']);
$request = mysqli_real_escape_string($connector, $request);

# Проверки и основная логика
if (isset($_GET['short_url'])) {
    $check_bool = false;
    $shorturl = '';
    while (!$check_bool) {
        $shorturl = gen_shorturl();
        $select = mysqli_query($connector, "SELECT * FROM urls WHERE shorturl = '".$shorturl."'");
        if (!mysqli_num_rows($select)) {
            $check_bool = true;
            break;
        }
    }
   
    if ($check_bool) {
        $ins = mysqli_query($connector, "INSERT INTO urls (url, shorturl) VALUES ('".$request."','".$shorturl."')");
        if ($ins) {
            $_GET['short_url'] = $_SERVER['SERVER_NAME'].'/'.$shorturl; 
        } else {
            echo '<script>alert("Ошибка передачи запроса")</script'; 
        }
    } else { }
} else {
    $URI = $_SERVER['REQUEST_URI'];
    $shorturl = substr($URI, 1);
       if (iconv_strlen($shorturl)) {
            $select = mysqli_query($connector, "SELECT * FROM urls WHERE shorturl = '".$shorturl."'");
            if (mysqli_num_rows($select)) {
            $row = mysqli_fetch_assoc($select);
            header("Location: " . $row['url']);
            }
            }
       }

