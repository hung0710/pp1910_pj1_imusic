<div class="albums second">
    <div class="tittle-head">
        <h3 class="tittle">Artists List</h3>
        <div class="clearfix"> </div>
    </div>
    <div class="grid-container" style="display:grid; grid-template-columns:25% 25% 25% 25%;">
        @foreach($artists as $artists)
        <div class="grid-item" style="padding-left : 100px;">
            <a href="{{route('artists.songs', ['artists_id' => $artists->id])}}"><img src="{{$artists->url}}" title="album-name" width="100%"></a>
            <p>{{$artists->name}}</p>
        </div>
        @endforeach
    </div>
</div>
<div class="clearfix"></div>