@extends('softteam.master')

@section('connect')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Portfolio</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Portfolio</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Portfolio Start -->
    <div class="portfolio">
        <div class="container">
            <div class="section-header">
                <h2>Our Portfolio</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium ornare velit non</p>
            </div>
            <div class="row">
                <div class="col-12">
                    <ul id="portfolio-flters">
                       @foreach(\App\Models\Select::all() as $k => $value)
                           <li>{{$value->name}}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row portfolio-container">
                <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-des">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{\App\Models\Our::all()}}">
                            <a href="{{asset('assets/img/portfolio-1.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            @foreach(\App\Models\Our::all() as $key =>$value)
                            <a class="portfolio-title" href="#">{{$value->title}}</a>
                            @endforeach
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-dev">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets/img/portfolio-2.jpg')}}" alt="Portfolio Image">
                            <a href="{{asset('assets/img/portfolio-2.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="portfolio-title" href="#">Project Name Here</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item dig-mar">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets/img/portfolio-3.jpg')}}" alt="Portfolio Image">
                            <a href="{{asset('assets/img/portfolio-3.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="portfolio-title" href="#">Project Name Here</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-des">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets/img/portfolio-4.jpg')}}" alt="Portfolio Image">
                            <a href="{{asset('assets/img/portfolio-4.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="portfolio-title" href="#">Project Name Here</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-des">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets/img/portfolio-1.jpg')}}" alt="Portfolio Image">
                            <a href="{{asset('assets/img/portfolio-1.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="portfolio-title" href="#">Project Name Here</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-dev">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assetsimg/portfolio-2.jpg/')}}" alt="Portfolio Image">
                            <a href="{{asset('assets/img/portfolio-2.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="portfolio-title" href="#">Project Name Here</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item dig-mar">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets/img/portfolio-3.jpg')}}" alt="Portfolio Image">
                            <a href="{{asset('assets/img/portfolio-3.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="portfolio-title" href="#">Project Name Here</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-des">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets/img/portfolio-4.jpg')}}" alt="Portfolio Image">
                            <a href="{{asset('assets/img/portfolio-4.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="portfolio-title" href="#">Project Name Here</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-des">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets/img/portfolio-1.jpg')}}" alt="Portfolio Image">
                            <a href="{{asset('assets/img/portfolio-1.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="portfolio-title" href="#">Project Name Here</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-dev">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets/img/portfolio-2.jpg')}}" alt="Portfolio Image">
                            <a href="{{asset('assets/img/portfolio-2.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="portfolio-title" href="#">Project Name Here</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item dig-mar">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets/img/portfolio-3.jpg')}}" alt="Portfolio Image">
                            <a href="{{asset('assets/img/portfolio-3.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="portfolio-title" href="#">Project Name Here</a>
                        </figure>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 portfolio-item web-des">
                    <div class="portfolio-wrap">
                        <figure>
                            <img src="{{asset('assets/img/portfolio-4.jpg')}}" alt="Portfolio Image">
                            <a href="{{asset('assets/img/portfolio-4.jpg')}}" class="link-preview" data-lightbox="portfolio"><i class="fa fa-eye"></i></a>
                            <a href="#" class="link-details"><i class="fa fa-link"></i></a>
                            <a class="portfolio-title" href="#">Project Name Here</a>
                        </figure>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12 load-more">
                    <a class="btn" href="#">Load More</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio Start -->


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
