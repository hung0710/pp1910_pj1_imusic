<div class="music-right">
    <!--/video-main-->
    <div class="video-main">
        <div class="video-record-list">
            <div id="jp_container_1" class="jp-video jp-video-270p" role="application" aria-label="media player">
                <div class="jp-type-playlist">
                    <div>
                        <h3 class="tittle">{{__('Audio')}} <span class="new">Hot</span></h3>
                        <div class="clearfix"></div>
                    </div>
                    <div class="jp-playlist">
                        <ul style="display: block;">
                            @foreach($songs as $song)
                                <div>
                                    <a href="{{route('song.show', ['song_id' => $song->id])}}" class="jp-playlist-item" tabindex="0">{{$song->name}} <span class="jp-artist">by {{$song->artists->name}}</span></a>
                                </div>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- script for play-list -->
    <link href="{{url('template_web/css/jplayer.blue.monday.min.css')}}" rel="stylesheet" type="text/css">
</div>