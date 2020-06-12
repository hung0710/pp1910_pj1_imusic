@extends('web.layout.app')
@section('content')
<div class="single_left" style="width: 45%;">
    <div id="jp_container_1">
        <div class="jp-type-playlist1">
            <div>
                <div class="col-md-12 player" style="background: #777; width:100%;">
                    <div class="audio-player" id="jquery_jplayer_1">
                        <audio id="audioPlayer"  controls="controls">
                            <source src="" type="audio/mpeg"></source>
                        </audio>
                    </div>
                    <script type="text/javascript">
                        $(function(){
                            $('#audioPlayer').mediaelementplayer({
                                alwaysShowControls: true,
                                features: ['playpause','progress','volume'],
                                audioVolume: 'horizontal',
                                iPadUseNativeControls: true,
                                iPhoneUseNativeControls: true,
                                AndroidUseNativeControls: true
                            });
                        });
                    </script>
                    <ul class="next-top">
                        <li><a class="ar" href="#" onclick="previousSong()"> <img src="{{url('web/images/arrow.png')}}" alt="" /></a></li>
                        <li><a class="ar2" href="#" onclick="nextSong()"><img src="{{url('web/images/arrow2.png')}}" alt="" /></i></a></li>
                    </ul>
                </div>
            </div>
            
            <div>
                <div class="jp-playlist" style="margin-top : 20px">
                    <ul style="display: block;">
                        
                        
                    </ul>
                </div>
            </div>
            
        </div>
    </div>
</div>

@endsection