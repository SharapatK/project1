@extends('layout.app')
@section('content')
<form action="{{ route('edit', $task->id) }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="exampleInputEmail1">name</label>
        <input type="text" name="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $task->name }}">
    </div>
    <div class="form-group">
        <label for="exampleInputPassword1">Description</label>
        <input type="text" name="description" class="form-control" id="exampleInputPassword1" value="{{ $task->description }}">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection