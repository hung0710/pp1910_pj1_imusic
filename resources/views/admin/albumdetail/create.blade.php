@extends('admin.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Album-Detail</h1>
    <!-- <a href="template_admin/#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
    <a href="{{ route('admin.albumdetail.create') }}" class="btn btn-primary btn-sm align-self-center">
        <i class="fa fa-plus-square" aria-hidden="true"></i>  {{ __('Create')}}
    </a>
</div>
@if (session('success'))
<div class="alert alert-success" role="alert" style="text-align: center;">
    {{ session('success') }}
</div>
@endif
<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{route('admin.albumdetail.create')}}" enctype="multipart/form-data">
    @csrf
    {{-- albums --}}
    <div class="form-group">
        <label for="select_albums" class="control-label col-md-3 col-sm-3 col-xs-12"> {{ __('Album')}}</label>
        <select class="form-control col-md-7 col-xs-12" id="select_categories" name="album_id">
            @foreach ($albums as $album)
            <option  value="{{$album->id}}" @if ($album->id == old('album_id')) selected @endif>{{$album->name}}</option>
            @endforeach
        </select>
        @if ($errors->has('album_id'))
        <span class="help-block text-danger"><strong>{{ $errors->first('album_id') }}</strong></span>
        @endif
    </div>
    {{-- songs --}}
    <div class="form-group">
        <label for="select_songs" class="control-label col-md-3 col-sm-3 col-xs-12"> {{ __('Song')}}</label>
        <select class="form-control col-md-7 col-xs-12" id="select_categories" name="song_id">
            @foreach ($songs as $song)
            <option  value="{{$song->id}}" @if ($song->id == old('song_id')) selected @endif>{{$song->name}}</option>
            @endforeach
        </select>
        @if ($errors->has('song_id'))
        <span class="help-block text-danger"><strong>{{ $errors->first('song_id') }}</strong></span>
        @endif
    </div>
    
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="reset"> {{ __('Reset')}}</button>
            <button type="submit" class="btn btn-success"> {{ __('Submit')}}</button>
        </div>
    </div>
</form>
@endsection