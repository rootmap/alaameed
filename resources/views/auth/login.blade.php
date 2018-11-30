
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Login | S.S Group of Companies</title>
        <link rel="shortcut icon" href="assets/dist/img/favicon.png" type="image/x-icon">
        <script src="../../../../ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
        <script>
            WebFont.load({
                google: {families: ['Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i']},
                active: function () {
                    sessionStorage.fonts = true;
                }
            });
        </script>
        <!-- START GLOBAL MANDATORY STYLE -->
        <link href="{{url('assets/adminpix/assets/dist/css/base.css')}}" rel="stylesheet" type="text/css">
        <!-- START THEME LAYOUT STYLE -->
        <link href="{{url('assets/adminpix/assets/dist/css/style.css')}}" rel="stylesheet" type="text/css"/>
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
            <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="hold-transition fixed sidebar-mini">
        
        <!-- Content Wrapper -->
        <div class="login-wrapper">
            <div class="container-center">
                <div class="panel panel-bd">
                    <div class="panel-heading">
                        <div class="view-header">
                            <div class="header-icon">
                                <i class="pe-7s-unlock"></i>
                            </div>
                            <div class="header-title">
                                <h3>Login</h3>
                                <small><strong>Please enter your credentials to login.</strong></small>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form action="{{ route('login') }}"  method="POST" id="loginForm" novalidate>
                            {{ csrf_field() }}
                            <!--Social Buttons--> 
                            {{-- <div class="social">
                                <strong>Sign in using social network:</strong><br>
                                <div class="twitter_bg"><i class="fa fa-twitter"></i><a href="#" class="btn_1">Login Twitter</a></div>
                                <div class="fb_bg"><i class="fa fa-facebook"></i><a href="#" class="btn_2">Login Facebook</a></div>
                            </div> --}}
                            <div class="form-group">
                                <label class="control-label">Username</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                    <input id="username" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Enter your email address">
                                    
                                </div>
                                <span class="help-block small">Your unique username to app</span>
                                @if ($errors->has('email'))
                                        <span class="help-block">
                                            <strong  class="alert alert-sm alert-warning alert-dismissible">{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                            </div>
                            <div class="form-group">
                                <label class="control-label">Password</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-key"></i></span>
                                    <input id="pass" type="password" class="form-control" name="password" required placeholder="Enter your Password">
                                </div>
                                <span class="help-block small">Your unique username to app</span>
                            </div>
                            <div>
                                <button type="submit" class="btn btn-base pull-right">Login</button>
                                <div class="checkbox checkbox-success">
                                    <input id="checkbox3" type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <label for="checkbox3">Keep me signed in</label>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div id="bottom_text">
                    {{-- Don't have an account? <a href="register.html">Sign Up</a><br> --}}
                    Remind <a href="{{ route('password.request') }}">Password</a>
                </div>

            </div>
        </div>  <!-- /.content-wrapper -->

        
        <!-- START CORE PLUGINS -->
        <script src="{{url('assets/adminpix/assets/plugins/jQuery/jquery-1.12.4.min.js')}}"></script>
        <script src="{{url('assets/adminpix/assets/bootstrap/js/bootstrap.min.js')}}"></script>
    </body>
</html>