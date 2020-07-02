@extends('admin.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Songs</h1>
    <!-- <a href="template_admin/#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    <a href="{{ route('admin.song.create') }}" class="btn btn-primary btn-sm align-self-center">
        <i class="fa fa-plus-square" aria-hidden="true"></i> {{__('Create')}}
    </a>
</div>
<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>{{__('ID')}}</th>
                <th>{{__('Name')}}</th>
                <th>{{__('URL')}}</th>
                <th>{{__('Musician')}}</th>
                <th>{{__('Artists')}}</th>
                <th>{{__('Category')}}</th>
                <th>{{__('Lyrics')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($songs as $song)
                <tr>
                    <td>{{ $song->id }}</td>
                    <td>{{ $song->name }}</td>
                    <td>{{ $song->url }}</td>
                    <td>{{ $song->singer }}</td>
                    <td>{{ $song->artists->name }}</td>
                    <td>{{ $song->category->title }}</td>
                    <td>{{ $song->lyrics }}</td>
                    <td>
                        <a href="{{route('admin.song.edit', ['song_id' => $song->id])}}"><i class="fa fa-edit"></i></a>
                        <a href="{{route('admin.song.delete', ['song_id' => $song->id])}}"><i class="fa fa-trash" ></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {!! $songs->render() !!}
</div>
@endsection