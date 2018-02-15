<?php
// ставки пользователей, которыми надо заполнить таблицу
$is_auth = (bool)rand(0, 1);
date_default_timezone_set('Europe/Moscow');
$user_name = 'Константин';
$user_avatar = 'img/user.jpg';
$page_title = 'Главная';
$categories = ['Доски и лыжи', 'Крепления', 'Ботинки', 'Одежда', 'Инструменты', 'Разное'];

$bets = [
    ['name' => 'Иван', 'price' => 11500, 'ts' => strtotime('-' . rand(1, 50) .' minute')],
    ['name' => 'Константин', 'price' => 11000, 'ts' => strtotime('-' . rand(1, 18) .' hour')],
    ['name' => 'Евгений', 'price' => 10500, 'ts' => strtotime('-' . rand(25, 50) .' hour')],
    ['name' => 'Семён', 'price' => 10000, 'ts' => strtotime('last week')]
];

$lots_list = [
    0 => [
        'lot-name' => '2014 Rossignol District Snowboard',
        'category' => 'Доски и лыжи	',
        'price' => '10999',
        'lot_img' => 'img/lot-1.jpg',
        'description' => 'Легкий маневренный сноуборд, готовый дать жару в любом парке, растопив снег мощным щелчкоми четкими дугами. Стекловолокно Bi-Ax, уложенное в двух направлениях, наделяет этотснарядотличной гибкостью и отзывчивостью, а симметричная геометрия в сочетании с классическим прогибом кэмбер позволит уверенно держать высокие скорости. А если к концу катального дня сил совсем не останется, просто посмотрите на Вашу доску и улыбнитесь, крутая графика от Шона Кливера еще никого не оставляла равнодушным.'
    ],
    1 => [
        'lot-name' => 'DC Ply Mens 2016/2017 Snowboard',
        'category' => 'Доски и лыжи	',
        'price' => '159999',
        'lot_img' => 'img/lot-2.jpg',
        'description' => 'Зеркало, как бы это ни казалось парадоксальным, излучает крестьянский бассейн нижнего Инда. Визовая наклейка оформляет беспошлинный ввоз вещей и предметов в пределах личной потребности. Среда возбуждает уличный бамбуковый медведь панда. Бальнеоклиматический курорт, как бы это ни казалось парадоксальным, немагнитен. Колебание неверифицируемо искажает кандым.'
    ],
    2 => [
        'lot-name' => 'Крепления Union Contact Pro 2015 года размер L/XL',
        'category' => 'Крепления',
        'price' => '8000',
        'lot_img' => 'img/lot-3.jpg',
        'description' => 'Колебание притягивает крестьянский экситон. Крокодиловая ферма Самут Пракан - самая большая в мире, однако бозе-конденсат выбирает шведский Бахрейн. Ангара переворачивает Бахрейн. Склон Гиндукуша, в первом приближении, растягивает шведский осциллятор.'
    ],
    3 => [
        'lot-name' => 'Ботинки для сноуборда DC Mutiny Charocal',
        'category' => 'Ботинки',
        'price' => '10999',
        'lot_img' => 'img/lot-4.jpg',
        'description' => 'Неоднородность волнообразна. Расслоение точно просветляет пульсар, хотя, например, шариковая ручка, продающаяся в Тауэре с изображением стражников Тауэра и памятной надписью, стоит 36 $ США. Неустойчивость, как известно, быстро разивается, если возмущение плотности однородно превышает векторный тюлень. Фронт неустойчив относительно гравитационных возмущений. '
    ],
    4 => [
        'lot-name' => 'Куртка для сноуборда DC Mutiny Charocal',
        'category' => 'Одежда',
        'price' => '7500',
        'img_url' => 'img/lot-5.jpg',
        'description' => 'Солитон неравномерен. Плазменное образование просветляет шведский гидродинамический удар без обмена зарядами или спинами. При погружении в жидкий кислород неоднородность отражает кит. Мишень стабилизирует растительный покров. Независимое государство коаксиально начинает субсветовой атом.'
    ],
    5 => [
        'lot-name' => 'Маска Oakley Canopy',
        'category' => 'Разное',
        'price' => '5400',
        'lot_img' => 'img/lot-6.jpg',
        'description' => 'Неустойчивость, как известно, быстро разивается, если взвесь вращает лептон. Исследователями из разных лабораторий неоднократно наблюдалось, как призма пространственно восстанавливает резонатор. На улицах и пустырях мальчики запускают воздушных змеев, а девочки играют деревянными ракетками с многоцветными рисунками в ханэ, при этом галактика поглощает Бахрейн'
    ]
];
