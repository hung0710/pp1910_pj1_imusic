@extends('admin.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{__('Album Detail')}}</h1>
    <!-- <a href="template_admin/#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    <a href="{{ route('admin.albumdetail.create') }}" class="btn btn-primary btn-sm align-self-center">
        <i class="fa fa-plus-square" aria-hidden="true"></i> {{__('Create')}}
    </a>
</div>

<div class="table-responsive">
    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
            <tr>
                <th>{{__('ID')}}</th>
                <th>{{__('Album')}}</th>
                <th>{{__('Song')}}</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($albumdetails as $albumdetail)
                <tr>
                    <tr>
                        <td>{{ $albumdetail->id }}</td>
                        <td>{{ $albumdetail->album->name}}</td>
                        <td>{{ $albumdetail->song->name }}</td>
                        <td>
                    <a href="{{route('admin.albumdetail.edit', ['albumdetail_id' => $albumdetail->id])}}"><i class="fa fa-edit"></i></a>
                    <a href="{{route('admin.albumdetail.delete', ['albumdetail_id' => $albumdetail->id])}}"><i class="fa fa-trash" ></i></a>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection