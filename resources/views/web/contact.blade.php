@extends('web.layout.app')

@section('content')
<div class="contact">
    <div class="contact-left">
    <h3>Contact Us With <span>Any questions</span></h3>
        <form id="contact-form" action="{{route('contact')}}" method="post">
                @csrf
                @if(Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
                @endif
            <div class="in-left">
                <p class="your-para">Name:</p>
                <input type="name" name="name" class="video-form" id="name" placeholder="Your Name">
                <p class="your-para">Your Mail :</p>
                <input type="email" name="email" class="video-form" id="email" placeholder="Your Email">
            </div>
            <div class="in-right">
                <p class="your-para">Message:</p>
                <textarea class="text-area" name="content" id="content" placeholder="Type Message"></textarea>
                <input type="submit" value="Submit">
            </div>
        </form>
        <div class="clearfix"> </div>
    </div>
    <div class="contact-right">
        <p class="phn">+84999999999</p>
        <p class="phn-bottom">4578 Marmora
                <span>Road, Glasgow D04 89GR</span></p>
        <p class="lom">Nullam ac urna velit. Pellentesque in arcu tortor. 
            Pellentesque nec est et elit varius pulvinar eget vitae sapien. 
            Aenean vehicula accumsan gravida.</p>
    </div>
    <div class="clearfix"> </div>
    <div class="contact-left1">
        
    </div>
    <div class="contact-right1">
        <h3><span>Social Websites</span></h3>
        <h4>Nullam ac urna velit pellentesque in <label>arcu tortor 
            Pellentesque nec</label></h4>
        <p>Nullam ac urna velit. Pellentesque in arcu tortor. 
            Pellentesque nec est et elit varius pulvinar eget vitae sapien. 
            Aenean vehicula accumsan gravida. Cum sociis natoque penatibus
            et magnis dis parturient montes, nascetur ridiculus mus. Phasellus 
            et lectus in urna consequat consectetur ut eget</p>
                <ul class=" side-icons con">
                        <li><a class="fb" href="#"></a></li>
                        <li><a class="twitt" href="#"></a></li>
                        <li><a class="goog" href="#"></a></li>
                        <li><a class="drib" href="#"></a></li>
                    </ul>
    </div>
    <div class="clearfix"> </div>
</div>
    <!--contact-us end-->
@endsection