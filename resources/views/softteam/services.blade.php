@extends('softteam.master')

@section('connect')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Our Services</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Services</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Service Start -->
    <div class="service">
        <div class="container-fluid">
            <div class="section-header">
                <h2>Our Services</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium ornare velit non</p>
            </div>

            <div class="row">
                @foreach(\App\Models\Servisec::all() as $value)
                <div class="col-lg-3 col-md-6">
                    <div class="service-item">
                        <h3>{{$value->title}}</h3>
                        <img src="{{'photo/'.$value->file}}" alt="Service">
                        <p>{{$value->body}}</p>
                    </div>
                </div>
                @endforeach

            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- Service Row Start -->
    <div class="service-row">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 d-md-none d-block">
                    <div class="service-row-img">
                        <img src="{{asset('assets/img/service-1.png')}}" alt="Service">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-row-text">
                        <h2 class="section-title">Web Design</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                        </p>
                        <a class="btn" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 d-md-block d-none">
                    <div class="service-row-img">
                        <img src="{{asset('assets/img/service-1.png')}}" alt="Service">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Row End -->


    <!-- Service Row Start -->
    <div class="service-row">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="service-row-img">
                        <img src="{{asset('assets/img/service-2.png')}}" alt="Service">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-row-text">
                        <h2 class="section-title">Web Development</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                        </p>
                        <a class="btn" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Row End -->


    <!-- Service Row Start -->
    <div class="service-row">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 d-md-none d-block">
                    <div class="service-row-img">
                        <img src="{{asset('assets/img/service-3.png')}}" alt="Service">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-row-text">
                        <h2 class="section-title">Web Security</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                        </p>
                        <a class="btn" href="">Read More</a>
                    </div>
                </div>
                <div class="col-md-6 d-md-block d-none">
                    <div class="service-row-img">
                        <img src="{{asset('assets/img/service-3.png')}}" alt="Service">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Row End -->


    <!-- Service Row Start -->
    <div class="service-row">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <div class="service-row-img">
                        <img src="{{asset('assets/img/service-4.png')}}" alt="Service">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="service-row-text">
                        <h2 class="section-title">Online Marketing</h2>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus.
                        </p>
                        <a class="btn" href="">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service Row End -->


    <!-- Call to Action Start -->
    <div class="call-to-action">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-9">
                    <h2>Get A Free HTML Template</h2>
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sit amet metus sit amet
                    </p>
                </div>
                <div class="col-md-3">
                    <a class="btn" href="https://htmlcodex.com/contact">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Call to Action End -->



@endsection
