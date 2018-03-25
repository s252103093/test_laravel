<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Model\User
 *
 * @property int $id
 * @property string|null $user_name
 * @property int|null $user_pass
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\User whereUserName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\User whereUserPass($value)
 * @mixin \Eloquent
 */
class User extends Model
{
    protected $table='user';
    protected $primaryKey='id';
    public $timestamps=false;

    public function getRouteKeyName(){
        return 'id';
    }
}
