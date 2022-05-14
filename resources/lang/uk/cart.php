<?php

use App\Models\CatalogOrder;
use App\Models\CompanyFeedback;
use App\Models\Menu;
use App\Models\Order;

return [
   'delivery' => [
        'price_free' => 'Ваше замовлення буде доставлено безкоштовно.',
        'price' => 'Без урахування вартості доставки.',
        'price_with_delivery' => 'У вартість замовлення включена доставка у розмірі '.cart()->deliveryPrice().' грн',
        'package' => 'Вартість упаковки '.number_format(packageSum(), 2).' грн',
        'info' => 'Сума замовлення на ваговий товар буде уточнена після дзвінка оператора',

        'types' => [
                Order::DELIVERY_TYPE_OUR => 'Замовлення від '.cart()->deliveryFreePrice().'  грн доставляються безкоштовно.',
                Order::DELIVERY_TYPE_KORZINA => 'Вартість доставки в приміську зону може відрізнятись від суми вказаної в замовленні.',
                Order::DELIVERY_TYPE_SELF => 'Очікуйте дзвінка оператора',
        ],
   ],
   'politic' => [
       '1' => 'Я ознайомлений та згоден з ',
       '2' => 'правилами обробки персональних даних* ',
       '3' => 'та договором оферти*',
   ],
   'order' => [
       'error' => 'Заповніть, будь ласка, адресу доставки.',
   ],

   'bad_product' => 'Не можна замовити цей продукт',
];
