<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\App\Http\Model{
/**
 * App\App\Http\Model\Test2
 *
 */
	class Test2 extends \Eloquent {}
}

namespace App\Http\Model{
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
 */
	class Chapter extends \Eloquent {}
}

namespace App\Http\Model{
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
 */
	class Index extends \Eloquent {}
}

namespace App\Http\Model{
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
 */
	class Memberss extends \Eloquent {}
}

namespace App\Http\Model{
/**
 * App\Http\Model\News
 *
 */
	class News extends \Eloquent {}
}

namespace App\Http\Model{
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
 */
	class Resour extends \Eloquent {}
}

namespace App\Http\Model{
/**
 * App\Http\Model\User
 *
 * @property int $id
 * @property string|null $user_name
 * @property int|null $user_pass
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\User whereUserName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Http\Model\User whereUserPass($value)
 */
	class User extends \Eloquent {}
}

