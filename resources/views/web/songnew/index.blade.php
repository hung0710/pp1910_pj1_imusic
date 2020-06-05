@extends('web.layout.app')
@section('content')
	<div class="container">
		<div class="row">
				<table class="table table-hover">
					<thead>
						<tr>
							<td colspan="6"><h3><a href="">BÀI HÁT MỚI</a></h3></td>
						</tr>
						<tr style="background-color: #2E8B57;">
							<td style="color: white;font-weight: bold;">Tên bài hát</td>
							<td style="color: white;font-weight: bold;">Link </td>
							<td style="color: white;font-weight: bold;">Ca sĩ</td>
						</tr>
					</thead>
					<tbody>
						@foreach($v_song as $song)
							<tr>
								<td>{{ $song->name }}</td>
								<td><a href="{{ URL ::to('allsong/'.$song->id)}}">{!! $song->url !!}</a></td>
								<td>{{ $song->singer }}</td>
							</tr>
						@endforeach
					</tbody>
				</table>
				{!! $v_song->render() !!}
		</div>
	</div>
@stop