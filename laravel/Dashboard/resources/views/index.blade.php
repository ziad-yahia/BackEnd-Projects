@extends('layouts.parent')

@section('title','All Product')
@section('css')
<!-- DataTables -->
<link rel="stylesheet" href="{{asset('plugins/datatables-bs4/css/dataTables.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-responsive/css/responsive.bootstrap4.min.css')}}">
<link rel="stylesheet" href="{{asset('plugins/datatables-buttons/css/buttons.bootstrap4.min.css')}}">
@endsection
@section('content')

@include('components.message')

<div class="col-12">
<table id="example1" class="table table-bordered table-hover">
    <thead>
      <tr>
        <th scope="row">#</th>
        <td>Code</td>
        <td>Name (En)</td>
        <td>Name(Ar)</td>
        <td>Price</td>
        <td>Quantity</td>
        <td>Status</td>
        <td>Created Date</td>
        <td>Updated Date</td>
        <td>Operation</td>
      </tr>
    </thead>
    <tbody>
    @foreach ($products as $product )
    <tr>
      <th>{{$product->id}}</th>
      <td>{{$product->code}}</td>
      <td>{{$product->name_en}}</td>
      <td>{{$product->name_ar}}</td>
      <td>{{$product->price}} EGP</td>
      <td>{{$product->quantity}}</td>
      <td>{{$product->status}}</td>
      <td>{{$product->created_at}}</td>
      <td>{{$product->updated_at}}</td>
       <td>
       <a href="{{route('dashbord.product.edit',$product->id)}}" class="btn btn-outline-dark btn-sm">Edit</a>
       <form action="{{route('dashbord.product.destroy',$product->id)}}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button class="btn btn-outline-danger btn-sm">DELETE</button>

      </form>
       
      
       </td> 
     </tr>
    @endforeach
 
    </tbody>
  </table>
</div>
@endsection

@section('js')
<!-- DataTables  & Plugins -->
<script src="{{asset('plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{asset('plugins/datatables-bs4/js/dataTables.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/dataTables.responsive.min.js')}}"></script>
<script src="{{asset('plugins/datatables-responsive/js/responsive.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/dataTables.buttons.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.bootstrap4.min.js')}}"></script>
<script src="{{asset('plugins/jszip/jszip.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/pdfmake.min.js')}}"></script>
<script src="{{asset('plugins/pdfmake/vfs_fonts.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.html5.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.print.min.js')}}"></script>
<script src="{{asset('plugins/datatables-buttons/js/buttons.colVis.min.js')}}"></script>
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
   
  });
</script>
  
@endsection