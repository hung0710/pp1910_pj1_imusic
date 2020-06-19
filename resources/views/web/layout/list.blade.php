<div class="container">
		<div class="row">
			<table class="table table-hover">
				<thead>
					<tr>
						<td colspan="6"><h3><a href="">{{__('List Songs')}}</a></h3></td>
					</tr>
					<tr style="background-color: #2E8B57;">
						<td style="color: white;font-weight: bold;">{{__('Song')}}</td>
						<td style="color: white;font-weight: bold;">{{__('Audio')}} </td>
						<td style="color: white;font-weight: bold;">{{__('Artists')}}</td>
						<td style="color: white;font-weight: bold;">{{__('Category')}}</td>
					</tr>
				</thead>
				<tbody>
					@foreach($songs as $song)
						<tr>
							<td><a href="{{ URL ::to('allsong/'.$song->id)}}">{{ $song->name }}</td>
							<td >
								<audio id="audio-player"  controls>
									<source src="{{ $song->url }}" type="audio/mpeg"></source>
								</audio>
							</td>
							<td>{{ $song->artists->name }}</td>
							<td>{{ $song->category->title }}</td>
						</tr>
					@endforeach
				</tbody>
			</table>
		</div>
	</div>