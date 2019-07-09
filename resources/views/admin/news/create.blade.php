@extends('layouts.app')

@section('content')
<form method="POST" action="{{ route('news.add') }}" enctype="multipart/form-data">
    {{ csrf_field() }}
    <div class="">
        <label for="title">Judul :</label>
        <input class="" type="text" name="title">

        <label for="description">Isine : </label>
        <textarea class="" type="text" name="description"></textarea>

        <label for="event">Kategori : </label>
        <select name="event_id">
        @foreach($events as $event)
        <option value="{{ $event->id }}">{{ $event->title }} </option>
        @endforeach
        </select> <br>
        <label for="image">Gambare: </label>
        <input type="file" name="image">

        <input type="submit" value="submit">
    </div>
        
</form>

@endsection