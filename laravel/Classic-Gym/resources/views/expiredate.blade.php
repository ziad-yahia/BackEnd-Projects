@extends('layouts.app')

@section('content')
   

<div class="container mt-5 p-5">

    <div class=" my-4">
  
          <a href="{{route('customer.index')}}"> <button type="button" class="btn btn-outline-dark col-6">Go Back To Main Page</button>
          </a>

  </div>


<table class="table bg-dark  text-white  " id="myTable">


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

    
      
       {{-- @if (Auth::user()->id == $customer->user_id)
          
       @endif  --}}
@foreach ($customer as $customer )

@isset($customer)
    
    @if ( $customer->created_at->format('Y-m-d') == $customer->expiredate) 

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
                <form action="{{route('customer.destroy',$customer->id)}}" method="POST" class="d-inline ">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-outline-danger btn-sm">DELETE</button>
            
                  </form>
            </td>
                
            </tr>
        </tbody>



    @endif 

@endisset
 


@endforeach

</table>
</div>

@endsection