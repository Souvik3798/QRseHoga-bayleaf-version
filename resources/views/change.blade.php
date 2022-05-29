@extends('layout.main')
@section('content')


<div class="row">
    <div class="col-lg-12 mb--40">
        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
            <h4 class="subtitle "><span class="theme-gradient">Admin</span></h4>
            <h2 class="title w-600 mb--20">Update {{$type}}</h2>
        </div>
    </div>
</div>

@if(session('success'))
<div style="background-color: lightgreen;color: white;text-align: center;width: 100%;">
    {{ session('success') }}
</div>
@endif

<div class="row mt--40  align-items-center justify-content-center">
    <div class="col-lg-6">
        @if($type == 'Image')
        <form class="contact-form-1" enctype="multipart/form-data" id="Add-Dish-form" method="POST" action="{{ url('img') }}">
        @else
        <form class="contact-form-1" enctype="multipart/form-data" id="Add-Dish-form" method="POST" action="{{ url('thumb') }}">
        @endif
            @csrf


            <input type="hidden" name="id" value="{{$dish->id}}">


            @error('images')
                <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
            @enderror
            <div class="form-group">
                <label for="exampleInputEmail1" class="form-label">Upload Dish Images</label>
                <input type="file" id="images" name="images" required>
            </div>



            <div class="form-group">
                <center><button name="submit" type="submit" id="submit" class="btn-default btn-large rn-btn">
                    <span>UPDATE</span>
                </button></center>
            </div>
        </form>
    </div>


@endsection
