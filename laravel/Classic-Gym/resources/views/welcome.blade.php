@extends('layouts.app')

@section('content')

<div class=" col-lg-12 col-md-12 bg-primary" >
    <img src="{{asset('images/wallpaperflare.com_wallpaper (13).jpg')}}" class="img-fluid" alt="" >
</div>


 <div class="container py-2">

{{-- first row --}}
<div class="row">

    <div class="siximage  col-lg-6 col-md-12 bg-warning p-3">
        <img src="{{asset('images/wallpaperflare.com_wallpaper (1).jpg')}}" class="img-fluid" alt="" sizes="" srcset="">
    </div>

    <div class="list col-lg-6 col-md-12  ">
        <ul class="mt-5 fs-3 list-group text-center ">
        <li class="list-group-item list-group-item-dark">make plane</li>
        <li class="list-group-item list-group-item-dark">Follow your Progress</li>
        <li class="list-group-item list-group-item-dark">be patient</li>
        <li class="list-group-item list-group-item-dark">Happy result<sup>,</sup>s</li>
         </ul>
    </div>
   

</div>


</div>

{{-- second row --}}
<div class="container-fluid col-md-12 col-lg-12 mt-3">
<div class="row g-2">
{{-- first  --}}
<div class="col-md-12 col-lg-4">
    <img src="{{asset('images/wallpaperflare.com_wallpaper (5).jpg')}}"class="img-fluid"  alt="">
</div>
{{-- second --}}
<div class="col-md-12 col-lg-4">
    <img src="{{asset('images/wallpaperflare.com_wallpaper (7).jpg')}}"class="img-fluid"  alt="">
</div>
{{-- third --}}
<div class="col-md-12 col-lg-4">
<img src="{{asset('images/wallpaperflare.com_wallpaper (6).jpg')}}"class="img-fluid"  alt="">
</div>
</div>
<div class="row g-2 mt-2">
{{-- fourth --}}
<div class="col-md-12 col-lg-4">
<img src="{{asset('images/wallpaperflare.com_wallpaper (9).jpg')}}"class="img-fluid"  alt="">
</div>
{{-- fifth --}}
<div class="col-md-12 col-lg-4">
    <img src="{{asset('images/wallpaperflare.com_wallpaper (8).jpg')}}"class="img-fluid"  alt="">
</div>
{{-- sixth--}}
<div class="col-md-12 col-lg-4">
    <img src="{{asset('images/wallpaperflare.com_wallpaper (10).jpg')}}"class="img-fluid"  alt="">
</div>
</div> 
</div>


{{-- -------------third row---------------------- --}}
<div class="container">
<div class="row mt-5">

    <div class="list col-lg-6 col-md-12  mt-3">
       <h1 class="fs-1 fw-bolder">
        Making excuses burns zero calories per hour,With Healthy Food Gonna Enhance Your Life And Chieve Your Goal Fast And Easily
       </h1>
    </div>
   


    <div class=" col-lg-6 col-md-12 bg-danger p-3">
        <img src="{{asset('images/wallpaperflare.com_wallpaper (2).jpg')}}" class="img-fluid" alt="" sizes="" srcset="">
    </div>

   
</div>
</div>

<footer class="col-md-12 col-lg-12 bg-dark text-light mt-2">
       
          
    <marquee behavior="scroll" direction="right" scrollamount="5">&#169; 2023 Adveture. All Rights Reserved To: Classic-Gym|
        Design By ZEYAD YAHIA</marquee>
   
</footer>
@endsection