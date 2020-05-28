<div class="header-section">
    <a class="toggle-btn  menu-collapsed"><i class="fa fa-bars"></i></a>
    <div class="menu-right">
        <div class="profile_details" style="height: 64px;">		
            <div class="col-md-4 serch-part">
                <div id="sb-search" class="sb-search">
                    <form action="#" method="post">
                        <input class="sb-search-input" placeholder="Search" type="search" name="search" id="search">
                        <input class="sb-search-submit" type="submit" value="">
                        <span class="sb-icon-search"> </span>
                    </form>
                </div>
            </div>
            <script>
                new UISearch( document.getElementById( 'sb-search' ) );
            </script>
            <div class="col-md-4 player">
                <div class="audio-player">
                    <audio id="audio-player"  controls="controls">
                        <source src="media/Blue Browne.ogg" type="audio/ogg"></source>
                        <source src="media/Blue Browne.mp3" type="audio/mpeg"></source>
                        <source src="media/Georgia.ogg" type="audio/ogg"></source>
                        <source src="media/Georgia.mp3" type="audio/mpeg"></source>
                    </audio>
                </div>
                <script type="text/javascript">
                    $(function(){
                        $('#audio-player').mediaelementplayer({
                        alwaysShowControls: true,
                        features: ['playpause','progress','volume'],
                        audioVolume: 'horizontal',
                        iPadUseNativeControls: true,
                        iPhoneUseNativeControls: true,
                        AndroidUseNativeControls: true
                    });
                    });
                </script>
                <!--audio-->
                    <link rel="stylesheet" type="text/css" media="all" href="template_web/css/audio.css">
                    <script type="text/javascript" src="template_web/js/mediaelement-and-player.min.js"></script>
                    <!---->
                <!--//-->
                <ul class="next-top">
                    <li><a class="ar" href="#"> <img src="template_web/images/arrow.png" alt=""/></a></li>
                    <li><a class="ar2" href="#"><img src="template_web/images/arrow2.png" alt=""/></i></a></li>
                        
                </ul>	
            </div>
            <div class="col-md-4 login-pop">
                <ul class="list-inline">																		
                    @if (Auth::guest())
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else                                        
                        <li class="nav-item dropdown">
                            <a  class="dropdown-toggle-no-caret" href="#" id="accountDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-user-circle"></i>{{ Auth::user()->name }} <i class="fas fa-caret-down"></i></a>
                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="accountDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"> 
                                    Logout
                                    <form id="logout-form" action="{{ route('logout') }}" method="get" style="display: none;">
                                        {{ csrf_field() }}
                                    </form>
                                </a>
                            </div>
                        </li>
                    @endif									
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <div class="clearfix"></div>
</div>