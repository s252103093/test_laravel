@extends('layouts.admin')
@section('content')
        <!--面包屑导航 开始-->
<div class="crumb_warp">
    <!--<i class="fa fa-bell"></i> 欢迎使用登陆网站后台，建站的首选工具。-->
    <i class="fa fa-home"></i> <a href="{{url('admin/info')}}">首页</a> &raquo; 管理
</div>

<!--搜索结果页面 列表 开始-->
<form action="#" method="post">
    <div class="result_wrap">
        <div class="result_title">
            <h3>列表</h3>
        </div>
        <!--快捷导航 开始-->
        <div class="result_content">
            <div class="short_wrap">
                <a href="{{url('admin/resour/create')}}"><i class="fa fa-plus"></i>添加ip</a>
                <a href="{{url('admin/resour')}}"><i class="fa fa-recycle"></i>全部</a>
            </div>
        </div>
        <!--快捷导航 结束-->
    </div>

    <div class="result_wrap">
        <div class="result_content">
            <table class="list_tab">
                <tr>
                    <th class="tc" width="5%">排序</th>
                    <th class="tc" width="5%">ID</th>
                    <th>速度</th>
                    <th>ip</th>
                    <th>类型</th>
                    <th>端口号</th>
                    <th>操作</th>
                </tr>

                @foreach($data as $v)
                <tr>
                    <td class="tc">
                        <input type="text" onchange="changeOrder(this,{{$v->id}})" value="{{$v->id}}">
                    </td>
                    <td class="tc">{{$v->id}}</td>
                    <td>
                        <a href="#">{{$v->speed}}</a>
                    </td>
                    <td>
                        <a href="#">{{$v->ip}}</a>
                    </td>
                    <td>{{$v->proxy_type}}</td>
                    <td>{{$v->port}}</td>
                    <td>
                        <a href="{{url('admin/resour/'.$v->id.'/edit')}}">修改</a>
                        <a href="javascript:;" onclick="delLinks({{$v->id}})">删除</a>
                    </td>
                </tr>
                @endforeach

            </table>

        </div>

    </div>

</form>
        {!!$data->appends(['p1' => $param1, 'p2' => $param2])->links() !!}


<script>
    function changeOrder(obj,link_id){
        var order = $(obj).val();
        $.post("{{url('admin/resour/changeorder')}}",{'_token':'{{csrf_token()}}','id':link_id,'order':order},function(data){
            if(data.status == 0){
                layer.msg(data.msg, {icon: 6});
            }else{
                layer.msg(data.msg, {icon: 5});
            }
        });
    }

    //删除
    function delLinks(link_id) {
        layer.confirm('您确定要删除这个链接吗？', {
            btn: ['确定','取消'] //按钮
        }, function(){
            $.post("{{url('admin/resour/')}}/"+link_id,{'_method':'delete','_token':"{{csrf_token()}}"},function (data) {

               // console.log(data);return;
                if(data.status==0){
                    location.href = location.href;
                    layer.msg(data.msg, {icon: 6});
                }else{
                    layer.msg(data.msg, {icon: 5});
                }
            });
        }, function(){

        });
    }



</script>

@endsection
