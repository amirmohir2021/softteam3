@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">A'zolar</h1></div>
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


                    <form action="{{route('admin.servisec.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Xizmat Nomi</label></br>
                            <input type="text" name="title" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Ma'lumot</label></br>
                            <input type="text" name="body" id="name" class="form-control" required>
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
