<?php

namespace App\Http\Controllers;

use App\Models\Dishes;
use Illuminate\Http\Request;
use Illuminate\Support\Env;
use Illuminate\Support\Facades\Mail;

class DishesController extends Controller
{

    public function dish(){
        $dishes = Dishes::all();

        return view('dish',['dishes'=>$dishes]);
    }

    public function login(Request $request){
        if($request->email == "bgmail@gmail.com" && $request->password == "123"){
            $request->session()->put('admin', 'Bayleaf');
            return redirect('dish');
        }

        return redirect()->back()->with('fail','Wrong login credentials');
        print('test');
    }
    public function create(Request $request){

        $request->validate([
            'dish' => 'required',
            'type' => 'required',
            'Category' => 'required',
            'price' => 'required|numeric',
            'description' => 'required',
            'images' => 'required|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'thumbnail' => 'required|max:2048|mimes:jpeg,png,jpg,gif,svg',
            'video' => 'required'
        ]);

        $dish = new Dishes();
        $dish->name = $request->dish;
        $dish->type = $request->type;
        $dish->category = $request->Category;
        $dish->price = $request->price;
        $dish->description = $request->description;
        $dish->image = $request->file('images')->getClientOriginalName();
        $dish->thumbnail = $request->file('thumbnail')->getClientOriginalName();
        $dish->video = $request->video;
        $dish->save();

        //save images and thumbnail to public directory with respective folders
        $images = $request->file('images');
        $thumbnail = $request->file('thumbnail');

        $images->move(public_path('images'), $images->getClientOriginalName());
        $thumbnail->move(public_path('thumbnail'), $thumbnail->getClientOriginalName());


        return redirect()->back()->with('success','Dish added successfully');
    }

    public function editdish($id)
    {
        $dish = Dishes::find($id);
        return view('edit',['dish'=>$dish]);
    }
    public function updatedish(Request $request){
        $dish = Dishes::find($request->id);
        $dish->name = $request->dish;
        $dish->type = $request->type;
        $dish->category = $request->Category;
        $dish->price = $request->price;
        $dish->description = $request->description;
        $dish->video = $request->video;
        $dish->save();

        return redirect('dish')->with('success','Dish Updated Successfully');
    }

    public function deletedish($id){
        $dish = Dishes::find($id);
        unlink('images/'.$dish->image);
        unlink('thumbnail/'.$dish->thumbnail);
        $dish->delete();
        return redirect('dish')->with('success','Dish Deleted Successfully');
    }

    public function menu(Request $request){
        if($request->search!=''){
            $dish = Dishes::where('name','LIKE','%'.$request->search.'%')->get();
        }
        else{
            $dish = Dishes::all();
        }
        return view('menu',['dishes' => $dish]);
    }

    public function details($id)
    {
        $dish = Dishes::find($id);
        return view('details',['dish' => $dish]);
    }

    public function img($id){

        $dish = Dishes::find($id);
        return view('change',['dish' => $dish,'type' => 'Image']);
    }
    public function imgchange(Request $request){
            $dish = Dishes::find($request->id);
            unlink('images/'.$dish->image);

            $dish->image = $request->file('images')->getClientOriginalName();
            $dish->update();

            $images = $request->file('images');
            $images->move(public_path('images'), $images->getClientOriginalName());

            return redirect('dish')->with('success','Image Updated Successfully');
    }

    public function thumb(Request $request,$id){
        $dish = Dishes::find($id);
        return view('change',['dish' => $dish,'type' => 'Thumbnail']);
    }

    public function thumbchange(Request $request){
        $dish = Dishes::find($request->id);
        unlink('thumbnail/'.$dish->thumbnail);

        $dish->thumbnail = $request->file('images')->getClientOriginalName();
        $dish->update();

        $images = $request->file('images');
        $images->move(public_path('thumbnail'), $images->getClientOriginalName());

        return redirect('dish')->with('success','Thumbnail Updated Successfully');
    }

    public function contact(Request $request){

        Mail::send('emails.contact', ['user' => $request], function ($m) use ($request) {
            $m->from(env('MAIL_FROM_ADDRESS'), $request->name);
            $m->to(env('MAIL_FROM_ADDRESS'), $request->name)->subject($request->subject);
        });

        return redirect('/contact')->with('success','Message Sent Successfully');
    }
}
