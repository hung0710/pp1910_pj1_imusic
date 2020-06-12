@extends('web.layout.app')
@section('content')
<div class="inner-content">
    <div class="music-left">
        <!--banner-section-->
        @include('web.layout.banner')
        <!--//End-banner-->
        <!--albums-->
        <!-- pop-up-box --> 
        <link href="{{url('template_web/css/popuo-box.css')}}" rel="stylesheet" type="text/css" media="all">
        <script src="{{url('template_web/js/jquery.magnific-popup.js')}}" type="text/javascript"></script>
        <script>
            $(document).ready(function() {
                $('.popup-with-zoom-anim').magnificPopup({
                    type: 'inline',
                    fixedContentPos: false,
                    fixedBgPos: true,
                    overflowY: 'auto',
                    closeBtnInside: true,
                    preloader: false,
                    midClick: true,
                    removalDelay: 300,
                    mainClass: 'my-mfp-zoom-in'
                });
            });
        </script>		
        <!--//pop-up-box -->
        <div class="albums">
            <div class="tittle-head">
                <h3 class="tittle">New Releases <span class="new">New</span></h3>
                <a href="index.html"><h4 class="tittle">See all</h4></a>
                <div class="clearfix"> </div>
            </div>
            <div class="col-md-3 content-grid">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="template_web/images/v1.jpg" title="allbum-name"></a>
                <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
            </div>
            <div id="small-dialog" class="mfp-hide">
                <iframe src="https://player.vimeo.com/video/12985622"></iframe>

            </div>
            <div class="col-md-3 content-grid">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="template_web/images/v2.jpg" title="allbum-name"></a>

                <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
            </div>
            <div class="col-md-3 content-grid">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="template_web/images/v3.jpg" title="allbum-name"></a>

                <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
            </div>
            <div class="col-md-3 content-grid last-grid">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="template_web/images/v4.jpg" title="allbum-name"></a>
                <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
            </div>
            <div class="col-md-3 content-grid">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="template_web/images/v5.jpg" title="allbum-name"></a>

                <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
            </div>
            <div id="small-dialog" class="mfp-hide">
                <iframe src="https://player.vimeo.com/video/12985622"></iframe>

            </div>
            <div class="col-md-3 content-grid">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="template_web/images/v6.jpg" title="allbum-name"></a>

                <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
            </div>
            <div class="col-md-3 content-grid">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="template_web/images/v7.jpg" title="allbum-name"></a>

                <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
            </div>
            <div class="col-md-3 content-grid last-grid">
                <a class="play-icon popup-with-zoom-anim" href="#small-dialog"><img src="template_web/images/v8.jpg" title="allbum-name"></a>
                <a class="button play-icon popup-with-zoom-anim" href="#small-dialog">Listen now</a>
            </div>
            <div class="clearfix"> </div>
        </div>
        <!--//End-albums-->
        <!--//discover-view-->
        @include('web.artists.list_artists')
        @include('web.album.list_album')
        <!--//discover-view-->

        <!-- /w3l-agile-its -->
    </div>
    @include('web.layout.musicright')
    <!--//music-right-->
    <div class="clearfix"></div>
    <!-- /w3l-agile-its --> 
</div>
@endsection