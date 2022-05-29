@extends('layout.main')
@section('content')


    <!-- Start Advance Pricing Area  -->
    <div class="rn-blog-details-area">
        <!-- <div class="post-page-banner rn-section-gapTop"> -->
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2">
                        <div class="content text-center">
                            <!-- <div class="page-title">
                                <h1 class="theme-gradient">Best Corporate Tips You Will Read This Year.</h1>
                            </div> -->
                            <!-- <ul class="rn-meta-list">
                                <li>
                                    <i class="feather-user"></i>
                                    <a href="#">Irin Pervin</a>
                                </li>
                                <li>
                                    <i class="feather-calendar"></i>
                                    10 Dec 2021
                                </li>
                            </ul> -->
                            <div class="thumbnail alignwide mt--60"><img class="w-100 radius" src="{{asset('images/'.$dish->image)}}"></div>
                        </div>
                    </div>
                </div>
            </div>
        <!-- </div> -->
        <!-- <div class="blog-details-content pt--60 rn-section-gapBottom"> -->
            <div class="container">
                <div class="row  " >
                    <div class="col-lg-12 ">

                        <div class="content  " style="margin-top:10px; ">

                            <h5 class="title  "   >
                              {{$dish->name}}
                            </h5>
                            @if($dish->type == 'Non-Veg')
                            <span class="badge bg-danger d-inline-block ">&nbsp;NON-VEG</span>
                            @else
                            <span class="badge bg-sucess d-inline-block ">&nbsp;VEG</span>
                            @endif

                            <br/>

                            <span class="subtitle b2"><strong>₹ {{$dish->price}}</strong></span>
                               <br>
                          <p class="mt-3"><b>Description</b></p>

                          <p class="mt-3">{{$dish->description}}.</p>
                          <div class="category-meta">

                           </div>
                    <br>


                </div>
            </div>
        </div>
<!-- Image Details -->


@endsection
