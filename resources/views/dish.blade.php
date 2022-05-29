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
                    <form class="contact-form-1" enctype="multipart/form-data" id="Add-Dish-form" method="POST" action="{{ url('add-dish') }}">
                        {{-- <div class="form-group">
                            <input type="text" name="dish-id" id="dish-id" placeholder="Dish Id" disabled>
                        </div> --}}
                        @csrf

                        @error('dish')
                            <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <input type="text" value="{{old('dish')}}" name="dish" id="dish-name" placeholder="Dish Name">
                        </div>

                        @error('type')
                            <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <select name="type" id="catagory" style="border:1px solid rgb(203, 196, 196);  background: transparent;color:rgb(118, 112, 112);">
                                <option value="">--Select Type--</option>
                                <option value="Veg" {{old('type')=='Veg' ? 'selected' : ''}}>Veg</option>
                                <option value="Non-Veg" {{old('type')=='Non-Veg' ? 'selected' : ''}}>Non-Veg</option>
                              </select>
                        </div>
                        @error('Category')
                            <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
                        @enderror
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

                        @error('price')
                            <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <input type="text" value="{{old('price')}}" name="price" id="price" placeholder="Price">
                        </div>

                        @error('description')
                            <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <textarea name="description"  id="description" placeholder="Dish Description">{{old('description')}}</textarea>
                        </div>

                        @error('images')
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
                        </div>


                        @error('video')
                            <div style="background-color: lightcoral;color: white;width: 100%">{{$message}}</div>
                        @enderror
                        <div class="form-group">
                            <label for="exampleInputEmail1" class="form-label">Upload Dish Video</label>
                            <input type="url" id="dish-video" value="{{old('video')}}" name="video">
                        </div>

                        <div class="form-group">
                            <center><button name="submit" type="submit" id="submit" class="btn-default btn-large rn-btn">
                                <span>ADD DISH</span>
                            </button></center>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>
<!-- End Contact Area  -->
<!-- list of Dishes -->
<div class="container-fluied" style="padding:2%">
    <div class="row">
        <div class="col-lg-12">
            <table class="table">
                <thead>
                    <tr>

                        <th scope="col">Dish Name</th>
                        <th scope="col">Dish Type</th>
                        <th scope="col">Dish Category</th>
                        <th scope="col">Price</th>
                        <th scope="col">Description</th>
                        <th scope="col">Dish Images</th>
                        <th scope="col">Dish ThumbNail Images</th>
                        <th scope="col">Video</th>
                        <!-- <th scope="col">Try with</th> -->
                        <th scope="col">Edit/Delete</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($dishes as $dish)
                    <tr>
                        <td>{{$dish->name}}</td>
                        <td>{{$dish->type}}</td>
                        <td>{{$dish->category}}</td>
                        <td>{{$dish->price}}</td>
                        <td>{{$dish->description}}</td>
                        <td><img src="{{asset('images/'.$dish->image)}}" alt="" style="width:12rem;"><b><a href="{{url('img/'.$dish->id)}}">Change</a></b></td>
                        <td><img src="{{asset('thumbnail/'.$dish->thumbnail)}}" alt="" style="width:12rem;"><b><a href="{{url('thumb/'.$dish->id)}}">Change</a></b></td>
                        <td><a href="{{$dish->video}}">{{$dish->video}}</a></td>
                        <!-- <td>sambaar</td> -->
                        <td><a href="{{url('edit/'.$dish->id)}}" style="color:black;"><button type="button" class="btn btn-warning">Edit</button></a>
                            <a href="{{url('delete/'.$dish->id)}}" style="color:white;"><button type="button" class="btn btn-danger ms-2">Delete</button></a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- end  list of Dishes -->


@endsection
