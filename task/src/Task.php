<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2018/6/29
 * Time: 16:14
 */
namespace Hdll\Task;

use Swoft\Core\Config;

class Task
{
    public function test()
    {
        /**@var Config $config**/
        $config = \Swoft::getBean("config");
        return $config->get("TASK_POOL");
    }
}

