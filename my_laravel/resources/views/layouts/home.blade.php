
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->


</head>
<body>
<div class="flex-center position-ref full-height">
    {{--第一种方法--}}
    {{--@yield('content')--}}

    {{--第二种方法--}}
    @section('content')
        <p> 我是父级当中你的内容</p>
        @show

</div>
</body>
</html>
