<?php
//Принимаем постовые данные
$username=$_POST['username'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$user_message=$_POST['user_message'];
//Тут указываем на какой ящик посылать письмо
$to = "lockfuqa@mail.ru";
//Далее идет тема и само сообщение
// Сообщение письма
$message = "
Имя пользователя: ".htmlspecialchars($username)."<br />
Сообщение: ".htmlspecialchars($user_message)."<br />
Тема: ".htmlspecialchars($subject)."<br />
Email: <a href='email:$email'>".htmlspecialchars($email)."</a>";
// Отправляем письмо при помощи функции mail();
$headers = "From: stastroi.ru <mail@stastroi.ru>\r\nContent-type: text/html; charset=UTF-8 \r\n";
mail ($to, $subject, $message, $headers);
// Перенаправляем человека на страницу благодарности и завершаем скрипт
header('Location: thanks.html');
exit();
?>