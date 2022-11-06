<?php

namespace App\Http\Controllers;

use App\Models\Movie;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class MovieController extends Controller
{
    //
    public function index(){
        $movies = Movie::all();
        return view('index', ['movies'=> $movies]);
    }

    public function home(){
        $movies = Movie::all();
        return view('home', ['movies'=> $movies]);
    }

    public function update(){
        $movies = Movie::all();
        return view('update', ['movies'=> $movies]);
    }


    public function createMovie(Request $req){

        $rules = [
            'image' => 'required',
            'title' => 'required',
            'description' => 'required| min : 5'
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return back()-> withErrors($validator);
        }


        $file = $req->file('image');

        $imageName = time().'.'.$file->getClientOriginalExtension();
        Storage::putFileAs('public/images', $file, $imageName);
        $imageName = 'images/'.$imageName;

        $movie = new Movie();
        $movie->title = $req->title;
        $movie->description = $req->description;
        $movie->image = $imageName;

        $movie->save();

        return redirect()->back();

    }

    public function updateMovie(Request $req){

        $rules = [
             'id' => 'required',
            'title' => 'required',
            'description' => 'required| min : 5'
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return back()-> withErrors($validator);
        }

        $file = $req->file('image');
        $movie = Movie::find($req->id);





        $movie->title = $req->title != null ? $req->title : $movie->title;
        $movie->description = $req->description != null ? $req->description : $movie->description;

        if($file != null){

            $imageName = time().'.'.$file->getClientOriginalExtension();
            Storage::putFileAs('public/images', $file, $imageName);
            $imageName = 'images/'.$imageName;



            Storage::delete('public/'.$movie->image);
            $movie->image = $imageName;
        }

        else {
            $movie->image = $movie->image;

        }



        $movie->save();

        return redirect()->back();
    }

    public function deleteMovie($id){
        $movie = Movie::find($id);

        if(isset($movie)){
            Storage::delete('public/'.$movie->image);
            $movie->delete();
        }
        return redirect()->back();

    }
}
