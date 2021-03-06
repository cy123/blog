 <!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>H+ 后台主题UI框架 - 基础表格</title>
    <meta name="keywords" content="H+后台主题,后台bootstrap框架,会员中心主题,后台HTML,响应式后台">
    <meta name="description" content="H+是一个完全响应式，基于Bootstrap3最新版本开发的扁平化主题，她采用了主流的左右两栏式布局，使用了Html5+CSS3等现代技术">

    <link rel="shortcut icon" href="favicon.ico"> <link href="{{asset('public/Admin/css/bootstrap.min.css?v=3.3.5')}}" rel="stylesheet">

   <!--<link href="{{asset('public/Admin/css/style.min.css?v=4.0.0')}}" rel="stylesheet"><base target="_blank">--> 

</head>

<body class="gray-bg">
    <h3>添加分类</h3>
    <div class="wrapper wrapper-content animated fadeInRight">

        <div class="row">
            <div class="col-sm-6">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <form role="form" action="{{url('/articleCategory')}}" method="post" target="iframe6">
                            
                            {{ csrf_field() }}

                            <label>category level (0:top level)</label>
                            <select class="form-control" name="id">
                                <option value='0'>顶层分类</option>
                                @foreach($level as $v)
                                    <option value="{{$v->id}}">{{$v->name}}</option>
                                @endforeach
                            </select>

                            <div class="form-group">
                                <label for="exampleInputEmail1">programming type</label>
                                <input type="text" class="form-control" id="exampleInputEmail1" name="name"/>
                            </div>
                            <button type="submit" class="btn btn-default">Submit</button>
                        </form>
                    </div>
    
                </div>
            </div>
        </div>
   
    </div>
    <script src="{{asset('public/Admin/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{asset('public/Admin/js/bootstrap.min.js?v=3.3.5')}}"></script>
    <script src="{{asset('public/Admin/js/plugins/peity/jquery.peity.min.js')}}"></script>
    <script src="{{asset('public/Admin/js/content.min.js?v=1.0.0')}}"></script>
    <script src="{{asset('public/Admin/js/plugins/iCheck/icheck.min.js')}}"></script>
    <script src="{{asset('public/Admin/js/demo/peity-demo.min.js')}}"></script>
    <script>
        $(document).ready(function(){$(".i-checks").iCheck({checkboxClass:"icheckbox_square-green",radioClass:"iradio_square-green",})});
    </script>
    <script type="text/javascript" src="http://tajs.qq.com/stats?sId=9051096" charset="UTF-8"></script>
</body>

</html>