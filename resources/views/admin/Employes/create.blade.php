@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Xodim yaratish</h1></div>
                </div>
                <hr>
                <div class="card-body">

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


                    <form action="{{route('admin.xodim.store')}}" method="POST" accept-charset="UTF-8">
                        @csrf
                        <div class="form-group">
                            <label for="name">Ism</label></br>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="surname">Family</label>
                            <input type="text" name="surname" id="surname" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="passport">Passport</label>
                            <input type="text" name="passport" id="passport" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="position">Lavozim</label>
                            <input type="text" name="position" id="position" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="phonenumber">Telefon raqam</label>
                            <input type="text" name="phonenumber" id="phonenumber" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="address">Manzil</label>
                            <input type="text" name="address" id="address" class="form-control" required>
                        </div>
                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
