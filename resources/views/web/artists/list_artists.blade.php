<div class="albums second">
    <div class="tittle-head">
        <h3 class="tittle">{{__('Artists List')}}</h3>
        <div class="clearfix"> </div>
    </div>
    <div class="grid-container" style="display:grid; grid-template-columns:25% 25% 25% 25%;">
        @foreach($artists as $artists)
        <div class="grid-item" style="padding : 10px;">
            <a href="{{route('artists.songs', ['artists_id' => $artists->id])}}"><img src="{{$artists->url}}" title="artists-name" width="100%"></a>
            <h4>
            <a href="{{route('artists.songs', ['artists_id' => $artists->id])}}"><p>{{$artists->name}}</p></a>
        </h4>
        </div>
        @endforeach
    </div>
</div>
<div class="clearfix"></div>