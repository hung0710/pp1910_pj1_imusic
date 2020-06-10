@extends('web.layout.app')
@section('content')
	<div class="container">
		<div class="row">
			<table class="table table-hover">
				<thead>
					<tr>
						<td colspan="6"><h3><a href="">{{__('All Songs')}}</a></h3></td>
					</tr>
					<tr style="background-color: #2E8B57;">
						<td style="color: white;font-weight: bold;">{{__('Song')}}</td>
						<td style="color: white;font-weight: bold;">{{__('Audio')}} </td>
						<td style="color: white;font-weight: bold;">{{__('Artists')}}</td>
						<td style="color: white;font-weight: bold;">{{__('Category')}}</td>
					</tr>
				</thead>
				<tbody>
					@foreach($v_song as $song)
						<tr>
							<td><a href="{{ URL ::to('allsong/'.$song->id)}}">{{ $song->name }}</td>
							<td >
								<audio id="audio-player{{$song->id}}"  controls>	
									<source src="{{ $song->url}}" type="audio/mpeg">
								</audio>
							</td>
							<td>{{ $song->artists->name }}</td>
							<td>{{ $song->category->title }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $v_song->render() !!}
		</div>
	</div>
@stop