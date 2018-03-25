<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Http\Model\Index
 *
 * @property int $id
 * @property string|null $xs_name
 * @property string|null $xs_author
 * @property string|null $category
 * @property string|null $name_id
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Index whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Index whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Index whereNameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Index whereXsAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Index whereXsName($value)
 * @mixin \Eloquent
 */
class Index extends Model
{
    protected $table = 'dd_name';
    protected $primaryKey = 'id';
    //关闭更新和插入时间
    public $timestamps = false;
    //允许 create 方法插入到数据库
    #protected $fillable=[];
    //不允许 create 方法插入到数据库
    protected $guarded=[];



}
