@extends('admin.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{__('Albums')}}</h1>
    <!-- <a href="template_admin/#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    <a href="{{ route('admin.album.create') }}" class="btn btn-primary btn-sm align-self-center">
        <i class="fa fa-plus-square" aria-hidden="true"></i> {{__('Create')}}
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>{{__('ID')}}</th>
                <th>{{__('Name')}}</th>
                <th>{{__('Image')}}</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($albums as $album)
                <tr>
                    <tr>
                        <td>{{ $album->id }}</td>
                        <td>{{ $album->name }}</td>
                        <td><img style="width: 30%" src="{{$album->url}}"></td>
                        <td>
                            <a href="{{route('admin.album.edit', ['album_id' => $album->id])}}"><i class="fa fa-edit"></i></a>
                            <a href="{{route('admin.album.delete', ['album_id' => $album->id])}}"><i class="fa fa-trash" ></i></a>
                            <a href="{{route('admin.album.addsong', ['album_id' => $album->id])}}"><i class="fa fa-plus-square" ></i></a>
                        </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection