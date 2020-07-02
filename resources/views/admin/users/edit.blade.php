@extends('admin.app')

@section('content')
<form class="m-form m-form--fit m-form--label-align-right" method="post" action="{{route('admin.users.update', ['user' => $user->id])}}" enctype="multipart/form-data">
        @csrf
        @method('put')
    <div class="m-portlet__body">
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12" for="exampleInputEmail1">{{__('Name')}}</label>
            <div class="col-lg-6 col-md-9 col-sm-12">
            <input type="text" name="name" value="{{$user->name}}" class="form-control m-input" id="exampleInputEmail1">
            </div>
        </div>
    </div>
    <div class="m-portlet__body">
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12" for="exampleInputEmail1">{{__('Email')}}</label>
            <div class="col-lg-6 col-md-9 col-sm-12">
                <input type="email" name="email" value="{{ $user->email }}" class="form-control m-input" id="exampleInputEmail1">
            </div>
        </div>    
    </div>
    <div class="m-portlet__body">
        <div class="form-group m-form__group row">
            <label class="col-form-label col-lg-3 col-sm-12" for="exampleInputEmail1">{{__('Password')}}</label>
            <div class="col-lg-6 col-md-9 col-sm-12">
                <input type="password" name="password" class="form-control m-input" id="exampleInputEmail1">
            </div>
        </div>
    </div>
    <div class="m-portlet__foot m-portlet__foot--fit">
        <div class="m-form__actions">
            <div class="row">
                <div class="col-lg-9 ml-lg-auto">
                    <button type="submit" class="btn btn-primary mt-2">{{__('Save')}}</button>
                    <button type="reset" class="btn btn-secondary mt-2">{{__('Cancel')}}</button>
                </div>
            </div>
        </div>
    </div>
</form>
@endsection