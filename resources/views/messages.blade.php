@extends('layouts.app')
@section('content')
<h1>Messages</h1>
@if(count($messages) > 0)
    @foreach($messages as $message)
        <ul class="list-group mb-5">
            <li class="list-group-item">Name: {{ $message->name }}</li>
            <li class="list-group-item">Email: {{ $message->email }}</li>
            <li class="list-group-item">Text: {{ $message->text }}</li>
        </ul>
    @endforeach
@endif
@endsection
@section('sidebar') @parent
<p>this is appendend to sidebar</p>
@endsection