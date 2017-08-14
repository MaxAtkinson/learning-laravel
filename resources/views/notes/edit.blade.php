@extends('layout')

@section('content')
  <h1>Edit the note</h1>

  <form method="POST" action="/notes/{{ $note->id }}">
    {{ csrf_field() }}
    {{ method_field('PUT') }}
    <div class="form-group">
      <textarea class="form-control" name="body">{{ $note->body }}</textarea>
    </div>
    <div class="form-group">
      <button type="submit" class="btn btn-primary">Update Note</button>
    </div>
  </form>
@stop