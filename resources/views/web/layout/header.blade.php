<div class="header-section">
    <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
    <div class="menu-right">
        <div class="profile_details" style="height: 64px;">		
            <div class="col-md-4 serch-part">
                <div id="sb-search" class="sb-search">
                    <form action="{{route('search')}}" method="get">
                        <input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"> </span>
                    </form>
                </div>
            </div>
            <script src="{{url('template_web/js/classie.js')}}"></script>
            <script src="{{url('template_web/js/uisearch.js')}}"></script>
            <script>
                new UISearch( document.getElementById( 'sb-search' ) );
            </script>
            <div class="col-md-4 player"></div>
            <div class="col-md-4 login-pop">
                <div id="loginpop">
                    @if(Auth::check())
                    <a id="loginButton" class=""><span>{{auth('web')->user()->name}} <i class="arrow glyphicon glyphicon-chevron-right"></i></span></a>
                    <div id="loginBox" style="display: none;">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="{{route('changepassword')}}">Change password</a></li>
                            <li class="list-group-item"><a href="{{route('logout')}}">Logout<i class="fa fa-sign-in"></i></a></li>
                        </ul>
                    </div>
                    @else
                    <a id="loginpop" href="{{route('login')}}"><span>Login<i class="arrow glyphicon glyphicon-chevron-right"></i></span></a>
                    <a id="loginpop" href="{{route('register')}}"><span><i class="fa fa-sign-in"></i></span></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>