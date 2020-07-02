<div class="response" style="width: 100%!important;">
    <h4>{{__('Responses')}}</h4>
    <div class="media-body">
        @foreach ($songs->comments as $comment)
        <div class="col-md-8">
            <img src="{{url('template_web/images/user.png')}}" class="img1" ><strong class="text-success">{{ $comment->users['name']}}</strong>
            <p id="content-comment{{ $comment->id }}">{{ $comment->content }}</p>
            <small class="text-muted">{{ $comment->created_at->diffForHumans() }}</small>
            <hr>
        </div>
        @endforeach
    </div>
    <!--//music-right-->
    @if (Auth::check())
    <div class="coment-form">
        <h4>{{__('Leave your comment')}}</h4>
        <form action="{{route('comments')}}" id="comment" method="post">
        @csrf
            <input type="hidden" name="song_id" id="song_id" value="{{$songs->id}}">
            <textarea id="content" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
            <input type="submit" id="submit" value="Submit">
        </form>
    </div>
    @else 
        <div class="comment">
            <a href="{{route('login')}}"><span> Login to comments</span></a>
        </div>
    @endif
</div>
<div class="clearfix"> </div>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script type="text/javascript">
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#comment').on('submit',function(q){
            q.preventDefault()
            $.ajax({
            type: "post",
            url: '/comments',
            data: {content:$('#content').val(),
                song_id:$('#song_id').val(),
                user_id:$('#user_id').val()},
            success: function(msg) {
                $('.media-body').load(location.href + " .media-body>*","");
            }
            });
        });
    </script>