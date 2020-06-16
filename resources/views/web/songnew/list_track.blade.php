<div class="col-md-4">
    <h3 ><a href="#">{{__('List Song')}}</a></h3>
    <div class="row">
        <div class="col-md-6"><hr style="margin: 0px;border-color: #698B22"></div>
    </div>
    <div class="row">
        <div class="col-md-6">
            <table class="table table-hover">
                <tbody>
                    @foreach($track as $_song =>$song) 
                        <tr>
                        <td><a href="{{ URL ::to('allsong/'.$song->id)}}">{{ $song->name }}</td>
                        </tr>
                    @endforeach 
                </tbody>
            </table>
            {!! $track->render() !!}
        </div>
    </div>
</div>