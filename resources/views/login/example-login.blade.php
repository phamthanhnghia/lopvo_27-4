<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="content-type" content="text/html; charset=UTF-8">
        <meta charset="utf-8">
        <title>Quản lý lớp võ</title>
        <meta name="generator" content="Bootply" />
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="stylesheet" type="text/css" href="{{ mix('css/app.css') }}">
      <link rel="stylesheet" type="text/css" href="{{ mix('css/all.css') }}">
    </head>
    <body>
<nav class="navbar navbar-static">
</nav><!-- /.navbar -->


<!-- Begin Body -->
<div class="container">

<div class="row">
    <div class="col-md-4 col-md-offset-4">
        <div class="login-panel panel panel-default">
            <div class="panel-heading">
                <h3 class="panel-title">Đăng nhập</h3>
            </div>
            <div class="panel-body">
                <form method="post" action="{{-- {{ route('dang-nhap') }} --}}" role="form">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <fieldset>
                        <div class="form-group">
                            <input class="form-control" placeholder="E-mail" name="email" type="email" autofocus>
                        </div>
                        <div class="form-group">
                            <input class="form-control" placeholder="Password" name="password" type="password" value="">
                        </div>
                        <div class="checkbox">
                            <label>
                                <input name="remember" type="checkbox" value="Remember Me">Remember Me
                            </label>
                        </div>
                        <!-- Change this to a button or input when using this as a form -->
                        <button type="submit" class="btn btn-info btn-lg btn-block">Truy cập</button>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</div>
            
</div>
    <!-- script references -->
    <script type="text/javascript" src="{{ mix('js/app.js') }}"></script>
    <script type="text/javascript" src="{{ mix('js/all.js') }}"></script>
    </body>
</html>