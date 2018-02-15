<?php
require_once('functions.php');
require_once('data.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $lot = $_POST;
    $required = ['lot-name', 'description', 'category', 'lot-rate', 'lot-step', 'lot-date' ];
    $dict = ['lot-name' => 'Название', 'description' => 'Описание', 'lot_img' => 'Изображенеи', 'category' => 'Категория', 'lot-rate' => 'Начальная цена', 'lot-step' => 'Шаг ставки', 'lot-date' => 'Дата окончания торгов'];
    $errors = [];
    foreach ($required as $key) {
        if (empty($_POST[$key])) {
            $errors[$key] = 'Это поле надо заполнить';
        }
    }

    if ($_FILES ['lot_img']['name']){
        $tmp_name = $_FILES['lot_img']['tmp_name'];
        $path = $_FILES['lot_img']['name'];
        $info = finfo_open(FILEINFO_MIME_TYPE);
        $file_type = finfo_file($info, $tmp_name);

        if ($file_type == "image/jpeg" || $file_type == "image/png") {
            move_uploaded_file($tmp_name, 'img/' . $path);
            $lot['lot_img'] ='img/'. $path;
        }else{
            $errors['lot_img'] = 'Загрузите картинку в формате JPG или PNG';
        }
    }else{
        $errors['lot_img'] = 'Вы не загрузили файл';
    };

    if (count($errors)) {
        $page_content = render_template('add', ['lot' => $lot, 'errors' => $errors, 'categories' => $categories, 'dict' => $dict]);
    } else{
        $page_content = render_template('lot', ['lot' => $lot,'bets' => $bets ]);
    }
} else{
    $page_content = render_template('add', ['categories' => $categories]);
}

$layout_content = render_template('layout', [
    'page_title' => 'Добавить лот',
    'user_avatar' => $user_avatar,
    'user_name' => $user_name,
    'is_auth' => $is_auth,
    'page_content' => $page_content,
    'categories' => $categories
]);
print ($layout_content);