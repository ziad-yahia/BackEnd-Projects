@extends('layouts.app')

@section('content')
    <form action="{{route('gallery.update',1)}}" method="POST">
        @csrf
        @method('PUT')
    <button type="submit">sub</button></form>
@endsection