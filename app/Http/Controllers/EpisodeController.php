<?php

namespace App\Http\Controllers;

use App\Models\Episode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class EpisodeController extends Controller
{
    //
    public function createEpisode(Request $req)
    {
        $rules = [
            'movieID' => 'required',
            'episode' => 'required',
            'title' => 'required'
        ];

        $validator = Validator::make($req->all(), $rules);

        if($validator->fails()){
            return back()-> withErrors($validator);
        }

        $episode = new Episode();
        $episode->movie_id = $req->movieID;
        $episode->episode = $req->episode;
        $episode->title = $req->title;

        $episode->save();

        return redirect()->back();
    }
}
