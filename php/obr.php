<?php


function ot($ot, $b){

    if (!empty($ot)) {
        if (in_array($ot, $b)) {
            die(json_encode(array('status' => 200, 'text' => "Вы ввели правильный ответ!")));
        } else die(json_encode(array('status' => 400, 'text' => "Вы ввели не правильный ответ!")));
    } else die(json_encode(array('status' => 400, 'text' => "Введите ответ!")));
}

if(isset($_POST['otvet']) and empty($_POST['otvet1']) and empty($_POST['otvet2'])) {
    //массив ответов
    $arr = [
        'зеленый',
        'Зеленый',
        'зеленая',
        'Зеленая',
        'зеленого',
        'Зеленого'
    ];
    ot($_POST['otvet'], $arr);
}
else if(isset($_POST['otvet1']) and empty($_POST['otvet']) and empty($_POST['otvet2'])){
    //массив ответов
    $arr = [
        '6',
        'Шесть',
        'шесть'
    ];
    ot($_POST['otvet1'], $arr);
}
else if(isset($_POST['otvet2']) and empty($_POST['otvet']) and empty($_POST['otvet1'])){
    //массив ответов
    $arr = [
        '4',
        'Четыре',
        'четыре'
    ];
    ot($_POST['otvet2'], $arr);

} else die(json_encode(array('status' => 400, 'text' => "Ошибка передачи данных!")));