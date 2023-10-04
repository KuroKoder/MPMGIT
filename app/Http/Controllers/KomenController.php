<?php

namespace App\Http\Controllers;

use App\Models\Komen;
use App\Models\Posting;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class KomenController extends Controller
{
    public function store(Request $request)
    {
        // dd($request->all());
        if(Auth::check())
        {
            $validator = Validator::make($request->all(), [
                'comment' => 'required|string'
            ]);
            if($validator->fails())
            {
                return redirect()->back()->with('message', 'Comment area is mandetory');
            }
            $post = Posting::where('slug', $request->post_slug)->first();
            if($post)
            {
                Komen::create([
                    'post_id' => $post->id,
                    'user_id' => Auth::user()->id,
                    'comment' => $request->comment

                ]);
                return redirect()->back()->with('message', 'Commented Successfully');
            }
            else
            {
                return redirect()->back()->with('message', 'No Such Post Found');
            }
        }
        else
        {
            return redirect('login')->with('message', 'No Such Post Found');
        }
        // $comment = new Komen();
        // $comment->body=$request->input('body');
        // $comment->user_id=Auth::id();
        // $comment->parent_id=$request->input('parent_id');
        // $comment->save();

        // $request->validate([
        //     'body' => 'required|max:255',
        // ]);

        // return redirect()->back();
    }
}
