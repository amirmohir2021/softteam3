@extends('softteam.master')
@section('connect')
            <!-- Hero Start -->
            <div class="hero">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2>Creative & Responsive</h2>
                            <h2><span>HTML5</span> Template</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare</p>
                            <a class="btn" href="https://htmlcodex.com/bootstrap-agency-template">Download Now</a>
                        </div>
                        <div class="col-md-6">
                            <img src="{{asset('assets/img/hero.png')}}" alt="Image">
                        </div>
                    </div>
                </div>
            </div>
            <!-- Hero End -->


            <!-- About Start -->
            <div class="about">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div id="video-section">
                                <div class="youtube-player" data-id="jssO8-5qmag"></div>

                                <script>
                                    document.addEventListener("DOMContentLoaded",
                                        function() {
                                            var div, n,
                                                v = document.getElementsByClassName("youtube-player");
                                            for (n = 0; n < v.length; n++) {
                                                div = document.createElement("div");
                                                div.setAttribute("data-id", v[n].dataset.id);
                                                div.innerHTML = labnolThumb(v[n].dataset.id);
                                                div.onclick = labnolIframe;
                                                v[n].appendChild(div);
                                            }
                                        });

                                    function labnolThumb(id) {
                                        var thumb = '<img src="{{asset('assets/img/poster.jpg')}}">',
                                            play = '<div class="play"></div>';
                                        return thumb.replace("ID", id) + play;
                                    }

                                    function labnolIframe() {
                                        var iframe = document.createElement("iframe");
                                        var embed = "https://www.youtube.com/embed/ID?autoplay=1";
                                        iframe.setAttribute("src", embed.replace("ID", this.dataset.id));
                                        iframe.setAttribute("frameborder", "0");
                                        iframe.setAttribute("allowfullscreen", "1");
                                        this.parentNode.replaceChild(iframe, this);
                                    }
                                </script>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <h2 class="section-title">Learn About Us</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->


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


            <!-- FAQs Start -->
            <div class="faqs">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <h2 class="section-title">Frequently Asked Questions</h2>
                            <div id="accordion">
                                <div class="card">
                                @foreach(\App\Models\Savol::all() as $value)
                                    <div class="card-header">

                                        <a class="card-link collapsed" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                                           {{$value->savol}}
                                        </a>
                                    </div>
                                    @endforeach
                                      @foreach(\App\Models\Javob::all() as $value)
                                    <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                        <div class="card-body">
                                           {{$value->javob}}
                                        </div>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <!-- FAQs End -->


            <!-- Testimonial Start -->
            <div class="testimonial">
                <div class="container">
                    <div class="section-header">
                        <h2>Clients Review</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium ornare velit non</p>
                    </div>

                    <div class="row">
                           @foreach(\App\Models\Client::all() as $value)
                        <div class="col-12">
                            <div class="testimonial-slider-nav">
                                <div class="slider-nav"><img src="{{'client/'.$value->photo}}" alt="Testimonial"></div>

                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <div class="testimonial-slider">
                                <div class="slider-item">
                                    <h3>{{$value->name}}</h3>
                                    <h4>{{$value->project}}</h4>
                                    <p>{{$value->comment}}</p>

                                    @endforeach
                                </div>


                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <!-- Testimonial End -->


            <!-- News Start -->
            <div class="news">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <img src={{asset('assets/img/news.jpg')}}"" alt="Image">
                        </div>
                        <div class="col-md-6">
                            <h2 class="section-title">Read Latest News</h2>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                            </p>
                            <p>
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit.
                            </p>
                            <a class="btn" href="">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- News End -->


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
