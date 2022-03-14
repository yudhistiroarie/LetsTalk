<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>{{ config('app.name') }}</title>
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" integrity="sha512-1PKOgIY59xJ8Co8+NE6FZ+LOAZKjy+KY8iq0G4B3CyeY6wYHN3yt9PW0XpSriVlkMXe40PTKnXrLnZ9+fkDaog==" crossorigin="anonymous"/>
    
    <!-- bootstrap 4 toggle -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/css/bootstrap4-toggle.min.css" integrity="sha512-EzrsULyNzUc4xnMaqTrB4EpGvudqpetxG/WNjCpG6ZyyAGxeB6OBF9o246+mwx3l/9Cn838iLIcrxpPHTiygAA==" crossorigin="anonymous">
    
    <!-- AdminLTE -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/css/adminlte.min.css" integrity="sha512-rVZC4rf0Piwtw/LsgwXxKXzWq3L0P6atiQKBNuXYRbg2FoRbSTIY0k2DxuJcs7dk4e/ShtMzglHKBOJxW8EQyQ==" crossorigin="anonymous"/>
    
    <!-- iCheck -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/icheck-bootstrap/3.0.1/icheck-bootstrap.min.css" integrity="sha512-8vq2g5nHE062j3xor4XxPeZiPjmRDh6wlufQlfC6pdQ/9urJkU07NM0tEREeymP++NczacJ/Q59ul+/K2eYvcg==" crossorigin="anonymous"/>
    
    {{-- datetime picker --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.min.css" integrity="sha512-aEe/ZxePawj0+G2R+AaIxgrQuKT68I28qh+wgLrcAJOz3rxCP+TwrK5SPN+E5I+1IQjNtcfvb96HDagwrKRdBw==" crossorigin="anonymous"/>
    
    <!-- select2 4.1.0-rc.0 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" integrity="sha512-aD9ophpFQ61nFZP6hXYu4Q/b/USW7rpLCQLX6Bi0WJHXNO7Js/fUENpBQf/+P4NtpzNX0jSgR5zVvPOJp+W2Kg==" crossorigin="anonymous">
    
    <!-- select2 bootstrap -->
    <link rel="stylesheet" href="{{ url('css/select2-bootstrap4.min.css') }}">
    
    <!-- style -->
    <link rel="stylesheet" href="{{ url('css/styles.css') }}">
    
    @yield('third_party_stylesheets')

    @stack('page_css')
    
    {{-- @notifyCss --}}
    
    <!-- jQuery 3.5.1 -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha512-bLT0Qm9VnAYZDflyKcBaQ2gg0hSYNQrJ8RilYldYQ1FxQYoCLtUjuuRuZo+fjqhx/qtq/1itJ0C2ejDxltZVFg==" crossorigin="anonymous"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed">
    <div class="wrapper">
        <!-- Main Header -->
        <nav class="main-header navbar navbar-expand navbar-white navbar-light">
            <!-- Left navbar links -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
                </li>
            </ul>

            <ul class="navbar-nav ml-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link" data-toggle="dropdown" href="#">
                        <i class="far fa-bell"></i>
                        <span class="badge badge-warning navbar-badge">{{$sum}}</span>
                    </a>
                    <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <span class="dropdown-item dropdown-header">{{$sum}} Notifications</span>
                    <div class="dropdown-divider"></div>
                        <a href="{{ route('dueassurance') }}" class="dropdown-item">
                            <i class="fas fa-envelope mr-2"></i> {{$assdue}} Assuransi Akan Jatuh Tempo
                        </a>
                    <div class="dropdown-divider"></div>
                        <a href="{{ route('duerent') }}" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> {{$stnkdue}} STNK Akan Jatuh Tempo
                        </a>
                    <div class="dropdown-divider"></div>
                        <a href="{{ route('duestnk') }}" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> {{$incpo}} PO Belum Lengkap
                        </a>
                    <div class="dropdown-divider"></div>
                        <a href="{{ route('duestnk') }}" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> {{$incstnk}} STNK Belum Lengkap
                        </a>
                    <div class="dropdown-divider"></div>
                        <a href="{{ route('duestnk') }}" class="dropdown-item">
                            <i class="fas fa-file mr-2"></i> {{$incspk}} SPK Belum Lengkap
                        </a>
                </li>
                <li class="nav-item dropdown user-menu">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('assets/img/newest-01.png')}}"
                            class="user-image img-circle elevation-2" alt="User Image">
                        <span class="d-none d-md-inline">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                        <!-- User image -->
                        <li class="user-header bg-primary">
                            <img src="{{asset('assets/img/newest-01.png')}}"
                                class="img-circle elevation-2"
                                alt="User Image">
                            <p>
                                {{ Auth::user()->name }}
                                <small>Member since {{ Auth::user()->created_at->format('M. Y') }}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                            <a href="#" class="btn btn-default btn-flat">Profile</a>
                            <a href="#" class="btn btn-default btn-flat float-right"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                Sign out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
        
        <!-- Left side column. contains the logo and sidebar -->
        @include('layouts.sidebar')
        
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content">
                @yield('content')
            </section>
        </div>
        
        <!-- Main Footer -->
        <footer class="main-footer">
            <div class="float-right d-none d-sm-block">
                <b>Version</b> 3.0.5
            </div>
            <strong>Copyright &copy; 2021 <a href="https://maktabit.xyz">MaktabIT</a></strong> All rights
            reserved.
        </footer>
    </div>
    
    {{-- @include("notify::messages") --}}
    <x:notify-messages/>
    @notifyJs
    
    <!-- price format 2.0 -->
    <script type="text/javascript" src="{{ url('vendor/jquery.price-format-2.0.js') }}"></script>
    
    <!-- popper -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    
    <!-- bootstrap 4.5.3 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    
    <!-- custom file input -->
    <script src="https://cdn.jsdelivr.net/npm/bs-custom-file-input/dist/bs-custom-file-input.min.js" integrity="sha256-e0DUqNhsFAzOlhrWXnMOQwRoqrCRlofpWgyhnrIIaPo=" crossorigin="anonymous"></script>
    
    <!-- AdminLTE App -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/admin-lte/3.0.5/js/adminlte.min.js" integrity="sha512-++c7zGcm18AhH83pOIETVReg0dr1Yn8XTRw+0bWSIWAVCAwz1s2PwnSj4z/OOyKlwSXc4RLg3nnjR22q0dhEyA==" crossorigin="anonymous"></script>
    
    <!-- moment -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.27.0/moment.min.js" integrity="sha512-rmZcZsyhe0/MAjquhTgiUcb4d9knaFc7b5xAfju483gbEXTkeJRUMIPk6s3ySZMYUHEcjKbjLjyddGWMrNEvZg==" crossorigin="anonymous"></script>
    
    <!-- datetime picker -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js" integrity="sha512-GDey37RZAxFkpFeJorEUwNoIbkTwsyC736KNSYucu1WJWFK9qTdzYub8ATxktr6Dwke7nbFaioypzbDOQykoRg==" crossorigin="anonymous"></script>
    
    <!-- toggle -->
    <script src="https://cdn.jsdelivr.net/gh/gitbrent/bootstrap4-toggle@3.6.1/js/bootstrap4-toggle.min.js" integrity="sha256-p6I+tuAqpKQhe7ldkP1yo/Du0QRYjm1O3reSKIiS4AM=" crossorigin="anonymous"></script>
    
    <!-- switch -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-switch/3.3.4/js/bootstrap-switch.min.js" integrity="sha512-J+763o/bd3r9iW+gFEqTaeyi+uAphmzkE/zU8FxY6iAvD3nQKXa+ZAWkBI9QS9QkYEKddQoiy0I5GDxKf/ORBA==" crossorigin="anonymous"></script>
    
    <!-- select2 4.1.0-rc.0 -->
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" integrity="sha256-9yRP/2EFlblE92vzCA10469Ctd0jT48HnmmMw5rJZrA=" crossorigin="anonymous"></script>
    
    <!-- mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js" integrity="sha256-u7MY6EG5ass8JhTuxBek18r5YG6pllB9zLqE4vZyTn4=" crossorigin="anonymous"></script>
    
    <!-- input mask -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.inputmask/5.0.6/jquery.inputmask.min.js" integrity="sha512-6Jym48dWwVjfmvB0Hu3/4jn4TODd6uvkxdi9GNbBHwZ4nGcRxJUCaTkL3pVY6XUQABqFo3T58EMXFQztbjvAFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    
    <!-- script -->
    <script src="{{ url('js/script.js') }}"></script>
    
    @stack('third_party_scripts')
    
    @stack('page_scripts')
</body>
</html>
