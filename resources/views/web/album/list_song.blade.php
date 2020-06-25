@extends('web.layout.app')
@section('content')
<div class="tittle-head">
    <div class="col-md-3">
        <a href="#" class="member-img">
            <img  src="{{$album->url }}" class="img-rounded" alt=" ">
        </a>
    </div>
    <div><h3 class="tittle">{{__('Album')}}: {{$album->name}}</h3></div>
    <div class="clearfix"> </div>
</div>
<div class="single_left" style="width: 45%;">
    <div id="jp_container_1" style="margin: 20px;">
        <div class="jp-type-playlist1">
            <div>
                <div class="col-md-12 player" style="background: #777; width:100%;">
                    <div class="audio-player" id="jquery_jplayer_1">
                        <audio id="audioPlayer"  controls autoplay>
                            <source id="srcAudio" src="{{  $songs[0]->url }}" type="audio/mpeg"></source>
                        </audio>
                    </div>
                    <script type="text/javascript">
                        $(function(){
                            $('#audioPlayer').mediaelementplayer({
                                alwaysShowControls: true,
                                features: ['playpause','progress','volume'],
                                audioVolume: 'horizontal',
                            });
                        });
                    </script>
                    <ul class="next-top">
                    <li><a class="ar" href="#" onclick="previousSong()"> <img1 src="{{url('template_web/images/arrow.png')}}" alt="" /></a></li>
                        <li><a class="ar2" href="#" onclick="nextSong()"><img1 src="{{url('template_web/images/arrow2.png')}}" alt="" /></i></a></li>
                    </ul>
                </div>
            </div>
            <div class="jp-type-playlist">
                <div class="jp-playlist">
                    <ul style="display: block;">
                    <?php $i = 1; ?>
                        @foreach($songs as $song)
                            <div>
                                <a href="{{route('song.show', ['song_id' => $song->id])}}" class="song-item @if($i == 1)jp-playlist-current1 @endif" tabindex="0">{{$i++}}.{{$song->name}} <span class="jp-artist">by {{$song->artists->name}}</span></a>
                            </div>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection