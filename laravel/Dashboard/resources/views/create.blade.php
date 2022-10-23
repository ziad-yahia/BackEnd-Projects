@extends('layouts.parent')

@section('title','Create Product')


@section('content')
@include('components.message')
 

    <form action="{{route('dashbord.product.store')}}" method="post" enctype="multipart/form-data">
    
        @csrf
        <div class="form-row">
            <div class="col-6">
                <label for="name_en ">Name (En)</label>
                <input type="text" name="name_en" value="{{old('name_en')}}" id="name_en" class="form-control">
                @error('name_en')
                    <div class="text-danger font-weight-bold">* {{$message}}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="name_Ar ">Name (Ar)</label>
                <input type="text" name="name_Ar" value="{{old('name_Ar')}}" id="name_Ar" old('name_Ar') class="form-control">
                @error('name_Ar')
                <div class="text-danger font-weight-bold">* {{$message}}</div>
            @enderror
            </div>
            <div class="col-6">
                <label for="price ">Price</label>
                <input type="text" name="price" value="{{old('price')}}" id="price" class="form-control">
                @error('price')
                <div class="text-danger font-weight-bold">* {{$message}}</div>
            @enderror
            </div>
            <div class="col-6">
                <label for="Quantity ">Quantity</label>
                <input type="number" name="Quantity" value="{{old('Quantity')}}" id="Quantity" class="form-control">
                @error('Quantity')
                <div class="text-danger font-weight-bold">* {{$message}}</div>
                @enderror
            </div>
            <div class="col-6">
                <label for="Code ">Code</label>
                <input type="number" name="Code" value="{{old('Code')}}" id="Code" class="form-control">
                @error('Code')
                <div class="text-danger font-weight-bold">* {{$message}}</div>
            @enderror
            </div>
            <div class="col-4">
                <label for="Status ">Status</label>
                <select  name="Status" id="Status" class="form-control">
                    <option value="1">ACTIVE</option>
                    <option value="0">NOT ACTIVE</option>
                </select>
                @error('Status')
                <div class="text-danger font-weight-bold">* {{$message}}</div>
            @enderror
            </div>
           
            <div class="col-6">
                <label for="details_en">Details (En)</label>
                <textarea  name="details_en" id="details_en" cols="30" rows="10" class="form-control">
                </textarea>
                @error('details_en')
                <div class="text-danger font-weight-bold">* {{$message}}</div>
            @enderror
            </div>
            <div class="col-6">
                <label for="details_ar">Details (Ar)</label>
                <textarea  name="details_ar" id="details_ar" cols="30" rows="10" class="form-control">           
                </textarea>
                @error('details_ar')
                <div class="text-danger font-weight-bold">* {{$message}}</div>
                @enderror
            </div>

            <div class="form-row">
                    <div class="col-3">
                        <label for="file">
                            <img src="{{asset('images/products/')}}" alt="upload" id="image" class="w-100 rounded-circle" style="cursor: pointer">
                        </label>
                        <input type="file" name="image" id="file" class="d-none" onchange="loadfile(event)">
                    </div>
                
                @error('image')
                <div class="text-danger font-weight-bold">* {{$message}}</div>
                @enderror
            </div>
            
            <div class="form-row">
                <div class="col-2">
                    <button class="btn btn-outline-dark btn-sm" >Create </button>
                </div>
            </div>

        </div>
          
        </div>

    </form>
@endsection

@section('js')
    <script>
        var loadfile= function(event){
            var output=document.getElementById('image');
            output.src= URL.createObjectURL(event.target.files[0]);
            output.onload= function(){
                URL.revokeObjectURL(output.src)
                document.getElementById('change-btn').classList.remove('d-none');
            }
        };
    </script>
@endsection