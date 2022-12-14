@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Portfolio</h1></div>
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


                    <form action="{{route('admin.ourportfolio.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group">
                            <label for="name">Name</label></br>
                            <input type="text" name="title" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <a>
                                <select class="form-select" aria-label="Default select example">
                                    @foreach(\App\Models\Select::all() as $key =>$value)
                                        <option selected > {{$value->name}}</option>
                                    @endforeach
                            </select>
                            </a>
                        </div>
                        <div class="form-group">
                           <label for="">Select Image File to Upload:</label>
                            <input type="file" name="file">
                        </div>

                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
