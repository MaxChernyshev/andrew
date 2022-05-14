<?php

use App\Models\CatalogOrder;
use App\Models\CompanyFeedback;
use App\Models\Menu;
use App\Models\Order;

return [
   'payment_types' => [
       Order::PAYMENT_TYPE_CARD => 'картою онлайн',
       Order::PAYMENT_TYPE_CASH => 'готівкою',
       Order::PAYMENT_TYPE_CARD_ON_DELIVERY => 'картою при отримані',
   ],
   'delivery_types' => [
        Order::DELIVERY_TYPE_OUR => 'Фелічіта',
        Order::DELIVERY_TYPE_KORZINA => 'Корзина',
        Order::DELIVERY_TYPE_SELF => 'Самовивіз',
   ],

   'from' => [
        Order::FROM_SITE => 'Сайт',
        Order::FROM_IPHONE => 'IPhone',
        Order::FROM_ANDROID => 'Android',
        Order::FROM_ADMIN => 'Адмін панель',
    ],

    'success' => 'Успішно оформлене. Номер замовлення: :id',

    'pay' => [
        'button' => 'Оплатити',
    ],
];
