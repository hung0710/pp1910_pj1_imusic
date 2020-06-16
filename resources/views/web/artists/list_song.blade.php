@extends('web.layout.app')

@section('content')
<div class="member-entry info">
    <div class="member-details">
        <a href="#" class="member-img">
            <img style="width: 10%" src="{{$artistses->url }}" class="img-rounded" alt=" ">
        </a>
        <h4>
            <a href="{{route('artists.songs', ['artists_id' => $artistses->id])}}" class="name"><p>{{__('Name')}}: {{$artistses->name}}</p></a>
        </h4>
        <div class="singer_profile" style="margin-bottom: 0px; overflow: hidden; height: auto;">
            <div class="fram_select">
                <div class="tile_box_key">
                    <h2><a title="Tiểu sử">{{__('Information')}}</a></h2>
                </div>
                <div class="singer_profile_content">
                    <div class="row info-list">
                        <div class="col-lg-10">
                            {{ substr(strip_tags($artistses->information), 0, 90) }}
                            @if (strlen($artistses->information) > 90)
                                <span id="dots" style="display: none;">...</span>
                                <span id="more">{{ substr($artistses->information, 90) }}</span>
                            @endif
                            <a href="#" id="myBtn">Read Less</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="col-sm-12">
    <div class="tittle-head">
        <h3 class="tittle">{{__('List Song')}} <span class="new">View</span></h3>
        <a href="#"><h4 class="tittle two">See all</h4></a>
        <div class="clearfix"> </div>
    </div>
    <div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
        <div class="jp-type-playlist">
            <div class="jp-playlist">
                <ul style="display: block;">
                    @foreach($songOfArtists as $song)
                        <li class="jp-playlist-current">
                            <div>
                                <a href="{{ URL ::to('allsong/'.$song->id)}}" class="jp-playlist-item jp-playlist-current" tabindex="0">{{ $song->name }} <span class="jp-artist"></span></a>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            {!! $songOfArtists->render() !!}
        </div>
    </div>
</div>

@endsection