@extends('web.layout.app')

@section('content')
<div class="member-entry info">
    <div class="member-details">
        <a href="#" class="member-img">
            <img style="width: 20%" src="{{$artistses->url }}" class="img-rounded" alt=" ">
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
                            {{ substr(strip_tags($artistses->information), 0, 100) }}
                            @if (strlen($artistses->information) > 100)
                                <span id="dots" style="display: none;">...</span>
                                <span id="more">{{ substr($artistses->information, 0) }}</span>
                            @endif
                            <button id="myBtn">Read Less</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@include('web.layout.list')

@endsection