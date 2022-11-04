<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\sung;
use App\Models\sung_inquiry;
use App\Models\sung_post;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class SungController extends Controller
{   
    public function index(){
        $notice = sung::orderBy('id','desc') -> paginate(6);
        $review = sung_post::orderBy('id','desc') -> paginate(6);

        return view('index',['notice' => $notice, 'review' => $review]);
    }


    public function notice(){
        $notice = sung::orderBy('id','desc') -> get();

        return view('notice',['notice' => $notice]);
    }

    public function save(Request $request){
        $validation = $request -> validate([
            'username' => 'required',
            'title' => 'required',
            'content' => 'required',
        ]);

        $notice = new sung();
        $notice -> username = $validation['username'];
        $notice -> title = $validation['title'];
        $notice -> content = $validation['content'];

        $notice -> save();

        return redirect() -> route('home');
    }

    public function view($id){
        $notice = sung::where('id','=',$id) -> first();

        return view('notice_view',['notice' => $notice]);
    }

    public function inquiry(Request $request){
        $inquiry = new sung_inquiry();
        $inquiry -> name = $request -> input('name');
        $inquiry -> phone = $request -> input('phone');
        $inquiry -> email = $request -> input('Email');
        $inquiry -> content = $request -> input('content');
        $inquiry -> save();

        return redirect() -> route('inquiry');
    }



    public function review(){
        $review = sung_post::orderBy('id','desc') -> paginate(10);

        return view('review',['reviews' => $review]);
    }

    public function review_save(Request $request){

        $validation = $request -> validate([
            'password' => 'required|min:8|max:16'
        ]);
/*         $post = $request -> all();
        sung_post::create($post); */
        $inquiry = new sung_post();
        $inquiry -> title = $request -> input('title');
        $inquiry -> name = $request -> input('name');
        $inquiry -> password = Hash::make($validation['password']);
        $inquiry -> description = $request -> input('description');
        $inquiry -> count = 0;
        $inquiry -> save();

        return redirect('review');
    }

    public function review_view($id){
        $review = sung_post::where('id', $id) ->first();
        $review -> count += 1;
        $review -> update();

        return view('review_view',compact('review'));
    }

    public function review_search(Request $request){
        $select = $request -> select;
        $input = $request -> input;

        if($select == 'title'){
            $result = sung_post::where('title','like',"%".$input."%") ->get();
        }
        if($select == 'name'){
            $result = sung_post::where('name',$input) ->get();
        }
        return response($result);
    }

    public function review_modify(Request $request, $id){
        $input = $request -> input('password');
        $modify = sung_post::where('id',$id) ->first();

        if(Hash::check($input, $modify -> password) ){
            return view('review_update',compact('modify'));
        }
        else{
            return redirect() -> back() -> with('jsAlert',"비밀번호가 틀립니다");
        }
    }

    public function review_update(Request $request, $id){
        $validation = $request -> validate([
            'password' => 'required|min:8|max:16'
        ]);
/*         $post = $request -> all();
        sung_post::create($post); */
        $review = sung_post::where('id',$id) -> first();
        $review -> title = $request -> input('title');
        $review -> name = $request -> input('name');
        $review -> password = Hash::make($validation['password']);
        $review -> description = $request -> input('description');

        $review -> update();

        return redirect() -> Route('review_view', $review -> id);
    }

    public function review_delete(Request $request, $id){
        $input = $request -> input('password');
        $review = sung_post::where('id',$id) ->first();

        if(Hash::check($input, $review -> password) ){
            $review -> delete();
            return redirect() -> route('review');
        }
        else{
            return redirect() -> back() -> with('jsAlert',"비밀번호가 틀립니다");
        }
    }
}
