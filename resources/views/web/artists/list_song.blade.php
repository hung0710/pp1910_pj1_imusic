@extends('web.layout.app')

@section('content')
<div class="member-entry info">
    <div class="member-details">
        <a href="#" class="member-img">
            <img style="width: 10%" src="{{$artistses->url }}" class="img-rounded" alt=" ">
        </a>
        <h4>
            <a href="{{route('artists.songs', ['artists_id' => $artistses->id])}}" class="name"><p>Name: {{$artistses->name}}</p></a>
        </h4>
        <div class="singer_profile" style="margin-bottom: 0px; overflow: hidden; height: auto;">
            <div class="fram_select">
                <div class="tile_box_key">
                    <h2><a title="Tiểu sử">Tiểu sử</a></h2>
                </div>
                <div class="singer_profile_content">
                    <div class="row info-list">
                        <div class="col-lg-10">
                            <p>Information: {{$artistses->information}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('web.layout.list')

@endsection