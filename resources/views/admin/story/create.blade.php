@extends('admin.master')
@section('content')

    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-10"><h1 class="card-title">Ishlanmalar</h1></div>
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


                    <form action="{{route('admin.story.store')}}" method="POST" accept-charset="UTF-8" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="name">Proyekt Nomi</label></br>
                            <input type="text" name="title" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Ma'lumotlar Qiqcha</label></br>
                            <input type="text" name="body" id="name" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="name">Sanasi</label></br>
                            <input type="date" name="data" id="name" class="form-control" required>
                        </div>


                        <button type="submit" id="alert" class="btn btn-primary">Saqlash</button>
                        <input type="reset" class="btn btn-danger" value="Tozalash">
                    </form>
                </div>
            </div>
        </div>
    </div>

@stop
