@extends('admin.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{__('Edit')}}</h1>
</div>

<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{route('admin.song.update',['song_id' => $song->id])}}" enctype="multipart/form-data">
    @csrf
    {{-- name --}}
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">{{__('Song')}}</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="name" value="{{ $song->name }}" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    {{-- URL --}}
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">URL</label>
        <div class="input-group col-lg-6 col-md-9 col-sm-12">
            <input class="image_file" type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="url" id="url">
        </div>
    </div>
    {{-- musician --}}
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="singer">{{__('Musician')}} </label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="singer" value="{{ $song->singer }}" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    {{-- Artist --}}
    <div class="form-group">
        <label for="select_artistses" class="control-label col-md-3 col-sm-3 col-xs-12">{{__('Artists')}}</label>
        <select class="form-control col-md-7 col-xs-12" id="select_artistses" name="artists_id">
            @foreach ($artistses as $artists)
            <option  value="{{$artists->id}}" @if ($artists->id == old('artists_id'))) selected @endif>{{$artists->name}}</option>
            @endforeach
        </select>
        @if ($errors->has('artists_id'))
        <span class="help-block text-danger"><strong>{{ $errors->first('artists_id') }}</strong></span>
        @endif
    </div>
    {{-- category_id --}}
    <div class="form-group">
        <label for="select_categories" class="control-label col-md-3 col-sm-3 col-xs-12">{{__('Category')}}</label>
        <select class="form-control col-md-7 col-xs-12" id="select_categories" name="category_id">
            @foreach ($categories as $category)
            <option  value="{{$category->id}}" @if ($category->id == old('category_id'))) selected @endif>{{$category->title}}</option>
            @endforeach
        </select>
        @if ($errors->has('category_id'))
        <span class="help-block text-danger"><strong>{{ $errors->first('category_id') }}</strong></span>
        @endif
    </div>
    {{-- Lyrics --}}
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lyrics">{{__('Lyrics')}}</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea name="lyrics" class="form-control col-md-7 col-xs-12">{{ $song->lyrics }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="reset">{{__('Reset')}}</button>
            <button type="submit" class="btn btn-success">{{__('Submit')}}</button>
        </div>
    </div>
</form>
@endsection