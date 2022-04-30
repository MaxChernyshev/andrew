<?php

use App\Models\CatalogOrder;
use App\Models\CateringRequest;
use App\Models\CompanyFeedback;
use App\Models\Menu;
use App\Models\Order;
use App\Models\PhoneFeedback;
use App\Models\Product;

return [
    'company_feedback' => [
        'statuses' => [
            CompanyFeedback::STATUS_NEW => 'нове',
            CompanyFeedback::STATUS_COMPLETED => 'оброблено',
        ],
    ],

    'phone_feedback' => [
        'statuses' => [
            PhoneFeedback::STATUS_NEW => 'нове',
            PhoneFeedback::STATUS_COMPLETED => 'оброблено',
        ],
    ],

    'menus' => [
        'types' => [
            Menu::TYPE_CATALOG      => 'каталог',
            Menu::TYPE_MENU_CATALOG => 'меню',
            Menu::TYPE_PDF          => 'PDF файл',
        ],
        'backgrounds' => [
            Menu::BACKGROUND_BEIGE => 'бежевий',
            Menu::BACKGROUND_WHITE => 'білий з одиничками',
            Menu::BACKGROUND_BLACK => 'чорний',
            Menu::BACKGROUND_FULLY_WHITE => 'білий',
        ],
    ],
    'products' => [
        'show_types' => [
            Product::SHOW_TYPE_WEIGHT => 'вага (гр)',
            Product::SHOW_TYPE_PIECES => 'штуки (шт)',
            Product::SHOW_TYPE_ML    => 'мілілітри (ml)',
        ],
    ],
    'orders' => [
        'catering' => [
            'statuses' => [
                'names' => [
                    CateringRequest::STATUS_NEW => 'нове',
                    CateringRequest::STATUS_PROCESSED => 'в процесі',
                    CateringRequest::STATUS_DONE => 'виконано',
                ],
                'colors' => [
                    CateringRequest::STATUS_NEW => 'warning',
                    CateringRequest::STATUS_PROCESSED => 'success',
                    CateringRequest::STATUS_DONE => 'primary',
                ],
            ],
        ],

        'catalog' => [
            'statuses' => [
                'names' => [
                    CatalogOrder::STATUS_NEW => 'нове',
                    CatalogOrder::STATUS_PROCESSED => 'в процесі',
                    CatalogOrder::STATUS_DONE => 'виконано',
                    CatalogOrder::STATUS_REJECTED => 'відмовлено',
                ],
                'colors' => [
                    CatalogOrder::STATUS_NEW => 'warning',
                    CatalogOrder::STATUS_PROCESSED => 'success',
                    CatalogOrder::STATUS_DONE => 'primary',
                    CatalogOrder::STATUS_REJECTED => 'danger',
                ],
            ],
        ],

        'delivery' => [
            'statuses' => [
                'names' => [
                    Order::STATUS_NEW               => 'нове',
                    Order::STATUS_NEED_CALL         => 'потірбно зателефонувати',
                    Order::STATUS_WAIT_PAYMENT      => 'очікує оплати',
                    Order::STATUS_PAY_SUCCESS       => 'оплачено',
                    Order::STATUS_PAY_FAIL          => 'оплату провалено',
                    Order::STATUS_DELIVERY          => 'відправлено на доставку',
                    Order::STATUS_DONE              => 'виконано',
                    Order::STATUS_REFUSED           => 'відмовлено',
                ],
                'colors' => [
                    Order::STATUS_NEW            => 'warning',
                    Order::STATUS_NEED_CALL      => 'warning',
                    Order::STATUS_WAIT_PAYMENT   => 'warning',
                    Order::STATUS_PAY_SUCCESS    => 'success',
                    Order::STATUS_PAY_FAIL       => 'danger',
                    Order::STATUS_DELIVERY       => 'info',
                    Order::STATUS_DONE           => 'primary',
                    Order::STATUS_REFUSED        => 'danger',
                ],
            ],
        ],
    ],
];
