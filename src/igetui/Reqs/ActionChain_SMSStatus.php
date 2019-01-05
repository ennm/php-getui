<?php
/**
 * Created by PhpStorm.
 * User: lacorey
 * Date: 16/9/23
 * Time: 下午2:09
 */

namespace Getui\Igetui\Reqs;

use Getui\Protobuf\Type\PBEnum;

class ActionChain_SMSStatus extends PBEnum
{
    const unread = 0;
    const read = 1;
}