<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}" id="theme-styles"> -->

    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
   
    <!-- Font-Awesome -->
    <link rel="stylesheet" href="{{asset('css/font-awesome/css/font-awesome.min.css')}}">


    <!-- Google Webfonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600|PT+Serif:400,400italic' rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('css/style.css')}}" id="theme-styles">

    <!--[if lt IE 9]>      
        <script src="js/respond.js"></script>
    <![endif]-->
    @section('css')
    @show
    <style>
        .nav li a:hover{
            color:red;
        }
        #asd > li{
            margin-left:25px;
            text-align:center;
            width:80px;height:50px;
            line-height:50px;
            border:1px solid #F1F1F1;
            border-radius:2px;
        }
    </style>
</head>
<body>
    <header>
        <div class="widewrapper masthead">
            <div class="container">
                <a href="{{ url('/') }}" id="logo">
                    <img src="{{asset('img/logo.png')}}" alt="clean Blog">
                </a>
        
                <div id="mobile-nav-toggle" class="pull-right">
                    <a href="#" data-toggle="collapse" data-target=".clean-nav .navbar-collapse">
                        <i class="fa fa-bars"></i>
                    </a>
                </div>

                <nav class="pull-right clean-nav">
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav" id="asd" nav-pills >
                           <!--  <li>
                                <a href="{{ url('/') }}">Home</a>
                            </li> -->
                            @guest
                                <li>
                                    <a href="{{ route('login') }}">登录</a>
                                </li>
                                <li>
                                    <a href="{{ route('register') }}">注册</a>
                                </li>
                            @else
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true">
                                        {{ Auth::user()->name }} <span class="caret"></span>
                                    </a>

                                    <ul class="dropdown-menu">
                                        <li>
                                            <a href="{{ route('logout') }}"
                                                onclick="event.preventDefault();
                                                document.getElementById('logout-form').submit();">
                                                Logout
                                            </a>
                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                {{ csrf_field() }}
                                            </form>
                                        </li>
                                    </ul>
                                </li>
                            @endguest                       
                        </ul>
                    </div>
                </nav>        

            </div>
        </div>
        <div class="widewrapper subheader">
            <div class="container">
                <div class="clean-breadcrumb">
                    <a href="{{url('/')}}">Blog</a>
                </div>

                <div class="clean-searchbox">
                    <form action="#" method="get" accept-charset="utf-8">
                        <input class="searchfield" id="searchbox" type="text" placeholder="Search">
                        <button class="searchbutton" type="submit">
                            <i class="fa fa-search"></i>
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </header>  
    @yield('content')
    <footer>
        <div class="widewrapper footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-user"></i>About</h3>

                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ab animi laboriosam nostrum consequatur fugiat at, labore praesentium modi, quasi dolorum debitis reiciendis facilis, dolor saepe sint nemo, earum molestias quas.</p>
                       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolorum, error aspernatur assumenda quae eveniet.</p>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-pencil"></i> Recent Post</h3>
                        <ul class="clean-list">
                            <li><a href="">Clean - Responsive HTML5 Template</a></li>
                            <li><a href="">Responsive Pricing Table</a></li>
                            <li><a href="">Yellow HTML5 Template</a></li>
                        </ul>
                    </div>

                    <div class="col-md-4 footer-widget">
                        <h3> <i class="fa fa-envelope"></i>Contact Me</h3>

                        <p>Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet.</p>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil fugiat, cupiditate veritatis excepturi tempore explicabo.</p>
                         <div class="footer-widget-icon">
                            <i class="fa fa-facebook"></i><i class="fa fa-twitter"></i><i class="fa fa-google"></i>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
        <div class="widewrapper copyright">
                &nbsp;
        </div>
    </footer>
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script> -->
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <!-- <script src="{{asset('js/app.js')}}"></script> -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/modernizr.js')}}"></script>
    @section('js')
    @show
</body>
</html>