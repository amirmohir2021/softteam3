@extends('admin.master')
@section('content')
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <div class="row">
                    <div class="col-9"><h1 class="card-title">Client</h1></div>
                    <div class="col-md-1">
                        <a class="btn btn-primary" href="{{route('admin.client.create')}}">
                            <span class="btn-label">
                                <i class="fa fa-plus"></i>
                            </span>
                            Qo'shish
                        </a>
                    </div>
                </div>
                <hr>
                <div class="card-body">
                    <table class="table table-bordered table-hover">
                        <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th>Ism Familya</th>
                            <th>Projekt Nomi</th>
                            <th>Comment</th>
                            <th scope="col">Amallar</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($clients as $key => $item)
                            <tr>
                                <td class="col-1">{{$key+1}}</td>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->project }}</td>
                                <td>{{ $item->comment }}</td>
                                <td class="col-2">
                                    <form action="{{ route('admin.client.destroy',$item->id) }}" method="POST">
                                        <a class="btn btn-warning btn-sm" href="{{ route('admin.client.edit',$item->id) }}">
                                    <span class="btn-label">
                                        <i class="fa fa-pen"></i>
                                    </span>

                                        </a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm"><span class="btn-label">
                                        <i class="fa fa-trash"></i>
                                    </span></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
