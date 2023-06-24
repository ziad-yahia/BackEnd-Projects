@extends('layouts.app')



@section('content')

<div class="container p-3">

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif  


<form action="{{route('customer.store')}}" method="POST" class="border border-dark  border-3 rounded p-3">

    @csrf
    <div class="mb-3">
        <label for="fullname" class="form-label text-uppercase fs-3">Full Name</label>
        <input type="text" class="form-control" id="fullname"  value="{{ old('name') }}" name="name">
       
      </div>
      <div class="mb-3">
        <label for="Phone" class="form-label text-uppercase fs-3">Phone Number</label>
        <input type="text" class="form-control "  value="{{ old('phone') }}" id="Phone" name="phone">
        
      </div>
      <div class="mb-3">
        <label for="expiredate" class="form-label text-uppercase fs-3">Expire DATE</label>
        <input type="date" class="form-control"  value="{{ old('expiredate') }}" id="expiredate" name="expiredate">
       
      </div>
      <div class="mb-3">
        <label for="price" class="form-label text-uppercase fs-3">Price</label>
        <input type="text" class="form-control "  value="{{ old('price') }}" id="price" name="price">
       
      </div>
      <div class="mb-3">
        <label for="subscribe " class="text-uppercase fs-3">subscribe</label>
                <select  name="subscribe" id="subscribe" class="form-control">
                    <option value="month">Month</option>
                    <option value="half-month">15 days</option>
                </select>
           
      </div><div class="mb-3">
        <label for="statue" class="text-uppercase fs-3">Status</label>
                <select  name="statue" id="statue" class="form-control">
                    <option value="gym">Gym</option>
                    <option value="cardio">Cardio </option>
                    <option value="Cardio&gym">Cardio&gym </option>

                </select>
              
      </div>
      
      <button type="submit" class="btn btn-outline-dark col-4">Create</button>

</form>
</div>

@endsection

