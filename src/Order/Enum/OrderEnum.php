<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/7/5
 * Time: 13:15
 */
namespace Hdll\Services\Order\Enum;

class OrderEnum
{

    //订单状态
    const STATUS_UNPAID = 10; //待支付
    const STATUS_PAID = 20; //已支付
    const STATUS_DELIVERY = 30; //已发货/已预约
    const STATUS_DELIVERED = 40; //已收获/已核销
    const STATUS_REFUND = 50; //申请退款
    const STATUS_REFUNDED = 60; //已退款
    const STATUS_CANCEL = 0; //已取消
    const STATUS_CLOSED = 70; //已关闭
    const STATUS_REFUNDING = 80; //退款中

    //订单类型
    const TYPE_GOODS = 0; //商品订单
    const TYPE_ACTIVITY = 1; //活动订单





}