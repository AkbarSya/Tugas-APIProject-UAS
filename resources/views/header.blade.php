<header class="header header-fixed navbar">
    <div class="brand">
        <a href="javascript:;" class="ti-menu off-left visible-xs" data-toggle="offscreen" data-move="ltr"></a>
        <a href="{{ url('dashboard') }}" class="navbar-brand"> <img src="{{ asset('assets/img') }}/wilogo.png" alt=""> <span class="heading-font">BelajarAPI</span> </a>
    </div>
    <ul class="nav navbar-nav navbar-right">
        <li class="notifications dropdown">
            <a href="javascript:;" data-toggle="dropdown"> <i class="ti-bell"></i>
                <div class="badge badge-top bg-danger animated flash"><span>1</span> </div></a>
            <div class="dropdown-menu animated fadeInRight">
                <div class="panel panel-default no-m">
                    <div class="panel-heading small"><b>Notifications</b></div>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="">
                                <div class="pull-left mt5 mr15">
                                    <div class="circle-icon bg-alert"> <i class="ti-info"></i> </div>
                                </div>
                                <div class="m-body"> <span>Welcome to notification</span> <span class="time small">{{ Carbon\Carbon::now()->subHour(1)->diffForHumans() }}</span> </div>
                            </a>
                        </li>
                    </ul>
                    <div class="panel-footer"> <a href="{{ url('notification') }}">See all notifications</a> </div>
                </div>
            </div>
        </li>
        <li class="off-right"> <a href="javascript:;" data-toggle="dropdown"><img src="{{ asset('assets/img/profile/default.jpg') }}" class="header-avatar img-circle" alt="user" title="user"> <span class="hidden-xs ml10">@if(Auth::check()){{Auth::user()->name}}@endif</span> <i class="ti-angle-down ti-caret hidden-xs"></i> </a>
            <ul class="dropdown-menu animated fadeInRight">
                <li> <a href="{{ url('account/profile') }}">Profile</a> </li>
                <li> <a href="javascript:;">Help</a> </li>
                <li> <a href="{{ url('logout') }}">Logout</a> </li>
            </ul>
        </li>
    </ul>
</header>
