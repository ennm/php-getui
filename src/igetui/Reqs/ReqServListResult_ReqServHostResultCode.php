<?php
/**
 * Created by PhpStorm.
 * User: lacorey
 * Date: 16/9/23
 * Time: 下午2:03
 */

namespace Getui\Igetui\Reqs;

use Getui\Protobuf\Type\PBEnum;

class ReqServListResult_ReqServHostResultCode extends PBEnum
{
    const successed = 0;
    const failed = 1;
    const busy = 2;
}