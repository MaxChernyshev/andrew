<?php

use App\Models\CatalogOrder;
use App\Models\CompanyFeedback;
use App\Models\Menu;
use App\Models\Order;

return [
   'delivery' => [
       'price_free' => 'Ваш заказ будет доставлен бесплатно.',
        'price' => 'Без учета стоимости доставки.',
        'price_with_delivery' => 'В стоимость заказа включена доставка в размере '.cart()->deliveryPrice().' грн',
        'package' => 'Стоимость упаковки '.number_format(packageSum(), 2).' грн',
        'info' => 'Сумма заказа на весовой товар будет уточнена после звонка оператора',
        'types' => [
            Order::DELIVERY_TYPE_OUR => 'Заказ от '.settings('our-free-delivery-min-sum').' грн доставка бесплатная.',
            Order::DELIVERY_TYPE_KORZINA => 'Стоимость доставки в пригородную зону может отличаться от суммы, указанной в заказе.',
       ],
   ],
   'politic' => [
        '1' => 'Я ознакомлен и согласен с ',
        '2' => 'правилами обработки персональных данных*',
    ],
    'bad_product' => 'Нельзя заказать этот продукт',
];
