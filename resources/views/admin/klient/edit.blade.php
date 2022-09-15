@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Tahrirlash</h1></div>
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


                    <form action="{{route('admin.client.update', $clients->id)}}" method="POST" accept-charset="UTF-8">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Ism Familya</label></br>
                            <input type="text" name="name" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Proyekt Nomi</label></br>
                            <input type="text" name="project" id="name" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="name">Isoh</label></br>
                            <input type="text" name="comment" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="">Select Image File to Upload:</label>
                            <input type="file" name="photo">
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
