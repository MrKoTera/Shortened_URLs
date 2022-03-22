<?php include 'request.php';?>

<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
    <title>Сократитель URL-адресов</title>
</head>

<body>
<script src="https://code.jquery.com/jquery-3.6.0.js"
integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
crossorigin="anonymous"></script>
<script src="js/main.js"></script>
<script src="js/ajax.js"></script>

    <section class="mainsection">
        <div class="container">
            <div class="mainsection__inner">
                <a href="/" class="mainsection__title">Сократитель URL-ссылок</a>
                <form action="" id="main_form" class="mainsection__input input-group" method="GET">
                    <input type="text" class="form_inp" id="main_input" name="short_url" placeholder="Введите URL">
                    <button class="btn copy_btn" type="button" id="copybtn" onclick="copyTextFromInput()">Копировать</button>
                    <button class="btn submit_btn" type="submit" id="sub_btn">Сократить URL</button>
                </form>
            </div>
        </div>
    </section>



</body>
</html>