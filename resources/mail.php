<?php

  session_start();
  $_SESSION['tel'] = $_POST['tel'];
  $_SESSION['name'] = $_POST['name'];
  $name = $_SESSION['name'];
  $tel = $_SESSION['tel'];
  $ans1 = $_SESSION['ans1'];
  $ans2 = $_SESSION['ans2'];
  $ans3 = $_SESSION['ans3'];
  
  print_r($_SESSION);

// Файлы phpmailer
require 'phpmailer/PHPMailer.php';
require 'phpmailer/SMTP.php';
require 'phpmailer/Exception.php';

$title = "Заявка с сайта";
$file = $_FILES['file'];

$c = true;
// Формирование самого письма
$title = "Заголовок письма";
$body = "
  <tr>
    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Имя пользователя: $name </b></td>
    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Телефон: $name </b></td>
    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Ответы на 1 вопрос: $ans1 </b></td>
    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Ответы на 2 вопрос: $ans2 </b></td>
    <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Ответы на 3 вопрос: $ans3 </b></td>
  </tr>
";
// foreach ( $_POST as $key => $value ) {
//   if ( $value != "" && $key != "project_name" && $key != "admin_email" && $key != "form_subject" ) {
//     $body .= "
//     " . ( ($c = !$c) ? '<tr>':'<tr style="background-color: #f8f8f8;">' ) . "
//       <td style='padding: 10px; border: #e9e9e9 1px solid;'><b>Имя пользователя $name </b></td>
//       <td style='padding: 10px; border: #e9e9e9 1px solid;'>$value</td>
//     </tr>
//     ";
//   }
// }

$body = "<table style='width: 100%;'>$body</table>";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();

try {
  $mail->isSMTP();
  $mail->CharSet = "UTF-8";
  $mail->SMTPAuth   = true;

  // Настройки вашей почты
  $mail->Host       = 'smtp.mail.ru'; // SMTP сервера вашей почты
  $mail->Username   = 'cool.olo124@list.ru'; // Логин на почте
  $mail->Password   = ''; // Пароль на почте
  $mail->SMTPSecure = 'ssl';
  $mail->Port       = 465;

  $mail->setFrom('cool.olo124@list.ru'); // Адрес самой почты и имя отправителя

  // Получатель письма
  $mail->addAddress('');

  // Прикрипление файлов к письму
  // if (!empty($file['name'][0])) {
  //   for ($ct = 0; $ct < count($file['tmp_name']); $ct++) {
  //     $uploadfile = tempnam(sys_get_temp_dir(), sha1($file['name'][$ct]));
  //     $filename = $file['name'][$ct];
  //     if (move_uploaded_file($file['tmp_name'][$ct], $uploadfile)) {
  //         $mail->addAttachment($uploadfile, $filename);
  //         $rfile[] = "Файл $filename прикреплён";
  //     } else {
  //         $rfile[] = "Не удалось прикрепить файл $filename";
  //     }
  //   }
  // }

  // Отправка сообщения
  $mail->isHTML(true);
  $mail->Subject = $title;
  $mail->Body = $body;

  $mail->send();
  header('location: final.html');
} catch (Exception $e) {
  $status = "Сообщение не было отправлено. Причина ошибки: {$mail->ErrorInfo}";
}
