<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\Post;

use Illuminate\Support\Facades\Auth;
class HomeController extends Controller
{
    public function index(){
        if(Auth::id()){
            $post=Post::where('post_staus','=','active')->get();
            $usertype=Auth()->user()->usertype;
       
        if($usertype=='user'){
            return view('home.homepage',compact('post'));
        }
        else if($usertype=='admin'){
            return view('admin.adminhome');
        }
        else {
            return redirect()->back();
        }
    }
    }

    public function homepage(){
        $post=Post::where('post_staus','=','active')->get();
        return view('home.homepage',compact('post'));
    }
    public function post_details($id){
        $post=Post::find($id);
        return view('home.post_details',compact('post'));
    }
    public function create_post (){
        return view('home.create_post');
    }

    public function user_post(Request $request){

        $user=Auth()->user();
        $userid=$user->id;
        $name=$user->name;
        $usertype=$user->usertype;
        $post=new Post();
        $post->title=$request->title;
        $post->title=$request->title;
        $post->description=$request->description;
        $post->post_staus="pending";
        $post->user_id=$userid;
        $post->name=$name;
        $post->usertype=$usertype;
        $image = $request->image;
        if($image){

            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $post->image = $imagename;
        }

        $post->save();
        return redirect()->back();

    }
    public function my_post (){
        $user=Auth::user();
        $userid=$user->id;
        $data=Post::where('user_id','=',$userid)->get();
        return view('home.my_post',compact('data'));
    }
    public function my_post_del($id){
        $post=Post::find($id);
        $post->delete();
        return redirect()->back();
    }
    public function user_edit_post($id){
        $post =Post::find($id);
        return view('home.user_edit_post',compact("post"));
    } 
    public function user_update_post(Request $request,$id){
        $data=Post::find($id);
        $data->title=$request->title;
        $data->description=$request->description;
        $image=$request->image;
        if($image){
            $imagename = time() . '.' . $image->getClientOriginalExtension();
            $request->image->move('postimage', $imagename);
            $data->image = $imagename;
        }
        $data->save();
        return redirect()->back();
    }
}