@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <a href="{{route('notes.create')}}">Create NEW Notes</a>
           <table id="notes_table" class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Created By :</th>
                    <th>Created_at</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($notes  as $item)
                    <tr>
                        <th>{{$item->title}}</th>
                        <th>{{App\Models\User::find($item->user_id)->name}}</th>
                        <th>{{$item->created_at}}</th>
                        <th>
                            <a href="{{route('notes.show',$item->id)}}">Show</a>
                            <a href="{{route('notes.edit',$item->id)}}">Edit</a>
                            <form action="{{route('notes.destroy',$item->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-outline-dark" type="submit">DELETE</button>
                            </form>

                        </th>
                    </tr>
                @endforeach --}}
            </tbody>

           </table>

        </div>  
    </div>
</div>
<script>
    
$(document).ready(function () {
    $('#notes_table').dataTable({
        "serverSide": true,
        "responsive": true,
        "ajax": "{{route('notes.data')}}"
    });
});
</script>
@endsection
