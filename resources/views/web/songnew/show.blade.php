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
    </div>

    @include('web.songnew.comment')
</div>           
@endsection