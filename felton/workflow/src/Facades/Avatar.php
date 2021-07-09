<?php
/**
 * Created by PhpStorm.
 * User: admin
 * Date: 2021/7/9
 * Time: 16:53
 */

namespace Felton\Workflow\Facades;


use Illuminate\Support\Facades\Facade;
class Avatar extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'avatar';
    }
}
