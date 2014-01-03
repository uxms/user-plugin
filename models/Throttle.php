<?php namespace Plugins\RainLab\User\Models;

use October\Rain\Auth\Models\Throttle as ThrottleBase;

class Throttle extends ThrottleBase
{
    /**
     * @var string The database table used by the model.
     */
    protected $table = 'october_user_throttle';

    /**
     * @var array Relations
     */
    public $belongsTo = [
        'user' => ['Plugins\RainLab\User\Models\User', 'foreignKey' => 'user_id']
    ];
}
