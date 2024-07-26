<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{asset('assets/css/bootstrap1.min.css')}}" rel="stylesheet">
    <link href="{{asset('assets/css/sb-admin.css')}}" rel="stylesheet">
    <link href="{{asset('font-awesome/css/font-awesome.css')}}" rel="stylesheet">
    <title>Login</title>
</head>

<body class="pt-xl-5">


    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 center  px-3 py-3 mx-auto">

                <marquee>
                    <h2>Selamat Datang di Website Toko Penjualan Laptop MCC</h2>
                </marquee>
                <div class="login-panel panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="panel-title">Login</h3>
                    </div>
                    @if($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach($errors->all() as $item)
                            <li>{{$item}}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    <div class="panel-body">
                        <form role="form" method="POST" action="/user/validasi">
                            @csrf
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" name="email" type="email" value="{{Session::get('email')}}">
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="password" type="password">
                                </div>

                                <button class="btn btn-lg btn-success btn-block" name="submit" type="submit">Login</a>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>