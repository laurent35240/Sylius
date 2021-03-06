<?php

/*
 * This file is part of the Sylius package.
 *
 * (c) Paweł Jędrzejewski
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Sylius\Behat\Page\Shop\Account\Order;

use FriendsOfBehat\PageObjectExtension\Page\SymfonyPageInterface;
use Sylius\Component\Core\Model\OrderInterface;

interface IndexPageInterface extends SymfonyPageInterface
{
    /**
     * @return int
     */
    public function countOrders();

    /**
     * @param string $number
     *
     * @return bool
     */
    public function isOrderWithNumberInTheList($number);

    /**
     * @return bool
     */
    public function isItPossibleToChangePaymentMethodForOrder(OrderInterface $order);

    public function openLastOrderPage();
}
