<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

   <link rel="preload" href='./resources/fonts/montserrat-400.woff2' as="font"
    type="font/woff2" crossorigin>
     <link rel="preload" href='./resources/fonts/montserrat-500.woff2' as="font"
    type="font/woff2" crossorigin>
     <link rel="preload" href='./resources/fonts/montserrat-600.woff2' as="font"
    type="font/woff2" crossorigin>
     <link rel="preload" href='./resources/fonts/montserrat-700.woff2' as="font"
    type="font/woff2" crossorigin>

    <link rel="stylesheet" href="./css/quiz.min.css">
    <script src="./js/quiz.min.js" defer></script>
    <!-- Путь должен быть вида "./resources/favicon/файл.расширение" -->
<link rel="apple-touch-icon" sizes="76x76" href="./resources/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="./resources/favicon/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="./resources/favicon/favicon-16x16.png">
<link rel="manifest" href="./resources/favicon/site.webmanifest">
<link rel="mask-icon" href="./resources/favicon/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
</head>

<body>

  <body>

    <main class="main">
      <form class="quiz" method="POST" action="/resources/send.php">
        <div class="quiz-left">
          <div>
            <!--  -->
            <div class="quiz-wrapper active">
              <legend class="quiz-question">Сколько ночей планируете отдыхать?</legend>
              <div class="quiz-answers">
                <label class="quiz-answer">
                  <input type="radio" id="q1-a1" name="q1" value="1-2 Ночей">
                  1-2 Ночей
                </label>

                <label class="quiz-answer">
                  <input type="radio" id="q1-a2" name="q1" value="3-4 Ночей">
                  3-4 Ночей
                </label>

                <label class="quiz-answer">
                  <input type="radio" id="q1-a3" name="q1" value="5-6 Ночей">
                  5-6 Ночей
                </label>

                <label class="quiz-answer">
                  <input type="radio" id="q1-a4" name="q1" value="7-8 Ночей">
                  7-8 Ночей
                </label>
              </div>
            </div>
            <div class="quiz-wrapper disabled">
              <legend class="quiz-question">Сколько ночей планируете отдыхать? 2</legend>
              <div class="quiz-answers">
                <label class="quiz-answer">
                  <input type="radio" id="q2-a1" name="q2" value="1-2 Ночей">
                  1-2 Ночей
                </label>

                <label class="quiz-answer">
                  <input type="radio" id="q2-a2" name="q2" value="3-4 Ночей">
                  3-4 Ночей
                </label>

                <label class="quiz-answer">
                  <input type="radio" id="q2-a3" name="q2" value="5-6 Ночей">
                  5-6 Ночей
                </label>

                <label class="quiz-answer">
                  <input type="radio" id="q2-a4" name="q2" value="7-8 Ночей">
                  7-8 Ночей
                </label>
              </div>
            </div>
            <div class="quiz-wrapper disabled last-question">
              <legend class="quiz-question">Сколько ночей планируете отдыхать? 3</legend>
              <div class="quiz-answers">
                <label class="quiz-answer">
                  <input type="radio" id="q3-a1" name="q3" value="1-2 Ночей">
                  1-2 Ночей
                </label>

                <label class="quiz-answer">
                  <input type="radio" id="q3-a2" name="q3" value="3-4 Ночей">
                  3-4 Ночей
                </label>

                <label class="quiz-answer">
                  <input type="radio" id="q3-a3" name="q3" value="5-6 Ночей">
                  5-6 Ночей
                </label>

                <label class="quiz-answer">
                  <input type="radio" id="q3-a4" name="q3" value="7-8 Ночей">
                  7-8 Ночей
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="quiz-right">
          <div class="quiz-right__expert">
            <div class="quiz-right__wrapper"><img class="quiz-right__img" src="./img/quiz/expert.jpg" alt=""></div>
            <div class="quiz-right__title">
              <strong class="quiz-right__name">Алина</strong>
              <p class="quiz-right__subtitle">Эксперт по подбору туров</p>
            </div>
          </div>
        </div>
        <div class="quiz-next">
          <div class="quiz-next-text">Готово 33%</div>
          <div class="quiz-next__progress"></div>
          <div class="quiz-next__btns">
            <button class="quiz-next__btn quiz-next__back">Назад</button>
            <input type="button" class="quiz-next__btn quiz-next__next disabled-btn" value="Далее">
          </div>
        </div>
      </form>
    </main>
  </body>
</body>

</html>