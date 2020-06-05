@extends('web.layout.app')

@section('content')
<div class="left-title-text">
    <h3>Contact Us</h3>
</div>
    <section class="contact-us">
        <div class="container">		
            <div class="row">				
                <div class="col-lg-6 col-md-12 col-12">
                    <div class="contact-heading">	
                        <h1>Write To Us</h1>
                    </div>
                    <div class="contact-left1">
                        <form id="contact-form" action="{{route('contact')}}" method="post">
                        @csrf
                        @if(Session::has('success'))
                        <div class="alert alert-success">
                            {{ Session::get('success') }}
                        </div>
                        @endif
                            <div class="row">					
                                
                                    <div class="form-group">
                                        <p class="your-para">Name:</p>
                                        <input type="text" name="name" class="video-form" id="name" placeholder="Your Name">							
                                    </div>
                                    <div class="form-group">
                                        <p class="your-para">Email:</p>
                                        <input type="email" name="email" class="video-form" id="email" placeholder="Your Email">							
                                    </div>
                                    <div class="form-group">
                                        <p class="your-para">Message:</p>
                                        <textarea class="text-area" name="content" id="content" placeholder="Type Message"></textarea>						
                                    </div>
                                <div class="in-right">
                                    <button type="submit" class="contact-btn btn-link">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>			
    <!--contact-us end-->
@endsection