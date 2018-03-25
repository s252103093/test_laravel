<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->

        <!-- Styles -->

    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        <a href="{{ route('register') }}">Register</a>
                    @endauth
                </div>
            @endif

                @if($data['score']<60)
                    不及格
                @else
                    满分
                @endif

                @unless($data['score']<60)
                    好成绩
                @endunless

                @for($i=0;$i<$data['num'];$i++)
                    <?php echo $i ?>
                @endfor

                @foreach($data['article'] as $v)
                    <?php echo $v ?>
                @endforeach
            {{time()}}
            {{date('Y-m-d H:i:s')}}
            {{$title or 'default_title'}}
            {{@$title}}
            <div class="content">
                <div class="title m-b-md">

                    <?php echo $data['name'] ?>- <?php echo $data['param2']  ?>
                    <p><?php echo $title ?></p>
                </div>
                {{csrf_token()}}

            </div>
        </div>
    </body>
</html>
