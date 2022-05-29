@extends('layout.main')
@section('content')


<div class="main-content">

    <div class="rwt-contact-area rn-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb--40">
                    <div class="section-title text-center" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle "><span class="theme-gradient">Admin</span></h4>
                        <h2 class="title w-600 mb--20">Add New Dish</h2>
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
                    <form class="contact-form-1" enctype="multipart/form-data" id="Add-Dish-form" method="POST" action="{{ url('update') }}">
                        {{-- <div class="form-group">
                            <input type="text" name="dish-id" id="dish-id" placeholder="Dish Id" disabled>
                        </div> --}}
                        @csrf

                        @method('PUT')

                        <input type="hidden" name="id" value="{{$dish->id}}">

                        @error('dish')
                            <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            @if(old('dish'))
                            <input type="text" value="{{old('dish')}}" name="dish" id="dish-name" placeholder="Dish Name">
                            @else
                            <input type="text" value="{{$dish->name}}" name="dish" id="dish-name" placeholder="Dish Name">
                            @endif
                        </div>

                        @error('type')
                            <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
                        @enderror
                        @if(old('type'))
                        <div class="form-group">
                            <select name="type" id="catagory" style="border:1px solid rgb(203, 196, 196);  background: transparent;color:rgb(118, 112, 112);">
                                <option value="">--Select Type--</option>
                                <option value="Veg" {{old('type')=='Veg' ? 'selected' : ''}}>Veg</option>
                                <option value="Non-Veg" {{old('type')=='Non-Veg' ? 'selected' : ''}}>Non-Veg</option>
                              </select>
                        </div>
                        @else

                        <div class="form-group">
                            <select name="type" id="catagory" style="border:1px solid rgb(203, 196, 196);  background: transparent;color:rgb(118, 112, 112);">
                                <option value="">--Select Type--</option>
                                <option value="Veg" {{$dish->type=='Veg' ? 'selected' : ''}}>Veg</option>
                                <option value="Non-Veg" {{$dish->type=='Non-Veg' ? 'selected' : ''}}>Non-Veg</option>
                              </select>
                        </div>

                        @endif

                        @error('Category')
                            <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
                        @enderror

                        @if(old('Category'))
                        <div class="form-group">
                            <select name="Category" id="catagory" style="border:1px solid rgb(203, 196, 196);  background: transparent;color:rgb(118, 112, 112);">
                                <option value="">--Select Category--</option>
                                <option value="Breakfast" {{old('type')=='Breakfast' ? 'selected' : ''}}>Breakfast</option>
                                <option value="Lunch" {{old('type')=='Lunch' ? 'selected' : ''}}>Lunch</option>
                                <option value="Dinner" {{old('type')=='Dinner' ? 'selected' : ''}}>Dinner</option>
                                <option value="Italian" {{old('type')=='Italian' ? 'selected' : ''}}>Italian</option>
                                <option value="Chinese" {{old('type')=='Chinese' ? 'selected' : ''}}>Chinese</option>
                                <option value="Snacks" {{old('type')=='Snacks' ? 'selected' : ''}}>Snacks</option>

                              </select>
                        </div>
                        @else
                        <div class="form-group">
                        <select name="Category" id="catagory" style="border:1px solid rgb(203, 196, 196);  background: transparent;color:rgb(118, 112, 112);">
                            <option value="">--Select Category--</option>
                            <option value="Breakfast" {{$dish->category=='Breakfast' ? 'selected' : ''}}>Breakfast</option>
                            <option value="Lunch" {{$dish->category=='Lunch' ? 'selected' : ''}}>Lunch</option>
                            <option value="Dinner" {{$dish->category=='Dinner' ? 'selected' : ''}}>Dinner</option>
                            <option value="Italian" {{$dish->category=='Italian' ? 'selected' : ''}}>Italian</option>
                            <option value="Chinese" {{$dish->category=='Chinese' ? 'selected' : ''}}>Chinese</option>
                            <option value="Snacks" {{$dish->category=='Snacks' ? 'selected' : ''}}>Snacks</option>

                          </select>
                        </div>
                        @endif

                        @error('price')
                            <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
                        @enderror
                        @if(old('price'))
                        <div class="form-group">
                            <input type="text" value="{{old('price')}}" name="price" id="price" placeholder="Price">
                        </div>
                        @else
                        <div class="form-group">
                            <input type="text" value="{{$dish->price}}" name="price" id="price" placeholder="Price">
                        </div>
                        @endif

                        @error('description')
                            <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
                        @enderror
                        @if(old('description'))
                        <div class="form-group">
                            <textarea name="description"  id="description" placeholder="Dish Description">{{old('description')}}</textarea>
                        </div>
                        @else
                        <div class="form-group">
                            <textarea name="description"  id="description" placeholder="Dish Description">{{$dish->description}}</textarea>
                        </div>
                        @endif

                        {{-- @error('images')
                            <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Upload Dish Images</label>
                            <input type="file" id="images" value="{{old('images')}}" name="images">
                        </div>

                        @error('thumbnail')
                            <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Upload Dish ThumbNail Images</label>
                            <input type="file" id="tn-images" value="{{old('thumbnail')}}" name="thumbnail">
                        </div> --}}


                        @error('video')
                            <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
                        @enderror
                        @if(old('video'))
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Upload Dish Video</label>
                            <input type="url" id="dish-video" value="{{old('video')}}" name="video">
                        </div>
                        @else
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Upload Dish Video</label>
                            <input type="url" id="dish-video" value="{{$dish->video}}" name="video">
                        </div>
                        @endif

                        <div class="form-group">
                            <center><button name="submit" type="submit" id="submit" class="btn-default btn-large rn-btn">
                                <span>UPDATE DISH</span>
                            </button></center>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- End Contact Area  -->

@endsection
