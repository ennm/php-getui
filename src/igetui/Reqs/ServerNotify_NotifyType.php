<?php
/**
 * Created by PhpStorm.
 * User: lacorey
 * Date: 16/9/23
 * Time: 下午2:18
 */

namespace Getui\Igetui\Reqs;

use Getui\Protobuf\Type\PBEnum;

class ServerNotify_NotifyType extends PBEnum
{
    const normal = 0;
    const serverListChanged = 1;
    const exception = 2;
}