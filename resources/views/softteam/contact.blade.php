@extends('softteam.master')
@section('connect')

    <!-- Page Header Start -->
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h2>Contact Us</h2>
                </div>
                <div class="col-12">
                    <a href="">Home</a>
                    <a href="">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Contact Start -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2 class="section-title">Get In Touch</h2>
                    <div class="contact-info">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3019.8657333246992!2d-73.95447848459209!3d40.80894417932154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f613438663b5%3A0xce20073c8862af08!2sW%20123rd%20St%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1589004464646!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                        <h3>How to reach us:</h3>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor.
                        </p>
                        <h3>Mobile <span>+012 345 6789</span></h3>
                        <h3>E-mail <span>contact@example.com</span></h3>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="editor-info">
                        <h2 class="section-title">Contact Persons</h2>
                        <div class="editor-item">
                            @foreach(\App\Models\Contact::all() as $value)
                            <div class="editor-img">
                                <img src="{{'contact/'.$value->file}}" alt="Editor Image">
                            </div>
                            <div class="editor-text">
                                <p>{{$value->name}}</p>
                                <a href="">{{$value->email}}</a>
                            </div>
                        </div>
                        @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <div id="contact" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="col-md-8 col-md-offset-2 section-title">
                    <h2>Uyga yetkazish Ucun</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis sed dapibus leo nec ornare diam. Sed commodo nibh ante facilisis bibendum dolor apibus lornare diam commodo nibh.</p>
                </div>
                <div class="col-md-8 col-md-offset-2">

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <strong>Whoops!</strong> There were some problems with your input.<br><br>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{route('clien.store')}}" method="POST" >
                        @csrf

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="name" name="name" class="form-control" placeholder="Ism" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="email" id="email" name="email"  class="form-control" placeholder="Email" required>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="phone" name="phone"  class="form-control" placeholder="Telefon Nomer" required>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" id="address" name="address"  class="form-control" placeholder="Address" required>
                                </div>
                            </div>
                        </div>


                        <input type="submit" class="btn btn-primary" value="Saqlash1">
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>


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
