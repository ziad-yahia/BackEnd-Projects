@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Note') }}</div>

                @if ($errors->any())
                    @foreach ($errors->all() as $error )
                        <div class="alert alert-danger text-center" role="alert">
                            {{$error}}
                        </div>
                    @endforeach
                @endif
                
                        <div class="card-body">
                        
                            <form action="{{$isEdit ? route('notes.update',$note->id) : route('notes.store') }}" method="post">
                                @csrf
                                @if ($isEdit)
                                    @method('PUT')
                                @endif
                                <div class="row mb-3">
                                    <label for="title" class="col-md-4 col-form-label text-md-end">{{ __('Title') }}</label>

                                    <div class="col-md-6">
                                        <input id="title" type="text" class="form-control" value="{{$isEdit ? $note->title:old('title')}}" name="title"  required >
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('Description') }}</label>

                                    <div class="col-md-6">
                                        <textarea id="description"  class="form-control"  name="description" required >
                                            {{$isEdit ? $note->description : old('description')}}
                                        </textarea>
                                    </div>
                                </div>
                                <div class="row mb-3">
                                    <label for="description" class="col-md-4 col-form-label text-md-end">{{ __('share with others') }}</label>

                                    <div class="col-md-6">
                                       <select name="share[]" id="share" multiple>
                                        @foreach (App\Models\User::all()->except(Auth::id()) as $user )
                                            <option value="{{$user->id}}" {{$isEdit ? ($note->shared->contains($user) ? 'selected':'') : ''}}>{{$user->name}}</option>
                                        @endforeach
                                       </select>
                                    </div>
                                </div>

                      
                                <button class="btn btn-outline-dark col-12" type="submit">{{$isEdit ? "update": "create"}}</button>

                             </form>
                                

                        </div>  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
