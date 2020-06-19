@extends ('web.layout.app')
@section('content')
<div class="inner-content single">
    <!--/music-right-->
    
    <div class="tittle-head">
        <h3 class="tittle">{{$songs->name}} <span class="new">{{$songs->artists->name}}</span></h3>
        <div class="clearfix"> </div>
    </div>
        <div class="col-md-6 player" style="background: #777;">
            <div class="audio-player">
                <audio id="audio-player"  controls autoplay>
                    <source src="{{ $songs->url}}" type="audio/mpeg">
                </audio>
            </div>
            <script type="text/javascript">
                $(function(){
                    $('#audio-player').mediaelementplayer({
                    alwaysShowControls: true,
                    features: ['playpause','progress','volume'],
                    audioVolume: 'horizontal',
                    });
                });
            </script>
            <ul class="next-top">
                <li><a class="ar" href="#"></a></li>
                <li><a class="ar2" href="#"></a></li>
            </ul>	
        </div>
        <div class="col-md-12" >
            <div class="col-md-6">
                <p></p>
                <p>Singer :<a href="{{route('artists.songs',['artists_id' => $songs->artists->id])}}">{{$songs->artists->name}}</a></p>
                <p>Musician :<b>{{$songs->singer}}</b></p>
                <p>Category :<b>{{$songs->category->title}}</b></p>
                <p>Lytics :<b>{{$songs->lyrics}}</b></p>
            </div>
            @include('web.songnew.list_track')
        </div>
    <div class="response" style="width: 100%!important;">
        <h4>{{__('Responses')}}</h4>
        
        <div class="media response-info">
            <div class="media-left response-text-left">
                <!-- <a href="#">
                    <img class="media-object" src="{{url('template_web/images/c1.jpg')}}" alt="">
                </a>
                <h5><a href="#">Username</a></h5> -->
            </div>
            <div class="media-body response-text-right">
                <!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,There are many variations of passages of Lorem Ipsum available, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <ul>
                    <li>Sep 21, 2015</li>
                    <li><a href="single.html">Reply</a></li>
                </ul> -->
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
    <!-- /agileits -->
    <div class="clearfix"> </div>
    <!--//music-right-->
    
    <div class="coment-form">
        <h4>{{__('Leave your comment')}}</h4>
        <form action="#" method="post">
            <input type="text" value="Name " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
            <input type="email" value="Email (will not be published)*" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email (will not be published)*';}" required="">
            <input type="text" value="Website" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Website';}" required="">
            <textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
            <input type="submit" value="Submit Comment">
        </form>
    </div>
</div>
@endsection