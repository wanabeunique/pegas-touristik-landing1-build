<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./../css/send.css">
  <link rel="preload" href='./fonts/montserrat-400.woff2' as="font"
    type="font/woff2" crossorigin>
     <link rel="preload" href='./fonts/montserrat-500.woff2' as="font"
    type="font/woff2" crossorigin>
     <link rel="preload" href='./fonts/montserrat-600.woff2' as="font"
    type="font/woff2" crossorigin>
     <link rel="preload" href='./fonts/montserrat-700.woff2' as="font"
    type="font/woff2" crossorigin>
</head>
<body>
  <div class="hero">
    <div class="hero__wrapper">
      <h1 class="hero__title">Спасибо, вся информация принята!</h1>
      <p class="hero__subtitle">Оставьте свой номер <span class="green">WhatsApp</span>, и наш менеджер отправит 
      туда варианты туров</p>
      <form action="mail.php" class="hero__form" method="POST">
        <div class="hero__phone-wrapper"><div class="hero__phone-img"></div><input class="hero__input hero__phone" type="tel" name="tel" placeholder="Ваш телефон" required></div>
        <div class="hero__name-wrapper"><div class="hero__name-img"></div><input class="hero__input hero__name" type="text" name="name" placeholder="Ваше имя" required></div>
        <input class="hero__input hero__submit"type="submit" value="Получить подбороку">
        <label class="hero__checkbox-wrapper">
          <input type="checkbox" name="" id="" required>
          <p>С <a href="#">Положением об обработке персональных данных</a> и <a href="#">Политикой конфиденциальности</a> ознакомлен и согласен</p>
        </label>
      </form>
    </div>
  </div>
</body>
<?php
            session_start();
            $_SESSION['ans1'] = $_POST['q1'];
            $_SESSION['ans2'] = $_POST['q2'];
            $_SESSION['ans3'] = $_POST['q3'];
?>
</html>