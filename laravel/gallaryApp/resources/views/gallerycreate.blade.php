@extends('layouts.app')

@section('content')
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create New Gallery</div>
                <div class="card-body">
                    
                    <form action="{{route('gallery.store')}}" method="post" enctype="multipart/form-data">
                        <div class="row">
                        @csrf
                       
                        
                            <div class="col-md-6">
                                <label for="title">Gallery Title</label>
                                <input type="text" name="title" class="form-control"> 
                            </div>
                            <div class="col-md-6">
                                <label for="cover">Gallery Cover</label>
                                <input type="file" name="cover" class="form-control"> 
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            
                            <div class="col-md-12">
                                <label for="description">Gallery Description</label>
                                <textarea name="description" rows="3" class="form-control"> </textarea>
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-primary">Create Gallery</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
  
@endsection