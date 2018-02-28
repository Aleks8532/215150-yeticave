<?php
require_once('functions.php');
require_once('data.php');
require_once('db_connect.php');



if (!$db_connect) {
    $error = mysqli_connect_error();
    $content = render_template('error', ['error' => $error]);
} else {
    $sql = 'SELECT `id`, `category_name` FROM categories';
    $result = mysqli_query($db_connect, $sql);
    if ($result) {
        $categories = mysqli_fetch_all($result, MYSQLI_ASSOC);
    } else {
        $error = mysqli_error($db_connect);
        $content = render_template('error', ['error' => $error]);
    }

    $now_date = date( "Y-m-d G:i:s", strtotime( "now" ) );

    $sql = "select lot.id, lot.name, lot.initial_price, lot.lot_img, lot.date_end, lot.created_date, categories.category_name from lots lot"
    . " inner join categories on lot.fk_category_id = categories.id"
    . " where lot.date_end > '$now_date'"
    . " group by lot.id, lot.name, lot.initial_price, lot.lot_img, lot.date_end, lot.created_date, categories.category_name"
        . " ORDER BY lot.created_date DESC";

    if ($res = mysqli_query($db_connect, $sql)) {
        $lots_list = mysqli_fetch_all($res, MYSQLI_ASSOC);
    } else {
        $content = render_template('error', ['error' => mysqli_error($db_connect)]);
    }
}

$page_content = render_template('index', ['lots_list' => $lots_list]);
$layout_content = render_template('layout', [
    'page_title' => $page_title,
    'user_avatar' => $user_avatar,
    'user_name' => $user_name,
    'is_auth' => $is_auth,
    'page_content' => $page_content,
    'categories' => $categories
]);
print ($layout_content);
