<?php
$to = "proksushu@yandex.ru";
  $subject = "Answer for Resume";
  $message = "Message!";
  $headers = "Content-type: text/plain; charset=utf-8 \r\n";//Шапка сообщения,
  //содержит определение типа письма, от кого, и кому отправить ответ на письмо
  mail ($to, $subject, $message, $headers);
?>