<?php

use App\Models\CatalogOrder;
use App\Models\CompanyFeedback;
use App\Models\Menu;
use App\Models\Order;

return [
    'payment_types' => [
        Order::PAYMENT_TYPE_CARD => 'картой онлайн',
        Order::PAYMENT_TYPE_CASH => 'наличными',
        Order::PAYMENT_TYPE_CARD_ON_DELIVERY => 'картой при получении',
    ],
    'delivery_types' => [
         Order::DELIVERY_TYPE_OUR => 'Феличита',
         Order::DELIVERY_TYPE_KORZINA => 'Корзина',
    ],
    'success' => 'Успешно оформлено. Номер заказа: :id',
    'pay' => [
        'button' => 'Оплатить',
    ],
];
