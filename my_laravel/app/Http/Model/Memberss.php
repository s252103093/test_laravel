<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;

//文章 model 类
/**
 * App\Http\Model\Memberss
 *
 * @property int $id
 * @property string|null $xs_name
 * @property string|null $xs_author
 * @property string|null $category
 * @property string|null $name_id
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Http\Model\Chapter[] $hasManyChapter
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Memberss whereCategory($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Memberss whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Memberss whereNameId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Memberss whereXsAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Memberss whereXsName($value)
 * @mixin \Eloquent
 */
class Memberss extends Model
{
    //
    protected $table = 'dd_name';
    protected $primaryKey='id';

    // 一篇文章含有多个掌机
    public function hasManyChapter()
    {
        return $this->hasMany(Chapter::class,'id_name','name_id');
    }


}
