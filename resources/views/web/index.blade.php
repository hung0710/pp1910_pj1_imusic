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
        <!--//End-albums-->
        <!--//discover-view-->
        @include('web.layout.list_artists')
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