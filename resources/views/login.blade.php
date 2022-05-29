@extends('layout.main')
@section('content')


    <!-- Start Contact Area  -->
    <div class="main-content">

        <div class="rwt-contact-area rn-section-gap">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb--40">
                        <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                            <h2 class="title "><span class="theme-gradient">Login</span></h2>
                            <!-- <h2 class="title w-600 mb--20">Registration</h2> -->
                        </div>
                    </div>
                </div>
                @if(session('fail'))
                    <div style="background-color: lightcoral;color: white;text-align: center;width: 100%;">{{ session('fail') }}</div>
                @endif
                <div class="row mt--40  align-items-center justify-content-center">
                    <div class="col-lg-6">
                        <center>
                        <form class="contact-form-1"  method="POST" action="{{ route('admin.login') }}">

                            @csrf

                            <div class="form-group">
                                <input type="email" name="email" id="email" placeholder="Email Id  ">

                            </div>


                            <div class="form-group">
                                <input type="password" name="password" id="password" placeholder="Password">

                            </div>

                            <div class="form-group d-flex align-items-center justify-content-center">
                                <button name="submit" type="submit" id="submit" class="btn-default btn-large rn-btn btn-block" >
                                    <span>Submit</span>
                                </button>
                            </div>
                        </form>
                    </center>
                        <hr>


                    </div>

                </div>
            </div>
        </div>

    </div>
    <!-- End Contact Area  -->

@endsection
