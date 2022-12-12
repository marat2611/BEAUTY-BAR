<?php 
    if (isset($_POST['name'] && isset($_POST['phone'])) {
        $name = $_POST['name'];
        $phone = $_POST['phone'];

        if (mail('epifanovaav-1987@yandex.ru',
                'Запись на услугу',
                'Имя:'.$name."\n",
                'Телефон:'.$phone

        )) {echo('Успешно отправлено')} else {echo('ERROR')};
    }
>