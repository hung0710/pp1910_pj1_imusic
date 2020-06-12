@extends('admin.app')

@section('content')
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800">{{__('Edit')}}</h1>
</div>
    <form id="demo-form2" method="post" action="{{route('admin.album.update', ['album_id'=> $album->id])}}" enctype="multipart/form-data">
        @csrf
        {{-- Name --}}
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="name">{{__('Name')}}<span class="required">*</span></label>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <input type="text" name="name" value="{{ $album->name }}" class="form-control col-md-7 col-xs-12">
            </div>
        </div>
        {{-- URL --}}
        <div class="form-group">
            <label class="control-label col-md-3 col-sm-3 col-xs-12">{{__('Image')}}</label>
            <div class="input-group col-lg-6 col-md-9 col-sm-12">
                <input class="image_file" type="file" class="custom-file-input" aria-describedby="inputGroupFileAddon01" name="url" id="url">
            </div>
        </div>
    <div class="ln_solid"></div>
    <div class="form-group">
        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
            <button class="btn btn-primary" type="reset">{{__('Reset')}}</button>
            <button type="submit" class="btn btn-success">{{__('Submit')}}</button>
        </div>
    </div>
</form>
@endsection