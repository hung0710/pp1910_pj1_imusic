@extends('admin.app')

@section('content')
    
<h4>{{__('Album') }}:<span class="text-primary">{{ $album->name }}</span></h4>
<div class="col-md-7" style="float: left">
    <h4>{{__('List Song Of Album') }}:</h4>
    <table class="table table-hover1">
        <thead>
            <tr>
                <th>{{__('Song name') }}</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td><a href="#"></a></td>
                <td>
                    <div class="pull-right">

                    </div>
                </td>
            </tr>
        </tbody>
    </table>
</div>
<div class="col-md-5" style="float: right">
    <h4>{{__('List Audio') }}:</h4>
    <table class="table table-hover2">
        <thead>
            <tr>
                <th>{{__('Song name') }}</th>
                <th>&nbsp;</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($songs as $song )
            <tr>
                <td><a href="{{ URL ::to('allsong/'.$song->id)}}">{{ $song->name }}</a></td>
                <td>
                    <div class="pull-right">
                        <input type="button" id="but1" value="import">
                    </div>
                </td>
            </tr>
            @endforeach
            <tr>
                <td>{{ $songs->links() }}</td>
            </tr>
        </tbody>
    </table>
</div>
@endsection
