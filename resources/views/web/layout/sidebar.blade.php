<div class="left-side sticky-left-side">
    <div class="logo">
        <h1><a href="{{route('index')}}">Music<span>c</span></a></h1>
    </div>
    <div class="logo-icon text-center">
        <a href="{{route('index')}}">M </a>
    </div>
    <div class="left-side-inner">
        <ul class="nav nav-pills nav-stacked custom-nav">
            <li class="active"><a href="{{route('index')}}"><i class="lnr lnr-home"></i><span>Home</span></a></li>
            <li><a href="{{route('artists.index')}}"><i class="lnr lnr-users"></i> <span>Artists</span></a></li>
            <li><a href="{{route('album.index')}}"><i class="lnr lnr-music-note"></i> <span>Albums</span></a></li>
            <li><a href="blog.html"><i class="lnr lnr-book"></i><span>Blog</span></a></li>
            <li><a href="typography.html"><i class="lnr lnr-pencil"></i> <span>Typography</span></a></li>
            <li class="menu-list"><a href="#"><i class="lnr lnr-heart"></i>  <span>My Favourities</span></a> 
                <ul class="sub-menu-list">
                    <li><a href="{{route('allsong.index')}}">All Songs</a></li>
                </ul>
            </li>
            <li class="menu-list"><a href="contact.html"><i class="fa fa-thumb-tack"></i><span>Contact</span></a>
                <ul class="sub-menu-list">
                    <li><a href="{{route('contact')}}">Location</a> </li>
                </ul>
            </li>     
        </ul>
    </div>
</div>