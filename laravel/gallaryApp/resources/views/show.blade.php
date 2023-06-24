@extends('layouts.app')

@section('content')
    
<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Photos</div>
            <div class="card-body">
                <p>{{$gallary->description}}</p>
            </div>
        </div>
    </div>
    <div class="col-md-3">
        <div class="card justify-content-center">
            <div class="card-header">{{$gallary->title}}</div>
            <div class="card-body">
                <img src="{{asset('galleries/'.$gallary->cover)}}" width="150px" alt="">
                <br><br>
                <a href="{{route('gallery.edit',$gallary->id)}}" class="btn btn-success btn-block">Edit Gallery</a>
                <br><br>
                <form action="{{route('gallery.destroy',$gallary->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                 <button type="submit" class="btn btn-danger btn-block">Delete Gallery</button>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection