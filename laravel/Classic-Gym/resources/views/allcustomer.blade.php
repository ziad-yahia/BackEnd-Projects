@extends('layouts.app')




@section('content')
    

<h1 class="text-center text-uppercase text-dark fw-bolder fs-1 pt-3 "> All Customer page</h1>

<div class="container">
  
  <div class="d-flex justify-content-between">
        @if (auth()->user())
        <div>
          <a href="{{route('customer.create')}}"> <button type="button" class="btn btn-outline-danger  ">Create New Customer</button>
          </a>
        </div>
        <div>
          <a href="{{route('expire')}}"> <button type="button" class="btn btn-outline-warning ">Expire Date Customer</button>
          </a>
        </div>
   
   
        @endif

  </div>

<hr class="border  border-dark border-5">

    
<table class="table bg-dark  text-white  mt-5" id="myTable">
    <thead>
        <tr>
          <th scope="col">#</th>
          <th scope="col">Name</th>
          <th scope="col">Phone</th>  
          <th scope="col">Price</th>
          <th scope="col">Subscribe</th>
          <th scope="col">Staute</th>
          <th scope="col">Expiredate</th>
          <th scope="col">Created_at</th>
          <th scope="col">Admin</th>
          <th scope="col">Actions</th>

        </tr>
      </thead>

    
       @foreach ($customer as $customer ) 
       {{-- @if (Auth::user()->id == $customer->user_id)
          
       @endif  --}}
      <tbody>
        <tr>
        
          <th scope="row">{{$customer->id}}</th>
          <td>{{$customer->name}}</td>
          <td>{{$customer->phone}}</td>
          <td>{{$customer->price}}</td>
          <td>{{$customer->subscribe}}</td>
          <td>{{$customer->statue}}</td>
          <td>{{$customer->expiredate}}</td>
          <td>{{$customer->created_at}}</td>
          <td>{{$customer->user->name}} </td>
            <td> 
                
                {{-- @if (Auth()->user()) @endif --}}
                @auth
                  
               
                <a href="{{route('customer.edit',$customer->id)}}"> <button type="button" class="btn btn-outline-warning">Edit</button></a> 
               &nbsp;
               <form action="{{route('customer.destroy',$customer->id)}}" method="POST" class="d-inline ">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-danger btn-sm">DELETE</button>
        
              </form>
               @endauth
               
               
             
            </td>
        </tr>
      </tbody>
      @endforeach 
</table>
</div>
@endsection

