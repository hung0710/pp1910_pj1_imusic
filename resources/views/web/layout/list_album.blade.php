<div class="albums second">
    <div class="tittle-head">
        <h3 class="tittle">{{__('Album List')}}</h3>
        <div class="clearfix"> </div>
    </div>
    <div class="grid-container" style="display:grid; grid-template-columns:25% 25% 25% 25%;">
        @foreach($albums as $album)
        <div class="grid-item" style="padding : 10px;">
            <a href="{{route('album.songs', ['album_id' => $album->id])}}"><img src="{{$album->url}}" title="album-name" width="100%"></a>
            <a href="{{route('album.songs', ['album_id' => $album->id])}}"><p>{{$album->name}}</p></a>
        </div>
        @endforeach
    </div>
</div>
<div class="clearfix"></div>