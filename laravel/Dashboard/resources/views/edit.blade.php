@extends('layouts.parent')

@section('title', 'Edit Product ' . $Products->name_en)


@section('content')
    <form action="{{route('dashbord.product.update',$Products->id)}}" method="post" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-row">
            <div class="col-6">
                <label for="name_en ">Name (En)</label>
                <input type="text" name="name_en" value="{{ $Products->name_en }}" id="name_en" class="form-control">
                @error('name_en')
                    <p class="text-danger font-weight-bold">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-6">
                <label for="name_Ar ">Name (Ar)</label>
                <input type="text" name="name_Ar" id="name_Ar" value="{{ $Products->name_ar }}" class="form-control">
                @error('name_Ar')
                    <p class="text-danger font-weight-bold">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-6">
                <label for="Quantity ">Quantity</label>
                <input type="number" name="Quantity" id="Quantity" value="{{ $Products->quantity }}" class="form-control">
                @error('Quantity')
                    <p class="text-danger font-weight-bold">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-6">
                <label for="price ">Price</label>
                <input type="number" name="price" id="price" value="{{ $Products->price }}" class="form-control">
                @error('price')
                    <p class="text-danger font-weight-bold">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-6">
                <label for="Code ">Code</label>
                <input type="number" name="Code" value="{{$Products->code}}"  id="Code" class="form-control">
                @error('Code')
                    <p class="text-danger font-weight-bold">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-4">
                <label for="Status ">Status</label>
                <select name="Status" id="Status" class="form-control">
                    <option @selected($Products->status == 1) value="1">ACTIVE</option>
                    <option @selected($Products->status == 0) value="0">NOT ACTIVE</option>
                </select>
                @error('Status')
                    <p class="text-danger font-weight-bold">{{ $message }}</p>
                @enderror
            </div>

            <div class="col-6">
                <label for="details_en">Details (En)</label>
                <textarea name="details_en" id="details_en" cols="30" rows="10" class="form-control">
                    
                   {{ $Products->details_en }}
                </textarea>
                @error('details_en')
                    <p class="text-danger font-weight-bold">{{ $message }}</p>
                @enderror
            </div>
            <div class="col-6">
                <label for="details_ar">Details (Ar)</label>
                <textarea name="details_ar" id="details_ar" cols="30" rows="10" class="form-control">
                    {{ $Products->details_ar }}
                   
                </textarea>
                @error('details_ar')
                    <p class="text-danger font-weight-bold">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-row">
                <div class="col-3">
                    <label for="file">
                        <img src="{{ asset('images/products/' . $Products->image) }}" alt="upload" id="image"
                            class="w-100 rounded-circle" style="cursor: pointer">
                    </label>
                    <input type="file" name="image" id="file" class="d-none" onchange="loadfile(event)">
                </div>
                @error('image')
                    <p class="text-danger font-weight-bold">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-row">
                <div class="col-2">
                    <button class="btn btn-outline-dark btn-sm">UPDATE </button>
                </div>
            </div>

        </div>

        </div>

    </form>
@endsection

@section('js')
    <script>
        var loadfile = function(event) {
            var output = document.getElementById('image');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src)
                document.getElementById('change-btn').classList.remove('d-none');
            }
        };
    </script>
@endsection
