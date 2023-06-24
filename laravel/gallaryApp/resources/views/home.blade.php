@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Galleries') }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                            <div class="row justify-content-center">
                                <div class="col-md-3">
                                    
                                    @foreach ($galleries as $gallery)
                                    <a href="{{route('gallery.show',$gallery->id )}}">
                                    <img src="{{asset('galleries/'. $gallery->cover)}}" width="150px" alt="">
                                    <p>{{$gallery->title}}</p>
                                      </a>
                                    @endforeach
                                </div>
                            </div>
                       
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card">
                <div class="card-header">Create new Gallery</div>
                <div class="card-body">
                    <a href="{{route('gallery.create')}}" class="btn btn-success btn-block col-12">Create New Gallery</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
