<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Model\Resour
 *
 * @property int $id
 * @property string $ip
 * @property string $port
 * @property float $speed
 * @property string $proxy_type
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Resour whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Resour whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Resour wherePort($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Resour whereProxyType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Resour whereSpeed($value)
 * @mixin \Eloquent
 */
class Resour extends Model
{
    //

    protected $table ='proxy_ip';
    protected $primaryKey='id';
    public $timestamps=false;
    protected $guarded=[];
}
