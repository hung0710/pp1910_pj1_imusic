@extends ('web.layout.app')
@section('content')
<div class="inner-content single">
    <!--/music-right-->
    
    <div class="tittle-head">
        <h3 class="tittle">{{$songs->name}} <span class="new">{{$songs->artists->name}}</span></h3>
        <div class="clearfix"> </div>
    </div>
        <audio  controls autoplay>
            <source src="{{ $songs->url}}" type="audio/mpeg">
        </audio>
        <div class="col-md-12" >
            <div class="col-md-6">
                <p></p>
                <p>Singer :<a href="{{route('artists.songs',['artists_id' => $songs->artists->id])}}">{{$songs->artists->name}}</a></p>
                <p>Musician :<b>{{$songs->singer}}</b></p>
                <p>Category :<b>{{$songs->category->title}}</b></p>
                <p>Lyrics :<b>{{$songs->name}}</b></p>
                <div class="col-lg-10">
                    {{ substr(strip_tags($songs->lyrics), 0, 90) }}
                    @if (strlen($songs->lyrics) > 90)
                        <span id="dots" style="display: none;">...</span>
                        <span id="more">{{ substr($songs->lyrics, 90) }}</span>
                    @endif
                    <a href="#" id="myBtn">Read Less</a>
                </div>
            </div>
            @include('web.songnew.list_track')
        </div>
    </div>
    @include('web.songnew.comment')
</div>           
@endsection