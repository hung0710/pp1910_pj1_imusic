<div class="col-md-4" style="float: right;">
    <h2>{{__('List Audio')}}</h2>
        @foreach($track as $_song =>$song)
            <p><a href="{{route('song.show', ['song_id' => $song->id])}}">{{ $song->name }}</a><span class=""> -- {{$song->artists->name}}</span></p>
        @endforeach 
    {!! $track->render() !!}
</div>