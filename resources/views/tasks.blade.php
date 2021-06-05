@extends('layout.app')
@section('content')
    <div class="card mx-auto" style="width: 1300px;background-color:none;">
        <div class="card-body">
        <a href="{{ route('create') }}" class="btn btn-success float-right mb-3">Create</a>

            <h5 class="card-title">Tasks</h5>
            <div class="card-table">
                <table class="table table-dark" style="background-color: #343a40;">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">name</th>
                            <th scope="col">Description</th>
                            
                            <th scope="col">Created</th>
                            <th scope="col">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                       
                        @foreach($tasks as $task)
                        <tr>
                                <td>{{ $task->id }}</td>
                                <td>{{ $task->name }}</td>
                                <td>{{ $task->description }}</td>
                               
                                <td>{{ $task->created_at }}</td>
                                <td>
                                    <a href="{{ route('editView', $task->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('delete', $task->id) }}" class="btn btn-danger">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection