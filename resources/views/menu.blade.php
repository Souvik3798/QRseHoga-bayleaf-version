@extends('layout.main')
@section('content')


    <!-- Today's Hot Menu -->
    <div class="slider-area slider-style-1 variation-default height-850 " data-black-overlay="7"style="background-image:url(https://images.freekaamaal.com/post_images/1606817930.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="inner text-center">
                        <!-- <span class="subtitle">Ethnic Tastes</span> -->
                        <h1 class="title display-one">Ethnic Tastes Which <span> stays in Heart</span>.</h1>
                        <p class="description">Specialities in food making and provide lstings to customers so as to make things easier.</p>
                        <!-- <div class="button-group"> -->
                            <!-- <a class="btn-default btn-medium round btn-icon" href="#">Purchase
                                Now <i class="icon feather-arrow-right"></i></a><a class="btn-default btn-medium btn-border round btn-icon" href="contact.html">Contact
                                Us <i class="icon feather-arrow-right">
                                </i></a> -->

                            <!-- </div> -->
                            <div class="rbt-single-widget widget_search mt--40" >
                                <div class="inner">
                                    <form class="blog-search" action="{{url('/menu')}}" method="POST" >
                                        @csrf
                                        <input type="text" name="search" placeholder="Search ..." style="color: white;">
                                        <button class="search-button">
                                            <i class="feather-search"></i>
                                        </button>
                                    </form>
                                </div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <!-- Today's hOt end -->

    <!-- End Breadcarumb area  -->
    <!-- Start Theme Style  -->
    <div>
        <div class="rn-gradient-circle"></div>
        <div class="rn-gradient-circle theme-pink"></div>
    </div>
    <!-- End Theme Style  -->




    <!-- Start Blog-Grid Sidebar  -->

                    <div class="rwt-portfolio-area rn-section-gapBottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-lg-12  ">
                                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                                        <!-- <h4 class="subtitle "><span class="theme-gradient">Project</span></h4> -->
                                        <h2 class="title w-600 mb--20">Specialities</h2>
                                        <p class="description b1">Menu</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="rwt-portfolio-filter filter-button-default messonry-button text-center mb--30">
                                        <button data-filter="*" class="is-checked"><span class="filter-text">All</span></button>
                                        <button data-filter=".Veg"><span class="filter-text">Veg</span></button>
                                        <button data-filter=".Non-Veg"><span class="filter-text">Non-Veg</span></button>
                                        <!-- <button data-filter=".cat--3"><span class="filter-text">development</span></button> -->
                                    </div>
                                    <div class="portfolio-items grid-metro3 mesonry-list">
                                        <div class="resizer"></div>
                                        <!-- Start Single Portfolio  -->
                                        @foreach ($dishes as $dish)
                                            <div class="portfolio-3 {{$dish->type}}">
                                                <div class="rwt-card portfolio shadow  ">
                                                    <div class="inner">
                                                        <div class=" img-fluid">
                                                            <div class="card-image">
                                                                <a href="{{url('details/'.$dish->id)}}">
                                                                    <img src="{{asset('thumbnail/'.$dish->thumbnail)}}">
                                                                </a>
                                                            </div>
                                                            <a class="rwt-overlay" href="{{url('details/'.$dish->id)}}"></a>
                                                        </div>
                                                        <div class="content">
                                                            <h5 class="title mb--10">
                                                                <a href="{{url('details/'.$dish->id)}}">{{$dish->name}}</a>
                                                            </h5>
                                                            @if($dish->type == 'Non-Veg')
                                                            <span class="badge bg-danger d-inline-block "> &nbsp;NON VEG</span>
                                                            @else
                                                            <span class="badge bg-success d-inline-block "> &nbsp;VEG</span>
                                                            @endif
                                                            {{-- <h6 class="card-subtitle mb-2 text-muted">
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            <span class="fa fa-star"></span>
                                                            </h6> --}}
                                                            <span class="subtitle b2 m">₹ {{$dish->price}}</span>
                                                            {{-- <a href="#" class="btn btn-primary  btn-lg float-end  " role="button" id="cartbutton"> <i class="fa fa-shopping-cart" aria-hidden="true"></i> Add to cart</a> --}}


                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Blog-Grid Sidebar  -->


@endsection
