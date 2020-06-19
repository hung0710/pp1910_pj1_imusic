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
						<td style="color: white;font-weight: bold;"> </td>
						<td style="color: white;font-weight: bold;">{{__('Artists')}}</td>
						<td style="color: white;font-weight: bold;">{{__('Category')}}</td>
					</tr>
				</thead>
				<tbody>
					@foreach($songs as $song)
						<tr>
							<td><a href="{{ URL ::to('allsong/'.$song->id)}}">{{ $song->name }}</a></td>
							<td><a href="{{ URL ::to('allsong/'.$song->id)}}" class="fa fa-play"></a></td>
							<td><a href="{{route('artists.songs',['artists_id' => $song->artists->id])}}">{{ $song->artists->name }}</a></td>
							<td>{{ $song->category->title }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
			{!! $songs->render() !!}
		</div>
	</div>
@endsection