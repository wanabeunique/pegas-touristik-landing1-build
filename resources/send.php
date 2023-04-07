<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="./../css/send.css">
</head>
<body>
  <div class="hero">
    <div class="hero__wrapper">
      <h1 class="hero__title">Спасибо, вся информация принята!</h1>
      <p class="hero__subtitle">Оставьте свой номер <span class="green">WhatsApp</span>, и наш менеджер отправит 
      туда варианты туров</p>
      <form action="mail.php" class="hero__form" method="POST">
        <input class="hero__input hero__phone" type="tel" name="tel" placeholder="Ваш телефон" required>
        <input class="hero__input hero__name" type="text" name="name" placeholder="Ваше имя" required>
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