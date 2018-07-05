<?php
/**
 * This file is part of Swoft.
 *
 * @link https://swoft.org
 * @document https://doc.swoft.org
 * @contact group@swoft.org
 * @license https://github.com/swoft-cloud/swoft/blob/master/LICENSE
 */

namespace Hdll\Order\Lib;

use Swoft\Core\ResultInterface;

/**
 * The interface of demo service
 *
 * @method ResultInterface deferCreateOrder( string $token,int $consignee_id,int $item_id,int $selected_num,int $order_type,string $reservation_time = '')
 */
interface OrderInterface
{
    /**
     * 创建订单
     * @param string $token
     * @param int $consignee_id
     * @param int $item_id
     * @param int $selected_num
     * @param int $order_type
     * @param string $reservation_time
     * @return mixed
     */
    public function createOrder(
        string $token,
        int $consignee_id,
        int $item_id,
        int $selected_num,
        int $order_type,
        string $reservation_time = '');
}