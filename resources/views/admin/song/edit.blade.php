@extends('admin.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">Edit</h1>
</div>

<form id="demo-form2" data-parsley-validate class="form-horizontal form-label-left" method="post" action="{{route('admin.song.update',['song_id' => $song->id])}}" enctype="multipart/form-data">
    @csrf
    {{-- name --}}
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">Name<span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
        <input type="text" name="name" value="{{ $song->name }}" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    {{-- singer --}}
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="singer">Singer <span class="required">*</span></label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <input type="text" name="singer" value="{{ $song->singer }}" class="form-control col-md-7 col-xs-12">
        </div>
    </div>
    {{-- category_id --}}
    <div class="form-group">
        <label for="select_categories" class="control-label col-md-3 col-sm-3 col-xs-12">Category</label>
        <select class="form-control col-md-7 col-xs-12" id="select_categories" name="category_id">
            @foreach ($categories as $category)
            <option  value="{{$category->id}}" @if ($category->id == old('category_id'))) selected @endif>{{$category->title}}</option>
            @endforeach
        </select>
        @if ($errors->has('category_id'))
        <span class="help-block text-danger"><strong>{{ $errors->first('category_id') }}</strong></span>
        @endif
    </div>
    {{-- URL --}}
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12">URL</label>
        <div class="input-group col-lg-6 col-md-9 col-sm-12">
            <input class="image_file" type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="url" id="url">
        </div>
    </div>
    {{-- Lyrics --}}
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="lyrics">Lyrics</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea name="lyrics" class="form-control col-md-7 col-xs-12">{{ $song->lyrics }}</textarea>
        </div>
    </div>
    {{-- Artist --}}
    <div class="form-group">
        <label class="control-label col-md-3 col-sm-3 col-xs-12" for="artists">Artist</label>
        <div class="col-md-6 col-sm-6 col-xs-12">
            <textarea name="artists" class="form-control col-md-7 col-xs-12">{{ $song->artists }}</textarea>
        </div>
    </div>
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="reset">Reset</button>
            <button type="submit" class="btn btn-success">Submit</button>
        </div>
    </div>
</form>
@endsection