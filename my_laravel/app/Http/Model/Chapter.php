<?php

namespace App\Http\Model;

use Illuminate\Database\Eloquent\Model;


//文章章节 类
/**
 * App\Http\Model\Chapter
 *
 * @property int $id
 * @property string|null $xs_chaptername
 * @property string|null $xs_content
 * @property int|null $id_name
 * @property int|null $num_id
 * @property string|null $url
 * @property-read \App\Http\Model\Memberss|null $dd_name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Chapter whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Chapter whereIdName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Chapter whereNumId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Chapter whereUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Chapter whereXsChaptername($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\Chapter whereXsContent($value)
 * @mixin \Eloquent
 */
class Chapter extends Model
{
    protected $table='dd_chaptername';

    //post  many->one 多个章节-> 一篇文章
    public function dd_name()
    {
        return $this->belongsTo(Memberss::class,'id_name','name_id');
    }
}
