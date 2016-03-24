<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK ]
// +----------------------------------------------------------------------
// | Copyright (c) 2006~2016 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

namespace Think\Model;

\Think\Loader::import('model/Adv', TRAIT_PATH, EXT);
\Think\Loader::import('model/Transaction', TRAIT_PATH, EXT);

class Adv extends \Think\Model
{
    use \traits\model\Adv;
    use \traits\model\Transaction;
}
